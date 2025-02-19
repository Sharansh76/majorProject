<?php
include 'header.php';
?>
<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <?php
        include 'topmenu.php';
        ?>
    </nav>
    <!-- Navbar End -->


    <!-- Header End -->
    <div class="container-xxl py-5 bg-dark page-header mb-5">
        <div class="container my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                    <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid bg-white p-0">
    <div class="container-fluid py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="row g-0 about-bg rounded overflow-hidden">
                    <div class="col-6 text-start">
                        <img class="img-fluid w-100" src="img/about-1.jpg" alt="About Image 1">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid" src="img/about-2.jpg" style="width: 85%; margin-top: 15%;" alt="About Image 2">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid" src="img/about-3.jpg" style="width: 85%;" alt="About Image 3">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid w-100" src="img/about-4.jpg" alt="About Image 4">
                    </div>
                </div>
            </div>

            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="mb-4">Founded in 2017, Boost Tech Consulting</h1>
                <p class="mb-4">Boost Tech Consulting emerged with a vision to deliver comprehensive and reliable hiring solutions for middle and top management roles across a wide range of industries in India and internationally. We focus on bridging the gap between highly skilled professionals and the organizations that need them, ensuring that both candidates and employers find the ideal match to achieve their respective goals.</p>
                <p><i class="fa fa-check text-primary me-3"></i>Delivering reliable hiring solutions</p>
                <p><i class="fa fa-check text-primary me-3"></i>Bridging the gap between skilled professionals and organizations</p>
                <p><i class="fa fa-check text-primary me-3"></i>Serving businesses of all sizes, from startups to multinational corporations</p>
                
                <!-- Read More Button -->
                <a class="btn btn-primary py-3 px-5 mt-3" href="javascript:void(0);" onclick="toggleReadMore()">Read More</a>

                <!-- Read More Content (Initially Hidden) -->
                <div id="moreInfo" style="display: none; margin-top: 20px;">
                    <h5>Vision and Dedication to Excellence</h5>
                    <p>At Boost Tech, we believe that exceptional hiring is the cornerstone of success for any organization. Our team is committed to fully understanding the unique demands and aspirations of both our clients and candidates. For every position, we take a tailored approach, carefully evaluating each candidate’s qualifications, skills, and cultural fit for the organization. By focusing on quality over quantity, we aim to make impactful connections that benefit both parties, enhancing organizational growth and individual career advancement.</p>

                    <h5>Experienced Recruiters and a Network of Talent</h5>
                    <p>Our recruiting team is seasoned and knowledgeable across various sectors, which allows us to deeply understand the hiring challenges and opportunities within different industries. Leveraging a vast network of professionals, Boost Tech Consulting is able to access a diverse pool of high-caliber talent, streamlining the search process and ensuring a seamless experience. Whether it’s executive leadership roles, technical experts, or niche industry positions, we dedicate ourselves to finding the right talent for the right role.</p>

                    <h5>Commitment to Long-Term Partnerships</h5>
                    <p>Our commitment to clients and candidates extends beyond the hiring phase. We value long-term partnerships and believe that our responsibility doesn’t end with a placement. To that end, we provide ongoing support, follow-up, and guidance to ensure the placement’s long-term success and satisfaction. Our client partnerships are founded on trust, transparency, and consistency, as we aim to be a reliable resource in every step of the hiring process.</p>

                    <p>In every interaction, Boost Tech Consulting is driven by a commitment to excellence, reliability, and mutual growth. We are more than just recruiters; we are trusted advisors dedicated to fostering lasting relationships that bring value to both talent and organizations.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function toggleReadMore() {
        var moreInfo = document.getElementById("moreInfo");
        moreInfo.style.display = "block";  // Show the "Read More" content
        // Hide the "Read More" button
        event.target.style.display = "none";
    }
</script>


    <!-- About End -->




    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <?php
        include 'footer.php';
        ?>
    </div>
    <!-- Footer End -->
</div>