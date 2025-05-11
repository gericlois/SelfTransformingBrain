<!DOCTYPE html>
<meta charset="UTF-8">
<html lang="en">
<?php include "includes/head.php" ?>
<?php include "includes/header.php" ?>
<?php include "includes/connection.php" ?>
<script src="https://cdn.tailwindcss.com"></script>

<style>
    .card-container {
        display: flex;
        overflow-x: auto;
        padding-left: 4rem;
        padding-bottom: 1rem;
        margin-left: -4rem;
        scroll-behavior: smooth;
    }

    .card-container::-webkit-scrollbar {
        height: 8px;
    }

    .card-container::-webkit-scrollbar-thumb {
        background-color: #666;
        border-radius: 4px;
    }

    .card-stack {
        margin-left: -6rem;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        transform-origin: center;
    }

    .card-stack:hover {
        transform: rotateY(5deg) scale(1.05) translateY(-10px);
        z-index: 10;
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
    }

    .card-container:hover .card-stack:not(:hover) {
        filter: brightness(0.8);
    }

    .gradient-border {
        border: 3px solid transparent;
        border-image: linear-gradient(to bottom, #f97316, #ec4899, #06b6d4) 1;
    }

    #modal-testimonials {
        text-align: justify;
    }

    #modal-name {
        font-size: 30px;
    }

    #modal-service {
        font-size: 20px;
    }
</style>

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
                        Every testimonials you see here began with a breakthrough. Through RTT, powerful Brain & Self-image Coaching and Finance & Business Coaching, they found the courage to heal, rise, and reclaim their lives. These are not just testimonials; they are powerful journeys of transformation and living proof that lasting change is possible.

                    </p>

                    <div class="flex items-start">
                        <div class="gradient-border rounded-xl p-6 pt-10 w-90 flex flex-col justify-between bg-black">
                            <div class="flex items-center mt-4">
                                <img src="../assets/images/profile/servet.jpg" class="rounded-full mr-5" style="width: 250px; height: 150px; object-fit: cover;" />

                            </div>
                            <h3 class="text-lg text-white mt-6">SERVET EGE</h3>
                            <p class="text-sky-400">RTT HYPNOTHERAPIST & THERAPIST & COACH</p>
                        </div>

                        <?php
                        $query = "SELECT * FROM testimonials ORDER BY created_at DESC";
                        $result = mysqli_query($conn, $query);
                        ?>

                        <div class="relative flex overflow-x-auto pl-16 pt-10 pb-4 snap-x snap-mandatory">
                            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                                <div class="card-stack bg-red-800 border border-gray-700 rounded-xl p-5 w-64 flex-shrink-0 snap-start transition-transform duration-300 hover:rotate-[-3deg] hover:z-10 text-white">
                                    <p class="text-sm text-gray-300"><?= htmlspecialchars($row['address']) ?></p>
                                    <h3 class="text-sm text-gray-300 font-bold mt-2"><?= htmlspecialchars($row['service']) ?></h3>
                                    <div class="flex items-center mt-4">
                                        <?php if (!empty($row['picture'])): ?>
                                            <img src="<?= htmlspecialchars($row['picture']) ?>" alt="Profile" class="rounded-full mr-2" />
                                        <?php endif; ?>
                                    </div>
                                    <h3 class="text-lg text-gray-300 mt-2"><?= htmlspecialchars($row['name']) ?></h3>
                                    <button
                                        class="btn btn-light btn-sm mt-3"
                                        data-bs-toggle="modal"
                                        data-bs-target="#storyModal"
                                        data-name="<?= htmlspecialchars($row['name']) ?>"
                                        data-address="<?= htmlspecialchars($row['address']) ?>"
                                        data-service="<?= htmlspecialchars($row['service']) ?>"
                                        data-picture="<?= htmlspecialchars($row['picture']) ?>"
                                        data-testimonials="<?= htmlspecialchars($row['testimonials']) ?>"
                                        data-created="<?= date("F j, Y, g:i a", strtotime($row['created_at'])) ?>">
                                        View Testimonial
                                    </button>
                                </div>
                            <?php endwhile; ?>
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
                            <a href="work.php" class="btn btn-primary">WORK WITH ME</a>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="footer">
                            <img src="../assets/images/includes/work3.png" alt="">
                        </div>
                    </div>

                    <div class="col-lg-12 d-flex justify-content-center">
                        <div class="emailer" style="max-width: 1000px; width: 100%;">
                            <form class="p-4 bg-light" method="POST" action="send_mail.php">
                                <div class="mb-3">
                                    <input type="text" class="form-control" name="name" placeholder="Name*" required>
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

                    <div class="youtube d-flex justify-content-center my-4">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/elbqER_ZrLQ" title="YouTube video player" frameborder="0" allowfullscreen></iframe>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

<!-- MODAL -->
<div class="modal fade" id="storyModal" tabindex="-1" aria-labelledby="storyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content" style="background-color: #b91c1c; color: white;"> <!-- Deep red background -->
            <div class="modal-header border-0">
                <h5 class="modal-title text-white" id="storyModalLabel">Testimonial Details</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="d-flex align-items-center mb-3">
                    <!-- Smaller Thumbnail Image -->
                    <div class="row">
                        <div class="col-lg-3">
                            <img id="modal-picture" src="" alt="Profile" class="rounded-circle me-3" width="50%" height="50%" style="object-fit: cover; display: none;" />
                        </div>
                        <div class="col-lg-9">
                            <h2 class="text-white mt-4" id="modal-name" class="mb-0"></h2>
                            <small id="modal-address"></small>
                            <h4 class="text-white mt-4" id="modal-service" class="mb-3"></h4>
                            <h6 class="text-white mt-4" id="modal-testimonials"></h6>
                            <p class="text-white mt-4"><small id="modal-created"></small></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>





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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var storyModal = document.getElementById('storyModal');
        storyModal.addEventListener('show.bs.modal', function(event) {
            var button = event.relatedTarget;

            document.getElementById('modal-name').textContent = button.getAttribute('data-name');
            document.getElementById('modal-address').textContent = button.getAttribute('data-address');
            document.getElementById('modal-service').textContent = button.getAttribute('data-service');
            document.getElementById('modal-testimonials').innerHTML = button.getAttribute('data-testimonials').replace(/\n/g, '<br>');
            document.getElementById('modal-created').textContent = 'Posted on ' + button.getAttribute('data-created');

            var picture = button.getAttribute('data-picture');
            var pictureEl = document.getElementById('modal-picture');
            if (picture) {
                pictureEl.src = picture;
                pictureEl.style.display = 'block';
            } else {
                pictureEl.style.display = 'none';
            }
        });
    });
</script>
</body>

</html>