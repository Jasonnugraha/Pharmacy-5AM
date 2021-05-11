@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>SALES</h1>
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

        <div class="row">
            <div class="form-group row">
                <label for="inputProductName" class="col-sm-2 col-form-label">Products</label>
                    <div class="col-xs-4">
                        <select type="text" name="product" id="productId" class="form-control">
                            <option value="vitamin">Vitamin C</option>
                            <option value="sunscreen">Sunscreen</option>
                            <option value="painReliever">Pain Reliever</option>
                            <option value="coughMeds">Cough&Flu Meds</option>
                            <option value="alergyMeds">Alergy Meds</option>
                        </select>
                    </div>
            </div>

            <div class="form-group row">
                <label for="salesQuantity" class="col-sm-2 col-form-label">Sales Quantity</label>
                    <div class="col-xs-4">
                        <input type="number" class="form-control" id="salesQuantityId" name="salesQuantity" placeholder="Enter the amount for the Sales Quantity">
                    </div>
            </div>

            <div class="form-group row">
                <label for="productPrice" class="col-sm-2 col-form-label">Product Price</label>
                    <div class="col-xs-4">
                        <input type="number" class="form-control" id="productPriceId" name="productPrice" placeholder="Enter the amount for the Product Price">
                    </div>
            </div>

            <div class="form-group row">
                <label for="totalPrice" class="col-sm-2 col-form-label">Total Price</label>
                    <div class="col-xs-4">
                        <input type="number" class="form-control" id="totalPriceId" name="totalPrice" placeholder="Enter the amount for the Total Price">
                    </div>
            </div>

            
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
           
        </div>
    </form>
@endsection