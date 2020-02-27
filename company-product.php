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
                        <li class="breadcrumb-item"><a href="companies-list.php">Elektrotechnik</a></li>
                        <li class="breadcrumb-item active">EPCOS AG</li>
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
        
        <section class="company-product py-5">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2">
                        <p>
                            <a href="company-products.php" class="btn btn-icon btn-link">
                                <i class="icon icon-arrow-L icon-fill-dark"></i>Zurück zu allen PRODUKTEN
                            </a>
                        </p>
                        <div class="card">
                            <div class="card-body">
                                <p class="h4 mb-4">Tunnelwärmer (LinaTherm) von Krones AG</p>
                                <img class="mb-4" src="img/product.jpg" alt="">
                                <ul class="dots-list">
                                    <li>Kompakter, einteiliger Wärmer, der die Behälter nach dem Abfüllen an den Taupunkt angleicht</li>
                                    <li>Clean-Design-Bauweise in Edelstahl AISI 304Pumpen in Edelstahl-Ausführung</li>
                                    <li>Langlebiges Kunststoff-Transportband Marathon Belt</li>
                                    <li>Integriertes Wärmetauscher-System CHESS</li>
                                    <li>Ein- und Auslauf auf je 1,2 Metern Höhe</li>
                                </ul>
                                <div class="download-box gray-bg">
                                    <p>
                                        <a class="text-primary" href="#">
                                            <i class="icon icon-fill-orange icon-s icon-download"></i> Herunterladen
                                        </a>
                                    </p>
                                    <p class="dark-blue">
                                      <i class="icon icon-fill-dark-blue icon-s icon-document"></i> Tunnelwärmer (LinaTherm) von Krones AG
                                    </p>
                                </div>
                            </div>
                        </div>
                        <p class="h4 my-5">Mehr produkte:</p>
                        <?php for($i = 0; $i < 3; $i++) { ?>
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
                                        <a href="#" class="btn btn-icon btn-icon-right btn-outline-ghost btn-sm card-company-list-details-btn">DETAILS<i class="icon icon-arrow-follow icon-fill-dark"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
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