@extends('master')
@section('content')
<div class="custom-produk">
  <div class="col-sm-10">
  <div class="trending-wrapper">
  <h2>Orderan Saya</h2>
  <a class="btn btn-success" href="/belisekarang">Beli Sekarang</a> <br> <br>
 @foreach ($orders as $item)
 <div class=" row cari-item cart-list-divider">
   <div class="col-sm-3">
    <a href="detail/{{$item->id}}">
      <img class="trending-image" src="{{$item->galeri}}">
    </a>
   </div>
   <div class="col-sm-4">
      <div class="">
      <h2>Nama : {{$item->name}}</h2>
      <h5>Delivery Status : {{$item->Status}}</h5>
      <h5>alamat : {{$item->alamat}}</h5>
      <h5>Status Pembayaran : {{$item->payment_status}}</h5>
      <h5>Metode Pembayaran : {{$item->payment_method}}</h5>
    </div>
   </div>
    </div>
    @endforeach
    </div>
  </div>
</div>
@endsection

