<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminHome extends CI_Controller {

	
	public function index()
	{
                if(!$this->session->userdata('id'))
                {
                        return redirect('AdminLogin');
                }

                $this->load->model('HomeModel','book');
                $data = $this->book->get_booking_data();

                $this->load->view('admin/common/header');
                $this->load->view('admin/common/sidebar');
                $this->load->view('admin/index',['data'=>$data]);
                $this->load->view('admin/common/footer');        
	}

        // gallery Start
        // =====================================================================
        // =====================================================================


	public function gallery()
	{
                if(!$this->session->userdata('id'))
                {
                        return redirect('AdminLogin');
                }

                $this->load->model('AdminModel','image');

                $data2 = $this->image->get_gimage_data();

                $this->load->view('admin/common/header');
                $this->load->view('admin/common/sidebar');
                $this->load->view('admin/gallery',['data2'=>$data2] );
                $this->load->view('admin/common/footer');        
	}
        public function add_gimage()
	{
                $config =[
                        'overwrite' => True,
                        'upload_path' => './assets/admin/uploads/g',
                        'allowed_types' => 'jpg|png|gif|jpeg'
                ];

                $this->load->library('upload', $config);
                if($this->upload->do_upload('image_path'))
                {
                        $post = $this->input->post(); 
                        
                        $post['image_id'] = rand(111,999999999);
                        
                        $data = $this->upload->data();
                        $image_path ="assets/admin/uploads/g/" . $data ['file_name'];
                        $post['image_path'] = $image_path;
                        
                        // echo "<pre>";
                        // print_r ($post);
                        // echo "</pre>";
                        // exit;
                        
                        $this->load->model('AdminModel','image');   					
                        $res = $this->image->insert_gimage($post);  
                }

                
                $this->session->set_flashdata('msg1', 'Details Added Successfully !');	
                return redirect('AdminHome/gallery'); 							
        }
        
        public function delete_gimage()
        {
                $image_id = $this->input->post('id');
                $old_img = $this->input->post('old_image');
                $this->load->model('AdminModel','image'); 
                $res = $this->image->delete_gimage_data( $image_id );
                unlink($old_img);


                $this->session->set_flashdata('msg', 'Details Deleted Successfully !');
		return redirect('AdminHome/gallery'); 

        }

        public function edit_gimage()
        {
                $image_id = $this->input->post('id');

                $image_data = $this->input->post('image_path');
                
                $this->load->model('AdminModel','image'); 
                $data1 = $this->image->get_gimage_single_data( $image_id );
                
                $this->load->view('admin/common/header' );
                $this->load->view('admin/common/sidebar');
                $this->load->view('admin/gallery' , ['data1' => $data1] );
                $this->load->view('admin/common/footer' );
                        
                        
        }
        public function update_gimage()
        {
                if(!$this->session->userdata('id'))
                {
                        return redirect('AdminLogin');
                }
                
                $post = $this->input->post();
                
                $image_id = $this->input->post('id');
                $old_img = $this->input->post('image_path');
                $config =[
                        'overwrite' => true,
                        'upload_path' => './assets/admin/uploads/g',
                        'allowed_types' => 'jpg|png|gif|jpeg'
                ];

                $this->load->library('upload', $config);
                $data = $this->upload->do_upload('image_path');
                $data = $this->upload->data();

                if ($data['raw_name'] == '') {
                
                } else {
                        $post['image_path'] = "assets/admin/uploads/g/".$data ['file_name'];
                        unlink($old_img);
                }

                unset($post['id']);
                $post['image_path'] = 'test';
                $this->load->model('AdminModel','image');
                $res = $this->image->update_gimage($image_id , $post);  
                
                $this->session->set_flashdata('msg2', 'Details Updated Successfully !');	
                return redirect('AdminHome/gallery');
                
        }


        // gallery End
        // =====================================================================
        // =====================================================================


        // Gallery Master Start
        // =====================================================================
        // =====================================================================


        public function gallery_master()
	{
		if(!$this->session->userdata('id'))
                {
                        return redirect('AdminLogin');
                }

                $this->load->model('AdminModel','image');

                $data = $this->image->get_image_data();


		$this->load->view('admin/common/header');
		$this->load->view('admin/common/sidebar');
                $this->load->view('admin/gallery_master',['data'=>$data] );
		$this->load->view('admin/common/footer');
	}

        public function add_image()
	{
                $config =[
                        'overwrite' => true,
                        'upload_path' => './assets/admin/uploads/gallery',
                        'allowed_types' => 'jpg|png|gif|jpeg'
                ];

                $this->load->library('upload', $config);
                if($this->upload->do_upload('image_name'))
                {
                        $post = $this->input->post(); 
                        
                        $post['image_id'] = rand(111,999999999);
                        
                        $data = $this->upload->data();
                        $image_path ="assets/admin/uploads/gallery/" . $data ['file_name'];
                        $post['image_name'] = $image_path;
                        
                        // echo "<pre>";
                        // print_r ($post);
                        // echo "</pre>";
                        // exit;
                        
                        $this->load->model('AdminModel','image');   					
                        $res = $this->image->insert_image($post);  
                }

                
                $this->session->set_flashdata('msg1', 'Details Added successfully !');
                return redirect('AdminHome/gallery_master'); 							
        }
        
        public function delete_image()
        {
                $image_id = $this->input->post('id');
                $old_img = $this->input->post('old_image');
                $this->load->model('AdminModel','image'); 
                $res = $this->image->delete_image_data( $image_id );
                unlink($old_img);


                $this->session->set_flashdata('msg', 'Details Deleted Successfully !');
		return redirect('AdminHome/gallery_master'); 

        }
        public function edit_image()
        {
                $image_id = $this->input->post('id');

                $image_data = $this->input->post('image_name');
                $this->load->model('AdminModel','image'); 
                $res = $this->image->get_image_single_data( $image_id );

                
                $this->load->view('admin/common/header' );
                $this->load->view('admin/common/sidebar');
                $this->load->view('admin/update/update_image' , ['data' => $res] );
                $this->load->view('admin/common/footer' );
                        
                        
        }
        public function update_image()
        {
                if(!$this->session->userdata('id'))
                {
                        return redirect('AdminLogin');
                }
                
                $post = $this->input->post();
                $image_id = $this->input->post('id');
                $old_img = $this->input->post('image_name');
                $config =[
                        'overwrite' => true,
                        'upload_path' => './assets/admin/uploads/gallery',
                        'allowed_types' => 'jpg|png|gif|jpeg'
                ];

                $this->load->library('upload', $config);
                $data = $this->upload->do_upload('image_name');
                $data = $this->upload->data();
                
                // echo "<pre>";
                // print_r ($data);
                // echo "</pre>";
                // exit;
                

                if ($data['raw_name'] == '') {
                        
                } else {
                        $post['image_name'] = "assets/admin/uploads/gallery/".$data ['file_name'];
                        unlink($old_img);
                }
                
                unset($post['id']);
                
                $this->load->model('AdminModel','image');
                $res = $this->image->update_image($image_id , $post);  
                
                $this->session->set_flashdata('msg2', 'Details Updated Successfully !');
                return redirect('AdminHome/gallery_master');
                
        }



                

        // Gallery Master End
        // =====================================================================
        // =====================================================================

        //  Team master Start
        // =====================================================================
        // =====================================================================


        public function team_master()
        {
                if(!$this->session->userdata('id'))
                {
                        return redirect('AdminLogin');
                }

                $this->load->model('AdminModel','image');

                $data = $this->image->get_team_image_data();


                $this->load->view('admin/common/header');
                $this->load->view('admin/common/sidebar');
                $this->load->view('admin/team_master',['data'=>$data] );
                $this->load->view('admin/common/footer');
        }

        public function add_team_image()
	{
                $config =[
                        'overwrite' => true,
                        'upload_path' => './assets/admin/uploads/team',
                        'allowed_types' => 'jpg|png|gif|jpeg'
                ];

                $this->load->library('upload', $config);
                if($this->upload->do_upload('image_path'))
                {
                        $post = $this->input->post(); 
                       
                        $post['image_id'] = rand(111,999999999);
                        
                        $data = $this->upload->data();
                        $image_path ="assets/admin/uploads/team/" . $data ['file_name'];
                        $post['image_path'] = $image_path;
                        
                        // echo "<pre>";
                        // print_r ($post);
                        // echo "</pre>";
                        // exit;
                        
                        $this->load->model('AdminModel','image');   					
                        $res = $this->image->insert_team_image($post);  
                }

		
                        $this->session->set_flashdata('msg1', 'Details Added successfully !');
			return redirect('AdminHome/team_master'); 							
		}
        
                public function delete_team_image()
		{
                        $image_id = $this->input->post('id');
                        $old_img = $this->input->post('old_image');
                        $this->load->model('AdminModel','image'); 
                        $res = $this->image->delete_team_image_data( $image_id );
                        unlink($old_img);

                        $this->session->set_flashdata('msg', 'Details Deleted Successfully !');
			return redirect('AdminHome/team_master'); 

        	}
        public function edit_team_image()
        {
                $image_id = $this->input->post('id');

                $image_data = $this->input->post('image_path');
                
                $this->load->model('AdminModel','image'); 
                $res = $this->image->get_team_image_single_data( $image_id );
                
                $this->load->view('admin/common/header' );
                $this->load->view('admin/common/sidebar');
                $this->load->view('admin/update/update_team_image' , ['data' => $res] );
                $this->load->view('admin/common/footer' );
                        
                        
        }
        public function update_team_image()
        {
                if(!$this->session->userdata('id'))
                {
                        return redirect('AdminLogin');
                }
                
                $post = $this->input->post();
                
                $image_id = $this->input->post('id');
                $old_img = $this->input->post('image_path');
                $config =[
                        'overwrite' => true,
                        'upload_path' => './assets/admin/uploads/team',
                        'allowed_types' => 'jpg|png|gif|jpeg'
                ];

                $this->load->library('upload', $config);
                $data = $this->upload->do_upload('image_path');
                $data = $this->upload->data();

                // echo "<pre>";
                // print_r ($data);
                // echo "</pre>";
                // exit;
                

                if ($data['raw_name'] == '') {
                
                } else {
                        $post['image_path'] = "assets/admin/uploads/team/".$data ['file_name'];
                        unlink($old_img);
                        
                
                }

                unset($post['id']);
                
                $this->load->model('AdminModel','image');
                $res = $this->image->update_team_image($image_id , $post);  
                
                $this->session->set_flashdata('msg2', 'Details Updated Successfully !');
                return redirect('AdminHome/team_master');
                
        }



        // Team Master End
        // =====================================================================
        // =====================================================================
        

        // Testimonial Master Start 
        // =====================================================================
        // =====================================================================


        public function testimonial_master()
        {
                if(!$this->session->userdata('id'))
                {
                        return redirect('AdminLogin');
                }

                $this->load->model('AdminModel','image');

                $data = $this->image->get_testimonial_image_data();


                $this->load->view('admin/common/header');
                $this->load->view('admin/common/sidebar');
                $this->load->view('admin/testimonial_master',['data'=>$data] );
                $this->load->view('admin/common/footer');
        }

        public function add_testimonial_image()
	{
                $config =[
                        'overwrite' => true,
                        'upload_path' => './assets/admin/uploads/testimonial',
                        'allowed_types' => 'jpg|png|gif|jpeg'
                ];

                $this->load->library('upload', $config);
                if($this->upload->do_upload('image_path'))
                {
                        $post = $this->input->post(); 
                       
                        $post['image_id'] = rand(111,999999999);
                        
                        $data = $this->upload->data();
                        $image_path ="assets/admin/uploads/testimonial/" . $data ['file_name'];
                        $post['image_path'] = $image_path;
                        
                        // echo "<pre>";
                        // print_r ($post);
                        // echo "</pre>";
                        // exit;
                        
                        $this->load->model('AdminModel','image');   					
                        $res = $this->image->insert_testimonial_image($post);  
                }

		
                $this->session->set_flashdata('msg1', 'Details Added successfully !');
		return redirect('AdminHome/testimonial_master'); 							
	}
        
        public function delete_testimonial_image()
        {
                $image_id = $this->input->post('id');
                $old_img = $this->input->post('old_image');
                $this->load->model('AdminModel','image'); 
                $res = $this->image->delete_testimonial_image_data( $image_id );
                unlink($old_img);


                $this->session->set_flashdata('msg', 'Details Deleted successfully !');	
                return redirect('AdminHome/testimonial_master'); 

        }

        public function edit_testimonial_image()
        {
                $image_id = $this->input->post('id');

                $image_data = $this->input->post('image_path');
                
                $this->load->model('AdminModel','image'); 
                $res = $this->image->get_testimonial_image_single_data( $image_id );
                
                $this->load->view('admin/common/header' );
                $this->load->view('admin/common/sidebar');
                $this->load->view('admin/update/update_testimonial_image' , ['data' => $res] );
                $this->load->view('admin/common/footer' );
                        
                        
        }
        public function update_testimonial_image()
        {
                if(!$this->session->userdata('id'))
                {
                        return redirect('AdminLogin');
                }
                
                $post = $this->input->post();
                
                $image_id = $this->input->post('id');
                $old_img = $this->input->post('image_path');
                $config =[
                        'overwrite' => true,
                        'upload_path' => './assets/admin/uploads/testimonial',
                        'allowed_types' => 'jpg|png|gif|jpeg'
                ];

                $this->load->library('upload', $config);
                $data = $this->upload->do_upload('image_path');
                $data = $this->upload->data();

                if ($data['raw_name'] == '') {
                
                } else {
                        $post['image_path'] = "assets/admin/uploads/testimonial/".$data ['file_name'];
                        unlink($old_img);
                }

                unset($post['id']);
                // $post['image_path'] = 'test';
                $this->load->model('AdminModel','image');
                $res = $this->image->update_testimonial_image($image_id , $post);  
                
                $this->session->set_flashdata('msg2', 'Details Updated Successfully !');
                return redirect('AdminHome/testimonial_master');
                
        }

        // Testimonial Master End
        // =====================================================================
        // =====================================================================


        // Tour Master Start
        // =====================================================================
        // =====================================================================

        public function tour_master()
        {
                if(!$this->session->userdata('id'))
                {
                        return redirect('AdminLogin');
                }

                $this->load->model('AdminModel','image');

                
                $data = $this->image->get_tour_image_data();

                $this->load->view('admin/common/header');
                $this->load->view('admin/common/sidebar');
                $this->load->view('admin/tour_master',['data'=>$data] );
                $this->load->view('admin/common/footer');
        }

        public function add_tour_image()
	{
                $config =[
                        'overwrite' => true,
                        'upload_path' => './assets/admin/uploads/tour',
                        'allowed_types' => 'jpg|png|gif|jpeg'
                ];

                $this->load->library('upload', $config);
                if($this->upload->do_upload('image_path'))
                {
                        $post = $this->input->post(); 
                       
                        $post['image_id'] = rand(111,999999999);
                        
                        $data = $this->upload->data();
                        $image_path ="assets/admin/uploads/tour/".$data ['file_name'];
                        $post['image_path'] = $image_path;
                        
                        // echo "<pre>";
                        // print_r ($post);
                        // echo "</pre>";
                        // exit;
                        
                        $this->load->model('AdminModel','image');   					
                        $res = $this->image->insert_tour_image($post);  
                }

		
                $this->session->set_flashdata('msg1', 'Details Added successfully !');
                return redirect('AdminHome/tour_master'); 							
        }
        
        public function delete_tour_image()
        {
                $image_id = $this->input->post('id');
                $old_img = $this->input->post('old_image');
                $this->load->model('AdminModel','image'); 
                $res = $this->image->delete_tour_image_data( $image_id );
                unlink($old_img);


                $this->session->set_flashdata('msg', 'Details Deleted successfully !');
                return redirect('AdminHome/tour_master'); 

        }

        public function edit_tour_image()
        {
                $image_id = $this->input->post('id');

                $image_data = $this->input->post('image_path');
                
                $this->load->model('AdminModel','image'); 
                $res = $this->image->get_tour_image_single_data( $image_id );
                
                $this->load->view('admin/common/header' );
                $this->load->view('admin/common/sidebar');
                $this->load->view('admin/update/update_tour_image',['data' => $res] );
                $this->load->view('admin/common/footer' );
                        
                        
        }
        public function update_tour_image()
        {
                if(!$this->session->userdata('id'))
                {
                        return redirect('AdminLogin');
                }
                
                $post = $this->input->post();
                
                $image_id = $this->input->post('id');
                $old_img = $this->input->post('image_path');
                $config =[
                        'overwrite' => true,
                        'upload_path' => './assets/admin/uploads/tour',
                        'allowed_types' => 'jpg|png|gif|jpeg'
                ];

                $this->load->library('upload', $config);
                $data = $this->upload->do_upload('image_path');
                $data = $this->upload->data();

                if ($data['raw_name'] == '') {
                
                } else {
                        $post['image_path'] = "assets/admin/uploads/tour/".$data ['file_name'];
                        unlink($old_img);
                }

                unset($post['id']);
                // $post['image_path'] = 'test';
                $this->load->model('AdminModel','image');
                $res = $this->image->update_tour_image($image_id , $post);  
                
                $this->session->set_flashdata('msg2', 'Details Updated Successfully !');
                return redirect('AdminHome/tour_master');
                
        }

        // Tour Master End
        // =====================================================================
        // =====================================================================
        // =====================================================================
        // =====================================================================
        // Booking Master Start
        // =====================================================================
        // =====================================================================

        public function book_master()
        {
                if(!$this->session->userdata('id'))
                {
                        return redirect('AdminLogin');
                }

                $this->load->model('HomeModel','book');
                $data = $this->book->get_booking_data();
                
                $this->load->view('admin/common/header');
                $this->load->view('admin/common/sidebar');
                $this->load->view('admin/book_master' ,['data' => $data]);
                $this->load->view('admin/common/footer');
        }
        
        // Booking Master End
        // =====================================================================
        // =====================================================================
       
        
         // View Single Booking Start
        // =====================================================================
        // =====================================================================

        public function view_single_booking()
        {
                if(!$this->session->userdata('id'))
                {
                        return redirect('AdminLogin');
                }

                $booking_id = $this->input->post('id');
                $this->load->model('HomeModel','book'); 
                $res = $this->book->get_booking_single_data( $booking_id );
                
                $this->load->view('admin/common/header');
                $this->load->view('admin/common/sidebar');
                $this->load->view('admin/update/view_single_booking',['data' => $res]);
                $this->load->view('admin/common/footer');
        }
        
        // View Single Booking End
        // =====================================================================
        // =====================================================================
        public function delete_booking()
        {
                $booking_id= $this->input->post('id');
               
                $this->load->model('HomeModel','book'); 
                $res = $this->book->delete_booking_data( $booking_id);
                


                $this->session->set_flashdata('msg', 'Details Deleted successfully !');
                return redirect('AdminHome/book_master'); 

        }

        // Contact Master Start
        // =====================================================================
        // =====================================================================

        public function contact_master()
        {
                if(!$this->session->userdata('id'))
                {
                        return redirect('AdminLogin');
                }

                $this->load->model('HomeModel','book');
                $data = $this->book->get_contact_details_data();
                
                $this->load->view('admin/common/header');
                $this->load->view('admin/common/sidebar');
                $this->load->view('admin/contact_master' ,['data' => $data]);
                $this->load->view('admin/common/footer');
        }
        
        // Contact Master End
        // =====================================================================
        // =====================================================================
         // View Single Booking Start
        // =====================================================================
        // =====================================================================

        public function view_single_contact_details()
        {
                if(!$this->session->userdata('id'))
                {
                        return redirect('AdminLogin');
                }

                $reference_id = $this->input->post('id');
                $this->load->model('HomeModel','book'); 
                $res = $this->book->get_contact_details_single_data($reference_id );
                
                $this->load->view('admin/common/header');
                $this->load->view('admin/common/sidebar');
                $this->load->view('admin/update/view_single_contact',['data' => $res]);
                $this->load->view('admin/common/footer');
        }
        
        // View Single Booking End
        // =====================================================================
        // =====================================================================
        public function delete_contact_details()
        {
                $reference_id= $this->input->post('id');
               
                $this->load->model('HomeModel','book'); 
                $res = $this->book->delete_contact_details_data($reference_id);
                


                $this->session->set_flashdata('msg', 'Details Deleted successfully !');
                return redirect('AdminHome/contact_master'); 

        }

        public function jsvalidate( )
        {
                $this->load->view('admin/common/header');
                $this->load->view('admin/common/sidebar');
                $this->load->view('admin/jsvalidate');
                $this->load->view('admin/common/footer'); 
        }




}
?>