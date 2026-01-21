<?php
namespace utils;
class Validator {
    public  function validateUsername($username)
    {
        return preg_match('/^[a-zA-Z ]+$/', $username);
    }

    public  function validateEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

public  function passwordStrength($password)
{
    if (strlen($password) < 4) {
        return "Weak";
    }
    else if (strlen($password) < 8) {
        return "Medium";
    }
    else{
        return "Strong";
    }
}

}
?>