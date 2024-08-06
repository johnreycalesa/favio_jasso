<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EmailController extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('email');
		$this->load->helper(['url', 'form']);
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function send()
	{
		$postData = json_decode($this->input->post('data'));
		if (!$postData) {
			$response = array(
				'status' => false,
				'message' => 'Invalid data format'
			);
			echo json_encode($response);
			return;
		}

		$from_email = $postData->from_email;
		$to_email = $postData->to_email;
		$subject = $postData->subject;
		$message = $postData->message;

		// Set validation rules for each field in $postData
		$this->form_validation->set_data((array)$postData);
		$this->form_validation->set_rules('from_email', 'From Email', 'required|valid_email');
		$this->form_validation->set_rules('to_email', 'To Email', 'required|valid_email');
		$this->form_validation->set_rules('subject', 'Subject', 'required');
		$this->form_validation->set_rules('message', 'Message', 'required');

		if ($this->form_validation->run() == false) {
			$response = array(
				'status' => false,
				'message' => validation_errors()
			);
			echo json_encode($response);
			return;
		}

		$this->email->from($from_email);
		$this->email->to($to_email);
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->set_mailtype("html");

		if ($this->email->send()) {
			$response = array(
				'status' => true,
				'message' => 'Email sent successfully'
			);
		} else {
			$response = array(
				'status' => false,
				'message' => 'Email sending failed'
			);
		}
		echo json_encode($response);
	}
}
