<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\InspectionTemplate;
use App\Models\TemplateSection;
use App\Models\TemplateFinding;

class TemplateController extends Controller
{
    public function index()
    {
        $templates = InspectionTemplate::all();
        return view('admin.templates.index', compact('templates'));
    }

    public function create()
    {
        return view('admin.templates.create');
    }

    public function store(Request $request)
    {
        $request->validate(['name' => 'required|string']);
        $template = InspectionTemplate::create(['name' => $request->name]);
        return redirect()->route('admin.templates.edit', $template);
    }

    public function edit(InspectionTemplate $template)
    {
        $template->load('sections.findings');
        return view('admin.templates.edit', compact('template'));
    }

    public function storeSection(Request $request, InspectionTemplate $template)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
        ]);

        $template->sections()->create($request->only('title', 'description'));
        return redirect()->route('admin.templates.edit', $template);
    }

    public function updateSection(Request $request, TemplateSection $section)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
        ]);

        $section->update($request->only('title', 'description'));
        return back()->with('success', 'Section updated.');
    }

    public function destroySection(TemplateSection $section)
    {
        $section->delete();
        return back()->with('success', 'Section deleted.');
    }

    public function storeFinding(Request $request, TemplateSection $section)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'recommendation' => 'nullable|string',
        ]);

        $section->findings()->create($request->only('title', 'description', 'recommendation'));
        return back();
    }

    public function updateFinding(Request $request, TemplateFinding $finding)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'nullable|string',
            'recommendation' => 'nullable|string',
        ]);

        $finding->update($request->only('title', 'description', 'recommendation'));
        return back()->with('success', 'Finding updated.');
    }

    public function destroyFinding(TemplateFinding $finding)
    {
        $finding->delete();
        return back()->with('success', 'Finding deleted.');
    }

    public function updateSectionOrder(Request $request)
    {
        foreach ($request->order as $item) {
            \App\Models\TemplateSection::where('id', $item['id'])->update(['order' => $item['order']]);
        }
        return response()->json(['status' => 'ok']);
    }

    public function updateFindingOrder(Request $request)
    {
        foreach ($request->order as $item) {
            \App\Models\TemplateFinding::where('id', $item['id'])->update(['order' => $item['order']]);
        }
        return response()->json(['status' => 'ok']);
    }
}