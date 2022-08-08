<?php 
    function is_email($email) {
        $pattern = "^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$^";
        $is_valid = preg_match($pattern, $email);
        
        if($is_valid){
            return true;
        }else{
            return false;
        }
    }  
?>