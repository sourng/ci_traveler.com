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

		//$data['page']="hotels/v_hotel";

        $data['footer']="inc/v_footer";
		$data['script_footer_home']="inc/v_script_footer_home";
        $this->load->view('hotels/v_hotel',$data);
    }
    
    
    
}