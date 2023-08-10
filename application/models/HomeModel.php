<?php
class HomeModel extends CI_Model {

    public function insert_details($array)
    {
        return $this->db->insert('book_tour', $array);
    }

    public function get_booking_data()
    {
        $query = $this->db->get('book_tour');
        return $query->result();
    }
   public function get_booking_single_data($id)
   {     
        $query = $this->db->get_where('book_tour', array('booking_id' => $id));
        return $query->row();
   }
   public function get_booking_success_data($id)
   {
        $query = $this->db->get_where('book_tour', ['booking_id' => $id]);
        return $query->row();
   }
   public function delete_booking_data($id)
   {
        return $this->db->delete('book_tour', array('booking_id' => $id));
       
   }

   public function insert_contact_details($array)
   {
       return $this->db->insert('contact_details', $array);
   }
   public function get_contact_details_data()
    {
        $query = $this->db->get('contact_details');
        return $query->result();
    }
    public function get_contact_details_single_data($id)
   {
        $query = $this->db->get_where('contact_details', array('reference_id' => $id));
        return $query->row();
   }
    public function delete_contact_details_data($id)
   {
        return $this->db->delete('contact_details', array('reference_id' => $id));
       
   }

}
?>