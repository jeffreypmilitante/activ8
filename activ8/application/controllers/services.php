<?php

class Services extends CI_Controller
{

	// public function index()
	// {
	// 	$this->load->view('inc/header_view');
	// 	$this->load->view('pages/main');
	// 	$this->load->view('inc/footer_view');

	// }
	public function diagnostic(){
		$this->load->view('inc/header_view');
		$this->load->view('pages/diagnosticservices');
		$this->load->view('inc/footer_view');
	}
}