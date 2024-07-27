<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $allCategories = ['Category 1', 'Category 2'];
        dd("Test HomeController Index Web Endpoint. This hasn't been implemented yet. - KP");
    }

    function php_info()
    {
        phpinfo();
    }
}
