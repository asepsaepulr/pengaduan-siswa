@extends('layouts.app')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="card card-primary">
				<div class="card-header">
					<div class="card-title left"><h4>Edit Jurusan</h4>
					</div>
				</div>
				<div class="card-body">
					<form action="{{ route('kategori.update',$jur->id) }}" method="post" >
						<input name="_method" type="hidden" value="PATCH">
						@csrf
						
						<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
							<div class="col-md-6">
								<label class="control-label">Nama Jurusan</label>	
								<input type="text" name="name" class="form-control" value="{{ $jur->name }}"  required>
								@if ($errors->has('name'))
								<span class="help-block">
									<strong>{{ $errors->first('name') }}</strong>
								</span>
								@endif
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Edit</button>
							<a href="{{route('kategori.index')}}" class="btn btn-warning pull-right">Back</a>
						</div>
					</form>
				</div>
			</div>	
		</div>
	</div>
</div>
@endsection