@extends('template')
@section('content')
    <h1 class="h3 mb-4 text-gray-800">Barang masuk!</h1>

    <div class="card">
        <div class="card-body">
            <form action="/satuan/tambahdata" method="POST">
                @csrf
                <div class="form-group">
                    <label for="exampleInputPassword1">Satuan Barang</label>
                    <input type="text" class="form-control" name="nama" placeholder="Satuan Barang">
                </div>
                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </form>
        </div>
    </div>
@endsection
