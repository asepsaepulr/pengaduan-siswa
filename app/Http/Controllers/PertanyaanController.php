<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;
use App\DataSiswa;
use App\Jawab;
use Session;
use DB;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Redirect;
class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         if(User::user()->level == 'member') {
            Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
            return redirect()->to('/');
        }
        $datper = Pertanyaan::with('datasiswa')->get();
        return view('pertanyaan.index',compact('datper'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sis = DataSiswa::all();
        
        return view('pertanyaan.create',compact('sis'));
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
            'id_siswa' => 'required|',
            'pertanyaan' => 'required|',
        ]);
        $datper = new Pertanyaan;
        $datper->id_siswa = $request->id_siswa;
        $datper->pertanyaan = $request->pertanyaan;
        $datper->save();
        
        ;
        alert()->success('Berhasil.','Pertanyaan telah di Tambahkan!');
        return redirect()->route('pertanyaan.index');
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
        $datper = Pertanyaan::findOrFail($id);
        $sis = DataSiswa::all();
        $selecteddatasiswa = Pertanyaan::findOrFail($id)->id_siswa;
        return view('pertanyaan.edit',compact('datper','sis','selecteddatasiswa'));
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
       $this->validate($request,[
        'id_siswa' => 'required|',
        'pertanyaan' => 'required|',
    ]);
       $datper = Pertanyaan::findOrFail($id);
       $datper->id_siswa = $request->id_siswa;
       $datper->pertanyaan = $request->pertanyaan;
       $datper->save();
       alert()->success('Berhasil.','Pertanyaan telah diubah!');
       return redirect()->route('pertanyaan.index');
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $datper = Pertanyaan::findOrFail($id);
       $datper->delete();
       alert()->success('Berhasil.','Pertanyaan telah di Hapus!');
       return redirect()->route('pertanyaan.index');
   }
}
