<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php'; ?>
    <title>Company page - Information</title>
</head>

    <body>

    <?php include 'header.php'; ?>

        <section class="companies-header">
            <div class="container">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Exportpages</a></li>
                        <li class="breadcrumb-item active">Elektrotechnik</li>
                    </ol>
                </nav>
                <h1 class="mb-4">Elektrotechnik</h1>
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
        
        <section class="companies-list py-3 py-xl-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                       <div class="card categories-filters">
                            <div class="card-body">
                                <form>
                                    <label class="mb-3">Unternehmensland</label>
                                    <p><em>тут будет выпадающий список</em></p>
                                    <label class="mb-3">Unternehmensland</label>
                                    <p><em>тут будет выпадающий список</em></p>
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
                    <div class="col-xl-8">
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
                                <div class="col card-company-list-col-image" style="background-image: url('/img/companies/image 5.jpg');"></div>
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
                                            <a href="#" class="btn btn-icon btn-icon-right btn-outline-ghost btn-sm card-company-list-details-btn">DETAILS<i class="icon icon-arrow-follow icon-fill-dark"></i></a>
                                        </div>
                                        <div class="card-company-list-text body-s">Das Familienunternehmen BENEDICT aus Österreich
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

        <?php include 'footer.php'; ?>

  </body>

</html>