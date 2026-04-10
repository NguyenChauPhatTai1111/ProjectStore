@extends('layouts.app')
@section('content')


  <!-- Main content -->
  
  <h1 class="hidden">
    Theme Furniture - Cửa hàng nội thất
  </h1>
  <section class="awe-section-1">
    <div class="main-slider">
      <div class="home-slider " data-lg-items='1' data-md-items='1' data-sm-items='1'
      data-xs-items="1" data-margin='0' data-nav="true" data-dot="true">
        <div class="item">
          <a href="#" class="clearfix">
            <img src="template/bizweb.dktcdn.net/100/210/557/themes/801960/assets/slider_1b60e.jpg?1676014753174"
            alt="alt slider demo">
          </a>
        </div>
      </div>
    </div>
    <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
    </script>
    <script>
      $('.home-slider').slick({
        lazyLoad: 'ondemand',
        centerMode: false,
        focusOnSelect: true,
        dots: false,
        loop: false,
        dots: false,
        arrows: false,
        slidesToShow: 1

      });
    </script>
  </section>
  <section class="awe-section-2">
    <div class="widget widget-policy hidden-xs">
      <div class="container">
        <div class="widget-inner">
          <div class="row row-noGutter">
            <div class="col-md-4 col-sm-4">
              <div class="policy-item">
                <div class="media flexbox">
                  <img src="template/bizweb.dktcdn.net/100/210/557/themes/801960/assets/policy1b60e.png?1676014753174"
                  alt="MIỄN PHÍ VẬN CHUYỂN">
                </div>
                <span>
                  MIỄN PHÍ VẬN CHUYỂN
                </span>
                <p>
                  Trong 10km với mọi đơn đặt hàng
                </p>
              </div>
              <!-- /.policy -->
            </div>
            <div class="col-md-4 col-sm-4">
              <div class="policy-item">
                <div class="media flexbox">
                  <img src="template/bizweb.dktcdn.net/100/210/557/themes/801960/assets/policy2b60e.png?1676014753174"
                  alt="HOÀN TIỀN">
                </div>
                <span>
                  HOÀN TIỀN
                </span>
                <p>
                  100% trong vòng 30 ngày
                </p>
              </div>
              <!-- /.policy -->
            </div>
            <div class="col-md-4 col-sm-4">
              <div class="policy-item">
                <div class="media flexbox">
                  <img src="template/bizweb.dktcdn.net/100/210/557/themes/801960/assets/policy3b60e.png?1676014753174"
                  alt="HỖ TRỢ  24/24">
                </div>
                <span>
                  HỖ TRỢ 24/24
                </span>
                <p>
                  Gọi 19001009 bất cứ lúc nào
                </p>
              </div>
              <!-- /.policy -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="awe-section-3">
    <div class="section section-collections">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-6">
            <div class="collection-item large relative">
              <a href="bo-ban-ghe.html">
                <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                data-src="https://bizweb.dktcdn.net/100/210/557/collections/b1.jpg?v=1494066568667"
                alt="Bộ bàn ghế" title="Bộ bàn ghế" />
              </a>
              <div class="collection-info absolute">
                <h3>
                  <a href="bo-ban-ghe.html">
                    Bộ bàn ghế
                  </a>
                </h3>
                <p>
                  Những mẫu bộ bàn ghế mới nhất cho phòng
                  <br />
                  khách của bạn trong hè này
                </p>
                <a href="bo-ban-ghe.html" class="btn btn-outline margin-top-10">
                  Xem ngay
                </a>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6">
            <div class="row">
              <div class="col-xs-6 col-sm-6">
                <div class="collection-item relative">
                  <a href="ghe-tua.html">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="https://bizweb.dktcdn.net/100/210/557/collections/b2.jpg?v=1494066587617"
                    alt="Ghế tựa" title="Ghế tựa" />
                  </a>
                  <div class="collection-info absolute">
                    <h3>
                      <a href="ghe-tua.html">
                        Ghế tựa
                      </a>
                    </h3>
                    <p>
                      Những mẫu ghế tựa mới nhất
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-6">
                <div class="collection-item relative">
                  <a href="ghe-sofa.html">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="https://bizweb.dktcdn.net/100/210/557/collections/b3.jpg?v=1494066603333"
                    alt="Ghế Sofa" title="Ghế Sofa" />
                  </a>
                  <div class="collection-info absolute">
                    <h3>
                      <a href="ghe-sofa.html">
                        Ghế Sofa
                      </a>
                    </h3>
                    <p>
                      Những mẫu ghế sofa&nbsp;mới nhất
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-6">
                <div class="collection-item relative">
                  <a href="ban-ghe-go.html">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="https://bizweb.dktcdn.net/100/210/557/collections/b4.jpg?v=1494066616753"
                    alt="Bàn ghế gỗ" title="Bàn ghế gỗ" />
                  </a>
                  <div class="collection-info absolute">
                    <h3>
                      <a href="ban-ghe-go.html">
                        Bàn ghế gỗ
                      </a>
                    </h3>
                    <p>
                      Những mẫu bàn ghế mới nhất
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-xs-6 col-sm-6">
                <div class="collection-item relative">
                  <a href="ban-lam-viec.html">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="https://bizweb.dktcdn.net/100/210/557/collections/b5.jpg?v=1494066632437"
                    alt="Bàn làm việc" title="Bàn làm việc" />
                  </a>
                  <div class="collection-info absolute">
                    <h3>
                      <a href="ban-lam-viec.html">
                        Bàn làm việc
                      </a>
                    </h3>
                    <p>
                      Những mẫu bàn làm việc&nbsp;mới nhất
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="awe-section-4">
    <div class="section section_tab_product a-center products-view-grid">
      <div class="container">
        <div class="e-tabs">
          <div class="row row-noGutter">
            <div class="col-sm-12">
              <div class="content">
                <div>
                  <h2>
                    Sản phẩm mới
                  </h2>
                  <ul class="tabs tabs-title clearfix">
                    <li class="tab-link" data-tab="tab-1">
                      <span>
                        Mới nhất
                      </span>
                    </li>
                    <li class="tab-link" data-tab="tab-2">
                      <span>
                        Nổi bật
                      </span>
                    </li>
                    <li class="tab-link" data-tab="tab-3">
                      <span>
                        Bán chạy
                      </span>
                    </li>
                  </ul>
                  <div id="tab-1" class="tab-content">
                    <div class="products row row-gutter-14">
                      <div class="col-xs-6 col-sm-4 col-lg-3">
                        <div class="product-box">
                          <div class="product-thumbnail">
                            <a href="den-trang-tri-vach-netviet-nv-016.html" title="Đèn trang trí vách Netviet NV 016">
                              <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                              data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/39.jpg?v=1493897732810"
                              alt="Đèn trang trí vách Netviet NV 016">
                            </a>
                            <div class="product-action clearfix">
                              <div class="action-item">
                                <a data-toggle="tooltip" title="Xem nhanh" href="den-trang-tri-vach-netviet-nv-016.html"
                                data-handle="den-trang-tri-vach-netviet-nv-016" class="btn-square btn_view btn  right-to quick-view">
                                  <i class="fab fa-searchengin">
                                  </i>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-info a-center">
                            <h3 class="product-name">
                              <a href="den-trang-tri-vach-netviet-nv-016.html" title="Đèn trang trí vách Netviet NV 016">
                                Đèn trang trí vách Netviet NV 016
                              </a>
                            </h3>
                            <div class="price-box clearfix">
                              <div class="special-price">
                                <span class="price product-price">
                                  690.000₫
                                </span>
                              </div>
                            </div>
                          </div>
                          <div>
                            <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                            class="variants a-center form-nut-grid" data-id="product-actions-6665253"
                            enctype="multipart/form-data">
                              <div class="action-item">
                                <input type="hidden" name="variantId" value="10593291" />
                                <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                                  <i class="fas fa-plus">
                                  </i>
                                  Mua ngay
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-6 col-sm-4 col-lg-3">
                        <div class="product-box">
                          <div class="product-thumbnail">
                            <a href="den-trang-tri-vach-cao-cap-pha-le-netviet-nv-9005-2.html" title="Đèn trang trí vách cao cấp pha lê Netviet NV 9005/2">
                              <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                              data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/37.jpg?v=1493897732273"
                              alt="Đèn trang trí vách cao cấp pha lê Netviet NV 9005/2">
                            </a>
                            <div class="product-action clearfix">
                              <div class="action-item">
                                <a data-toggle="tooltip" title="Xem nhanh" href="den-trang-tri-vach-cao-cap-pha-le-netviet-nv-9005-2.html"
                                data-handle="den-trang-tri-vach-cao-cap-pha-le-netviet-nv-9005-2" class="btn-square btn_view btn  right-to quick-view">
                                  <i class="fab fa-searchengin">
                                  </i>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-info a-center">
                            <h3 class="product-name">
                              <a href="den-trang-tri-vach-cao-cap-pha-le-netviet-nv-9005-2.html" title="Đèn trang trí vách cao cấp pha lê Netviet NV 9005/2">
                                Đèn trang trí vách cao cấp pha lê Netviet NV 9005/2
                              </a>
                            </h3>
                            <div class="price-box clearfix">
                              <div class="special-price">
                                <span class="price product-price">
                                  970.000₫
                                </span>
                              </div>
                            </div>
                          </div>
                          <div>
                            <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                            class="variants a-center form-nut-grid" data-id="product-actions-6665252"
                            enctype="multipart/form-data">
                              <div class="action-item">
                                <input type="hidden" name="variantId" value="10593289" />
                                <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                                  <i class="fas fa-plus">
                                  </i>
                                  Mua ngay
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-6 col-sm-4 col-lg-3">
                        <div class="product-box">
                          <div class="product-thumbnail">
                            <a href="den-trang-tri-vach-cao-cap-netviet-nv-8825.html" title="Đèn trang trí vách cao cấp NETVIET NV 8825">
                              <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                              data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/82dd513b5ca0b4e058c5f74ac5700b.jpg?v=1493897731777"
                              alt="Đèn trang trí vách cao cấp NETVIET NV 8825">
                            </a>
                            <div class="product-action clearfix">
                              <div class="action-item">
                                <a data-toggle="tooltip" title="Xem nhanh" href="den-trang-tri-vach-cao-cap-netviet-nv-8825.html"
                                data-handle="den-trang-tri-vach-cao-cap-netviet-nv-8825" class="btn-square btn_view btn  right-to quick-view">
                                  <i class="fab fa-searchengin">
                                  </i>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-info a-center">
                            <h3 class="product-name">
                              <a href="den-trang-tri-vach-cao-cap-netviet-nv-8825.html" title="Đèn trang trí vách cao cấp NETVIET NV 8825">
                                Đèn trang trí vách cao cấp NETVIET NV 8825
                              </a>
                            </h3>
                            <div class="price-box clearfix">
                              <div class="special-price">
                                <span class="price product-price">
                                  780.000₫
                                </span>
                              </div>
                            </div>
                          </div>
                          <div>
                            <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                            class="variants a-center form-nut-grid" data-id="product-actions-6665251"
                            enctype="multipart/form-data">
                              <div class="action-item">
                                <input type="hidden" name="variantId" value="10593288" />
                                <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                                  <i class="fas fa-plus">
                                  </i>
                                  Mua ngay
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-6 col-sm-4 col-lg-3">
                        <div class="product-box">
                          <div class="product-thumbnail">
                            <a href="den-trang-tri-vach-netviet-nv-8205-1.html" title="Đèn trang trí vách Netviet NV 8205/1">
                              <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                              data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/9.jpg?v=1493897731053"
                              alt="Đèn trang trí vách Netviet NV 8205/1">
                            </a>
                            <div class="product-action clearfix">
                              <div class="action-item">
                                <a data-toggle="tooltip" title="Xem nhanh" href="den-trang-tri-vach-netviet-nv-8205-1.html"
                                data-handle="den-trang-tri-vach-netviet-nv-8205-1" class="btn-square btn_view btn  right-to quick-view">
                                  <i class="fab fa-searchengin">
                                  </i>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-info a-center">
                            <h3 class="product-name">
                              <a href="den-trang-tri-vach-netviet-nv-8205-1.html" title="Đèn trang trí vách Netviet NV 8205/1">
                                Đèn trang trí vách Netviet NV 8205/1
                              </a>
                            </h3>
                            <div class="price-box clearfix">
                              <div class="special-price">
                                <span class="price product-price">
                                  590.000₫
                                </span>
                              </div>
                            </div>
                          </div>
                          <div>
                            <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                            class="variants a-center form-nut-grid" data-id="product-actions-6665250"
                            enctype="multipart/form-data">
                              <div class="action-item">
                                <input type="hidden" name="variantId" value="10593287" />
                                <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                                  <i class="fas fa-plus">
                                  </i>
                                  Mua ngay
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-6 col-sm-4 col-lg-3">
                        <div class="product-box">
                          <div class="product-thumbnail">
                            <a href="den-tuong-composite-an-phuoc-b948.html" title="Đèn tường Composite An Phước B948">
                              <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                              data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/6.jpg?v=1493897730310"
                              alt="Đèn tường Composite An Phước B948">
                            </a>
                            <div class="product-action clearfix">
                              <div class="action-item">
                                <a data-toggle="tooltip" title="Xem nhanh" href="den-tuong-composite-an-phuoc-b948.html"
                                data-handle="den-tuong-composite-an-phuoc-b948" class="btn-square btn_view btn  right-to quick-view">
                                  <i class="fab fa-searchengin">
                                  </i>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-info a-center">
                            <h3 class="product-name">
                              <a href="den-tuong-composite-an-phuoc-b948.html" title="Đèn tường Composite An Phước B948">
                                Đèn tường Composite An Phước B948
                              </a>
                            </h3>
                            <div class="price-box clearfix">
                              <div class="special-price">
                                <span class="price product-price">
                                  10.000.000₫
                                </span>
                              </div>
                            </div>
                          </div>
                          <div>
                            <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                            class="variants a-center form-nut-grid" data-id="product-actions-6665249"
                            enctype="multipart/form-data">
                              <div class="action-item">
                                <input type="hidden" name="variantId" value="10593286" />
                                <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                                  <i class="fas fa-plus">
                                  </i>
                                  Mua ngay
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-6 col-sm-4 col-lg-3">
                        <div class="product-box">
                          <div class="product-thumbnail">
                            <a href="den-treo-pha-le-green-light.html" title="Đèn treo pha lê green light">
                              <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                              data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/4.jpg?v=1493897729767"
                              alt="Đèn treo pha lê green light">
                            </a>
                            <div class="product-action clearfix">
                              <div class="action-item">
                                <a data-toggle="tooltip" title="Xem nhanh" href="den-treo-pha-le-green-light.html"
                                data-handle="den-treo-pha-le-green-light" class="btn-square btn_view btn  right-to quick-view">
                                  <i class="fab fa-searchengin">
                                  </i>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-info a-center">
                            <h3 class="product-name">
                              <a href="den-treo-pha-le-green-light.html" title="Đèn treo pha lê green light">
                                Đèn treo pha lê green light
                              </a>
                            </h3>
                            <div class="price-box clearfix">
                              <div class="special-price">
                                <span class="price product-price">
                                  150.000₫
                                </span>
                              </div>
                            </div>
                          </div>
                          <div>
                            <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                            class="variants a-center form-nut-grid" data-id="product-actions-6665248"
                            enctype="multipart/form-data">
                              <div class="action-item">
                                <input type="hidden" name="variantId" value="10593285" />
                                <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                                  <i class="fas fa-plus">
                                  </i>
                                  Mua ngay
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-6 col-sm-4 col-lg-3">
                        <div class="product-box">
                          <div class="product-thumbnail">
                            <a href="giuong-bmy.html" title="Giường BMY">
                              <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                              data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/elmwood88591626222zoomf5a07d81.jpg?v=1493897729220"
                              alt="Giường BMY">
                            </a>
                            <div class="product-action clearfix">
                              <div class="action-item">
                                <a data-toggle="tooltip" title="Xem nhanh" href="giuong-bmy.html" data-handle="giuong-bmy"
                                class="btn-square btn_view btn  right-to quick-view">
                                  <i class="fab fa-searchengin">
                                  </i>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-info a-center">
                            <h3 class="product-name">
                              <a href="giuong-bmy.html" title="Giường BMY">
                                Giường BMY
                              </a>
                            </h3>
                            <div class="price-box clearfix">
                              <div class="special-price">
                                <span class="price product-price">
                                  14.490.000₫
                                </span>
                              </div>
                            </div>
                          </div>
                          <div>
                            <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                            class="variants a-center form-nut-grid" data-id="product-actions-6665247"
                            enctype="multipart/form-data">
                              <div class="action-item">
                                <input class="hidden" type="hidden" name="variantId" value="10806291"
                                />
                                <button class="btn btn-white btn-cart btn  left-to" title="Chọn sản phẩm"
                                type="button" onclick="window.location.href='giuong-bmy.html'">
                                  <i class="fas fa-plus">
                                  </i>
                                  Tùy chọn
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-6 col-sm-4 col-lg-3">
                        <div class="product-box">
                          <div class="product-thumbnail">
                            <a href="giuong-ngu-gn-016.html" title="Giường ngủ GN 016">
                              <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                              data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/tulip89482122121zoom.jpg?v=1493897728470"
                              alt="Giường ngủ GN 016">
                            </a>
                            <div class="product-action clearfix">
                              <div class="action-item">
                                <a data-toggle="tooltip" title="Xem nhanh" href="giuong-ngu-gn-016.html"
                                data-handle="giuong-ngu-gn-016" class="btn-square btn_view btn  right-to quick-view">
                                  <i class="fab fa-searchengin">
                                  </i>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-info a-center">
                            <h3 class="product-name">
                              <a href="giuong-ngu-gn-016.html" title="Giường ngủ GN 016">
                                Giường ngủ GN 016
                              </a>
                            </h3>
                            <div class="price-box clearfix">
                              <div class="special-price">
                                <span class="price product-price">
                                  9.800.000₫
                                </span>
                              </div>
                            </div>
                          </div>
                          <div>
                            <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                            class="variants a-center form-nut-grid" data-id="product-actions-6665246"
                            enctype="multipart/form-data">
                              <div class="action-item">
                                <input type="hidden" name="variantId" value="10593283" />
                                <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                                  <i class="fas fa-plus">
                                  </i>
                                  Mua ngay
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.products -->
                  </div>
                  <div id="tab-2" class="tab-content">
                    <div class="products row row-gutter-14">
                      <div class="col-xs-6 col-sm-4 col-lg-3">
                        <div class="product-box">
                          <div class="product-thumbnail">
                            <a href="ke-sach-5-tang-ubl.html" title="Kệ sách 5 tầng EWQ">
                              <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                              data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/indie03582230321zoom.jpg?v=1493897742273"
                              alt="Kệ sách 5 tầng EWQ">
                            </a>
                            <div class="product-action clearfix">
                              <div class="action-item">
                                <a data-toggle="tooltip" title="Xem nhanh" href="ke-sach-5-tang-ubl.html"
                                data-handle="ke-sach-5-tang-ubl" class="btn-square btn_view btn  right-to quick-view">
                                  <i class="fab fa-searchengin">
                                  </i>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-info a-center">
                            <h3 class="product-name">
                              <a href="ke-sach-5-tang-ubl.html" title="Kệ sách 5 tầng EWQ">
                                Kệ sách 5 tầng EWQ
                              </a>
                            </h3>
                            <div class="price-box clearfix">
                              <div class="special-price">
                                <span class="price product-price">
                                  567.000₫
                                </span>
                              </div>
                            </div>
                          </div>
                          <div>
                            <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                            class="variants a-center form-nut-grid" data-id="product-actions-6665264"
                            enctype="multipart/form-data">
                              <div class="action-item">
                                <input type="hidden" name="variantId" value="10593302" />
                                <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                                  <i class="fas fa-plus">
                                  </i>
                                  Mua ngay
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-6 col-sm-4 col-lg-3">
                        <div class="product-box">
                          <div class="product-thumbnail">
                            <a href="ke-sach-big-one-vietnam-spr-1690prtdk.html" title="Kệ sách BIG ONE VIETNAM SPR-1690PRTDK">
                              <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                              data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/indie07797920321zoom.jpg?v=1493897743077"
                              alt="Kệ sách BIG ONE VIETNAM SPR-1690PRTDK">
                            </a>
                            <div class="product-action clearfix">
                              <div class="action-item">
                                <a data-toggle="tooltip" title="Xem nhanh" href="ke-sach-big-one-vietnam-spr-1690prtdk.html"
                                data-handle="ke-sach-big-one-vietnam-spr-1690prtdk" class="btn-square btn_view btn  right-to quick-view">
                                  <i class="fab fa-searchengin">
                                  </i>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-info a-center">
                            <h3 class="product-name">
                              <a href="ke-sach-big-one-vietnam-spr-1690prtdk.html" title="Kệ sách BIG ONE VIETNAM SPR-1690PRTDK">
                                Kệ sách BIG ONE VIETNAM SPR-1690PRTDK
                              </a>
                            </h3>
                            <div class="price-box clearfix">
                              <div class="special-price">
                                <span class="price product-price">
                                  645.000₫
                                </span>
                              </div>
                            </div>
                          </div>
                          <div>
                            <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                            class="variants a-center form-nut-grid" data-id="product-actions-6665265"
                            enctype="multipart/form-data">
                              <div class="action-item">
                                <input type="hidden" name="variantId" value="10593303" />
                                <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                                  <i class="fas fa-plus">
                                  </i>
                                  Mua ngay
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-6 col-sm-4 col-lg-3">
                        <div class="product-box">
                          <div class="product-thumbnail">
                            <a href="tu-quan-ao-big-one-vietnam-wvr-1855l.html" title="Tủ quần áo BIG ONE VIETNAM WVR-1855L">
                              <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                              data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/alexdaisy04517243221zoom.jpg?v=1493897743913"
                              alt="Tủ quần áo BIG ONE VIETNAM WVR-1855L">
                            </a>
                            <div class="product-action clearfix">
                              <div class="action-item">
                                <a data-toggle="tooltip" title="Xem nhanh" href="tu-quan-ao-big-one-vietnam-wvr-1855l.html"
                                data-handle="tu-quan-ao-big-one-vietnam-wvr-1855l" class="btn-square btn_view btn  right-to quick-view">
                                  <i class="fab fa-searchengin">
                                  </i>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-info a-center">
                            <h3 class="product-name">
                              <a href="tu-quan-ao-big-one-vietnam-wvr-1855l.html" title="Tủ quần áo BIG ONE VIETNAM WVR-1855L">
                                Tủ quần áo BIG ONE VIETNAM WVR-1855L
                              </a>
                            </h3>
                            <div class="price-box clearfix">
                              <div class="special-price">
                                <span class="price product-price">
                                  4.000.000₫
                                </span>
                              </div>
                            </div>
                          </div>
                          <div>
                            <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                            class="variants a-center form-nut-grid" data-id="product-actions-6665266"
                            enctype="multipart/form-data">
                              <div class="action-item">
                                <input type="hidden" name="variantId" value="10593304" />
                                <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                                  <i class="fas fa-plus">
                                  </i>
                                  Mua ngay
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-6 col-sm-4 col-lg-3">
                        <div class="product-box">
                          <div class="product-thumbnail">
                            <a href="tu-ao-b1241k.html" title="Tủ áo B1241K">
                              <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                              data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/alexdaisy18858943221zoom.jpg?v=1493897744660"
                              alt="Tủ áo B1241K">
                            </a>
                            <div class="product-action clearfix">
                              <div class="action-item">
                                <a data-toggle="tooltip" title="Xem nhanh" href="tu-ao-b1241k.html" data-handle="tu-ao-b1241k"
                                class="btn-square btn_view btn  right-to quick-view">
                                  <i class="fab fa-searchengin">
                                  </i>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-info a-center">
                            <h3 class="product-name">
                              <a href="tu-ao-b1241k.html" title="Tủ áo B1241K">
                                Tủ áo B1241K
                              </a>
                            </h3>
                            <div class="price-box clearfix">
                              <div class="special-price">
                                <span class="price product-price">
                                  5.400.000₫
                                </span>
                              </div>
                            </div>
                          </div>
                          <div>
                            <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                            class="variants a-center form-nut-grid" data-id="product-actions-6665267"
                            enctype="multipart/form-data">
                              <div class="action-item">
                                <input type="hidden" name="variantId" value="10593305" />
                                <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                                  <i class="fas fa-plus">
                                  </i>
                                  Mua ngay
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-6 col-sm-4 col-lg-3">
                        <div class="product-box">
                          <div class="product-thumbnail">
                            <a href="tu-ao-bellasofa-b1239.html" title="Tủ Áo Bellasofa B1239">
                              <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                              data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/bigsmile30816024221zoom.jpg?v=1493897745420"
                              alt="Tủ Áo Bellasofa B1239">
                            </a>
                            <div class="product-action clearfix">
                              <div class="action-item">
                                <a data-toggle="tooltip" title="Xem nhanh" href="tu-ao-bellasofa-b1239.html"
                                data-handle="tu-ao-bellasofa-b1239" class="btn-square btn_view btn  right-to quick-view">
                                  <i class="fab fa-searchengin">
                                  </i>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-info a-center">
                            <h3 class="product-name">
                              <a href="tu-ao-bellasofa-b1239.html" title="Tủ Áo Bellasofa B1239">
                                Tủ Áo Bellasofa B1239
                              </a>
                            </h3>
                            <div class="price-box clearfix">
                              <div class="special-price">
                                <span class="price product-price">
                                  3.790.000₫
                                </span>
                              </div>
                            </div>
                          </div>
                          <div>
                            <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                            class="variants a-center form-nut-grid" data-id="product-actions-6665268"
                            enctype="multipart/form-data">
                              <div class="action-item">
                                <input type="hidden" name="variantId" value="10593306" />
                                <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                                  <i class="fas fa-plus">
                                  </i>
                                  Mua ngay
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-6 col-sm-4 col-lg-3">
                        <div class="product-box">
                          <div class="product-thumbnail">
                            <a href="tu-ao-b1238.html" title="Tủ áo B1238">
                              <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                              data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/bigsmile30845024221zoom.jpg?v=1493897746203"
                              alt="Tủ áo B1238">
                            </a>
                            <div class="product-action clearfix">
                              <div class="action-item">
                                <a data-toggle="tooltip" title="Xem nhanh" href="tu-ao-b1238.html" data-handle="tu-ao-b1238"
                                class="btn-square btn_view btn  right-to quick-view">
                                  <i class="fab fa-searchengin">
                                  </i>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-info a-center">
                            <h3 class="product-name">
                              <a href="tu-ao-b1238.html" title="Tủ áo B1238">
                                Tủ áo B1238
                              </a>
                            </h3>
                            <div class="price-box clearfix">
                              <div class="special-price">
                                <span class="price product-price">
                                  5.100.000₫
                                </span>
                              </div>
                            </div>
                          </div>
                          <div>
                            <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                            class="variants a-center form-nut-grid" data-id="product-actions-6665269"
                            enctype="multipart/form-data">
                              <div class="action-item">
                                <input type="hidden" name="variantId" value="10593307" />
                                <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                                  <i class="fas fa-plus">
                                  </i>
                                  Mua ngay
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-6 col-sm-4 col-lg-3">
                        <div class="product-box">
                          <div class="product-thumbnail">
                            <a href="tu-ao-hut.html" title="Tủ áo HUT">
                              <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                              data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/bigsmile30874024221zoom.jpg?v=1493897747000"
                              alt="Tủ áo HUT">
                            </a>
                            <div class="product-action clearfix">
                              <div class="action-item">
                                <a data-toggle="tooltip" title="Xem nhanh" href="tu-ao-hut.html" data-handle="tu-ao-hut"
                                class="btn-square btn_view btn  right-to quick-view">
                                  <i class="fab fa-searchengin">
                                  </i>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-info a-center">
                            <h3 class="product-name">
                              <a href="tu-ao-hut.html" title="Tủ áo HUT">
                                Tủ áo HUT
                              </a>
                            </h3>
                            <div class="price-box clearfix">
                              <div class="special-price">
                                <span class="price product-price">
                                  8.000.000₫
                                </span>
                              </div>
                            </div>
                          </div>
                          <div>
                            <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                            class="variants a-center form-nut-grid" data-id="product-actions-6665270"
                            enctype="multipart/form-data">
                              <div class="action-item">
                                <input type="hidden" name="variantId" value="10593308" />
                                <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                                  <i class="fas fa-plus">
                                  </i>
                                  Mua ngay
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-6 col-sm-4 col-lg-3">
                        <div class="product-box">
                          <div class="product-thumbnail">
                            <a href="tu-qtr-01.html" title="Tủ QTR 01">
                              <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                              data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/bigsmile31702024221zoom.jpg?v=1493897747867"
                              alt="Tủ QTR 01">
                            </a>
                            <div class="product-action clearfix">
                              <div class="action-item">
                                <a data-toggle="tooltip" title="Xem nhanh" href="tu-qtr-01.html" data-handle="tu-qtr-01"
                                class="btn-square btn_view btn  right-to quick-view">
                                  <i class="fab fa-searchengin">
                                  </i>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-info a-center">
                            <h3 class="product-name">
                              <a href="tu-qtr-01.html" title="Tủ QTR 01">
                                Tủ QTR 01
                              </a>
                            </h3>
                            <div class="price-box clearfix">
                              <div class="special-price">
                                <span class="price product-price">
                                  5.400.000₫
                                </span>
                              </div>
                            </div>
                          </div>
                          <div>
                            <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                            class="variants a-center form-nut-grid" data-id="product-actions-6665271"
                            enctype="multipart/form-data">
                              <div class="action-item">
                                <input type="hidden" name="variantId" value="10593309" />
                                <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                                  <i class="fas fa-plus">
                                  </i>
                                  Mua ngay
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.products -->
                  </div>
                  <div id="tab-3" class="tab-content">
                    <div class="products row row-gutter-14">
                      <div class="col-xs-6 col-sm-4 col-lg-3">
                        <div class="product-box">
                          <div class="product-thumbnail">
                            <a href="den-trang-tri-vach-netviet-nv-016.html" title="Đèn trang trí vách Netviet NV 016">
                              <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                              data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/39.jpg?v=1493897732810"
                              alt="Đèn trang trí vách Netviet NV 016">
                            </a>
                            <div class="product-action clearfix">
                              <div class="action-item">
                                <a data-toggle="tooltip" title="Xem nhanh" href="den-trang-tri-vach-netviet-nv-016.html"
                                data-handle="den-trang-tri-vach-netviet-nv-016" class="btn-square btn_view btn  right-to quick-view">
                                  <i class="fab fa-searchengin">
                                  </i>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-info a-center">
                            <h3 class="product-name">
                              <a href="den-trang-tri-vach-netviet-nv-016.html" title="Đèn trang trí vách Netviet NV 016">
                                Đèn trang trí vách Netviet NV 016
                              </a>
                            </h3>
                            <div class="price-box clearfix">
                              <div class="special-price">
                                <span class="price product-price">
                                  690.000₫
                                </span>
                              </div>
                            </div>
                          </div>
                          <div>
                            <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                            class="variants a-center form-nut-grid" data-id="product-actions-6665253"
                            enctype="multipart/form-data">
                              <div class="action-item">
                                <input type="hidden" name="variantId" value="10593291" />
                                <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                                  <i class="fas fa-plus">
                                  </i>
                                  Mua ngay
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-6 col-sm-4 col-lg-3">
                        <div class="product-box">
                          <div class="product-thumbnail">
                            <a href="den-trang-tri-vach-cao-cap-pha-le-netviet-nv-9005-2.html" title="Đèn trang trí vách cao cấp pha lê Netviet NV 9005/2">
                              <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                              data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/37.jpg?v=1493897732273"
                              alt="Đèn trang trí vách cao cấp pha lê Netviet NV 9005/2">
                            </a>
                            <div class="product-action clearfix">
                              <div class="action-item">
                                <a data-toggle="tooltip" title="Xem nhanh" href="den-trang-tri-vach-cao-cap-pha-le-netviet-nv-9005-2.html"
                                data-handle="den-trang-tri-vach-cao-cap-pha-le-netviet-nv-9005-2" class="btn-square btn_view btn  right-to quick-view">
                                  <i class="fab fa-searchengin">
                                  </i>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-info a-center">
                            <h3 class="product-name">
                              <a href="den-trang-tri-vach-cao-cap-pha-le-netviet-nv-9005-2.html" title="Đèn trang trí vách cao cấp pha lê Netviet NV 9005/2">
                                Đèn trang trí vách cao cấp pha lê Netviet NV 9005/2
                              </a>
                            </h3>
                            <div class="price-box clearfix">
                              <div class="special-price">
                                <span class="price product-price">
                                  970.000₫
                                </span>
                              </div>
                            </div>
                          </div>
                          <div>
                            <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                            class="variants a-center form-nut-grid" data-id="product-actions-6665252"
                            enctype="multipart/form-data">
                              <div class="action-item">
                                <input type="hidden" name="variantId" value="10593289" />
                                <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                                  <i class="fas fa-plus">
                                  </i>
                                  Mua ngay
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-6 col-sm-4 col-lg-3">
                        <div class="product-box">
                          <div class="product-thumbnail">
                            <a href="den-trang-tri-vach-cao-cap-netviet-nv-8825.html" title="Đèn trang trí vách cao cấp NETVIET NV 8825">
                              <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                              data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/82dd513b5ca0b4e058c5f74ac5700b.jpg?v=1493897731777"
                              alt="Đèn trang trí vách cao cấp NETVIET NV 8825">
                            </a>
                            <div class="product-action clearfix">
                              <div class="action-item">
                                <a data-toggle="tooltip" title="Xem nhanh" href="den-trang-tri-vach-cao-cap-netviet-nv-8825.html"
                                data-handle="den-trang-tri-vach-cao-cap-netviet-nv-8825" class="btn-square btn_view btn  right-to quick-view">
                                  <i class="fab fa-searchengin">
                                  </i>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-info a-center">
                            <h3 class="product-name">
                              <a href="den-trang-tri-vach-cao-cap-netviet-nv-8825.html" title="Đèn trang trí vách cao cấp NETVIET NV 8825">
                                Đèn trang trí vách cao cấp NETVIET NV 8825
                              </a>
                            </h3>
                            <div class="price-box clearfix">
                              <div class="special-price">
                                <span class="price product-price">
                                  780.000₫
                                </span>
                              </div>
                            </div>
                          </div>
                          <div>
                            <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                            class="variants a-center form-nut-grid" data-id="product-actions-6665251"
                            enctype="multipart/form-data">
                              <div class="action-item">
                                <input type="hidden" name="variantId" value="10593288" />
                                <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                                  <i class="fas fa-plus">
                                  </i>
                                  Mua ngay
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-6 col-sm-4 col-lg-3">
                        <div class="product-box">
                          <div class="product-thumbnail">
                            <a href="den-trang-tri-vach-netviet-nv-8205-1.html" title="Đèn trang trí vách Netviet NV 8205/1">
                              <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                              data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/9.jpg?v=1493897731053"
                              alt="Đèn trang trí vách Netviet NV 8205/1">
                            </a>
                            <div class="product-action clearfix">
                              <div class="action-item">
                                <a data-toggle="tooltip" title="Xem nhanh" href="den-trang-tri-vach-netviet-nv-8205-1.html"
                                data-handle="den-trang-tri-vach-netviet-nv-8205-1" class="btn-square btn_view btn  right-to quick-view">
                                  <i class="fab fa-searchengin">
                                  </i>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-info a-center">
                            <h3 class="product-name">
                              <a href="den-trang-tri-vach-netviet-nv-8205-1.html" title="Đèn trang trí vách Netviet NV 8205/1">
                                Đèn trang trí vách Netviet NV 8205/1
                              </a>
                            </h3>
                            <div class="price-box clearfix">
                              <div class="special-price">
                                <span class="price product-price">
                                  590.000₫
                                </span>
                              </div>
                            </div>
                          </div>
                          <div>
                            <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                            class="variants a-center form-nut-grid" data-id="product-actions-6665250"
                            enctype="multipart/form-data">
                              <div class="action-item">
                                <input type="hidden" name="variantId" value="10593287" />
                                <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                                  <i class="fas fa-plus">
                                  </i>
                                  Mua ngay
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-6 col-sm-4 col-lg-3">
                        <div class="product-box">
                          <div class="product-thumbnail">
                            <a href="den-tuong-composite-an-phuoc-b948.html" title="Đèn tường Composite An Phước B948">
                              <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                              data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/6.jpg?v=1493897730310"
                              alt="Đèn tường Composite An Phước B948">
                            </a>
                            <div class="product-action clearfix">
                              <div class="action-item">
                                <a data-toggle="tooltip" title="Xem nhanh" href="den-tuong-composite-an-phuoc-b948.html"
                                data-handle="den-tuong-composite-an-phuoc-b948" class="btn-square btn_view btn  right-to quick-view">
                                  <i class="fab fa-searchengin">
                                  </i>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-info a-center">
                            <h3 class="product-name">
                              <a href="den-tuong-composite-an-phuoc-b948.html" title="Đèn tường Composite An Phước B948">
                                Đèn tường Composite An Phước B948
                              </a>
                            </h3>
                            <div class="price-box clearfix">
                              <div class="special-price">
                                <span class="price product-price">
                                  10.000.000₫
                                </span>
                              </div>
                            </div>
                          </div>
                          <div>
                            <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                            class="variants a-center form-nut-grid" data-id="product-actions-6665249"
                            enctype="multipart/form-data">
                              <div class="action-item">
                                <input type="hidden" name="variantId" value="10593286" />
                                <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                                  <i class="fas fa-plus">
                                  </i>
                                  Mua ngay
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-6 col-sm-4 col-lg-3">
                        <div class="product-box">
                          <div class="product-thumbnail">
                            <a href="den-treo-pha-le-green-light.html" title="Đèn treo pha lê green light">
                              <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                              data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/4.jpg?v=1493897729767"
                              alt="Đèn treo pha lê green light">
                            </a>
                            <div class="product-action clearfix">
                              <div class="action-item">
                                <a data-toggle="tooltip" title="Xem nhanh" href="den-treo-pha-le-green-light.html"
                                data-handle="den-treo-pha-le-green-light" class="btn-square btn_view btn  right-to quick-view">
                                  <i class="fab fa-searchengin">
                                  </i>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-info a-center">
                            <h3 class="product-name">
                              <a href="den-treo-pha-le-green-light.html" title="Đèn treo pha lê green light">
                                Đèn treo pha lê green light
                              </a>
                            </h3>
                            <div class="price-box clearfix">
                              <div class="special-price">
                                <span class="price product-price">
                                  150.000₫
                                </span>
                              </div>
                            </div>
                          </div>
                          <div>
                            <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                            class="variants a-center form-nut-grid" data-id="product-actions-6665248"
                            enctype="multipart/form-data">
                              <div class="action-item">
                                <input type="hidden" name="variantId" value="10593285" />
                                <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                                  <i class="fas fa-plus">
                                  </i>
                                  Mua ngay
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-6 col-sm-4 col-lg-3">
                        <div class="product-box">
                          <div class="product-thumbnail">
                            <a href="giuong-bmy.html" title="Giường BMY">
                              <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                              data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/elmwood88591626222zoomf5a07d81.jpg?v=1493897729220"
                              alt="Giường BMY">
                            </a>
                            <div class="product-action clearfix">
                              <div class="action-item">
                                <a data-toggle="tooltip" title="Xem nhanh" href="giuong-bmy.html" data-handle="giuong-bmy"
                                class="btn-square btn_view btn  right-to quick-view">
                                  <i class="fab fa-searchengin">
                                  </i>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-info a-center">
                            <h3 class="product-name">
                              <a href="giuong-bmy.html" title="Giường BMY">
                                Giường BMY
                              </a>
                            </h3>
                            <div class="price-box clearfix">
                              <div class="special-price">
                                <span class="price product-price">
                                  14.490.000₫
                                </span>
                              </div>
                            </div>
                          </div>
                          <div>
                            <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                            class="variants a-center form-nut-grid" data-id="product-actions-6665247"
                            enctype="multipart/form-data">
                              <div class="action-item">
                                <input class="hidden" type="hidden" name="variantId" value="10806291"
                                />
                                <button class="btn btn-white btn-cart btn  left-to" title="Chọn sản phẩm"
                                type="button" onclick="window.location.href='giuong-bmy.html'">
                                  <i class="fas fa-plus">
                                  </i>
                                  Tùy chọn
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-6 col-sm-4 col-lg-3">
                        <div class="product-box">
                          <div class="product-thumbnail">
                            <a href="giuong-ngu-gn-016.html" title="Giường ngủ GN 016">
                              <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                              data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/tulip89482122121zoom.jpg?v=1493897728470"
                              alt="Giường ngủ GN 016">
                            </a>
                            <div class="product-action clearfix">
                              <div class="action-item">
                                <a data-toggle="tooltip" title="Xem nhanh" href="giuong-ngu-gn-016.html"
                                data-handle="giuong-ngu-gn-016" class="btn-square btn_view btn  right-to quick-view">
                                  <i class="fab fa-searchengin">
                                  </i>
                                </a>
                              </div>
                            </div>
                          </div>
                          <div class="product-info a-center">
                            <h3 class="product-name">
                              <a href="giuong-ngu-gn-016.html" title="Giường ngủ GN 016">
                                Giường ngủ GN 016
                              </a>
                            </h3>
                            <div class="price-box clearfix">
                              <div class="special-price">
                                <span class="price product-price">
                                  9.800.000₫
                                </span>
                              </div>
                            </div>
                          </div>
                          <div>
                            <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                            class="variants a-center form-nut-grid" data-id="product-actions-6665246"
                            enctype="multipart/form-data">
                              <div class="action-item">
                                <input type="hidden" name="variantId" value="10593283" />
                                <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                                  <i class="fas fa-plus">
                                  </i>
                                  Mua ngay
                                </button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.products -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="awe-section-5">
    <div class="section section-deal products-view-grid">
      <div class="container">
        <div class="section-title a-center">
          <h2>
            Ghế sofa
          </h2>
          <p>
            Những mẫu bàn ghế mới nhất 2018
          </p>
        </div>
        <div class="section-content">
          <div class="products products-view-grid  slick_col1" data-md-items="4"
          data-sm-items="3" data-xs-items="2" data-margin="30" data-nav="true">
            <div class="item">
              <div class="product-box">
                <div class="product-thumbnail">
                  <a href="ban-cafe-tron.html" title="Bàn tròn DKY">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/livingexpress57588224121zoom.jpg?v=1493897712413"
                    alt="Bàn tròn DKY">
                  </a>
                  <div class="product-action clearfix">
                    <div class="action-item">
                      <a data-toggle="tooltip" title="Xem nhanh" href="ban-cafe-tron.html" data-handle="ban-cafe-tron"
                      class="btn-square btn_view btn  right-to quick-view">
                        <i class="fab fa-searchengin">
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-info a-center">
                  <h3 class="product-name">
                    <a href="ban-cafe-tron.html" title="Bàn tròn DKY">
                      Bàn tròn DKY
                    </a>
                  </h3>
                  <div class="price-box clearfix">
                    <div class="special-price">
                      <span class="price product-price">
                        3.800.000₫
                      </span>
                    </div>
                  </div>
                </div>
                <div>
                  <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                  class="variants a-center form-nut-grid" data-id="product-actions-6665228"
                  enctype="multipart/form-data">
                    <div class="action-item">
                      <input type="hidden" name="variantId" value="10593265" />
                      <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                        <i class="fas fa-plus">
                        </i>
                        Mua ngay
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-box">
                <div class="product-thumbnail">
                  <a href="ban-cafe-vuong-kinh.html" title="Bàn vuông kính">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/forzza62211640121zoom.jpg?v=1493897711627"
                    alt="Bàn vuông kính">
                  </a>
                  <div class="product-action clearfix">
                    <div class="action-item">
                      <a data-toggle="tooltip" title="Xem nhanh" href="ban-cafe-vuong-kinh.html"
                      data-handle="ban-cafe-vuong-kinh" class="btn-square btn_view btn  right-to quick-view">
                        <i class="fab fa-searchengin">
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-info a-center">
                  <h3 class="product-name">
                    <a href="ban-cafe-vuong-kinh.html" title="Bàn vuông kính">
                      Bàn vuông kính
                    </a>
                  </h3>
                  <div class="price-box clearfix">
                    <div class="special-price">
                      <span class="price product-price">
                        467.000₫
                      </span>
                    </div>
                  </div>
                </div>
                <div>
                  <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                  class="variants a-center form-nut-grid" data-id="product-actions-6665227"
                  enctype="multipart/form-data">
                    <div class="action-item">
                      <input type="hidden" name="variantId" value="10593264" />
                      <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                        <i class="fas fa-plus">
                        </i>
                        Mua ngay
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-box">
                <div class="product-thumbnail">
                  <a href="ban-uong-cafe-go-dep.html" title="Bàn gỗ đẹp">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/elmwood30892881911zoom.jpg?v=1493897710837"
                    alt="Bàn gỗ đẹp">
                  </a>
                  <div class="product-action clearfix">
                    <div class="action-item">
                      <a data-toggle="tooltip" title="Xem nhanh" href="ban-uong-cafe-go-dep.html"
                      data-handle="ban-uong-cafe-go-dep" class="btn-square btn_view btn  right-to quick-view">
                        <i class="fab fa-searchengin">
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-info a-center">
                  <h3 class="product-name">
                    <a href="ban-uong-cafe-go-dep.html" title="Bàn gỗ đẹp">
                      Bàn gỗ đẹp
                    </a>
                  </h3>
                  <div class="price-box clearfix">
                    <div class="special-price">
                      <span class="price product-price">
                        2.345.000₫
                      </span>
                    </div>
                  </div>
                </div>
                <div>
                  <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                  class="variants a-center form-nut-grid" data-id="product-actions-6665226"
                  enctype="multipart/form-data">
                    <div class="action-item">
                      <input type="hidden" name="variantId" value="10593263" />
                      <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                        <i class="fas fa-plus">
                        </i>
                        Mua ngay
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-box">
                <div class="product-thumbnail">
                  <a href="ban-uong-cafe-go-dai.html" title="Bàn gỗ dài">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/elmwood30931881911zoom.jpg?v=1493897710107"
                    alt="Bàn gỗ dài">
                  </a>
                  <div class="product-action clearfix">
                    <div class="action-item">
                      <a data-toggle="tooltip" title="Xem nhanh" href="ban-uong-cafe-go-dai.html"
                      data-handle="ban-uong-cafe-go-dai" class="btn-square btn_view btn  right-to quick-view">
                        <i class="fab fa-searchengin">
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-info a-center">
                  <h3 class="product-name">
                    <a href="ban-uong-cafe-go-dai.html" title="Bàn gỗ dài">
                      Bàn gỗ dài
                    </a>
                  </h3>
                  <div class="price-box clearfix">
                    <div class="special-price">
                      <span class="price product-price">
                        1.890.000₫
                      </span>
                    </div>
                  </div>
                </div>
                <div>
                  <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                  class="variants a-center form-nut-grid" data-id="product-actions-6665225"
                  enctype="multipart/form-data">
                    <div class="action-item">
                      <input type="hidden" name="variantId" value="10593262" />
                      <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                        <i class="fas fa-plus">
                        </i>
                        Mua ngay
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-box">
                <div class="product-thumbnail">
                  <a href="ban-uong-cafe-dai.html" title="Bàn dài UYG">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/solide41335106321zoom.jpg?v=1493897709337"
                    alt="Bàn dài UYG">
                  </a>
                  <div class="product-action clearfix">
                    <div class="action-item">
                      <a data-toggle="tooltip" title="Xem nhanh" href="ban-uong-cafe-dai.html"
                      data-handle="ban-uong-cafe-dai" class="btn-square btn_view btn  right-to quick-view">
                        <i class="fab fa-searchengin">
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-info a-center">
                  <h3 class="product-name">
                    <a href="ban-uong-cafe-dai.html" title="Bàn dài UYG">
                      Bàn dài UYG
                    </a>
                  </h3>
                  <div class="price-box clearfix">
                    <div class="special-price">
                      <span class="price product-price">
                        5.730.000₫
                      </span>
                    </div>
                  </div>
                </div>
                <div>
                  <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                  class="variants a-center form-nut-grid" data-id="product-actions-6665224"
                  enctype="multipart/form-data">
                    <div class="action-item">
                      <input type="hidden" name="variantId" value="10593261" />
                      <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                        <i class="fas fa-plus">
                        </i>
                        Mua ngay
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-box">
                <div class="product-thumbnail">
                  <a href="sofa-don-sfd01.html" title="Sofa đơn SFD01">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/pp14258500321zoom.jpg?v=1493897708580"
                    alt="Sofa đơn SFD01">
                  </a>
                  <div class="product-action clearfix">
                    <div class="action-item">
                      <a data-toggle="tooltip" title="Xem nhanh" href="sofa-don-sfd01.html"
                      data-handle="sofa-don-sfd01" class="btn-square btn_view btn  right-to quick-view">
                        <i class="fab fa-searchengin">
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-info a-center">
                  <h3 class="product-name">
                    <a href="sofa-don-sfd01.html" title="Sofa đơn SFD01">
                      Sofa đơn SFD01
                    </a>
                  </h3>
                  <div class="price-box clearfix">
                    <div class="special-price">
                      <span class="price product-price">
                        4.500.000₫
                      </span>
                    </div>
                  </div>
                </div>
                <div>
                  <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                  class="variants a-center form-nut-grid" data-id="product-actions-6665223"
                  enctype="multipart/form-data">
                    <div class="action-item">
                      <input type="hidden" name="variantId" value="10593260" />
                      <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                        <i class="fas fa-plus">
                        </i>
                        Mua ngay
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-box">
                <div class="product-thumbnail">
                  <a href="ghe-sopha-don-dep.html" title="Ghế sopha đơn đẹp">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/pp14284500321zoom.jpg?v=1493897707700"
                    alt="Ghế sopha đơn đẹp">
                  </a>
                  <div class="product-action clearfix">
                    <div class="action-item">
                      <a data-toggle="tooltip" title="Xem nhanh" href="ghe-sopha-don-dep.html"
                      data-handle="ghe-sopha-don-dep" class="btn-square btn_view btn  right-to quick-view">
                        <i class="fab fa-searchengin">
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-info a-center">
                  <h3 class="product-name">
                    <a href="ghe-sopha-don-dep.html" title="Ghế sopha đơn đẹp">
                      Ghế sopha đơn đẹp
                    </a>
                  </h3>
                  <div class="price-box clearfix">
                    <div class="special-price">
                      <span class="price product-price">
                        9.800.000₫
                      </span>
                    </div>
                  </div>
                </div>
                <div>
                  <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                  class="variants a-center form-nut-grid" data-id="product-actions-6665222"
                  enctype="multipart/form-data">
                    <div class="action-item">
                      <input type="hidden" name="variantId" value="10593259" />
                      <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                        <i class="fas fa-plus">
                        </i>
                        Mua ngay
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-box">
                <div class="product-thumbnail">
                  <a href="sofa-don-sfd16.html" title="Sofa đơn SFD16">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/pp14292500321zoom.jpg?v=1493897706637"
                    alt="Sofa đơn SFD16">
                  </a>
                  <div class="product-action clearfix">
                    <div class="action-item">
                      <a data-toggle="tooltip" title="Xem nhanh" href="sofa-don-sfd16.html"
                      data-handle="sofa-don-sfd16" class="btn-square btn_view btn  right-to quick-view">
                        <i class="fab fa-searchengin">
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-info a-center">
                  <h3 class="product-name">
                    <a href="sofa-don-sfd16.html" title="Sofa đơn SFD16">
                      Sofa đơn SFD16
                    </a>
                  </h3>
                  <div class="price-box clearfix">
                    <div class="special-price">
                      <span class="price product-price">
                        4.568.000₫
                      </span>
                    </div>
                  </div>
                </div>
                <div>
                  <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                  class="variants a-center form-nut-grid" data-id="product-actions-6665221"
                  enctype="multipart/form-data">
                    <div class="action-item">
                      <input type="hidden" name="variantId" value="10593258" />
                      <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                        <i class="fas fa-plus">
                        </i>
                        Mua ngay
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- /.products -->
        </div>
      </div>
    </div>
    <script>
      $('.slick_col1').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        dots: false,
        arrows: false,
        speed: 300,
        rows: 1,
        loop: false,
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 2,
        responsive: [{
          breakpoint: 1200,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }]
      });
    </script>
  </section>
  <section class="awe-section-6">
    <div class="section section-deal products-view-grid">
      <div class="container">
        <div class="section-title a-center">
          <h2>
            Bàn phòng khách
          </h2>
          <p>
            Những mẫu bàn phòng khách mới nhất 2018
          </p>
        </div>
        <div class="section-content">
          <div class="products products-view-grid  slick_col2" data-md-items="4"
          data-sm-items="3" data-xs-items="2" data-margin="30" data-nav="true">
            <div class="item">
              <div class="product-box">
                <div class="product-thumbnail">
                  <a href="ke-sach-go-4-tang-40.html" title="Kệ sách gỗ 4 tầng 40">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/solide40632406321zoom.jpg?v=1493897737670"
                    alt="Kệ sách gỗ 4 tầng 40">
                  </a>
                  <div class="product-action clearfix">
                    <div class="action-item">
                      <a data-toggle="tooltip" title="Xem nhanh" href="ke-sach-go-4-tang-40.html"
                      data-handle="ke-sach-go-4-tang-40" class="btn-square btn_view btn  right-to quick-view">
                        <i class="fab fa-searchengin">
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-info a-center">
                  <h3 class="product-name">
                    <a href="ke-sach-go-4-tang-40.html" title="Kệ sách gỗ 4 tầng 40">
                      Kệ sách gỗ 4 tầng 40
                    </a>
                  </h3>
                  <div class="price-box clearfix">
                    <div class="special-price">
                      <span class="price product-price">
                        510.000₫
                      </span>
                    </div>
                  </div>
                </div>
                <div>
                  <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                  class="variants a-center form-nut-grid" data-id="product-actions-6665258"
                  enctype="multipart/form-data">
                    <div class="action-item">
                      <input type="hidden" name="variantId" value="10593296" />
                      <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                        <i class="fas fa-plus">
                        </i>
                        Mua ngay
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-box">
                <div class="product-thumbnail">
                  <a href="gia-sach-treo-hurakids-2130-002.html" title="Giá sách treo Hurakids 2130-002">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/alexdaisy09478143221zoom.jpg?v=1493897736657"
                    alt="Giá sách treo Hurakids 2130-002">
                  </a>
                  <div class="product-action clearfix">
                    <div class="action-item">
                      <a data-toggle="tooltip" title="Xem nhanh" href="gia-sach-treo-hurakids-2130-002.html"
                      data-handle="gia-sach-treo-hurakids-2130-002" class="btn-square btn_view btn  right-to quick-view">
                        <i class="fab fa-searchengin">
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-info a-center">
                  <h3 class="product-name">
                    <a href="gia-sach-treo-hurakids-2130-002.html" title="Giá sách treo Hurakids 2130-002">
                      Giá sách treo Hurakids 2130-002
                    </a>
                  </h3>
                  <div class="price-box clearfix">
                    <div class="special-price">
                      <span class="price product-price">
                        598.000₫
                      </span>
                    </div>
                  </div>
                </div>
                <div>
                  <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                  class="variants a-center form-nut-grid" data-id="product-actions-6665257"
                  enctype="multipart/form-data">
                    <div class="action-item">
                      <input type="hidden" name="variantId" value="10593295" />
                      <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                        <i class="fas fa-plus">
                        </i>
                        Mua ngay
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-box">
                <div class="product-thumbnail">
                  <a href="den-vach-kinh-nv-86664.html" title="Đèn vách kính NV 86664">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/lightliving68071172021zoom.jpg?v=1493897735920"
                    alt="Đèn vách kính NV 86664">
                  </a>
                  <div class="product-action clearfix">
                    <div class="action-item">
                      <a data-toggle="tooltip" title="Xem nhanh" href="den-vach-kinh-nv-86664.html"
                      data-handle="den-vach-kinh-nv-86664" class="btn-square btn_view btn  right-to quick-view">
                        <i class="fab fa-searchengin">
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-info a-center">
                  <h3 class="product-name">
                    <a href="den-vach-kinh-nv-86664.html" title="Đèn vách kính NV 86664">
                      Đèn vách kính NV 86664
                    </a>
                  </h3>
                  <div class="price-box clearfix">
                    <div class="special-price">
                      <span class="price product-price">
                        987.000₫
                      </span>
                    </div>
                  </div>
                </div>
                <div>
                  <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                  class="variants a-center form-nut-grid" data-id="product-actions-6665256"
                  enctype="multipart/form-data">
                    <div class="action-item">
                      <input type="hidden" name="variantId" value="10593294" />
                      <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                        <i class="fas fa-plus">
                        </i>
                        Mua ngay
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-box">
                <div class="product-thumbnail">
                  <a href="den-trang-tri-vach-cao-cap-yui.html" title="Đèn trang trí vách cao cấp YUI">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/re.jpg?v=1493897734663"
                    alt="Đèn trang trí vách cao cấp YUI">
                  </a>
                  <div class="product-action clearfix">
                    <div class="action-item">
                      <a data-toggle="tooltip" title="Xem nhanh" href="den-trang-tri-vach-cao-cap-yui.html"
                      data-handle="den-trang-tri-vach-cao-cap-yui" class="btn-square btn_view btn  right-to quick-view">
                        <i class="fab fa-searchengin">
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-info a-center">
                  <h3 class="product-name">
                    <a href="den-trang-tri-vach-cao-cap-yui.html" title="Đèn trang trí vách cao cấp YUI">
                      Đèn trang trí vách cao cấp YUI
                    </a>
                  </h3>
                  <div class="price-box clearfix">
                    <div class="special-price">
                      <span class="price product-price">
                        809.000₫
                      </span>
                    </div>
                  </div>
                </div>
                <div>
                  <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                  class="variants a-center form-nut-grid" data-id="product-actions-6665255"
                  enctype="multipart/form-data">
                    <div class="action-item">
                      <input type="hidden" name="variantId" value="10593293" />
                      <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                        <i class="fas fa-plus">
                        </i>
                        Mua ngay
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-box">
                <div class="product-thumbnail">
                  <a href="den-trang-tri-tru-cong-netviet-nvt-1.html" title="Đèn trang trí trụ cổng Netviet NVT">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/lightliving01770025321zoom12d7.jpg?v=1493897733727"
                    alt="Đèn trang trí trụ cổng Netviet NVT">
                  </a>
                  <div class="product-action clearfix">
                    <div class="action-item">
                      <a data-toggle="tooltip" title="Xem nhanh" href="den-trang-tri-tru-cong-netviet-nvt-1.html"
                      data-handle="den-trang-tri-tru-cong-netviet-nvt-1" class="btn-square btn_view btn  right-to quick-view">
                        <i class="fab fa-searchengin">
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-info a-center">
                  <h3 class="product-name">
                    <a href="den-trang-tri-tru-cong-netviet-nvt-1.html" title="Đèn trang trí trụ cổng Netviet NVT">
                      Đèn trang trí trụ cổng Netviet NVT
                    </a>
                  </h3>
                  <div class="price-box clearfix">
                    <div class="special-price">
                      <span class="price product-price">
                        764.000₫
                      </span>
                    </div>
                  </div>
                </div>
                <div>
                  <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                  class="variants a-center form-nut-grid" data-id="product-actions-6665254"
                  enctype="multipart/form-data">
                    <div class="action-item">
                      <input type="hidden" name="variantId" value="10593292" />
                      <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                        <i class="fas fa-plus">
                        </i>
                        Mua ngay
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-box">
                <div class="product-thumbnail">
                  <a href="khay-dung-xa-phong.html" title="Khay đựng xà phòng">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/krm12132814011zoom.jpg?v=1493897721863"
                    alt="Khay đựng xà phòng">
                  </a>
                  <div class="product-action clearfix">
                    <div class="action-item">
                      <a data-toggle="tooltip" title="Xem nhanh" href="khay-dung-xa-phong.html"
                      data-handle="khay-dung-xa-phong" class="btn-square btn_view btn  right-to quick-view">
                        <i class="fab fa-searchengin">
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-info a-center">
                  <h3 class="product-name">
                    <a href="khay-dung-xa-phong.html" title="Khay đựng xà phòng">
                      Khay đựng xà phòng
                    </a>
                  </h3>
                  <div class="price-box clearfix">
                    <div class="special-price">
                      <span class="price product-price">
                        102.000₫
                      </span>
                    </div>
                  </div>
                </div>
                <div>
                  <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                  class="variants a-center form-nut-grid" data-id="product-actions-6665238"
                  enctype="multipart/form-data">
                    <div class="action-item">
                      <input type="hidden" name="variantId" value="10593275" />
                      <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                        <i class="fas fa-plus">
                        </i>
                        Mua ngay
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-box">
                <div class="product-thumbnail">
                  <a href="thanh-dung-xa-phong.html" title="Thanh đựng xà phòng">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/krm1286905491zoom.jpg?v=1493897720757"
                    alt="Thanh đựng xà phòng">
                  </a>
                  <div class="product-action clearfix">
                    <div class="action-item">
                      <a data-toggle="tooltip" title="Xem nhanh" href="thanh-dung-xa-phong.html"
                      data-handle="thanh-dung-xa-phong" class="btn-square btn_view btn  right-to quick-view">
                        <i class="fab fa-searchengin">
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-info a-center">
                  <h3 class="product-name">
                    <a href="thanh-dung-xa-phong.html" title="Thanh đựng xà phòng">
                      Thanh đựng xà phòng
                    </a>
                  </h3>
                  <div class="price-box clearfix">
                    <div class="special-price">
                      <span class="price product-price">
                        82.000₫
                      </span>
                    </div>
                  </div>
                </div>
                <div>
                  <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                  class="variants a-center form-nut-grid" data-id="product-actions-6665237"
                  enctype="multipart/form-data">
                    <div class="action-item">
                      <input type="hidden" name="variantId" value="10593274" />
                      <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                        <i class="fas fa-plus">
                        </i>
                        Mua ngay
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-box">
                <div class="product-thumbnail">
                  <a href="thanh-sat-tfu.html" title="Thanh sắt TFU">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/krm1260145491zoom.jpg?v=1493897719623"
                    alt="Thanh sắt TFU">
                  </a>
                  <div class="product-action clearfix">
                    <div class="action-item">
                      <a data-toggle="tooltip" title="Xem nhanh" href="thanh-sat-tfu.html" data-handle="thanh-sat-tfu"
                      class="btn-square btn_view btn  right-to quick-view">
                        <i class="fab fa-searchengin">
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-info a-center">
                  <h3 class="product-name">
                    <a href="thanh-sat-tfu.html" title="Thanh sắt TFU">
                      Thanh sắt TFU
                    </a>
                  </h3>
                  <div class="price-box clearfix">
                    <div class="special-price">
                      <span class="price product-price">
                        98.000₫
                      </span>
                    </div>
                  </div>
                </div>
                <div>
                  <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                  class="variants a-center form-nut-grid" data-id="product-actions-6665236"
                  enctype="multipart/form-data">
                    <div class="action-item">
                      <input type="hidden" name="variantId" value="10593273" />
                      <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                        <i class="fas fa-plus">
                        </i>
                        Mua ngay
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- /.products -->
        </div>
      </div>
    </div>
    <script>
      $('.slick_col2').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        dots: false,
        arrows: false,
        speed: 300,
        rows: 1,
        loop: false,
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 2,
        responsive: [{
          breakpoint: 1200,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }]
      });
    </script>
  </section>
  <section class="awe-section-7">
    <div class="section section-deal products-view-grid">
      <div class="container">
        <div class="section-title a-center">
          <h2>
            Giường ngủ
          </h2>
          <p>
            Những mẫu giường mới nhất 2018
          </p>
        </div>
        <div class="section-content">
          <div class="products products-view-grid  slick_col3" data-md-items="4"
          data-sm-items="3" data-xs-items="2" data-margin="30" data-nav="true">
            <div class="item">
              <div class="product-box">
                <div class="product-thumbnail">
                  <a href="tu-hug-90.html" title="Tủ HUG 90">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/indie07540920321zoom.jpg?v=1493897749447"
                    alt="Tủ HUG 90">
                  </a>
                  <div class="product-action clearfix">
                    <div class="action-item">
                      <a data-toggle="tooltip" title="Xem nhanh" href="tu-hug-90.html" data-handle="tu-hug-90"
                      class="btn-square btn_view btn  right-to quick-view">
                        <i class="fab fa-searchengin">
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-info a-center">
                  <h3 class="product-name">
                    <a href="tu-hug-90.html" title="Tủ HUG 90">
                      Tủ HUG 90
                    </a>
                  </h3>
                  <div class="price-box clearfix">
                    <div class="special-price">
                      <span class="price product-price">
                        12.000.000₫
                      </span>
                    </div>
                  </div>
                </div>
                <div>
                  <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                  class="variants a-center form-nut-grid" data-id="product-actions-6665273"
                  enctype="multipart/form-data">
                    <div class="action-item">
                      <input type="hidden" name="variantId" value="10593311" />
                      <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                        <i class="fas fa-plus">
                        </i>
                        Mua ngay
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-box">
                <div class="product-thumbnail">
                  <a href="tu-bnd-09.html" title="Tủ BND 09">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/elmwood87167474911zoom.jpg?v=1493897748617"
                    alt="Tủ BND 09">
                  </a>
                  <div class="product-action clearfix">
                    <div class="action-item">
                      <a data-toggle="tooltip" title="Xem nhanh" href="tu-bnd-09.html" data-handle="tu-bnd-09"
                      class="btn-square btn_view btn  right-to quick-view">
                        <i class="fab fa-searchengin">
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-info a-center">
                  <h3 class="product-name">
                    <a href="tu-bnd-09.html" title="Tủ BND 09">
                      Tủ BND 09
                    </a>
                  </h3>
                  <div class="price-box clearfix">
                    <div class="special-price">
                      <span class="price product-price">
                        8.990.000₫
                      </span>
                    </div>
                  </div>
                </div>
                <div>
                  <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                  class="variants a-center form-nut-grid" data-id="product-actions-6665272"
                  enctype="multipart/form-data">
                    <div class="action-item">
                      <input type="hidden" name="variantId" value="10593310" />
                      <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                        <i class="fas fa-plus">
                        </i>
                        Mua ngay
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-box">
                <div class="product-thumbnail">
                  <a href="tu-qtr-01.html" title="Tủ QTR 01">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/bigsmile31702024221zoom.jpg?v=1493897747867"
                    alt="Tủ QTR 01">
                  </a>
                  <div class="product-action clearfix">
                    <div class="action-item">
                      <a data-toggle="tooltip" title="Xem nhanh" href="tu-qtr-01.html" data-handle="tu-qtr-01"
                      class="btn-square btn_view btn  right-to quick-view">
                        <i class="fab fa-searchengin">
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-info a-center">
                  <h3 class="product-name">
                    <a href="tu-qtr-01.html" title="Tủ QTR 01">
                      Tủ QTR 01
                    </a>
                  </h3>
                  <div class="price-box clearfix">
                    <div class="special-price">
                      <span class="price product-price">
                        5.400.000₫
                      </span>
                    </div>
                  </div>
                </div>
                <div>
                  <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                  class="variants a-center form-nut-grid" data-id="product-actions-6665271"
                  enctype="multipart/form-data">
                    <div class="action-item">
                      <input type="hidden" name="variantId" value="10593309" />
                      <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                        <i class="fas fa-plus">
                        </i>
                        Mua ngay
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-box">
                <div class="product-thumbnail">
                  <a href="tu-ao-hut.html" title="Tủ áo HUT">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/bigsmile30874024221zoom.jpg?v=1493897747000"
                    alt="Tủ áo HUT">
                  </a>
                  <div class="product-action clearfix">
                    <div class="action-item">
                      <a data-toggle="tooltip" title="Xem nhanh" href="tu-ao-hut.html" data-handle="tu-ao-hut"
                      class="btn-square btn_view btn  right-to quick-view">
                        <i class="fab fa-searchengin">
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-info a-center">
                  <h3 class="product-name">
                    <a href="tu-ao-hut.html" title="Tủ áo HUT">
                      Tủ áo HUT
                    </a>
                  </h3>
                  <div class="price-box clearfix">
                    <div class="special-price">
                      <span class="price product-price">
                        8.000.000₫
                      </span>
                    </div>
                  </div>
                </div>
                <div>
                  <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                  class="variants a-center form-nut-grid" data-id="product-actions-6665270"
                  enctype="multipart/form-data">
                    <div class="action-item">
                      <input type="hidden" name="variantId" value="10593308" />
                      <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                        <i class="fas fa-plus">
                        </i>
                        Mua ngay
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-box">
                <div class="product-thumbnail">
                  <a href="tu-ao-b1238.html" title="Tủ áo B1238">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/bigsmile30845024221zoom.jpg?v=1493897746203"
                    alt="Tủ áo B1238">
                  </a>
                  <div class="product-action clearfix">
                    <div class="action-item">
                      <a data-toggle="tooltip" title="Xem nhanh" href="tu-ao-b1238.html" data-handle="tu-ao-b1238"
                      class="btn-square btn_view btn  right-to quick-view">
                        <i class="fab fa-searchengin">
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-info a-center">
                  <h3 class="product-name">
                    <a href="tu-ao-b1238.html" title="Tủ áo B1238">
                      Tủ áo B1238
                    </a>
                  </h3>
                  <div class="price-box clearfix">
                    <div class="special-price">
                      <span class="price product-price">
                        5.100.000₫
                      </span>
                    </div>
                  </div>
                </div>
                <div>
                  <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                  class="variants a-center form-nut-grid" data-id="product-actions-6665269"
                  enctype="multipart/form-data">
                    <div class="action-item">
                      <input type="hidden" name="variantId" value="10593307" />
                      <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                        <i class="fas fa-plus">
                        </i>
                        Mua ngay
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-box">
                <div class="product-thumbnail">
                  <a href="tu-ao-bellasofa-b1239.html" title="Tủ Áo Bellasofa B1239">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/bigsmile30816024221zoom.jpg?v=1493897745420"
                    alt="Tủ Áo Bellasofa B1239">
                  </a>
                  <div class="product-action clearfix">
                    <div class="action-item">
                      <a data-toggle="tooltip" title="Xem nhanh" href="tu-ao-bellasofa-b1239.html"
                      data-handle="tu-ao-bellasofa-b1239" class="btn-square btn_view btn  right-to quick-view">
                        <i class="fab fa-searchengin">
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-info a-center">
                  <h3 class="product-name">
                    <a href="tu-ao-bellasofa-b1239.html" title="Tủ Áo Bellasofa B1239">
                      Tủ Áo Bellasofa B1239
                    </a>
                  </h3>
                  <div class="price-box clearfix">
                    <div class="special-price">
                      <span class="price product-price">
                        3.790.000₫
                      </span>
                    </div>
                  </div>
                </div>
                <div>
                  <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                  class="variants a-center form-nut-grid" data-id="product-actions-6665268"
                  enctype="multipart/form-data">
                    <div class="action-item">
                      <input type="hidden" name="variantId" value="10593306" />
                      <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                        <i class="fas fa-plus">
                        </i>
                        Mua ngay
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-box">
                <div class="product-thumbnail">
                  <a href="tu-ao-b1241k.html" title="Tủ áo B1241K">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/alexdaisy18858943221zoom.jpg?v=1493897744660"
                    alt="Tủ áo B1241K">
                  </a>
                  <div class="product-action clearfix">
                    <div class="action-item">
                      <a data-toggle="tooltip" title="Xem nhanh" href="tu-ao-b1241k.html" data-handle="tu-ao-b1241k"
                      class="btn-square btn_view btn  right-to quick-view">
                        <i class="fab fa-searchengin">
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-info a-center">
                  <h3 class="product-name">
                    <a href="tu-ao-b1241k.html" title="Tủ áo B1241K">
                      Tủ áo B1241K
                    </a>
                  </h3>
                  <div class="price-box clearfix">
                    <div class="special-price">
                      <span class="price product-price">
                        5.400.000₫
                      </span>
                    </div>
                  </div>
                </div>
                <div>
                  <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                  class="variants a-center form-nut-grid" data-id="product-actions-6665267"
                  enctype="multipart/form-data">
                    <div class="action-item">
                      <input type="hidden" name="variantId" value="10593305" />
                      <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                        <i class="fas fa-plus">
                        </i>
                        Mua ngay
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-box">
                <div class="product-thumbnail">
                  <a href="tu-quan-ao-big-one-vietnam-wvr-1855l.html" title="Tủ quần áo BIG ONE VIETNAM WVR-1855L">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/alexdaisy04517243221zoom.jpg?v=1493897743913"
                    alt="Tủ quần áo BIG ONE VIETNAM WVR-1855L">
                  </a>
                  <div class="product-action clearfix">
                    <div class="action-item">
                      <a data-toggle="tooltip" title="Xem nhanh" href="tu-quan-ao-big-one-vietnam-wvr-1855l.html"
                      data-handle="tu-quan-ao-big-one-vietnam-wvr-1855l" class="btn-square btn_view btn  right-to quick-view">
                        <i class="fab fa-searchengin">
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-info a-center">
                  <h3 class="product-name">
                    <a href="tu-quan-ao-big-one-vietnam-wvr-1855l.html" title="Tủ quần áo BIG ONE VIETNAM WVR-1855L">
                      Tủ quần áo BIG ONE VIETNAM WVR-1855L
                    </a>
                  </h3>
                  <div class="price-box clearfix">
                    <div class="special-price">
                      <span class="price product-price">
                        4.000.000₫
                      </span>
                    </div>
                  </div>
                </div>
                <div>
                  <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                  class="variants a-center form-nut-grid" data-id="product-actions-6665266"
                  enctype="multipart/form-data">
                    <div class="action-item">
                      <input type="hidden" name="variantId" value="10593304" />
                      <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                        <i class="fas fa-plus">
                        </i>
                        Mua ngay
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- /.products -->
        </div>
      </div>
    </div>
    <script>
      $('.slick_col3').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        dots: false,
        arrows: false,
        speed: 300,
        rows: 1,
        loop: false,
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 2,
        responsive: [{
          breakpoint: 1200,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }]
      });
    </script>
  </section>
  <section class="awe-section-8">
    <div class="section section-deal products-view-grid">
      <div class="container">
        <div class="section-title a-center">
          <h2>
            Rèm
          </h2>
          <p>
            Những mẫu giường mới nhất 2018
          </p>
        </div>
        <div class="section-content">
          <div class="products products-view-grid  slick_col4" data-md-items="4"
          data-sm-items="3" data-xs-items="2" data-margin="30" data-nav="true">
            <div class="item">
              <div class="product-box">
                <div class="product-thumbnail">
                  <a href="den-trang-tri-vach-netviet-nv-016.html" title="Đèn trang trí vách Netviet NV 016">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/39.jpg?v=1493897732810"
                    alt="Đèn trang trí vách Netviet NV 016">
                  </a>
                  <div class="product-action clearfix">
                    <div class="action-item">
                      <a data-toggle="tooltip" title="Xem nhanh" href="den-trang-tri-vach-netviet-nv-016.html"
                      data-handle="den-trang-tri-vach-netviet-nv-016" class="btn-square btn_view btn  right-to quick-view">
                        <i class="fab fa-searchengin">
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-info a-center">
                  <h3 class="product-name">
                    <a href="den-trang-tri-vach-netviet-nv-016.html" title="Đèn trang trí vách Netviet NV 016">
                      Đèn trang trí vách Netviet NV 016
                    </a>
                  </h3>
                  <div class="price-box clearfix">
                    <div class="special-price">
                      <span class="price product-price">
                        690.000₫
                      </span>
                    </div>
                  </div>
                </div>
                <div>
                  <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                  class="variants a-center form-nut-grid" data-id="product-actions-6665253"
                  enctype="multipart/form-data">
                    <div class="action-item">
                      <input type="hidden" name="variantId" value="10593291" />
                      <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                        <i class="fas fa-plus">
                        </i>
                        Mua ngay
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-box">
                <div class="product-thumbnail">
                  <a href="den-trang-tri-vach-cao-cap-pha-le-netviet-nv-9005-2.html" title="Đèn trang trí vách cao cấp pha lê Netviet NV 9005/2">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/37.jpg?v=1493897732273"
                    alt="Đèn trang trí vách cao cấp pha lê Netviet NV 9005/2">
                  </a>
                  <div class="product-action clearfix">
                    <div class="action-item">
                      <a data-toggle="tooltip" title="Xem nhanh" href="den-trang-tri-vach-cao-cap-pha-le-netviet-nv-9005-2.html"
                      data-handle="den-trang-tri-vach-cao-cap-pha-le-netviet-nv-9005-2" class="btn-square btn_view btn  right-to quick-view">
                        <i class="fab fa-searchengin">
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-info a-center">
                  <h3 class="product-name">
                    <a href="den-trang-tri-vach-cao-cap-pha-le-netviet-nv-9005-2.html" title="Đèn trang trí vách cao cấp pha lê Netviet NV 9005/2">
                      Đèn trang trí vách cao cấp pha lê Netviet NV 9005/2
                    </a>
                  </h3>
                  <div class="price-box clearfix">
                    <div class="special-price">
                      <span class="price product-price">
                        970.000₫
                      </span>
                    </div>
                  </div>
                </div>
                <div>
                  <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                  class="variants a-center form-nut-grid" data-id="product-actions-6665252"
                  enctype="multipart/form-data">
                    <div class="action-item">
                      <input type="hidden" name="variantId" value="10593289" />
                      <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                        <i class="fas fa-plus">
                        </i>
                        Mua ngay
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-box">
                <div class="product-thumbnail">
                  <a href="den-trang-tri-vach-cao-cap-netviet-nv-8825.html" title="Đèn trang trí vách cao cấp NETVIET NV 8825">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/82dd513b5ca0b4e058c5f74ac5700b.jpg?v=1493897731777"
                    alt="Đèn trang trí vách cao cấp NETVIET NV 8825">
                  </a>
                  <div class="product-action clearfix">
                    <div class="action-item">
                      <a data-toggle="tooltip" title="Xem nhanh" href="den-trang-tri-vach-cao-cap-netviet-nv-8825.html"
                      data-handle="den-trang-tri-vach-cao-cap-netviet-nv-8825" class="btn-square btn_view btn  right-to quick-view">
                        <i class="fab fa-searchengin">
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-info a-center">
                  <h3 class="product-name">
                    <a href="den-trang-tri-vach-cao-cap-netviet-nv-8825.html" title="Đèn trang trí vách cao cấp NETVIET NV 8825">
                      Đèn trang trí vách cao cấp NETVIET NV 8825
                    </a>
                  </h3>
                  <div class="price-box clearfix">
                    <div class="special-price">
                      <span class="price product-price">
                        780.000₫
                      </span>
                    </div>
                  </div>
                </div>
                <div>
                  <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                  class="variants a-center form-nut-grid" data-id="product-actions-6665251"
                  enctype="multipart/form-data">
                    <div class="action-item">
                      <input type="hidden" name="variantId" value="10593288" />
                      <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                        <i class="fas fa-plus">
                        </i>
                        Mua ngay
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-box">
                <div class="product-thumbnail">
                  <a href="den-trang-tri-vach-netviet-nv-8205-1.html" title="Đèn trang trí vách Netviet NV 8205/1">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/9.jpg?v=1493897731053"
                    alt="Đèn trang trí vách Netviet NV 8205/1">
                  </a>
                  <div class="product-action clearfix">
                    <div class="action-item">
                      <a data-toggle="tooltip" title="Xem nhanh" href="den-trang-tri-vach-netviet-nv-8205-1.html"
                      data-handle="den-trang-tri-vach-netviet-nv-8205-1" class="btn-square btn_view btn  right-to quick-view">
                        <i class="fab fa-searchengin">
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-info a-center">
                  <h3 class="product-name">
                    <a href="den-trang-tri-vach-netviet-nv-8205-1.html" title="Đèn trang trí vách Netviet NV 8205/1">
                      Đèn trang trí vách Netviet NV 8205/1
                    </a>
                  </h3>
                  <div class="price-box clearfix">
                    <div class="special-price">
                      <span class="price product-price">
                        590.000₫
                      </span>
                    </div>
                  </div>
                </div>
                <div>
                  <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                  class="variants a-center form-nut-grid" data-id="product-actions-6665250"
                  enctype="multipart/form-data">
                    <div class="action-item">
                      <input type="hidden" name="variantId" value="10593287" />
                      <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                        <i class="fas fa-plus">
                        </i>
                        Mua ngay
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-box">
                <div class="product-thumbnail">
                  <a href="den-tuong-composite-an-phuoc-b948.html" title="Đèn tường Composite An Phước B948">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/6.jpg?v=1493897730310"
                    alt="Đèn tường Composite An Phước B948">
                  </a>
                  <div class="product-action clearfix">
                    <div class="action-item">
                      <a data-toggle="tooltip" title="Xem nhanh" href="den-tuong-composite-an-phuoc-b948.html"
                      data-handle="den-tuong-composite-an-phuoc-b948" class="btn-square btn_view btn  right-to quick-view">
                        <i class="fab fa-searchengin">
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-info a-center">
                  <h3 class="product-name">
                    <a href="den-tuong-composite-an-phuoc-b948.html" title="Đèn tường Composite An Phước B948">
                      Đèn tường Composite An Phước B948
                    </a>
                  </h3>
                  <div class="price-box clearfix">
                    <div class="special-price">
                      <span class="price product-price">
                        10.000.000₫
                      </span>
                    </div>
                  </div>
                </div>
                <div>
                  <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                  class="variants a-center form-nut-grid" data-id="product-actions-6665249"
                  enctype="multipart/form-data">
                    <div class="action-item">
                      <input type="hidden" name="variantId" value="10593286" />
                      <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                        <i class="fas fa-plus">
                        </i>
                        Mua ngay
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-box">
                <div class="product-thumbnail">
                  <a href="den-treo-pha-le-green-light.html" title="Đèn treo pha lê green light">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/4.jpg?v=1493897729767"
                    alt="Đèn treo pha lê green light">
                  </a>
                  <div class="product-action clearfix">
                    <div class="action-item">
                      <a data-toggle="tooltip" title="Xem nhanh" href="den-treo-pha-le-green-light.html"
                      data-handle="den-treo-pha-le-green-light" class="btn-square btn_view btn  right-to quick-view">
                        <i class="fab fa-searchengin">
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-info a-center">
                  <h3 class="product-name">
                    <a href="den-treo-pha-le-green-light.html" title="Đèn treo pha lê green light">
                      Đèn treo pha lê green light
                    </a>
                  </h3>
                  <div class="price-box clearfix">
                    <div class="special-price">
                      <span class="price product-price">
                        150.000₫
                      </span>
                    </div>
                  </div>
                </div>
                <div>
                  <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                  class="variants a-center form-nut-grid" data-id="product-actions-6665248"
                  enctype="multipart/form-data">
                    <div class="action-item">
                      <input type="hidden" name="variantId" value="10593285" />
                      <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                        <i class="fas fa-plus">
                        </i>
                        Mua ngay
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-box">
                <div class="product-thumbnail">
                  <a href="giuong-bmy.html" title="Giường BMY">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/elmwood88591626222zoomf5a07d81.jpg?v=1493897729220"
                    alt="Giường BMY">
                  </a>
                  <div class="product-action clearfix">
                    <div class="action-item">
                      <a data-toggle="tooltip" title="Xem nhanh" href="giuong-bmy.html" data-handle="giuong-bmy"
                      class="btn-square btn_view btn  right-to quick-view">
                        <i class="fab fa-searchengin">
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-info a-center">
                  <h3 class="product-name">
                    <a href="giuong-bmy.html" title="Giường BMY">
                      Giường BMY
                    </a>
                  </h3>
                  <div class="price-box clearfix">
                    <div class="special-price">
                      <span class="price product-price">
                        14.490.000₫
                      </span>
                    </div>
                  </div>
                </div>
                <div>
                  <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                  class="variants a-center form-nut-grid" data-id="product-actions-6665247"
                  enctype="multipart/form-data">
                    <div class="action-item">
                      <input class="hidden" type="hidden" name="variantId" value="10806291"
                      />
                      <button class="btn btn-white btn-cart btn  left-to" title="Chọn sản phẩm"
                      type="button" onclick="window.location.href='giuong-bmy.html'">
                        <i class="fas fa-plus">
                        </i>
                        Tùy chọn
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="product-box">
                <div class="product-thumbnail">
                  <a href="giuong-ngu-gn-016.html" title="Giường ngủ GN 016">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/large/100/210/557/products/tulip89482122121zoom.jpg?v=1493897728470"
                    alt="Giường ngủ GN 016">
                  </a>
                  <div class="product-action clearfix">
                    <div class="action-item">
                      <a data-toggle="tooltip" title="Xem nhanh" href="giuong-ngu-gn-016.html"
                      data-handle="giuong-ngu-gn-016" class="btn-square btn_view btn  right-to quick-view">
                        <i class="fab fa-searchengin">
                        </i>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-info a-center">
                  <h3 class="product-name">
                    <a href="giuong-ngu-gn-016.html" title="Giường ngủ GN 016">
                      Giường ngủ GN 016
                    </a>
                  </h3>
                  <div class="price-box clearfix">
                    <div class="special-price">
                      <span class="price product-price">
                        9.800.000₫
                      </span>
                    </div>
                  </div>
                </div>
                <div>
                  <form action="https://theme-furniture-2.mysapo.net/cart/add" method="post"
                  class="variants a-center form-nut-grid" data-id="product-actions-6665246"
                  enctype="multipart/form-data">
                    <div class="action-item">
                      <input type="hidden" name="variantId" value="10593283" />
                      <button class="btn-white btn btn-cart  left-to add_to_cart " title="Thêm vào giỏ hàng">
                        <i class="fas fa-plus">
                        </i>
                        Mua ngay
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- /.products -->
        </div>
      </div>
    </div>
    <script>
      $('.slick_col4').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        dots: false,
        arrows: false,
        speed: 300,
        rows: 1,
        loop: false,
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 2,
        responsive: [{
          breakpoint: 1200,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }]
      });
    </script>
  </section>
  <section class="awe-section-9">
    <div class="section section-testimonial parallax" style="background-image: url(template/bizweb.dktcdn.net/100/210/557/themes/801960/assets/testimonialb60e.jpg?1676014753174)">
      <div class="container">
        <div class="testimonial  slick_tes" data-lg-items="1" data-md-items="1"
        data-sm-items="1" data-xs-items="1" data-margin="0" data-dot="true">
          <div class="item">
            <div class="testimonial-item a-center">
              <img alt="Ngọc Trinh" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
              data-src="//bizweb.dktcdn.net/100/210/557/themes/801960/assets/testimonial1.jpg?1676014753174"
              class="img-circle inline-block lazyload">
              <h4 class="offset-top-20">
                <p>
                  <label class="text-normal">
                    Ngọc Trinh
                  </label>
                </p>
              </h4>
              <q class='margin-top-15'>
                Sản phẩm tốt, thái độ phục vụ chu đáo, đây là nơi mà tôi luôn tin tưởng
                suốt mấy năm qua
                <br>
                Chúng tôi sẽ tiếp tục ủng hộ trong thời gian tới
              </q>
              <div class="star">
                <i class="fa fa-star">
                </i>
                <i class="fa fa-star">
                </i>
                <i class="fa fa-star">
                </i>
                <i class="fa fa-star">
                </i>
                <i class="fa fa-star">
                </i>
              </div>
              <div class="line">
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial-item a-center">
              <img alt="Cole Stanley" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
              data-src="//bizweb.dktcdn.net/100/210/557/themes/801960/assets/testimonial2.jpg?1676014753174"
              class="img-circle inline-block lazyload">
              <h4 class="offset-top-20">
                <p>
                  <label class="text-normal">
                    Cole Stanley
                  </label>
                </p>
              </h4>
              <q class='margin-top-15'>
                Sản phẩm tốt, thái độ phục vụ chu đáo, đây là nơi mà tôi luôn tin tưởng
                suốt mấy năm qua
              </q>
              <div class="star">
                <i class="fa fa-star">
                </i>
                <i class="fa fa-star">
                </i>
                <i class="fa fa-star">
                </i>
                <i class="fa fa-star">
                </i>
                <i class="fa fa-star">
                </i>
              </div>
              <div class="line">
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial-item a-center">
              <img alt="Cole Stanley 2" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
              data-src="//bizweb.dktcdn.net/100/210/557/themes/801960/assets/testimonial3.jpg?1676014753174"
              class="img-circle inline-block lazyload">
              <h4 class="offset-top-20">
                <p>
                  <label class="text-normal">
                    Cole Stanley 2
                  </label>
                </p>
              </h4>
              <q class='margin-top-15'>
                Sản phẩm tốt, thái độ phục vụ chu đáo, đây là nơi mà tôi luôn tin tưởng
                suốt mấy năm qua
              </q>
              <div class="star">
                <i class="fa fa-star">
                </i>
                <i class="fa fa-star">
                </i>
                <i class="fa fa-star">
                </i>
                <i class="fa fa-star">
                </i>
                <i class="fa fa-star">
                </i>
              </div>
              <div class="line">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      $('.slick_tes').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        dots: false,
        arrows: false,
        speed: 300,
        rows: 1,
        loop: false,
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        responsive: [{
          breakpoint: 1200,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }]
      });
    </script>
  </section>
  <section class="awe-section-10">
    <section class="section section-news">
      <div class="container">
        <div class="section-title a-center">
          <h2>
            <a href="tin-tuc.html">
              Tin tức
            </a>
          </h2>
        </div>
        <div class="section-content">
          <div class="slick_blog" data-lg-items="3" data-md-items="3" data-sm-items="3"
          data-xs-items="2" data-margin="30" data-nav="true">
            <div class="item">
              <article class="blog-item">
                <div class="blog-item-thumbnail">
                  <a href="top-nhung-cach-phoi-mau-cho-can-phong-dep.html" class="img26">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/grande/100/210/557/articles/blog-detail-3b2beed9-bf42-466e-a845-47c3dcbd04e7-f64c0fdd-155d-4265-b9db-a10fcce7c2ac.jpg?v=1494385364443"
                    alt="Top những cách phối màu cho căn phòng đẹp">
                  </a>
                </div>
                <div class="blog-item-info">
                  <h3 class="blog-item-name">
                    <a href="top-nhung-cach-phoi-mau-cho-can-phong-dep.html">
                      Top những cách phối màu cho căn phòng đẹp
                    </a>
                  </h3>
                  <div class="post-time">
                    <i class="fa fa-clock-o">
                    </i>
                    May 10, 17 by
                    <span class="author">
                      Đặng Hữu Danh
                    </span>
                  </div>
                  <p class="blog-item-summary margin-bottom-10">
                    Đối với gia đình Việt, phòng bếp luôn là nơi quan trọng vì ở đó, gia đình
                    quây quần sum...
                  </p>
                  <a href="top-nhung-cach-phoi-mau-cho-can-phong-dep.html" class="btn btn-link">
                    Xem thêm
                    <i class="arrow_right">
                    </i>
                  </a>
                </div>
              </article>
            </div>
            <div class="item">
              <article class="blog-item">
                <div class="blog-item-thumbnail">
                  <a href="phoi-mau-noi-that-phong-cach-hien-dai.html" class="img26">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/grande/100/210/557/articles/blog-03.jpg?v=1494385154030"
                    alt="Phối màu nội thất phong cách hiện đại">
                  </a>
                </div>
                <div class="blog-item-info">
                  <h3 class="blog-item-name">
                    <a href="phoi-mau-noi-that-phong-cach-hien-dai.html">
                      Phối màu nội thất phong cách hiện đại
                    </a>
                  </h3>
                  <div class="post-time">
                    <i class="fa fa-clock-o">
                    </i>
                    May 06, 17 by
                    <span class="author">
                      Đặng Hữu Danh
                    </span>
                  </div>
                  <p class="blog-item-summary margin-bottom-10">
                    Theo kiến trúc sư Phạm Ngọc Thiên Ân, màu sắc trong nội thất được sử dụng
                    như một loại ngôn...
                  </p>
                  <a href="phoi-mau-noi-that-phong-cach-hien-dai.html" class="btn btn-link">
                    Xem thêm
                    <i class="arrow_right">
                    </i>
                  </a>
                </div>
              </article>
            </div>
            <div class="item">
              <article class="blog-item">
                <div class="blog-item-thumbnail">
                  <a href="10-cach-phoi-mau-cho-can-phong-dep.html" class="img26">
                    <img class="lazyload" src="http://bizweb.dktcdn.net/100/210/557/themes/801960/assets/rolling.svg?1676014753174"
                    data-src="//bizweb.dktcdn.net/thumb/grande/100/210/557/articles/blog-02.jpg?v=1494385143167"
                    alt="10 cách phối màu cho căn phòng đẹp">
                  </a>
                </div>
                <div class="blog-item-info">
                  <h3 class="blog-item-name">
                    <a href="10-cach-phoi-mau-cho-can-phong-dep.html">
                      10 cách phối màu cho căn phòng đẹp
                    </a>
                  </h3>
                  <div class="post-time">
                    <i class="fa fa-clock-o">
                    </i>
                    May 06, 17 by
                    <span class="author">
                      Đặng Hữu Danh
                    </span>
                  </div>
                  <p class="blog-item-summary margin-bottom-10">
                    Đối với gia đình Việt, phòng bếp luôn là nơi quan trọng vì ở đó, gia đình
                    quây quần sum...
                  </p>
                  <a href="10-cach-phoi-mau-cho-can-phong-dep.html" class="btn btn-link">
                    Xem thêm
                    <i class="arrow_right">
                    </i>
                  </a>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script>
      $('.slick_blog').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        dots: false,
        arrows: false,
        speed: 300,
        rows: 1,
        loop: false,
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [{
          breakpoint: 1200,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3
          }
        },
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        }]
      });
    </script>
  </section>

@endsection
