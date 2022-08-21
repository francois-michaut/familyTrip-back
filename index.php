<?php
 // http://localhost/Family-Trip/familyTrip-back/
require_once 'functions.php' ;
try{
    if (!empty($_GET['_url'])) {
        $url = explode("/", filter_var($_GET['_url'], FILTER_SANITIZE_URL));
        // var_dump($url);
        switch( $url[1]) {
            case 'user' : 
                $users = getUsers();
                break;
            case 'activities' :
                $activities = getActivities();
                break;
            case 'create-tribe' :
                header("Access-Control-Allow-Origin: *");
                header("Content-Type: application/json");
                header("Access-Control-Allow-Methods: POST");
                header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
                // $data = json_decode(file_get_contents("php://input", true));
                // $_POST = json_decode(array_keys($_POST)[0], true);
                // var_dump($_POST);
                var_dump(get_defined_vars());
                // var_dump($_REQUEST);
                // if (isset( $_POST['submit'])) {
                //     echo('hello');
                // } else {
                //     var_dump($_POST);
                // }
                break;
                // $tribe = getTribeName();
            }
    } else {
        throw new Exception ("Problème de récupération de données.");
    }

} catch(Exception $e) {
    $erreur = [
        "message" => $e->getMessage(),
        "code" => $e->getCode()
    ];
    var_dump($erreur);
}