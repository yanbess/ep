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
                        <li class="breadcrumb-item"><a href="index.php">Exportpages</a></li>
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
                    <li class="active">
                        <a href="company-info.php" class="tab-item">Beschreibung</a>
                    </li>
                    <li>
                        <a href="company-products.php" class="tab-item">PRODUKTE</a>
                    </li>
                    <li>
                      <a href="company-news.php" class="tab-item">News</a>
                    </li>
                </ul>
            </div>
        </section>
        
        <section class="company-info">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3">
                        <ul class="sidebar-info">
                            <li>
                                <i class="icon icon-fill-dark icon-s icon-worldwide"></i>
                                <b>Adresse</b>
                                Adresse <br>St.-Martin-Strasse 53 <br>81669 <br>München <br>Deutschland
                            </li>
                            <li>
                                <i class="icon icon-fill-dark icon-s icon-born"></i>
                                <b>Gründung</b>
                                1989
                            </li>
                            <li>
                                <i class="icon icon-fill-dark icon-s icon-employed"></i>
                                <b>Mitarbeiter</b>
                                20080
                            </li>
                            <li>
                                <i class="icon icon-fill-dark icon-s icon-managment"></i>
                                <b>Management</b>
                                Gerhard Pegam <br>Joachim Zichlarz <br>Dr. Werner Faber
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-xl-9">
                        <p class="subtitle-m"><b>Über das Unternehmen.</b></p>
                        <p>Seit 1969 ist das Familienunternehmen als Electronic Distributor Vertragspartner von Premium-Herstellern elektromechanischer Bauteile. Der Handel mit Steckverbindungen, Relais, Schaltern, Kabeln, Werkzeugen, Kunststoffartikeln und elektrischen Bauelementen findet weltweit statt. Die eigene Kabelkonfektion ist die Ergänzung zum Handel und bietet kundenspezifische, qualitativ hochwertige Lösungen.</p>
                        <div class="row d-none d-xl-flex">
                            <div class="col-xl-6">
                                <a data-fancybox href="https://www.youtube.com/watch?v=YJPgoOCOBFg" class="video-box">
                                    <img src="img/video.jpg" alt="">
                                </a>
                            </div>
                            <div class="col-xl-6">
                                <a data-fancybox href="https://www.youtube.com/watch?v=YJPgoOCOBFg" class="video-box">
                                    <img src="img/video.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="download-box d-none d-xl-block">
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
            </div>
        </section>

        <?php include 'footer.php'; ?>

        <script>
            $(document).ready(function(){
                $('.company-header + *').offset().top;
            })
        </script>
  </body>

</html>