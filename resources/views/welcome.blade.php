@extends('layouts/app')        

@section('content')

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
            <h3 class="agileits-sear-head">Search Here..</h3>
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
          <h3 class="agileits-sear-head">Occasion</h3>
          <ul>
            <li>
              <input type="checkbox" class="checked">
              <span class="span">Casuals</span>
            </li>
            <li>
              <input type="checkbox" class="checked">
              <span class="span">Party</span>
            </li>
            <li>
              <input type="checkbox" class="checked">
              <span class="span">Wedding</span>
            </li>
            <li>
              <input type="checkbox" class="checked">
              <span class="span">Ethnic</span>
            </li>
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
        <!-- deals -->
        <div class="deal-leftmk left-side">
          <h3 class="agileits-sear-head">Special Deals</h3>
          <div class="special-sec1">
            <div class="col-xs-4 img-deals">
              <img src="images/s4.jpg" alt="">
            </div>
            <div class="col-xs-8 img-deal1">
              <h3>Shuberry Heels</h3>
              <a href="single.html">$180.00</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="special-sec1">
            <div class="col-xs-4 img-deals">
              <img src="images/s2.jpg" alt="">
            </div>
            <div class="col-xs-8 img-deal1">
              <h3>Chikku Loafers</h3>
              <a href="single.html">$99.00</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="special-sec1">
            <div class="col-xs-4 img-deals">
              <img src="images/s1.jpg" alt="">
            </div>
            <div class="col-xs-8 img-deal1">
              <h3>Bella Toes</h3>
              <a href="single.html">$165.00</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="special-sec1">
            <div class="col-xs-4 img-deals">
              <img src="images/s5.jpg" alt="">
            </div>
            <div class="col-xs-8 img-deal1">
              <h3>Red Bellies</h3>
              <a href="single.html">$225.00</a>
            </div>
            <div class="clearfix"></div>
          </div>
          <div class="special-sec1">
            <div class="col-xs-4 img-deals">
              <img src="images/s3.jpg" alt="">
            </div>
            <div class="col-xs-8 img-deal1">
              <h3>(SRV) Sneakers</h3>
              <a href="single.html">$169.00</a>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
        <!-- //deals -->

      </div>
      <!-- //product left -->
      <!-- product right -->
      <div class="left-ads-display col-md-9">
        <div class="wrapper_top_shop">
          <div class="col-md-6 shop_left">
            <img src="images/port-au-prince/BestWestern/107508189.jpg" alt="">
            <h6>40% off</h6>
          </div>
          <div class="col-md-6 shop_right">
            <img src="images/banner2.jpg" alt="">
            <h6>50% off</h6>
          </div>
          <div class="clearfix"></div>
          <!-- product-sec1 -->
          <div class="product-sec1">
            <!--/mens-->
            <div class="product-sec1">
            <!--/mens-->
            <div class="col-md-4 product-men">
              <div class="product-shoe-info shoe">
                <div class="men-pro-item">
                  <div class="men-thumb-item">
                    <img src="images/port-au-prince/bestWestern/107508092.jpg" alt="Best Western">
                    <div class="men-cart-pro">
                      <div class="inner-men-cart-pro">
                        <a href="single.html" class="link-product-add-cart">Plus d'Infos</a>
                      </div>
                    </div>
                  </div>
                  <div class="item-info-product" style="height: 80px">
                    <h4>
                      <a href="{{url('port-au-prince/best-western-premier')}}">Best Western </a>
                    </h4>
                    <div class="info-product-price">
                      <div class="grid_meta">
                        <div class="product_price">
                          
                        </div>
                        
                          
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
            <div class="col-md-4 product-men">
              <div class="product-shoe-info shoe">
                <div class="men-pro-item">
                  <div class="men-thumb-item">
                    <img src="images/port-au-prince/El-rancho/107508223.jpg" alt="">
                    <div class="men-cart-pro">
                      <div class="inner-men-cart-pro">
                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                      </div>
                    </div>
                    <span class="product-new-top">New</span>
                  </div>
                  <div class="item-info-product" style=" height: 80px;">
                    <h4>
                      <a href="single.html">El-rancho </a>
                    </h4>
                    <div class="info-product-price">
                      <div class="grid_meta">
                        <div class="product_price">
                          <div class="grid-price ">
                            <span class="money ">$405.00</span>
                          </div>
                        </div>
                        <ul class="stars">
                          <li><a href="#"><i class="fas fa-utensils"></i></a></li>
                          <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                          <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                          <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                          <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                        </ul>
                      </div>
                      <div class="shoe single-item hvr-outline-out">
                        <form action="#" method="post">
                          <input type="hidden" name="cmd" value="_cart">
                          <input type="hidden" name="add" value="1">
                          <input type="hidden" name="shoe_item" value="Chikku Loafers">
                          <input type="hidden" name="amount" value="405.00">
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
            <div class="col-md-4 product-men">
              <div class="product-shoe-info shoe">
                <div class="men-pro-item">
                  <div class="men-thumb-item">
                    <img src="images/port-au-prince/Marriott/53864453.jpg" alt="">
                    <div class="men-cart-pro">
                      <div class="inner-men-cart-pro">
                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                      </div>
                    </div>
                    <span class="product-new-top">New</span>
                  </div>
                  <div class="item-info-product" style="height: 81px;">
                    <h4>
                      <a href="single.html">Mariott </a>
                    </h4>
                    <div class="info-product-price">
                      <div class="grid_meta">
                        <div class="product_price">
                          <div class="grid-price ">
                            <span class="money ">$375.00</span>
                          </div>
                        </div>
                        <ul class="stars">
                          <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                          <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                          <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                          <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                          <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                        </ul>
                      </div>
                      <div class="shoe single-item hvr-outline-out">
                        <form action="#" method="post">
                          <input type="hidden" name="cmd" value="_cart">
                          <input type="hidden" name="add" value="1">
                          <input type="hidden" name="shoe_item" value="(SRV) Sneakers">
                          <input type="hidden" name="amount" value="375.00">
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
            <!-- //mens -->
            <!-- /womens -->
            <div class="col-md-4 product-men women_two">
              <div class="product-shoe-info shoe">
                <div class="men-pro-item">
                  <div class="men-thumb-item">
                    <img src="images/port-au-prince/royal-oasis/37490725.jpg" alt="">
                    <div class="men-cart-pro">
                      <div class="inner-men-cart-pro">
                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                      </div>
                    </div>
                    <span class="product-new-top">New</span>
                  </div>
                  <div class="item-info-product" style=" height: 91px;">
                    <h4>
                      <a href="single.html">Royal Oasis </a>
                    </h4>
                    <div class="info-product-price">
                      <div class="grid_meta">
                        <div class="product_price">
                          <div class="grid-price ">
                            <span class="money ">$575.00</span>
                          </div>
                        </div>
                        <ul class="stars">
                          <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
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
                          <input type="hidden" name="shoe_item" value="Shuberry Heels">
                          <input type="hidden" name="amount" value="575.00">
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
            <div class="col-md-4 product-men women_two">
              <div class="product-shoe-info shoe">
                <div class="men-pro-item">
                  <div class="men-thumb-item">
                    <img src="images/port-au-prince/villa-therese/27796896.jpg" alt="" style="height: 154px;">
                    <div class="men-cart-pro">
                      <div class="inner-men-cart-pro">
                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                      </div>
                    </div>
                    <span class="product-new-top">New</span>
                  </div>
                  <div class="item-info-product" style="height: 94px;">
                    <h4>
                      <a href="single.html">Villa Therese</a>
                    </h4>
                    <div class="info-product-price">
                      <div class="grid_meta">
                        <div class="product_price">
                          <div class="grid-price ">
                            <span class="money ">$325.00</span>
                          </div>
                        </div>
                        <ul class="stars">
                          <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                          <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                          <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                          <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                          <li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
                        </ul>
                      </div>
                      <div class="shoe single-item hvr-outline-out">
                        <form action="#" method="post">
                          <input type="hidden" name="cmd" value="_cart">
                          <input type="hidden" name="add" value="1">
                          <input type="hidden" name="shoe_item" value="Red Bellies">
                          <input type="hidden" name="amount" value="325.00">
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
            <div class="col-md-4 product-men women_two">
              <div class="product-shoe-info shoe">
                <div class="men-pro-item">
                  <div class="men-thumb-item">
                    <img src="images/jacmel/cap-lamandou/95498782.jpg" alt="">
                    <div class="men-cart-pro">
                      <div class="inner-men-cart-pro">
                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                      </div>
                    </div>
                    <span class="product-new-top">New</span>
                  </div>
                  <div class="item-info-product" style="height: 94px;">
                    <h4>
                      <a href="single.html">Cap lamandou</a>
                    </h4>
                    <div class="info-product-price">
                      <div class="grid_meta">
                        <div class="product_price">
                          <div class="grid-price ">
                            <span class="money ">$425.00</span>
                          </div>
                        </div>
                        <ul class="stars">
                          <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
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
                          <input type="hidden" name="shoe_item" value="Catwalk Flats">
                          <input type="hidden" name="amount" value="425.00">
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
            <!-- //womens -->
            <!-- /mens -->
            <div class="col-md-4 product-men">
              <div class="product-shoe-info shoe">
                <div class="men-pro-item">
                  <div class="men-thumb-item">
                    <img src="images/cap-haitien/auberge-villa-cana/44000100.jpg" alt="">
                    <div class="men-cart-pro">
                      <div class="inner-men-cart-pro">
                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                      </div>
                    </div>
                    <span class="product-new-top">New</span>
                  </div>
                  <div class="item-info-product">
                    <h4>
                      <a href="single.html">Villa cana</a>
                    </h4>
                    <div class="info-product-price">
                      <div class="grid_meta">
                        <div class="product_price">
                          <div class="grid-price ">
                            <span class="money ">$875.00</span>
                          </div>
                        </div>
                        <ul class="stars">
                          <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
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
                          <input type="hidden" name="shoe_item" value="Running Shoes">
                          <input type="hidden" name="amount" value="875.00">
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
            <div class="col-md-4 product-men">
              <div class="product-shoe-info shoe">
                <div class="men-pro-item">
                  <div class="men-thumb-item">
                    <img src="images/fort-liberte/LeMarien-hotel/96691763.jpg" alt="">
                    <div class="men-cart-pro">
                      <div class="inner-men-cart-pro">
                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                      </div>
                    </div>
                    <span class="product-new-top">New</span>
                  </div>
                  <div class="item-info-product" style="height: 109px;">
                    <h4>
                      <a href="single.html">Le Marien hotel</a>
                    </h4>
                    <div class="info-product-price">
                      <div class="grid_meta">
                        <div class="product_price">
                          <div class="grid-price ">
                            <span class="money ">$505.00</span>
                          </div>
                        </div>
                        <ul class="stars">
                          <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
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
                          <input type="hidden" name="shoe_item" value="Sukun Casuals">
                          <input type="hidden" name="amount" value="505.00">
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
            <div class="col-md-4 product-men">
              <div class="product-shoe-info shoe">
                <div class="men-pro-item">
                  <div class="men-thumb-item">
                    <img src="images/jacmel/florida/88433615.jpg" alt="">
                    <div class="men-cart-pro">
                      <div class="inner-men-cart-pro">
                        <a href="single.html" class="link-product-add-cart">Quick View</a>
                      </div>
                    </div>
                    <span class="product-new-top">New</span>
                  </div>
                  <div class="item-info-product">
                    <h4>
                      <a href="single.html">Florida Hotel</a>
                    </h4>
                    <div class="info-product-price">
                      <div class="grid_meta">
                        <div class="product_price">
                          <div class="grid-price ">
                            <span class="money ">$635.00</span>
                          </div>
                        </div>
                        <ul class="stars">
                          <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
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
                          <input type="hidden" name="shoe_item" value="Bank Sneakers">
                          <input type="hidden" name="amount" value="635.00">
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
            <!-- //mens -->
            <div class="clearfix"></div>

          </div>

          <!-- //product-sec1 -->
          <div class="col-md-6 shop_left shp">
            <img src="images/banner4.jpg" alt="">
            <h6>21% off</h6>
          </div>
          <div class="col-md-6 shop_right shp">
            <img src="images/banner1.jpg" alt="">
            <h6>31% off</h6>
          </div>
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
  <!-- /newsletter-->
  <div class="newsletter_w3layouts_agile">
    <div class="col-sm-6 newsleft">
      <h3>Sign up for Newsletter !</h3>
    </div>
    <div class="col-sm-6 newsright">
      <form action="#" method="post">
        <input type="email" placeholder="Enter your email..." name="email" required="">
        <input type="submit" value="Submit">
      </form>
    </div>

    <div class="clearfix"></div>
  </div>
  <!-- //newsletter-->
  <!-- footer -->
<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
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