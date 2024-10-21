<?php include "layout/header.php" ?>
    <section class="google-map p-0">
      <div id="map" style="height: 500px;"></div>
      <script src="assets/js/google-map.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqrqPZOVegy1VIdyIcndxZY9YGoK-x0Yo&amp;callback=initMap"
        async defer></script>
    </section>

    <section class="contact-layout1 pt-0 pb-70">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="contact-panel">
              <div class="contact__panel-info">
                <div class="contact__panel-info-top">
                  <div class="contact-info-box">
                    <h4 class="contact__info-box-title">Our Location</h4>
                    <ul class="contact__info-list list-unstyled">
                      <li>2307 Beverley Rd Brooklyn, New York 11226 United States.</li>
                    </ul>
                  </div>
                  <div class="contact-info-box">
                    <h4 class="contact__info-box-title">Quick Contact</h4>
                    <ul class="contact__info-list list-unstyled">
                      <li>Email: <a href="#"><span class="__cf_email__" data-cfemail="#">[email&#160;protected]</span></a></li>
                      <li>Support: <a href="#"><span class="__cf_email__" data-cfemail="#">[email&#160;protected]</span></a></li>
                    </ul>
                  </div>
                </div>
                <div class="contact__panel-info-bottom">
                  <strong class="contact__panel-info-title">We will get back to you within 24 hours, or call us
                    everyday, 09:00 AM - 12:00 PM</strong>
                  <div class="contact__number d-flex align-items-center">
                    <i class="icon-phone"></i>
                    <a href="tel:5565454117">55 654 541 17</a>
                  </div>
                </div>
              </div>
              <form method="post" action="contact.php" id="contactForm" class="contact__panel-form">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="contact__panel-title">Get In Touch</h4>
                    <p class="contact__panel-desc mb-40">Complete control over products allows us to ensure our
                      customers receive the best quality prices and service. We take great pride in everything that we
                      do in our factory.</p>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name"
                        required>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Email" id="contact-email"
                        name="contact-email" required>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                        name="contact-phone" required>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Website" id="contact-subject"
                        name="contact-subject" required>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <textarea class="form-control" placeholder="Additional Details!" placeholder="Message"
                        id="contact-messgae" name="contact-messgae" required></textarea>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <button type="submit" class="btn btn__primary btn__block  btn__lg">
                      <span class="mx-2">Submit Request</span><i class="icon-arrow-right mx-2"></i>
                    </button>
                    <div class="contact-result"></div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

   
    <section class="contact-info pt-0 pb-70">
      <div class="container">
        <div class="row">
          
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="contact-info-box">
              <h4 class="contact__info-box-title">London Office</h4>
              <ul class="contact__info-list list-unstyled">
                <li>Email: <a href="#"><span class="__cf_email__" data-cfemail="#">[email&#160;protected]</span></a></li>
                <li>Address: 2307 Beverley Rd Brooklyn, NY</li>
                <li>Phone: <a href="tel:5565454117">55 654 541 17</a></li>
                <li>Hours: Mon-Fri: 8am – 7pm</li>
              </ul>
            </div>
          </div>
         
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="contact-info-box">
              <h4 class="contact__info-box-title">Berlin Office</h4>
              <ul class="contact__info-list list-unstyled">
                <li>Email: <a href="#"><span class="__cf_email__" data-cfemail="#">[email&#160;protected]</span></a></li>
                <li>Address: 2307 Beverley Rd Brooklyn, NY</li>
                <li>Phone: <a href="tel:5565454117">55 654 541 17</a></li>
                <li>Hours: Mon-Fri: 8am – 7pm</li>
              </ul>
            </div>
          </div>
         
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="contact-info-box">
              <h4 class="contact__info-box-title">Manchester Office</h4>
              <ul class="contact__info-list list-unstyled">
                <li>Email: <a href="#"><span class="__cf_email__" data-cfemail="#">[email&#160;protected]</span></a></li>
                <li>Address: 2307 Beverley Rd Brooklyn, NY</li>
                <li>Phone: <a href="tel:5565454117">55 654 541 17</a></li>
                <li>Hours: Mon-Fri: 8am – 7pm</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    
    <?php include "layout/footer.php" ?>