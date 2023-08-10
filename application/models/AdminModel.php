<?php
class AdminModel extends CI_Model {

    // Gallery  Image Start
    // =====================================================================
    // =====================================================================
    public function insert_gimage($array)
    {
        return $this->db->insert('gallery', $array);
    }

    public function get_gimage_data()
    {
        $query = $this->db->get('gallery');
        return $query->result();
    }

    public function get_gimage_single_data($id)
    {
        $query = $this->db->get_where('gallery', array('image_id' => $id));
        return $query->row();

    }

   public function delete_gimage_data($id)
   {
        return $this->db->delete('gallery', array('image_id' => $id));
   }

   public function update_gimage($id , $array)
   {
    
    // $this->db->where('image_id', $id);
    // $this->db->update('gallery', $array);

    return $this->db->where('image_id', $id)
                    ->update('gallery', $array);
   }

    // Gallery  Image End
    // =====================================================================
    // =====================================================================

    // Gallery Master Image Start
    // =====================================================================
    // =====================================================================

    public function insert_image($array)
    {
        return $this->db->insert('gallery_images', $array);
    }

    public function get_image_data()
    {
        $query = $this->db->get('gallery_images');
        return $query->result();
    }

    public function get_image_single_data($id)
    {
        $query = $this->db->get_where('gallery_images', array('image_id' => $id));
        return $query->row();

    }

   public function delete_image_data($id)
   {
        return $this->db->delete('gallery_images', array('image_id' => $id));
   }

   public function update_image($id , $array)
   {
    
    // $this->db->where('image_id', $id);
    // $this->db->update('gallery_images', $array);

    return $this->db->where('image_id', $id)
                    ->update('gallery_images', $array);
   }
   

    // Gallery Image End
    // =====================================================================
    // =====================================================================
    // Team Image Start
    // =====================================================================
    // =====================================================================

    public function insert_team_image($array)
    {
        return $this->db->insert('team_images', $array);
    }

    public function get_team_image_data()
    {
        $query = $this->db->get('team_images');
        return $query->result();
    }

    public function get_team_image_single_data($id)
    {
        $query = $this->db->get_where('team_images', array('image_id' => $id));
        return $query->row();

    }

    public function delete_team_image_data($id)
   {
        return $this->db->delete('team_images', array('image_id' => $id));
   }

   public function update_team_image($id , $array)
   {
    
    // $this->db->where('image_id', $id);
    // $this->db->update('team_images', $array);

    return $this->db->where('image_id', $id)
                    ->update('team_images', $array);
   }
   


    //  Team Image End
    // =====================================================================
    // =====================================================================

    // Testimonial Image Start
    // =====================================================================
    // =====================================================================
    public function insert_testimonial_image($array)
    {
        return $this->db->insert('testimonial_images', $array);
    }

    public function get_testimonial_image_data()
    {
        $query = $this->db->get('testimonial_images');
        return $query->result();
    }

    public function get_testimonial_image_single_data($id)
    {
        $query = $this->db->get_where('testimonial_images', array('image_id' => $id));
        return $query->row();

    }

    public function delete_testimonial_image_data($id)
   {
        return $this->db->delete('testimonial_images', array('image_id' => $id));
   }

   public function update_testimonial_image($id , $array)
   {
    
    // $this->db->where('image_id', $id);
    // $this->db->update('testimonial_images', $array);

    return $this->db->where('image_id', $id)
                    ->update('testimonial_images', $array);
   }


    //    Testimonial Image End 
    // =====================================================================
    // =====================================================================
    // Tour Image Start
    // =====================================================================
    // =====================================================================
    public function insert_tour_image($array)
    {
        return $this->db->insert('tour_images', $array);
    }

    public function get_tour_image_data()
    {
        $query = $this->db->get('tour_images');
        return $query->result();
    }

    public function get_tour_image_single_data($id)
    {
        $query = $this->db->get_where('tour_images', array('image_id' => $id));
        return $query->row();

    }

    public function delete_tour_image_data($id)
   {
        return $this->db->delete('tour_images', array('image_id' => $id));
   }

   public function update_tour_image($id , $array)
   {
    
    // $this->db->where('image_id', $id);
    // $this->db->update('tour_images', $array);

    return $this->db->where('image_id', $id)
                    ->update('tour_images', $array);
   }


    //    Tour Image End 
    // =====================================================================
    // =====================================================================
}
?>