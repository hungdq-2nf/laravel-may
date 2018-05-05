<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    public function all()
    {
        return \App\Users2::all();
    }
}
