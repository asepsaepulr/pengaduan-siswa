<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataSiswa;
use App\Kelas;
use App\kategori;
use App\User;
use App\Role;
use DB;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Redirect;
use App\Notifications\NewItem;
use Session;
use File;
class DataSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
        $sis = DataSiswa::with('kelas','kategori')->get();
        return view('datasiswa.index',compact('sis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori=kategori::all();
        $kelas=Kelas::all();

        return view('datasiswa.create',compact('kelas','kategori'));
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
            'nis'=>'required|unique:data_siswas',
            'jenis_kelamin'=>'required|',
            'alamat'=>'required|',
            'no_hp'=>'required|',
            'gambar'=>'required|',
            'id_kelas'=>'required|',
            'id_kategori'=>'required|',
        ]);
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password'])
        ]);
        $memberRole = Role::where('name', 'member')->first();
        $user->attachRole($memberRole);

        $sis = new DataSiswa;
        $sis->user_id = $user->id;       
        $sis->nis = $request->nis;
        $sis->jenis_kelamin = $request->jenis_kelamin;
        $sis->alamat = $request->alamat;
        $sis->no_hp = $request->no_hp;
        // upload gambars
        if ($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $destinationPatch = public_path().'/assets/img/gambar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSucces = $file->move($destinationPatch, $filename);
            $sis->gambar = $filename;
        }
        $sis->id_kelas = $request->id_kelas;
        $sis->id_kategori = $request->id_kategori;
        $sis->save();
        alert()->success('Berhasil.','Data Siswa telah di Tambahkan!');
        ;
        return redirect()->route('datasiswa.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sis = DataSiswa::findOrFail($id);

        return view('datasiswa.show', compact('sis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     $sis = DataSiswa::findOrFail($id);
     $kel = kelas::all();
     $selectedkelas = DataSiswa::findOrFail($id)->id_kelas;
     $jur =Kategori::all();
     $selectedkategori = DataSiswa::findOrFail($id)->id_kategori;

     return view('datasiswa.edit', compact('sis','kel','selectedkelas','jur','selectedkategori'));
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
            'nis' => 'required|',
            'alamat' => 'required|',
            'no_hp' => 'required|',
            'gambar' => 'required|',
            'id_kelas' => 'required|',
            'id_kategori' => 'required|'

        ]);

        
        $sis = DataSiswa::findOrFail($id);
        $sis->nis = $request->nis;
        $sis->jenis_kelamin = $request->jenis_kelamin;
        $sis->alamat = $request->alamat;
        $sis->no_hp = $request->no_hp;
        if ($request->hasFile('gambar')){
            $file = $request->file('gambar');
            $destinationPatch = public_path().'/assets/img/gambar/';
            $filename = str_random(6).'_'.$file->getClientOriginalName();
            $uploadSucces = $file->move($destinationPatch, $filename);

            if ($sis->gambar) { 
                $old_gambar = $sis->gambar;
                $filepath = public_path() . DIRECTORY_SEPARATOR . '/assets/img/gambar'
                . DIRECTORY_SEPARATOR . $sis->gambar;
                try {
                    File::delete($filepath);
                } catch (FileNotFoundException $e) {
        // File sudah dihapus/tidak ada
                }    
            }
            $sis->gambar = $filename;
        }
        $sis->id_kelas = $request->id_kelas;
        $sis->id_kategori = $request->id_kategori;
        $sis->save();
        alert()->success('Berhasil.','Data Siswa telah di Ubah!');
        return redirect()->route('datasiswa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sis = DataSiswa::findOrFail($id);
        if ($sis->gambar) {
            $old_gambar = $sis->gambar;
            $filepath = public_path() . DIRECTORY_SEPARATOR . 'assets/img/gambars/'
            . DIRECTORY_SEPARATOR . $sis->gambar;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) {
            // File sudah dihapus/tidak ada
            }
        }
        $sis->delete();
        alert()->success('Berhasil.','Data Siswa telah di Hapus!');
        ;
        return redirect()->route('datasiswa.index');
    }
    public function newitem()
    {
        $sis = new Datasiswa;
        $sis->user_id =auth()->user()->id;
        $sis->name ='This is Data Siswa';
        $sis->email = 'Laravel Notification';
        $sis->save();
        $user = User::where('id','!=',auth()->user()->id)->get();

        if(\Notification::send($user,new NewItem(DataSiswa::latest('id')->first())))
        {
            return back();
        }  
    }
}
