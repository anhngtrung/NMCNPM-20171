<?php 
Class Equipment extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('equipment_model');
	}


	//lấy ra danh sách thiết bị
	function index()
	{
		//lấy tổng số các thiết bị trong web
		$total_rows=$this->equipment_model->get_total();
		$this->data['total_rows']=$total_rows;
		
		// phân trang, do số lượng thiết bị lớn
		$this->load->library('pagination');
		$config = array();
		$config['total_rows']=$total_rows; //tổng tất cả thiết bị 
		$config['base_url']=admin_url('equipment/index');
		$config['per_page']=10; //số lượng thiết bị trên 1 trang
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
		$id = $this->input->get('id');
		
		$input['where']=array();
		if($id){
			$input['where']['id']= $id;
		}

		$name = $this->input->get('name');
		if($name){
			$input['like']=array('name',$name);
		}

		$school = $this->input->get('school');
		if($school){
			$input['where']['school'] = $school;
		}
		//lấy danh sách thiết bị
		$list = $this->equipment_model->get_list($input);
		$this->data['list']=$list;

		
		// lấy nội dung biến message
		$message = $this->session->flashdata('message');
		$this->data['message']=$message;

		//load view
		$this->data['temp']='admin/equipment/index';
		$this->load->view('admin/main',$this->data);
	}

	//thêm thiết bị
	function add()
	{
		
		$this->load->library('form_validation');
		$this->load->helper('form');

		//nếu có dữ liệu post lên thì kiểm tra
		if($this->input->post())
		{
			$this->form_validation->set_rules('name','Tên thiết bị','required');
			$this->form_validation->set_rules('id','Mã thiết bị','required');
			
			//return true nếu nhập chuẩn
			if($this->form_validation->run())
			{
				//add to database
				$name=$this->input->post('name');
				$id=$this->input->post('id');
				$count=$this->input->post('count');
				$date_of_manufacture=$this->input->post('date_of_manufacture');
				$guarantee=$this->input->post('guarantee');
				$school=$this->input->post('school');
				$status=$this->input->post('status');
				$unit=$this->input->post('unit');

				//lấy tên file ảnh minh họa
				$this->load->library('upload_library');
				$upload_path = './upload/equipment';
				$upload_data = $this->upload_library->upload($upload_path,'image');
				$image_link = '';
				if(isset($upload_data['file_name'])){
					$image_link = $upload_data['file_name'];
				}

				//upload cac ảnh kèm theo
				$image_list = array();
				$image_list = $this->upload_library->upload_file($upload_path,'image_list');
				$image_list = json_encode($image_list);
				//lưu dữ liệu cần thêm
				$data=array(
					'name' => $name,
					'id' => $id,
					'count' => $count,
					// muốn mã hóa mật khẩu > md5($password)
					'date_of_manufacture' => $date_of_manufacture,
					'guarantee' => $guarantee,
					'status' => $status,
					'unit' => $unit,
					'image_link'=> $image_link,
					'image_list'=> $image_list,
					'school' => $school
				);
				
				if($this->equipment_model->create($data))
				{
					$this->session->set_flashdata('message','Thêm mới thành công');
				} else{
					$this->session->set_flashdata('message','Thêm mới không thành công');
				}

				//chuyển tới danh sách admin
				redirect(admin_url('equipment'));
			}
		}

		
		$this->data['temp']='admin/equipment/add';
		$this->load->view('admin/main',$this->data);
	}


	// sửa thông tin thiết bị
	function edit()
	{
		$id = $this->uri->rsegment('3');
		$equipment = $this->equipment_model->get_info($id);

		if(!$equipment){
			//tạo ra nội dung thông báo
			$this->session->set_flashdata('message','Không tồn tại thiết bị này');
			redirect(admin_url('equipment'));
		}
		$this->data['equipment'] = $equipment;

		$this->load->library('form_validation');
		$this->load->helper('form');

		//nếu có dữ liệu post lên thì kiểm tra
		if($this->input->post())
		{
			$this->form_validation->set_rules('name','Tên thiết bị','required');
			$this->form_validation->set_rules('id','Mã thiết bị','required');
			
			//return true nếu nhập chuẩn
			if($this->form_validation->run())
			{
				//add to database
				$name=$this->input->post('name');
				$id=$this->input->post('id');
				$count=$this->input->post('count');
				$date_of_manufacture=$this->input->post('date_of_manufacture');
				$guarantee=$this->input->post('guarantee');
				$school=$this->input->post('school');
				$status=$this->input->post('status');
				$unit=$this->input->post('unit');

				//lấy tên file ảnh minh họa
				$this->load->library('upload_library');
				$upload_path = './upload/equipment';
				$upload_data = $this->upload_library->upload($upload_path,'image');
				$image_link = '';
				if(isset($upload_data['file_name'])){
					$image_link = $upload_data['file_name'];
				}
				
				//upload cac ảnh kèm theo
				$image_list = array();
				$image_list = $this->upload_library->upload_file($upload_path,'image_list');
				$image_list_json = json_encode($image_list);
				//lưu dữ liệu cần thêm
				
				$data=array(
					'name' => $name,
					'id' => $id,
					'count' => $count,
					// muốn mã hóa mật khẩu > md5($password)
					'date_of_manufacture' => $date_of_manufacture,
					'guarantee' => $guarantee,
					'status' => $status,
					'unit' => $unit,
					
					'school' => $school
				);
				if($image_link !=''){
					$data['image_link'] = $image_link;
				}
				if(!empty($image_list)){
					$data['image_list'] = $image_list_json;
				}
				if($this->equipment_model->update($equipment->id,$data))
				{
					$this->session->set_flashdata('message','Cập nhật thành công');
				} else{
					$this->session->set_flashdata('message','Cập nhật không thành công');
				}

				//chuyển tới danh sách admin
				redirect(admin_url('equipment'));
			}
		}

		
		$this->data['temp']='admin/equipment/edit';
		$this->load->view('admin/main',$this->data);
	}

	// xóa thiết bị
	function delete()
	{
		$id = $this->uri->rsegment(3);
		$equipment = $this->equipment_model->get_info($id);
		if(!$equipment){
			//tạo ra nội dung thông báo
			$this->session->set_flashdata('message','Không tồn tại thiết bị');
			redirect(admin_url('equipment'));
		}
		//thực hiện xóa TB
		$this->equipment_model->delete($id);
		//xóa các ảnh minh họa của thiết bị
		$image_link = './upload/equipment/'.$equipment->image_link;
		if(file_exists($image_link)){
			unlink($image_link);
		}
		//xóa các ảnh kèm theo của thiết bị
		$image_list = json_decode($equipment->image_list);
		if(is_array($image_list)){
			foreach ($image_list as $img) {
				$image_link ='./upload/equipment/'.$img;
				if(file_exists($image_link)){
					unlink($image_link);
				}
			}
		}
		//tạo ra nội dung thông báo
		$this->session->set_flashdata('message','Không tồn tại thiết bị');
		redirect(admin_url('equipment'));
	}
}