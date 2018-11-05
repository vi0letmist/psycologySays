<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Share;

class ShareController extends Controller
{
    public function index()
    {
        $shr = Share::orderBy('created_at', 'asc')->paginate(10);
        return view('share.index')->with('Share', $shr);
    }

    public function create()
    {
        return view('share.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,  [
            'blog' => 'required',
            'isi' => 'required'
        ]);

        $shr = new Share;
        $shr->quest = $request->input('blog');
        $shr->desc = $request->input('isi');
        $shr->save();

        return redirect('/share')->with('success', 'Quest submitted');
    }

    public function show($id_s)
    {
        $shr = Share::find($id_s);
        return view('share.show')->with('Share', $shr);
    }

    public function edit($id_s)
    {
        $shr = Share::find($id_s);
        return view('share.edit')->with('Share', $shr);   
    }

    public function update(Request $request, $id_s)
    {
        $this->validate($request,  [
            'blog' => 'required',
            'isi' => 'required'
        ]);

        $shr = Share::find($id_s);
        $shr->quest = $request->input('blog');
        $shr->desc = $request->input('isi');
        $shr->save();

        return redirect('/share')->with('success', 'Quest updated');
    }

    public function destroy($id_s)
    {
        $shr =  Share::find($id_s);
        $shr->delete(); 

        return redirect('/share')->with('success', 'Quest removed');
    }
}
