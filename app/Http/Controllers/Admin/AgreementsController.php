<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AgreementsController extends Controller
{
    public function index()
    {
        return view('admin.agreements.index');
    }
}
