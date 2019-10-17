<?php
try {
    $form_id = "1dT1JJwl8udTKWsS0d3kn5vqQRZvZgfmWj_Gqoz7V2lI";
    $url     = "https://docs.google.com/forms/d/" . $form_id . "/formResponse";

    /* form fields and it's values */
    
    $data = [
        'entry.2006681157' => 'Alex', // first name
        'entry.1519578724' => 'Smith' // last name
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

    $result = curl_exec($ch);
    $errors = curl_error($ch);

    curl_close($ch);
    $output = [
        'result' => $result,
        'errors' => $errors
    ];
    return $output;
} catch (Exception $exception) {
    return $exception;
}
?>