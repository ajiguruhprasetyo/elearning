<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Soal;
use App\Mapel;

class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soal = Soal::orderBy('id')->paginate(20);
        return view('soal.index', compact('soal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mapels = Mapel::all();
        return view('soal.create', compact('mapels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title'         => 'required',
            'a'             => 'required',
            'b'             => 'required',
            'c'             => 'required',
            'd'             => 'required',
            'e'             => 'required',
            'id_mapel'      => 'required',
        ]);

        $soal           = new Soal();
        $soal->title    = $request->title;
        $soal->a        = $request->a;
        $soal->b        = $request->b;
        $soal->c        = $request->c;
        $soal->d        = $request->d;
        $soal->e        = $request->e;
        $soal->id_mapel = $request->id_mapel;
        $soal->save();

        return redirect()->route('soal.index')->with('success', 'Data berhasil di simpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mapels = Mapel::all();
        $soal = Soal::find($id);

        return view('soal.edit', compact('soal', 'mapels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'         => 'required',
            'a'             => 'required',
            'b'             => 'required',
            'c'             => 'required',
            'd'             => 'required',
            'e'             => 'required',
            'id_mapel'      => 'required',
        ]);

        Soal::find($id)->update($request->all());

        return redirect()->route('soal.index')->with('success', 'Data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Soal::find($id)->delete();

        return \redirect()->route('soal.index')->with('danger','Data berhasil di hapus');
    }

    
}
