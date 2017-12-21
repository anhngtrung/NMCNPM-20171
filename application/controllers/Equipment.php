<?php 
Class Equipment extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		//load model thiết bị
		$this->load->model('equipment_model');
	}

	//hiển thị danh sách theo viện/khoa
	function school()
	{
		//lấy tên viện/khoa
		$id_school = intval($this->uri->rsegment(3));
		switch ($id_school) {
			case '1':
				$school = 'Thiết bị chung';
				$this->data['temp']='site/equipment/tbchung';
				break;
			case '2':
				$school = 'Viện CNTT & TT';
				$this->data['temp']='site/equipment/vien-cntt';
				break;
			case '3':
				$school = 'Khoa GDTC & GDQP';
				$this->data['temp']='site/equipment/gdtc-gdqp';
				break;
			case '4':
				$school = 'Viện Vật lý kỹ thuật';
				$this->data['temp']='site/equipment/vien-vlkt';
				break;
			case '5':
				$school = 'Viện Cơ khí';
				$this->data['temp']='site/equipment/vien-cokhi';
				break;
			case '6':
				$school = 'Viện Toán ứng dụng và Tin học';
				$this->data['temp']='site/equipment/vien-tudth';
				break;
			default:
				# code...
				break;
		}

		$this->data['school'] = $school;
		$input = array();

		
		$input['where'] = array('school'=>$school);

		//lấy ra danh sách các thiết bị của viện trên
		//lấy tổng số các thiết bị trong web
		$total_rows=$this->equipment_model->get_total();
		$this->data['total_rows']=$total_rows;
		
		// phân trang, do số lượng thiết bị lớn
		$this->load->library('pagination');
		$config = array();
		$config['total_rows']=$total_rows; //tổng tất cả thiết bị 
		$config['base_url']=base_url('equipment/school/'.$school);
		$config['per_page']=12; //số lượng thiết bị trên 1 trang
		$config['uri_segment']=4; //phân đoạn hiển thị số trang trên url
		$config['next_link']='Trang kế tiếp';
		$config['pre_link']='Trang trước';

		//khởi tạo cấu hình phân trang
		$this->pagination->initialize($config);
				
		$segment = $this->uri->segment(4);
		$segment = intval($segment);

		
		$input['limit']=array($config['per_page'], $segment);

		//lấy danh sách thiết bị của viện
		$list = $this->equipment_model->get_list($input);
		$this->data['list']=$list;
		
		//hiển thị ra view
		$this->load->view('site/layout', $this->data);
	}

	//tìm kiếm - header
	function search(){
		$key = $this->input->get('key-search');
		$this->data['key'] = trim($key);
		$input=array();
		$input['like'] = array('name',$key);
		$list = $this->equipment_model->get_list($input);
		$this->data['list'] = $list;

		//load view
		$this->data['temp']='site/equipment/search';
		$this->load->view('site/layout',$this->data);
	}


	/*
     * Xem chi tiết sản phẩm
     */
    function view()
    {
        //lay id san pham muon xem
        $id = $this->uri->rsegment(3);
        $equipment = $this->equipment_model->get_info($id);
        if(!$equipment) redirect();
        $this->data['equipment'] = $equipment;
        
        //lấy danh sách ảnh sản phẩm kèm theo
        $image_list = @json_decode($equipment->image_list);
        $this->data['image_list'] = $image_list;
        
        //cap nhat lai luot xem cua san pham
        $data = array();
        $data['view'] = $equipment->view + 1;
        $this->equipment_model->update($equipment->id, $data);
        
        
        //hiển thị ra view
        $this->data['temp'] = 'site/equipment/view';
        $this->load->view('site/layout', $this->data);
    }
}