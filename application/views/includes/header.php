
<div id="loading">
   <div id="loading-center">
      <div id="loading-center-absolute">
         <div class="tp-preloader-content">
            <div class="tp-preloader-logo">
               <div class="tp-preloader-circle">
                  <svg width="190" height="190" viewBox="0 0 380 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <circle stroke="#D9D9D9" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round">
                     </circle>
                     <circle stroke="red" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round"></circle>
                  </svg>
                  <img src="<?= base_url() ?>assets/img/icons/Logo.webp" alt="Powebase" style="width:80%">
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<div class="back-to-top-wrapper">
   <button id="back_to_top" type="button" class="back-to-top-btn pink">
      <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
         <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
   </button>
</div>



<div class="search-area">
   <div class="search-inner p-relative">
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-8">
               <div class="search-wrapper">
                  <div class="search-close">
                     <button class="search-close-btn">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                           <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="search-overlay"></div>


<div class="offcanvas__area">
   <div class="offcanvas__close">
      <button class="offcanvas__close-btn offcanvas-close-btn">
         <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
         </svg>
      </button>
   </div>
   <div class="offcanvas__wrapper">
      <div class="offcanvas__content othr-hdr-main">
         <div class="offcanvas__top mb-40">
            <div class="offcanvas__logo">
               <a href="<?= base_url() ?>">
                  <img src="<?= base_url() ?>assets/img/icons/Logo.webp" alt="logo" class="w-200">
               </a>
            </div>
         </div>
         <div class="tp-main-menu-mobile fix d-xl-none mb-30"></div>


         <div class="offcanvas__contact d-none d-xl-block">
            <div class="offcanvas__text mb-30">
               <!-- <p class="text-justify">Our expertise spans a wide range of deep foundation techniques, Our dedicated team of professionals
                  possesses extensive and technical proficiency.</p> -->
            </div>
            <div class="offcanvas__gallery mb-30">
               <ul class="othr-hdr">

                  <li class="text-white">
                     <a href="<?= base_url() ?>" onclick="closeMenu();">HOME</a>
                  </li>

                  <li class="text-white">
                     <a href="<?= base_url() ?>#about" onclick="closeMenu();">ABOUT</a>
                  </li>

                  <li class="text-white">
                     <a href="<?= base_url() ?>#service" onclick="closeMenu();">SERVICE</a>
                  </li>

                  <li class="text-white"><a href="<?= base_url() ?>#contact" onclick="closeMenu();">CONTACT</a></li>
               </ul>
            </div>
         </div>
         <!-- <div class="offcanvas-info mb-30">
            <h4 class="offcanvas__title">Contacts</h4>

            <div class="offcanvas__contact-content d-flex">
               <div class="offcanvas__contact-content-icon">
                  <i class="fa-solid fa-phone"></i>
               </div>
               <div class="offcanvas__contact-content-content">
                  <a href="mailto:info@powerbasellc.com">info@powerbasellc.com</a>
               </div>
            </div>
         </div> -->
         <div class="offcanvas__social">
            <a class="icon facebook" href="<?= base_url() ?>"><i class="fab fa-instagram"></i></a>
            <a href="<?= base_url() ?>" class="icon twitter"><i class="fab fa-facebook"></i></a>

         </div>
      </div>
   </div>
</div>
<div class="body-overlay"></div>


<div class="tp-page-wrapper">
   <header class="tp-header-area p-relative otr-hdr ">
      <div class="tp-header-main-sticky tp-header-main p-relative">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-4 col-md-4 col-6">
                  <div class="tp-header-logo">
                     <a href="<?= base_url() ?>">
                        <img src="<?= base_url() ?>assets/img/icons/Logo.webp" alt="power base" class="othr-logo  wow fadeInUp" data-wow-duration="3s" data-wow-delay=".6s">
                     </a>
                  </div>
               </div>

               <div class="col-lg-4 d-none d-lg-block">
                  <div class="tp-header-main-menu">
                     <div class="tp-main-menu home-6 d-none d-xl-none">
                        <nav class="tp-main-menu-content">
                           <ul>

                              <li class="">
                                 <a href="<?= base_url() ?>">Home</a>
                              </li>

                              <li class="">
                                 <a href="<?= base_url() ?>#about">About</a>
                              </li>

                              <li class="">
                                 <a href="<?= base_url() ?>#service">Service</a>
                              </li>

                              <li class="">
                                 <a href="<?= base_url() ?>#contact">Contact</a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-md-6 col-6">
                  <div class="tp-header-main-right d-flex align-items-center">
                     <div class="tp-header-contact d-xl-flex align-items-center">
                        <div class="tp-header-hamburger  offcanvas-open-btn">
                           <img src="<?= base_url() ?>assets/img/icons/Hamburger_.webp" alt="power base" class="hamburger-btn">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>


   <header class="tp-header-area p-relative tp-int-menu tp-header-sticky-cloned">
      <div class="tp-header-main-sticky tp-header-main p-relative d-xl-block">
         <div class="container container-large">
            <div class="row align-items-center">
               <div class="col-lg-2 col-md-3 col-6">
                  <div class="tp-header-logo">
                     <a href="<?= base_url() ?>">
                        <img src="<?= base_url() ?>assets/img/icons/Logo.webp" alt="power base" class="w-161 offset-lg-1">
                     </a>
                  </div>
               </div>
               <div class="col-lg-7 d-none d-lg-block">
                  <div class="tp-header-main-menu">
                     <div class="tp-main-menu home-6  d-xl-none">
                        <nav class="tp-main-menu-content">
                           <ul>
                              <li class="">
                                 <a href="<?= base_url() ?>">Home</a>
                              </li>
                              <li class=""><a href="<?= base_url() ?>#about">About</a></li>

                              <li class="">
                                 <a href="<?= base_url() ?>#service">Services</a>
                              </li>

                              <li><a href="<?= base_url() ?>#contact">Contact</a></li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>

               <div class="col-lg-3 col-md-9 col-6">
                  <div class="tp-header-main-right d-flex align-items-center">
                     <div class="tp-header-contact d-xl-flex align-items-center">
                        <div class="tp-header-contact-icon search-open-btn d-none d-xl-none">
                           <span><i class="fa-sharp fa-regular fa-magnifying-glass"></i></span>
                        </div>
                        <div class="tp-header-contact-icon d-none d-xl-none">
                           <button class="cartmini-open-btn"><i class="fa-sharp fa-light fa-cart-shopping"></i></button>
                        </div>
                        <div class="tp-header-btn d-none d-xl-none">
                           <a class="tp-btn tp-icon-style pink d-none d-xl-none" href="<?= base_url() ?>">Get a Quote <span>
                                 <svg class="qodef-svg--custom-arrow qodef-m-arrow" xmlns="http://www.w3.org/2000/svg" width="14.2" height="14.2" viewBox="0 0 14.2 14.2">
                                    <g>
                                       <path d="M13.2 9V1h-8M13.4.8.7 13.5"></path>
                                       <path d="M13.2 9V1h-8M13.4.8.7 13.5"></path>
                                    </g>
                                    <g>
                                       <path d="M13.2 9V1h-8M13.4.8.7 13.5"></path>
                                       <path d="M13.2 9V1h-8M13.4.8.7 13.5"></path>
                                    </g>
                                 </svg>
                              </span></a>
                        </div>
                        <div class="tp-header-hamburger  offcanvas-open-btn">
                           <img src="<?= base_url() ?>assets/img/icons/Hamburger_.webp" alt="power base" class="hamburger-btn top-none">
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>