<!DOCTYPE html>
<lang="en">

    <?php include "includes/head.php" ?>
    <?php include "includes/header.php" ?>
    <style>
        .header {
            position: relative;
        }

        .header img {
            width: 100%;
            display: block;
        }

        .buttonone {
            position: absolute;
            bottom: 50px;
            /* Adjust this as needed */
            left: 60%;
            transform: translateX(-50%);
            z-index: 10;
        }

        .highlight {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            font-weight: 700;
        }
    </style>
    <div class="main-banner">
        <div class="speaking section">
            <div class="col-lg-12">
                <div class="header-text">
                    <div class="header">
                        <img src="../assets/images/includes/speakingbanner.png" alt="">
                        <div class="buttonone">
                            <a href="#sectionone" class="btn btn-primary">
                                LEARN MORE
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="intro" id="sectionone">
                <div class="container">
                    <div class="row">

                        <p class="one">
                            I explain brain science in a straightforward, relevant and engaging way, weaving in stories and strategies that promote peak performance, women's mental health, brain health and well-being.
                        </p>

                        <p class="two">
                            For professionals, I distill neuroscience, health psychology and principles of coaching into practical tools and strategies for use in the workshop, classroom or businesses. <br><br>
                            For students, I break down complex brain science into relatable insights that help them to understand themselves better, build resilience, and find their career journey with clarity and confidence.<br><br>
                            For general audiences, I share my neuro-knowledge and top tips for better mental health and longevity.<br><br>
                            I'm happy to work with you to create a bespoke keynote, interactive workshop, panel discussion and present it face-to-face or virtually, depending on your audience and requirements.
                        </p>

                        <p class="three">
                            <span class="highlighted-text">I bring</span> a unique blend of neuroscience, transformational coaching, and real-world business expertise to every stage and platform. Whether you're hosting a large-scale event, an intimate workshop, or an engaging media feature, I tailor each experience to inspire, educate, and empower your audience.<br><br>

                            In addition to my scientific and coaching background, I am also a channeler for an extraterrestrial being known as OKUSAWA FROM ORION a consciousness over 100,000 years old. Through this connection, I bring through multidimensional insights that expand awareness, elevate purpose, and support deep inner transformation. This unique integration of cosmic wisdom and grounded strategy allows me to guide individuals and teams toward extraordinary breakthroughs.<br><br>

                            Alongside speaking engagements, I also <span class="highlighted-text1">CREATE CUSTOM WORKSHOPS AND PROGRAMS</span> designed to meet the specific needs of your team, organization, or community. These workshops and programs are highly interactive, research-backed and focused on lasting transformation.

                        </p>

                        <p class="four">
                            Interested in elevating your mindset, unlocking peak performance, and driving change from the inside out? <span class="highlighted-text1">JOIN ME or INVITE ME</span> to lead powerful sessions in: <br><br>
                            &#x2022; <b> Channelling With OKUSAWA From ORION Workshop <br>
                                &#x2022; Neuroscience<br>
                                &#x2022; Neuroentrepreneurship<br>
                                &#x2022; Brain Coach and Emotional Intelligence<br>
                                &#x2022; Brain Coaching for High Performance<br>
                                &#x2022; Career Pathfinder Workshop<br>
                                &#x2022; Life Purpose Journey Workshop<br>
                                &#x2022; Business and Finance Workshop<br>
                                &#x2022; Customized Workshop Development<br></b>
                        </p>

                        <p class="five">
                            LET’S CREATE LASTING IMPACT TOGETHER ON STAGE, ON AIR, AND IN THE MINDS OF YOUR AUDIENCE.
                        </p>

                        <div class="button">
                            <a href="work.php" class="btn btn-primary">
                                ENQUIRE ABOUT SPEAKING, WORKSHOPS AND PROGRAMS
                            </a>
                        </div>

                        <div class="col-lg-12">
                            <div class="footerbanner">
                                <img src="../assets/images/includes/speakingfooter.png" alt="">
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

                        <div class="col-lg-12">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/g_CSsL3it9Y?si=hDaAkmreEXHOPcdi" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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

    </body>

    </html>