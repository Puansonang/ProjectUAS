@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
        <img class="detail-img"src ="{{$produk['galeri']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Kembali</a>
            <h2>{{$produk['name']}}</h2>
            <h3>Harga : {{$produk['harga']}}</h3>
            <h4>Deskripsi : {{$produk['deskripsi']}}</h4>
            <h4>Kategori : {{$produk['kategori']}}</h4>
            <br><br>
            <form action="/add_to_cart" method="POST">
            @csrf
            <input type="hidden" name="produk_id" value={{$produk['id']}}>
            <button class="btn btn-primary">Tambah ke Keranjang</button>
            </form>
            <br><br>
            <button class="btn btn-success">Beli Sekarang</button>
            <br><br>
    </div>
    </div>
</div>
@endsection

