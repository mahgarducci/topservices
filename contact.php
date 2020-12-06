<!DOCTYPE html>
<html lang="zxx" class="no-js">

<?php include 'header.php'; ?>

<!-- Start top-section Area -->
<section class="banner-area relative">
  <div class="overlay overlay-bg"></div>
  <div class="container">
    <div class="row justify-content-between align-items-center text-center banner-content">
      <div class="col-lg-12">
        <h1 class="text-white">Conatct</h1>
        <p>Days so us evening for herb bearing lesser man female night</p>
      </div>
    </div>
  </div>
</section>
<!-- End top-section Area -->

<!--================Contact Area =================-->
<section class="contact_area section-gap">
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
        <div class="contact_info">
          <div class="info_item">
            <i class="fa fa-home"></i>
            <h6>São Paulo, São Paulo</h6>
            <p>Rua Paracatu, 405</p>
          </div>
          <div class="info_item">
            <i class="fa fa-whatsapp"></i>
            <h6><a
                href="https://wa.me/5511985163502?text=Olá, vi seu trabalho pelo site e gostaria de fazer um orçamento."
                target="_blank">(11) 95397-5717</a></h6>
            <p>Seg a Sex 09:00 às 18:00 | opcional</p>
          </div>
          <div class="info_item">
            <i class="fa fa-envelope"></i>
            <h6><a href="#">seuemail@mail.com.br</a></h6>
            <p>Entre em contato a qualquer hora!</p>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <form class="row contact_form" action="contact_process.php" method="post" id="contactForm"
          novalidate="novalidate">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name"
                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" required="" />
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address"
                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" required="" />
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject"
                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" required="" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"
                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" required=""></textarea>
            </div>
          </div>
          <div class="col-md-12 text-right">
            <button type="submit" value="submit" class="btn primary-btn">
              Send Message
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!--================Contact Area =================-->

<?php include 'footer.php'; ?>
</body>

</html>