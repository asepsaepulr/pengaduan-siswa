<?php

use Illuminate\Database\Seeder;
use App\kategori;
use App\kelas;
class SampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Sample kategori
        $kategori1 = kategori::create(['name'=>'Rekayasa Perangkat Lunak']);
        $kategori2 = kategori::create(['name'=>'Teknik Kendaraan Ringan']);
        $kategori3 = kategori::create(['name'=>'Teknik Sepeda Motor']);
        // Sample Kelas
        $kelas1 = kelas::create(['nama_kelas'=>'XII RPL 1']);
        $kelas2 = kelas::create(['nama_kelas'=>'XII TKR 3']);
        $kelas3 = kelas::create(['nama_kelas'=>'XII TKR 2']);

    }
}
