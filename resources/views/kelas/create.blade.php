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
						<h4 class="card-title">Tambah Kelas</h4> 
						<div class="card-title pull-right">
						</div>
					</div>
					<div class="card-body">
						<form action="{{ route('kelas.store') }}" method="post" >
							@csrf
							<div class="form-group {{ $errors->has('nama_kelas') ? ' has-error' : '' }}">
								<div class="col-md-6">
									<label class="control-label">Nama Kelas</label>	
									<input type="text" name="nama_kelas" class="form-control"  required>
									@if ($errors->has('nama_kelas'))
									<span class="help-block">
										<strong>{{ $errors->first('nama_kelas') }}</strong>
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
	@endsection