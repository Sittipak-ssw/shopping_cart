<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$url = 'https://dummyjson.com/products';

        // Create a new cURL resource
        $ch = curl_init($url);

        // Set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));

        // Return response instead of outputting
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Execute the POST request
        $result = curl_exec($ch);

        // Close cURL resource
        curl_close($ch);

        $result = json_decode($result);
		// echo '<pre>';
        // print_r($result);
        // exit();
		$this->load->view('header');
		$this->load->view('index', compact('result'));
		$this->load->view('footer');
	}
}