<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('products');
		$this->load->view('footer');
	}

    public function products_detail()
	{
		$this->load->view('header');
		$this->load->view('details');
		$this->load->view('footer');
	}
}