@extends('layouts.app')

@section('content')
    {{-- @foreach ($sales as $sale)
        {{$sale}}
    @endforeach --}}

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="title">SALES PRODUCT</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('sales.create') }}" title="Create a sale"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>Sales Id</th>
            <th>Product Name</th>
            <th>Sales Quantity</th>
            <th>Product Price</th>
            <th>Total Price </th>
            <th>Sales Date</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($sales as $sale)
            <tr>
                <td>{{ $sale->SalesId }}</td>
                <td>{{ $sale->ProductName }}</td>
                <td>{{ $sale->SalesQuantity }}</td>
                <td>${{ $sale->ProductPrice }}</td>
                <td>${{ $sale->TotalPrice }}</td>
                <td>{{ date_format($sale->created_at, 'jS M Y') }}</td>
                <td>
                    <form action="{{ route('sales.destroy', $sale->SalesId) }}" method="POST">

                        {{-- <a href="{{ route('sales.show', $sale->SalesId) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('sales.edit', $sale->SalesId) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a> --}}

                        @csrf                                                   
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>
                        
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $sales->links("pagination::bootstrap-4") !!}



@endsection

