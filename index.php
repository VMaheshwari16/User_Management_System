<?php
$users = require_once "data/user.php";

require_once "utils/User.php";
require_once "utils/Validator.php";
include_once "utils/helpers.php";

use Utils\User;
use Utils\Validator;
use function Utils\printResult;
   echo "Users Detail<br>";
   $validate=new Validator();
foreach ($users as $u) {

    $user = new User($u["username"], $u["email"], $u["password"]);
    $user->displayUser();

    printResult("Username", $validate->validateUsername($user->username));
    printResult("Email", $validate->validateEmail($user->email));
    echo "Password: " . $validate->passwordStrength($user->password) . "<br><br>";

    echo "------------------------<br>";
}
