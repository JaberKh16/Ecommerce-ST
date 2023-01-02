@extends('frontent.master.master')
@section('content')
    <div class="container">
        <div class="row container">
            <div class="col-sm-6">
                <div class="product-images">
                    <div class="product-main-img">
                        <img src="{{ asset('image/product/' . $datashow->image) }}" alt="">
                    </div>

                    <div class="product-gallery">
                        <img src="{{ asset('image/product/' . $datashow->image) }}" alt="">
                        <img src="{{ asset('image/product/' . $datashow->image) }}" alt="">
                        <img src="{{ asset('image/product/' . $datashow->image) }}" alt="">
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="product-inner">
                    <h2 class="product-name">{{ $datashow->name }}</h2>
                    <div class="product-inner-price">
                        <ins>${{ $datashow->price }}</ins> <del>$100.00</del>
                    </div>

                    <form action="" class="cart">
                        <div class="quantity">
                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1"
                                name="quantity" min="1" step="1">
                        </div>
                        <button class="add_to_cart_button" type="submit">Add to cart</button>
                    </form>

                    <div class="product-inner-category">
                        <p>Category: <a href="">Summer</a>. Tags: <a href="">awesome</a>, <a
                                href="">best</a>, <a href="">sale</a>, <a href="">shoes</a>. </p>
                    </div>

                    <div role="tabpanel">
                        <ul class="product-tab" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                    data-toggle="tab">Description</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab"
                                    data-toggle="tab">Reviews</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                <h2>Product Description</h2>
                                <p>{{ $datashow->des }}</p>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                <h2>Reviews</h2>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
