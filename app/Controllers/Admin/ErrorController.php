<?php

namespace FamilyTrip\Controllers\Admin;

class ErrorController extends CoreController
{
    public function err404()
   {
    http_response_code(404);

    $this->show('err404');

     exit;
   } 
} 
