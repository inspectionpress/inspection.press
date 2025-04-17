<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inspection;
use App\Models\Client;
use App\Models\Agent;

class DashboardController extends Controller
{
	public function index()
	{
		return view('admin.dashboard', [
			'inspectionsCount' => Inspection::count(),
			'clientsCount'     => Client::count(),
			'agentsCount'      => Agent::count(),
		]);
	}
}
