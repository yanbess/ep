<!DOCTYPE html>
<html lang="en">

<head>
    <?php  include 'includes/head.php'; ?>
    <title>Company page - Information</title>
</head>

    <body>

    <?php  include 'includes/header.php'; ?>

        <!--section class="companies-header with-img" style="background-image:url(img/breadcrumb-wrapper.jpg);"-->
        <section class="companies-header">
            <div class="container">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Exportpages</a></li>
                        <li class="breadcrumb-item active">Elektrotechnik</li>
                    </ol>
                </nav>
                <h1 class="mb-4 h3">Elektrotechnik</h1>
                <div class="categories-statistic">
                    <div>
                        <i class="icon icon-fill-dark icon-exporters"></i>
                        <div class="count">
                            Exporteure <b>1 921</b>
                        </div>
                    </div>
                    <div>
                        <i class="icon icon-fill-dark icon-manufacturers"></i>
                        <div class="count">
                            Hersteller <b>1 803</b>
                        </div>
                    </div>
                    <div>
                        <i class="icon icon-fill-dark icon-distributors"></i>
                        <div class="count">
                            Händler <b>102</b>
                        </div>
                    </div>
                    <div>
                        <i class="icon icon-fill-dark icon-providers"></i>
                        <div class="count">
                            Dienstleister <b>16</b>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="companies-header fixed">
            <div class="container d-flex align-items-center">
                <p class="h4 m-0">Elektrotechnik</p>
                <div class="categories-statistic">
                    <div>
                        <i class="icon icon-fill-dark icon-exporters"></i>
                        <div class="count">
                            Exporteure <b>1 921</b>
                        </div>
                    </div>
                    <div>
                        <i class="icon icon-fill-dark icon-manufacturers"></i>
                        <div class="count">
                            Hersteller <b>1 803</b>
                        </div>
                    </div>
                    <div>
                        <i class="icon icon-fill-dark icon-distributors"></i>
                        <div class="count">
                            Händler <b>102</b>
                        </div>
                    </div>
                    <div>
                        <i class="icon icon-fill-dark icon-providers"></i>
                        <div class="count">
                            Dienstleister <b>16</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="companies-list py-3 py-xl-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3">
                       <div class="card categories-filters">
                            <div class="card-body p-3">
                                <form>
                                    <label class="mb-3">Unternehmensland</label>
                                    <div class="dropdown dropdown-filter-search mb-3">
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
                                    <label class="mb-3">Unternehmensland</label>
                                    <div class="dropdown dropdown-filter-search mb-3">
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
                                                                   id="dropdown_item_<?php echo $i; ?>-2">
                                                            <label class=" custom-control-label" for="dropdown_item_<?php echo $i; ?>-2"><?php echo $name; ?></label>
                                                            <i class="icon icon-fill-dark icon-s icon-placeholder"></i>
                                                        </div>
                                                    </div>

                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                                        <label class="custom-control-label" for="customCheck1">Nur zertifizierte Exporteure</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <p class="d-none d-xl-block body-heading-m">
                            <b>Unterkategorien</b>
                        </p>
                        <ul class="d-none d-xl-block sidebar-categories">
                            <li>
                                <a href="#">Abschirmmaterial (49)</a>
                            </li>
                            <li>
                                <a href="#">Computerhardware (87)</a>
                            </li>
                            <li>
                                <a href="#">Drosseln (36)</a>
                            </li>
                            <li>
                                <a href="#">Elektrische Antriebe (79)</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-9">
                        <p class="h4"><b>Gezeigte Unternehmen: 240</b></p>
                        <div class="d-flex align-items-center mb-4">
                            <ul class="active-filters">
                                <li class="gray pr-3">Filter:</li>
                                <li>
                                    <button type="button" class="btn btn-filter-tag btn-light">
                                        <i class="icon icon-flag-size icon-DE btn-filter-tag-left"></i>
                                        Deutschland
                                        <i class="icon icon-fill-dark icon-s icon-close-mini btn-filter-tag-right"></i>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="btn btn-filter-tag btn-light">
                                        <i class="icon icon-flag-size icon-IT btn-filter-tag-left"></i>
                                        Italien
                                        <i class="icon icon-fill-dark icon-s icon-close-mini btn-filter-tag-right"></i>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="btn btn-filter-tag btn-light">
                                        <i class="icon icon-flag-size icon-JA btn-filter-tag-left"></i>
                                        Japan
                                        <i class="icon icon-fill-dark icon-s icon-close-mini btn-filter-tag-right"></i>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="btn btn-filter-tag btn-light">
                                        <i class="icon icon-flag-size icon-SW btn-filter-tag-left"></i>
                                        Schweiz
                                        <i class="icon icon-fill-dark icon-s icon-close-mini btn-filter-tag-right"></i>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="btn btn-filter-tag btn-orange-o">Zurücksetzen</button>
                                </li>
                            </ul>
                        </div>
                        <?php for($i = 0; $i < 7; $i++) { ?>
                        <div class="card surface card-company-list card-hover mb-2">
                            <div class="row no-gutters">
                                <div class="card-company-list-img-box">
                                    <div class="col card-company-list-col-image" style="background-image: url('/img/companies/image 5.jpg');"></div>
                                    <div class="d-flex align-items-center d-xl-none">
                                        <i class="icon icon-flag-size icon-DE float-left mr-2"></i>
                                        <div class="h6 mb-0">EPCOS AG</div>
                                    </div>
                                </div>
                                <div class="col card-company-list-col-body">
                                    <div class="card-body">
                                        <div class="d-none d-xl-block">
                                            <i class="icon icon-flag-size icon-DE float-left mr-2"></i>
                                            <div class="h6">EPCOS AG</div>
                                        </div>
                                        <div class="card-company-list-info body-heading-xs order-xl-0 order-1">
                                            <div>
                                              <i class="icon icon-fill-gray-500 icon-s icon-manufacturers float-left mr-1"></i>
                                              <span class="float-left mt-1 mr-3">Hersteller</span>
                                            </div>
                                            <div>
                                              <i class="icon icon-fill-gray-500 icon-s icon-worldwide float-left mr-1"></i>
                                              <span class="float-left mt-1">Deutschland</span>
                                            </div>
                                        </div>
                                        <div class="card-company-list-info-right order-xl-0 order-1">
                                            <div class="d-none d-xl-block mr-4 body-xs card-company-list-further-products">
                                                <span>weitere Produkte (8)</span>
                                                <div class="tooltipe-box">
                                                    <ul>
                                                        <li>
                                                            <a href="company-product.php">Ethernet-Switches</a>
                                                        </li>
                                                        <li>
                                                            <a href="company-product.php">Ethernetsteckverbinder</a>
                                                        </li>
                                                        <li>
                                                            <a href="company-product.php">Installationskabel</a>
                                                        </li>
                                                        <li>
                                                            <a href="company-product.php">Netzwerkkomponenten</a>
                                                        </li>
                                                        <li>
                                                            <a href="company-product.php">Lichtwellenleiter-Patchkabel</a>
                                                        </li>
                                                        <li>
                                                            <a href="company-product.php">Eingang-Ausgang-Module</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <a href="company-info.php" class="btn btn-icon btn-icon-right btn-outline-ghost btn-sm card-company-list-details-btn">DETAILS<i class="icon icon-arrow-follow icon-fill-dark"></i></a>
                                        </div>
                                        <div class="card-company-list-text body-s order-0">Das Familienunternehmen BENEDICT aus Österreich
                                            erzeugt Niederspannungs-Schaltgeräte die sich durch besondere Merkmale von ihren
                                            Mitbewerbern abheben. Erfahrungen aus jahrzehntelangem Forschen und Ent...
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <div class="pagination-custom mt-4">
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
            </div>
        </section>

        <div class="footer-info">
            <div class="footer-info-body">
            Facilisis arcu, congue massa quisque. Aliquam adipiscing vitae morbi feugiat senectus arcu. Accumsan, praesent sed neque dolor ut duis egestas. Tempor leo viverra sem in. Viverra vulputate sem scelerisque porttitor eget ligula sed risus. Consectetur ut etiam sapien elementum ac at dolor. Sapien, leo penatibus nec facilisi sit habitasse pellentesque quisque pellentesque. Dolor quis aliquam eget cras nulla.<br>
            In non non scelerisque sed amet tortor maecenas sem faucibus. Proin sagittis, ac pulvinar nibh ultrices molestie nisl, cursus. Laoreet amet id orci, sed sit elit purus. Lacus, tellus lectus orci id nulla augue. Elementum metus, vitae at mollis mauris, enim semper in amet. Neque nunc arcu pharetra dignissim adipiscing. Magna rhoncus condimentum ipsum, pulvinar suspendisse nisi, facilisis facilisis tortor.<br>
            Rhoncus egestas sed turpis auctor ac quis ut lacus nulla. Auctor ac tristique volutpat euismod. Tempor massa bibendum varius nisl interdum fames porta dolor, lobortis. Aenean lectus morbi interdum est sit donec viverra eu. Nisl, pellentesque odio lobortis et id lacus in iaculis. Ut turpis volutpat eget erat ut amet, adipiscing odio nisl. Sit felis nulla viverra massa tortor, feugiat. Eget vitae dolor ipsum odio in sit urna. Id pulvinar velit magna risus. Morbi pretium felis euismod ornare consequat. Ipsum sed feugiat at id pellentesque. Vestibulum egestas ultrices cursus eget cursus enim. Arcu etiam mi phasellus fusce at sed amet libero tortor.
            </div>
        </div>

        <?php  include 'includes/footer.php'; ?>

        <script>
            $(document).ready(function(){
                let headerTop = $('.companies-list').offset().top;
                $(window).scroll(function () {
                    if ($(this).scrollTop() > headerTop) {
                        $('.companies-header.fixed').addClass('show');
                    } else {
                        $('.companies-header.fixed').removeClass('show');
                    };
                });
            });
        </script>
  </body>

</html>