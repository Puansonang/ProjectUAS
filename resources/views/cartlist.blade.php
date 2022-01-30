@extends('master')
@section('content')
<div class="custom-produk">
  <div class="col-sm-10">
  <div class="trending-wrapper">
  <h2>Isi Keranjang</h2>
  <a class="btn btn-success" href="/belisekarang">Beli Sekarang</a> <br> <br>
 @foreach($produk_tbl as $item)
 <div class=" row cari-item cart-list-divider">
   <div class="col-sm-3">
    <a href="detail/{{$item->id}}">
      <img class="trending-image" src="{{$item->galeri}}">
    </a>
   </div>
   <div class="col-sm-4">
      <div class="">
      <h2>{{$item->name}}</h2>
      <h5>{{$item->deskripsi}}</h5>
    </div>
   </div>
   <div class="col-sm-3">
    <a href="/hapuskeranjang/{{$item->keranjang_id}}" class="btn btn-warning">Hapus Item dari Keranjang</a>
   </div>
    </div>
    @endforeach
    <a class="btn btn-success" href="/belisekarang">Beli Sekarang</a> <br> <br>
    </div>
  </div>
</div>
@endsection

