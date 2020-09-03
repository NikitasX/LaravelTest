<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // Home page of a registered user
        
        // Shows the user's 5 latest short url
        // in a table, including both the short and
        // the long version of the url
        // with a delete action
    }
}
