<footer class="footer text-white py-4">
    <div class="container">
        <div class="row ">
            <div class="col-12 text-center">
                <span class="button">BOOK A FREE DISCOVERY CALL</span>
            </div>
        </div>

        <div class="row align-items-start mt-3">
            <!-- Left Column - Contact Info -->
            <div class="col-md-4  d-flex flex-column align-items-start">
                <h5>CONTACT INFORMATION</h5>
                <div class="d-flex align-items-center mb-2">
                    <i class="fas fa-map-marker-alt fa-lg me-2"></i> <!-- Address Icon -->
                    <span>LONDON, ESSEX: IN-PERSON/TBA</span>
                </div>
                <div class="d-flex align-items-center mb-2">
                    <i class="fas fa-map-marker-alt fa-lg me-2"></i> <!-- Address Icon -->
                    <span>WORLDWIDE ONLINE VIA ZOOM</span>
                </div>
                <div class="d-flex align-items-center">
                    <i class="fas fa-envelope fa-lg me-2"></i> <!-- Email Icon -->
                    <a href="mailto:your@email.com" class="text-white">Selftransformingbrain@gmail.com</a>
                </div>
                <div class="d-flex align-items-center mb-2">
                    <i class="fas fa-phone fa-lg me-2"></i> <!-- Phone Icon -->
                    <a href="tel:+1234567890" class="text-white">+4407825138793</a>
                </div>
                <a href="contact.php" class="text-white">
                    <div class="d-flex align-items-center mb-2">
                        <span class="button_contact">EMAIL ME</span>
                    </div>
                </a>
                <a href="faqs.php" class="text-white">
                    <div class="d-flex align-items-center mb-2">
                        <span class="button_faq">FAQs</span>
                    </div>
                </a>
            </div>

            <div class="col-md-4 d-flex flex-column align-items-start">
                <img src="../assets/images/includes/card.png" alt="Image" onclick="enlargeImage(this)"
                    style="cursor: pointer;">
            </div>

            <!-- Right Column - Social Media Links -->
            <div class="right col-md-4 text-left">
                <h5>WORK HOURS</h5>
                <p class="mb-1">Free Discovery Calls: MON – FRI 09.00 – 19.00 {30 minutes}
                </p>
                </p>
                <p class="mb-1">Session Hours: MON – FRI <br>09.00 – 19.00 {1.5 – 2 hours}</p>
                <hr>
                <h5>FOLLOW US</h5>
                <a href="#" class="text-white me-3"><i class="fab fa-facebook fa-lg"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-lg"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-linkedin fa-lg"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-youtube fa-lg"></i></a>
                <a href="#" class="text-white me-3"><i class="fab fa-whatsapp fa-lg"></i></a>
            </div>
        </div>
        <hr>
        <!-- Centered Copyright & Links Row -->
        <div class="row mt-3">
            <div class="col-12 text-center">
                <a href="#" class="text-white me-3">2025 ALL RIGHTS RESERVED | Self-TransformingBrain</a><br>
                <a href="#" class="text-white me-3">PRIVACY POLICY | TERMS AND CONDITIONS</a>
            </div>
        </div>
    </div>

    <div id="imageModal"
        style="display:none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.8); text-align: center;">
        <img id="modalImage" style="max-width: 90%; max-height: 90%; margin-top: 5%;">
    </div>

    <script>
        function enlargeImage(img) {
            document.getElementById("modalImage").src = img.src;
            document.getElementById("imageModal").style.display = "block";
        }

        document.getElementById("imageModal").onclick = function() {
            this.style.display = "none";
        };
    </script>
</footer>