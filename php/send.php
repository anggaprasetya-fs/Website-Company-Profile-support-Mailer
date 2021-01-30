<?php	

$host 	= 'smtp.gmail.com';		// YOUR SMTP HOST
$user 	= 'xxxx@gmail.com';		// YOUR SMTP USERNAME
$pass 	= 'xxxxxxxxxxxxxx';		// YOUR SMTP PASSWORD
$port 	= 587;					// YOUR SMTP PORT
$secure = 'tls'					// YOUR SMTP SECURE 


$nama = $_POST['nama'];
$subjek = $_POST['subject'];
$pesan  = $_POST['message'];
    
	ini_set('smtp_host', $host);
	ini_set('smtp_port', $port);
	ini_set('smtp_username', $user);
	ini_set('smtp_password', $pass);
	ini_Set('smtp_secure', $secure);
	    
$to = "marketingkita0@gmail.com";
$subject = $subjek.' - '.$nama;
$message = $pesan;
    
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: <contact-us@sipras.host>' . "\r\n";
    
$result = mail($to, $subject, $message, $headers);
    
if ( $result == TRUE){
    
    $data = array('success' => TRUE);
    echo json_encode($data);
    
} else {
    
    $data = array('error' => TRUE);
    echo json_encode($data);
    
}




?>