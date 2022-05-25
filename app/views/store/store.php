<html lang="en" dir="ltr">
   <head>
      <title> Store</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-touch-fullscreen" content="yes">
      <meta name="HandheldFriendly" content="True">
      <meta name="author" content="QuickQR contactless restaurant digital QR Menu Maker">
      <meta name="keywords" content="">
      <meta name="description" content="">
      <link rel="stylesheet" href="<?=root?>public/assets/css/store.css">

    </head>
   <body class="default ltr noscroll">
      <!--[if lt IE 8]>
      <p class="browserupgrade">
         You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
         your browser</a> to improve your experience.
      </p>
      <![endif]-->
      <!-- Preloading -->
      <div class="preloading" style="display: none;">
         <div class="wrap-preload">
            <div class="cssload-loader"></div>
         </div>
      </div>
      <!-- .Preloading -->
      <!-- Sidebar left -->
      <nav id="sidebarleft" class="sidenav">
         <div class="sidebar-header">
            <img src="https://toursmark.com/public/storage/wherehouses/25-05-2022-1653472645.jpg">
         </div>
         <div class="heading">
            <div class="title col-secondary font-weight-normal">All Categories</div>
         </div>
         <ul class="list-unstyled components">
            <li>
               <a href="#" data-catid="4143" class="menu-category waves-effect waves-block active"><i class="icon-material-outline-restaurant"></i> Zaitoon</a>
            </li>
            <li>
               <a href="#" data-catid="4144" class="menu-category waves-effect waves-block"><i class="icon-material-outline-restaurant"></i> Namak</a>
            </li>
         </ul>
      </nav>
      <!-- .Sidebar left -->
      <!-- Header  -->
      <nav class="navbar navbar-expand-lg navbar-light bg-header">
         <div class="container-fluid flex-nowrap">
            <button type="button" id="sidebarleftbutton" class="btn mr-4">
            <!-- <i class="icon-feather-menu"></i> -->

            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>

            </button>
            <button type="button" class="btn btn-default ml-auto mr-1" id="call-the-waiter-btn" title="Call the Waiter" style="display:flex;gap:10px; align-items: center;cursor:pointer">
            <!-- <i class="fa fa-bell"></i> -->

            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 17H2a3 3 0 0 0 3-3V9a7 7 0 0 1 14 0v5a3 3 0 0 0 3 3zm-8.27 4a2 2 0 0 1-3.46 0"></path></svg>

            <span class="d-none d-sm-inline">Call the Waiter</span>
            </button>
         </div>
      </nav>
      <!-- .Header  -->
      <!-- Content  -->
      <div id="content">
         <!-- Content Wrap  -->
         <div class="content-wrap">
            <div class="single-page-header detail-header" style="background-image: url('https://toursmark.com/public/storage/wherehouses/bg.jpg')">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="single-page-header-inner">
                           <div class="left-side">
                              <div class="header-image"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFwAAABcCAMAAADUMSJqAAAAhFBMVEW9ABj///+7AAC4AAC1AAC9ABW8AAmyAAC8AA69ABK8AAXHamrOfYH06On8/P3v3N6/R0z48vO7JCvEVFDXoaC/TlHAVVjZqKbMgIPBPUHp09ThwMLKcXPaqq3dsLHZnaDpzMq+Njm8Fh/EXV28KDPRiY3huLnUlZbFaG7DYWOoAADlys6Lzm2PAAACyElEQVRoge1U25LaMAy15EticnUKbBLCJSEEWP7//3ocut3OsHTowz7VZwY8seUj6UiyEAEBAQEBAQEBAQEBAQHPoPXLpjb+i62WbLHEzJ975mVyq6of1VNjXS3fVrGI18s38WHENVFjX+KuWqINPztedEQg5y2R/NiTO3KvxS7B7eqn5LwnApFqqZXGgNGYWBX4YJ7pLXMs/K62fkMv7vtQcYGQVkSpMh9Gj74PVEit2dGuT5JB8zE5WkfLKk0llJF9Wq+kHq6JHU+V5uFSp5U2cpWeutKUE9GxjHlM67X8ijyjDaJsEMKJaM090R6/DREVxkIgYCmx0+VUqb3/LHmd+ZWQoT9VS7/sHtntmJPLsszhjncA7Z1MYXvD/U5O5M6Ibiwpd1QouMymDaNM2T5DxlNO2aHZUn5GEONDC5g1/UJeCUdnCUV8uJ2CnPuSqI/gqgGdK4cL4lNSCkJJkPGkbE4nhazKCEfNg+x8przuuq6gTKH004VyhWyLKAZxuvMBIwu19WLgPI+0v0Kjl6+WVwgpceaNikdZfOIR8135Ld0OtOeIaMuMCvRoNHLtWckbfIvI0Q0M+HDKS7OGTd6rA7J2xfmL3gUrLmhkeuLFBSE4ESOokxwctdGN2vdIKatymlgo5wPxgrgoyqCj3FAm8Ve8K6W+mAuFavOs/NXYCoHu2S/ZEpd7L0D7Nrlo9u2zpGJqB5T1gA5wUhaIjFGTYjsV4wN7jLJ1i3mS4Bp5OyzS9yEVDWsMgYdMIHks9L31xiaH99qbzpGp2TzvH5pFj35wRFwmV1BB5s6PMq/rdCVj/6it6voqTJMkPi4tjziwi6ruZJ9cjUgSTzkbDeZRFj2PvLBYBnTgdC+5+T3OGHMY4Fj8cWB5cd8yxn4a/Q288T33+jv+T8A7u5TfxA2FFH8bt/g+5oCAgICAgICAgICAgP8IPwEVpSmmY4CXBgAAAABJRU5ErkJggg==">
                              </div>
                              <div class="header-details">
                                 <h3>Hyerbercafe<span>Lahore Defence</span></h3>
                                 <ul>
                                    <li><i class="icon-feather-watch margin-right-5"></i> qasim</li>
                                    <li><i class="icon-feather-map margin-right-5"></i> <a target="_blank" href="https://www.google.com/maps/search/?api=1&amp;query=qasim">qasim</a>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="background-image-container" style="background-image: url(&quot;https://quickqr.codentheme.com/storage/restaurant/cover/default.png&quot;);"></div>
            </div>
            <div class="card-body menu-category-item menu-category-4143" style="">
               <div class="section-menu" data-id="3989" data-name="Namakeen" data-price="$200.00" data-amount="200" data-description="Haha hehe hoho" data-image-url="https://quickqr.codentheme.com/storage/menu/1653412514628d12a21f120.jpg">
                  <div class="menu-item list">
                     <div class="menu-image">
                        <img class="" src="https://quickqr.codentheme.com/storage/menu/1653412514628d12a21f120.jpg" data-original="https://quickqr.codentheme.com/storage/menu/1653412514628d12a21f120.jpg" alt="Namakeen" style="">
                        <div class="badge abs nonveg"><i class="fa fa-circle"></i></div>
                     </div>
                     <div class="menu-content">
                        <div class="menu-detail">
                           <div class="menu-title">
                              <h4>Namakeen</h4>
                              <div class="menu-price">$200.00</div>
                           </div>
                        </div>
                        <div class="menu-recipe">Haha hehe hoho</div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="card-body menu-category-item menu-category-4144" style="display: none;"></div>
         </div>
      </div>
      <!-- .Content  -->

      <!-- Bottom Panel  -->
      <div class="footer none" id="view-order-wrapper">
         <div class="clearfix"></div>
         <div class="order-footer">
            <div class="view-order">
               <div class="">
                  <div class="item"><span id="view-order-quantity">1</span> Item(s)</div>
                  <span class="price"><span id="view-order-price"></span></span>
               </div>
               <button class="order-btn" id="viewOrderBtn">View Order <i class="icon-material-outline-keyboard-arrow-right"></i></button>
            </div>
         </div>
      </div>
      <!-- Bottom Panel  -->

      <!-- Customized Menu -->
      <div id="viewOrder" class="sidenav bottom">
         <div class="sidebar-header bg-white">
            <div class="navbar-heading">
               <h4>My Order</h4>
            </div>
            <button type="button" id="dismiss" class="btn ml-auto">
            <i class="icon-feather-x"></i>
            </button>
         </div>
         <div class="your-order-content">
            <form type="post" data-id="1909" id="send-order-form">
               <div class="sidebar-wrapper">
                  <div class="section">
                     <div class="your-order-items"></div>
                  </div>
                  <div class="section3">
                     <div class="total-price">
                        <div class="grand-total">
                           <span>Grand Total</span><span class="float-right"><span class="your-order-price"></span></span>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
         <div class="order-success-message none">
            <i class="icon-feather-check qr-success-icon"></i>
            <h4>Sent Successfully</h4>
         </div>
      </div>
      <!--Customized Menu-->

      <!-- Customized Menu -->
      <div id="menuCustomize" class="sidenav bottom">
         <div class="sidebar-header">
            <div class="navbar-heading">
               <h4></h4>
            </div>
            <button type="button" id="dismiss" class="btn ml-auto">
            <i class="icon-feather-x"></i>
            </button>
         </div>
         <div class="sidebar-wrapper">
            <div class="section">
               <p class="mb-0 customize-item-description"></p>
            </div>
            <div class="line-separate mt-0"></div>
            <div id="menu-variants">
               <div>
                  <div class="section">
                     <div class="extras-heading">
                        <div class="title">Size</div>
                     </div>
                     <div class="menu-variant-option">
                        <div class="extras menu-extra-item">
                           <label for="checkbox0" class="extra-item-title mb-0">Small</label>
                           <div class="d-flex align-items-center">
                              <div class="custom-control custom-radio mr-sm-2">
                                 <input type="radio" name="variant" class="custom-control-input" id="checkbox0">
                                 <label class="custom-control-label" for="checkbox0"></label>
                              </div>
                           </div>
                        </div>
                        <div class="extras menu-extra-item">
                           <label for="checkbox1" class="extra-item-title mb-0">Medium</label>
                           <div class="d-flex align-items-center">
                              <div class="custom-control custom-radio mr-sm-2">
                                 <input type="radio" name="variant" class="custom-control-input" id="checkbox1">
                                 <label class="custom-control-label" for="checkbox1"></label>
                              </div>
                           </div>
                        </div>
                        <div class="extras menu-extra-item">
                           <label for="checkbox2" class="extra-item-title mb-0">Large</label>
                           <div class="d-flex align-items-center">
                              <div class="custom-control custom-radio mr-sm-2">
                                 <input type="radio" name="variant" class="custom-control-input" id="checkbox2">
                                 <label class="custom-control-label" for="checkbox2"></label>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="line-separate mt-0"></div>
               </div>
            </div>
            <div class="section menu-extra-wrapper">
               <div class="extras-heading">
                  <div class="title">Extras</div>
                  <small>Please select extra items</small>
               </div>
               <div id="customize-extras">
               </div>
            </div>
         </div>
         <!-- Bottom Panel  -->
         <div class="footer footer-extras">
            <div class="clearfix"></div>
            <div class="section">
               <div class="row no-gutters">
                  <div class="col-3 p-r-10">
                     <div class="add-menu">
                        <div class="add-btn add-item-btn">
                           <div class="wrapper h-100">
                              <div class="addition menu-order-quantity-decrease">
                                 <i class="icon-feather-minus"></i>
                              </div>
                              <div class="count">
                                 <span class="num" id="menu-order-quantity">1</span>
                              </div>
                              <div class="addition menu-order-quantity-increase">
                                 <i class="icon-feather-plus"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-9 p-l-10">
                     <button type="button" class="btn btn-primary btn-block" id="add-order-button">Add <span id="order-price"></span></button>
                  </div>
               </div>
            </div>
         </div>
         <!-- Bottom Panel  -->
      </div>
      <!--Customized Menu-->

      <!-- Call the waiter -->
      <div id="call-waiter-box" class="sidenav bottom">
         <div class="sidebar-header bg-white">
            <div class="navbar-heading">
               <h4>Call the Waiter</h4>
            </div>
            <button type="button" id="dismiss" class="btn ml-auto">
            <i class="icon-feather-x"></i>
            </button>
         </div>
         <div>
            <form type="post" data-id="1909" id="call-waiter-form">
               <div class="sidebar-wrapper">
                  <div class="section">
                     <div class="form-group" id="table-number-field">
                        <div class="form-line">
                           <input type="number" name="table" class="form-control" placeholder="Table Number">
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Bottom Panel  -->
               <div class="footer footer-extras">
                  <div class="clearfix"></div>
                  <div class="section">
                     <small class="form-error"></small>
                     <button type="submit" class="btn btn-primary btn-block" id="send-call-waiter">Send</button>
                  </div>
               </div>
               <!-- Bottom Panel  -->
            </form>
         </div>
      </div>

      <div class="overlay"></div>

   </body>
</html>