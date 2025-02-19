<?php
include 'header.php';
?>
<div>
    <!-- full -->
<?php
// include 'sidebar.php';
?>
<div>
    <!-- header and footer content -->
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <?php
        include 'topmenu.php';
        ?>
    </nav>
    <!-- Navbar End -->
      <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <div class="container-xxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php">Pages</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Header End -->
<!-- Services Start -->
<div class="container-fluid pt-6 px-5" id="services">
    <div class="text-center mx-auto mb-5" style="max-width: 600px;">
        <h1 class="display-5 mb-0">Services</h1>
        <hr class="w-25 mx-auto bg-primary">
    </div>
    <div class="row g-5">
        <?php 
        $services = [
            ["icon" => "fa-user-tie", "title" => "Multi-Level Sourcing", "text" => "We provide end-to-end workforce sourcing solutions in different industries across all verticals and domains. Our years of excellence in providing recruitment solutions in various scopes has given enough confidence to many of our clients to employ us as their one and only recruitment vendor. Our experience, research, and technology enable us to find the right talents quickly and cost-effectively."],
            ["icon" => "fa-chart-pie", "title" => "Executive Search Sourcing", "text" => "We are a market leader in middle to top level recruitments. Companies love our approach and are always happy to provide us repeat business. Our vast knowledge base and the process which is AI-enabled, gives us a competitive edge, so clients prefer to engage with us for top-level executive recruitments. Our long relationships with candidates and companies help us quickly bridge the gap and provide effectiveness to the entire process."],
            ["icon" => "fa-chart-line", "title" => "Recruitment Solutions Consulting", "text" => "Companies hire us to provide them extensive help for their recruitment drive. We act as a part of your HR team to optimize the process and help you in effective recruitments. We allocate dedicated resources so that you can focus on your core business while we undertake the recruitment activities for you. This becomes a win-win situation as you leverage our expertise while keeping the entire recruitment process internal."],
            // -----------------------
            ["icon" => "fa-chart-area", "title" => "Contingent Staffing", "text" => " We provide temporary technical workforce as per the organization's requirement to act as a supplement to the company's workforce. Hiring contingent staff is a tough job but not for us! Our team of hiring experts can swiftly arrange for the candidates that you have been seeking for your organization. This staffing is best for the organization of fluctuating nature as they require candidates for a short period. So, if you have one of these organization, you may reach us for hiring candidates on time and in the budget."],
            ["icon" => "fa-balance-scale", "title" => "Contract to Hire", "text" => "We are top providers of trained contract-to-hire employees to help you attain your organizational goals timely. Finding candidates to hire on a contract basis is a tough task but not for us, our professional HR members can effortlessly find the candidate as per your requirement. Mostly candidates on contract to
            hire have a possibility of getting a full-time job at the end of the tenure. The talent search that we do, you would surely want to hire them all."],
            ["icon" => "fa-house-damage", "title" => "Training", "text" => "We specialize in training the candidates and making them industry-ready to help them fulfil their as well as the organization's goals, We organised customised training. <br/> We not only search for skilled manpower and make them reach their dream organization but also train recent graduates and candidates
            willing to learn new skills."],
        ];
        
        foreach ($services as $service) {
            echo '
            <div class="col-lg-4 col-md-6">
                <div class="service-item bg-secondary text-center px-5">
                    <div class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                        <i class="fa ' . $service['icon'] . ' fa-2x"></i>
                    </div>
                    <h3 class="mb-3">' . $service['title'] . '</h3>
                    <p class="short-text">' . implode(' ', array_slice(explode(' ', $service['text']), 0, 50)) . '...</p>
                    <p class="full-text d-none">' . $service['text'] . '</p>
                    <button class="btn btn-link text-primary read-more">Read More</button>
                </div>
            </div>
            ';
        }
        ?>
    </div>
</div>
<!-- Services End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <?php
        include 'footer.php';
        ?>
    </div>
</div>
</div>
<script src="js/services.js"></script>

 