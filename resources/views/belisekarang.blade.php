@extends('master')
@section('content')

<div class="custom-produk">
  <div class="col-sm-10">
  <table class="table table-striped">
    <tbody>
      <tr>
        <td>Harga</td>
        <td>{{$total}} Rupiah</td>
      </tr>
      <tr>
        <td>Pajak</td>
        <td>0 Rupiah </td>
      </tr>
      <tr>
        <td>Delivery</td>
        <td>100</td>
      </tr>
      <tr>
        <td>Jumlah Total</td>
        <td>{{$total+100}}</td>
      </tr>
    </tbody>
  </table>
  <form action="/orderplace" method="POST">
  @csrf
    <div class="form-group">
      <textarea name="alamat" placeholder="enter your address" class="form-control"> </textarea>
    </div>
    <div class="form-group">
      <label for ="">Metode Pembayaran</label>
      <p> <input type="radio" value="cash" name="pembayaran"> <span>Pembayaran Online</span> </p>
      <p> <input type="radio" value="cash" name="pembayaran"> <span>COD (Bayar di Tempat)</span> </p>
      <p> <input type="radio" value="cash" name="pembayaran"> <span>Indomaret/Alfamart/Alfamidi</span> </p>
      <p> <input type="radio" value="cash" name="pembayaran"> <span>Kartu Kredit/Debit</span> </p>
    </div>
    <button type="submit" class="btn btn-default">Buat Pesanan</button>
  </form>
  </div>
</div>
@endsection

