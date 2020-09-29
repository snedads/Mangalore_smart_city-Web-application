<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php include 'session.php'; ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Smart City</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Toon Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900" rel="stylesheet">
    <!-- //Fonts -->

</head>

<body>
    <!-- mian-content -->
    <header class="index-banner" id="home">
        <!-- nav -->
        <nav class="main-header d-flex">
            <div id="brand">
                <div id="word-mark">
                    <h1>
                        <a href="memberpage.php"><span>Smart</span>City</a>
                    </h1>
                </div>
            </div>
            <div id="menu">
                <div id="menu-toggle">
                    <div id="menu-icon">
                        <div class="bar"></div>
                        <div class="bar"></div>
                        <div class="bar"></div>
                    </div>
                </div>
                <ul class="text-left nav-honey">
                    <li>
                        <a href="memberpage.php" class="active ">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Events
                                    </a>

                        <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item" href="post_events.php">Post Events </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="view_events.php">View Events </a>
                        </div>
                    </li>
                    <li>
                        <a href="discussion.php">Discussion</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Settings
                                    </a>

                        <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                           <a class="dropdown-item" href="profile.php">Profile </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php">Logout </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </nav>
        <!-- //nav -->
        <!-- banner-text -->
        <div class="page-inner" style="min-height: 95px;">

        </div>
        <!---->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="memberpage.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Change Password</li>
        </ol>
        <!---->
        <!--// banner-inner -->

    </header>
    <!-- //header -->

    <!--// banner-slider -->
    <!--/contact-->
    <div class="container">
    <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                <div class="col-md-10">
                        <h2 style="text-align: center; ">Edit Profile</h2>
                    <?php include('con_db.php');
                        $sql=mysqli_query($con,"SELECT * from member where mid='$mid'");
                        $row=mysqli_fetch_array($sql);
                     ?>
                    <table class="table table-bordered">
                        <tr>
                          <td rowspan="6">
                            <img src="images/<?php echo $row['image']; ?>" alt="No Image" height="300" width="300" class="img-rounded" >
                          </td>
                        </tr>
                        <tr>
                            <td>Name:</td><td><input type="text" style="margin-top: 20px;" class="form-control" name="mname" value="<?php echo $row['mname']; ?>"> </td>
                        </tr>
                        <tr>
                            <td>Address:</td><td><input type="text" style="margin-top: 10px;"  class="form-control" name="address" value="<?php echo $row['address']; ?>"> </td>
                        </tr>
                        <tr>
                            <td>Contact:</td><td><input type="text" style="margin-top: 15px;" class="form-control" name="phone" value="<?php echo $row['contact']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Email:</td><td><input type="text" style="margin-top: 10px;" class="form-control" name="email" value="<?php echo $row['email']; ?>"></td>
                        </tr>
                        <tr>
                            <td>Image:</td><td><input type="file" style="margin-top: 10px;" class="form-control" name="image"></td>
                        </tr>
                    </table>
                </div>
            </div>
             <div class="row">   
                <button type="submit" style="margin-top: 30px; "  name="update" class="btn btn-primary">Edit Profile</button> <a href="profile.php" style="margin-top: 30px; " class="btn btn-warning">Back</a>
            </div>
      </form>

       <?php
 include('con_db.php');

    if(isset($_POST['update']))
    {
       if(isset($_FILES['image']['name']))
             {
                $file = rand(1000,100000)."-".$_FILES['image']['name'];
                $file_loc = $_FILES['image']['tmp_name'];
                $file_size = $_FILES['image']['size'];
                $imgtype = $_FILES['image']['type'];
               $folder="images/";
                $new_size = $file_size/2048;  
                $new_file_name = strtolower($file);
               $final_file=str_replace(' ','-',$new_file_name);
               
              if(move_uploaded_file($file_loc,$folder.$final_file))
                {           
                    $mname=$_POST['mname'];
                    $phone=$_POST['phone'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];
                                                            
                    $qry=mysqli_query($con,"UPDATE `member` SET`mname`='$mname',`address`='$address',`contact`='$phone',`email`='$email',`image`='$final_file' WHERE mid='$mid'") or die(mysqli_error($con));
                        if($qry)
                            {
                                echo "<script>alert('Updated successfully'); window.location='profile.php';</script>";
                            }
                            else{
                                echo "<script>alert('Failed to update'); window.location='edit_profile.php';</script>";
                            }
                }
           }
                    $mname=$_POST['mname'];
                    $phone=$_POST['phone'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];
                                                            
                    $qry=mysqli_query($con,"UPDATE `member` SET`mname`='$mname',`address`='$address',`contact`='$phone',`email`='$email' WHERE mid='$mid'") or die(mysqli_error($con));
                        if($qry)
                            {
                                echo "<script>alert('Updated successfully'); window.location='profile.php';</script>";
                            }
                            else{
                                echo "<script>alert('Failed to update'); window.location='edit_profile.php';</script>";
                            }
}
?>
    </div>
