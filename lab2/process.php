<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    $message = $_POST['message'];
    $sms = isset($_POST['sms']) ? "СМС" : "";
    $emailCheck = isset($_POST['emailCheck']) ? "E-mail" : "";

    $data = array(
        'name' => $name,
        'email' => $email,
        'type' => $type,
        'message' => $message,
        'options' => array($sms, $emailCheck)
    );

    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );

    $context  = stream_context_create($options);
    $result = file_get_contents('https://httpbin.org/post', false, $context);

    echo $data;
}
?>