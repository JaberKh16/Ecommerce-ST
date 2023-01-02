@extends('backend.master.master')
@section('manage')
    <section class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-6">
                <h2 class="h1 ">Manage To Product</h2>
            </div>
            <div class="col-md-6 d-flex justify-content-end">
                <a class="btn" href="{{ route('dashboard') }}">Home</a>

                <a class="btn" href="{{ route('addproducts') }}">Add Product</a>
            </div>
        </div>
        <div class="table">
            <table class="table table-hover">
                <thead class="table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                </thead>
                @php
                    $sl = 1;
                @endphp
                @foreach ($datashow as $item)
                    <tr>
                        <td>{{ $sl }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->title }}</td>
                        <td><img style="height: 70px;" src="{{ asset('image/product/' . $item->image) }}" alt="">
                        </td>
                        <td>{{ $item->des }}</td>
                        <td>{{ $item->price }}</td>
                        <td>
                            @if ($item->status == 1)
                                Active
                            @else
                                Inactive
                            @endif

                        </td>
                        <td>
                            <a class="text-primary m-2" href="{{ route('editpriduct', $item->id) }}"><span
                                    class="fa fa-edit"></span></a>
                            <a class="text-danger m-2" href="{{ route('delete', $item->id) }}"><span
                                    class="fa fa-trash"></span></a>
                        </td>

                    </tr>
                    @php
                        $sl++;
                    @endphp
                @endforeach


                <tbody>

                </tbody>
            </table>
        </div>

    </section>
@endsection
