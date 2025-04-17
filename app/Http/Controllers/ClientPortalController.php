<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inspection;

class ClientPortalController extends Controller
{
    public function view($uuid)
    {
        $inspection = Inspection::with('sections.findings')->findOrFail($uuid);
        return view('client.portal', compact('inspection'));
    }

    public function downloadPdf($uuid)
    {
        $inspection = Inspection::findOrFail($uuid);
        $pdfPath = storage_path('app/public/inspection-report-' . $uuid . '.pdf');

        return response()->download($pdfPath);
    }
}
