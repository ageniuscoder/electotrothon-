<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mess for me</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/about.html">𝓂𝟦𝓂</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about.html">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Hostel
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/kailashbh.html">Kailash Boys Hostel</a></li>
                            <li><a class="dropdown-item" href="/himadribh.html">Himadri Boys Hostel</a></li>
                            <li><a class="dropdown-item" href="/himgiribh.html">Himgiri Boys Hostel</a></li>
                            <li><a class="dropdown-item" href="/udaygiribh.html">Udaygiri Boys Hostel</a></li>
                            <li><a class="dropdown-item" href="/neelkanthbh.html">NeelKanth Boys Hostel</a></li>
                            <li><a class="dropdown-item" href="/dhauladharbh.html">Dhauladhar Boys Hostel</a></li>
                            <li><a class="dropdown-item" href="/vidhyachalbh.html">Vidhyachal Boys Hostel</a></li>
                            <li><a class="dropdown-item" href="/shivalikbh.html">Shivalik Boys Hostel</a></li>
                            <li><a class="dropdown-item" href="/ambikagh.html">Ambika Girls Hostel</a></li>
                            <li><a class="dropdown-item" href="/parvatigh.html">Paravti Girls Hostel</a></li>
                            <li><a class="dropdown-item" href="/aravaligh.html">Aravali Girls Hostel</a></li>
                            <li><a class="dropdown-item" href="/manimaheshgh.html">Manimahesh Girls Hostel</a></li>
                            <li><a class="dropdown-item" href="/satpurafh.html">Satpura Faculty Hostel</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/support.html">Support</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/Contact.html">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
                <div class="mx-2">
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#loginModal">Login</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#signupModal">Sign
                        Up</button>
                </div>
            </div>
        </div>
    </nav>
    <!--Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Login to 𝓂𝟦𝓂</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="login.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="email" required>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" name="ckbox">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary" name="btn">Login</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign Up Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Get a 𝓂𝟦𝓂 Account</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" name="emaild" required>
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="cexampleInputPassword1" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="cexampleInputPassword1" name="passwordc" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Create Account</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div> 
    </div>
    <?php
    error_reporting(0);
    if(isset($_POST["submit"])){
    $email=$_POST["emaild"];
    $password=$_POST["password"];
    $cpass=$_POST["passwordc"];
    $servername="localhost";
    $username="root";
    $spass="";
    $database = "m4m1";
    if($password==$cpass){

    $conn =mysqli_connect($servername, $username, $spass, $database);
    if($conn){
        echo"";
    }
    else{
        echo "<script type='text/javascript'>alert('SOME ERROR OCCURED.TRY AGAIN!');</script>";
        die();
    }

    // Check connection
     
    // Prepare SQL statement to insert data
    $stmt ="INSERT INTO `users` ( `email`, `password`) VALUES ('.$email.','.$password.')";
    
    // Bind parameters
    $res=mysqli_query($conn,$stmt);

    // Execute statement
    if ($res) {
        header("Location: http://localhost/m4m/completeprofile.php");
        die();
    } 
    else {
        echo "Error";
    }

    
    }
    else{
        echo "<script type='text/javascript'>alert('PLEASEC CHECK YOUR PASSWORD AGAIN');</script>";
    }
    mysqli_close($conn);
}
   
    ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Don't forget to check your <strong>BMI</strong> and <strong>Calorie</strong> count
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <div class="container-sm">
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://nith.ac.in/uploads/topics/himgiri16442125038816.jpg" class="d-block w-100"
                        alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Welcome to 𝓂𝟦𝓂 </h2>
                        <p>
                        <h3>Mess for me</h3>
                        </p>
                        <div class="mx-2">
                            <button class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#loginModal">Login</button>
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#signupModal">Sign
                                Up</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://nith.ac.in/uploads/topics/agh16442125864641.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h2>Where Ideas meet with Technology</h2>
                        <p></p>
                        <div class="mx-2">
                            <button class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#loginModal">Login</button>
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#signupModal">Sign
                                Up</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://nith.ac.in/uploads/topics/nbh16442124549795.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h2></h2>
                        <p></p>
                        <div class="mx-2">
                            <button class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#loginModal">Login</button>
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#signupModal">Sign
                                Up</button>
                        </div>
                    </div>
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
    </div>
    <div id="a">
        <p> Welcome To 𝓂𝟦𝓂 : A world where Ideas meet with Technology </p>
    </div>
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>© 2023-2024 𝓂𝟦𝓂, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <style>
        #a {
            text-align: center;
        }
    </style>
</body>

</html>