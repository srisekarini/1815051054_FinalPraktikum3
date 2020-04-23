<?php

namespace App\Http\Controllers;

use App\Dokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class homePenggunaController extends Controller
{
    public function __construct()
    {
        $this->middleware(function($request, $next){
            if(Gate::allows('pengguna')) return $next($request);
            abort(403,'Anda tidak memiliki cukup hak akses!');
        });
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Dashboard()
    {
        $title='Pengguna';
        $Dokumen=Dokumen::paginate(5);
        return view('konten.pengguna.home',compact('title', 'Dokumen'));
    }

}
