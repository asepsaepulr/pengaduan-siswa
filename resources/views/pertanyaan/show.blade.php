@section('js')

<script type="text/javascript">

    $(document).ready(function() {
        $(".users").select2();
    });

</script>
@stop

@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12 d-flex align-items-stretch grid-margin">
      <div class="row flex-grow">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Detail <b>{{$sis->name}}</b></h4>
              <form class="forms-sample">
                <div class="form-group">
                    <div class="col-md-6">
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('datasiswa.update',$sis->id) }}" method="post" enctype="multipart/form-data">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="col-md-6">
                                <img class="product" width="200" height="200" @if($sis->gambar) src="{{ asset('assets/img/gambar/'.$sis->gambar) }}" @endif />
                            </div>
                        </div>
                        
                        <div class="form-group {{ $errors->has('nis') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                <label class="control-label">Nis</label>    
                                <input type="text" name="nis" class="form-control" value="{{ $sis->nis }}"  readonly>
                                @if ($errors->has('nis'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nis') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('id_siswa') ? ' has-error' : '' }}">
                            <label for="id_siswa" class="col-md-4 control-label">Nama</label>
                            <div class="col-md-6">
                                <input id="id_siswa" type="text" class="form-control" name="id_siswa" value="{{ $sis->user->name }}" readonly>
                                @if ($errors->has('id_siswa'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('id_siswa') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
                            <label class="control-label">Jenis Kelamin</label>  
                            <br>
                            <label class="radio-inline">
                                <input type="radio" name="jenis_kelamin" id="inlineRadio1" value="Laki laki" readonly> Laki laki</label>
                                <label class="radio-inline">
                                    <input type="radio" name="jenis_kelamin" id="inlineRadio1" value="Perempuan" readonly> Perempuan</label>
                                    @if ($errors->has('jenis_kelamin'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
                                    <div class="col-md-6">
                                        <label class="control-label">Alamat</label> 
                                        <textarea name="alamat" class="form-control"   readonly>{{ $sis->alamat }}</textarea>
                                        @if ($errors->has('alamat'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('alamat') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    
                                    <div class="form-group {{ $errors->has('no_hp') ? ' has-error' : '' }}">
                                        <div class="col-md-6">
                                            <label class="control-label">No Hp</label>  
                                            <input type="text" name="no_hp" class="form-control" value="{{ $sis->no_hp }}"  readonly>
                                            @if ($errors->has('no_hp'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('no_hp') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('id_kelas') ? ' has-error' : '' }} " style="margin-bottom: 20px;">
                                        <label for="id_kelas" class="col-md-4 control-label">Kelas</label>
                                        <div class="col-md-6">
                                            <input id="id_kelas" type="text" class="form-control" name="id_kelas" value="{{ $sis->kelas->nama_kelas }}" readonly="">
                                        </div>
                                    </div>                          
                                    <div class="form-group{{ $errors->has('id_kategori') ? ' has-error' : '' }} " style="margin-bottom: 20px;">
                                        <label for="id_kategori" class="col-md-4 control-label">Jurusan</label>
                                        <div class="col-md-6">
                                            <input id="id_kategori" type="text" class="form-control" name="id_kategori" value="{{ $sis->kategori->name }}" readonly="">
                                        </div>
                                    </div>
                                    <a href="{{route('pertanyaan.index')}}" class="btn btn-light pull-right">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            @endsection