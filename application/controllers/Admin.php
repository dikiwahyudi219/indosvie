<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Admin extends CI_Controller {
    
        public function index()
        {
            $data = array('judul' => 'Halaman Admin', 
                           'isi'  => 'v_dasbor');
                           
            $this->load->view('layout/v_wrapper', $data, FALSE);
        }
    
    }
    
    /* End of file Admin.php */
    
?>