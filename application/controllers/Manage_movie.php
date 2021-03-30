<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_movie extends CI_Controller {

    public function index()
    {
        $data = array('judul' => 'Halaman Manage Movie', 
                        'isi'  => 'v_manage_movie');
                           
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }

    public function add()
    {
        $data = array('judul' => 'Halaman Add Movie', 
                        'isi'  => 'v_add_movie');
                           
        $this->load->view('layout/v_wrapper', $data, FALSE);
    }


}

/* End of file Manage_member.php */

?>