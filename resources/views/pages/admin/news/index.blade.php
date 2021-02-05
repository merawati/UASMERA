@extends('layouts.admin')
@section('content')
<div class="d-flex justify-content-between">
 <h1>news</h1>
<a href="{{route('news.create')}}" class="btn btn-primary">create</a> 
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul</th>
      <th scope="col">Gambar</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Content</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>
    @foreach($items as $no => $item)
      <tr>
        <th scope="row">{{$no+1}}</th>
        <td>{{$item->judul}}</td>
        <td>
            <img src="{{Storage::url($item->gambar)}}" class="img-thumbsnail" style="width: 150px" />
        </td>
        <td>{{$item->tanggal}}</td>
        <td>{{$item->content}}</td>
        <td>
          <a href="{{route('news.edit', $item->id)}}" class="btn btn-warning">
            <span>Edit</span>
          </a>
          <a>
            <form action="{{route('news.destroy', $item->id)}}" method="post" class="d-inline">
              @csrf
              @method('delete')
              <button class="btn btn-danger">
                <span>Delete</span>
              </button>
            </form>
          </a>
        </td>
    </tr>
    @endforeach
    
  </tbody>
</table>
@endsection