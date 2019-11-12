<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategori;
use Session;
use DB;
use Auth;
use App\User;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Redirect;
class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if(Auth::user()->role == 'member') {
            Alert::info('Oopss..', 'Anda dilarang masuk ke area ini.');
            return redirect()->to('/');
        }

       $jur = kategori::paginate(10);
       return view('kategori.index', compact('jur'));

   }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori.create');
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
        'name'=>'required|max:30',
    ]);

     $jur = new kategori;
     $jur->name= $request->name;
     $jur->save();
        alert()->success('Berhasil.','Jurusan telah Ditambahkan!');
     return redirect()->route('kategori.index');
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
        $jur = kategori::findOrFail($id);
        return view('kategori.edit', compact('jur'));
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
            'name'=>'required|max:255',
            
        ]);
        $jur = kategori::findOrFail($id);
        $jur->name = $request->name;
        $jur->save();
       alert()->success('Berhasil.','Jurusan telah diubah!');
        return redirect()->route('kategori.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!kategori::destroy($id)) return redirect()->back();
        alert()->success('Berhasil.','Jurusan telah dihapus!');
        return redirect()->route('kategori.index');
    }
}
