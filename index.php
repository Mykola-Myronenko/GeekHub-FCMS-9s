<?php
$data = require_once 'data.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Alecto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<!-- MAIN HEADER -->
<header class="main-header-block">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light header-navigation">
            <a class="navbar-brand" href="#"> <img src="<?php echo $data['headerBlock']['mainLogo'] ?>" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerNavbar"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="headerNavbar">
                <ul class="navbar-nav ml-auto">
                    <?php
                    foreach ($data['headerBlock']['mainMenu'] as $menuItem) {
                        ?>
                        <li class="nav-item <?php if ($menuItem['isActive']) {
                            echo 'active';
                        } ?>">
                            <a class="nav-link <?php echo $menuItem['class'] ?>" href="<?php echo $menuItem['url'] ?>">
                                <?php echo $menuItem['title'] ?>
                            </a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </nav>
        <div class="row align-items-center header-slider">
            <div class="col-md-12 justify-content-bottom text-center">
                <?php foreach ($data['mainSlider'] as $sliderItem) {
                    ?>
                    <h1>
                        <strong class="text-acccent"><?php echo $sliderItem['title']['main'] ?>
                        </strong><?php echo $sliderItem['title']['second'] ?>
                    </h1>
                    <p class="another-text"><?php echo $sliderItem['description'] ?></p>
                    <div class="row justify-content-center">
                        <div class="col-auto">
                            <a class="main-slider-button" href="<?php echo $sliderItem['link']['url'] ?>">
                                <?php echo $sliderItem['link']['text'] ?>
                            </a>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</header>
<!-- ABOUT US -->
<section class="about-us-block">
    <div class="container">
        <header>
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h2><?php echo $data['aboutUsBlock']['info']['title'] ?></h2>
                    <div class="line"></div>
                    <p class="another-text">
                        <?php echo $data['aboutUsBlock']['info']['description'] ?>
                    </p>
                </div>
            </div>
        </header>
        <ul class="row about-us-list">
            <?php foreach ($data['aboutUsBlock']['aboutUsItem'] as $aboutUsItem) {
                ?>
                <li class="col-12 col-sm-6 col-lg-3 <?php echo $aboutUsItem['class'] ?>">
                    <div class="ellipse"></div>
                    <h3 class="text-center"><?php echo $aboutUsItem['title'] ?></h3>
                    <p class="about-us-details text-center">
                        <?php echo $aboutUsItem['description'] ?>
                    </p>
                </li>
                <?php
            }
            ?>
        </ul>
        <div class="row justify-content-center">
            <div class="col-auto">
                <a class="learn-more-button text-center" href="<?php echo $data['aboutUsBlock']['link']['url'] ?>"
                   role="button">
                    <?php echo $data['aboutUsBlock']['link']['text'] ?>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- LOREM IPSUM -->
<section class="lorem-ipsum-block">
    <div class="container">
        <header>
            <div class="row justify-content-center">
                <h2 class="hidden"><?php echo $data['loremIpsumBlock']['info']['title'] ?></h2>
            </div>
        </header>
        <div class="row">
            <div class="col-lg-6">
                <!-- so far empty -->
            </div>
            <div class="col-lg-6">
                <h3><?php echo $data['loremIpsumBlock']['info']['title'] ?></h3>
                <p class="lorem-ipsum-details">
                    <?php echo $data['loremIpsumBlock']['info']['details'] ?>
                </p>
                <a class="learn-more-button text-center" href="<?php echo $data['loremIpsumBlock']['link']['url'] ?>"
                   role="button">
                    <?php echo $data['loremIpsumBlock']['link']['text'] ?>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- IPSUM DOLOR -->
<section class="ipsum-dolor-block">
    <div class="container">
        <header>
            <div class="row justify-content-center">
                <h2 class="hidden"><?php echo $data['ipsumDolorBlock']['info']['title'] ?></h2>
            </div>
        </header>
        <div class="row">
            <div class="col-lg-6">
                <h3><?php echo $data['ipsumDolorBlock']['info']['title'] ?></h3>
                <p class="ipsum-dolor-details">
                    <?php echo $data['ipsumDolorBlock']['info']['details'] ?>
                </p>
                <a class="learn-more-button text-center" href="<?php echo $data['ipsumDolorBlock']['link']['url'] ?>"
                   role="button">
                    <?php echo $data['ipsumDolorBlock']['link']['text'] ?>
                </a>
            </div>
            <div class="col-lg-6">
                <!-- so far empty -->
            </div>
        </div>
    </div>
</section>
<!-- FEEDBACK BLOCK -->
<div class="feedback-block">
    <div class="container">
        <div class="row align-items-center feedback-slider">
            <div class="col-lg-12 justify-content-center text-center">
                <?php foreach ($data['feedbackSlider'] as $sliderItem) {
                    ?>
                    <img src="<?php echo $sliderItem['person']['url'] ?>"
                         alt="<?php echo $sliderItem['person']['name'] ?>" class="person">
                    <h2>
                        <strong class="text-acccent"><?php echo $sliderItem['title']['main'] ?></strong>
                        <?php echo $sliderItem['title']['second'] ?>
                    </h2>
                    <p class="another-text"> <?php echo $sliderItem['description'] ?></p>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>
<!-- OUR SERVICES -->
<section class="our-services-block">
    <div class="container">
        <header>
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h2><?php echo $data['ourServicesBlock']['info']['title'] ?></h2>
                    <div class="line"></div>
                    <p class="another-text">
                        <?php echo $data['ourServicesBlock']['info']['description'] ?>
                    </p>
                </div>
            </div>
            <ul class="row align-items-center service-list">
                <?php foreach ($data['ourServicesBlock']['servicesItem'] as $serviceItem) {
                    ?>
                    <li class="col-lg-6 service-list-item">
                        <div class="<?php echo $serviceItem['class'] ?>"></div>
                        <h3><?php echo $serviceItem['title'] ?></h3>
                        <p class="service-details">
                            <?php echo $serviceItem['description'] ?>
                        </p>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </header>
    </div>
</section>
<!-- OUR TEAM  -->
<section class="our-team-block">
    <div class="container">
        <header>
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h2><?php echo $data['ourTeamBlock']['info']['title'] ?></h2>
                    <div class="line"></div>
                    <p class="another-text">
                        <?php echo $data['ourTeamBlock']['info']['description'] ?>
                    </p>
                </div>
            </div>
        </header>
    </div>
    <div class="gallery">
        <ul class="row no-gutters team-list ">
            <?php foreach ($data['ourTeamBlock']['teamGallery'] as $teamItem) {
                ?>
                <li class="col team-list-item">
                    <img src="<?php echo $teamItem['url'] ?>" alt="<?php echo $teamItem['name'] ?>" class="member">
                </li>
                <?php
            }
            ?>
        </ul>
    </div>
</section>
<!-- PRICING  -->
<section class="pricing-block">
    <div class="container">
        <header>
            <div class="row justify-content-center">
                <div class="col-12 text-center">
                    <h2><?php echo $data['pricingBlock']['info']['title'] ?></h2>
                    <div class="line"></div>
                    <p class="another-text">
                        <?php echo $data['pricingBlock']['info']['description'] ?>
                    </p>
                </div>
            </div>
            <ul class="row justify-content-center price-list">
                <?php foreach ($data['pricingBlock']['pricingItem'] as $pricingItem) {
                    ?>
                    <li class="col-10 col-sm-6 col-md-3 price-list-item">
                        <div class="block">
                            <div class="price">
                                <p class="product-price">
                                    <?php echo $pricingItem['price'] . $data['pricingBlock']['currency'] ?>
                                </p>
                                <p class="another-text"><?php echo $pricingItem['another'] ?></p>
                            </div>
                            <div class="details">
                                <p class="product-details">
                                    <?php echo $pricingItem['details'] ?>
                                </p>
                            </div>
                            <a href="<?php echo $pricingItem['link']['url'] ?>" class="purchase-button">
                                <?php echo $pricingItem['link']['text'] ?>
                            </a>
                        </div>
                    </li>
                    <?php
                }
                ?>
            </ul>
        </header>
    </div>
</section>
<!-- TRY OUR -->
<section class="try-block">
    <div class="container">
        <div class="row align-items-center row-content">
            <div class="col-lg-12 justify-content-center text-center">
                <h2><?php echo $data['tryBlock']['title']['lPart'] ?>
                    <strong class="text-acccent"><?php echo $data['tryBlock']['title']['main'] ?></strong>
                    <?php echo $data['tryBlock']['title']['rPart'] ?>
                </h2>
                <h2><?php echo $data['tryBlock']['title']['second'] ?></h2>
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <a class="try-template-button text-center" href="<?php echo $data['tryBlock']['link']['url'] ?>"
                           role="button">
                            <?php echo $data['tryBlock']['link']['text'] ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- MAIN FOOTER -->
<footer class="main-footer-block">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light footer-navigation">
            <a class="navbar-brand" href="#">
                <img src="<?php echo $data['footerBlock']['footerLogo'] ?>" alt="logo">
            </a>
            <span class="copyright">
                <?php echo $data['footerBlock']['copyright']['text'] ?>
                <a class="brand" href="<?php echo $data['footerBlock']['copyright']['url'] ?>">
                    <?php echo $data['footerBlock']['copyright']['brand'] ?>
                </a>
            </span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footerNavbar"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="footerNavbar">
                <ul class="navbar-nav ml-auto">
                    <?php
                    foreach ($data['footerBlock']['footerMenu'] as $menuItem) {
                        ?>
                        <li class="nav-item <?php if ($menuItem['isActive']) {
                            echo 'active';
                        } ?>">
                            <a class="nav-link" href="<?php $menuItem['url'] ?>">
                                <?php echo $menuItem['title'] ?>
                            </a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </nav>
    </div>
</footer>
<script src="assets/js/libs.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>