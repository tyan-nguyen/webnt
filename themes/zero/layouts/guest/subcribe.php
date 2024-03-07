<?php 
$setting = \app\modules\dashboard\models\Options::getOptions('SETTING');
?>
<section class="subscribe no-padding">
  <div class="container">
    <div class="row">
        <div class="col-lg-4">
          <div class="subscribe-call-to-acton">
              <h3>GỌI NGAY</h3>
              <h4><?= $setting['site_hotline_text']?></h4>
          </div>
        </div><!-- Col end -->

        <div class="col-lg-8">
          <div class="ts-newsletter row align-items-center">
              <div class="col-md-5 newsletter-introtext">
                <h4 class="text-white mb-0">YÊU CẦU TƯ VẤN</h4>
                <p class="text-dark">Để lại số điện thoại chúng tôi sẽ liên hệ bạn</p>
              </div>

              <div class="col-md-7 newsletter-form">
                <form action="#" method="post">
                    <div class="form-group">
                      <label for="newsletter-email" class="content-hidden">Đăng ký nhận thông tin</label>
                      <input type="email" name="email" id="newsletter-email" class="form-control form-control-lg" placeholder="Nhập số điện thoại và Enter..." autocomplete="off">
                    </div>
                </form>
              </div>
          </div><!-- Newsletter end -->
        </div><!-- Col end -->

    </div><!-- Content row end -->
  </div>
  <!--/ Container end -->
</section>