<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inspection;
use App\Models\Customer;
use PDF;

class InspectionController extends Controller
{
    public function create()
    {
        return view('inspections.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'property_address' => 'required|string',
            'inspection_date' => 'required|date',
            'name' => 'required|string',
            'email' => 'nullable|email',
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
        ]);

        // Check if matching customer exists
        $customer = Customer::where('email', $request->email)->first();

        if (!$customer) {
            $customer = Customer::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
            ]);
        }

        $inspection = Inspection::create([
            'customer_id' => $customer->id,
            'property_address' => $request->property_address,
            'inspection_date' => $request->inspection_date,
        ]);

        return redirect()->route('inspection.show', $inspection->id);
    }

    public function publicView($uuid)
    {
        $inspection = Inspection::with('sections.findings')->findOrFail($uuid);
        return view('inspections.public', compact('inspection'));
    }

    public function downloadPdf($uuid)
    {
        $inspection = Inspection::with('sections.findings')->findOrFail($uuid);
        $pdf = PDF::loadView('inspections.public-pdf', compact('inspection'));
        return $pdf->download('inspection-report-' . $inspection->id . '.pdf');
    }
}
