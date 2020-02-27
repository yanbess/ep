<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'head.php'; ?>
  <title>Company page - news</title>
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
              <li>
                  <a href="company-info.php" class="tab-item">Beschreibung</a>
              </li>
              <li>
                  <a href="company-products.php" class="tab-item">PRODUKTE</a>
              </li>
              <li class="active">
                <a href="company-news.php" class="tab-item">News</a>
              </li>
          </ul>
      </div>
  </section>
  
  <section class="container py-5">
      <div class="row company-news">
          <?php for($i = 0; $i < 6; $i++) { ?>
            <div class="col-xl-4">
                <div class="card card-news-preview card-hover">
                    <div class="row no-gutters">
                        <div class="col card-news-preview-col-image" style="background: #ccc;"></div>
                        <div class="col">
                            <div class="card-body">
                                <p class="card-news-preview-date body-xs">
                                    <i class="icon icon-fill-gray-500 icon-s icon-time"></i>
                                    10.11.2018 23:00
                                </p>
                                <a href="#" class="card-news-preview-title body-heading-s" data-target="#newsCard" data-toggle="modal">Verbesserung der Lieferstruktur deutscher Produkte an EPCOS AG.</a>
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
          <?php } ?>
      </div>
      
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
  </section>

  <?php include 'footer.php'; ?>

</body>

</html>