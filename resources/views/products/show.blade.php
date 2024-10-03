@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Product Details</h2>

    <div class="mb-3">
        <strong>Name:</strong>
        <p>{{ $product->name }}</p>
    </div>
    <div class="mb-3">
        <strong>Amount:</strong>
        <p>${{ $product->amount }}</p>
    </div>
    <div class="mb-3">
        <strong>Description:</strong>
        <p>{{ $product->description }}</p>
    </div>
    <div class="mb-3">
        <strong>Price:</strong>
        <p>${{ $product->price }}</p>
    </div>
    <div class="mb-3">
        <strong>Quantity:</strong>
        <p>{{ $product->quantity }}</p>
    </div>
    @if($product->image)
    <div class="mb-3">
        <strong>Product Image:</strong>
        <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}" width="200">
    </div>
    @endif

    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('products.destroy
