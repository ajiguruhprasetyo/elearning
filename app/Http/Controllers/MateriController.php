<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use App\Materi;
use Illuminate\Support\Facades\Storage;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materi = DB::table('materis')->join('mapels', 'materis.id_mapel', '=', 'mapels.id')
                    ->select('materis.*', 'mapels.nama_mapel as asu')
                    ->get();

        return view('materi.index', compact('materi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mapel = DB::table('mapels')->select('*')->get();

        return view('materi.create', compact('mapel'));
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
            'id_mapel'  => 'required',
            'judul'     => 'required|max:191',
            'body'      => 'required',
            'file_pdf'  => 'nullable|file|max:2000',
        ]);

        $materi = new Materi();
        $materi->id_mapel   = $request->id_mapel;
        $materi->judul      = $request->judul;
        $materi->body       = $request->body;
        if($request->hasFile('file_pdf')) {
            $file = $request->file('file_pdf');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $location = public_path('storage/pdf/' . $filename);
            Storage::files($file)->save($location);
            $materi->file_pdf = $filename;
        }
        $materi->save();

        return redirect()->route('materi.index')->with('success', 'Data berhasil di tambahkan');
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
        $mapel = DB::table('mapels')->select('*')->get();
        $materi = DB::table('materis')->where('id', $id)->first();

        return view('materi.edit', compact('mapel', 'materi'));
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
            'id_mapel'  => 'required',
            'judul'     => 'required|max:191',
            'body'      => 'required',
            'file_pdf'  => 'nullable:mimes:pdf',
        ]);

        Materi::find($id)->update($request->all());

        return redirect()->route('materi.index')->with('success', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('materis')->where('id', $id)->delete();

        return redirect()->route('materi.index')->with('danger', 'Data materi berhasil di hapus');
    }
}
