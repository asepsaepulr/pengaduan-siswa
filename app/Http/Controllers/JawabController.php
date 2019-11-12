<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jawab;
use App\Pertanyaan;
use DB;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Redirect;
use Session;
class JawabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jawab = Jawab::with('pertanyaan')->get();
        return view('jawaban.index',compact('jawab'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datper = Pertanyaan::all();
        
        return view('jawaban.create',compact('datper'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
        'jawaban' => 'required|',
        'id_pertanyaan' => 'required|'
    ]);
       $jawab = new jawab;
       $jawab->jawaban = $request->jawaban;
       $jawab->id_pertanyaan = $request->id_pertanyaan;
       $jawab->save();
       
       ;
       alert()->success('Berhasil.','Jawab telah di Tambahkan!');
       return redirect()->route('jawaban.index');

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
        //
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
        //
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
