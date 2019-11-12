@extends('layouts.app')
@section('content')
<div class="row">
  <div class="container">
    <div class="col-md-12">
      <div class="card card-danger">
        <div class="card-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit pertanyaaan</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"></li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>          
        <div class="card-body">
          <form action="{{ route('pertanyaan.update',$datper->id) }}" method="post" enctype="multipart/form-data">
            <input name="_method" type="hidden" value="PATCH">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('id_siswa') ? ' has-error' : '' }}">
              <label for="id_siswa" class="col-md-4 control-label">Siswa</label>
              <div class="col-md-6">
                <input id="id_user" type="text" class="form-control" readonly="" value="{{Auth::user()->name}}" required>
                <input id="id_siswa" type="hidden" name="id_siswa" value="{{ Auth::user()->datasiswa->id }}" required readonly="">
                
                @if ($errors->has('id_siswa'))
                <span class="help-block">
                  <strong>{{ $errors->first('id_siswa') }}</strong>
                </span>
                @endif
                
              </div>
            </div>
            
            <div class="form-group{{ $errors->has('pertanyaan') ? ' has-error' : '' }}">
              <label for="pertanyaan" class="col-md-4 control-label">Pertanyaan</label>
              <textarea id="pertanyaan" type="ckeditor" name="pertanyaan" class="ckeditor" rows="10"  value="{{ $datper->pertanyaan}}"  required></textarea>
              
              @if ($errors->has('pertanyaan'))
              <span class="help-block">
                <strong>{{$errors->first('pertanyaan')}}</strong>
              </span>
              @endif
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Edit</button>
            </div>
          </form>
        </div>
      </div>  
    </div>
  </div>
  <script type="text/javascript" src="{{asset ('ckeditor/ckeditor.js')}}"></script>
</div>
@endsection