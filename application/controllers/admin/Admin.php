<?php 
Class Admin extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('admin_model');
	}


	// lấy danh sách admin
	function index()
	{
		$input = array();
		$list = $this->admin_model->get_list($input);
		//pre($list); //trong common_helper
		$this->data['list']=$list;

		$total = $this->admin_model->get_total();
		$this->data['total']=$total;

		// lấy nội dung biến message
		$message = $this->session->flashdata('message');
		$this->data['message']=$message;

		$this->data['temp']='admin/admin/index';
		$this->load->view('admin/main',$this->data);
	}

	//check id đã tồn tại chưa
	function check_id()
	{
		$id = $this->input->post('id');
		$where = array('id'=>$id);
		//check_exists trong core/MY_Model
		if($this->admin_model->check_exists($where))
		{
			//thông báo lỗi
			$this->form_validation->set_message(__FUNCTION__, 'Tài khoản đã tồn tại');
			return false;
		} else return true;
	}

	function add()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');

		//nếu có dữ liệu post lên thì kiểm tra
		if($this->input->post())
		{
			$this->form_validation->set_rules('name','Họ và tên','required|min_length[4]');
			$this->form_validation->set_rules('id','Mã admin','required|min_length[4]');
			$this->form_validation->set_rules('email','Email','required|min_length[4]');
			$this->form_validation->set_rules('phone','Số điện thoại','required|min_length[4]');
			$this->form_validation->set_rules('country','Quê quán','required|min_length[4]');
			$this->form_validation->set_rules('password','Mật khẩu','required|min_length[4]');
			$this->form_validation->set_rules('re_password','Nhập lại mật khẩu', 'matches[password]');

			//return true nếu nhập chuẩn
			if($this->form_validation->run())
			{
				//add to database
				$name=$this->input->post('name');
				$id=$this->input->post('id');
				$password=$this->input->post('password');
				$email=$this->input->post('email');
				$phone=$this->input->post('phone');
				$country=$this->input->post('country');
				$data=array(
					'name' => $name,
					'id' => $id,
					'password' => $password,
					// muốn mã hóa mật khẩu > md5($password)
					'email' => $email,
					'phone' => $phone,
					'country' => $country
				);
				if($this->admin_model->create($data))
				{
					$this->session->set_flashdata('message','Thêm mới thành công');
				} else{
					$this->session->set_flashdata('message','Thêm mới không thành công');
				}

				//chuyển tới danh sách admin
				redirect(admin_url('admin'));
			}
		}
		$this->data['temp']='admin/admin/add';
		$this->load->view('admin/main',$this->data);
	}

	//sửa thông tin admin
	function edit()
	{
		$this->load->library('form_validation');
		$this->load->helper('form');


		//lấy id quản trị viên cần chỉnh sửa
		$id=$this->uri->rsegment('3');
		

		//lấy thông  tin quản trị viên
		$info = $this->admin_model->get_info($id);

		if(!$info){
			$this->session->set_flashdata('message','Không tồn tại quản trị viên này');
			redirect(admin_url('admin'));
		}
		$this->data['info']=$info;

		if($this->input->post()){
			$this->form_validation->set_rules('name','Họ và tên','required|min_length[4]');
			$this->form_validation->set_rules('id','Mã admin','required|min_length[4]');
			$this->form_validation->set_rules('email','Email','required|min_length[4]');
			$this->form_validation->set_rules('phone','Số điện thoại','required|min_length[4]');
			$this->form_validation->set_rules('country','Quê quán','required|min_length[4]');
			$password = $this->input->post('password');
			if($password){
				$this->form_validation->set_rules('password','Mật khẩu','required|min_length[4]');
				$this->form_validation->set_rules('re_password','Nhập lại mật khẩu', 'matches[password]');
			}
			//return true nếu nhập chuẩn
			if($this->form_validation->run())
			{
				//add to database
				$name=$this->input->post('name');
				$id=$this->input->post('id');
				
				$email=$this->input->post('email');
				$phone=$this->input->post('phone');
				$country=$this->input->post('country');
				$data=array(
					'name' => $name,
					'id' => $id,
					'email' => $email,
					'phone' => $phone,
					'country' => $country
				);
				//nếu thay đổi password thì sửa lại
				if($password){
					$data['password']=$password;
				}
				if($this->admin_model->update($id, $data))
				{
					$this->session->set_flashdata('message','Cập nhật thành công');
				} else{
					$this->session->set_flashdata('message','Cập nhật không thành công');
				}
				//chuyển tới danh sách admin
				redirect(admin_url('admin'));
			}			

		}
		$this->data['temp']='admin/admin/edit';
		$this->load->view('admin/main',$this->data);
	}
	
	function delete(){
		$id = $this->uri->rsegment('3');
		//lấy thông tin của admin
		$info = $this->admin_model->get_info($id);
		if(!$info){
			$this->session->set_flashdata('message','Không tồn tại QTV');
			redirect(admin_url('admin'));
		}
		//thực hiện xóa
		$this->admin_model->delete($id);
		$this->session->set_flashdata('message','Xóa QTV thành công');
		redirect(admin_url('admin'));
	}

	function logout()
	{
		if($this->session->userdata('login')){
			$this->session->unset_userdata('login');
		}
		redirect(admin_url('login'));
	}
}

	
