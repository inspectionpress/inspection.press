<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class SettingsController extends Controller
{
    public function edit()
    {
        $company = Company::first();
        return view('admin.settings.edit', compact('company'));
    }

    public function update(Request $request)
    {
        $company = Company::first();
        $company->update([
            'square_access_token' => $request->square_access_token,
        ]);

        return back()->with('success', 'Settings updated.');
    }
}
