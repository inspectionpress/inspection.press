<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agent;

class AgentController extends Controller
{
    public function index()
    {
        $agents = Agent::all();
        return view('admin.agents.index', compact('agents'));
    }

    public function create()
    {
        return view('admin.agents.create');
    }

    public function store(Request $request)
    {
        Agent::create($request->validate([
            'name' => 'required|string',
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'company' => 'nullable|string',
            'license_number' => 'nullable|string',
            'type' => 'required|string',
        ]));

        return redirect()->route('admin.agents.index');
    }
}
