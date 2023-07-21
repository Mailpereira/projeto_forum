<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    public function index(Support $supports){

        $supports = $supports->all();
        //dd($supports);

        return view('site.support.index', compact('supports'));
    }

    public function create()
    {
        return view('site.support.create');
    }

    public function store(Request $request, Support $support)
    {
        $data = $request->all();
        $data['status'] = 'a';

        $support = $support->create($data);

        return redirect()->route('support.index');
    }
}
