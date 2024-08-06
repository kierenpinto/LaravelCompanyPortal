<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Container\Container;

class HomeController extends Controller
{
    public function index()
    {
        $allCategories = ['Category 1', 'Category 2'];
        dd("Test HomeController Index Web Endpoint. This hasn't been implemented yet. - KP");
    }

    public function php_info()
    {
        phpinfo();
    }

    public function testGroup(Group $group, Container $container)
    {
        // dd($container);
        dd($group);
    }
}
