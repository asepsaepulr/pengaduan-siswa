<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use Yajra\DataTables\Html\Builder;
use Yajra\Datatables\Datatables;
use Session;
use DB;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Redirect;
class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Builder $htmlBuilder)
    {
        $kel = Kelas::paginate(10);
        return view('Kelas.index', compact('kel'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('kelas.create');
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
            'nama_kelas'=>'required|max:255',
        ]);

        $kel = new Kelas;
        $kel->nama_kelas= $request->nama_kelas;
        $kel->save();
   alert()->success('Berhasil.','Kelas telah di Tambahkan!');
        return redirect()->route('kelas.index');
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
        $kel = Kelas::findOrFail($id);
        return view('kelas.edit', compact('kel'));
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
        'nama_kelas'=>'required|max:255',
        
    ]);
     $kel = Kelas::findOrFail($id);
     $kel->nama_kelas = $request->nama_kelas;
     $kel->save();
    alert()->success('Berhasil.','Kelas telah diubah!');
     return redirect()->route('kelas.index');
 }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Kelas::destroy($id)) return redirect()->back();
    alert()->success('Berhasil.','Kelas telah di Hapus!');
        return redirect()->route('kelas.index');
        
    }
}
