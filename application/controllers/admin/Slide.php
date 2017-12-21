<?php 
Class Slide extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('slide_model');
	}

	//lấy ra danh sách slide
	function index()
	{
		//lấy tổng số các slide trong web
		$total_rows=$this->slide_model->get_total();
		$this->data['total_rows']=$total_rows;
				
		$input = array();
		
		//lấy danh sách slide
		$list = $this->slide_model->get_list($input);
		$this->data['list']=$list;

		
		// lấy nội dung biến message
		$message = $this->session->flashdata('message');
		$this->data['message']=$message;

		//load view
		$this->data['temp']='admin/slide/index';
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
			$this->form_validation->set_rules('name','Tiêu đề','required');
			
			//return true nếu nhập chuẩn
			if($this->form_validation->run())
			{
				//lấy tên file ảnh minh họa
				$this->load->library('upload_library');
				$upload_path = './upload/slide';
				$upload_data = $this->upload_library->upload($upload_path,'image');
				$image_link = '';
				if(isset($upload_data['file_name'])){
					$image_link = $upload_data['file_name'];
				}
				
				//lưu dữ liệu cần thêm
				$data=array(
					'name' => $this->input->post('name'),
					'image_link'=> $image_link,
					'link'=> $this->input->post('link'),
					'info'=> $this->input->post('info'),
					'subtitle_1' =>$this->input->post('subtitle_1'),
					'subtitle_2' =>$this->input->post('subtitle_2'),
					'subtitle_3' =>$this->input->post('subtitle_3'),
					'sort_order' => $this->input->post('sort_order')					
				);
				
				if($this->slide_model->create($data))
				{
					$this->session->set_flashdata('message','Thêm mới thành công');
				} else{
					$this->session->set_flashdata('message','Thêm mới không thành công');
				}

				//chuyển tới danh sách admin
				redirect(admin_url('slide'));
			}
		}
		
		$this->data['temp']='admin/slide/add';
		$this->load->view('admin/main',$this->data);
	}


	// sửa thông tin thiết bị
	function edit()
	{

		//load thư viện validate dữ liệu
		$this->load->library('form_validation');
		$this->load->helper('form');

		$id = $this->uri->rsegment('3');
		$slide = $this->slide_model->get_info($id);
		
		if(!$slide){
			//tạo ra nội dung thông báo
			
			$this->session->set_flashdata('message','Không tồn tại bài viết này');
			redirect(admin_url('slide'));
		}
		

		$this->data['slide'] = $slide;
		

		//nếu có dữ liệu post lên thì kiểm tra
		if($this->input->post())
		{
			$this->form_validation->set_rules('name','Tên slide','required');
			
			//return true nếu nhập chuẩn
			if($this->form_validation->run())
			{
				
				//lấy tên file ảnh minh họa
				$this->load->library('upload_library');
				$upload_path = './upload/slide';
				$upload_data = $this->upload_library->upload($upload_path,'image');
				$image_link = '';
				if(isset($upload_data['file_name'])){
					$image_link = $upload_data['file_name'];
				}
						
				$name = $this->input->post('name');		
				//lưu dữ liệu cần thêm				
				$data=array(
					'name' => $name,
					'link'=> $this->input->post('link'),
					'info'=> $this->input->post('info'),
					'subtitle_1' =>$this->input->post('subtitle_1'),
					'subtitle_2' =>$this->input->post('subtitle_2'),
					'subtitle_3' =>$this->input->post('subtitle_3'),
					'sort_order' => $this->input->post('sort_order')					
				);
				if($image_link !=''){
					$data['image_link'] = $image_link;
				}
				
				if($this->slide_model->update($id,$data))
				{
					$this->session->set_flashdata('message','Cập nhật thành công');
				} else{
					$this->session->set_flashdata('message','Cập nhật không thành công');
				}

				//chuyển tới danh sách admin
				redirect(admin_url('slide'));
			}
		}		
		$this->data['temp']='admin/slide/edit';
		$this->load->view('admin/main',$this->data);
	}

	// xóa thiết bị
	function delete()
	{
		$id = $this->uri->rsegment(3);
		$slide = $this->slide_model->get_info($id);
		if(!$slide){
			//tạo ra nội dung thông báo
			$this->session->set_flashdata('message','Không tồn tại thiết bị');
			redirect(admin_url('slide'));
		}
		//thực hiện xóa TB
		$this->slide_model->delete($id);
		//xóa các ảnh minh họa của thiết bị
		$image_link = './upload/slide/'.$slide->image_link;
		if(file_exists($image_link)){
			unlink($image_link);
		}
		//xóa các ảnh kèm theo của thiết bị
		$image_list = json_decode($slide->image_list);
		if(is_array($image_list)){
			foreach ($image_list as $img) {
				$image_link ='./upload/slide/'.$img;
				if(file_exists($image_link)){
					unlink($image_link);
				}
			}
		}
		//tạo ra nội dung thông báo
		$this->session->set_flashdata('message','Xóa thành công');
		redirect(admin_url('slide'));
	}
}