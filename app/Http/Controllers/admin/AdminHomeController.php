<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

class AdminHomeController extends Controller
{
    //
    public function index()
    {
        $viewData = [];
        $viewData['title'] = "admin page - admin - online store";
        return view('admin.home.index')-> with('viewData', $viewData);
    }
}
