<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rentals extends CI_Controller {

	 function __construct() {
        parent::__construct();
        // $this->load->model('post');
        // $this->load->library('Ajax_pagination');
        // $this->perPage = 2;
        $this->load->helper('url');
    }
	public function index()
	{
		$data = array();
		$data['style_home']="inc/v_style_home";
		$data['script_footer_home']="inc/v_script_footer_home";
		$data['footer']="inc/v_footer";
		$data['nav']="inc/v_nav";
		$data['header_top']="inc/v_header_top";
		$data['left_menu']="rentals/v_rentals_left_menu";
		$data['booking_list']="rentals/v_rentals_booking_list";
		$data['container']="rentals/v_rentals_container";

		$this->load->view('v_template_rentals',$data);
	}

	public function rentals_details(){
		$data = array();
		$data['container']="rentals/v_rentals_details";
		$data['style_home']="inc/v_style_home";
		$data['script_footer_home']="inc/v_script_footer_home";
		$data['footer']="inc/v_footer";
		$data['nav']="inc/v_nav";
		$data['header_top']="inc/v_header_top";
		$data['review_list']="rentals/v_rentals_details_booking_review_list";
		$data['booking_slider']="rentals/v_rentals_details_booking_slider";

		$this->load->view('v_template_rentals',$data);
	}

	public function rentals_payment(){
		$data = array();
		$data['style_home']="inc/v_style_home";
		$data['script_footer_home']="inc/v_script_footer_home";
		$data['footer']="inc/v_footer";
		$data['nav']="inc/v_nav";
		$data['header_top']="inc/v_header_top";
		$data['container']="rentals/v_rentals_payment_container";

		$this->load->view('v_template_rentals',$data);
	}

	public function rentals_payment_registered_card(){
		$data = array();
		$data['style_home']="inc/v_style_home";
		$data['script_footer_home']="inc/v_script_footer_home";
		$data['footer']="inc/v_footer";
		$data['nav']="inc/v_nav";
		$data['header_top']="inc/v_header_top";
		$data['container']="rentals/v_rentals_payment_registered_card_container";

		$this->load->view('v_template_rentals',$data);
	}

	public function rentals_payment_unregistered(){
		$data = array();
		$data['style_home']="inc/v_style_home";
		$data['script_footer_home']="inc/v_script_footer_home";
		$data['footer']="inc/v_footer";
		$data['nav']="inc/v_nav";
		$data['header_top']="inc/v_header_top";
		$data['container']="rentals/v_rentals_payment_unregistered_contianer";

		$this->load->view('v_template_rentals',$data);
	}

	public function rentals_search(){
		$data = array();
		$data['style_home']="inc/v_style_home";
		$data['script_footer_home']="inc/v_script_footer_home";
		$data['footer']="inc/v_footer";
		$data['nav']="inc/v_nav";
		$data['header_top']="inc/v_header_top";
		$data['container']="rentals/v_rentals_search_container";
		$data['top_deals']="rentals/v_rentals_search_top_deals";
		$data['top_destinations']="rentals/v_rentals_search_top_destinations";

		$this->load->view('v_template_rentals',$data);
	}

	public function rentals_result_3(){
		$data = array();
		$data['style_home']="inc/v_style_home";
		$data['script_footer_home']="inc/v_script_footer_home";
		$data['footer']="inc/v_footer";
		$data['nav']="inc/v_nav";
		$data['header_top']="inc/v_header_top";
		$data['container']="rentals/v_rentals_result3_container";
		$data['menu_left']="rentals/v_rentals_result3_menu_left";
		$data['booking_sort_price']="rentals/v_rentals_result3_booking_sort_price";
		
		$this->load->view('v_template_rentals',$data);
	}
}
