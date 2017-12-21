<?php
Class Order extends MY_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('order_model');
	}


	//lấy thông tin người mượn và thời gian mượn - trả
	function checkout(){
		//thong tin giỏ
		$carts = $this->cart->contents();
		//tong so thiet bi trong gio
		$total_items = $this->cart->total_items();
		
		if($total_items <=0){
			redirect();
		}

		$user_id = 0;
		$user ='';
		//khi chưa đăng nhập quay lại trang đăng nhập
		if(!$this->session->userdata('user_id_login')){
			redirect(base_url('user/login'));
		}
		//nếu đã đăng nhập > lấy thông tin thành viên
		$user_id = $this->session->userdata('user_id_login');
		$user = $this->user_model->get_info($user_id);


		$this->load->library('form_validation');
        $this->load->helper('form');

		if($this->input->post()){

			$this->form_validation->set_rules('ngay_muon','Ngay muon thiet bi', 'required');
			$this->form_validation->set_rules('ngay_tra','Ngay tra thiet bi', 'required');
			//nhap lieu chinh xac
			if($this->form_validation->run()){

				$dangky = $this->input->post('dangky');

				$this->load->model('order_model');
				//them vao CSDL
				$date = now();
				foreach ($carts as $equipment) {
					$data=array(
						'id_equipment'=>$equipment['id'],
						'id' => $user_id,
						'ngay_muon' => $this->input->post('ngay_muon'),
						'ngay_tra' => $this->input->post('ngay_tra'),
						'count' => $equipment['qty'],
						'created' => $date
					);
					$this->order_model->create($data);
				}
				//xoas toafn bo gio
				$this->cart->destroy();
				//taoj ra noi dung thong bao
				$this->session->set_flashdata('message',"Thanh cong");

				redirect(site_url());
			}
		}

		$this->data['user']=$user;
		$this->data['carts'] = $carts;


		//hien thi ra view
		$this->data['temp']='site/order/checkout';
		$this->load->view('site/layout',$this->data);
	}
}