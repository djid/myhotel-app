@extends('layouts/app')        

@section('content')

<div class="banner_top innerpage" id="home"></div>
  <section class="top-nav">
    <!-- //banner -->
  <!-- top Products -->
    <div class="ads-grid_shop">
      <div class="shop_inner_inf">
      <!-- tittle heading -->
      <!-- //tittle heading -->
      <!-- product left -->
        <div class="side-bar col-md-3">
          <div class="search-hotel">
            <h3 class="agileits-sear-head">Recherche filtrer..</h3>
            <form action="#" method="post">
              <input type="search" placeholder="Product name..." name="search" required="">
              <input type="submit" value=" ">
            </form>
          </div>

          <!-- price range -->
          <div class="range">
            <h3 class="agileits-sear-head">Price range</h3>
              <ul class="dropdown-menu6">
                <li> <div id="slider-range"></div>
                  <input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
                </li>
              </ul>
          </div>
        <!-- //price range -->
        <!--preference -->
        <div class="left-side">
          <h3 class="agileits-sear-head">Departements</h3>
          <ul>
            @foreach ($departement as $Departement)
            <li>
                <input type="checkbox" class="checked">
                <a href=" {{ route('landing-page', ['Departement' => $Departement->slug]) }} "> <span class="span">{{ $Departement -> nom }}</span> </a>
            </li> 
            @endforeach              
            
          </ul>
        </div>
        <!-- // preference -->
        <!-- discounts -->
        <div class="left-side">
          <h3 class="agileits-sear-head">Discount</h3>
          <ul>
            <li>
              <input type="checkbox" class="checked">
              <span class="span">5% or More</span>
            </li>
            <li>
              <input type="checkbox" class="checked">
              <span class="span">10% or More</span>
            </li>
            <li>
              <input type="checkbox" class="checked">
              <span class="span">20% or More</span>
            </li>
            <li>
              <input type="checkbox" class="checked">
              <span class="span">30% or More</span>
            </li>
            <li>
              <input type="checkbox" class="checked">
              <span class="span">50% or More</span>
            </li>
            <li>
              <input type="checkbox" class="checked">
              <span class="span">60% or More</span>
            </li>
          </ul>
        </div>
        <!-- //discounts -->
        <!-- reviews -->
        <div class="customer-rev left-side">
          <h3 class="agileits-sear-head">Customer Review</h3>
          <ul>
            <li>
              <a href="#">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <span>5.0</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <span>4.0</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <span>3.5</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <span>3.0</span>
              </a>
            </li>
            <li>
              <a href="#">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <span>2.5</span>
              </a>
            </li>
          </ul>
        </div>
        <!-- //reviews -->
        
      </div>
      <!-- //product left -->
      <!-- product right -->

      <div class="left-ads-display col-md-9">
        <div class="wrapper_top_shop">

          <h1>Resultat de la Recherche</h1>
          <p>{{ $products->count() }} result(s) for '{{ request()->input('query') }}' </p>
          
            <div class="container">
              @if (session()->has('success_message'))
                <div class="alert alert-success">
                  {{ session()->get('success_message') }}
                </div>
              @endif

              @if (count($errors) > 0)
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>    
                </div>
              @endif    
            </div>

          <div class="col-md-6 shop_left">
            <img src="images/plage.jpg" alt="plage haitiene" style="/*height: 259px;*/">
            
          </div>
          <div class="col-md-6 shop_right">
            <img src="images/banner2.jpg" alt="">
            
          </div>
          <div class="clearfix"></div>
          <!-- product-sec1 -->
          <div class="product-sec1">
            <!--/mens-->
            <div class="product-sec1">
            <!--/mens-->

            @foreach ($products as $product)
            
            <div class="col-md-4 product-men">
              <div class="product-shoe-info shoe">
                <div class="men-pro-item">
                  <div class="men-thumb-item"><!-- 
                    <img src="{{ asset('images/hotels/'.$product->slug.'.jpg') }}" alt="{{ $product->nom }}" style="width: 221px; height: 147px;"> -->
                    <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->nom }}" style="width: 221px; height: 147px;">
                    <div class="men-cart-pro">
                      <div class="inner-men-cart-pro">
                        <a href="{{ route('show', $product->slug) }}" class="link-product-add-cart">Plus d'Infos</a>
                      </div>
                    </div>
                  </div>
                  <div class="item-info-product">
                    <h4>
                      <a href="{{ route('show', $product->slug) }}">{{ $product->nom }} </a>
                    </h4>
                    <div class="info-product-price">
                      <div class="grid_meta">
                        <div class="product_price">
                          <div class="grid-price ">
                            <span class="money ">$405.00</span>
                          </div>
                        </div>
                        <ul class="stars">
                          <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                          <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                          <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                          <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                        </ul>
                          
                      </div>
                      <div class="shoe single-item hvr-outline-out">
                        <form action="#" method="post">
                          <input type="hidden" name="cmd" value="_cart">
                          <input type="hidden" name="add" value="1">
                          <input type="hidden" name="shoe_item" value="Bella Toes">
                          <input type="hidden" name="amount" value="675.00">
                          <button type="submit" class="shoe-cart pshoe-cart"><i class="fa fa-cart-plus" aria-hidden="true"></i></button>

                          <a href="#" data-toggle="modal" data-target="#myModal1"></a>
                        </form>

                      </div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach  
          <div class="clearfix"></div>

        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
</div>
</section>


    <div class="clearfix"> </div>
  </div>
  
  <!-- //newsletter-->
  <!-- footer -->

  <!-- js -->
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <!-- //js -->
  <!-- cart-js -->
  <script src="js/minicart.js"></script>
  <script>
    shoe.render();

    shoe.cart.on('shoe_checkout', function (evt) {
      var items, len, i;

      if (this.subtotal() > 0) {
        items = this.items();

        for (i = 0, len = items.length; i < len; i++) {}
      }
    });
  </script>
  <!-- //cart-js -->
  <!-- /nav -->
  <script src="js/modernizr-2.6.2.min.js"></script>
  <script src="js/classie.js"></script>
  <script src="js/demo1.js"></script>
  <!-- //nav -->
  <!--search-bar-->
  <script src="js/search.js"></script>
  <!--//search-bar-->
  <!-- price range (top products) -->
  <script src="js/jquery-ui.js"></script>
  <script>
    //<![CDATA[ 
    $(window).load(function () {
      $("#slider-range").slider({
        range: true,
        min: 0,
        max: 9000,
        values: [50, 6000],
        slide: function (event, ui) {
          $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
        }
      });
      $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

    }); //]]>
  </script>
  <!-- //price range (top products) -->

  <!-- start-smoth-scrolling -->
  <script type="text/javascript" src="js/move-top.js"></script>
  <script type="text/javascript" src="js/easing.js"></script>
  <script type="text/javascript">
    jQuery(document).ready(function ($) {
      $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({
          scrollTop: $(this.hash).offset().top
        }, 1000);
      });
    });
  </script>
  <!-- //end-smoth-scrolling -->
  <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

  </section>
@stop