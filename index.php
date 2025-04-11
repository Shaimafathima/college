<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">
    <!--Google Fonts-->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- End Bootstrap CSS -->

    <!--Custom Css-->
    <link rel="stylesheet" href="./CSS/style.css">
    <!--End Custom Css-->
    <style>
        p,h3{
            text-align: justify;
            text-justify: inter-word;
        }
    </style>
</head>

<body>

   
    <!--Header Start-->
    <header>
         <section id="topbar" class="mb-2 mb-lg-0 mb-sm-0 d-none d-lg-flex align-items-center pt-2 pb-2 bg-primary text-white topbar-transparent">
        <div class="container">
          <div class="row">
            <div class="col-lg-6   text-start">
             <span class="px-3"><i class="bi bi-phone "></i> +1 5589 55488 55 </span>
          <i class="bi bi-clock"></i> Mon-Sat: 11:00 AM - 23:00 PM
            </div>
            <div class="col-md-6 text-end">
                <a href="" class="me-4 text-reset">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="bi bi-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="bi bi-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="bi bi-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="bi bi-github"></i>
                </a>
            </div>
          </div>
        </div>
      </section>
        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <h2 class="fw-bold  mb-2 mb-lg-0 mb-sm-0">College</h2>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="bi bi-list"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Courses">Courses</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#Gallery">Gallery</a>
                        </li>
                        
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Contact">Contact us</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mb-2 mb-lg-0 action-menu">
                        <li class="nav-item">
                            <a class="nav-link " href="login.php">
                                <i class="bi bi-person "></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--Navbar End-->
    </header>
    <!--Header End-->


    <div id="carouselExampleCaptions" class="carousel slide mb-3" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
	
        <div class="carousel-inner">
            <div class="carousel-item active ">
			 <?php
								include 'config.php';
								$sql1 = "select * from addslider";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
								{ 
								$sl+=1;
								$id=$row1[0];
								$image=$row1['image'];
								?>
                <img class="img-fluid w-100 h-100 overflow-hidden"
				src="admin/img/<?php echo $image; ?>"
                    class="d-block w-100" alt="...">
                <div class="carousel-caption d-block">
                    <h5>The Yenepoya College</h5>
                    <p><center>Thodar,Moodbidri</center></p>
                </div>
								<?php
								}
								}
								?>
            </div>

        </div>
		           
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>




    <main id="main">

        <!-- ======= About Section ======= -->
       
        <section id="about" class="about mt-5">
            <div class="container-fluid">
                <h2 class="h1-responsive font-weight-bold text-center my-2">About</h2>
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-1">Do you have any questions? Please do not hesitate to
                    contact us directly. Our team will come back to you within
                    a matter of hours to help you.</p>
                    
                   
                <div class="row  pt-5 pb-5">
        
                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch text-justify">
                        <div class="content">
                        <h3> Welcome!!!</strong></h3>
                        <p  text-justify>
                            The Yenepoya College, located in the serene town of Moodbidri, stands as a beacon of knowledge and learning. Established with a commitment to nurturing well-rounded individuals,
                             the college offers a dynamic environment that encourages intellectual growth and personal development.
                        </p>
                        <p text-justify>
                            Our Bachelor of Computer Applications (BCA) program is designed to provide students with a strong foundation in computer science. The program emphasizes practical skills, critical thinking, 
                            and ethical considerations in the rapidly evolving field of technology. Students can specialize in areas such as Cyber Security,
                             preparing them for the challenges of the digital landscape.
                        </p>
                       
                        <p text-justify>
                            As part of our continuous efforts to equip students with cutting-edge skills, The Yenepoya College conducts workshops that bridge the gap between theory and practical application. Our upcoming workshop on Microsoft Azure is an exciting opportunity for students to delve into the world of cloud computing. Participants will gain hands-on experience, exploring the features and capabilities of Microsoft's cloud platform.
                        </p>
                    </div>
                    </div>
                    
        
                    <div class="col-lg-5 align-items-stretch video-box"
                        style='background-image: url("https://www.yit.edu.in/front_img/brochure.jpg");'>
                        <a href="https://youtu.be/wOTc9IPLwvM" class="venobox play-btn mb-4"
                            data-vbtype="video" data-autoplay="true"></a>
                    </div>
        
                </div>
            </div>
        </section><!-- End About Section -->
        

        <section id="Courses" class="Courses mt-5"></section>
            <div class="container course pb-5 pt-5">
                <h2 class="h1-responsive font-weight-bold text-center my-4">Courses</h2>
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to
                    contact us directly. Our team will come back to you within
                    a matter of hours to help you.</p>
                <div class="row">
				 <?php
								include 'config.php';
								$sql1 = "select * from course";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
								{ 
								$sl+=1;
								$id=$row1[0];
								
								$coursename=$row1['coursename'];
								$courseimage=$row1['courseimage'];
								$coursedescription=$row1['coursedescription'];
							
								
								
								?>
                    <div class="col-md-4">
                        <div class="card box">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="admin/img/<?php echo $courseimage; ?>"
                                    class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $coursename; ?></h5>
                                <p class="card-text"><?php echo $coursedescription; ?></p>
                                
                            </div>
                        </div>
                    </div>
								<?php
								}
								}
								?>
                    
                   
                </div>
            </div>
        </section>

        <section id="Gallery" class="Gallery mt-5">
            <div class="container">
                <h2 class="h1-responsive font-weight-bold text-center my-4">Gallery</h2>
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to
                    contact us directly. Our team will come back to you within
                    a matter of hours to help you.</p>
                <!-- Gallery -->
                <div class="row">
				<?php
								include 'config.php';
								$sql1 = "select * from gallery";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
								{ 
								$sl+=1;
								$id=$row1[0];
								$image=$row1['image'];
								
								
								?>
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <img src="admin/img/<?php echo $image; ?>"
                            class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water" />

                        
                    </div>
								<?php
								}
								}
								?>
                </div>
                <!-- Gallery -->
            </div>
        </section>


        <section id="Contact" class="Contact mt-5"></section>
            <div class="container mb-5">
                <!--Section: Contact v.2-->
                <section class="mb-4">

                    <!--Section heading-->
                    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
                    <!--Section description-->
                    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate
                        to contact us directly. Our team will come back to you within
                        a matter of hours to help you.</p>

                    <div class="row">

                        <!--Grid column-->
                        <div class="col-md-6 mb-md-0 mb-5">
                            <form  action="#" method="post" >

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            
                                            <label for="your name" class="">Your name</label>
											<input type="text"  name="name" class="form-control">
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                    <!--Grid column-->
                                    <div class="col-md-6">
                                        <div class="md-form mb-0">
                                            <label for="your email" class="">Your email</label>
										<input type="text"  name="email" class="form-control">
                                        </div>
                                    </div>
                                    <!--Grid column-->

                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="md-form mb-0">
                                            <label for="your subject" class="">Subject</label>
										<input type="text" name="subject" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <!--Grid row-->

                                <!--Grid row-->
                                <div class="row">

                                    <!--Grid column-->
                                    <div class="col-md-12">

                                        <div class="md-form">
                                            <label for="your message">Your message</label>
											<textarea type="text"  name="message" rows="2"
                                                class="form-control md-textarea"></textarea>
                                        </div>

                                    </div>
                                </div>
                                <!--Grid row-->
								<div class="text-center text-md-left">
                                <button type="submit" class="btn btn-primary" name="add" >Send</button>
                            </div>
							
                            </form>
							<?php
