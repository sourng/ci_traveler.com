<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Posts Management class created by CodexWorld
 */
class Hotels extends CI_Controller {
    
    function __construct() {
        parent::__construct();
<<<<<<< HEAD
=======
        $this->load->model('Crud_model','m_crud');
        $this->load->database();
>>>>>>> 4c1f6787b53b46bc14b9def583db02689bb27a95
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

<<<<<<< HEAD
=======
        $data['change_search']="hotels_layout/v_change_search";
        $data['menu_left_hotel']="hotels_layout/v_menu_left_hotels";

>>>>>>> 4c1f6787b53b46bc14b9def583db02689bb27a95
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

        $data['page']="hotels/v_hotels_details";

        $data['footer']="inc/v_footer";
        $data['script_footer_home']="inc/v_script_footer_home";

        $this->load->view('v_template_hotels',$data);
        
    }

    public function hotels_payment(){

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

    public function hotels_payment_registered(){

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
    
    public function hotels_payment_unregistered(){

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

    public function hotels_search(){

        $data = array();
       $data['settings']=$this->m_crud->get_by_sql("SELECT * FROM settings");

        $data['style_home']="inc/v_style_home";
        $data['header_top']="inc/v_header_top";
        $data['nav']="inc/v_nav";
        
        $data['where']="hotels_layout/v_search_where";
        $data['check']="hotels_layout/v_check_in_out";
        $data['guests']="hotels_layout/v_search_guests";
        $data['room']="hotels_layout/v_search_room";
        $data['page']="hotels/v_hotels_search";

        $data['footer']="inc/v_footer";
        $data['script_footer_home']="inc/v_script_footer_home";

        $this->load->view('v_template_hotels',$data);
        
    }

    public function hotels_search_results(){

        $data = array();
       $data['settings']=$this->m_crud->get_by_sql("SELECT * FROM settings");
       
        $data['style_home']="inc/v_style_home";
        $data['header_top']="inc/v_header_top";
        $data['nav']="inc/v_nav";

        $data['where']="hotels_layout/v_search_where";
        $data['check']="hotels_layout/v_check_in_out";
        $data['guests']="hotels_layout/v_search_guests";
        $data['room']="hotels_layout/v_search_room";
        $data['menu_left_hotel']="hotels_layout/v_menu_left_hotels";
        
        $data['page']="hotels/v_hotels_search_results";

        $data['footer']="inc/v_footer";
        $data['script_footer_home']="inc/v_script_footer_home";

        $this->load->view('v_template_hotels',$data);
        
    }
    
}