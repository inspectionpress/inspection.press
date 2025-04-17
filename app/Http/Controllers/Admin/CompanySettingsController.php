<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class CompanySettingsController extends Controller
{
    public function edit()
    {
        $company = Company::first(); // Replace with auth()->user()->company if multi-tenant
        return view('admin.settings.edit', compact('company'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'square_access_token' => 'nullable|string',
            'square_location_id' => 'nullable|string',
            'square_app_id' => 'nullable|string',
        ]);

        $company = Company::first();
        $company->update($request->only([
            'square_access_token',
            'square_location_id',
            'square_app_id',
        ]));

        return back()->with('success', 'Company settings updated.');
    }
}
