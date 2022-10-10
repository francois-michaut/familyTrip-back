<?php

namespace FamilyTrip\Controllers\Api;

use FamilyTrip\Models\Tribe;

class TribeController
{
    // public function postTribeName()
    // {
    //     echo('salut');

    //     dump(file_get_contents('php://input'));
    //     // print_r($data);
    //    dump(get_defined_vars());
    // }

    public function postTribeNamePost()
    {
        // header("Content-Type: application/json");

        $data = file_get_contents('php://input');
        dump($data);
        $tribeName = json_decode($data, true);
        // error_log(print_r($tribeName['tribeName']) . 'ligne22');
        dump($tribeName['tribeName']);

        $tribe = new Tribe();

        $tribeAdded = $tribe->addTribe($tribeName['tribeName']);

        // $responseTribe = json_encode($tribeAdded);
        // dump($responseTribe);

        return $tribeAdded;
    }

    public function getTribes()
    {
        $tribe = new Tribe();

        $tribeList = $tribe->findAll();

        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json");

        echo json_encode($tribeList, JSON_UNESCAPED_UNICODE);
    }
}