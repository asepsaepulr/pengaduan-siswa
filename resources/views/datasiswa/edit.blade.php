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
								<h1 class="m-0 text-dark">Edit Data Siswa</h1>
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
					<form action="{{ route('datasiswa.update',$sis->id) }}" method="post" enctype="multipart/form-data">
						<input name="_method" type="hidden" value="PATCH">
						{{ csrf_field() }}
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
						<div class="form-group {{ $errors->has('id_siswa') ? ' has-error' : '' }}">
							<label class="control-label">Nama</label>  
							<div class="col-md-6">
								<input type="text" name="id_siswa" class="form-control" value="{{ $sis->user->name }}"  required>
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
								<input type="radio" name="jenis_kelamin" id="inlineRadio1" value="Laki laki" required> Laki laki</label>
								<label class="radio-inline">
									<input type="radio" name="jenis_kelamin" id="inlineRadio1" value="Perempuan" required> Perempuan</label>
									@if ($errors->has('jenis_kelamin'))
									<span class="help-block">
										<strong>{{ $errors->first('jenis_kelamin') }}</strong>
									</span>
									@endif
								</div>
								<div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
									<label class="control-label">Alamat</label>	
									<div class="col-md-6">
										<textarea name="alamat" class="form-control"   required>{{ $sis->alamat }}</textarea>
										@if ($errors->has('alamat'))
										<span class="help-block">
											<strong>{{ $errors->first('alamat') }}</strong>
										</span>
										@endif
									</div>
								</div>
								<div class="form-group {{ $errors->has('no_hp') ? ' has-error' : '' }}">
									<label class="control-label">No Hp</label>	
									<div class="col-md-6">
										<input type="text" name="no_hp" class="form-control" value="{{ $sis->no_hp }}"  required>
										@if ($errors->has('no_hp'))
										<span class="help-block">
											<strong>{{ $errors->first('no_hp') }}</strong>
										</span>
										@endif
									</div>
								</div>
								<div class="form-group">
									<label class="cc-payment" class="control-label mb-1">Gambar</label>
									@if (isset ($sis) && $sis->gambar)
									<p>
										<br>
										<img src="{{ asset('assets/img/gambar/' .$sis->gambar)}}" style="max-height: 125px; max-width: 125px; margin-top: 7px;" alt="">
									</p>
									@endif
									<input type="file" name="gambar" value="{{ $sis->gambar }}">
								</div>
								<div class="form-group {{ $errors->has('id_kelas') ? ' has-error' : '' }}">
									<div class="col-md-6">
										<label class="control-label">Kelas</label>	
										<select name="id_kelas" class="form-control" value="{{ $sis->kelas->nama_kelas }}">
											<option>pilih Kelas</option>			  				
											@foreach($kel as $data)
											<option value="{{ $data->id }}"{{ $selectedkelas == $data->id ? 'selected="selected"' : '' }}>{{ $data->nama_kelas }}</option>
											@endforeach
										</select>
										@if ($errors->has('id_kelas'))
										<span class="help-block">
											<strong>{{ $errors->first('id_kelas') }}</strong>
										</span>
										@endif
									</div>
								</div>
								<div class="form-group {{ $errors->has('id_kategori') ? ' has-error' : '' }}">
									<div class="col-md-6">
										<label class="control-label">Jurusan</label>	
										<select name="id_kategori" class="form-control" value="{{ $sis->kategori->name }}">
											<option>pilih jurusan</option>			  				
											@foreach($jur as $data)
											<option value="{{ $data->id }}"{{ $selectedkategori == $data->id ? 'selected="selected"' : '' }}>{{ $data->name }}</option>
											@endforeach
										</select>
										@if ($errors->has('id_kategori'))
										<span class="help-block">
											<strong>{{ $errors->first('id_kategori') }}</strong>
										</span>
										@endif
									</div>
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-primary">Edit</button>
									<a href="{{route('datasiswa.index')}}" class="btn btn-warning pull-right">Back</a>
								</div>
							</form>
						</div>
					</div>	
				</div>
			</div>
		</div>
		@endsection
