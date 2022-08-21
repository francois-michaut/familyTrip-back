<?php
require_once './app/Models/CoreModel.php';

require_once './app/Models/User.php';
function getUsers() {

    $host = "localhost";
    $dbname = "TRIBES";
    $user = "root";
    $pass = "Lamiche.77";
    $pdo = new PDO("mysql:host=" . $host . ";dbname=" . $dbname, $user, $pass);;

    $sql = " SELECT * FROM `USER`";

    $statement = $pdo->query( $sql );

    $userList = $statement->fetchAll( PDO::FETCH_ASSOC );

    sendJSON($userList);


} 

function getTribeName() {
    echo ('salut');
    var_dump(get_defined_vars());
}

function getActivities() {
    $activity = [
        'a' => 'vélo',
        'b' => 'randonnée',
    ];
     sendJSON($activity);
}

function sendJSON($data) {
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json");
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
}