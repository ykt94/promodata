@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Supplier</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('suppliers.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $supplier->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <strong>Products:</strong>
                @foreach ($supplier->products as $product)                
                <div>
                    {{ $product->name . ' - ' . $product->pivot->quantity}}
                </div>
                @endforeach
            </div>
        </div>   
    </div>
@endsection