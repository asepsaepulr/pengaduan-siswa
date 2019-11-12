@section('js')

<script type="text/javascript">

    $(document).ready(function() {
        $(".users").select2();
    });

</script>
@stop

@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('pertanyaan.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-12 d-flex align-items-stretch grid-margin">
          <div class="row flex-grow">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah pertanyaan baru</h4>
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
                    <textarea id="text" type="ckeditor" name="pertanyaan" class="ckeditor" rows="10"  required></textarea>
                    @if ($errors->has('pertanyaan'))
                    <span class="help-block">
                        <strong>{{$errors->first('pertanyaan')}}</strong>
                    </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
                <a href="{{ url()->previous() }}" class="btn btn-warning pull-right">Back</a>
            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript" src="{{asset ('ckeditor/ckeditor.js')}}"></script>
</div>
</form>
@endsection