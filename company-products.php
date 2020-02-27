<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php'; ?>
    <title>Company page - Information</title>
</head>

    <body>

    <?php include 'header.php'; ?>
    
        <div class="breadcrumb-wrapper" style="background-image:url(img/breadcrumb-wrapper.jpg);">
          <div class="container d-none d-md-block">
            <nav>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Exportpages</a></li>
                <li class="breadcrumb-item"><a href="#">Elektrotechnik</a></li>
                <li class="breadcrumb-item active" aria-current="page">EPCOS AG</li>
              </ol>
            </nav>
          </div>
        </div>

        <section class="company-header">
            <div class="container">
                <div class="row mb-4 mb-md-5">
                    <div class="d-flex col-xl-2 order-0">
                        <div class="company-logo">
                            <img src="img/company-logo.png" alt="">
                        </div>
                        <div class="d-block d-xl-none">
                          <p class="h4 text-white mt-2 mb-4">
                              <i class="icon icon-flag-size icon-DE mr-3"></i>EPCOS AG
                          </p>
                          <ul class="d-flex">
                              <li>Hersteller</li>
                              <li>Deutschland</li>
                          </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 order-xl-0 order-1">
                        <p class="h3 text-white d-none d-xl-block">
                            <i class="icon icon-flag-size icon-DE mr-3"></i>EPCOS AG
                        </p>
                        <ul class="d-flex">
                            <li class="d-none d-xl-block">
                                <i class="icon icon-fill-dark icon-s icon-manufacturers"></i> Hersteller
                            </li>
                            <li class="d-none d-xl-block">
                                <i class="icon icon-fill-dark icon-s icon-worldwide"></i> Deutschland 
                            </li>
                            <li>
                                <i class="icon icon-fill-dark-blue icon-s icon-link"></i> <a href="#">Website</a>
                            </li>
                        </ul>
                        <ul class="sertificates-list">
                            <li class="star">
                                <i class="icon icon-fill-dark icon-premium"></i>
                            </li>
                            <li>ISO 9001</li>
                            <li>ISO 14001</li>
                            <li>VDA 6.1</li>
                            <li>ISO TS 16949</li>
                            <li>ISO 10409</li>
                            <li>
                                <button type="button">+8 Zertifikate</button>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xl-4 order-0 btns-group">
                        <a class="btn btn-cta" href="mailto:test@test.com">
                            ANFRAGE <i class="icon icon-fill-white icon-s icon-email"></i>
                        </a>
                        <a class="btn btn-outline-ghost" href="tel:123">
                            <i class="icon icon-fill-blue icon-s icon-phone"></i>
                        </a>
                    </div>
                </div>
                <ul class="company-nav">
                    <li>
                        <a href="company-info.php" class="tab-item">Beschreibung</a>
                    </li>
                    <li class="active">
                        <a href="company-products.php" class="tab-item">PRODUKTE</a>
                    </li>
                    <li>
                      <a href="company-news.php" class="tab-item">News</a>
                    </li>
                </ul>
            </div>
        </section>
        
        <section class="company-products py-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="sidebar-filters">
                            <p class="body-heading-m js-filters-toggle">
                                <b>Produkte und Dienstleistungen <br>von EPCOS AG</b> 
                                <i class="icon icon-fill-dark icon-s icon-dropdown-open"></i>
                            </p>
                            <form>
                                <div class="custom-control custom-checkbox mb-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                                    <label class="custom-control-label" for="customCheck1">Alles (61)</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                    <label class="custom-control-label" for="customCheck2">Aluminum-Elektrolytkondensa-toren (1)</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                                    <label class="custom-control-label" for="customCheck3">Blindleistungskondensatoren (1)</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                                    <label class="custom-control-label" for="customCheck4">Blindleistungsregler (1)</label>
                                </div>
                                <div class="custom-control custom-checkbox mb-2">
                                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                                    <label class="custom-control-label" for="customCheck5">Chipinduktivitäten (1)</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <?php for($i = 0; $i < 9; $i++) { ?>
                        <div class="card card-product-preview card-hover mb-2">
                            <div class="row no-gutters">
                                <div class="col card-product-preview-col-image" style="background-image: url('/img/products/image 2-1.jpg');"></div>
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
                                        <a href="company-product.php" class="btn btn-icon btn-icon-right btn-outline-ghost btn-sm card-company-list-details-btn">DETAILS<i class="icon icon-arrow-follow icon-fill-dark"></i></a>
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

        <script>
            $('.js-filters-toggle').on('click', function(){
                $(this).find('.icon').toggleClass('icon-dropdown-open');
                $(this).find('.icon').toggleClass('icon-dropdown-close');
                $(this).closest('.sidebar-filters').find('form').toggle();
            });
        </script>
  </body>

</html>