<!DOCTYPE html>
<html lang="en">

<head>

    <?php include "includes/head.php" ?>

    <?php include "includes/header.php" ?>

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .card-stack {
            margin-left: -4rem;
            /* Creates overlap */
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
            transform: scale(0.98);
        }

        .gradient-border {
            border: 3px solid transparent;
            border-image: linear-gradient(to bottom, #f97316, #ec4899, #06b6d4) 1;
        }
    </style>
</head>

<body>

    <div class="main-banner">
        <div class="work section">

            <div class="rtt">
                <div class="container">
                    <div class="flex space-x-10 items-start">
                        <!-- Left Panel -->
                        <div class="gradient-border rounded-xl p-6 w-64 flex flex-col justify-between bg-black">
                            <div>
                                <h2 class="text-3xl font-bold">Popular<br>this<br>month</h2>
                            </div>
                            <p class="text-sm mt-6">Powered by<br><span class="text-sky-400">DigitalOcean</span></p>
                        </div>

                        <!-- Overlapping Cards -->
                        <div class="relative flex card-container">
                            <!-- Card 1 -->
                            <div class="card-stack bg-red-800 border border-gray-700 rounded-xl p-5 w-64 flex-shrink-0 z-0">
                                <p class="text-sm text-gray-400">Article on Jan 27, 2025</p>
                                <h3 class="text-lg font-bold mt-2">
                                    <a href="#" class="hover:underline hover:text-sky-400 transition-colors duration-200">
                                        Revisiting CSS Multi-Column Layout
                                    </a>
                                </h3>
                                <p class="text-orange-500 text-sm mt-1">COLUMNS &bull; LAYOUT</p>
                                <div class="flex items-center mt-4">
                                    <img src="https://i.pravatar.cc/30" class="rounded-full mr-2" />
                                    <span>Andy Clarke</span>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="card-stack bg-red-800 border border-gray-700 rounded-xl p-5 w-64 flex-shrink-0 z-0">
                                <p class="text-sm text-gray-400">Article on Feb 21, 2025</p>
                                <h3 class="text-lg font-bold mt-2">
                                    <a href="#" class="hover:underline hover:text-sky-400 transition-colors duration-200">
                                        Revisiting CSS Multi-Column Layout
                                    </a>
                                </h3>
                                <p class="text-orange-500 text-sm mt-1">VIEW TRANSITIONS</p>
                                <div class="flex items-center mt-4">
                                    <img src="https://i.pravatar.cc/30?img=2" class="rounded-full mr-2" />
                                    <span>Geoff Graham</span>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="card-stack bg-red-800 border border-gray-700 rounded-xl p-5 w-64 flex-shrink-0 z-0">
                                <p class="text-sm text-gray-400">Article on Feb 17, 2025</p>
                                <h3 class="text-lg font-bold mt-2">
                                    <a href="#" class="hover:underline hover:text-sky-400 transition-colors duration-200">
                                        Revisiting CSS Multi-Column Layout
                                    </a>
                                </h3>
                                <p class="text-orange-500 text-sm mt-1">FUNCTIONS</p>
                                <div class="flex items-center mt-4">
                                    <img src="https://i.pravatar.cc/30?img=3" class="rounded-full mr-2" />
                                    <span>Lee Meyer</span>
                                </div>
                            </div>

                            <!-- Add more cards as needed -->
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-12">
                <div class="button_contact">
                    <a href="#" class="btn btn-primary"> EMAIL OR CONTACT ME </a>
                </div>
            </div>
        </div>
    </div>

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



</body>

</html>