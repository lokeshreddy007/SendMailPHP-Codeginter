<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SendEmailController extends CI_Controller {
    
     public function __construct()
        {
                parent::__construct();
                $this->load->library('session'); 
                $this->load->helper('form'); 
                
        }
        
    public function sendEmail () {

        $config = array(
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com',
            'smtp_port' => 465 ,
            'smtp_user' => '$your mail', // mail 
            'smtp_pass' => 'Password',   // password
            'mailtype'  => 'html',
            'charset'   => 'utf-8'
        );

   
        $this->load->library('email'); 
        $this->email->initialize($config);
          $this->email->set_mailtype("html");
          $this->email->set_newline("\r\n");
          //Email content
          $to_email = $this->input->post('email'); 
          $message="We will get back to you soon" ;
          $this->email->to($to_email);
          $this->email->from('$your mail','Thnaks for ENQUIRY');
          $this->email->subject('THIS IS EMAIL FROM Homelane ');
          $this->email->message($message);
          $this->email->send();
          
        //  if($this->email->send()) 
        //  $this->session->set_flashdata("email_sent","Email sent successfully."); 
        //  else 
        //  $this->session->set_flashdata("email_sent","Error in sending Email."); 
        $mail = "lokeshreddy160@gmail.com";
        //  $to_email = $this->input->post($mail); 
          $message="We will get back to you soon" ;
          $this->email->to($mail);
          $this->email->from('lokesh.aapto@gmail.com','Thnaks for ENQUIRY');
          $this->email->subject('THIS IS EMAIL FROM Homelane ');
          $this->email->message($message);
          if($this->email->send()) 
         $this->session->set_flashdata("email_sent","Email sent successfully."); 
         else 
         $this->session->set_flashdata("email_sent","Error in sending Email."); 
         $this->load->view('header');
         $this->load->view('home'); 
         $this->load->view('footer');
       
    }
}

        
        //Load email library
// $this->load->library('email');

//SMTP & mail configuration
// $config = array(
//     'protocol'  => 'smtp',
//     'smtp_host' => 'ssl://smtp.googlemail.com',
//     'smtp_port' => 465,
//     'smtp_user' => 'user@gmail.com',
//     'smtp_pass' => 'gmail_password',
//     'mailtype'  => 'html',
//     'charset'   => 'utf-8'
// );
// $this->email->initialize($config);
// $this->email->set_mailtype("html");
// $this->email->set_newline("\r\n");

//Email content
// $htmlContent = '<h1>Sending email via SMTP server</h1>';
// $htmlContent .= '<p>This email has sent via SMTP server from CodeIgniter application.</p>';

// $this->email->to('recipient@example.com');
// $this->email->from('sender@example.com','MyWebsite');
// $this->email->subject('How to send email via SMTP server in CodeIgniter');
// $this->email->message($htmlContent);

//Send email
// $this->email->send();

/////////////////////////////$this->load->library('encrypt');///////////to avoid spamming of mail////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////CHANGE SETTINGS IN GOGLE ACCOUNTS/////
////MY ACCOUNT>SIGNING IN TO GOOGLE(under sign in & security)/////
////SWITCH OFF 2 STEP VERIFICATION/////
////IN CONNECTED APPS N SITES>SWITCH ONN---"ALLOW LESS SECURE APPS"----/////
  

