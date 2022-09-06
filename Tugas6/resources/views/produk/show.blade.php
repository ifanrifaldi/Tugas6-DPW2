@extends('template.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        Data Product
                        <a href="{{url('produk/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah Data </a>
                    </div>
                    <div class="card-body">
                        <h1>{{$produk->nama}}</h1>
                        <hr>
                        <p>
                            Rp. {{number_format($produk->harga)}} |
                            Stok : {{$produk->stok}} | 
                            Berat : {{$produk->berat}} gr
                        </p>
                        <p>
                            {!! nl2br($produk->deskripsi) !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection