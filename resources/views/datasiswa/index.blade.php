@section('js')
<script type="text/javascript">
  $(document).ready(function() {
    $('#table').DataTable({
      "iDisplayLength": 10
    });

  } );
</script>

@stop
@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-lg-2">
    @role('admin')
    <a href="{{ route('datasiswa.create') }}" class="btn btn-primary btn-rounded btn-fw right"><i class="mdi mdi-plus"></i> Tambah Siswa</a>
    @endif
  </div>
  <div class="col-lg-12">
    @if (Session::has('message'))
    <div class="alert alert-{{ Session::get('message_type') }}" id="waktu2" style="margin-top:10px;">{{ Session::get('message') }}</div>
    @endif
  </div>
</div>
<div class="row" style="margin-top: 20px;">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">

      <div class="card-body">
        <h4 class="card-title">Data Siswa</h4>
        
        <div class="table-responsive">
          <table class="table table-striped" id="table">
            <thead>
              <tr>
                <th>Gambar</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No Hp</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($sis as $data)
              <tr>
                <td class="py-1">
                 <img src="{{ asset('assets/img/gambar/' .$data->gambar)}}" style="margin-right: 16px;">
                 <td>  <a href="{{route('datasiswa.show', $data->id)}}"> {{$data->nis}}</a></td>
                 <td>{{$data->user->name}}</td>
                 <td>{{$data->user->email}}</td>
                 <td>{{$data->jenis_kelamin}}</td>
                 <td>{{$data->alamat}}</td>
                 <td>{{$data->no_hp}}</td>
                 <td>{{$data->kelas->nama_kelas }}</td>
                 <td>{{$data->kategori->name}}</td>
                 
               </td>
               <td>
                <div class="btn-group dropdown">
                  <a class="btn btn-primary btn-xs mdi mdi-pencil " href="{{route('datasiswa.edit', $data->id)}}"></a>
                  <form action="{{ route('datasiswa.destroy', $data->id) }}" class="pull-left"  method="post">
                    {{ csrf_field() }}
                    {{ method_field('delete')}}
                    <button class="btn btn-danger btn-xs mdi mdi-delete" onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                    </button>
                  </form>
                </div>
              </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        {{--  {!! $sis->links() !!} --}}
      </div>
    </div>
  </div>
</div>
@endsection