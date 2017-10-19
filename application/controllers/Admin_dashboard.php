<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_dashboard extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('M_Hotels','mh',TRUE);
        $this->load->model('M_Sourng','m_sourng',True);
        $this->load->library('Ajax_pagination');
        $this->load->helper('text');
        $this->load->database();
        $this->perPage = 5;
       // $this->starOrder=4;

        $this->load->model('Crud_model','crud_model',True);
    }
    
    public function index()
    {
      
      $data=array();

      $data['form_title']='Dashboard';

        $data['head']='admin/inc/v_dashboard_head';
        $data['footer']='admin/inc/v_dashboard_footer';
        $data['sidebar']='admin/inc/v_sidebar';
          $data['sidebar_right']='admin/inc/v_sidebar_right';
        

        $data['header']='admin/inc/v_header';
        $data['main_content']='admin/dashboard/v_dashboard';
        //load the view
        $this->load->view('admin/v_admin_template', $data);

        echo "Admin Dashboard";
    }
// Booking
public function booking()
    {
      
      $data=array();

      $data['form_title']='Booking List';
      $data['panel_title']='All Bookings';

        $data['head']='admin/head/v_head_table';
        $data['footer']='admin/footer/v_footer_table';

          $data['sidebar']='admin/inc/v_sidebar';
          $data['sidebar_right']='admin/inc/v_sidebar_right';        

        $data['header']='admin/inc/v_header';

        $data['main_content']='admin/booking/v_booking';
        //load the view
        $this->load->view('admin/v_admin_template', $data);

        echo "Admin Dashboard";
    }
    // Guests
public function guests()
    {
      
      $data=array();

      $data['form_title']='Guests List';
      $data['panel_title']='All Guests';


        $data['head']='admin/head/v_head_table';
        $data['footer']='admin/footer/v_footer_table';

          $data['sidebar']='admin/inc/v_sidebar';
          $data['sidebar_right']='admin/inc/v_sidebar_right';        

        $data['header']='admin/inc/v_header';

        $data['main_content']='admin/guests/v_guests';
        //load the view
        $this->load->view('admin/v_admin_template', $data);

        echo "Admin Dashboard";
    }


// Profile
public function profile()
    {
      
      $data=array();

      $data['form_title']='User Profile';
      $data['panel_title']='User Profile';

        $data['head']='admin/head/v_head_table';
        $data['footer']='admin/footer/v_footer_table';

          $data['sidebar']='admin/inc/v_sidebar';
          $data['sidebar_right']='admin/inc/v_sidebar_right';        

        $data['header']='admin/inc/v_header';

        $data['main_content']='admin/users/v_profile';
        //load the view
        $this->load->view('admin/v_admin_template', $data);

        echo "Admin Dashboard";
    }
// End Profile

// Invoice Print
public function invoice_print()
    {
      
      $data=array();

      $data['form_title']='User Profile';
      $data['panel_title']='User Profile';

        $data['head']='admin/head/v_head_table';
        $data['footer']='admin/footer/v_footer_table';

          // $data['sidebar']='admin/inc/v_sidebar';
        $data['sidebar']=null;
          $data['sidebar_right']='admin/inc/v_sidebar_right';        

        $data['header']='admin/inc/v_header';

        $data['main_content']='admin/inc/v_invoice_print';
        //load the view
        $this->load->view('admin/v_admin_template', $data);

        echo "Admin Dashboard";
    }
// End Invoice Print
    

}