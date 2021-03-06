<!DOCTYPE html>
<html lang="en">

<head>
    <?php  include 'includes/head.php'; ?>
    <style>
        .colors > div {
            float: left;
            width: 150px;
        }

        .col-demo > .col {
            background-clip: content-box;
            background-color: #ccc;
            height: 400px;
        }
    </style>
    <title>Hello, world!</title>
</head>
<body style="margin: 1rem;">
<?php  include 'includes/header.php'; ?>
<div style="background: #fff; float: left; width: 100%;">
    <div class="m-4 w-100 float-left colors">
        <div class="p-3 mb-2 logo-text-s"></div>
    </div>
    <div class="m-4 w-100 float-left colors">
        <div class="p-3 mb-2 logo-text"></div>
    </div>
    <div class="m-4 w-100 float-left colors">
        <div class="p-3 mb-2 bg-primary text-white">.bg-primary</div>
        <div class="p-3 mb-2 bg-secondary text-dark" style="width: 150px;">.bg-secondary</div>
        <div class="p-3 mb-2 bg-cta text-white" style="width: 150px;">.bg-cta</div>
    </div>
    <div class="m-4 w-100 float-left colors">
        <div class="p-3 mb-2 bg-dark text-white">.bg-dark</div>
        <div class="p-3 mb-2 bg-white text-dark">.bg-white</div>
    </div>
    <div class="m-4 w-100 float-left colors">
        <div class="p-3 mb-2 bg-grey-900 text-white">.bg-grey-900</div>
        <div class="p-3 mb-2 bg-grey-800 text-white">.bg-grey-800</div>
        <div class="p-3 mb-2 bg-grey-700 text-white">.bg-grey-700</div>
        <div class="p-3 mb-2 bg-grey-600 text-white">.bg-grey-600</div>
        <div class="p-3 mb-2 bg-grey-500 text-dark">.bg-grey-500</div>
        <div class="p-3 mb-2 bg-grey-400 text-dark">.bg-grey-400</div>
        <div class="p-3 mb-2 bg-grey-300 text-dark">.bg-grey-300</div>
    </div>
    <div class="m-4 w-100 float-left colors">
        <div class="p-3 mb-2 bg-danger text-white">.bg-danger</div>
        <div class="p-3 mb-2 bg-success text-white">.bg-success</div>
        <div class="p-3 mb-2 bg-link text-white">.bg-link</div>
    </div>
    <div class="m-4 w-100 float-left">
        <h1>Heading H1</h1>
        <h2>Heading H2</h2>
        <h3>Heading H3</h3>
        <h4>Heading H4</h4>
        <h5>Heading H5</h5>
        <h6>Heading H6</h6>
    </div>
    <div class="m-4 w-100 float-left">
        <span class="subtitle-l">Subtitle L</span><br>
        <span class="subtitle-m">Subtitle M</span>
    </div>
    <div class="m-4 w-100 float-left">
        <span class="body-l">Body / L</span><br>
        <span class="body-m">Body / M</span><br>
        <span class="body-s">Body / S</span><br>
        <span class="body-xs">Body / XS</span><br>
    </div>
    <div class="m-4 w-100 float-left">
        <span class="body-heading-l">Body heading L</span><br>
        <span class="body-heading-m">Body heading M</span><br>
        <span class="body-heading-s">Body heading S</span><br>
        <span class="body-heading-xs">Body heading XS</span><br>
    </div>
    <div class="m-4 w-100 float-left">
        <span class="body-underline-m">Body / M</span><br>
        <span class="body-underline-s">Body / S</span><br>
        <span class="body-underline-xs">Body / XS</span><br>
    </div>
    <div class="m-4 w-100 float-left">
        <div class="card surface" style="width: 18rem; height: 14rem;">
            <div class="card-body">
                Card Base / Card Hover / Dropdown
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row col-demo">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
        </div>
    </div>
    <div class="m-4 w-100 float-left">
        <i class="icon icon-fill-dark icon-s icon-arrow-L"></i>
        <i class="icon icon-fill-dark icon-s icon-arrow-R"></i>
        <i class="icon icon-fill-dark icon-s icon-arrow-up"></i>
        <i class="icon icon-fill-dark icon-s icon-arrow-follow "></i>
        <i class="icon icon-fill-dark icon-s icon-born"></i>
        <i class="icon icon-fill-dark icon-s icon-bullet"></i>
        <i class="icon icon-fill-dark icon-s icon-certificate"></i>
        <i class="icon icon-fill-dark icon-s icon-chat"></i>
        <i class="icon icon-fill-dark icon-s icon-close-mini"></i>
        <i class="icon icon-fill-dark icon-s icon-close"></i>
        <i class="icon icon-fill-dark icon-s icon-document"></i>
        <i class="icon icon-fill-dark icon-s icon-download"></i>
        <i class="icon icon-fill-dark icon-s icon-dropdown-close"></i>
        <i class="icon icon-fill-dark icon-s icon-dropdown-open"></i>
        <i class="icon icon-fill-dark icon-s icon-email"></i>
        <i class="icon icon-fill-dark icon-s icon-employed"></i>
        <i class="icon icon-fill-dark icon-s icon-help"></i>
        <i class="icon icon-fill-dark icon-s icon-link"></i>
        <i class="icon icon-fill-dark icon-s icon-managment"></i>
        <i class="icon icon-fill-dark icon-s icon-manufacturers"></i>
        <i class="icon icon-fill-dark icon-s icon-minus"></i>
        <i class="icon icon-fill-dark icon-s icon-open"></i>
        <i class="icon icon-fill-dark icon-s icon-phone"></i>
        <i class="icon icon-fill-dark icon-s icon-placeholder"></i>
        <i class="icon icon-fill-dark icon-s icon-saved"></i>
        <i class="icon icon-fill-dark icon-s icon-search"></i>
        <i class="icon icon-fill-dark icon-s icon-tick"></i>
        <i class="icon icon-fill-dark icon-s icon-time"></i>
        <i class="icon icon-fill-dark icon-s icon-worldwide"></i>
    </div>
    <div class="m-4 w-100 float-left">
        <i class="icon icon-fill-dark icon-add-to-bag"></i>
        <i class="icon icon-fill-dark icon-code"></i>
        <i class="icon icon-fill-dark icon-distributors"></i>
        <i class="icon icon-fill-dark icon-exporters"></i>
        <i class="icon icon-fill-dark icon-menu"></i>
        <i class="icon icon-fill-dark icon-new-AI"></i>
        <i class="icon icon-fill-dark icon-new-design"></i>
        <i class="icon icon-fill-dark icon-new-more"></i>
        <i class="icon icon-fill-dark icon-new-tools"></i>
        <i class="icon icon-fill-dark icon-other-side"></i>
        <i class="icon icon-fill-dark icon-photo"></i>
        <i class="icon icon-fill-dark icon-premium"></i>
        <i class="icon icon-fill-dark icon-pricing"></i>
        <i class="icon icon-fill-dark icon-profile"></i>
        <i class="icon icon-fill-dark icon-providers"></i>
        <i class="icon icon-fill-dark icon-search-by-photo"></i>
        <i class="icon icon-fill-dark icon-sort"></i>
        <i class="icon icon-fill-dark icon-zoom"></i>
    </div>
    <div class="m-4 w-100 float-left">
        <i class="icon icon-fill-dark icon-l icon-24-7"></i>
        <i class="icon icon-fill-dark icon-l icon-deep-search"></i>
        <i class="icon icon-fill-dark icon-l icon-innovation"></i>
        <i class="icon icon-fill-dark icon-l icon-language"></i>
        <i class="icon icon-fill-dark icon-l icon-world"></i>
    </div>
    <div class="m-4 w-100 float-left">
        <i class="icon icon-social-size icon-facebook"></i>
        <i class="icon icon-social-size icon-linkedin"></i>
        <i class="icon icon-social-size icon-twitter"></i>
        <i class="icon icon-social-size icon-xing"></i>
    </div>
    <div class="m-4 w-100 float-left">
        <i class="icon icon-flag-size icon-AU"></i>
        <i class="icon icon-flag-size icon-BE"></i>
        <i class="icon icon-flag-size icon-BL"></i>
        <i class="icon icon-flag-size icon-DE"></i>
        <i class="icon icon-flag-size icon-GB"></i>
        <i class="icon icon-flag-size icon-IT"></i>
        <i class="icon icon-flag-size icon-JA"></i>
        <i class="icon icon-flag-size icon-SW"></i>
    </div>
    <div class="m-4 w-100 float-left">
        <i class="icon icon-category-size icon-apparel-and-fashion"></i>
        <i class="icon icon-category-size icon-associations-and-agencies"></i>
        <i class="icon icon-category-size icon-business-services"></i>
        <i class="icon icon-category-size icon-chemical-and-pharma"></i>
        <i class="icon icon-category-size icon-company-equipment"></i>
        <i class="icon icon-category-size icon-construction"></i>
        <i class="icon icon-category-size icon-electrical-engineering"></i>
        <i class="icon icon-category-size icon-food-and-agriculture"></i>
        <i class="icon icon-category-size icon-home-and-garden"></i>
        <i class="icon icon-category-size icon-machinery"></i>
        <i class="icon icon-category-size icon-measuring-and-optics"></i>
        <i class="icon icon-category-size icon-medical-and-laboratory"></i>
        <i class="icon icon-category-size icon-minerals-and-materials"></i>
        <i class="icon icon-category-size icon-office-supplies"></i>
        <i class="icon icon-category-size icon-security-and-protection"></i>
        <i class="icon icon-category-size icon-sport-leisure"></i>
        <i class="icon icon-category-size icon-transport-and-packaging"></i>
        <i class="icon icon-category-size icon-used-equipment"></i>
        <i class="icon icon-category-size icon-vehicles"></i>
        <i class="icon icon-category-size icon-vendors-parts"></i>
        <i class="icon icon-category-size icon-warehouse-equipment"></i>
        <i class="icon icon-category-size icon-workshop-tools"></i>
    </div>

    <div class="m-4 w-100 float-left">
        <button type="button" class="btn btn-cta btn-sm">Call to action</button>
        <button type="button" class="btn btn-primary btn-sm">Primary</button>
        <button type="button" class="btn btn-outline-ghost btn-sm">Ghost</button>
        <button class="btn btn-icon btn-icon-right btn-outline-ghost btn-sm">Ghost<i
                    class="icon icon-placeholder icon-fill-dark"></i></button>
    </div>

    <div class="m-4 w-100 float-left">
        <button type="button" class="btn btn-cta">Call to action</button>
        <button type="button" class="btn btn-primary">Primary</button>
        <button type="button" class="btn btn-outline-ghost">Ghost</button>
        <button class="btn btn-icon btn-icon-right btn-outline-ghost">Ghost<i
                    class="icon icon-placeholder icon-fill-dark"></i></button>
    </div>

    <div class="m-4 w-100 float-left">
        <button type="button" class="btn btn-cta btn-lg">Call to action</button>
        <button type="button" class="btn btn-primary btn-lg">Primary</button>
        <button type="button" class="btn btn-outline-ghost btn-lg">Ghost</button>
        <button class="btn btn-icon btn-icon-right btn-outline-ghost btn-lg">Ghost<i
                    class="icon icon-placeholder icon-fill-dark"></i></button>
    </div>

    <!--<div class="m-4 w-100 float-left">
        <button class="btn btn-icon btn-outline-ghost btn-lg"><i class="icon icon-placeholder icon-fill-dark"></i></button>
    </div>-->

    <div class="m-4 w-100 float-left">
        <button class="btn btn-icon btn-link"><i class="icon icon-arrow-L icon-fill-dark"></i>Exit Checkout</button>
    </div>

    <div class="m-4 float-left">
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Label for input S</label>
                <input type="email" class="form-control  form-control-sm has-error" id="exampleInputEmail1"
                       aria-describedby="emailHelp" placeholder="Text">
                <small id="emailHelp" class="form-text text-danger">We'll never share your email with anyone
                    else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail2">Label for input M</label>
                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Text">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Text"></textarea>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class=" custom-control-label" for="customCheck1">Custom checkbox</label>
            </div>
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="switch1">
                <label class=" custom-control-label" for="switch1">Toggle this custom switch</label>
            </div>
        </form>
    </div>

    <div class="m-4 float-left">
        <div class="form-group">
            <div class="dropdown dropdown-filter-search">
                <input type="text" class="dropdown-toggle dropdown-filter-search-button form-control"
                       id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                       readonly value="Bitte auswählen...">
                <i class="icon icon-fill-dark icon-s icon-dropdown-open"></i>
                <div class="dropdown-menu scrollable-menu" aria-labelledby="dropdownMenuButton">
                    <div class="dropdown-filter-search-field-box">
                        <input type="text" placeholder="Suche Land...">
                        <i class="icon icon-fill-dark icon-s icon-search"></i>
                    </div>
                    <div class="dropdown-divider"></div>
                    <div class="dropdown-filter-search-clean">Aufräumen</div>
                    <div class="dropdown-item-list">
                        <?php foreach (['Österreich', 'Weißrussland', 'Belgien', 'Österreich', 'Österreich', 'Weißrussland', 'Belgien', 'Österreich', 'Österreich', 'Weißrussland', 'Belgien', 'Österreich'] as $i => $name) { ?>
                            <div class="dropdown-item">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input"
                                           id="dropdown_item_<?php echo $i; ?>">
                                    <label class=" custom-control-label" for="dropdown_item_<?php echo $i; ?>"><?php echo $name; ?></label>
                                    <i class="icon icon-fill-dark icon-s icon-placeholder"></i>
                                </div>
                            </div>

                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="m-4 float-left">
        <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top"
                title="Tooltip on top">
            Tooltip on top
        </button>
        <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right"
                title="Tooltip on right">
            Tooltip on right
        </button>
        <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom"
                title="Tooltip on bottom">
            Tooltip on bottom
        </button>
        <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left"
                title="Tooltip on left">
            Tooltip on left
        </button>
    </div>

    <div class="m-4 float-left">
        <button type="button" class="btn btn-secondary" data-toggle="tooltip-white" data-placement="top"
                title="Tooltip on top">
            Tooltip on top WHITE
        </button>
    </div>

    <div class="m-4 w-100 float-left">
        <button type="button" class="btn btn-filter-tag btn-light">
            <i class="icon icon-flag-size icon-DE btn-filter-tag-left"></i>
            Deutschland
            <i class="icon icon-fill-dark icon-s icon-close-mini btn-filter-tag-right"></i>
        </button>
    </div>
</div>
<div style="float: left; width: 100%;">
    <div class="m-4">
        <a href="#" class="card surface card-category card-hover">
            <div class="row no-gutters">
                <div class="col card-category-col-image"
                     style="background-image: url('/img/categories/image 2-1.jpg');"></div>
                <div class="col my-auto">
                    <div class="card-body mx-auto">
                        <p class="card-text">Temperatursensoren</p>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="m-4">
        <a href="#" class="card surface card-company card-hover">
            <div class="card-img-top" style="background-image: url('/img/companies/image 2-1.jpg');"></div>
            <div class="card-body">
                <p class="card-text">IDEC Elektrotechnik</p>
            </div>
        </a>
    </div>
    <div class="m-4">
        <div class="card card-news">
            <div class="row no-gutters">
                <div class="col card-news-col-image"
                     style="background: #ccc;/*background-image: url('/img/companies/image 2-1.jpg');*/"></div>
                <div class="col">
                    <div class="card-body">
                        <p class="card-news-date body-xs">
                            <i class="icon icon-fill-gray-500 icon-s icon-time"></i>
                            10.11.2018 23:00
                        </p>
                        <a href="#" class="card-text">Verbesserung der Lieferstruktur deutscher Produkte an EPCOS
                            AG.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="m-4">
        <div class="card surface card-company-list card-hover">
            <div class="row no-gutters">
                <div class="col card-company-list-col-image"
                     style="background-image: url('/img/companies/image 5.jpg');"></div>
                <div class="col card-company-list-col-body">
                    <div class="card-body">
                        <i class="icon icon-flag-size icon-DE float-left mr-2"></i>
                        <div class="h6">EPCOS AG</div>
                        <div class="card-company-list-info body-heading-xs">
                            <i class="icon icon-fill-gray-500 icon-s icon-manufacturers float-left mr-1"></i>
                            <span class="float-left mt-1 mr-3">Hersteller</span>
                            <i class="icon icon-fill-gray-500 icon-s icon-worldwide float-left mr-1"></i>
                            <span class="float-left mt-1">Deutschland</span>
                        </div>
                        <div class="card-company-list-info-right">
                            <a href="#" class="mr-4 body-xs card-company-list-further-products">weitere Produkte (8)</a>
                            <a href="#"
                               class="btn btn-icon btn-icon-right btn-outline-ghost btn-sm card-company-list-details-btn">DETAILS<i
                                        class="icon icon-arrow-follow icon-fill-dark"></i></a>
                        </div>
                        <div class="card-company-list-text body-s">Das Familienunternehmen BENEDICT aus Österreich
                            erzeugt Niederspannungs-Schaltgeräte die sich durch besondere Merkmale von ihren
                            Mitbewerbern abheben. Erfahrungen aus jahrzehntelangem Forschen und Ent...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="m-4">
        <div class="card card-news-preview card-hover">
            <div class="row no-gutters">
                <div class="col card-news-preview-col-image"
                     style="background: #ccc;/*background-image: url('/img/companies/image 2-1.jpg');*/"></div>
                <div class="col">
                    <div class="card-body">
                        <p class="card-news-preview-date body-xs">
                            <i class="icon icon-fill-gray-500 icon-s icon-time"></i>
                            10.11.2018 23:00
                        </p>
                        <a href="#" class="card-news-preview-title body-heading-s">Verbesserung der Lieferstruktur
                            deutscher Produkte an EPCOS AG.</a>
                    </div>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col">
                    <div class="card-body body-s card-news-preview-text">
                        Facilisis arcu, congue massa quisque. Aliquam adipiscing vitae morbi feugiat senectus arcu.
                        Accumsan, praesent sed neque dolor ut duis egestas. Tempor leo viverra sem in. Viverra vulputate
                        sem scelerisque porttitor eget ligula sed risus...
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="m-4">
        <div class="card card-product-preview card-hover">
            <div class="row no-gutters">
                <div class="col card-product-preview-col-image"
                     style="background-image: url('/img/products/image 2-1.jpg');"></div>
                <div class="col">
                    <div class="card-body">
                        <p class="card-product-preview-title">Temperatursensoren</p>
                        <div class="card-product-preview-title-text">Facilisis arcu, congue massa quisque. Aliquam
                            adipiscing vitae morbi feugiat
                            senectus arcu. Accumsan, praesent sed neque dolor ut duis egestas. Tempor leo viverra sem
                            in.
                        </div>
                    </div>
                </div>
                <div>
                    <div class="card-body">
                        <a href="#"
                           class="btn btn-icon btn-icon-right btn-outline-ghost btn-sm card-company-list-details-btn">DETAILS<i
                                    class="icon icon-arrow-follow icon-fill-dark"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="m-4">
        <a href="#" class="tab-item">PRODUKTE</a>
    </div>
    <div class="m-4">
        <div class="submenu-listing">
            <div class="submenu-listing-body">
            </div>
        </div>
    </div>
    <div class="m-4">
        <div class="pagination-custom">
            <div class="pagination-custom-page pagination-custom-page-arrow pagination-custom-page-arrow-l">&nbsp;
                <i class="icon icon-fill-dark icon-s icon-arrow-L"></i>
            </div>
            <a href="#" class="pagination-custom-page">1</a>
            <a href="#" class="pagination-custom-page">2</a>
            <a href="#" class="pagination-custom-page">3</a>
            <a href="#" class="pagination-custom-page">4</a>
            <div class="pagination-custom-page">...</div>
            <a href="#" class="pagination-custom-page">10</a>
            <a href="#" class="pagination-custom-page pagination-custom-page-arrow pagination-custom-page-arrow-r">&nbsp;
                <i class="icon icon-fill-dark icon-s icon-arrow-R"></i>
            </a>
        </div>
    </div>
</div>

<?php  include 'includes/footer.php'; ?>
</body>
</html>