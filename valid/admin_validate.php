<?php
function imageRequired()
{
    foreach ($_FILES as $image) {
        if ($image['size'] > 0) {
            return true;
        }
    }

    return false;
}



function required($input){
   // if(htmlspecialchars(stripslashes(trim(strlen($input)) > 0))) return true;
    if(trim(strlen($input)) > 0) return true;

    return false;
}



function is_text($data){
    if (!preg_match("/^[a-zA-Z ]*$/",$data)) {
        return false;
    }
    return true;
}



function is_equal($first_data, $second_data){
    if ($first_data === $second_data)return true;
    return false;
}



function valid_email($e){
    return (bool)preg_match("`^[a-z0-9!#$%&'*+\/=?^_\`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_\`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$`i", trim($e));
}