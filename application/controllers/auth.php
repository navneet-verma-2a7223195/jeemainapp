<?php

class Auth extends CI_Controller{
	public function pre_register(){
		$this->load->view('registration');
	}
	public function register(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('candidate_name','candidate_name','required');
		$this->form_validation->set_rules('father_name','father_name','required');
		$this->form_validation->set_rules('mother_name','mother_name','required');
		$this->form_validation->set_rules('date_of_birth','date_of_birth','required');
		$this->form_validation->set_rules('gender','gender','required');
		$this->form_validation->set_rules('identification','identification','required');
		$this->form_validation->set_rules('identification_num','identification_num','required');
		$this->form_validation->set_rules('premises_no','premises_no','required');
		$this->form_validation->set_rules('sub_locality','sub_locality','required');
		
		$this->form_validation->set_rules('state','state','required');
		
		$this->form_validation->set_rules('pin_code','pin_code','required');
		$this->form_validation->set_rules('email','email','required|valid_email');
		$this->form_validation->set_rules('mobile_no','mobile_no','required');
		
		$this->form_validation->set_rules('password','password','required|min_length[8]');
		$this->form_validation->set_rules('confirm_email','confirm_email','required|valid_email|matches[email]');
		
		$this->form_validation->set_rules('confirm_password','confirm_password','required|matches[password]');
		$this->form_validation->set_rules('confirm_mobile','confirm_mobile','required|matches[mobile_no]');
		

		if($this->form_validation->run()==false){
			$this->session->set_flashdata('msg',validation_errors());
			$this->load->view('registration_form');
		}

		else{
			$this->load->model('Auth_model');
			$formArray = array();
			$formArray['candidate_name'] = $this->input->post('candidate_name');
			$formArray['father_name'] = $this->input->post('father_name');
			$formArray['mother_name'] = $this->input->post('mother_name');
			$formArray['date_of_birth'] = $this->input->post('date_of_birth');
			$formArray['gender'] = $this->input->post('gender');
			$formArray['identification'] = $this->input->post('identification');
			$formArray['identification_num'] = $this->input->post('identification_num');
			$formArray['premises_no'] = $this->input->post('premises_no');
			$formArray['sub_locality'] = $this->input->post('sub_locality');
			$formArray['country'] = $this->input->post('country');
			$formArray['state'] = $this->input->post('state');
			$formArray['district'] = $this->input->post('district');
			$formArray['pin_code'] = $this->input->post('pin_code');
			$formArray['email'] = $this->input->post('email');
			$formArray['mobile_no'] = $this->input->post('mobile_no');
			$formArray['alternate_no'] = $this->input->post('alternate_no');
			$formArray['password'] = password_hash($this->input->post('password'),PASSWORD_BCRYPT);
			$formArray['created_at']=date('Y-m-d H:i:s');

			$this->Auth_model->create($formArray);
			$this->session->set_flashdata('msg','your account has been created');
			redirect(base_url().'index.php/welcome/index');
		}

	}
	public function login(){
		$this->load->model('Auth_model');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('email','email','required|valid_email');
		$this->form_validation->set_rules('password','password','required');
		

		if($this->form_validation->run() == true){
			$email = $this->input->post('email');
			$user = $this->Auth_model->checkUser($email);

			if(!empty($user)){
				$password =$this->input->post('password');
				if(password_verify($password, $user['password']) == true){

					$sessArray['id'] = $user['id'];
					$sessArray['candidate_name'] = $user['candidate_name'];
					$sessArray['Father_name'] = $user['Father_name'];
					$sessArray['mother_name'] = $user['mother_name'];
					$sessArray['date_of_birth'] = $user['date_of_birth'];
					$sessArray['gender'] = $user['gender'];
					$sessArray['identification'] = $user['identification'];
					$sessArray['identification_num'] = $user['identification_num'];
					$sessArray['premises_no'] = $user['premises_no'];
					$sessArray['sub_locality'] = $user['sub_locality'];
					$sessArray['country'] = $user['country'];
					$sessArray['state'] = $user['state'];
					$sessArray['district'] = $user['district'];
					$sessArray['pin_code'] = $user['pin_code'];
					$sessArray['email'] = $user['email'];
					$sessArray['mobile_no'] = $user['mobile_no'];
					$sessArray['alternate_no'] = $user['alternate_no'];
					
					$this->session->set_userdata('user',$sessArray);
					

					redirect(base_url().'index.php/auth/dashboard');
				} else {
					$this->session->set_flashdata('msg','Either email or password is incorrect,please try again..');
					redirect(base_url().'index.php/auth/login');
	
				}
			}
			else {
				$this->session->set_flashdata('msg','Either email or password is incorrect,please try again..');
				redirect(base_url().'index.php/auth/login');

			}
		}
		else{
		$this->load->view('home');
		}
	}
	public function dashboard(){

		$this->load->model('Auth_model');
		if($this->Auth_model->authorized() == false){
			$this->session->set_flashdata('msg','You are not authorized to access this section.');
			redirect(base_url().'index.php/auth/login');
		}

		$user = $this->session->userdata('user');
		$data['user'] = $user;

		$this->load->view('dashboard',$data);
	}
	public function logout()
	{
		$this->session->unset_userdata('user');
		redirect(base_url().'index.php/auth/login');
	}
	public function forgot_password()
	{
		$this->load->model('Auth_model');
		$this->load->library('form_validation');
		if($_SERVER['REQUEST_METHOD']== 'POST'){
			$this->form_validation->set_rules('email','email','required');
			if($this->form_validation->run() == true)
			{
				$email = $this->input->post('email');
				$validateEmail = $this->Auth_model->validateEmail($email);
				if($validateEmail != false)
				{
					$row = $validateEmail;
					$user_id = $row->id;

					$string = time().$user_id.$email;
					$hash_string = hash('sha256',$string);
					$currentDate = date('Y-m-d H:i');
					$hash_expiry = date('Y-m-d H:i',strtotime($currentDate. ' 1 days'));
					$data = array(
						'hash_key' => $hash_string,
						'hash_expiry' => $hash_expiry,
					);
					$this->Auth_model->updatePasswordhash($data,$email); 

					$resetLink = base_url().'reset/password?hash='.$hash_string;
					$message = '<p>Your reset password Link is here:</p>'.$resetLink;

					$subject = "Password Reset Link";
					$sentStatus = $this->sendEmail($email,$subject,$message);

					if($sentStatus == true)
					{
						$this->Auth_model->updatePasswordhash($data,$email);
						$this->session->set_flashdata('success','Reset Password link successfully sent');
						redirect(base_url('index.php/auth/forgot_password'));


					} else {
						$this->session->set_flashdata('error','Email sending error');

				
					}

				} else {
					$this->session->set_flashdata('error','invalid email id');
					$this->load->view('forgot_password');
				}
			}
			else 
			{
				$this->load->view('forgot_password');

			}
		} else {
			$this->load->view('forgot_password');
		}
		
	}
	public function sendEmail($email,$subject,$message)
	{
		$config = Array(
			'protocol'=>'smtp',
			'smtp_host'=>'ssl://smtp.googlemail.com',

			'smtp_port' => 465,
			'smtp_user' => 'kvnavneetg@gmail.com',
			'smtp_pass' => '',
			'mailtype'  => 'html',
			'charset'   => 'iso-8859-1',
			'wordwrap'  => TRUE


		);
		$this->load->library('email',$config);
		$this->email->set_newline("\r\n");
		$this->email->from('noreply');
		$this->email->to($email);
		$this->email->subject($subject);
		$this->email->message($message);

		if($this->email->send())
		{
			return true;
		}
	}
	public function registered(){
		$this->load->view('registration_form');
	}
}
?>