if(isset($_POST['add']))
{
	error_reporting(1);
	include("config.php");
	
		$name=$_POST['name'];
		
		$email=$_POST['email'];
			$subject=$_POST['subject'];
		$message=$_POST['message'];

		$query = "INSERT INTO feedback(name,email,subject,message)VALUES('".$name."','".$email."','".$subject."','".$message."')";
           
            mysqli_query($con,$query) or die(mysqli_error($con));
		
		
		echo "<script>
				alert('Feedback Added Successfully');
			</script>";
			echo "<script> location.href='index.php'; </script>";

}
?>

                            
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-6 text-center">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d904726.6131739549!2d85.24565535!3d27.65273865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1654970604602!5m2!1sen!2snp"
                                width="600" height="300px" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <!--Grid column-->

                    </div>

                </section>
                <!--Section: Contact v.2-->
            </div>
        </section>


        <!-- Footer -->
        <footer class="text-center text-lg-start bg-primary py-3 text-white">
          
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="bi bi-gem me-3"></i>Company name
                            </h6>
                            <p>
                                Here you can use rows and columns to organize your footer content. Lorem ipsum
                                dolor sit amet, consectetur adipisicing elit.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Products
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Angular</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">React</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Vue</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Laravel</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Useful links
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Pricing</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Settings</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Orders</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Help</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Contact
                            </h6>
                            <p><i class="bi bi-location me-3"></i> New York, NY 10012, US</p>
                            <p>
                                <i class="bi bi-envelope me-3"></i>
                                info@example.com
                            </p>
                            <p><i class="bi bi-phone me-3"></i> + 01 234 567 88</p>
                            <p><i class="bi bi-print me-3"></i> + 01 234 567 89</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center py-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2021 Copyright:
                <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

</body>

</html>