<?php 
Class News extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('news_model');
	}

	//lấy ra danh sách thiết bị
	function index()
	{
		//lấy tổng số các thiết bị trong web
		$total_rows=$this->news_model->get_total();
		$this->data['total_rows']=$total_rows;
		
		// phân trang, do số lượng thiết bị lớn
		$this->load->library('pagination');
		$config = array();
		$config['total_rows']=$total_rows; //tổng tất cả thiết bị 
		$config['base_url']=admin_url('news/index');
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

		$title = $this->input->get('title');
		if($title){
			$input['like']=array('title',$title);
		}

		
		//lấy danh sách thiết bị
		$list = $this->news_model->get_list($input);
		$this->data['list']=$list;

		
		// lấy nội dung biến message
		$message = $this->session->flashdata('message');
		$this->data['message']=$message;

		//load view
		$this->data['temp']='admin/news/index';
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
			$this->form_validation->set_rules('title','Tiêu đề','required');
			$this->form_validation->set_rules('content','Nội dung','required');
			
			//return true nếu nhập chuẩn
			if($this->form_validation->run())
			{
				//lấy tên file ảnh minh họa
				$this->load->library('upload_library');
				$upload_path = './upload/news';
				$upload_data = $this->upload_library->upload($upload_path,'image');
				$image_link = '';
				if(isset($upload_data['file_name'])){
					$image_link = $upload_data['file_name'];
				}
				
				//lưu dữ liệu cần thêm
				$data=array(
					'title' => $this->input->post('title'),
					'image_link'=> $image_link,
					'meta_desc'=> $this->input->post('meta_desc'),
					'meta_key'=> $this->input->post('meta_key'),
					'content' => $this->input->post('content'),
					'created' => now()
				);
				
				if($this->news_model->create($data))
				{
					$this->session->set_flashdata('message','Thêm mới thành công');
				} else{
					$this->session->set_flashdata('message','Thêm mới không thành công');
				}

				//chuyển tới danh sách admin
				redirect(admin_url('news'));
			}
		}
		
		$this->data['temp']='admin/news/add';
		$this->load->view('admin/main',$this->data);
	}


	// sửa thông tin thiết bị
	function edit()
	{
		$id = $this->uri->rsegment('3');
		$news = $this->news_model->get_info($id);
		
		if(!$news){
			//tạo ra nội dung thông báo
			$this->session->set_flashdata('message','Không tồn tại bài viết này');
			redirect(admin_url('news'));
		}

		$this->data['news'] = $news;
		//load thư viện validate dữ liệu
		$this->load->library('form_validation');
		$this->load->helper('form');

		//nếu có dữ liệu post lên thì kiểm tra
		if($this->input->post())
		{
			$this->form_validation->set_rules('title','Tiêu đề','required');
			$this->form_validation->set_rules('content','Nội dung','required');
			
			//return true nếu nhập chuẩn
			if($this->form_validation->run())
			{
				
				//lấy tên file ảnh minh họa
				$this->load->library('upload_library');
				$upload_path = './upload/news';
				$upload_data = $this->upload_library->upload($upload_path,'image');
				$image_link = '';
				if(isset($upload_data['file_name'])){
					$image_link = $upload_data['file_name'];
				}
								
				//lưu dữ liệu cần thêm				
				$data=array(
					'title' => $this->input->post('title'),
					'meta_desc'=> $this->input->post('meta_desc'),
					'meta_key'=> $this->input->post('meta_key'),
					'content' => $this->input->post('content'),
					'created' => now()
				);
				
				if($image_link !=''){
					$data['image_link'] = $image_link;
				}
				
				if($this->news_model->update($news->id,$data))
				{
					$this->session->set_flashdata('message','Cập nhật thành công');
				} else{
					$this->session->set_flashdata('message','Cập nhật không thành công');
				}

				//chuyển tới danh sách admin
				redirect(admin_url('news'));
			}
		}		
		$this->data['temp']='admin/news/edit';
		$this->load->view('admin/main',$this->data);
	}

	// xóa thiết bị
	function delete()
	{
		$id = $this->uri->rsegment(3);
		$news = $this->news_model->get_info($id);
		if(!$news){
			//tạo ra nội dung thông báo
			$this->session->set_flashdata('message','Không tồn tại thiết bị');
			redirect(admin_url('news'));
		}
		//thực hiện xóa TB
		$this->news_model->delete($id);
		//xóa các ảnh minh họa của thiết bị
		$image_link = './upload/news/'.$news->image_link;
		if(file_exists($image_link)){
			unlink($image_link);
		}
		//xóa các ảnh kèm theo của thiết bị
		$image_list = json_decode($news->image_list);
		if(is_array($image_list)){
			foreach ($image_list as $img) {
				$image_link ='./upload/news/'.$img;
				if(file_exists($image_link)){
					unlink($image_link);
				}
			}
		}
		//tạo ra nội dung thông báo
		$this->session->set_flashdata('message','Xóa thành công');
		redirect(admin_url('news'));
	}
}