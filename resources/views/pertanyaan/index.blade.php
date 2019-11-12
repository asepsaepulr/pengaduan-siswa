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
    <a href="{{ route('pertanyaan.create') }}" class="btn btn-primary btn-rounded btn-fw right"><i class="mdi mdi-plus"></i> Tambah Pertanyaan</a>
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
        <h4 class="card-title">Data Pertanyaan</h4>
        <div class="table-responsive">
          <table class="table table-striped" id="table">
            <thead>
              <tr>
                <th>No</th>
                <th>Pertanyaan</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>tanggal</th>
                <th> Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($datper as $data)
              <tr>
                <td class="py-1">
                  {{$data->id}}
                  <th><b><i> {!!$data->pertanyaan!!}</b><i/></th>
                    <td>  <a href="{{route('datasiswa.show', $data->id)}}"> {{$data->datasiswa->nis}}</a></td>
                    <td>{{$data->datasiswa->user->name}}</td>
                    <td>{{ $data->datasiswa->kelas->nama_kelas }}</td>
                    <td>{{$data->created_at }}</td>
                  </td>
                  
                  <td>
                    @role('admin')
                    <div class="btn-group dropdown">
                      <a class="btn btn-warning btn-xs mdi mdi-telegram " href="{{route('jawaban.create', $data->id)}}"></a>
                      <a class="btn btn-primary btn-xs mdi mdi-pencil " href="{{route('pertanyaan.edit', $data->id)}}"></a>
                      <form action="{{ route('pertanyaan.destroy', $data->id) }}" class="pull-left"  method="post">
                        {{ csrf_field() }}
                        {{ method_field('delete')}}
                        <button class="btn btn-danger btn-xs mdi mdi-delete" onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                        </button>
                      </form>
                    </div>
                    @endif
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          {{--  {!! $datper->links() !!} --}}
        </div>
      </div>
    </div>
  </div>
  @endsection