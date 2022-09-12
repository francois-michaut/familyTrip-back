<?php

namespace FamilyTrip\Controllers\Admin;

use FamilyTrip\Models\Activity;

class ActivityController extends CoreController
{

    public function activityEdit($id) 
    {
        $activityId = $id['id'];

       $activity = new Activity;

       $activityObject = $activity->find($activityId);


       $param =  ['activity' => $activityObject ];

       

        $this->show('activityEdit', $param);

    }

    public function activityUpdate($id)
    {
        $activityId = $id['id'];
        // dump($activityId);
        $activityType = filter_input(INPUT_POST, 'activityType');
        $activityDate = filter_input(INPUT_POST, 'activityDate');
        $activityLocation = filter_input(INPUT_POST, 'activityLocation');
        $activityHourly = filter_input(INPUT_POST, 'activityHourly');
        $activityMore = filter_input(INPUT_POST, 'activityMore');
        $activity = new Activity;

        $newActivity = $activity->find($activityId);

        $newActivity->setType($activityType);
        $newActivity->setDate($activityDate);
        $newActivity->setLocation($activityLocation);
        $newActivity->setHourly($activityHourly);
        $newActivity->setMore($activityMore);

        // dump($newActivity);
        $newActivity->update();

        $this->redirect('activity');
    }
}

