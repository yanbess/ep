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
            }
            ;
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

    $(document).ready(function () {
        let headerHeight = $('header').height() + 30;
        $(window).scroll(function () {
            if ($(this).scrollTop() > headerHeight) {
                $('header').addClass('fixed');
                $('.header-placeholder').addClass('show');
            } else {
                $('header').removeClass('fixed');
                $('.header-placeholder').removeClass('show');
            }
            ;
        });
    });

    $('.dropdown-filter-search .dropdown-menu').on('click', function (e) {
        e.stopPropagation();
    });

    $('.dropdown-filter-search :checkbox').change(function () {
        DropdownFilterSearch_setNumberChecked($(this));
    });

    $('.dropdown-filter-search .dropdown-filter-search-clean').on('click', function (e) {
        $(this).closest(".dropdown-menu").find('input:checkbox:checked').prop('checked', false);
        DropdownFilterSearch_setNumberChecked($(this));
    });

    $(".dropdown-filter-search .dropdown-filter-search-field-box input").on("keyup", function () {
        DropdownFilterSearch_searchAndFilter($(this));
    });

});

/*function DropdownFilterSearch_searchAndFilter() {
    // Declare variables
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName('li');

    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}*/

function DropdownFilterSearch_searchAndFilter(obj) {
    var value = obj.val().toLowerCase();
    obj.closest(".dropdown-menu").find('.dropdown-item-list .dropdown-item').filter(function () {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
}

function DropdownFilterSearch_setNumberChecked(obj) {
    var numberChecked = obj.closest(".dropdown-menu").find('input:checkbox:checked').length;
    obj.closest(".dropdown-filter-search").find('.dropdown-filter-search-button').val('Ausgewählt: ' + numberChecked);
}