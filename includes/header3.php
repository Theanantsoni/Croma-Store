 <?php
    include "Admin/croma_sql.php";
?>

<?php

    $result = mysqli_query($con, "SELECT * FROM media");

?>


<html lang="en">
<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="assests/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assests/css/style.css" rel="stylesheet">

    <!-- Icon Bootstrap Online link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!--Blue Color Filter Bootstrap Link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Help</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="https://www.facebook.com/login/">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="https://twitter.com/i/flow/login">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="https://www.linkedin.com/login">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="https://www.instagram.com/accounts/login/">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="https://www.youtube.com/account">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">Cromā</span>Store</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
                    <span class="badge">0</span>
                </a>
                <a href="" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge">0</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid mb-10">
        <div class="row border-top px-xl-5">
            
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">Cromā</span>Store</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        
                        <div class="navbar-nav mr-auto py-0">
                            <a href="#" class="nav-item nav-link active">Home</a>
                            <a href="#products" class="nav-item nav-link">Shop</a>
                            <a href="#contact" class="nav-item nav-link">Contact</a>
                            <a href="#about" class="nav-item nav-link">About Us</a>
                        </div>
                   
                        <!--<div class="navbar-nav ml-auto py-0">
                            <a href="login.php" class="nav-item nav-link">Login</a>
                            <a href="register.php" class="nav-item nav-link">Register</a>
                        </div>-->

                        <a href="index.php" class="bi bi-box-arrow-left" style="color: red; font-size: 25px;">&nbsp;<b>Log Out</b></a><br><br><br>

                    </div>
                </nav>
                <div id="header-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="height: 410px;">
                            <img class="img-fluid" src="assests/images/cr1.jpg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Croma Store <br> Electronics Items</h3>
                                    <a href="#products" class="btn btn-light py-2 px-3">Shop Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" style="height: 410px;">
                            <img class="img-fluid" src="assests/images/cr2.jpg" alt="Image">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                <div class="p-3" style="max-width: 700px;">
                                    <h4 class="text-light text-uppercase font-weight-medium mb-3">10% Off Your First Order</h4>
                                    <h3 class="display-4 text-white font-weight-semi-bold mb-4">Reasonable Price</h3>
                                    <a href="#products" class="btn btn-light py-2 px-3">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

