<?php 
Class Cart extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		//load thư viện
		$this->load->library('cart');
	}

	//thêm thiết bị vào danh sách mượn
	function add(){
		//lấy ra danh sách thiết bị mượn trong gio
		$this->load->model('equipment_model');
		$id = $this->uri->rsegment(3);
		$equipment = $this->equipment_model->get_info($id);
		if(!$equipment)
		{
			redirect();
		}

		//tổng số thiết bị mượn
		$qty = 1;
		$price = 1;
		//thông tin thêm vào giỏ
		$data = array();
		$data['id'] = $equipment->id;
		$data['name'] = url_title($equipment->name);
		$data['qty'] = $qty;
		$data['school'] = $equipment->school;
		$data['image_link'] = $equipment->image_link;
		$data['price'] = $price;
		// pre($data);
		$this->cart->insert($data);

		//chuyển tới trang danh sách thiết bị
		redirect(base_url('cart'));

	}

	//hiển thị danh sách thiết bị trong giỏ
	function index()
	{
		//thông tin tất cả sản phẩm giỏ 
		$carts = $this->cart->contents();
		//tổng số thiết bị trong giỏ
		$total_items = $this->cart->total_items();

		$this->data['carts'] = $carts;
		$this->data['total_items'] = $total_items;

		$this->data['temp'] = 'site/cart/index';
		$this->load->view('site/layout',$this->data);
	}

	//cập nhật giỏ thiết bị
	function update()
	{
		$carts = $this->cart->contents();

		foreach ($carts as $key => $row) {
			$total_qty = $this->input->post('qty_'.$row['id']);
			$data = array();
			$data['rowid'] = $key;
			$data['qty'] = $total_qty;
			$this->cart->update($data);
		}

		//chuyển về trang danh sách thiết bị trong giỏ thiết bị
		redirect(base_url('cart'));
	}


	//xóa thiết bị khỏi danh sách
	function delete()
	{
		$id = $this->uri->rsegment('3');
		
		if($id){
			$carts = $this->cart->contents();

			foreach ($carts as $key => $row) {
				if($id == $row['id']){
					$data = array();
					$data['rowid'] = $key;
					$data['qty'] = 0;
					$this->cart->update($data);
					break;
				}
				
			}
		} else {
			$this->cart->destroy();
		}

		//chuyển về trang danh sách thiết bị trong giỏ thiết bị
		redirect(base_url('cart'));
	}
}