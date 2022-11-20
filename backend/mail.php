<?php 
    if(isset($_POST['send-email'])) {
        $to = 'submissions@slumdweller.band';
        $subject = $_POST['subject'];
        $message = "<p>" . $_POST['message'] . "</p>";
        $from = $_POST['email'];
        $headers = "$from";
        $headers .= 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        
        mail($to,$subject,$message,$headers);
        header('location: ../index.php');
    }
?>