@extends('layout')

@section('title', 'List Category')

@section('content')
<div class="row isotope-grid">
    
        @foreach ($categoryList as $category)
        <ul>
        <li>
            <samp>Mã Danh Mục</samp>
            {{ $category->id}}
        </li>
        <li>
            <samp>Tên Danh Mục</samp>
            {{ $category->name}}
        </li>
        <li>
            <small>Status</small>
            {{ $category->desc}}</li>
        </ul>
        @endforeach
    




</div>

@endsection