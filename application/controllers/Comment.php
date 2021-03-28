<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_member extends CI_Controller {

    public function index()
    {
        $data = array('judul' => 'Halaman Manage Comments', 
                        'isi'  => 'v_manage_comments');
                           
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function unapprove()
    {
        $data = array('judul' => 'Halaman Unapprove Comments', 
                        'isi'  => 'v_unapprove_comments');
                           
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }


}

/* End of file Manage_member.php */

?>