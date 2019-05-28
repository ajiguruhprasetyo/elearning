<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OpsiJawaban;
use App\Mapel;
use App\Soal;
use Illuminate\Support\Facades\DB;

class OpsiJawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $oj = OpsiJawaban::orderBy('created_at')->paginate(10);

        return view('opsi.index', compact('oj'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $soal = Soal::all();
        $mapel = Mapel::all();

        return view('opsi.create', compact('soal', 'mapel'));
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
            'a' => 'required',
            'b' => 'required',
            'c' => 'required',
            'd' => 'required',
            'id_soal' => 'required',
            'id_mapel' => 'required'
        ]);

        $opsi = new OpsiJawaban();
        $opsi->a = $request->a;
        $opsi->b = $request->b;
        $opsi->c = $request->c;
        $opsi->d = $request->d;
        $opsi->id_soal = $request->id_soal;
        $opsi->id_mapel = $request->id_mapel;
        $opsi->save();

        return redirect()->route('opsi.index')->with('success', 'Data berhasil ditambahkan');
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
        $opsi = OpsiJawaban::find($id);
        $soal = Soal::all();
        $mapel = Mapel::all();

        return view('opsi.edit', compact('opsi', 'soal', 'mapel'));
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
            'a' => 'required',
            'b' => 'required',
            'c' => 'required',
            'd' => 'required',
            'id_soal' => 'required',
            'id_mapel' => 'required'
        ]);

        OpsiJawaban::find($id)->update($request->all());

        return redirect()->route('opsi.index')->with('success', 'Data berhasil di edit');
    }

    /*
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OpsiJawaban::find($id)->delete();

        return redirect()->route('opsi.index')->with('danger','Data berhasil di hapus');
    }
    public function mapelsoal() {
        $soal = DB::table('opsi_jawabans')
                    ->join('mapels', 'opsi_jawabans.id_mapel', '=', 'mapels.id')
                    ->join('soals', 'opsi_jawabans.id_soal', '=', 'soals.id')
                    ->select('mapels.nama_mapel as mapel')
                    ->distinct('mapel')
                    ->get();

        return view('opsi.soal', compact('soal'));
    }
}