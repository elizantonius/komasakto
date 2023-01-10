@extends('template')
@section('content')

<h1 class="h3 mb-4 text-gray-800">Barang masuk!</h1>

<div class="card">
    <div class="card-body">
        <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Kode Barang</label>
              <input type="text" class="form-control" placeholder="Kode Barang">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Nama Barang</label>
              <input type="text" class="form-control"  placeholder="Nama Barang">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
  </div>
    
@endsection