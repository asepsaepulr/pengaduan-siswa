@section('js')

<script type="text/javascript">

    $(document).ready(function() {
        $(".users").select2();
    });

</script>
@stop

@extends('layouts.app')

@section('content')

<form method="POST" action="{{ route('jawaban.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-12 d-flex align-items-stretch grid-margin">
          <div class="row flex-grow">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Jawaban baru</h4>
                  <div class="form-group {{ $errors->has('id_pertanyaan') ? ' has-error' : '' }}">
                        <label class="control-label">pertanyaan</label> 
                        <select name="id_pertanyaan" class="form-control">
                          <option>
                            @foreach($datper as $data)
                            <option value="{{ $data->id }}">{{ $data->pertanyaan }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('id_pertanyaan'))
                            <span class="help-block">
                                <strong>{{ $errors->first('id_pertanyaan') }}</strong>
                            </span>
                        </option>
                        @endif
                    </div>
                
                <div class="form-group{{ $errors->has('jawaban') ? ' has-error' : '' }}">
                    <label for="jawaban" class="col-md-4 control-label">jawaban</label>
                    <div class="col-md-6">
                        <input id="jawaban" type="text" class="form-control" name="jawaban" value="{{ old('jawaban') }}" maxlength="80" required>
                        @if ($errors->has('jawaban'))
                        <span class="help-block">
                            <strong>{{ $errors->first('jawaban') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
                <a href="{{ url()->previous() }}" class="btn btn-warning pull-right">Back</a>
            </div>
        </div>
    </div>
</div>
</div>

</div>
</form>
@endsection