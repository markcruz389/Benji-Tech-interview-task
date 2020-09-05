<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{   
        // $this->load->library('user_agent');

        // if ($this->agent->is_mobile()) {

        //     $this->load->view('_mobile/home');

        // } else {     

		    $this->load->view('_mobile/home');
        // }

	}
}
