<?php

namespace FamilyTrip\Controllers\Admin;

class ErrorController extends CoreController
{
    public function err404()
   {
    $this->show('err404');

    exit;
   } 
} 
