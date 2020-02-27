<footer class="footer">
    <div class="footer-body">
        <div class="footer-col">
            <h6 class="footer-col-title">Allgemein</h6>
            <div class="footer-col-links">
                <a href="#">AGB &amp; Nutzungsbedingungen</a><br>
                <a href="#">Datenschutz &amp; Cookies</a><br>
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

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
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
    });
</script>