<br/>
    <!-- //contact -->
    

    <!--/footer-->
    <footer class="footer">
        <div class="container-fluid p-lg-5 p-md-3">

            
            <hr>
            <div class="d-flex justify-content-between pt-lg-3  footer-bottom-cpy">
                <div class="copy-right-w3layouts">
                    <p>© 2018 Mangalore as Smart City. All rights reserved | </a>
                    </p>
                </div>
               
            </div>
        </div>
    </footer>
    <!--//footer-->

    <!--model-forms-->
    <!--/Login-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-left">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-left mb-4">Login Now</h5>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label class="mb-2">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" required="">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="" required="">
                            </div>
                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary submit mb-4">Sign In</button>
                            <p class="text-left pb-4">
                                <a href="#" data-toggle="modal" data-target="#exampleModalCenter2"> Don't have an account?</a>
                            </p>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Login-->
    <!--/Register-->
    <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-left">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login px-4 mx-auto mw-100">
                        <h5 class="text-left mb-4">Register Now</h5>
                        <form action="#" method="post">
                            <div class="form-group">
                                <label>First name</label>

                                <input type="text" class="form-control" id="validationDefault01" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Last name</label>
                                <input type="text" class="form-control" id="validationDefault02" placeholder="" required="">
                            </div>

                            <div class="form-group">
                                <label class="mb-2">Password</label>
                                <input type="password" class="form-control" id="password1" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" id="password2" placeholder="" required="">
                            </div>

                            <button type="submit" class="btn btn-primary submit mb-4">Register</button>
                            <p class="text-left pb-4">
                                <a href="#">By clicking Register, I agree to your terms</a>
                            </p>
                        </form>


                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//Register-->
    <script src="js/jquery-2.2.3.min.js"></script>

    <!-- sticky nav bar-->
    <script>
        $(() => {

            //On Scroll Functionality
            $(window).scroll(() => {
                var windowTop = $(window).scrollTop();
                windowTop > 100 ? $('nav').addClass('navShadow') : $('nav').removeClass('navShadow');
                windowTop > 100 ? $('ul.nav-honey').css('top', '50px') : $('ul.nav-honey').css('top', '160px');
            });

            //Click Logo To Scroll To Top
            $('#logo').on('click', () => {
                $('html,body').animate({
                    scrollTop: 0
                }, 500);
            });

            //Smooth Scrolling Using Navigation Menu
            $('a[href*="#"]').on('click', function(e) {
                $('html,body').animate({
                    scrollTop: $($(this).attr('href')).offset().top - 100
                }, 500);
                e.preventDefault();
            });

            //Toggle Menu
            $('#menu-toggle').on('click', () => {
                $('#menu-toggle').toggleClass('closeMenu');
                $('ul').toggleClass('showMenu');

                $('li').on('click', () => {
                    $('ul').removeClass('showMenu');
                    $('#menu-toggle').removeClass('closeMenu');
                });
            });

        });
    </script>
    <!-- //sticky nav bar -->
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>

    <!--/counter-->
    <script>
        (function($) {
            $.fn.countTo = function(options) {
                options = options || {};

                return $(this).each(function() {
                    // set options for current element
                    var settings = $.extend({}, $.fn.countTo.defaults, {
                        from: $(this).data('from'),
                        to: $(this).data('to'),
                        speed: $(this).data('speed'),
                        refreshInterval: $(this).data('refresh-interval'),
                        decimals: $(this).data('decimals')
                    }, options);

                    // how many times to update the value, and how much to increment the value on each update
                    var loops = Math.ceil(settings.speed / settings.refreshInterval),
                        increment = (settings.to - settings.from) / loops;

                    // references & variables that will change with each update
                    var self = this,
                        $self = $(this),
                        loopCount = 0,
                        value = settings.from,
                        data = $self.data('countTo') || {};

                    $self.data('countTo', data);

                    // if an existing interval can be found, clear it first
                    if (data.interval) {
                        clearInterval(data.interval);
                    }
                    data.interval = setInterval(updateTimer, settings.refreshInterval);

                    // initialize the element with the starting value
                    render(value);

                    function updateTimer() {
                        value += increment;
                        loopCount++;

                        render(value);

                        if (typeof(settings.onUpdate) == 'function') {
                            settings.onUpdate.call(self, value);
                        }

                        if (loopCount >= loops) {
                            // remove the interval
                            $self.removeData('countTo');
                            clearInterval(data.interval);
                            value = settings.to;

                            if (typeof(settings.onComplete) == 'function') {
                                settings.onComplete.call(self, value);
                            }
                        }
                    }

                    function render(value) {
                        var formattedValue = settings.formatter.call(self, value, settings);
                        $self.html(formattedValue);
                    }
                });
            };
            $.fn.countTo.defaults = {
                from: 0, // the number the element should start at
                to: 0, // the number the element should end at
                speed: 1000, // how long it should take to count between the target numbers
                refreshInterval: 100, // how often the element should be updated
                decimals: 0, // the number of decimal places to show
                formatter: formatter, // handler for formatting the value before rendering
                onUpdate: null, // callback method for every time the element is updated
                onComplete: null // callback method for when the element finishes updating
            };

            function formatter(value, settings) {
                return value.toFixed(settings.decimals);
            }
        }(jQuery));

        jQuery(function($) {
            // custom formatting example
            $('.count-number').data('countToOptions', {
                formatter: function(value, options) {
                    return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
                }
            });

            // start all the timers
            $('.timer').each(count);

            function count(options) {
                var $this = $(this);
                options = $.extend({}, options || {}, $this.data('countToOptions') || {});
                $this.countTo(options);
            }
        });
    </script>
    <!--//counter-->
    <!--/ start-smoth-scrolling -->
    <script src="js/move-top.js"></script>
    <script src="js/easing.js"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            /*
                                    var defaults = {
                                          containerID: 'toTop', // fading element id
                                        containerHoverID: 'toTopHover', // fading element hover id
                                        scrollSpeed: 1200,
                                        easingType: 'linear' 
                                     };
                                    */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <!--// end-smoth-scrolling -->

    <!-- //js -->

    <script src="js/bootstrap.js"></script>

</body>

</html>