<?php

namespace FamilyTrip\Controllers\Api;

use FamilyTrip\Models\Activity;

class ActivityController
{
    public function activityPost()
    {
        $data = file_get_contents('php://input');

        $activity = json_decode($data, true);

        $type = $activity['typeActivity'];
        $location = $activity['locationActivity'];
        $date = $activity['dateActivity'];
        $hourly = $activity['hourlyActivity'];
        $members = $activity['membersActivity'];
        $description = $activity['moreActivity'];
        print_r($type);
        print_r($location);
        print_r($date);
        print_r($hourly);
        print_r($members);
        print_r($description);

        $activity = new Activity();

        $activity->addActivity($type, $location, $date, $hourly, $members, $description);

        return $activity;
    }
}