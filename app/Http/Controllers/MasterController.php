<?php


namespace App\Http\Controllers;

use App\Dokumen;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Dashboard()
    {
        //
        $title='Dokumen';
        $Dokumen=Dokumen::paginate(5);
        //dd($Dokumen);
        return view('konten.home',compact('title','Dokumen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title='Input Dokumen baru';
        return view('konten.dokumen',compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $messages = [
            'required' => 'Kolom :attribute tidak boleh kosong!',
            'date' => 'Kolom :attribute harus berupa tanggal!',
            'numeric' => 'Kolom :attribute harus berupa angka!'
        ];

        $validasi =$request->validate([
            'nama' =>'required',
            'jenis' => 'required'
        ],$messages);
        Dokumen::create($validasi); 
        return redirect('/')->with('success', 'Data berhasil ditambahkan!'); 
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
        $title='Update Dokumen';
        $Dokumen=Dokumen::find($id);
        return view('konten.dokumen',compact('title','Dokumen'));
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
        $messages = [
            'required' => 'Kolom :attribute tidak boleh kosong!',
            'date' => 'Kolom :attribute harus berupa tanggal!',
            'numeric' => 'Kolom :attribute harus berupa angka!'
        ];

        $validasi =$request->validate([
            'nama' =>'required',
            'jenis' => 'required'
        ],$messages);
        Dokumen::whereid($id)->update($validasi); 
        return redirect('/')->with('success', 'Data berhasil diupdate!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Dokumen::whereid($id)->delete(); 
    return redirect('/')->with('success', 'Data berhasil diupdate!'); 
    }
}
