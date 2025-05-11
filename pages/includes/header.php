<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
  <div class="preloader-inner">
    <span class="dot"></span>
    <div class="dots">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</div>
<!-- ***** Preloader End ***** -->

<div class="sub-header">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 col-md-9">
        <ul class="social-links">
          <li><a href="https://www.whatsapp.com" target="_blank"><i class="fab fa-whatsapp"></i></a></li>
          <li><a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook"></i></a></li>
          <li><a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a></li>
          <li><a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin"></i></a></li>
          <li><a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-3">
        <a href="work.php" class="btn btn-primary">BOOK A FREE DISCOVERY CALL</a>
      </div>
    </div>
  </div>
</div>

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <nav class="main-nav">
          <!-- ***** Logo Start ***** -->
          <a href="index.html" class="logo">
            <img src="../assets/images/logo.png" alt="Villa Logo">
          </a>
          <!-- ***** Logo End ***** -->

          <!-- ***** Menu Start ***** -->
          <ul class="nav">
            <li><a href="index.php" class="<?= ($currentPage == 'index.php') ? 'active' : '' ?>">HOME</a></li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle <?= in_array($currentPage, ['about_me.php', 'what_rtt.php', 'scientific_rtt.php', 'how_rtt.php']) ? 'active' : '' ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">ABOUT</a>
              <ul class="dropdown-menu">
                <li><a href="about_me.php">MEET SERVET</a></li>
                <li><a href="what_rtt.php">WHAT IS RTT?</a></li>
                <li><a href="scientific_rtt.php">SCIENTIFIC OVERVIEW</a></li>
                <li><a href="how_rtt.php">HOW RTT WORKS</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle <?= in_array($currentPage, ['empowerment.php', 'mental.php', 'addiction.php', 'weight.php', 'career.php', 'physical.php']) ? 'active' : '' ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">RTT TREATMENTS</a>
              <ul class="dropdown-menu">
                <li><a href="empowerment.php">EMPOWERMENT & SELF GROWTH</a></li>
                <li><a href="mental.php">MENTAL HEALTH</a></li>
                <li><a href="addiction.php">ADDICTION</a></li>
                <li><a href="weight.php">WEIGHT & BODY IMAGE</a></li>
                <li><a href="career.php">CAREER & EDUCATION</a></li>
                <li><a href="physical.php">PHYSICAL HEALTH</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle <?= in_array($currentPage, ['brain.php', 'finance.php']) ? 'active' : '' ?>" role="button" data-bs-toggle="dropdown" aria-expanded="false">COACHING</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="brain.php">BRAIN &amp; SELF-IMAGE COACHING</a></li>
                <li><a class="dropdown-item" href="finance.php">FINANCE &amp; BUSINESS COACHING</a></li>
              </ul>
            </li>

            <li><a href="pricing.php" class="<?= ($currentPage == 'pricing.php') ? 'active' : '' ?>">PRICING</a></li>
            <li><a href="work.php" class="<?= ($currentPage == 'work.php') ? 'active' : '' ?>">WORK WITH ME</a></li>
            <li><a href="speaking.php" class="<?= ($currentPage == 'speaking.php') ? 'active' : '' ?>">SPEAKING & WORKSHOPS</a></li>
            <li><a href="stories.php" class="<?= ($currentPage == 'stories.php') ? 'active' : '' ?>">SUCCESS STORIES</a></li>
            <li><a href="contact.php" class="<?= ($currentPage == 'contact.php') ? 'active' : '' ?>">CONTACT ME</a></li>
          </ul>

          <a class='menu-trigger'>
            <span>Menu</span>
          </a>
          <!-- ***** Menu End ***** -->
        </nav>
      </div>
    </div>
  </div>
</header>

<!-- ***** Header Area End ***** -->