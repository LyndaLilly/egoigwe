<?php 


function dnd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";

    die;
}

function sanitizeInput($data)
{
    return htmlspecialchars($data, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

function isEmpty($data)
{
    foreach ($data as $key => $value) {
        if (empty($value)) {
            return $key . " field is empty";
        }
    }
    return 1;
}

function redirect($where, $info = '', $type = '')
{
    if (empty($info)) {
        header("location: $where");
    }

    if (!empty($info)) {
        header("location: $where?error=$info&type=$type");
    }
    exit;

}

function abort($code)
{
    http_response_code($code);
    require "controller/$code.php";
    die;
}

function toJson($res){
    return json_decode(json_encode($res));

}



