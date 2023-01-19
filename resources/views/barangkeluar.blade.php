@extends('template')
@section('content')
    <h1 class="h3 mb-4 text-gray-800">Barang keluar!</h1>

    <div class="card">
        <div class="card-body">
            <form>
                <div class="form-group">
                    
                    <input type="hidden" class="form-control" placeholder="Id Transaksi">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Id Transaksi</label>
                    <input type="text" class="form-control" placeholder="Id Transaksi">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nama Barang</label>
                    <input type="text" class="form-control" placeholder="Nama Barang">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Jumlah Barang</label>
                    <input type="text" class="form-control" placeholder="Jumlah Barang">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tanggal barang keluar</label>
                    <input type="date" class="form-control" name="tanggal" aria-describedby="emailHelp" required>
                </div>

                <button type="submit" class="btn btn-primary">Simpan Data</button>
            </form>
        </div>
    </div>
@endsection
