@extends('products.layout')

@section('styles')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12 text-center">
            <div class="card">
                <div class="card-header">
                    Lista de Productos
                    <a href="{{route('products.create')}}" class="btn btn-success btn-sm float-right">Nuevo producto</a>
                </div>
                <div class="card-body">
                    @if(session('info'))
                        <div class="alert alert-success">
                            {{ session('info') }}
                        </div>
                    @endif

                    <table class="table table-hover table-sm">
                        <thead>
                            <th>#</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Fecha de creación</th>
                            <th>Opciones</th>
                        </thead>
                        <tbody>
                            @foreach ($products as $key => $product)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$product->description}}</td>
                                    <td>${{$product->price}}</td>
                                    <td>{{$product->created_at->format('d/m/Y')}}</td>
                                    <td class="td-actions">
                                        <a href="{{route('products.show',$product->id)}}" class="btn btn-warning btn-sm">Editar</a>
                                        <button type="button" rel="tooltip" title="Eliminar" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteProduct{{$product->id}}">
                                            Eliminar
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$products->links()}}

                    @foreach ($products as $product)
                        @include('products.modal')
                    @endforeach
                </div>

            </div>
        </div>
    </div>

@endsection
