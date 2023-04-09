<x-app-layout>
    <style>
        input.star {
            display: none;
        }

        label.star {
            float: right;
            padding: 10px 4px;
            font-size: 28px;
            color: white;
            text-shadow: 0 0 5px rgba(0, 0, 0, .3);
            transition: all .2s;
        }

        input.star:checked~label.star:before {
            content: '\f005';
            color: red;
            transition: all .25s;
        }

        input.star-5:checked~label.star:before {
            color: #FE7;
            text-shadow: 0 0 5px 10px #952;
        }

        input.star-1:checked~label.star:before {
            color: #F62;
        }

        label.star:hover {
            transform: scale(1.2);
        }

        label.star:before {
            content: '\f005';
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            font-family: FontAwesome;
        }
    </style>
<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Feedback article</a>
                    <span></span> Fashion
                    <span></span> Abstract Print Patchwork Dress
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="product-detail accordion-detail">
                            <div class="row mb-50">
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-gallery">
                                        <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                                        <!-- MAIN SLIDES -->
                                        <div class="product-image-slider">
                                            <figure class="border-radius-10">
                                                <img src="{{--{{asset('assets/imgs/shop/product-') }}{{ $product->id }}-2.jpg-2.jpg--}}" alt="product image">
                                                    alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('assets/imgs/shop/product-16-1.jpg') }}"
                                                    alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('assets/imgs/shop/product-16-3.jpg') }}"
                                                    alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('assets/imgs/shop/product-16-4.jpg') }}"
                                                    alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('assets/imgs/shop/product-16-5.jpg') }}"
                                                    alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('assets/imgs/shop/product-16-6.jpg') }}"
                                                    alt="product image">
                                            </figure>
                                            <figure class="border-radius-10">
                                                <img src="{{ asset('assets/imgs/shop/product-16-7.jpg') }}"
                                                    alt="product image">
                                            </figure>
                                        </div>
                                        <!-- THUMBNAILS -->
                                        <div class="slider-nav-thumbnails pl-15 pr-15">
                                            <div><img src="{{ asset('assets/imgs/shop/thumbnail-3.jpg') }}"
                                                    alt="product image"></div>
                                            <div><img src="{{ asset('assets/imgs/shop/thumbnail-4.jpg') }}"
                                                    alt="product image"></div>
                                            <div><img src="{{ asset('assets/imgs/shop/thumbnail-5.jpg') }}"
                                                    alt="product image"></div>
                                            <div><img src="{{ asset('assets/imgs/shop/thumbnail-6.jpg') }}"
                                                    alt="product image"></div>
                                            <div><img src="{{ asset('assets/imgs/shop/thumbnail-7.jpg') }}"
                                                    alt="product image"></div>
                                            <div><img src="{{ asset('assets/imgs/shop/thumbnail-8.jpg') }}"
                                                    alt="product image"></div>
                                            <div><img src="{{ asset('assets/imgs/shop/thumbnail-9.jpg') }}"
                                                    alt="product image"></div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-6 col-sm-12 col-xs-12">
                                    <div class="detail-info">
                                        <h2 class="title-detail">{{--{{ $product->name }}--}}</h2>
                                        <div class="product-detail-rating">
                                            <div class="pro-details-brand">
                                                <span> Brands: <a href="shop.html">Bootstrap</a></span>
                                            </div>
                                            <div class="product-rate-cover text-end">
                                                <div class="product-rate d-inline-block">
                                                    <div class="product-rating" style="width:90%">
                                                    </div>
                                                </div>
                                                <span class="font-small ml-5 text-muted"> (25 reviews)</span>
                                            </div>
                                        </div>
                                        <div class="clearfix product-price-cover">
                                            <div class="product-price primary-color float-left">
                                                <ins><span
                                                        class="text-brand">{{--${{ $product->regular_price }}--}}</span></ins>
                                            </div>
                                        </div>
                                        <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                                        <div class="short-desc mb-30">
                                            <p>{{--{{ $product->short_description }}--}}</p>
                                        </div>


                                    </div>
                                    <!-- Detail Info -->
                                </div>
                            </div>
                            <div class="tab-style3">
                                <ul class="nav nav-tabs text-uppercase">
                                    <li class="nav-item">
                                        <a class="nav-link" id="Reviews-tab" data-bs-toggle="tab"
                                            href="#Reviews">Reviews (3)</a>
                                    </li>
                                </ul>
                                <div class="tab-content shop_info_tab entry-main-content">


                                    <div class="tab-pane fade" id="Reviews">
                                        <!--Comments-->
                                        <div class="comments-area">
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <h4 class="mb-30">Customer questions & answers</h4>
                                                    <div class="comment-list">
                                                        <div class="single-comment justify-content-between d-flex">
                                                            <div class="user justify-content-between d-flex">
                                                                <div class="thumb text-center">
                                                                    <img src="{{ asset('assets/imgs/page/avatar-6.jpg') }}"
                                                                        alt="">
                                                                    <h6><a href="#">Jacky Chan</a></h6>
                                                                    <p class="font-xxs">Since 2012</p>
                                                                </div>
                                                                <div class="desc">
                                                                    <div class="product-rate d-inline-block">
                                                                        <div class="product-rating" style="width:90%">
                                                                        </div>
                                                                    </div>
                                                                    <p>Thank you very fast shipping from Poland only
                                                                        3days.</p>
                                                                    <div class="d-flex justify-content-between">
                                                                        <div class="d-flex align-items-center">
                                                                            <p class="font-xs mr-30">December 4, 2020
                                                                                at 3:12 pm </p>
                                                                            <a href="#"
                                                                                class="text-brand btn-reply">Reply <i
                                                                                    class="fi-rs-arrow-right"></i> </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!--single-comment -->
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <h4 class="mb-30">Customer reviews</h4>
                                                    <div class="d-flex mb-30">
                                                        <div class="product-rate d-inline-block mr-15">
                                                            <div class="product-rating" style="width:90%">
                                                            </div>
                                                        </div>
                                                        <h6>4.8 out of 5</h6>
                                                    </div>
                                                    <div class="progress">
                                                        <span>5 star</span>
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 50%;" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100">50%</div>
                                                    </div>
                                                    <div class="progress">
                                                        <span>4 star</span>
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 25%;" aria-valuenow="25" aria-valuemin="0"
                                                            aria-valuemax="100">25%</div>
                                                    </div>
                                                    <div class="progress">
                                                        <span>3 star</span>
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 45%;" aria-valuenow="45" aria-valuemin="0"
                                                            aria-valuemax="100">45%</div>
                                                    </div>
                                                    <div class="progress">
                                                        <span>2 star</span>
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 65%;" aria-valuenow="65" aria-valuemin="0"
                                                            aria-valuemax="100">65%</div>
                                                    </div>
                                                    <div class="progress mb-30">
                                                        <span>1 star</span>
                                                        <div class="progress-bar" role="progressbar"
                                                            style="width: 85%;" aria-valuenow="85" aria-valuemin="0"
                                                            aria-valuemax="100">85%</div>
                                                    </div>
                                                    <a href="#" class="font-xs text-muted">How are ratings
                                                        calculated?</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!--comment form-->
                                        <div class="comment-form">
                                            <h4 class="mb-15">Add a review</h4>
                                            <div class="product-rate d-inline-block mb-30">
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-8 col-md-12">
                                                    <form class="form-contact comment_form" action="/feedback/add"
                                                        method="post" id="commentForm">
                                                        @csrf
                                                        <input type="hidden" value="{{ $demandeId }}"
                                                            name="demande_id">
                                                        <input type="hidden" value="{{ $id }}"
                                                            name="annonce_id">
                                                        <div class="row">
                                                            <p class="font-semibold mb-4">Please rate your service
                                                                experience for the following parameters</p>
                                                            <div class="w-full mb-4">
                                                                <label for="role" value="Rate the car state"
                                                                    class="font-semibold text-black text-lg" />
                                                                <div class="w-full flex justify-center">
                                                                    <div class="inline-block">
                                                                        <input class=" star star-5 " id="star-5"
                                                                            type="radio" name="star"
                                                                            value="5" />
                                                                        <label class="icon star star-5"
                                                                            for="star-5"></label>
                                                                        <input class=" star star-4 " id="star-4"
                                                                            type="radio" name="star"
                                                                            value="4" />
                                                                        <label class="icon star star-4"
                                                                            for="star-4"></label>
                                                                        <input class=" star star-3" id="star-3"
                                                                            type="radio" name="star"
                                                                            value="3" />
                                                                        <label class="icon star star-3"
                                                                            for="star-3"></label>
                                                                        <input class=" star star-2" id="star-2"
                                                                            type="radio" name="star"
                                                                            value="2" />
                                                                        <label class="icon star star-2"
                                                                            for="star-2"></label>
                                                                        <input class=" star star-1" id="star-1"
                                                                            type="radio" name="star"
                                                                            value="1" />
                                                                        <label class="icon star star-1"
                                                                            for="star-1"></label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="9"
                                                                        placeholder="review the partner"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <button type="submit"
                                                                class="button button-contactForm">Submit
                                                                Review</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>
</x-app-layout>