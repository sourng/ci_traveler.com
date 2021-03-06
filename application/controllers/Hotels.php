<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Posts Management class created by CodexWorld
 */
class Hotels extends CI_Controller {
    
    function __construct() {
        parent::__construct();

        $this->load->model('Crud_model','m_crud');
        $this->load->database();

        // $this->load->model('post');
        // $this->load->library('Ajax_pagination');
        // $this->perPage = 2;
        $this->load->helper('url');
    }
    
    public function index(){

     
      	$data = array();
        $data['settings']=$this->m_crud->get_by_sql("SELECT * FROM settings");
      
      	$data['style_home']="inc/v_style_home";
      	$data['header_top']="inc/v_header_top";
      	$data['nav']="inc/v_nav";


        $data['change_search']="hotels_layout/v_change_search";
        $data['menu_left_hotel']="hotels_layout/v_menu_left_hotels";


		$data['page']="hotels/v_hotels";

        $data['footer']="inc/v_footer";
		$data['script_footer_home']="inc/v_script_footer_home";

        $this->load->view('v_template_hotels',$data);
    }
    
    public function hotels_details(){

        $data = array();
        $data['settings']=$this->m_crud->get_by_sql("SELECT * FROM settings");

        $data['style_home']="inc/v_style_home";
        $data['header_top']="inc/v_header_top";
        $data['nav']="inc/v_nav";

        $data['slide']="hotels_layout/v_slide_hotels_details";
        $data['exeptional']="hotels_layout/v_exeptional_hotels_details";
        $data['available_room']="hotels_layout/v_hotels_available_room";
        $data['review']="hotels_layout/v_hotels_review";
        $data['hotels_near']="hotels_layout/v_hotels_near";
        $data['write_review']="hotels_layout/v_write_review";


        $data['page']="hotels/v_hotels_details";

        $data['footer']="inc/v_footer";
        $data['script_footer_home']="inc/v_script_footer_home";

        $this->load->view('v_template_hotels',$data);
        
    }

    public function payment(){

        $data = array();
        $data['settings']=$this->m_crud->get_by_sql("SELECT * FROM settings");

        $data['style_home']="inc/v_style_home";
        $data['header_top']="inc/v_header_top";
        $data['nav']="inc/v_nav";
        
        $data['paypal']="hotels_layout/v_payment_paypal_left";
        $data['payment_form']="hotels_layout/v_payment_form_middle";
        $data['payment_right']="hotels_layout/v_payment_form_right";

        $data['page']="hotels/v_hotels_payment";

        $data['footer']="inc/v_footer";
        $data['script_footer_home']="inc/v_script_footer_home";

        $this->load->view('v_template_hotels',$data);
        
    }

    public function payment_registered(){

        $data = array();
         $data['settings']=$this->m_crud->get_by_sql("SELECT * FROM settings");
      
        $data['style_home']="inc/v_style_home";
        $data['header_top']="inc/v_header_top";
        $data['nav']="inc/v_nav";
        
        $data['paypal']="hotels_layout/v_payment_paypal_left";
        $data['registered_middle']="hotels_layout/v_payment_registered_form_middle";
        $data['payment_form']="hotels_layout/v_payment_form_middle";
        $data['payment_right']="hotels_layout/v_payment_form_right";


        $data['page']="hotels/v_hotels_payment_registered_card";

        $data['footer']="inc/v_footer";
        $data['script_footer_home']="inc/v_script_footer_home";

        $this->load->view('v_template_hotels',$data);
        
    }
    
    public function payment_unregistered(){

        $data = array();
       $data['settings']=$this->m_crud->get_by_sql("SELECT * FROM settings");

        $data['style_home']="inc/v_style_home";
        $data['header_top']="inc/v_header_top";
        $data['nav']="inc/v_nav";
        
        $data['costomer']="hotels_layout/v_payment_unregistered_costomer_form";
        $data['paypal']="hotels_layout/v_payment_paypal_left";
        $data['payment_form']="hotels_layout/v_payment_form_middle";
        $data['payment_right']="hotels_layout/v_payment_form_right";

        $data['page']="hotels/v_hotels_payment_unregistered";

        $data['footer']="inc/v_footer";
        $data['script_footer_home']="inc/v_script_footer_home";

        $this->load->view('v_template_hotels',$data);
        
    }

    public function search(){

        $data = array();
       $data['settings']=$this->m_crud->get_by_sql("SELECT * FROM settings");

        $data['style_home']="inc/v_style_home";
        $data['header_top']="inc/v_header_top";
        $data['nav']="inc/v_nav";
        
        
        $data['page']="hotels/v_hotels_search";

        $data['footer']="inc/v_footer";
        $data['script_footer_home']="inc/v_script_footer_home";

        $this->load->view('v_template_hotels',$data);
        
    }

    public function search_results(){

        $data = array();
       $data['settings']=$this->m_crud->get_by_sql("SELECT * FROM settings");
       
        $data['style_home']="inc/v_style_home";
        $data['header_top']="inc/v_header_top";
        $data['nav']="inc/v_nav";

        $data['menu_left_hotel']="hotels_layout/v_menu_left_hotels";
        
        $data['page']="hotels/v_hotels_search_results";

        $data['footer']="inc/v_footer";
        $data['script_footer_home']="inc/v_script_footer_home";

        $this->load->view('v_template_hotels',$data);
        
    }
    
}