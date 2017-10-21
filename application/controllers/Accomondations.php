<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Posts Management class created by CodexWorld
 */
class Accomondations extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->helper('text');

        $this->load->model('Crud_model','m_crud');
        $this->load->database();
        
         
        $this->load->model('M_Hotels','mh',TRUE);
        $this->load->model('M_Sourng','m_sourng',True);


        $this->load->library('Ajax_pagination');

        // $this->load->model('post');
        // $this->load->library('Ajax_pagination');
        // $this->perPage = 2;
        $this->perPage = 2;   
        $this->load->helper('url');
    }
    
   public function index($offset = 0){

      $data = array();
        $data['breadcrumb_1']="index";
        $data['breadcrumb_2']="Hotels";
        $data['breadcrumb_3']="Europe";
        $data['breadcrumb_4']="Netherlands";
        $data['title']="Hotel List Search Result";
//---------------------------------------------------------

         //total rows count
        $totalRec = count($this->mh->getRows());
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'accomondations/ajaxPaginationData';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $config['link_func']   = 'searchFilter';
        $this->ajax_pagination->initialize($config);
        
        //get the posts data
        $data['hotel'] = $this->mh->getRows(array('limit'=>$this->perPage));

       $data['hotel_count']=$this->m_sourng->count_by_sql("SELECT * FROM hotels WHERE hotel_blocked='N'",false);
        $data['dest']=$this->m_sourng->get_by_sql("SELECT * FROM destinations",false);
//-----------------------------------------------------------------------------



       $data['settings']=$this->m_crud->get_by_sql("SELECT * FROM settings");
       
        $data['style_home']="inc/v_style_home";
        $data['header_top']="inc/v_header_top";
        $data['nav']="inc/v_nav";

        $data['where']="hotels_layout/v_search_where";
        $data['check']="hotels_layout/v_check_in_out";
        $data['guests']="hotels_layout/v_search_guests";
        $data['room']="hotels_layout/v_search_room";
        $data['menu_left_hotel']="hotels_layout/v_menu_left_hotels";
        
        $data['page']="accomondations/v_hotels_search_results";

        $data['footer']="inc/v_footer";
        $data['script_footer_home']="inc/v_script_footer_home";

        $this->load->view('v_template_hotels',$data);

       // $this->load->view('v_template_hotels',$data);
    }

function ajaxPaginationData(){



        $conditions = array();
        
        //calc offset number
        $page = $this->input->post('page');
        if(!$page){
            $offset = 0;
        }else{
            $offset = $page;
        }
        
        //set conditions for search
        $keywords = $this->input->post('keywords');
        $sortBy = $this->input->post('sortBy');
        if(!empty($keywords)){
            $conditions['search']['keywords'] = $keywords;
        }
        if(!empty($sortBy)){
            $conditions['search']['sortBy'] = $sortBy;
        }
        
        //total rows count
        $totalRec = count($this->mh->getRows($conditions));
        
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'accomondations/ajaxPaginationData';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        $config['link_func']   = 'searchFilter';
        $this->ajax_pagination->initialize($config);
        
        //set start and limit
        $conditions['start'] = $offset;
        $conditions['limit'] = $this->perPage;
        
        //get posts data
        $data['hotels'] = $this->mh->getRows($conditions);

        
        //load the view
       $this->load->view('accomondations/ajax-pagination-data', $data, false);
        // $this->load->view('hotels/ajax-hotels-list', $data, false);
    }



    
    public function hotels_details($id){

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



$sql="SELECT hotels.*,destinations.destinations,hotel_rooms.* 
        FROM hotels INNER JOIN destinations ON destinations.dest_id=hotels.dest_id 
        INNER JOIN hotel_rooms ON hotels.hotel_id=hotel_rooms.hotel_id 
        WHERE hotels.hotel_id=".$id;    
        $data['hotelDetail']=$this->m_sourng->get_by_sql($sql,false);

// Gallery Hotel
        $sql_h_gallery="SELECT * FROM hotel_gallery
        WHERE hotel_id=".$id;   
        $data['hotelGallery']=$this->m_sourng->get_by_sql($sql_h_gallery,false);
// Hotel Rooms
        $sql_h_Rooms="SELECT * FROM hotel_rooms
        WHERE hotel_id=".$id ." AND hr_status='Y'"; 
        $data['hotelRooms']=$this->m_sourng->get_by_sql($sql_h_Rooms,false);

        // Hotel Facilities
        $sql_h_Facil="SELECT * FROM hotel_facilities
        WHERE hotel_id=".$id ;
        $data['hotelFacil']=$this->m_sourng->get_by_sql($sql_h_Facil,false);

        // Hotel Policy
        $sql_h_Policy="SELECT * FROM policies WHERE hotel_id=".$id ;

        $data['Policy']=$this->m_sourng->get_by_sql($sql_h_Policy,false);




        $data['page']="accomondations/v_hotels_details";

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

        $data['page']="accomondations/v_hotels_payment";

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


        $data['page']="accomondations/v_hotels_payment_registered_card";

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

        $data['page']="accomondations/v_hotels_payment_unregistered";

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
        
        $data['where']="hotels_layout/v_search_where";
        $data['check']="hotels_layout/v_check_in_out";
        $data['guests']="hotels_layout/v_search_guests";
        $data['room']="hotels_layout/v_search_room";
        $data['page']="accomondations/v_hotels_search";

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

        $data['where']="hotels_layout/v_search_where";
        $data['check']="hotels_layout/v_check_in_out";
        $data['guests']="hotels_layout/v_search_guests";
        $data['room']="hotels_layout/v_search_room";
        $data['menu_left_hotel']="hotels_layout/v_menu_left_hotels";
        
        $data['page']="accomondations/v_hotels_search_results";

        $data['footer']="inc/v_footer";
        $data['script_footer_home']="inc/v_script_footer_home";

        $this->load->view('v_template_hotels',$data);
        
    }
    
}