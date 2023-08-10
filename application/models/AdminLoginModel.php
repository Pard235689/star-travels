<?php
class AdminLoginModel extends CI_Model {


    
    

    // FOR CHECK DATA IN DATABASE ( CODE ) AND LOGIM THIS USER ( CODE )

    public function check_user($email, $password)
    {
        // FOR CHECK EMAIL AND PASSWORD IN DATABASE ( CODE )

        $query = $this->db->get_where('login_information', array('email' => $email, 'password' => $password));
        if ($query->num_rows())
        {
            return  $query->row();

        }
        else
        {
            return FALSE; // FOR WRONG USER
        }
    }

}

?>