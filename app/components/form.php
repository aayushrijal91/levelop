<?php

include __DIR__ .'/../function.php';

 if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['token'])) {
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = $recaptcha_server_secret;
    $recaptcha_response = $_POST['token'];
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    try {
       if ($recaptcha->score < 0.5) {
            throw new Exception('Low Score');
        }

        $to = $admin_email;

        $subject = "Message from " . $site;

        $name = $_POST['name'];
        $phone = $_POST['contact-number'];
        $email = $_POST['email'];
        $street_address = $_POST['street-address'];
        $postcode = $_POST['postcode'];
        $room_type = $_POST['room-type'];
        $notes = $_POST['message'];

        $service = '';
        if (!empty($serviceTop)) {
            $service = $serviceTop;
        } else if (!empty($serviceFooter)) {
            $service = $serviceFooter;
        }

        $message = '<!DOCTYPE html>
                <html>
                    <head>
                        <style>
                            table {
                                font-family: arial, sans-serif;
                                border-collapse: collapse;
                                width: 100%;
                            }
                            
                            td, th {
                                border: 1px solid #dddddd;
                                text-align: left;
                                padding: 8px;
                            }
                            
                            tr:nth-child(even) {
                                background-color: #dddddd;
                            }
                        </style>
                    </head>
                <body><table><tbody>' .
            '<tr>' .
            '<td>Name: </td>' .
            '<td><b>' . strip_tags($name) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Contact Number: </td>' .
            '<td><b>' . strip_tags($phone) . '</b></td>' .
            '</tr>' .
            '<tr>' .
            '<td>Email Address: </td>' .
            '<td><b>' . strip_tags($email) . '</b></td>' .
            '</tr>' . 
            '<tr>' .
            '<td>Street Address: </td>' .
            '<td><b>' . strip_tags($street_address) . '</b></td>' .
            '</tr>' . 
            '<tr>' .
            '<td>Postcode: </td>' .
            '<td><b>' . strip_tags($postcode) . '</b></td>' .
            '</tr>' . 
            '<tr>' .
            '<tr>' .
            '<td>Room Type: </td>' .
            '<td><b>' . strip_tags($room_type) . '</b></td>' .
            '</tr>' . 
            '<tr>' .
            '<td>Message: </td>' .
            '<td><b>' . strip_tags($notes) . '</b></td>' .
            '</tr>' . 
            '</tbody></table></body></html>';

        $headers = "MIME-Version: 1.0\r\n" .
            "Content-type: text/html; charset=utf-8\r\n" .
            "From: " . $site . " <" . $no_reply_email . ">" . "\r\n" .
             "Bcc: " . $bcc_email . "\r\n" .
            "Reply-To: " . $site . " <" . $no_reply_email . ">" . "\r\n" .
            "X-Mailer: PHP/" . phpversion();
        $result = mail($to, $subject, $message, $headers);

        if ($result) {
            header('location:./../thankyou.php');
        } else {
            throw new Exception('Failed, please submit form again or call us directly.');
        }
    } catch (Exception $e) {
        echo '<script language="javascript">alert("' . $e->getMessage() . '")</script>';
        echo '<script language="javascript">history.go(-1);</script>';
    }
}
 