@extends('products.layout')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Lista de Productos
                    <a href="{{route('products.create')}}" class="btn btn-success btn-sm float-right">Nuevo producto</a>
                </div>
                <div class="card-body">
                    ...
                </div>
            </div>
        </div>
    </div>
@endsection
