<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Posts Management class created by CodexWorld
 */
class Hotels extends CI_Controller {
    
    function __construct() {
        parent::__construct();

        // $this->load->model('post');
        // $this->load->library('Ajax_pagination');
        // $this->perPage = 2;

        $this->load->helper('url');
    }
    
    public function index(){

     
      	$data = array();
      
      	$data['style_home']="inc/v_style_home";
      	$data['header_top']="inc/v_header_top";
      	$data['nav']="inc/v_nav";
        $data['menu_left_hotel']="inc/v_menu_left_hotels";

		    $data['page']="hotels/v_hotels";

        $data['footer']="inc/v_footer";
		    $data['script_footer_home']="inc/v_script_footer_home";

        $this->load->view('v_template_hotels',$data);
    }
    
    public function hotels_details(){

        $data = array();
      
        $data['style_home']="inc/v_style_home";
        $data['header_top']="inc/v_header_top";
        $data['nav']="inc/v_nav";
        $data['slide']="inc/v_slide_hotels_details";
        $data['exeptional']="inc/v_exeptional_hotels_details";
        $data['available_room']="inc/v_hotels_available_room";
        $data['review']="inc/v_hotels_review";

        $data['page']="hotels/v_hotels_details";

        $data['footer']="inc/v_footer";
        $data['script_footer_home']="inc/v_script_footer_home";

        $this->load->view('v_template_hotels',$data);
        
    }

    public function payment(){

        $data = array();
      
        $data['style_home']="inc/v_style_home";
        $data['header_top']="inc/v_header_top";
        $data['nav']="inc/v_nav";
        

        $data['page']="hotels/v_hotels_payment";

        $data['footer']="inc/v_footer";
        $data['script_footer_home']="inc/v_script_footer_home";

        $this->load->view('v_template_hotels',$data);
        
    }

    public function payment_registered(){

        $data = array();
      
        $data['style_home']="inc/v_style_home";
        $data['header_top']="inc/v_header_top";
        $data['nav']="inc/v_nav";
        

        $data['page']="hotels/v_hotels_payment_registered_card";

        $data['footer']="inc/v_footer";
        $data['script_footer_home']="inc/v_script_footer_home";

        $this->load->view('v_template_hotels',$data);
        
    }
    
    public function payment_unregistered(){

        $data = array();
      
        $data['style_home']="inc/v_style_home";
        $data['header_top']="inc/v_header_top";
        $data['nav']="inc/v_nav";
        

        $data['page']="hotels/v_hotels_payment_unregistered";

        $data['footer']="inc/v_footer";
        $data['script_footer_home']="inc/v_script_footer_home";

        $this->load->view('v_template_hotels',$data);
        
    }

    public function search(){

        $data = array();
      
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
      
        $data['style_home']="inc/v_style_home";
        $data['header_top']="inc/v_header_top";
        $data['nav']="inc/v_nav";
        $data['menu_left_hotel']="inc/v_menu_left_hotels";
        $data['form']="inc/v_hotels_form";


        $data['page']="hotels/v_hotels_search_results";

        $data['footer']="inc/v_footer";
        $data['script_footer_home']="inc/v_script_footer_home";

        $this->load->view('v_template_hotels',$data);
        
    }
    
}



