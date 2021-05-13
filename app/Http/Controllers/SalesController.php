<?php

namespace App\Http\Controllers;

use App\Models\Sales;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sales::latest()->paginate(5);

        return view('sales.index',['sales'=>$sales]);

        // return view('sales.index', compact('sales'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ProductName' => 'required',
            'SalesQuantity' => 'required',
            'ProductPrice' => 'required'
        ]);

        $requestBody = $request->all();
        
        $salesQty = (int)$requestBody['SalesQuantity'];
        $productPrice = (int)$requestBody['ProductPrice'];
        $requestBody['TotalPrice'] = $salesQty * $productPrice;

        Sales::create($requestBody);

        return redirect()->route('sales.index');
        // return redirect()->route('sales.index')->with('success', 'Sales created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function show(Sales $sales)
    {
        return view ('sales.show', compact('sales'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function edit(Sales $sales)
    {
        return view('sales.edit', compact('sales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sales $sales)
    {
        $request->validate([
            'ProductName' => 'required',
            'SalesQuantity' => 'required',
            'ProductPrice' => 'required',
            'TotalPrice' => 'required'
        ]);

        $sales->update($request->all());

        return redirect()->route('sales.index')->with('success', 'Sales record updaed');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sales  $sales
     * @return \Illuminate\Http\Response
     */
    public function destroy($salesID)
    {
        $sales = Sales::where('SalesId', $salesID)->first();
        $sales->delete();
        
        return redirect()->route('sales.index')->with('success', 'Sales deleted successfully');

    }
}
