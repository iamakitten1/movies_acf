<?php 
  $hospitalTreatementInfo=[
    [
    "image"=>"images/t1.png",
    "title"=>"Nephrologist Care",
    "text"=>"alteration in some form, by injected humour, or randomised words which don t look even slightly e sure there isn t anything",
    ],
    [
    "image"=>"images/t2.png",
    "title"=>"Eye Care",
    "text"=>"alteration in some form, by injected humour, or randomised words which don t look even slightly e sure there isn t anything",
    ],
    [
    "image"=>"images/t3.png",
    "title"=>"Pediatrician Clinic",
    "text"=>"alteration in some form, by injected humour, or randomised words which don t look even slightly e sure there isn t anything",
    ],
    [
    "image"=>"images/t4.png",
    "title"=>"Parental Care",
    "text"=>"alteration in some form, by injected humour, or randomised words which don t look even slightly e sure there isn t anything",
    ],
  ];
  
  function hospitalTreatement($hospitalTreatementInfo) {
    echo '
    <div class="side_img">
      <img src="images/treatment-side-img.jpg" alt="">
    </div>
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Hospital <span>Treatment</span>
        </h2>
      </div>
      <div class="row">';
    foreach ($hospitalTreatementInfo as $info){
      echo '
        <div class="col-md-6 col-lg-3">
          <div class="box ">
            <div class="img-box">
              <img src="'.$info["image"].'" alt="">
            </div>
            <div class="detail-box">
              <h4>
                '.$info["title"].'
              </h4>
              <p>
                '.$info["text"].'
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>';
    }
  };
  

  function infosection(){
    echo '<section class="info_section ">
    <div class="container">
      <div class="info_top">
        <div class="info_logo">
          <a href="">
            <img src="images/logo.png" alt="">
          </a>
        </div>
        <div class="info_form">
          <form action="">
            <input type="email" placeholder="Your email">
            <button>
              Subscribe
            </button>
          </form>
        </div>
      </div>
      <div class="info_bottom layout_padding2">
        <div class="row info_main_row">
          <div class="col-md-6 col-lg-3">
            <h5>
              Address
            </h5>
            <div class="info_contact">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +01 1234567890
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope"></i>
                <span>
                  demo@gmail.com
                </span>
              </a>
            </div>
            <div class="social_box">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_links">
              <h5>
                Useful link
              </h5>
              <div class="info_links_menu">
                <a class="active" href="index.html">
                  Home
                </a>
                <a href="about.html">
                  About
                </a>
                <a href="treatment.html">
                  Treatment
                </a>
                <a href="doctor.html">
                  Doctors
                </a>
                <a href="testimonial.html">
                  Testimonial
                </a>
                <a href="contact.html">
                  Contact us
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_post">
              <h5>
                LATEST POSTS
              </h5>
              <div class="post_box">
                <div class="img-box">
                  <img src="images/post1.jpg" alt="">
                </div>
                <p>
                  Normal
                  distribution
                </p>
              </div>
              <div class="post_box">
                <div class="img-box">
                  <img src="images/post2.jpg" alt="">
                </div>
                <p>
                  Normal
                  distribution
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_post">
              <h5>
                News
              </h5>
              <div class="post_box">
                <div class="img-box">
                  <img src="images/post3.jpg" alt="">
                </div>
                <p>
                  Normal
                  distribution
                </p>
              </div>
              <div class="post_box">
                <div class="img-box">
                  <img src="images/post4.png" alt="">
                </div>
                <p>
                  Normal
                  distribution
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>';
  }
?>

