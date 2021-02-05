@extends('layouts.home')
@section('content')
<section class="BERITA bg-light py-3"> 
  <div class="container">
    <div class="row">
      <div class="col-sm-10">
      <h1>
      Berita Terbaru
      </h1>
     <div class="list-berita d-flex flex-wrap"> 
      @foreach($news as $item)
    <div class="card" style="width: 18rem;">
  <img src="{{Storage::url($item->gambar)}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$item->judul}}</h5>
    <p class="card-text">{{$item->tanggal}}</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
@endforeach

      </div>
      </div>
      <div class="col-sm-2">
      <div class="list-berita d-flex flex-wrap"> 
        <div class="card" style="width: 100% !important;">
  <img src="assets/images/kepsek.png" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h5 class="card-title">Assalamualaikum Wr Wb</h5>
    <h5 class="card-title">Selamat menempuh Penilaian Akhir Semester. Tetap semangat. Tetap jujur. Sukses.</h5>
    <h5 class="card-title">Wassalamu‘alaikum ww.</h5>
    <h5 class="card-title">H. Mumuh, S.Pd., M.Pd.</h5>
    <p class="card-text">Kepala Sekolah</p>
  </div>
</div>
      </div>
    </div>
    <div class="wrapper-pagination">
                <ul class="pagination">
                    <li>
                        <a href="#">1</a>
                    </li>

                    <li>
                        <a href="#">2</a>
                    </li>
                    
                    <li>
                        <a href="#">3</a>
                    </li>

                    <li>
                        <a href="#">4</a>
                    </li>
                </ul>
            </div>

            <div class="jurnal">
              <div class="card">
            <h5 class="card-header">Jurnal</h5>
            <div class="card-body">
              <img class="list-jurnal" src="assets/images/jurnal.jpg">
              <img class="list-jurnal" src="assets/images/perintis.jpg">
              <img class="list-jurnal" src="assets/images/jurnal.jpg">
            </div>  
            </div>
              
            </div>
  </div>

</section>
@endsection