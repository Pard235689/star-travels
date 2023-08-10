<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	// Index start
    // =====================================================================
    // =====================================================================  
	public function index()
	{
        $this->load->model('AdminModel','image');
        $data = $this->image->get_testimonial_image_data();
        $data2 = $this->image->get_tour_image_data();

        $this->load->view('user/common/header');
        $this->load->view('user/index',['data'=>$data ,'data2' => $data2]);
        $this->load->view('user/common/footer');
	}
    // Index Close
    // =====================================================================
    // =====================================================================
    // login & Registration start
    // =====================================================================
    // =====================================================================
	public function login()
	{
		$this->load->view('user/login');	
    }
	public function forgetPassword()
	{
		$this->load->view('user/forgot-password');	
    }
       
	public function registration()
	{
		$this->load->view('user/registration');
	}
    // login  & Registration  End
    // =====================================================================
    // =====================================================================
    // About Start
    // =====================================================================
    // =====================================================================
    public function about()
	{
        $this->load->view('user/common/header');
        $this->load->view('user/about-us');
        $this->load->view('user/common/footer');
	}
    // About Start
    // =====================================================================
    // =====================================================================
    // Services Start
    // =====================================================================
    // =====================================================================
    public function services()
	{
        $this->load->view('user/common/header');
        $this->load->view('user/services');
        $this->load->view('user/common/footer');
	}
    // Services End
    // =====================================================================
    // =====================================================================
    // Tour Homepage Start
    // =====================================================================
    // =====================================================================
    public function tour_homepage(){
        $this->load->model('AdminModel','image');

        $data1 = $this->image->get_testimonial_image_data();

        $data2 = $this->image->get_tour_image_data();

        $this->load->view('user/common/header');
		$this->load->view('user/tour-homepage',['data1'=>$data1 ,'data2' => $data2 ]);
        $this->load->view('user/common/footer'); 
    }
    // Tour Homepage End
    // =====================================================================
    // =====================================================================
    // Team Start
    // =====================================================================
    // =====================================================================
    public function team()
	{
        $this->load->model('AdminModel','image');

        $data = $this->image->get_team_image_data();

        $this->load->view('user/common/header');
        $this->load->view('user/team',['data'=>$data]);
        $this->load->view('user/common/footer');
	}
    // Team End
    // =====================================================================
    // =====================================================================
    // Contact Start
    // =====================================================================
    // =====================================================================
    public function contact()
	{
        $this->load->view('user/common/header');
        $this->load->view('user/contact-us');
        $this->load->view('user/common/footer');
	}
    public function add_contact_details()
    {
        $post = $this->input->post(); 									

        $post['reference_id'] = rand(111,999999999); 					 	

           					
        $this->load->model('HomeModel','hom');
        $res = $this->hom->insert_contact_details($post);

        $this->session->set_flashdata('msg1', 'Details Added successfully !');
        return redirect('Home/contact');

    }
    public function add_index_contact_details()
    {
        $post = $this->input->post(); 									

        $post['reference_id'] = rand(111,999999999); 					 	

           					
        $this->load->model('HomeModel','hom');
        $res = $this->hom->insert_contact_details($post); 

        $this->session->set_flashdata('msg1', 'Details Added successfully !');
        return redirect('Home/index');

    }
    // ContactEnd
    // =====================================================================
    // =====================================================================
    // Tour Detail right side bar Start
    // =====================================================================
    // =====================================================================
    public function tour_detail_right_sidebar()
	{
        $image_id = $this->input->post('id');

        // $image_data = $this->input->post('image_path');
        
        $this->load->model('AdminModel','image'); 
        $res = $this->image->get_tour_image_single_data( $image_id );

        $this->load->view('user/common/header');
        $this->load->view('user/tour-detail-right-sidebar',['data' => $res ]);
        $this->load->view('user/common/footer');
	}
    // Tour Detail right side bar End
    // =====================================================================
    // =====================================================================
    // Tour Booking Right Side bar Start
    // =====================================================================
    // =====================================================================

    
    public function tour_booking_right_sidebar()
	{
        $image_id = $this->input->post('id');
        $this->load->model('AdminModel','image'); 
        $res = $this->image->get_tour_image_single_data( $image_id );

        $this->load->view('user/common/header');
        $this->load->view('user/tour-booking-right-sidebar',['data' => $res ]);
        $this->load->view('user/common/footer');
	}
    // Tour Booking Right Side bar End
    // =====================================================================
    // =====================================================================
    // Add Booking Details Start
    // =====================================================================
    // =====================================================================

    public function add_booking_details()
    {
        $post = $this->input->post(); 	
        
        $post['booking_id'] = rand(111,999999999); 					 	

           					
        $this->load->model('HomeModel','book');
        $res = $this->book->insert_details($post); 
        

        return redirect('Home/show_booking_details');

    }
    // Add Booking Details End
    // =====================================================================
    // =====================================================================
    // Show Booking Details  Start
    // =====================================================================
    // =====================================================================

    public function show_booking_details()
    {
        // $booking_id = $this->input->post('id');
        $this->load->model('HomeModel','book');
        $data1 = $this->book->get_booking_data();
        // $res = $this->book->get_booking_success_data($booking_id);

        $this->load->view('user/common/header' );
        $this->load->view('user/thank-you',['data1' => $data1,] );
        $this->load->view('user/common/footer' );

    }
    // Show Booking Details end
    // =====================================================================
    // =====================================================================
    // Gallery Start
    // =====================================================================
    // =====================================================================
    

    public function gallery()
	{
        $this->load->model('AdminModel','image');

        $data = $this->image->get_image_data();

        $this->load->view('user/common/header');
        $this->load->view('user/gallery',['data'=>$data]);
        $this->load->view('user/common/footer');
	}
    // Gallery End
    // =====================================================================
    // =====================================================================
    // Travel Guide Start
    // =====================================================================
    // =====================================================================
    public function travel_guide()
	{
        $this->load->view('user/common/header');
        $this->load->view('user/travel-guide');
        $this->load->view('user/common/footer');
	}
    // Travel Guide End
    // =====================================================================
    // =====================================================================

    
}

?>