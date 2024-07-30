    @extends('layouts.app')
    @section('title', 'Product Management')
    @section('content')
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Danh Sách Sản Phẩm </h1>
        @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a class="btn btn-primary" href="{{ route('products.create') }}">Thêm Thêm Sản Phẩm <i
                        class="bi bi-plus-circle"></i></a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"
                        style="text-align:center;">
                        <thead>
                            <tr>
                                <th></th>
                                <th>STT</th>
                                <th>Product Code</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="" method="get">
                                @if ($product->count() > 0)
                                    @foreach ($product as $rs)
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td class="align-middle">{{ $loop->iteration }}</td>
                                            <td class="align-middle">{{ $rs->product_code }}</td>
                                            <td class="align-middle">{{ $rs->title }}</td>
                                            <td class="align-middle">{{ $rs->price }}</td>
                                            <td class="align-middle">{{ $rs->description }}</td>
                                            <td class="align-middle">
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ route('products.show', $rs->id) }}" type="button"
                                                        class="btn btn-secondary"><i class="bi bi-eye"></i></a>
                                                    <a href="{{ route('products.edit', $rs->id) }}" type="button"
                                                        class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                                    <form action="{{ route('products.destroy', $rs->id) }}" method="POST"
                                                        type="button" class="btn btn-danger p-0"
                                                        onsubmit="return confirm('Delete?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td class="text-center" colspan="5">Product not found</td>
                                    </tr>
                                @endif
                                <a href="" type="reset" class="btn btn-secondary">Bỏ Chọn Tất Cả </a>
                                <a href="" type="button" class="btn btn-success">Chọn Tất Cả</a>
                                <a type="button" class="btn btn-warning"
                                    onclick="return confirm('Bạn có muốn xóa không ?')">Xóa Các Mục Đã Chọn</a>
                                <a href="" onclick="return confirm('Bạn có muốn xóa không ?')" type="button"
                                    class="btn btn-danger">Xóa Tất Cả</a>
                                <a href="" type="button" class="btn btn-info">Số Lượng Sản Phẩm</a>
                            </form>
                        </tbody>
                    </table>
                </div>
            </div>
        @endsection
