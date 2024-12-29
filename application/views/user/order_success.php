<div class="hero_area">
    <div class="bg-box">
      <img src="<?php echo base_url('assets/images/footer.png');?>" alt="">
    </div>
     <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="<?php echo site_url('user');?>">
            <span>
              Wedangan Lodji
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('user');?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('user/menu');?>">Menu<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('user/about');?>">About</a>
              </li>
            </ul>
            <div class="user_option">
              <a class="cart_link" href="<?php echo site_url('user/cart');?>">
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                  <g>
                    <g>
                      <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                   c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                   C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                   c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                   C457.728,97.71,450.56,86.958,439.296,84.91z" />
                    </g>
                  </g>
                  <g>
                    <g>
                      <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                   c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                    </g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                  <g>
                  </g>
                </svg>
              </a>
            </div>
          </div>
        </nav>
      </div>
    </header>
  </div>
    <!-- end header section -->
    <br><br><br>
    <!-- Checkout Section Begin -->
    <div class="banner__text">
        <h1 style="text-align: center;">Order Status</h1><br>
    </div>
    <div class="container">
        <div class="row">
            <?php if(!empty($order)){ ?>
            <div class="col-lg-4 offset-lg-4">
                <div class="alert alert-success" style="text-align: center;">Your order has been placed successfully.</div>
            </div>
            <?php } ?>
        </div>
    </div>
    <!-- Order status & shipping info -->
    <div class="col-lg-6 offset-lg-3">
        <div class="cart__total__procced">
            <h6 style="text-align: center;">Order Info</h6><br>
            <ul>
                <li>Name <span><strong><?php echo $order['nama']; ?></strong></span></li>
                <li>Table Number <span><strong><?php echo $order['nomorMeja']; ?></strong></span></li>
                <li>Total <span><strong><?php echo 'Rp.'.$order['total']; ?></strong></span></li>
            </ul>
        </div>
    </div>
    <!-- Order items -->
    <section class="cart_section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                <h4 style="text-align: center;">Order Detail</h4><br><br><br>
                    <div class="shop__cart__table">
                        <table style="text-align: center;">
                            <thead>
                                <tr>
                                    <th>Menu</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                if(!empty($order['items'])){  
                                    foreach($order['items'] as $item){ 
                                ?>
                                <tr>
                                    <td><?php echo $item["namaMenu"]; ?></td>
                                    <td><?php echo 'Rp.'.$item["harga"]; ?></td>
                                    <td><?php echo $item["jmlOrder"]; ?></td>
                                    <td><?php echo 'Rp.'.$item["subtotal"]; ?></td>
                                </tr>
                                <?php } 
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->

    