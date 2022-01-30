@extends('master')
@section('content')
<div class="custom-produk">
  <div class="col-sm-4">
  <a href="#">Filter</a>
  </div>
  <div class="col-sm-4">
  <div class="trending-wrapper">
  <h4>Hasil Pencarian</h4>
 @foreach($produk as $item)
 <div class="cari-item">
    <a href="detail/{{$item['id']}}">
      <img class="trending-image"src="{{$item['galeri']}}">
      <div class="">
      <h2>{{$item['name']}}</h2>
      <h5>{{$item['deskripsi']}}</h5>
    </div>
    </a>
    </div>
    @endforeach
    </div>
  </div>
</div>
@endsection

