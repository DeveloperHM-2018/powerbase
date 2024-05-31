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
</script>
</body>

</html>