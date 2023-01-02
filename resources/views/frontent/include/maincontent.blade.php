<div class="maincontent-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="latest-product">
                    <h2 class="section-title">Latest Products</h2>
                    <div class="product-carousel">


                        @foreach ($datashow as $item)
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="{{ asset('image/product/' . $item->image) }}" alt="image">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i>
                                            Add to cart</a>
                                        <a href="{{ route('productdetail', $item->id) }}" class="view-details-link"><i
                                                class="fa fa-link"></i>
                                            See details</a>
                                    </div>
                                </div>

                                <h2><a href="single-product.html">{{ $item->name }}</a></h2>
                                <p>{{ $item->title }}</p>
                                <div class="product-carousel-price">
                                    <ins>${{ $item->price }}</ins> <del>$100.00</del>
                                </div>
                            </div>
                        @endforeach










                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End main content area -->
