<?php
include __DIR__ . '/env.php';

$site = "Levelop Construction Group";
$phone_number = "1300 853 813";
$admin_email = 'arijal@aiims.com.au';
$bcc_email = "";
$no_reply_email = 'no_reply@levelop.com.au';
$recaptcha_client_secret = $client_secret;
$recaptcha_server_secret = $server_secret;

$facebook = "https://www.facebook.com/levelopconstructiongroup";
$instagram = "https://www.instagram.com/levelop_construction_group/";
$linkedin = "";
$youtube = "";

function renderImage($imageName, $altText = '', $class='') {
    $imageUrl = "./dist/assets/images/" . $imageName;

    $alt = $altText ?: pathinfo($imageName, PATHINFO_FILENAME);

    return '<img src="' . $imageUrl . '" alt="' . $alt . '" class="' . $class . '">';
}
