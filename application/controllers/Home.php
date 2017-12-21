<?php 
Class Home extends MY_Controller
{
	function index(){
		//load slide trên trang chủ
		$this->load->model('slide_model');
		$slide_list = $this->slide_model->get_list();
		$this->data['slide_list'] = $slide_list;
		
		//load tin tuc trên trang chủ
		// $this->load->model('news_model');
		// $news_list = $this->news_model->get_list();
		// $this->data['news_list'] = $news_list;

		$this->data['temp'] = 'site/home/index';		
		$this->load->view('site/layout',$this->data);
	}
}