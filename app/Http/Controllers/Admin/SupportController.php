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

    public function show(string|int $id, Support $support)
    {
        //$support = Support::find($id);
        //$support = Support::where('id', $id)->first();
        //$support = Support::where('id', '=', $id)->fisrt();
        if(!$support = $support->find($id)){
            return redirect()->back();
        }
        
        return view('site.support.show', compact('support'));
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
