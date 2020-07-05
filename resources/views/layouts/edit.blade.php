@extends('layouts.master')

@section('content')
<div class="ml-3">
  <form action="/artikel/{{$artikel->id_artikel}}" method="POST" style="margin-left: 15px; margin-right: 15px">
    @csrf
    @method('PUT')
    <div class="form-group" style="padding-top : 20px">
      <center><h4>Edit Artikel</h4></center>
      <button type="button" class="btn btn-primary" style="margin-bottom: 15px"><a href="/artikel" style="color: white">Kembali</a></button>
      <br>
      <label for="judul">Judul</label>
      <input type="text" class="form-control" name="judul" value="{{$artikel->judul}}" id="judul">
    </div>
    <div class="form-group">
      <label for="isi">Isi</label>
      <input type="text" class="form-control" name="isi" value="{{$artikel->isi}}" id="isi">
    </div>
    <div class="form-group">
      <label for="tag">Tag</label>
      <input type="text" class="form-control" name="tag" value="{{$artikel->tag}}" id="tag">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection 