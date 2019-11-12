@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 50
    });

  } );
</script>
@stop
@extends('layouts.app')

@section('content')
<h3><marquee><font face="Copperplate Gothic Light" size="5" color="black">Selamat Datang Di Aplikasi Pengaduan Siswa SMK Assalaam Bandung!!!</marquee></h3>
  <div class="btn-group dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle btn-sm"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mdi mdi-plus"></i>
      New
    </button>
    <div class="dropdown-menu" x-placement="bottom-start">
      <a class="dropdown-item" href="{{route('kategori.create')}}"> New Jurusan</a>
      <a class="dropdown-item" href="{{route('kelas.create')}}"> New Kelas</a>
      <a class="dropdown-item" href="{{route('datasiswa.create')}}"> New Data Siswa</a>
      <a class="dropdown-item" href="{{route('pertanyaan.index')}}">Pertanyaan</a>
      <a class="dropdown-item" href="{{route('jawaban.create')}}"> New Jawaban</a>
    </button>
  </div>
</div>
<br>
<br>
<div class="row">
  <div class="col-xl-4 col-lg-4 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <i class="mdi mdi-school text-danger icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Jurusan</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{$jur->count()}}</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0">
          <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Total Seluruh Jurusan
        </p>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <i class="mdi mdi-bank text-warning icon-lg" style="width: 40px;height: 40px;"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Kelas</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{$kel->count()}}</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0">
          <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Total Seluruh Kelas
        </p>
      </div>
    </div>
  </div>
  <div class="col-xl-4 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <i class="mdi mdi-account-location text-info icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Siswa</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{$sis->count()}}</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0">
          <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Total Seluruh Siswa
        </p>
      </div>
    </div>
  </div>
  <div class="col-xl-6 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <i class="mdi mdi-telegram text-primary icon-lg" style="width: 40px;height: 40px;"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Pertanyaan</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{$datper->count()}}</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0">
          <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Total Seluruh pertnyaan
        </p>
      </div>
    </div>
  </div>
  <div class="col-xl-6 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <i class="mdi mdi-wechat text-success icon-lg" style="width: 40px;height: 40px;"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Jawaban</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{$jawab->count()}}</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0">
          <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Total Seluruh Yang sudah di jawab
        </p>
      </div>
    </div>
  </div>
</div>
            
@endsection
