@section('js')
<script type="text/javascript">
 $(document).on('click', '.pilih', function (e) {
    document.getElementById("kategori_name").value = $(this).attr('data-kategori_name');
    document.getElementById("id_kategori").value = $(this).attr('data-id_kategori');
    $('#myModal').modal('hide');
});

 $(document).on('click', '.pilih_kelas', function (e) {
    document.getElementById("id_kelas").value = $(this).attr('data-id_kelas');
    document.getElementById("kelas_nama_kelas").value = $(this).attr('data-kelas_nama_kelas');
    $('#myModal2').modal('hide');
});
 
 $(function () {
    $("#lookup, #lookup2").dataTable();
});

</script>

@stop
@section('css')

@stop
@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('datasiswa.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-12 d-flex align-items-stretch grid-margin">
          <div class="row flex-grow">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Siswa</h4>
                  <div class="card-title pull-right">
                  </div>
              </div>
              <div class="card-body">              
                <div class="card-body">
                  <form action="{{ route('datasiswa.store') }}" method="post"  enctype="multipart/form-data">
                     {{ csrf_field() }}
                     <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="col-md-4 control-label">Nama</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control" name="name" required >

                          @if ($errors->has('name'))
                          <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                    <div class="col-md-6">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="col-md-4 control-label">Password</label>
                    <div class="col-md-6">
                        <input id="password" type="password" class="form-control" name="password" required>

                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <label for="password-confirm" class="control-label">
                    Confirm Password</label>

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>

            <div class="form-group {{ $errors->has('nis') ? ' has-error' : '' }}">
               <div class="col-md-6">	
                <label class="control-label">Nis</label>
                <input type="number" name="nis" class="form-control"  required>
                @if ($errors->has('nis'))
                <span class="help-block">
                    <strong>{{ $errors->first('nis') }}</strong>
                </span>
            </div>
        </div>
        @endif
        <br>
        <div class="form-group {{ $errors->has('jenis_kelamin') ? ' has-error' : '' }}">
            <label class="control-label">Jenis Kelamin</label>	
            <label class="radio-inline">
                <input type="radio" name="jenis_kelamin" id="inlineRadio1" value="Laki laki" required> Laki laki</label>
                <label class="radio-inline">
                    <input type="radio" name="jenis_kelamin" id="inlineRadio2" value="Perempuan" required> Perempuan</label>
                    @if ($errors->has('jenis_kelamin'))
                    <span class="help-block">
                        <strong>{{ $errors->first('jenis_kelamin') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
                    <label class="control-label">Alamat</label>	
                    <div class="col-md-6">
                        <textarea id="ckeditor" name="alamat" class="ckeditor" rows="10" required></textarea>
                        @if ($errors->has('alamat'))
                        <span class="help-block">
                            <strong>{{ $errors->first('alamat') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group {{ $errors->has('no_hp') ? ' has-error' : '' }}">
                    <label class="control-label">No Hp</label>	
                    <div class="col-md-15">
                        <input type="text" name="no_hp" class="form-control"  required>
                        @if ($errors->has('no_hp'))
                        <span class="help-block">
                            <strong>{{ $errors->first('no_hp') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="cc-payment" class="control-label mb-1">gambar</label>
                    <input name="gambar" type="file" required>
                </div>

                <div class="form-group{{ $errors->has('id_kategori') ? ' has-error' : '' }}">
                    <label for="id_kategori" class="col-md-4 control-label">Jurusan</label>
                    <div class="col-md-10">
                        <div class="input-group">
                            <input id="kategori_name" type="text" class="form-control" readonly="" required>
                            <input id="id_kategori" type="hidden" name="id_kategori" value="{{ old('id_kategori') }}" required readonly="">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-info btn-secondary" data-toggle="modal" data-target="#myModal"><b>Cari</b> <span class="fa fa-search"></span></button>
                            </span>
                        </div>
                        @if ($errors->has('id_kategori'))
                        <span class="help-block">
                            <strong>{{ $errors->first('id_kategori') }}</strong>
                        </span>
                        @endif
                        
                    </div>
                </div>

                <div class="form-group{{ $errors->has('id_kelas') ? ' has-error' : '' }}">
                    <label for="id_kelas" class="col-md-4 control-label">Kelas</label>
                    <div class="col-md-10">
                        <div class="input-group">
                            <input id="kelas_nama_kelas" type="text" class="form-control" readonly="" required>
                            <input id="id_kelas" type="hidden" name="id_kelas" value="{{ old('id_kelas') }}" required readonly="">
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-info btn-secondary" data-toggle="modal" data-target="#myModal2"><b>Cari</b> <span class="fa fa-search"></span></button>
                            </span>
                        </div>
                        @if ($errors->has('id_kelas'))
                        <span class="help-block">
                            <strong>{{ $errors->first('id_kelas') }}</strong>
                        </span>
                        @endif
                        
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <a href="{{ url()->previous() }}" class="btn btn-warning pull-right">Back</a>
                </div>
            </form>
        </div>
    </div>	
</div>
</div>
</div>
</div>
</div>
</form>


<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document" >
    <div class="modal-content" style="background: #fff;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cari</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
    <table id="lookup" class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
              <th>Nama Jurusan</th>
          </tr>
      </thead>
      <tbody>
        @foreach($kategori as $data)
        <tr class="pilih" data-id_kategori="<?php echo $data->id; ?>" data-kategori_name="<?php echo $data->name; ?>" >
            <td class="py-3">
                {{$data->name}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>  
</div>
</div>
</div>
</div>

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg" role="document" >
    <div class="modal-content" style="background: #fff;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cari</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
  <div class="modal-body">
    <table id="lookup" class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
              <th>Nama Kelas</th>
          </tr>
      </thead>
      <tbody>
        @foreach($kelas as $data)
        <tr class="pilih_kelas" data-id_kelas="<?php echo $data->id; ?>" data-kelas_nama_kelas="<?php echo $data->nama_kelas; ?>" >
            <td class="py-3">
                {{$data->nama_kelas}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>  
</div>
</div>
</div>
</div>
@endsection