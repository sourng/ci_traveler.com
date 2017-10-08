<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Posts Management class created by CodexWorld
 */
class Cars extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('Crud_model','m_crud');
        $this->load->database();
        
        $this->load->helper('url');
    }
    
    public function index(){

        $data = array();
       $data['settings']=$this->m_crud->get_by_sql("SELECT * FROM settings");

        $data['style_home']="inc/v_style_home";
        $data['header_top']="inc/v_header_top";
        $data['nav']="inc/v_nav";
        $data['page']="cars/v_cars";
        $data['footer']="inc/v_footer";
        $data['script_footer_home']="inc/v_script_footer_home";

        $this->load->view('v_template_cars',$data);
    }
    public function cars_details(){

        $data = array();
      
        $data['style_home']="inc/v_style_home";
        $data['header_top']="inc/v_header_top";
        $data['nav']="inc/v_nav";
        $data['page']="cars/v_cars_details";
        $data['footer']="inc/v_footer";
        $data['script_footer_home']="inc/v_script_footer_home";

        $this->load->view('v_template_cars',$data);
    }
    public function cars_payment(){

        $data = array();
      
        $data['style_home']="inc/v_style_home";
        $data['header_top']="inc/v_header_top";
        $data['nav']="inc/v_nav";
        $data['page']="cars/v_cars_payment";
        $data['footer']="inc/v_footer";
        $data['script_footer_home']="inc/v_script_footer_home";

        $this->load->view('v_template_cars',$data);
    }
    public function cars_payment_registered_card(){

        $data = array();
      
        $data['style_home']="inc/v_style_home";
        $data['header_top']="inc/v_header_top";
        $data['nav']="inc/v_nav";
        $data['page']="cars/v_cars_payment_registered_card";
        $data['footer']="inc/v_footer";
        $data['script_footer_home']="inc/v_script_footer_home";

        $this->load->view('v_template_cars',$data);
    }
    public function cars_payment_unregistered(){

        $data = array();
      
        $data['style_home']="inc/v_style_home";
        $data['header_top']="inc/v_header_top";
        $data['nav']="inc/v_nav";
        $data['page']="cars/v_cars_payment_unregistered";
        $data['footer']="inc/v_footer";
        $data['script_footer_home']="inc/v_script_footer_home";

        $this->load->view('v_template_cars',$data);
    }
    public function cars_search(){

        $data = array();
      
        $data['style_home']="inc/v_style_home";
        $data['header_top']="inc/v_header_top";
        $data['nav']="inc/v_nav";
        $data['page']="cars/v_cars_search";
        $data['footer']="inc/v_footer";
        $data['script_footer_home']="inc/v_script_footer_home";

        $this->load->view('v_template_cars',$data);
    }
    public function cars_results(){

        $data = array();
      
        $data['style_home']="inc/v_style_home";
        $data['header_top']="inc/v_header_top";
        $data['nav']="inc/v_nav";
        $data['page']="cars/v_cars_results";
        $data['footer']="inc/v_footer";
        $data['script_footer_home']="inc/v_script_footer_home";

        $this->load->view('v_template_cars',$data);
    }
}

    ?>
  