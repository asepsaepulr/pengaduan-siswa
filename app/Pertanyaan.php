<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
	protected $table = 'pertanyaans';
	protected $fillable = ['id_siswa','pertanyaan'];

	public function datasiswa() {
		return $this->belongsTo('App\DataSiswa','id_siswa');
	}
	public function jawab (){
		return $this->hasMany('App\Jawab','id_pertanyaan');
	}
}
