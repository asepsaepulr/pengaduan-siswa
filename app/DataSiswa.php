<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Model
{
   protected $table = 'data_siswas';
   protected $fillable = ['nis','nama','alamat','no_hp','gambar','id_kelas','id_kategori','user_id'];

   public function kelas(){
       return $this->belongsTo('App\kelas','id_kelas');
   }
   public function kategori(){
       return $this->belongsTo('App\kategori','id_kategori');
   }
   public function user()
   {
       return $this->belongsTo('App\User','user_id');
   }
}
