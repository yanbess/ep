<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'head.php'; ?>
    <title>Hello, world!</title>
</head>

  <body>

    <?php include 'header.php'; ?>
    
    <section class="container-fluid welcom">
        <img class="mb-3" src="img/logo-text-w.png" alt="">
        <p class="mb-0">Märkte erschließen – <br class="d-block d-xl-none">Chancen nutzen</p>
        
        <form class="d-flex d-xl-none">
            <div class="input-group">
                <input type="text" class="form-control header-search-field" placeholder="Search" aria-label="Search" aria-describedby="button-search">
                <div class="input-group-append">
                    <button class="btn btn-sm btn-primary" type="button" id="button-search"><i class="icon icon-fill-white icon-s icon-search"></i></button>
                </div>
            </div>
        </form>
    </section>
    
    <section class="container homepage">
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header bg-primary">
                        Firmen
                    </div>
                    <div class="card-body">
                        <?php for($i = 0; $i < 4; $i++) { ?>
                        <a href="#" class="card surface card-company card-hover mb-2">
                            <div class="card-img-top" style="background-image: url('/img/companies/image 2-1.jpg');"></div>
                            <div class="card-body">
                                <p class="card-text">IDEC Elektrotechnik</p>
                            </div>
                        </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header bg-cta">
                        Produkte
                    </div>
                    <div class="card-body">
                        <?php for($i = 0; $i < 5; $i++) { ?>
                        <a href="#" class="card surface card-category card-hover mb-2">
                            <div class="row no-gutters flex-nowrap">
                                <div class="col card-category-col-image" style="background-image: url('/img/categories/image 2-1.jpg');"></div>
                                <div class="col my-auto">
                                    <div class="card-body mx-auto">
                                        <p class="card-text">Temperatursensoren</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-header bg-success">
                        Unternehmens News
                    </div>
                    <div class="card-body">
                        <?php for($i = 0; $i < 4; $i++) { ?>
                        <div class="card surface card-news-preview card-hover mb-2">
                            <div class="row no-gutters">
                                <div class="col card-news-preview-col-image" style="background: #ccc;/*background-image: url('/img/companies/image 2-1.jpg');*/"></div>
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
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
    
  </body>

</html>