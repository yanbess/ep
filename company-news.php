<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'head.php'; ?>
  <title>Company page - news</title>
</head>

<body>

  <?php include 'header.php'; ?>

  <div class="breadcrumb-wrapper" style="background-image:url(img/breadcrumb-wrapper.jpg);">
    <div class="container">
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
          <div class="row mb-5">
              <div class="col-md-2">
                  <div class="company-logo">
                      <img src="img/company-logo.png" alt="">
                  </div>
              </div>
              <div class="col-md-6 company-info">
                  <p class="h3 text-white">
                      <i class="icon icon-flag-size icon-DE mr-3"></i>EPCOS AG
                  </p>
                  <ul class="d-flex">
                      <li>
                          <i class="icon icon-fill-dark icon-s icon-manufacturers"></i> Hersteller
                      </li>
                      <li>
                          <i class="icon icon-fill-dark icon-s icon-worldwide"></i> Deutschland 
                      </li>
                      <li>
                          <i class="icon icon-fill-dark-blue icon-s icon-link"></i> <a href="#">Website</a>
                      </li>
                  </ul>
                  <ul class="sertificates-list">
                      <li>
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
              <div class="col-md-4 d-flex align-items-end justify-content-end">
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
                  <a href="#" class="tab-item">PRODUKTE</a>
              </li>
              <li>
                  <a href="#" class="tab-item">Beschreibung</a>
              </li>
              <li class="active">
                <a href="#" class="tab-item">News</a>
              </li>
          </ul>
      </div>
  </section>
  
  <section class="container py-5">
      <div class="row company-news">
          <?php for($i = 0; $i < 6; $i++) { ?>
            <div class="col-md-4">
                <div class="card card-news-preview card-hover">
                    <div class="row no-gutters">
                        <div class="col card-news-preview-col-image" style="background: #ccc;"></div>
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
          <?php } ?>
      </div>
  </section>

  <?php include 'footer.php'; ?>

</body>

</html>