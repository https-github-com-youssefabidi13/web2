<div>
    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow">Home</a>
                    <span></span> Shop
                    <span></span> Your Cart
                </div>
            </div>
        </div>
        <section class="mt-50 mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            @if(Session::has('success_message'))
                                <div class="alert alert-success">
                                    <strong>Success {{Session::get('success_message')}}</strong>
                                </div>
                            @endif
                                @if (session()->has('error_message'))
                                    <div class="{{ session()->get('alert-class') }} alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong>{{ session()->get('error_message') }}</strong>
                                    </div>
                                @endif



                            @if(Cart::instance('cart')->count()>0)

                            <table class="table shopping-summery text-center clean">
                                <thead>
                                <tr class="main-heading">
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Disponibilite</th>
                                    <th scope="col">Price</th>
{{--                                    <th scope="col">Quantity</th>--}}
                                    {{-- <th scope="col">Subtotal</th> --}}
                                    <th scope="col">Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach(Cart::instance('cart')->content() as $item)
                                    <tr>
                                        <td class="image product-thumbnail"><img src="{{asset('assets/imgs/shop/product-')}}{{$item->id}}-1.jpg" alt="#"></td>
                                        <td class="product-des product-name">
                                            <h5 class="product-name"><a href="product-details.html">{{$item->name}}</a></h5>
                                        </td>
                                        <td class="availability" data-title="Disponibilité">
                                            @if(isset($item->options['dates']))
                                                <select name="selected_dates[]" multiple>
                                                    @foreach($item->options['dates'] as $date)
                                                        <option value="{{$date}}">{{$date}}</option>
                                                    @endforeach
                                                </select>
                                                <button type="button" onclick="displaySelectedDates()">Sélectionner</button>
                                                <div id="selected_dates_output"></div>
                                            @endif
                                        </td>


                                        <td class="price" data-title="Price"><span>${{$item->price}} </span></td>
                                        {{-- <td class="text-right" data-title="Cart">
                                            <span>${{$item->subtotal}} </span>
                                        </td> --}}
                                        <td class="action" data-title="Remove"><a href="#" class="text-muted" wire:click.prevent="destroy('{{$item->rowId}}')"><i class="fi-rs-trash"></i></a></td>

                                    </tr>
                                @endforeach

                                <tr>

                                    <td colspan="6" class="text-end">
                                        <a href="#" class="text-muted" wire:click.prevent="clearAll()"> <i class="fi-rs-cross-small"></i> Clear Cart</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                                        @else
                                            <p>No Item In Cart</p>
                                        @endif
                        </div>
                        @push('scripts')
                            <script>
                                var selectedDates = [];
                                function displaySelectedDates() {
                                    selectedDates = [];
                                    var select = document.getElementsByName("selected_dates[]")[0];
                                    for (var i = 0; i < select.options.length; i++) {
                                        if (select.options[i].selected) {
                                            selectedDates.push(select.options[i].value);
                                        }
                                    }
                                    console.log(selectedDates); // affiche les dates sélectionnées dans la console pour vérification
                                    // Ajouter ici le code pour envoyer les données à un script PHP via Ajax
                                    document.getElementById("selected_dates_output").innerHTML = selectedDates.join(", ");
                                }
                            </script>
                        @endpush

                        <div class="cart-action text-end">
                            <a href="{{ route('home.index') }}" class="btn  mr-10 mb-sm-15"><i class="fi-rs-shuffle mr-10"></i>Cancel</a>

                            <a aria-label="Add To Cart"
                               class="{{ $buttonClass }}"
                               href="#"
                               onclick="displaySelectedDates();"
                               wire:click.prevent="store({{$item->id}}, {{Auth::user()->id}}, selectedDates)"
                                {{ $buttonDisabled ? 'disabled' : '' }}>
                                <i class="fi-rs-shopping-bag mr-10"></i>Terminer Location
                            </a>



                        </div>
                        <div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>
                        <div class="row mb-50">
                            <div class="col-lg-6 col-md-12">
                                <div class="heading_s1 mb-3">
                                    <h4>Calculate Shipping</h4>
                                </div>
                                <p class="mt-15 mb-30">Flat rate: <span class="font-xl text-brand fw-900">5%</span></p>
                                <form class="field_form shipping_calculator">
                                    <div class="form-row">
                                        <div class="form-group col-lg-12">
                                            <div class="custom_select">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row row">
                                        <div class="form-group col-lg-6">
                                            <input required="required" placeholder="State / Country" name="name" type="text">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input required="required" placeholder="PostCode / ZIP" name="name" type="text">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-lg-12">
                                            <button class="btn  btn-sm"><i class="fi-rs-shuffle mr-10"></i>Update</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="mb-30 mt-50">
                                    <div class="heading_s1 mb-3">
                                        <h4>Apply Coupon</h4>
                                    </div>
                                    <div class="total-amount">
                                        <div class="left">
                                            <div class="coupon">
                                                <form action="#" target="_blank">
                                                    <div class="form-row row justify-content-center">
                                                        <div class="form-group col-lg-6">
                                                            <input class="font-medium" name="Coupon" placeholder="Enter Your Coupon">
                                                        </div>
                                                        <div class="form-group col-lg-6">
                                                            <button class="btn  btn-sm"><i class="fi-rs-label mr-10"></i>Apply</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="border p-md-4 p-30 border-radius cart-totals">
                                    <div class="heading_s1 mb-3">
                                        <h4>Cart Totals</h4>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                            <tr>
                                                <td class="cart_total_label">Cart Subtotal</td>
                                                <td class="cart_total_amount"><span class="font-lg fw-900 text-brand">${{Cart::subtotal()}}</span></td>
                                            </tr>
                                            <tr>
                                                <td class="cart_total_label">Tax</td>
                                                <td class="cart_total_amount"><span class="font-lg fw-900 text-brand">${{Cart::tax()}}</span></td>
                                            </tr>
                                            <tr>
                                                <td class="cart_total_label">Shipping</td>
                                                <td class="cart_total_amount"> <i class="ti-gift mr-5"></i> Free Shipping</td>
                                            </tr>
                                            <tr>
                                                <td class="cart_total_label">Total</td>
                                                <td class="cart_total_amount"><strong><span class="font-xl fw-900 text-brand">${{Cart::total()}}</span></strong></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <a href="checkout.html" class="btn "> <i class="fi-rs-box-alt mr-10"></i> Proceed To CheckOut</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>