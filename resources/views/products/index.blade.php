@extends('layout')

@section('title', 'List Product')

@section('content')
<div class="row isotope-grid">
   
        @foreach ($productList as $product)
        <ul>
        <li>
            <samp>Mã sản phẩm</samp>
            {{ $product->id}}
        </li>
        <li>
        <samp>Tên sản phẩm</samp>
            {{ $product->name}}
        </li>

        <li>
            <samp>Giá bán</samp>
            {{ $product->price}}
        </li>
        <li><samp>Đơn vị</samp>
            {{ $product->unit}}</li>
        
        <li>
            <samp>Giá Nhập</samp>
            {{ $product->import_price}}</li>
        
        <li>
            <samp>Số lượng</samp>
            {{ $product->quantity}}</li>
        <li>
            <samp>Mã danh Mục</samp>
            {{ $product->category_id}}</li>
        <li>
            <samp>Status</samp>
            {{ $product->desc}}</li>
            </ul>
        @endforeach
    




</div>

@endsection