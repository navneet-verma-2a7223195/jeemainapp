<?php
class Reset extends MY_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model')
	}
	function password()
	{
		if($this->input->get('hash'))
		{
			$hash = $this->input->get('hash');
			$this->data['hash'] = $hash;
			$getHashDetails = $this->Auth_model->getHashDetails($hash);
			if($getHashDetails != false)
			{
				$hash_expiry = $getHashDetails->hash_expiry;
				$currentDate = date('Y-m-d H:i');
				if($currentDate <$hash_expiry)
				{
					if($_SERVER['REQUEST_METHOD'] == 'POST')
					{
						$this->form_validation->set_rules('current_password','current_password','required');
						$this->form_validation->set_rules('new_password','new_password','required');
						$this->form_validation->set_rules('confirm_new_password','confirm_new_password','required|matches[password]');
						if($this->form_validation->run()== TRUE){
							$current_password = sha1($this->input->post('current_password'));
							$new_password = $this->input->post('new_password');

							$validateCurrentPassword = $this->Auth_model->validateCurrentPassword($current_password,$hash);
							if($validateCurrentPassword !=false)
							{
								$new_password = sha1($new_password);
								$data = array(
									'password'=>$new_password,
									'hash_key'=>null,
									'hash_expiry'=>null
								);
								$this->Auth_model->updateNewPassword($data,$hash);
								$this->session->set_flashdata('success','Successfully changed Password.');
								redirect(base_url('index.php/Auth/forgot_password'));


							}
							else
							{
								$this->session->set_flashdata('error','Current password is wrong.');
								$this->load->view('reset_password',$this->data);
							}
						}
					}
					else {
						$this->load->view('reset_password',$this->data);
					}
				}
				else 
				{
					$this->session->set_flashdata('error','link is expired');
					redirect(base_url('index.php/Auth/forgot_password'));
				}
			} else { 
				echo "invalid link"; exit;
			}
		} else {
			redirect(base_url('index.php/Auth/forgot_password'));
		}
	}
}
?>
