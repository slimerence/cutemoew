@extends(_get_frontend_layout_path('catalog'))
@section('topbar')
    <div class="inner-header" style="background: url({{ asset('images/cutemoew/slideshow_1.jpg') }});">
        <h2>Shop Categories</h2>
        <div class="bdr">
            <ul>
                <li>Home</li>
                <li>/</li>
                <li><span>Shop  Categories</span></li>
            </ul>
        </div>
    </div>
@endsection
@section('content')
    <section class="grid-shop blog" id="category-view-manager">
        <!-- .grid-shop -->
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3">
                    <div class="weight">
                        <div class="title">
                            <h2>Product Categories</h2>
                        </div>
                        <div class="panel-group" id="accordion">
                            @include(_get_frontend_layout_path('frontend.elements.categorymenu'))
                        </div>
                    </div>
                    <div class="weight">
                        <div class="title">
                            <h2>filter by price</h2>
                        </div>
                        <!-- Bootstrap Pricing Slider by ZsharE -->
                        <div class="button-slider">
                            <div class="btn-group">
                                <div class="btn btn-default">
                                    <input id="bootstrap-slider" type="text" data-slider-min="1" data-slider-max="500" data-slider-step="1" data-slider-value="50" />
                                    <div class="valueLabelblck">Filter</div>
                                    <div class="valueLabel">$<span id="sliderValue">50</span></div>
                                    <div class="valueLabel">$<span id="sliderValue2">500</span></div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Bootstrap Pricing Slider by ZsharE -->
                    </div>

                    @if(isset($promotionProducts) && count($promotionProducts)>0)
                        <div class="weight">
                            <div class="title">
                                <h2>BEST PRODUCTS</h2>
                            </div>
                            <div class="toprating-box">
                                <ul>
                                    @foreach($promotionProducts as $promotionProduct)
                                        <li>
                                            <div class="col-sm-3 col-md-3"><img src="{{ $promotionProduct->getProductDefaultImageUrl() }}" alt="{{ $promotionProduct->name }}"></div>
                                            <div class="col-sm-9 col-md-9">
                                                <div class="pro-text"> <a href="{{ url('catalog/product/'.$promotionProduct->uri) }}">{{ $promotionProduct->getProductName() }}</a>
                                                    @if($promotionProduct->special_price)
                                                    <strong>${{ $promotionProduct->getSpecialPriceGST() }}</strong> <span>${{ $promotionProduct->getDefaultPriceGST() }}</span>
                                                        @else <strong>${{ $promotionProduct->getDefaultPriceGST() }}</strong>
                                                    @endif
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                @endif
                </div>
                <div class="col-sm-9 col-md-9">
                    <div class="row catbar">
                        <div class="col-sm-5 col-md-5"> <span>Showing 1-12 of 30 relults</span> </div>
                        <div class="col-sm-7 col-md-7 text-right">
                            @include(_get_frontend_theme_path('catalog.elements.filters'))
                        </div>
                    </div>


                    <div class="row wow zoomIn animated" data-wow-duration=".5s" data-wow-delay=".2s">

                        <?php
                        $productsChunk = $products->chunk(4);
                        // 尝试加载产品的 Brand 的 Logo, 为了减少数据库的查询, 在这里做一个缓存
                        $imageLogoBuffer = [];

                        foreach ($productsChunk as $row) {
                        ?>
                            @foreach($row as $key=>$product)
                                <div class="col-md-4">
                            <!-- .pro-text -->
                            <div class="pro-text">
                                <!-- .pro-img -->
                                <div class="pro-img"> <img src="{{ $product->getProductDefaultImageUrl() }}" alt="{{ $product->getProductName() }}">
                                    <!-- .hover-img -->
                                    <div class="hover-img">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li><a href="{{ url('catalog/product/'.$product->uri) }}"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <!--<div class="new tage"> <span class="new-text">NEW</span> <span class="pres-text">-15%</span> </div>-->
                                    @if($product->special_price)
                                        <div class="discount tage"> <span class="discount-text">SALE</span> </div>
                                    @endif
                                    <!-- /.hover-img -->
                                </div>
                                <!-- /.pro-img --><a href="{{ url('catalog/product/'.$product->uri) }}">{{ $product->getProductName() }}</a> <a href="{{ url('catalog/product/'.$product->uri) }}" class="addtocart">+ Add to cart</a>
                                <div class="price">
                                        <span style="{{ $product->special_price ? 'text-decoration: line-through;' : '' }}">${{ $product->getDefaultPriceGST() }}</span>
                                    @if($product->special_price)
                                        <span style="color: red;text-decoration: none;">${{ $product->getSpecialPriceGST() }}</span>
                                    @endif
                                </div>
                            </div>
                            <!-- /.pro-text -->
                        </div>

                        @endforeach
                        <?php
                        }
                        ?>
                    </div>
                    <div class="pagetions">
                        <!-- .pagetions -->
                        @include(_get_frontend_theme_path('catalog.elements.simple_paginate'))
                        <div class="col-md-6 text-right"> <span>Showing 1-12 of 30 relults</span> </div>
                        <!-- /.pagetions -->

                    </div>
                </div>
            </div>
        </div>
        <!-- /.grid-shop -->
    </section>
@endsection