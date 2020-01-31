<?php

namespace App\Http\Controllers;

use App\WBP;
use Illuminate\Http\Request;

class WBPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = WBP::paginate(10);
        return view('admin.pages.wbp.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.wbp.create');
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
           'nama' => 'required',
           'tempat_lahir' => 'required',
           'tanggal_lahir' => 'required',
           'perkara' => 'required',
           'jenis_kejahatan' => 'required',
           'agama' => 'required',
           'tgl_berperkara' => 'required',
           'vonis' => 'required',
        ]);

        $new = WBP::create($request->except(['_token']));
        $new->kode_wbp = 'WBP'.rand(000,999);
        $new->save();

        if($request->file('foto') != null){
            $filename = $request->file('foto')->store('/public/avatars');

            $new->foto = $filename;
            $new->save();
        }


        return redirect()->route('wbp.index')->with('status', 'Berhasil Mendaftar WBP!');
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
        $data = WBP::find($id);
        return view('admin.pages.wbp.edit', compact('data'));
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
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'perkara' => 'required',
            'jenis_kejahatan' => 'required',
            'agama' => 'required',
            'tgl_berperkara' => 'required',
            'vonis' => 'required',
        ]);

        $new = WBP::create($request->except(['_token']));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
