<?php // DEV MODE
$whitelist = array( '127.0.0.1', '::1' ); if(in_array($_SERVER['REMOTE_ADDR'], $whitelist)){ $dev = 1; } else { $dev = 0; } ?>

<!DOCTYPE html>
<html>
  <head>
    <title> <?=appname?> | <?php if(isset($title)){ echo $title; } ?></title>
    <meta name="description" content="<?php if(isset($desc)){ echo $desc; } else { echo ""; } ?>">
    <meta name="keywords" content="<?=appname?>">
    <meta name="theme-color" content="#006cff" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
    <link rel="shortcut icon" href="<?=root?>public/assets/img/icon.png">
    <link rel="stylesheet" href="<?=root?>public/assets/css/app.min.css">
    <script src="<?=root?>public/assets/js/jquery-3.4.1.min.js"></script>

    <!-- META INFO -->
    <meta property="og:site_name" content="<?=appname?> | <?php if(isset($title)){ echo $title; } ?>"/>
    <meta property="og:url" content="https://www.<?=appname?>.com"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?=appname?> | <?php if(isset($title)){ echo $title; } ?>"/>
    <meta property="og:description" content="<?php if(isset($desc)){ echo $desc; } ?>"/>
    <meta property="og:image" content="<?=root?>assets/img/social.jpg"/>
    <meta property="og:image:secure_url" content="<?=root?>assets/img/social.jpg"/>

    <!-- SEO SCHEMA -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "<?=appname?>",
            "image" : "https://<?=appname?>.com/assets/img/favicon.png",
            "@id": "",
            "url": "https://www.<?=appname?>.com/",
            "telephone": "",
            "address": {
            "@type": "PostalAddress",
            "streetAddress": "65 Commercial Area Cavalry Ground Lahore Pakistan",
            "addressLocality": "Punjab",
            "postalCode": "5400",
            "addressCountry": "PK"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 31.5014241,
            "longitude": 74.3633957
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday",
                "Sunday"
            ],
            "opens": "00:00",
            "closes": "23:59"
            },
            "sameAs": [
                "https://www.facebook.com/<?=appname?>"
                "https://www.twitter.com/<?=appname?>"
                "https://www.instagram.com/<?=appname?>"
            ]
        }
    </script>

  </head>
  <body onload="document.body.style.opacity='1'" id="body" style="#opacity:1" class="">

  <script>

    // FADEOUT BODY ON CLICK
    <?php if (isset($_SESSION['user_login'])==true){ } else { ?>
    var aElems = document.getElementsByTagName('a');
    for (var i = 0, len = aElems.length; i < len; i++) {
       aElems[i].onclick = function() {
          document.body.classList.add("bodyout");
          };
      }
      <?php } ?>

  </script>

  <header class="header a3 a4 a5 a6 a7 a8 a9 aa a1j sticky">
  <div class="ab">
    <div class="a9 ac[-16px] aa ad a0">
      <div class="ae af ag">

      <?php if (isset($_SESSION['user_login'])==true){ ?>

        <style>
          header .ab { max-width: 100%; }
        </style>

        <a href="<?=root?>dashboard" class="header-logo a8 ah ai" style="display: flex; align-items: center;">
        <img src="<?=root?>public/assets/img/icon.png" alt="logo" class="a8" style="max-width: 40px; height: fit-content;">
        <p style="font-size: 14px; margin: 0px; padding: 0 14px; font-family: 'Inter Bold'; text-transform: uppercase;"><strong>Dashboard</strong></p>
        </a>

      <?php } else { ?>

        <a href="<?=root?>" class="header-logo a8 ah ai" style="display: flex; align-items: center;">
        <img src="<?=root?>public/assets/img/icon.png" alt="logo" class="a8" style="max-width: 40px; height: fit-content;">
        <p style="font-size: 20px; margin: 0px; padding: 0 14px; font-family: 'Inter Bold'; text-transform: uppercase;"><strong>odereo</strong></p>
        </a>

      <?php } ?>

      </div>
      <div class="a9 ae ad aa a8">
        <div>
          <button id="navbarToggler" class="ah a4 aj ak/2 al[-50%] lg:am focus:an ao ap aq[6px] ar">
          <span class="a0 as[30px] at[2px] au[6px] ah av "></span>
          <span class="a0 as[30px] at[2px] au[6px] ah av "></span>
          <span class="a0 as[30px] at[2px] au[6px] ah av "></span>
          </button>
          <nav id="navbarCollapse" class="a4 ai lg:aw lg:ae xl:ax ay lg:a3 az ar aA[250px] a8 lg:ag lg:a8 aj aB lg:ah lg:aC lg:aD am">

          <?php if (isset($_SESSION['user_login'])==true){ ?>
            <ul class="aE lg:a9 mb-0">
              <li class="a0 aF">
                <a href="<?=root?>" class="menu-scroll aG aH group-hover:aI aJ lg:aK lg:aL lg:aM a9 aN lg:aO active">Home</a>
              </li>
          </ul>

            <?php } else { ?>
            <ul class="aE lg:a9 mb-0">
              <li class="a0 aF">
                <a href="<?=root?>" class="menu-scroll aG aH group-hover:aI aJ lg:aK lg:aL lg:aM a9 aN lg:aO active">Home</a>
              </li>
              <li class="a0 aF">
                <a href="<?=root?>features" class="menu-scroll aG aH group-hover:aI aJ lg:aK lg:aL lg:aM a9 aN lg:aO lg:aP xl:aQ">Features</a>
              </li>
              <li class="a0 aF">
                <a href="<?=root?>pricing" class="menu-scroll aG aH group-hover:aI aJ lg:aK lg:aL lg:aM a9 aN lg:aO lg:aP xl:aQ">Pricing</a>
              </li>
              <li class="a0 aF submenu-item">
                <a href="javascript:void(0)" class="aG aH group-hover:aI aJ lg:aK lg:aL lg:aR lg:aS a9 aN lg:aO lg:aP xl:aQ a0 after:a4 after:aT after:aU after:aV after:aW after:aX after:aY lg:after:aZ after:a_ after:ak/2 after:al[-50%] after:a10[-2px]">
                Company
                </a>
                <div class="submenu a0 lg:a4 as[250px] aB lg:a11[110%] a6 a12 lg:az a13 lg:ah lg:a14 lg:a15 group-hover:a16 lg:group-hover:a17 lg:group-hover:aB ay a18[top] a19 am">
                  <a href="<?=root?>about-us" class="ah a1a aH a1b hover:aI aq[10px] ae">
                  About Us
                  </a>
                  <a href="<?=root?>contact-us" class="ah a1a aH a1b hover:aI aq[10px] ae">
                  Contact Us
                  </a>
                  <a href="<?=root?>media-kit" class="ah a1a aH a1b hover:aI aq[10px] ae">
                  Media KIT
                  </a>
                  <a href="<?=root?>blog" class="ah a1a aH a1b hover:aI aq[10px] ae">
                  Blog
                  </a>
                  <a href="<?=root?>policy" class="ah a1a aH a1b hover:aI aq[10px] ae">
                  Policy
                  </a>
                  <a href="<?=root?>terms" class="ah a1a aH a1b hover:aI aq[10px] ae">
                  Terms & Conditions
                  </a>
                  <a href="<?=root?>affiliate" class="ah a1a aH a1b hover:aI aq[10px] ae">
                  Affiliate
                  </a>
                </div>
              </li>
            </ul>
            <?php } ?>

          </nav>
        </div>
        <?php if (isset($_SESSION['user_login'])==true){ ?>

          <a style="border-radius:6px;color:#fff" href="<?=root?>logout" class="aG a1k a1l a1m a1h a1n md:a1o lg:a1n xl:a1o hover:a1p a12 a1j a1q a19">
          Logout
          </a>

        <?php } else { ?>
        <div class="sm:a9 a1c am a1d lg:a1e">
          <a href="<?=root?>login" class="aG a1f a1g hover:aI a1h a1i a1j">
          Login
          </a>
          <a style="border-radius:6px;color:#fff" href="<?=root?>signup" class="aG a1k a1l a1m a1h a1n md:a1o lg:a1n xl:a1o hover:a1p a12 a1j a1q a19">
          Sign Up
          </a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</header>

<script src="<?=root?>public/assets/js/toast.js"></script>
<?php if (isset($account_nav)) { include "app/views/user/nav.php"; } ?>
<?php include $view ?>

<!-- FOOTER -->
<footer class="a1I a1J">
  <div class="ab">
    <div class="a9 a1t ac[-16px]">
      <div class="a8 lg:a1K/12 2xl:a1L/12 ae">
        <div class="a1M">
          <a href="<?=root?>" class="header-logo a8 ah ai" style="display: flex; align-items: center;padding-bottom:5px">
          <img src="<?=root?>public/assets/img/icon.png" alt="logo" class="a8" style="max-width: 40px; height: fit-content;">
          <p style="font-size: 20px; margin: 0px; padding: 0 14px; font-family: 'Inter Bold'; text-transform: uppercase;"><strong>odereo</strong></p>
          </a>
          <p class="aG a1g a1B mt-0">
           &copy; <?=date('Y')?> - All Rights Reserved by <?=appname?>
          </p>
        </div>
      </div>

      <div class="a8 md:a1Q/12 lg:a1L/12 2xl:a1L/12 ae">
        <div class="a1M a1R">
          <h3 class="a1B aH a1S a1A">
            <strong>Quick Links</strong>
          </h3>
          <div class="a9 a1t aa">
            <a href="javascript:void(0)" class="aG a1g hover:aI a1B a1T">Contact </a>
            <a href="javascript:void(0)" class="aG a1g hover:aI a1B a1T">About us</a>
            <a href="javascript:void(0)" class="aG a1g hover:aI a1B a1T">FAQ's   </a>
            <a href="javascript:void(0)" class="aG a1g hover:aI a1B a1T">Support </a>
          </div>
        </div>
      </div>
      <div class="a8 md:a1K/12 lg:a1U/12 2xl:aT/12 ae">
        <div class="a1M a1R md:a1V">
          <h3 class="a1B aH a1S a1A">
            <strong>Follow Us</strong>
          </h3>
          <div class="a9 a1t md:a1c aa">
            <a href="javascript:void(0)" class="a1g hover:aI">
              <svg width="9" height="18" viewBox="0 0 9 18" class="a1W">
                <path d="M8.13643 7.00049H6.78036H6.29605V6.43597V4.68597V4.12146H6.78036H7.79741C8.06378 4.12146 8.28172 3.89565 8.28172 3.55694V0.565004C8.28172 0.254521 8.088 0.000488281 7.79741 0.000488281H6.02968C4.11665 0.000488281 2.78479 1.58113 2.78479 3.92388V6.37952V6.94404H2.30048H0.65382C0.314802 6.94404 0 7.25452 0 7.70613V9.73839C0 10.1336 0.266371 10.5005 0.65382 10.5005H2.25205H2.73636V11.065V16.7384C2.73636 17.1336 3.00273 17.5005 3.39018 17.5005H5.66644C5.81174 17.5005 5.93281 17.4158 6.02968 17.3029C6.12654 17.19 6.19919 16.9924 6.19919 16.8231V11.0932V10.5287H6.70771H7.79741C8.11222 10.5287 8.35437 10.3029 8.4028 9.9642V9.93597V9.90775L8.74182 7.96017C8.76604 7.76258 8.74182 7.53678 8.59653 7.31097C8.54809 7.16984 8.33016 7.02871 8.13643 7.00049Z"></path>
              </svg>
            </a>
            <a href="javascript:void(0)" class="a1g hover:aI a1X">
              <svg width="19" height="14" viewBox="0 0 19 14" class="a1W">
                <path d="M16.3024 2.26076L17.375 1.02789C17.6855 0.693982 17.7702 0.437132 17.7984 0.308707C16.9516 0.771036 16.1613 0.925146 15.6532 0.925146H15.4556L15.3427 0.822406C14.6653 0.283022 13.8185 0.000488281 12.9153 0.000488281C10.9395 0.000488281 9.3871 1.49021 9.3871 3.2111C9.3871 3.31384 9.3871 3.46795 9.41532 3.57069L9.5 4.08439L8.90726 4.05871C5.29435 3.95597 2.33065 1.13063 1.85081 0.642612C1.06048 1.92686 1.5121 3.15973 1.99194 3.93028L2.95161 5.36864L1.42742 4.59809C1.45565 5.67686 1.90726 6.52446 2.78226 7.1409L3.54435 7.6546L2.78226 7.93713C3.2621 9.24706 4.33468 9.78645 5.125 9.99193L6.16935 10.2488L5.18145 10.8652C3.60081 11.8926 1.625 11.8156 0.75 11.7385C2.52823 12.8686 4.64516 13.1255 6.1129 13.1255C7.21371 13.1255 8.03226 13.0227 8.22984 12.9457C16.1331 11.2505 16.5 4.82926 16.5 3.54501V3.36521L16.6694 3.26248C17.629 2.44056 18.0242 2.00391 18.25 1.74706C18.1653 1.77275 18.0524 1.82412 17.9395 1.8498L16.3024 2.26076Z"></path>
              </svg>
            </a>
            <a href="javascript:void(0)" class="a1g hover:aI a1X">
              <svg width="18" height="14" viewBox="0 0 18 14" class="a1W">
                <path d="M17.5058 2.07168C17.3068 1.24929 16.7099 0.609661 15.9423 0.396451C14.5778 0.000488354 9.0627 0.000488281 9.0627 0.000488281C9.0627 0.000488281 3.54766 0.000488354 2.18311 0.396451C1.41555 0.609661 0.818561 1.24929 0.619565 2.07168C0.25 3.56415 0.25 6.61002 0.25 6.61002C0.25 6.61002 0.25 9.68634 0.619565 11.1484C0.818561 11.9707 1.41555 12.6104 2.18311 12.8236C3.54766 13.2195 9.0627 13.2195 9.0627 13.2195C9.0627 13.2195 14.5778 13.2195 15.9423 12.8236C16.7099 12.6104 17.3068 11.9707 17.5058 11.1484C17.8754 9.68634 17.8754 6.61002 17.8754 6.61002C17.8754 6.61002 17.8754 3.56415 17.5058 2.07168ZM7.30016 9.44267V3.77736L11.8771 6.61002L7.30016 9.44267Z"></path>
              </svg>
            </a>
            <a href="javascript:void(0)" class="a1g hover:aI a1X">
              <svg width="17" height="16" viewBox="0 0 17 16" class="a1W">
                <path d="M15.2196 0.000488281H1.99991C1.37516 0.000488281 0.875366 0.49798 0.875366 1.11984V14.3034C0.875366 14.9004 1.37516 15.4227 1.99991 15.4227H15.1696C15.7943 15.4227 16.2941 14.9252 16.2941 14.3034V1.09497C16.3441 0.49798 15.8443 0.000488281 15.2196 0.000488281ZM5.44852 13.1094H3.17444V5.77139H5.44852V13.1094ZM4.29899 4.75153C3.54929 4.75153 2.97452 4.15454 2.97452 3.43318C2.97452 2.71182 3.57428 2.11483 4.29899 2.11483C5.02369 2.11483 5.62345 2.71182 5.62345 3.43318C5.62345 4.15454 5.07367 4.75153 4.29899 4.75153ZM14.07 13.1094H11.796V9.55232C11.796 8.70659 11.771 7.58723 10.5964 7.58723C9.39693 7.58723 9.222 8.53246 9.222 9.4777V13.1094H6.94792V5.77139H9.17202V6.79124H9.19701C9.52188 6.19425 10.2466 5.59727 11.3711 5.59727C13.6952 5.59727 14.12 7.08974 14.12 9.12945V13.1094H14.07Z"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>


<script src="<?=root?>public/assets/js/app.js"></script>

<script>
console.log("%cHi there! 👋 We are <?=appname?>. we are disrupting the industry.", "font-size:14px");
console.log("%cAny doubts, get in touch at info@<?=appname?>.com", "font-size:12px");

// AVOID USING DELAY IF USE IS LOGGED IN
var root = "<?=parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)?>";
</script>