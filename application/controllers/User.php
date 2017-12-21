<?php 
Class User extends MY_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('user_model');
	}

	/*kiem tra dang nhap*/
	function login(){
		//khi đã đăng nhập
		if($this->session->userdata('user_id_login')){
			redirect();
		}

		$this->load->library('form_validation');
		$this->load->helper('form');

		if($this->input->post())
		{
			$this->form_validation->set_rules('login', 'login', 'callback_check_login');
			if($this->form_validation->run()){
				//lay thong tin thanh vien
				$user = $this->_get_user_info();

				$this->session->set_userdata('user_id_login',$user->id);
				$this->session->set_flashdata('message','login successfully');

				redirect();
			}
		}

		//hien thi ra view
		$this->data['temp']='site/user/login';
		$this->load->view('site/layout',$this->data);
	}


	function check_login(){
		
		$user = $this->_get_user_info();
		if($user){

			return true;
		}
		$this->form_validation->set_message(__FUNCTION__,'Đăng nhập không thành công');
		return false; 
	}

	/*Lay thong tin thanh vien*/
	private function _get_user_info(){
		$id = $this->input->post('id');
		$password = $this->input->post('password');

		$this->load->model('user_model');
		$where = array('id' => $id, 'password' => $password);
		$user = $this->user_model->get_info_rule($where);
		return $user;
	}


	/*Đăng xuấ*/
	function logout()
	{
		if($this->session->userdata('user_id_login')){
			$this->session->unset_userdata('user_id_login');
		}
		$this->session->set_flashdata('message','Đăng xuất thành công');
		redirect(base_url('home'));
	}


	/*Profile người sử dụng*/
	function index(){

		if(!$this->session->userdata('user_id_login')){
			redirect();
		}

		//lay thong tin thanh vien
		$user_id = $this->session->userdata('user_id_login');
		$user = $this->user_model->get_info($user_id);
		if(!$user){
			redirect();
		}
		$this->data['user']=$user;

		//hien thi ra view
		$this->data['temp']='site/user/index';
		$this->load->view('site/layout',$this->data);
	}


	/*Chỉnh sửa thông tin cá nhân*/
	function edit(){
		$this->load->library('form_validation');
		$this->load->helper('form');

		//khi chưa đăng nhập quay lại trang đăng nhập
		if(!$this->session->userdata('user_id_login')){
			redirect(base_url('user/login'));
		}

		$user_id = $this->session->userdata('user_id_login');
		$user = $this->user_model->get_info($user_id);
		if(!$user){
			redirect();
		}

		$this->data['user']=$user;

		if($this->input->post()){
			$this->form_validation->set_rules('name','Họ và tên','required|min_length[4]');
			$this->form_validation->set_rules('birthday','Ngày sinh','required|min_length[4]');
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
				$birthday = $this->input->post('birthday');
				$email=$this->input->post('email');
				$phone=$this->input->post('phone');
				$country=$this->input->post('country');

				$data=array(
					'name' => $name,
					'birthday' => $birthday,
					'email' => $email,
					'phone' => $phone,
					'country' => $country
				);
				
				//nếu thay đổi password thì sửa lại
				if($password){
					$data['password']=$password;
				}
				if($this->user_model->update($user_id, $data))
				{
					$this->session->set_flashdata('message','Cập nhật thành công');
					
				} else{
					$this->session->set_flashdata('message','Cập nhật không thành công');
				}

				//chuyển tới trang thông tin cá nhân
				redirect(site_url('user'));
			}
		}

		//hien thi ra view
		$this->data['temp']='site/user/edit';
		$this->load->view('site/layout',$this->data);
	}
}