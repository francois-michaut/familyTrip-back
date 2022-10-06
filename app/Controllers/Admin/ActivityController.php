<?php

namespace FamilyTrip\Controllers\Admin;

use FamilyTrip\Models\Activity;

class ActivityController extends CoreController
{

    public function activityEdit($id) 
    {
       $activity = new Activity;

       $activityObject = $activity->find($id);


       $param =  ['activity' => $activityObject ];

       

        $this->show('activityEdit', $param);

    }

    public function activityDeletePage($id)
    {
        $activity = new Activity;

        $activityObject = $activity->find($id);

        $param = ['activity' => $activityObject ];

        $this->show('activityDelete', $param);
    }

    public function activityDelete($id)
    {
        $activity = new Activity;

        $activity->delete($id);

        $this->redirect('activity');
    }

    public function activityUpdate($id)
    {
        $activityType = filter_input(INPUT_POST, 'activityType');
        $activityDate = filter_input(INPUT_POST, 'activityDate');
        $activityLocation = filter_input(INPUT_POST, 'activityLocation');
        $activityHourly = filter_input(INPUT_POST, 'activityHourly');
        $activityMore = filter_input(INPUT_POST, 'activityMore');

        $activity = new Activity;

        $newActivity = $activity->find($id);

        $newActivity->setType($activityType);
        $newActivity->setDate($activityDate);
        $newActivity->setLocation($activityLocation);
        $newActivity->setHourly($activityHourly);
        $newActivity->setMore($activityMore);

        // dump($newActivity);
        $newActivity->update();

        $this->redirect('activity');
    }

    public function activityAdd()
    {
        $this->show('activityAdd');
    }

    public function activityAddBdd()
    {
        $activityType = filter_input(INPUT_POST, 'activityType');
        $activityLocation = filter_input(INPUT_POST, 'activityLocation');
        $activityDate = filter_input(INPUT_POST, 'activityDate');
        $activityHourly = filter_input(INPUT_POST, 'activityHourly');
        $activityMembers = filter_input(INPUT_POST, 'activityMembers');
        $activityDescription = filter_input(INPUT_POST, 'activityDescription');

        $newActivity = new Activity;

        $newActivity->addActivity($activityType, $activityLocation, $activityDate, $activityHourly, $activityMembers, $activityDescription);

        $this->redirect('activity');
    }
}

