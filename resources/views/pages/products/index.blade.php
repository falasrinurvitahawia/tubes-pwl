@extends('layouts.main')

@section('header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1>Pesanan Tiket</h1>
    </div>
</div>
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <a href="/products/create" class="btn btn-sm btn-primary" >
                        Tambah Pesanan
                    </a>
                </div>
                <div class="card body">
                    <table class="table table-bordered" >
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id Pemesan</th>
                                <th>Nama Pemesan</th>
                                <th>Tanggal Pemesan</th>
                                <th>Jumlah Tiket</th>
                                <th>Harga</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description ?? '-' }}</td>
                                <td>{{ $product->sku }}</td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->stock }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>
                                    <div class="d-flex" >
                                        <a href="/products/edit/{{ $product->id }}" class="btn btn-sm btn-warning mr-2" >
                                            Edit
                                        </a>
                                        <form action="/products/{{ $product->id }}" method="POST" >
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" >
                                                Hapus
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection