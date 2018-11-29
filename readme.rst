###################
CodeIgniter Web Application can send Mail using CodeIgniter Email Class using google SMPT 
###################


*******************
Using  Information
*******************

`
//Load email library
$this->load->library('email');
//SMTP & mail configuration
$config = array(
'protocol' => 'smtp',
'smtp_host' => 'ssl://smtp.googlemail.com',
'smtp_port' => 465,
'smtp_user' => 'user@gmail.com',
'smtp_pass' => 'gmail_password',
'mailtype' => 'html',
'charset' => 'utf-8'
);
$this->email->initialize($config);
$this->email->set_mailtype("html");
$this->email->set_newline("\r\n");

//Email content
$htmlContent = '<h1>Sending email via SMTP server</h1>';
$htmlContent .= '<p>This email has sent via SMTP server from CodeIgniter application.</p>';

$this->email->to('recipient@example.com');
$this->email->from('sender@example.com','MyWebsite');
$this->email->subject('How to send email via SMTP server in CodeIgniter');
$this->email->message($htmlContent);

//Send email
$this->email->send();

/////////////////////////////$this->load->library('encrypt');///////////to avoid spamming of mail////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

////CHANGE SETTINGS IN GOGLE ACCOUNTS/////
////MY ACCOUNT>SIGNING IN TO GOOGLE(under sign in & security)/////
////SWITCH OFF 2 STEP VERIFICATION/////
////IN CONNECTED APPS N SITES>SWITCH ONN---"ALLOW LESS SECURE APPS"----/////
`