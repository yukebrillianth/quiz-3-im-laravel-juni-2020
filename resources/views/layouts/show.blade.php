@extends('layouts.master')

@section('content')
<div class="card">
	<div class="card-body">
	  <h1 class="card-title text-red">Judul: {{$artikel->judul}}</h1>
	  <?php $slug = strtolower($artikel->judul); ?>
	  <h6 class="card-subtitle mb-3 text-muted">Slug: {{str_replace(" ","-",$slug)}}</h6>
	  <p class="card-text">{{$artikel->isi}}</p>
	  <?php $tag = explode(' ',$artikel->tag); ?>
	  @for ($i=0; $i < str_word_count($artikel->tag); $i++)
		  <p class="btn btn-sm btn-primary">{{$tag[$i]}}</p>
	  @endfor
	  <div class="text-right">
			<a href="/artikel" class="btn btn-primary">Kembali</a>
	  </div>
	</div>
  </div>
@endsection