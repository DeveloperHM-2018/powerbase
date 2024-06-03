<script src="<?= base_url() ?>assets/js/vendor/jquery.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap-bundle.js"></script>
<script src='<?= base_url() ?>assets/js/three.js'></script>
<script src="<?= base_url() ?>assets/js/gsap.js"></script>
<script src="<?= base_url() ?>assets/js/webgl.js"></script>
<script src="<?= base_url() ?>assets/js/hover-effect.umd.js"></script>
<script src="<?= base_url() ?>assets/js/swiper-bundle.js"></script>
<script src="<?= base_url() ?>assets/js/magnific-popup.js"></script>
<script src="<?= base_url() ?>assets/js/tilt.jquery.min.js"></script>
<script src="<?= base_url() ?>assets/js/purecounter.js"></script>
<script src="<?= base_url() ?>assets/js/imagesloaded-pkgd.js"></script>
<script src="<?= base_url() ?>assets/js/isotope-pkgd.js"></script>
<script src="<?= base_url() ?>assets/js/nice-select.js"></script>
<script src="<?= base_url() ?>assets/js/countdown.js"></script>
<script src="<?= base_url() ?>assets/js/wow.js"></script>
<script src="<?= base_url() ?>assets/js/ajax-form.js"></script>
<script src="<?= base_url() ?>assets/js/main.js"></script>
<script>
   const parallax = document.getElementById("parallax");
   window.addEventListener("scroll", function() {
      let offset = window.pageYOffset;
      parallax.style.backgroundPositionY = offset * 0.7 + "px";
   });

   const closeMenu = () => {
      document.querySelector('.offcanvas__area').classList.toggle('offcanvas-opened');
      document.querySelector('.body-overlay').classList.toggle('opened');
   }
</script>
<script>
   $(window).scroll(function() {
      if ($(this).scrollTop() > 120) {
         $('.header-f').addClass('fixed');
      } else {
         $('.header-f').removeClass('fixed');
      }
   });
</script>
<script>
   window.onscroll = () => {
      // menu.classList.remove('fa-times');
      // navbarLinks.classList.remove('active');
      if (window.scrollY > 60) {
         document.querySelector('.tp-header-sticky-cloned').classList.add('tp-header-pinned');
      } else {
         document.querySelector('.tp-header-sticky-cloned').classList.remove('tp-header-pinned');
      }
   }
</script>
</body>

</html>