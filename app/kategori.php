<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $fillable = ['name'];
  
     public function datasiswa(){
    	return $this->hasMany('DataSiswa','id_kategori');
    }
    public $timetamps = true;
}