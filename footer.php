<footer class="footer">
    <div class="footer-body">
        <div class="footer-col">
            <h6 class="footer-col-title">Allgemein</h6>
            <div class="footer-col-links">
                <a href="#">AGB & Nutzungsbedingungen</a><br>
                <a href="#">Datenschutz & Cookies</a><br>
                <a href="#">Impressum</a>
            </div>
        </div>
        <div class="footer-col">
            <h6 class="footer-col-title">Mitglieder</h6>
            <div class="footer-col-links">
                <a href="#">Einloggen</a><br>
                <a href="#">Registrieren</a><br>
                <a href="#">Newsletter abonnieren</a>
            </div>
        </div>
        <div class="footer-col">
            <h6 class="footer-col-title">Fragen?</h6>
            <div class="footer-col-links">
                <a href="#">Über uns</a><br>
                <a href="#">Anfrage</a>
            </div>
        </div>
        <div class="footer-col">
            <div class="footer-col-contacts-title">Exportpages International GmbH</div>
            <div class="footer-col-contacts-text">
                Becker-Göring-Straße 15<br>
                76307 Karlsbad<br>
                Germany
            </div>
            <div class="footer-col-social">
                <a href="#" class="icon icon-facebook-bg"></a>
                <a href="#" class="icon icon-twitter-bg"></a>
                <a href="#" class="icon icon-linkedin-bg"></a>
                <a href="#" class="icon icon-xing-bg"></a>
            </div>
        </div>
        <div class="footer-copyrigh">Alle Rechte vorbehalten © 2019.</div>
    </div>
</footer>

<div class="modal fade" id="newsCard" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body pb-0">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <p class="d-flex align-items-center light-gray">
                    <i class="icon icon-fill-gray-500 icon-s icon-time mr-3"></i>
                    10.11.2018 23:00
                </p>
                <p class="h5">"Verbesserte Lieferstruktur der DEUTSCH Produkte bei Börsig" von Börsig GmbH Electronic-Distributor</p>
                <img class="mb-3" src="img/news.png" alt="">
                <p>Seit 2017 ist Börsig offizieller Distributor für DEUTSCH Produkte des Herstellers TE Connectivity. Die Nachfrage am Markt ist kontinuierlich gestiegen, ein Grund für Börsig sich die komplette Produktserie auf Lager zu legen sowie die Preisstruktur zu verbessern.</p>
                <p>Der Electronic-Distributor Börsig aus Neckarsulm hat vom weltgrößten Hersteller von Anschlusslösungen – TE Connectivity – bereits 2017 das offizielle Distributionsrecht für die DEUTSCH Produkte erhalten. Bei den DEUTSCH Serien handelt es sich um Produkte, welche für Anwendungen im Bereich der industriellen und gewerblichen Transporte</p>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script src="js/jquery.fancybox.js"></script>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
        $('[data-toggle="tooltip-white"]').tooltip({
            template: '<div class="tooltip tooltip-white" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
        });

        $('.header-catalog-mobile').click(function () {
            $(this).hide();
            $('.header-catalog-list-mobile').show();
            $('.header-catalog-mobile-close').show();
        });

        $('.header-catalog-mobile-close').click(function () {
            $(this).hide();
            $('.header-catalog-list-mobile').hide();
            $('.header-catalog-mobile').show();
        });

        $('.header-catalog-list-mobile-item').click(function () {

            if ($(this).hasClass('header-catalog-list-mobile-item-active')) {
                $('.header-catalog-list-mobile-item-active').removeClass('header-catalog-list-mobile-item-active');
                $('.header-catalog-sublist-mobile-body').hide();
            } else {
                $('.header-catalog-list-mobile-item-active').removeClass('header-catalog-list-mobile-item-active');
                $(this).addClass('header-catalog-list-mobile-item-active');
                $('.header-catalog-sublist-mobile-body').hide();
                $(this).children('.header-catalog-sublist-mobile-body').show();
            }
        });

        $('.header-search-mobile').click(function () {
            $('.header-search-box-mobile').show();
        });

        $('.header-search-box-mobile-close').click(function () {
            $('.header-search-box-mobile').hide();
        });

        $('.header-catalog-button').click(function () {
            if ($(this).hasClass('header-catalog-button-active')) {
                $('.header-catalog-list, .header-catalog-sublist').hide();
                $(this).removeClass('header-catalog-button-active');
            } else {
                $('.header-catalog-list').show();
                $(this).addClass('header-catalog-button-active');
            }
        });

        $('.header-catalog-list-item').hover(function () {
            $('.header-catalog-sublist').hide();
            $('#header-catalog-sublist-' + $(this).data('submenu')).show();
        });

        $('.header-catalog-sublist-box-close').click(function () {
            $('.header-catalog-sublist').hide();
        });

        $('.header-login').click(function () {
            $('.header-login-tooltip').addClass('show');
        });

        $('.header-language').click(function () {
            $('.header-language-tooltip').addClass('show');
        });

        $('.header-language-mobile-flag').click(function () {
            $('.header-language-tooltip-mobile').addClass('show');
            $('.header-language-mobile-flag').hide();
            $('.header-language-mobile-close').show();
        });

        $('.header-language-mobile-close').click(function () {
            $('.header-language-tooltip-mobile').removeClass('show');
            $('.header-language-mobile-flag').show();
            $('.header-language-mobile-close').hide();
        });

        $('.header-catalog-list-mobile-auth-box-login').click(function () {
            $('.header-login-tooltip-mobile').addClass('show');
        });

        $('.icon-close').click(function () {
            $('.header-login-tooltip-mobile').removeClass('show');
        });


        $(document).mouseup(function (e) {
            var headerLoginTooltip = $(".header-login-tooltip");
            var headerLanguageTooltip = $(".header-language-tooltip");

            if (!headerLoginTooltip.is(e.target) && headerLoginTooltip.has(e.target).length === 0) {
                $('.header-login-tooltip').removeClass('show');
            }

            if (!headerLanguageTooltip.is(e.target) && headerLanguageTooltip.has(e.target).length === 0) {
                $('.header-language-tooltip').removeClass('show');
            }
        });
    
        // to top button
        
        $(document).ready(function () {
            $(document.body).append('<button type="button" id="back_top"><i class="icon icon-fill-dark icon-s icon-arrow-up"></i></button>');
            $('#back_top').hide();

            $(window).scroll(function () {
                if ($(this).scrollTop() > 120) {
                    $('#back_top').fadeIn('slow');
                } else {
                    $('#back_top').fadeOut('slow');
                };
            });

            $('#back_top').on('click', function (e) {
                e.preventDefault();
                $('html, body').animate({
                    scrollTop: 0
                }, 800);
                $('#back_top').fadeOut('slow').stop();
            });
        });
      
      // fixed menu
      
      $(document).ready(function(){
          let headerHeight =  $('header').height() + 30;
          $(window).scroll(function () {
              if ($(this).scrollTop() > headerHeight) {
                  $('header').addClass('fixed');
                  $('.header-placeholder').addClass('show');
              } else {
                  $('header').removeClass('fixed');
                  $('.header-placeholder').removeClass('show');
              };
          });
      });
    });
</script>