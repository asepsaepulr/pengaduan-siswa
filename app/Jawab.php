<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawab extends Model
{
    protected $table = 'jawabans';
    protected $fillable = ['jawaban','id_pertanyaan'];

    public function pertanyaan() {
        return $this->belongsTo('App\Pertanyaan','id_pertanyaan');
}
}