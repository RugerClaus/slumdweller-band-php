<?php 
    $to = 'submissions@slumdweller.band';
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $from = $_POST['email'];
    $headers = [
        "$from",
        'MIME-Version: 1.0' . "\r\n",
        'Content-type: text/html; charset=iso-8859-1' . "\r\n",
        
    ];
    mail($to,$subject,$message,$headers);
?>