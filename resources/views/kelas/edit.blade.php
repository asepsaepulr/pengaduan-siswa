@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="card card-primary">
				<div class="card-header">
					<div class="card-title left"><h4>Edit Kelas</h4>
					</div>
				</div>
				<div class="card-body">
					<form action="{{ route('kelas.update',$kel->id) }}" method="post" >
						<input name="_method" type="hidden" value="PATCH">
						@csrf
						
						<div class="form-group {{ $errors->has('nama_kelas') ? ' has-error' : '' }}">
							<div class="col-md-6">
								<label class="control-label">Nama Kelas</label>	
								<input type="text" name="nama_kelas" class="form-control" value="{{ $kel->nama_kelas }}"  required>
								@if ($errors->has('name'))
								<span class="help-block">
									<strong>{{ $errors->first('nama_kelas') }}</strong>
								</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Edit</button>
							<a href="{{route('kelas.index')}}" class="btn btn-warning pull-right">Back</a>
						</div>
					</form>
				</div>
			</div>	
		</div>
	</div>
</div>
@endsection