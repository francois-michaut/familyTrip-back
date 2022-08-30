<?php

namespace FamilyTrip\Controllers\Api;

use FamilyTrip\Models\Tribe;

class TribeController
{
    public function postTribeName()
    {
        echo('salut');

        dump(file_get_contents('php://input'));
        // print_r($data);
       dump(get_defined_vars());
    }

    public function postTribeNamePost()
    {
        $data = file_get_contents('php://input');
        $tribeName = json_decode($data, true);
        error_log(print_r($tribeName['tribeName']));

        $tribe = new Tribe();

        $tribe->addTribe($tribeName['tribeName']);

        return $tribe;
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