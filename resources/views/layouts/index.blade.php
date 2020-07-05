@extends('layouts.master')

@section('content')
<div class="ml-3" style="margin-left: 15px; margin-right: 15px">
  <center><h3 style="padding-top: 10px; padding-bottom: 10px">Daftar Artikel</h3></center>
    <button type="button" class="btn btn-primary" style="margin-bottom: 15px"><a href="/artikel/create" style="color: white">Tambah Artikel</a></button>
    <br>
    <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Slug</th>
            <th>Tag</th>
            <center><th>Actions</th></center>
          </tr>
        </thead>
        <tbody>
          @foreach($artikel as $key => $artikel)
          <tr>
          	<td>{{$key+1}}</td>
          	<td>{{$artikel->judul}}</td>
          	<td>{{$artikel->isi}}</td>
            <td>{{$artikel->slug}}</td>
            <td>{{$artikel->tag}}</td>
            <td width="170px"><button type="button" class="btn btn-primary"><a href="/artikel/{{$artikel->id_artikel}}" style="color: white"><i class="far fa-list-alt"></i></a></button>
                <button type="button" class="btn btn-warning"><a href="/artikel/{{$artikel->id_artikel}}/edit" style="color: white"><i class="fas fa-pencil-alt"></i></a></button>
                <form action="/artikel/{{$artikel->id_artikel}}" method="post" style="display: inline;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
</div>
@endsection
@push('scripts')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush