@extends('layouts.admin')
@section('content')
<h1>news</h1>
<form method="post" action="{{route('news.update', $item->id)}}" enctype="multipart/form-data">
  @method('PUT')
  @csrf
  <div class="mb-3">
    <label for="judul" class="form-label">Judul</label>
    <input type="text" class="form-control" id="judul" name="judul" value="{{$item->judul}}">
  </div>
  <div class="mb-3">
    <label for="tanggal" class="form-label">Tanggal</label>
    <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{$item->tanggal}}">
  </div>
  <div class="mb-3">
    <label for="gambar" class="form-label">Gambar</label>
    <input type="file" class="form-control" id="gambar" name="gambar" value="{{$item->gambar}}">
  </div>
  <div class="mb-3">
    <label for="content" class="form-label">Content</label>
    <textarea name="content">{{$item->content}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection