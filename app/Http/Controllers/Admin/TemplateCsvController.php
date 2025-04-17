<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TemplateCsvController extends Controller
{
    public function importForm()
    {
        return view('admin.templates.import');
    }

    public function import(Request $request)
    {
        // TODO: parse CSV and create templates
    }

    public function export()
    {
        // TODO: generate CSV from existing templates
    }
}
