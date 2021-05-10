@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>ADD NEW PRODUCT</h1>
            </div>

            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('sales.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('sales.store') }}" method="POST" >
        @csrf

        <div class="form-group row">
             <label for="inputProductName" class="col-sm-2 col-form-label">Product Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputProductNameId" name="ProductName" placeholder="Enter Product Name">
                </div>
        </div>

        <div class="form-group row">
            <label for="salesQuantity" class="col-sm-2 col-form-label">Sales Quantity</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="salesQuantityId" name="SalesQuantity" placeholder="Enter the amount for the Sales Quantity">
                </div>
         </div>

        <div class="form-group row">
            <label for="productPrice" class="col-sm-2 col-form-label">Product Price</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="productPriceId" name="ProductPrice" placeholder="Enter the amount for the Product Price">
                </div>
        </div>

        <div class="form-group row">
            <label for="productPrice" class="col-sm-2 col-form-label">Product Price</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="productPriceId" name="TotalPrice" placeholder="Enter the amount for the Total Product Price">
                </div>
        </div>

        <div class="form-group row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection