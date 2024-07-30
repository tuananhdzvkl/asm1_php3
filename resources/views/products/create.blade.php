@extends('layouts.app')
  
@section('title', 'Create Product')
  
@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Thêm Sản Phẩm </h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 mt-3">
                    <label for="pwd" class="form-label">Product Code</label>
                    <input type="text" class="form-control" id="pwd" placeholder="Tên Sản Phẩm" name="product_code" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="pwd" class="form-label">Name</label>
                    <input type="text" class="form-control" id="pwd" placeholder="Tên Sản Phẩm" name="title" required>
                </div>
                <div class="mb-3 mt-3">
                    <label for="pwd" class="form-label">Price</label>
                    <input type="text" class="form-control" id="pwd" placeholder="Giá Sản Phẩm" name="price" required>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Mô tả </label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                </div>
        
                <input type="submit" class="btn btn-primary" value="Thêm Mới">
            </form>
        </div>
    </div>
@endsection