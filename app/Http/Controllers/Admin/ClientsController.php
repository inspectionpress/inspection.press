<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ClientsController extends Controller
{
    public function index()
    {
        return view('admin.clients.index');
    }
}
