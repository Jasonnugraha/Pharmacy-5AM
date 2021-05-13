@extends('layouts.app')

@section('script')
    let onProductChange = () => {

        // Get select product dropdown value
        let productField = document.getElementById('product').value

        if (productField !== '#') {
            // Master data for product price
            const productPriceData = {
                Vitamin: 15,
                Sunscreen: 20,
                'Pain Reliever': 12,
                'Cough Meds': 10,
                'Alergy Meds': 25
            }
    
            // Set product price data to product price field
            document.getElementById('productPriceId').value = productPriceData[productField]
        } else {
            // Set default value for product price field
            document.getElementById('productPriceId').value = ''
        }
    }
@endsection

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

        <div class="form-group row">
             <label for="inputProductName" class="col-sm-2 col-form-label">Products</label>
                <div class="col-sm-10">
                    <select name="ProductName" id="product" onchange="onProductChange()">
                        <option value="#">Choose product...</option>
                        <option value="Vitamin">Vitamin C</option>
                        <option value="Sunscreen">Sunscreen</option>
                        <option value="Pain Reliever">Pain Reliever</option>
                        <option value="Cough Meds">Cough&Flu Meds</option>
                        <option value="Alergy Meds">Alergy Meds</option>
                    </select>
                </div>
        </div>

        <div class="form-group row">
            <label for="salesQuantity" class="col-sm-2 col-form-label">Sales Quantity</label>
                <div class="col-xs-4">
                    <input type="number" class="form-control" id="salesQuantityId" name="SalesQuantity" placeholder="Enter the amount for the Sales Quantity">
                </div>
         </div>

        <div class="form-group row">
            <label for="productPrice" class="col-sm-2 col-form-label">Product Price</label>
                <div class="col-xs-4">
                    <input type="number" class="form-control" id="productPriceId" name="ProductPrice" placeholder="Enter the amount for the Product Price" readonly>
                </div>
        </div>

        <div class="form-group row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

    <!-- Catalogue for price -->

        <table class="catalogue" style="text-align:center; padding:10px; width:100%; height:80px;">
            <tr>
                <th>
                    Item
                </th>
                <td>
                    Vitamin C
                </td>
                <td>
                    Sunscreen
                </td>
                <td>
                    Pain Reliever
                </td>
                <td>
                    Cough and Flu Meds
                </td>
                <td>
                    Alergy Meds
                </td>
            </tr>
            <tr>
                <th>
                    Price
                </th>
                <td>
                    $15
                </td>
                <td>
                    $20
                </td>
                <td>
                    $12
                </td>
                <td>
                    $10
                </td>
                <td>
                    $25
                </td>
            </tr>
        </table>
                
                          
@endsection
