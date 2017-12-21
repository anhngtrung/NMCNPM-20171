<?php  
Class MY_Controller extends CI_Controller
{

	//biến gửi dl sang bên view
	public $data = array();



	function __construct()
	{
		//ke thua tu CI_Controller
		parent::__construct();

		$controller = $this->uri->segment(1);
		switch ($controller) {
			case 'admin':
				// xu ly cac du lieu khi trang admin
				$this->load->helper('admin');
				$this->_check_Login();
				break;
			
			default:
				//xu ly du lieu o trang ngoai
				
				//lấy danh sách bài viết
				$this->load->model('news_model');
				$input = array();
				$input['limit'] = array(4,0);
				$news_list = $this->news_model->get_list($input);
				$this->data['news_list'] = $news_list;
				

				//kiem tra thanh vien da dang nhap chua
				$user_id_login = $this->session->userdata('user_id_login');
				$this->data['user_id_login'] = $user_id_login;
				//dang nhap thanh cong thi lay info
				if($user_id_login){
					$this->load->model('user_model');
					$user_info = $this->user_model->get_info($user_id_login);
					$this->data['user_info'] = $user_info;
				}

				//gọi tới thư viện
				$this->load->library('cart');
				$this->data['total_items'] = $this->cart->total_items();
				break;
		}
	}


	//Kiem tra trang thai dang nhap là admin/ student
	private function _check_Login()
	{
		$controller = $this->uri->rsegment('1');
		$controller = strtolower($controller);

		$login = $this->session->userdata('login');
		//nếu chưa đăng nhập mà truy cập 1 controller khác login
		if(!$login && $controller !='login'){
			redirect(admin_url('login'));
		}
		//nếu đã truy cập vào rồi mà vẫn nhấn login thì quay về trang chủ
		if($login && $controller == 'login'){
			redirect(admin_url('home'));
		}
	}
}