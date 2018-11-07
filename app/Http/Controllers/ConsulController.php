<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consul;

class ConsulController extends Controller
{

    public function index()
    {
        $csl = Consul::orderBy('created_at', 'asc')->paginate(10);
        return view('consul.index')->with('Consul', $csl);
    }

    public function create()
    {
        return view('consul.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,  [
            'judul' => 'required',
            'isi' => 'required'
        ]);

        $csl = new Consul;
        $csl->judul = $request->input('judul');
        $csl->isi = $request->input('isi');
        $csl->save();

        return redirect('/consultation')->with('success', 'Quest submitted');
    }

    public function show($id_c)
    {
        $csl = Consul::find($id_c);
        return view('consul.show')->with('Consul', $csl);
    }

    public function edit($id_c)
    {
        $csl = Consul::find($id_c);
        return view('consul.edit')->with('Consul', $csl);   
    }

    public function update(Request $request, $id_c)
    {
        $this->validate($request,  [
            'quest' => 'required',
            'desc' => 'required'
        ]);

        $csl = Consul::find($id_c);
        $csl->judul = $request->input('judul');
        $csl->isi = $request->input('isi');
        $csl->save();

        return redirect('/consultation')->with('success', 'Quest updated');
    }

    public function destroy($id_c)
    {
        $csl =  Consul::find($id_c);
        $csl->delete(); 

        return redirect('/consultation')->with('success', 'Quest removed');
    }
}
