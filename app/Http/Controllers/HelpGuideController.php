<?php

namespace App\Http\Controllers;

use App\Models\HelpGuide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HelpGuideController extends Controller
{
    public function index()
    {
        $helpGuides = HelpGuide::with('user')->latest()->get();

        return view('help_guides', compact('helpGuides'));
    }

    public function create()
    {
        return view('help_guides');
    }

    public function store(Request $request)
    {
        
       
        $helpGuide = new HelpGuide([
            'link' => $request->input('link'),
            'description' => $request->input('description'),
            'user_id' => Auth::user()->id,
        ]);

        $helpGuide->save();

        return redirect()->route('help-guides.index')->with('success', 'Help guide added successfully!');
    }
}

