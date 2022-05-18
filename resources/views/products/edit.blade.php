@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf

        @method('PUT')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name</strong>
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="form-group">
                <strong>Suppliers:</strong>
                @foreach ($suppliers as $supplier)                
                <div>
                    <label>
                    <input type="checkbox" name="suppliers[]" value="{{$supplier['id']}}" 
                    {{ $supplier['value'] ? 'checked' : ''}}>
                    {{ $supplier['name'] }}
                    </label>
                </div>
                @endforeach
            </div>             

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection