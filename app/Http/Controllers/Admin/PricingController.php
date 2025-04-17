<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class PricingController extends Controller
{
    public function edit()
    {
        $company = Company::first();
        return view('admin.pricing.edit', compact('company'));
    }

    public function update(Request $request)
    {
        $company = Company::first();
        $company->update($request->only([
            'base_mileage_rate',
            'square_footage_tiers',
            'age_surcharge_rules',
        ]));

        return back()->with('success', 'Pricing settings updated.');
    }
}
