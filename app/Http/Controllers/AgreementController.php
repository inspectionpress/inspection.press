<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inspection;

class AgreementController extends Controller
{
    public function show($inspectionId)
    {
        $inspection = Inspection::findOrFail($inspectionId);
        return view('agreements.sign', compact('inspection'));
    }

    public function submit(Request $request, $inspectionId)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'agree' => 'required',
        ]);

        $inspection = Inspection::findOrFail($inspectionId);
        $inspection->agreement_signed_at = now();
        $inspection->agreement_signed_name = $request->name;
        $inspection->save();

        return redirect()->route('inspection.public', $inspection->id);
    }
}
