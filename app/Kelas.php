<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
	protected $fillable = ['nama_kelas'];
	
	public function datasiswa(){
		return $this->hasMany('DataSiswa','id_kelas');
	}
	public $timetamps = true;
}
