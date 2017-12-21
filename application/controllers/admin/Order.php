<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends MY_Controller {
	
	/**
	 * Ham khoi dong
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model('order_model');
	}


	//lấy ra danh sách đăng ký thiết bị
	function index()
	{
		//lấy tổng số các thiết bị trong web
		$total_rows=$this->order_model->get_total();
		$this->data['total_rows']=$total_rows;
		
		// phân trang, do số lượng đăng ký lớn
		$this->load->library('pagination');
		$config = array();
		$config['total_rows']=$total_rows; //tổng tất cả đăng ký
		$config['base_url']=admin_url('order/index');
		$config['per_page']=10; //số lượng đk trên 1 trang
		$config['uri_segment']=4; //phân đoạn hiển thị số trang trên url
		$config['next_link']='Trang kế tiếp';
		$config['pre_link']='Trang trước';

		//khởi tạo cấu hình phân trang
		$this->pagination->initialize($config);
				
		$segment = $this->uri->segment(4);
		$segment = intval($segment);
		$input = array();
		$input['limit']=array($config['per_page'], $segment);

		//kiểm tra có lọc không
		$id = $this->input->get('id_user');
		
		$input['where']=array();
		// id:mã thành viên
		if($id){
			$input['where']['id']= $id;
		}

		$name = $this->input->get('name');
		if($name){
			$input['like']=array('id_equipment',$name);
		}

		
		//lấy danh sách đăng ký
		$list = $this->order_model->get_list($input);
		$this->data['list']=$list;

		
		// lấy nội dung biến message
		$message = $this->session->flashdata('message');
		$this->data['message']=$message;

		//load view
		$this->data['temp']='admin/order/index';
		$this->load->view('admin/main',$this->data);
	}


	// xóa đăng ký thiết bị
	function delete()
	{
		// id: mã thành viên
		$id = $this->uri->rsegment(3);
		$id_equipment = $this->uri->rsegment(4);
		$created = $this->uri->rsegment(5);

		$input = array();
		$input['where']=array(
			'id' => $id,
			'id_equipment' => $id_equipment,
			'created' => $created
		);

		$list = $this->order_model->get_list($input);
		
		if(!$list){
			//tạo ra nội dung thông báo
			$this->session->set_flashdata('message','Không tồn tại thiết bị');
			redirect(admin_url('order'));
		}
		//thực hiện xóa dang ky
		$this->order_model->del_rule($input['where']);
		
				
		//tạo ra nội dung thông báo
		$this->session->set_flashdata('message','Không tồn tại thiết bị');
		redirect(admin_url('order'));
	}


	// sửa thông tin đăng ký mượn thiết bị
	function edit()
	{
		$id = $this->uri->rsegment('3');
		$id_equipment = $this->uri->rsegment(4);
		$created = $this->uri->rsegment(5);

		$input = array();
		$input['where']=array(
			'id' => $id,
			'id_equipment' => $id_equipment,
			'created' => $created
		);

		$order = $this->order_model->get_info_rule($input['where']);
		
		if(!$order){
			//tạo ra nội dung thông báo
			$this->session->set_flashdata('message','Không tồn tại thiết bị này');
			redirect(admin_url('order'));
		}

		$this->data['order'] = $order;

		$this->load->library('form_validation');
		$this->load->helper('form');

		//nếu có dữ liệu post lên thì kiểm tra
		if($this->input->post())
		{
			
			$this->form_validation->set_rules('count','Số lượng','required');
			$this->form_validation->set_rules('status','Trạng thái','required');
			
			//return true nếu nhập chuẩn
			if($this->form_validation->run())
			{
				//add to database
				
				$count=$this->input->post('count');
				$ngay_muon = $this->input->post('ngay_muon');
				$ngay_tra = $this->input->post('ngay_tra');
				$id_classroom = $this->input->post('id_classroom');
				$status=$this->input->post('status');
				
				$data=array(
					'id' => $id,
					'id_equipment' => $id_equipment,
					'id_classroom' => $id_classroom,
					'ngay_muon' => $ngay_muon,
					'ngay_tra' => $ngay_tra,
					'status' => $status,
					'count' => $count,
					'created' => $created					
				);
				
				if($this->order_model->update_rule($input['where'],$data))
				{
					$this->session->set_flashdata('message','Cập nhật thành công');
				} else{
					$this->session->set_flashdata('message','Cập nhật không thành công');
				}

				//chuyển tới danh sách admin
				redirect(admin_url('order'));
			}
		}

		
		$this->data['temp']='admin/order/edit';
		$this->load->view('admin/main',$this->data);
	}


}