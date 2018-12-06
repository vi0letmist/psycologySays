<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Motive;

class MotiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vds = Motive::orderBy('created_at', 'asc')->paginate(10);
        return view('motive.index')->with('Motive', $vds);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('motive.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,  [
            'judul' => 'required',
            'url' => 'required',
            'capt' => 'required'
        ]);

        $vds = new Motive;
        $vds->judul = $request->input('judul');
        $vds->url = $request->input('url');
        $vds->capt = $request->input('capt');
        $vds->save();

        return redirect('/motive')->with('success', 'Motivation Video submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_m)
    {
        $vds = Motive::find($id_m);
        return view('motive.show')->with('Motive', $vds);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_m)
    {
        $vds = Motive::find($id_m);
        return view('motive.edit')->with('Motive', $vds);   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_m)
    {
        $this->validate($request,  [
            'judul' => 'required',
            'url' => 'required',
            'capt' => 'required'
        ]);

        $vds = Motive::find($id_m);
        $vds->judul = $request->input('judul');
        $vds->url = $request->input('url');
        $vds->capt = $request->input('capt');
        $vds->save();

        return redirect('/motive')->with('success', 'Motivation Video updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_m)
    {
        $vds =  Motive::find($id_m);
        $vds->delete(); 

        return redirect('/motive')->with('success', 'Motivation Video removed');
    }
}
