<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

    public function index()
    {
        $data = array('judul' => 'Halaman Category', 
                        'isi'  => 'v_category');
                           
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {
        $data = array('judul' => 'Halaman Add Category', 
                        'isi'  => 'v_add_category');
                           
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }


}

/* End of file Manage_member.php */

?>