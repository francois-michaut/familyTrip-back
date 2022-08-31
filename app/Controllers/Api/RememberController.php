<?php

namespace FamilyTrip\Controllers\Api;

use FamilyTrip\Models\Remember;

class RememberController
{
    public function rememberPost()
    {
        $data = file_get_contents('php://input');

        $remember = json_decode($data, true);

        print_r($remember);

        $location = $remember['locationRemember'];
        $date = $remember['dateRemember'];
        $members = $remember['membersRemember'];
        $name = $remember['nameRemember'];

        $remember = new Remember();

        $remember->addRemember($location, $date, $members, $name);

        return $remember;
    }
}