<!-- Products Start -->
<div class="container-fluid pt-5" id="products">
    <div class="text-center mb-4">
        <h2 class="section-title px-5"><span class="px-2">Cromā Products</span></h2>
    </div>
    <div class="row px-xl-5 pb-3">
        <?php
        $sql = "SELECT * FROM media";
        $result = mysqli_query($con, $sql);

        while ($data = mysqli_fetch_array($result)) {
            ?>
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                    <div class="card product-item border-0 mb-4">
                        <img src="assests/uploads/<?php echo $data['image']; ?>" style="height: 250px; overflow: hidden;">
                    </div>
                    <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                        <h6 class="text-truncate mb-3" style="font-size: 25px; color: darkblue;"><?php echo $data['productname']; ?></h6>
                        <div class="d-flex justify-content-center">
                            <h6 style="font-size: 25px; color: green;">$<?php echo $data['new_price']; ?></h6><h6 class="text-muted ml-2"><del style="font-size: 15px; color: red;">$<?php echo $data['old_price']; ?></del></h6>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between bg-light border">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-sm text-dark p-0" data-toggle="modal" data-target="#productModal<?php echo $data['id']; ?>">
                            <i class="fas fa-eye text-primary mr-1"></i>View Detail
                        </button>
                        <a href="includes/cart.php?action=add&id=<?php echo $data['id']; ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="productModal<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="productModalLabel<?php echo $data['id']; ?>" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="productModalLabel<?php echo $data['id']; ?>"><?php echo $data['productname']; ?></h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="assests/uploads/<?php echo $data['image']; ?>" style="width: 100%;">
                            <!-- Display other details here -->
                            <h6><b>Product Name : </b><?php echo $data['productname']; ?></h6>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <h6 class="mb-0"><b>New Price:</b> <span class="badge badge-success" style="font-size: 15px;">$<?php echo $data['new_price']; ?></span></h6>
                                </div>
                                <div class="col-md-6">
                                    <h6 class="mb-0"><b>Old Price:</b> <span class="badge badge-danger"><del style="font-size: 15px;">$<?php echo $data['old_price']; ?></del></span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<!-- Products End -->

<!-- Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>



        <!-- Logo Start -->
    <div class="container-fluid py-5">
        <div class="row px-xl-5">
            <div class="col">
                <div class="owl-carousel vendor-carousel">
                    <div class="vendor-item border p-4">
                        <img src="assests/images/logo1.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="assests/images/logo2.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="assests/images/logo3.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="assests/images/logo4.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="assests/images/logo5.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="assests/images/logo6.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="assests/images/logo7.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="assests/images/logo8.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="assests/images/logo9.jpg" alt="">
                    </div>
                    <div class="vendor-item border p-4">
                        <img src="assests/images/logo10.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Logo End -->

     <!-- Contact Start -->
    <div class="container-fluid pt-5" id="contact">
        <div class="row px-xl-5">
    <div class="col">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Contact For Any Queries</span></h2>
        </div>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="control-group">
                            <input type="text" class="form-control" id="name" placeholder="Your Name"
                                required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control" id="email" placeholder="Your Email"
                                required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control" id="subject" placeholder="Subject"
                                required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control" rows="6" id="message" placeholder="Message"
                                required="required"
                                data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Send
                                Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mb-5">
                <h5 class="font-weight-semi-bold mb-3">Get In Touch</h5>
                <p>Step into a world of cutting-edge electronics at Croma. Discover a vast range of gadgets, from smartphones and laptops to home appliances, all thoughtfully curated to elevate your tech experience. Immerse yourself in a sleek and organized store layout, where friendly experts are ready to guide you. Experience hands-on demos, expert advice, and a seamless shopping journey at Croma, your go-to destination for all things electronic.</p>
                <div class="d-flex flex-column mb-3">
                    <h5 class="font-weight-semi-bold mb-3">Croma Store, Surat</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, Katargam, BHARAT</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>abc@gmail.com</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+91 8975586325</p>
                </div>
                <div class="d-flex flex-column">
                    <h5 class="font-weight-semi-bold mb-3">Croma Store, Ahmedabad</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, Viratnagar, BHARAT</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>xyz@example.com</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+91 8152689563</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

    <!-- About Us Start -->

        <div class="container-fluid pt-5" id="about">
        <div class="text-center mb-4">
                <h2 class="section-title px-5"><span class="px-2">About Us</span></h2>

            <br><br>

            <div class="row px-xl-5">
            <div class="col">
            <b style="color:black; font-size: 25px">Croma Store in Punjagutta, Hyderabad</b>
            <p>
                Croma Retail Store, Panjagutta, Hyderabad Offers Electronics online. Find Address, Contact Number, Reviews, Photos, Maps. Visit Justdial for Tata Croma Electronics Store in Panjagutta, Hyderabad.
                Footer - Electronic Goods Showrooms - nct-10185144
                Remember the old days when food was cooked fresh for every meal and heated the traditional way? Cakes were baked in sand ovens that seemed quite dangerous too. And rotary phones helped us stay connected with loved ones only if they were accessible and near a phone! Fortunately, all that's changed. And the reason we enjoy such comforts is because of the introduction of modern electronic devices that have eased our lives.
            </p>
            <p>     
                Electronic Goods Showrooms has improved the quality of our lives tremendously. Croma Store in Punjagutta, Hyderabad is well-known among people in the area. It has received a 4.3 rating. These offer services like Delivery Service, Same Day Delivery, In Store Collect. So, don't struggle in life. Bring home devices that will make your life easy!
            </p>

            <b style="color:black; font-size: 25px;">Croma Store Location and Overview:</b>
            <p>
                Established in the year 2011, Croma Store in Punjagutta, Hyderabad is a top player in the category Electronic Goods Showrooms in the Hyderabad. This well-known establishment acts as a one-stop destination servicing customers both local and from other parts of Hyderabad. Over the course of its journey, this business has established a firm foothold in it's industry. The belief that customer satisfaction is as important as their products and services, have helped this establishment garner a vast base of customers, which continues to grow by the day. This business employs individuals that are dedicated towards their respective roles and put in a lot of effort to achieve the common vision and larger goals of the company. In the near future, this business aims to expand its line of products and services and cater to a larger client base. 
            </p>
            <p>
                In Hyderabad, this establishment occupies a prominent location in Punjagutta. It is an effortless task in commuting to this establishment as there are various modes of transport readily available. It is at Main Road, Near Gurudwara, Opposite Nims Hospital, which makes it easy for first-time visitors in locating this establishment. It is known to provide top service in the following categories: Electronic Goods Showrooms, Mobile Phone Dealers, CCTV Dealers, Mobile Phone Dealers-Apple, Mobile Phone Dealers-Oneplus, AC Dealers, Laptop Dealers, Sewing Machine Dealers.
            </p>

            <b style="color:black; font-size: 25px">Croma Store Location and Overview:</b>
            <p>
                Croma Store in Punjagutta has a wide range of products and/or services to cater to the varied requirements of their customers. The staff at this establishment are courteous and prompt at providing any assistance. They readily answer any queries or questions that you may have. Pay for the product or service with ease by using any of the available modes of payment, such as Amazon Pay, G Pay, UPI. This establishment is functional from
                11:00 - 21:00.
            </p>
            </div>
        </div>
    </div>
</div>
    
    <!-- About Us End -->
