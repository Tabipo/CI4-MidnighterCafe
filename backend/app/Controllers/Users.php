<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Users extends BaseController
{
    public function index(): string
    {
        return view('user/landing');
        //can ADD HERE more functions for different views or routes/endpoints
    }
}
