<!DOCTYPE html>
<lang="en">

    <?php include "includes/head.php" ?>
    <?php include "includes/header.php" ?>
    <?php include "includes/connection.php" ?>
    <?php

    $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

    if ($id < 1) {
        echo "Invalid story ID.";
        exit;
    }

    $query = "SELECT * FROM testimonials WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $query);

    if (!$result || mysqli_num_rows($result) === 0) {
        echo "Story not found.";
        exit;
    }

    $row = mysqli_fetch_assoc($result);
    ?>

    <script src="https://cdn.tailwindcss.com"></script>

    <div class="main-banner">
        <div class="stories section">
            <div class="col-lg-12">
                <div class="header-text">
                    <div class="header">
                        <img src="../assets/images/includes/storiesbanner.png" alt="">
                    </div>
                </div>
            </div>

            <div class="intro">
                <div class="container">
                    <div class="row">

                        <p class="one">
                            Every story you see here began with a breakthrough. Through RTT, powerful Brain & Self-image Coaching and Finance & Business Coaching, they found the courage to heal, rise, and reclaim their lives. These are not just testimonials; they are powerful journeys of transformation and living proof that lasting change is possible.
                        </p>

                        <div class="container d-flex justify-content-center align-items-center min-vh-100">
                            <div class="card bg-secondary text-white shadow-lg" style="max-width: 600px; width: 100%;">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-4">
                                        <?php if (!empty($row['picture'])): ?>
                                            <img src="<?= htmlspecialchars($row['picture']) ?>" alt="Profile Picture" class="rounded-circle me-3" width="64" height="64">
                                        <?php endif; ?>
                                        <div>
                                            <h4 class="card-title mb-1"><?= htmlspecialchars($row['name']) ?></h4>
                                            <small class="text-white"><?= htmlspecialchars($row['address']) ?></small>
                                        </div>
                                    </div>

                                    <h5 class="mb-3"><?= htmlspecialchars($row['service']) ?></h5>

                                    <p class="card-text"><?= nl2br(htmlspecialchars($row['testimonials'])) ?></p>

                                    <p class="mt-4 mb-0">
                                        <small class="text-white">Posted on <?= date("F j, Y, g:i a", strtotime($row['created_at'])) ?></small>
                                    </p>
                                </div>
                            </div>
                        </div>



                        <p class="two">
                            RTT rewires the subconscious mind, clearing out limiting beliefs and creating space for confidence, clarity, and purpose. When you transform your self-image, you don’t just think differently you lead, earn and grow differently. Combined with powerful Brain Coaching and Strategic Finance and Business Mentoring, you become unstoppable. This is how lasting success starts: from the inside out.
                        </p>

                        <p class="three">
                            What are you waiting for? Your breakthrough starts now, click the button BELOW and take the first step toward the life you deserve!
                        </p>

                        <div class="col-lg-12">
                            <div class="button">
                                <a href="#" class="btn btn-primary">WORK WITH ME</a>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="footer">
                                <img src="../assets/images/includes/work3.png" alt="">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="emailer">
                                <form class="p-4 bg-light" method="POST" action="send_mail.php">
                                    <div class="mb-3">
                                        <input type="text" class="form-control" name="name" placeholder="Your Name*" required>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" name="service" placeholder="Type of Services (e.g. RTT, Brain & Self-Image Coaching or Finance and Business Coaching)" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" class="form-control" name="email" placeholder="Email*" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                    </div>
                                    
                                        <button type="submit" class="btn btn-primary-form">SEND</button>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/elbqER_ZrLQ?si=QPD9_uKKE6YHdWSo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </Main>

        <?php include "includes/footer.php" ?>

        <!-- Scripts -->
        <!-- Bootstrap core JavaScript -->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
        <script src="../assets/js/isotope.min.js"></script>
        <script src="../assets/js/owl-carousel.js"></script>
        <script src="../assets/js/counter.js"></script>
        <script src="../assets/js/custom.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

        </body>

        </html>