<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author nando_000
 */
class home extends CI_Controller {

    public function index() {
        $this->load->view('general/header_view');
        $this->load->view('home/home_view');
        $this->load->view('general/footer_view');
    }

}