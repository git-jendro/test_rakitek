@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Fibonacci input angka 5</div>
                    <div class="card-body">
                        @php
                            $angka = 5;
                            $x = 1;
                            $y = 1;
                            
                            echo "$x $y";
                            
                            for ($i = 2; $i < $angka; $i++) {
                                $z = $y + $x;
                                echo " $z";
                            
                                $x = $y;
                                $y = $z;
                            }
                        @endphp
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Fibonacci input angka 11</div>
                    <div class="card-body">
                        @php
                            $angka = 11;
                            $x = 1;
                            $y = 1;
                            
                            echo "$x $y";
                            
                            for ($i = 2; $i < $angka; $i++) {
                                $z = $y + $x;
                                echo " $z";
                            
                                $x = $y;
                                $y = $z;
                            }
                        @endphp
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Category</div>

                    <div class="card-body">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#category-create">
                            Create
                        </button>
                        @include('category.create')
                        <div class="table-responsive my-2">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nama</th>
                                        <th colspan="3" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($category as $cat)
                                        <tr>
                                            <td>{{ $cat->id }}</td>
                                            <td>{{ $cat->nama }}</td>
                                            <td>
                                                <button type="button" class="btn btn-success" data-toggle="modal"
                                                    data-target="#category-show-{{ $cat->id }}">
                                                    Show
                                                </button>
                                            </td>
                                            @include('category.show')
                                            <td>
                                                <button type="button" class="btn btn-info" data-toggle="modal"
                                                    data-target="#category-edit-{{ $cat->id }}">
                                                    Edit
                                                </button>
                                            </td>
                                            @include('category.edit')
                                            <td>
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#category-delete-{{ $cat->id }}">
                                                    Delete
                                                </button>
                                            </td>
                                            @include('category.delete')
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Product</div>

                    <div class="card-body">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#product-create">
                            Create
                        </button>
                        @include('product.create')
                        <div class="table-responsive my-2">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nama</th>
                                        <th>product</th>
                                        <th>Harga</th>
                                        <th colspan="3" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($product as $prod)
                                        <tr>
                                            <td>{{ $prod->id }}</td>
                                            <td>{{ $prod->nama }}</td>
                                            <td>{{ $prod->category->nama }}</td>
                                            <td>Rp. {{ number_format($prod->harga, 0) }}</td>
                                            <td>
                                                <button type="button" class="btn btn-success" data-toggle="modal"
                                                    data-target="#product-show-{{ $prod->id }}">
                                                    Show
                                                </button>
                                            </td>
                                            @include('product.show')
                                            <td>
                                                <button type="button" class="btn btn-info" data-toggle="modal"
                                                    data-target="#product-edit-{{ $prod->id }}">
                                                    Edit
                                                </button>
                                            </td>
                                            @include('product.edit')
                                            <td>
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                    data-target="#product-delete-{{ $prod->id }}">
                                                    Delete
                                                </button>
                                            </td>
                                            @include('product.delete')
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
