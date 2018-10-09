@extends('products.layout')
@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Producto {{$product->description}}
                <a href="{{route('products.index')}}" class="btn btn-warning btn-sm float-right">Regresar</a>
            </div>
            <div class="card-body">
                <form action="{{route('products.update',$product->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="description">Descripción</label>
                        <input type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description" id="description" value="{{old('description',$product->description)}}" required autofocus>
                        @if ($errors->has('description'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="price">Precio</label>
                        <input type="number" step="0.01" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price" id="price" value="{{old('price',$product->price)}}" required autofocus>
                        @if ($errors->has('price'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('price') }}</strong>
                            </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
