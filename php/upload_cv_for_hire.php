<?php

$upload_folder = "Resumes_for_hire/";
$name_of_uploaded_file = basename($_FILES['uploaded_file']['name']);
$type_of_uploaded_file = substr($name_of_uploaded_file, strrpos($name_of_uploaded_file, '.') + 1);
$size_of_uploaded_file = $_FILES["uploaded_file"]["size"]/1024;

//Settings
$max_allowed_file_size = 500000; // size in KB
$allowed_extensions = array("doc", "docx", "odt", "pdf", "jpg", "jpeg");

//Validations
if($size_of_uploaded_file > $max_allowed_file_size) {
  $errors = "\n Size of file should be less than $max_allowed_file_size";
  echo $errors;
  die();
}

//------ Validate the file extension -----
$allowed_ext = false;
for($i=0; $i<sizeof($allowed_extensions); $i++) {
  if(strcasecmp($allowed_extensions[$i],$type_of_uploaded_file) == 0) {
    $allowed_ext = true;
  }
}

if(!$allowed_ext) {
  $errors = "\n The uploaded file ($name_of_uploaded_file) is not supported file type. ".
  " Only the following file types are supported: ".implode(',',$allowed_extensions);
  echo $errors;
  die();
}

//Check if message has been entered
if (!isset($_POST['email'])) {  
    $errors = 'Please enter your contact email';
    echo $errors;
    die();
}

//copy the temp. uploaded file to uploads folder
$path_of_uploaded_file = "Resumes_for_hire/".basename($_FILES['uploaded_file']['name']);
move_uploaded_file($_FILES["uploaded_file"]["tmp_name"], $path_of_uploaded_file);

include_once('Mail.php');
include_once('Mail_Mime/mime.php');

$message = new Mail_mime();
$message->setTXTBody($text);
$message->addAttachment($path_of_uploaded_file);
$body = $message->get();

$subject = "Request for hiring";

$from = $_POST['name'];
$visitor_email = $_POST['email'];

$to = 'contactjoxbe@gmail.com';  // please change this email id

$extraheaders = array("From"=>$from, "Subject"=>$subject,"Reply-To"=>$visitor_email);
$headers = $message->headers($extraheaders);
$mail = Mail::factory("mail");
$mail->send($to, $headers, $body);

?>


     <!--  function mail_attachment ($from , $to, $subject, $message, $attachment){

         $fileatt = $attachment; // Path to the file
         $fileatt_type = "application/octet-stream"; // File Type 
         
         $start = strrpos($attachment, '/') == -1 ? 
            strrpos($attachment, '//') : strrpos($attachment, '/')+1;
        
         $fileatt_name = substr($attachment, $start, 
            strlen($attachment)); // Filename that will be used for the file as the attachment 
         
         $email_from = $from; // Who the email is from
         $subject = "New Attachment Message";
         
         $email_subject =  $subject; // The Subject of the email 
         $email_txt = $message; // Message that the email has in it 
         $email_to = $to; // Who the email is to
         
         $headers = "From: ".$email_from;
         $file = fopen($fileatt,'rb'); 
         $data = fread($file,filesize($fileatt)); 
         fclose($file); 
         
         $msg_txt="\n\n You have recieved a new attachment message from $from";
         $semi_rand = md5(time()); 
         $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
         $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . "
            boundary=\"{$mime_boundary}\"";
         
         $email_txt .= $msg_txt;
      
         $email_message .= "This is a multi-part message in MIME format.\n\n" . 
            "- -{$mime_boundary}\n" . "Content-Type:text/html; 
            charset = \"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . 
            $email_txt . "\n\n";
        
         $data = chunk_split(base64_encode($data));
         
         $email_message .= "- -{$mime_boundary}\n" . "Content-Type: {$fileatt_type};\n" .
            " name = \"{$fileatt_name}\"\n" . //"Content-Disposition: attachment;\n" . 
            //" filename = \"{$fileatt_name}\"\n" . "Content-Transfer-Encoding: 
            base64\n\n" . $data . "\n\n" . "- -{$mime_boundary}- -\n";
        
         $ok = mail($email_to, $email_subject, $email_message, $headers);
         
         if($ok) {
            echo "File Sent Successfully.";
            unlink($attachment); // delete a file after attachment sent.
         }else {
            die("Sorry but the email could not be sent. Please go back and try again!");
         }
      } -->


   


