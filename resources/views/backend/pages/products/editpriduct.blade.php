@extends('backend.master.master')
@section('productadd')
    <section class="container-fluid">
        <div class="row my-5">
            <h3 class="h2 text-primary text-center">Product Editing Dashboard</h3>
            <div class="col-md-10 offset-1">
                <div class="addProduct bg-secondary text-white mt-5 p-5 rounded shadow">

                    <form action="{{ route('updateproduct', $edit->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mt-3">
                            <div class="row">
                                <div class="col-md-6">
                                    <h2 class="">Edit Product Field</h2>
                                </div>
                                <div class="col-md-6 d-flex justify-content-end">
                                    <a class="btn text-white" href="{{ route('dashboard') }}">Home</a>
                                    <a class="btn text-white" href="">Manage Product</a>
                                </div>
                            </div>
                            <div class="col-md-6 mt-3">
                                <div class="row">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control mb-4"
                                            placeholder="Product Name" value="{{ $edit->name }}">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="title" class="form-control mb-4"
                                            placeholder="Product Title" value="{{ $edit->title }}">
                                    </div>
                                    <div class="form-group">
                                        <img style="height: 80px;" src="{{ asset('image/product/' . $edit->image) }}"
                                            alt="">
                                        <input type="file" name="image" class="form-control mb-4"
                                            placeholder="Product Image" value="{{ $edit->image }}">
                                    </div>

                                </div>
                            </div>

                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <input type="text" name="des" class="form-control mb-4" placeholder="Description"
                                        value="{{ $edit->des }}">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="price" class="form-control mb-4" placeholder="Price"
                                        value="{{ $edit->price }}">
                                </div>
                                <div class="form-group">

                                    <select name="status" class="form-control mb-4" id="">
                                        <option value="{{ $edit->status }}">
                                            @if ($edit->status == 1)
                                                Active
                                            @else
                                                Inactive
                                            @endif

                                        </option>
                                        <option value="1">Active</option>
                                        <option value="2">Inactive</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <button type="submit" class="fw-bold form-control bg-info text-light">Update Product</button>
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection
