<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="hero-wrap hero-bread" style="background-image: url('<?php echo get_theme_uri('images/rumah4.jpg'); ?>');">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <p class="breadcrumbs"><span class="mr-2"><?php echo anchor(base_url(), 'Home'); ?></span> <span>Tentang Kami</span></p>
        <h1 class="mb-0 bread">Tentang Kami</h1>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(<?php echo get_theme_uri('images/rumah1.jpg'); ?>);">
        <a href="https://www.youtube.com/embed/6m4No9KU2C4" class="icon popup-vimeo d-flex justify-content-center align-items-center">
          <span class="icon-play"></span>
        </a>
      </div>
      <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
        <div class="heading-section-bold mb-4 mt-md-3">
          <div class="ml-md-0">
            <h2 class="mb-4">Selamat Datang di Toko Online <?php echo get_store_name(); ?></h2>
          </div>
        </div>
        <div class="pb-md-5 text-dark">
          <p>WS Store adalah toko bangunan yang menyediakan kebutuhan pembangunan dalam renovasi rumah, kantor dan bangunan lainnya.</p>
          <p>Kami menjual berbagai macam bahan bangunan seperti Genteng, Pasir, Semen, dan Cat tembok.
            Kami juga menjual berbagai macam lampu, berbagai macam kunci, keramik, pintu, wastafel, kloset, shower, keran, dll.</p>
          <p>Toko Bangunan Ws Store melayani pembelian dan pengiriman ke seluruh Indonesia termasuk ke luar pulau dan luar Jabodetabek.</p>
          <p><a href="<?php echo site_url('browse'); ?>" class="btn btn-info">Belanja sekarang!</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section testimony-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <span class="subheading text-info">Testimony</span>
        <h2 class="mb-4">Apa yang pelanggan kami katakan?</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel">
          <?php if (count($reviews) > 0) : ?>
            <?php foreach ($reviews as $review) : ?>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(<?php echo base_url('assets/uploads/users/' . $review->profile_picture); ?>)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line"><?php echo $review->review_text; ?></p>
                    <p class="name"><?php echo $review->name; ?></p>
                    <span class="position"><?php echo get_formatted_date($review->review_date); ?></span>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          <?php else : ?>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>
</section>


<section class="ftco-section" style="margin-left: 280px;">
  <div class="container">
    <div class="row no-gutters ftco-services">
      <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services mb-md-0 mb-4">
          <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
            <span class="flaticon-shipped"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Gratis Ongkir</h3>
            <span>Belanja minimal Rp <?php echo format_rupiah(get_settings('min_shop_to_free_shipping_cost')); ?></span>
          </div>
        </div>
      </div>
      <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services mb-md-0 mb-4">
          <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
            <span class="flaticon-award"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Kualitas Terbaik</h3>
            <span>Bahan awet dan tahan lama</span>
          </div>
        </div>
      </div>
      <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services mb-md-0 mb-4">
          <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
            <span class="flaticon-customer-service"></span>
          </div>
          <div class="media-body">
            <h3 class="heading">Bantuan</h3>
            <span>Bantuan 24/7 Selalu Online</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>