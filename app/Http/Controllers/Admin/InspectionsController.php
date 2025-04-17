<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class InspectionsController extends Controller
{
    public function index()
    {
        return view('admin.inspections.index');
    }
}
