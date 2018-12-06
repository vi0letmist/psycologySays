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
            'isi' => 'required',
            'gambar' => 'required',
        ]);

        $shr = new Share;
        $shr->blog = $request->input('blog');
        $shr->gambar = $request->input('gambar');
        $shr->isi = $request->input('isi');
        $shr->user_id = auth()->user()->id;
        $shr->save();

        return redirect('/share')->with('success', 'Blog submitted');
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
            'isi' => 'required',
            'gambar' => 'required',
        ]);

        $shr = Share::find($id_s);
        $shr->blog = $request->input('blog');
        $shr->gambar = $request->input('gambar');
        $shr->isi = $request->input('isi');
        $shr->user_id = auth()->user()->id;
        $shr->save();

        return redirect('/share')->with('success', 'Blog updated');
    }

    public function destroy($id_s)
    {
        $shr =  Share::find($id_s);
        $shr->delete();

        return redirect('/share')->with('success', 'Blog removed');
    }
}
