<?php

namespace FamilyTrip\Controllers\Api;

use FamilyTrip\Models\Activity;

class ActivityController
{
    public function activityPost()
    {
        $data = file_get_contents('php://input');

        $activity = json_decode($data, true);

        print_r($activity);

        $type = $activity['typeActivity'];
        $location = $activity['locationActivity'];
        $date = $activity['dateActivity'];
        $hourly = $activity['hourlyActivity'];
        $members = $activity['membersActivity'];
        $description = $activity['moreActivity'];
        

        $activity = new Activity();

        $activity->addActivity($type, $location, $date, $hourly, $members, $description);

        return $activity;
    }
}