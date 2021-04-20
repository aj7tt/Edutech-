<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Edutech</title>

        <!-- Bootstrap -->
        <!--        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
              integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu"
              crossorigin="anonymous">
        <!--        <link href="dist/css/bootstrap-navbar-dropdowns.min.css" rel="stylesheet">-->
        <link href="https://cdn.jsdelivr.net/gh/fontenele/bootstrap-navbar-dropdowns@5.0.2/dist/css/bootstrap-navbar-dropdowns.min.css"
              rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="mystyle.css"> 
        
    </head>
    <body>
        <div class="header">
            <!-- Static navbar -->
            <nav class="navbar navbar-default navbar-fixed-top navbg">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only"> </span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php"><strong>Edutech</strong></a>

                        <form class="navbar-form navbar-left col-xs-6 aj7t" action=" ">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" name="search">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary" type="submit"> <i class="glyphicon glyphicon-search"></i> </button>
                                </div>
                            </div>
                        </form>
                    </div>      
<!----------------------------------------------------------------------------->
                    
                    <div id="navbar" class="navbar-collapse collapse">
                       <ul class="nav navbar-nav navbar-right"> 
                         <ul class="nav navbar-nav courses">
                            <li class="dropdown">
                                <a href="index.php" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false"><strong> Courses </strong> <span class="caret"></span> 
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-header">find your classes</li>  

                                    <li role="separator" class="divider"></li>

<!----------------------------------------------------------------class 9 ---------------------------------------------->

                                    <li class="dropdown">
                                        <a href="classIX.php" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                           aria-haspopup="true" aria-expanded="false"> class IX <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu"> 
                                            <li class="dropdown">
                                                <a href="science.php" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                   aria-haspopup="true" aria-expanded="false"> science
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a target="_blank" href="chapter.php"> chapter-1 </a></li>
                                                    <li><a target="_blank" href=" "> chapter-2 </a></li>
                                                    <li><a target="_blank" href=" "> chapter-3 </a></li>
                                                </ul>
                                            </li> 
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                   aria-haspopup="true" aria-expanded="false"> Mathematics
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a target="_blank" href=" "> chapter-1 </a></li>
                                                    <li><a target="_blank" href=" "> chapter-2 </a></li>
                                                    <li><a target="_blank" href=" "> chapter-3 </a></li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>
<!------------------------------------------------------      seperator ------------------------------------------>

                                    <li role="separator" class="divider"></li>

 <!------------------------------------------------------------class X ---------------------------------------------->

                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                           aria-haspopup="true" aria-expanded="false"> Class X
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                   aria-haspopup="true" aria-expanded="false"> science
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a target="_blank" href="chapter.html"> chapter-1 </a></li>
                                                    <li><a target="_blank" href=" "> chapter-2 </a></li>
                                                    <li><a target="_blank" href=" "> chapter-3 </a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                                   aria-haspopup="true" aria-expanded="false"> Mathematics
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a target="_blank" href=" "> chapter-1 </a></li>
                                                    <li><a target="_blank" href=" "> chapter-2 </a></li>
                                                    <li><a target="_blank" href=" "> chapter-3 </a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                </ul>
                            </li>
                        </ul>

<!---------------------------------------------------- register ------------------------->
                              <li><a href="regi.php"><span class="glyphicon glyphicon-log-in"></span> <strong>Login</strong></a></li> 
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!--/.container -->
            </nav>
        </div> <!-- /header --><br> <br><br>
 

  <!---********************************* section 2****************************-->
  <div class="container margin-top">    
    <h3><strong class="">India's #1 School Learning Program </strong></h3>
  <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-12 class"><br>
        <h2><span class="glyphicon glyphicon-education red text-primary"></span> <strong> 
            Comprehensive learning programs for school students  </strong> </h2> </br> 
        <p>Become lifelong learners with India’s best teachers, engaging videos lessons and personalised learning journeys</p> <br>
        <p><span class="glyphicon glyphicon-ok text-success"></span> Recorded Videos of Live classes will be available 24/7 for quick Revision</p>
        <p><span class="glyphicon glyphicon-ok text-success"></span> Get access to the Teacher's Class Notes & Slides </p> 
        <br>
        <a href="classIX.php"> <button class="btn btn-primary" type="submit"><span class="white"> <strong>class IX </strong></span> </button></a>
        <a href="classIX.php"> <button class="btn btn-primary" type="submit"><span class="white"> <strong>class X </strong></span> </button></a>
        
        <br>
   </div><br>
   <div class="col-lg-6 col-md-6 col-sm-12 ">
    <img src="img/edu.png" style="height:400px ; width: 400px">

   </div>

  </div>
</div>    

<!--------about us -->

	
<section class="container class">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 class">
            <img src="img/edutech.png" style="height:300px ; width: 400px">
        </div>  

        <div class="col-md-6"><div class="title-box clearfix"><h2 class="">About Us</h2></div> 
            <p><span>Perspiciatis unde omnis iste natus error sit voluptatem. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculus musull dui.</span></p>
            <p>Lorem ipsumulum aenean noummy endrerit mauris. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculus mus. Null dui. Fusce feugiat malesuada odio.</p><p>Lorem ipsumulum aenean noummy endrerit mauris. Cum sociis natoque penatibus et magnis dis parturient montes ascetur ridiculus mus. Null dui. Fusce feugiat malesuada odio.</p>
            <a href="#" title="read more" class="btn-inline " target="_self"> </a> 
        </div>
    </div>
</section>



     
              <!---------------------%%%%%%%%%%%%%%%%%%%5-->
<div class="">
      <section class="news-box top-margin">
        <div class="container">
          <p> <h1 class='text-center class'> <strong> Get the Edutech advantage</strong> </h1> </p>
            <div class="row">
       
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="newsBox">
                        <div class="text-center">
                            <figure><img src="img/1.png" alt="" style="height:300px ; width: 300px"></figure>
                            <div class="caption maxheight2">
                            <div class="box_inner">
                                        <div class="box">
                                            <p class="title"><h3><strong>Personalised learning
                                                programs</strong></h3></p>
                                        </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="newsBox">
                        <div class="text-center">
                            <figure><img src="img/2.png" alt="" style="height:300px ; width: 300px"></figure>
                            <div class="caption maxheight2">
                            <div class="box_inner">
                                <div class="box">
                                    <p class="title"><h3><strong>Conceptual clarity
                                        through visualisation</strong></h3></p>
                                </div>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="newsBox">
                        <div class=" text-center">
                            <figure><img src="img/3.png" alt="" style="height:300px ; width: 300px"></figure>
                            <div class="caption maxheight2">
                           <div class="box_inner">
                            <div class="box">
                                <p class="title"><h3><strong>Unmatched individual <br>
                                    attention</strong></h3></p>
                            </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div> <br> <br>


  


	<!-- container -->
	<div class="container top-margin">
        <div class="row">
            <div class="col-md-6 class">
                <p> <h3 class="section-title"><strong> GET IN TOUCH</strong></h3></p><br>
                
                <form class="form-light mt-20" role="form"  method="post" action="index.php">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="fullname" class="form-control" placeholder="Your name">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email address">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text"  name="mobile" class="form-control" placeholder="Phone number">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control" name="msg" id=" " placeholder="Write you message here..." style="height:80px;"></textarea>
                    </div>
                    <button type="submit"  name="contact_us" class="btn btn-success">Send message</button><p><br/></p>
                </form>
            </div>
            
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="section-title class"> </h3> 
                        <div class="contact-info class">
                            <h5><strong>Address</strong></h5>
                            <p>5th Street, Hinjewadi chowk, Pune, Maharashtra 411057, IN </p>
                            
                            <h5>Email :</h5>
                            <p>info@edutech.com</p>
                            
                           <h5>Phone :</h5>
                            <p>+91 7667695714</p> 
                        </div>
                    </div> 
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <img src="img/add.jpg" style="height:300px ; width: 300px">
                    </div>

                </div> 						
            </div>
        </div>
    </div>

    
    

 <footer class="mainfooter" role="contentinfo">
    <div class="footer-bottom text-center">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <!--Footer Bottom-->
            <span class="icons">
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=" "><i class="fa fa-twitter"></i></a>
                <a href=" "><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href=" "><i class="fa fa-instagram"></i></a> </span><br> 
                <p style="text-align: center">  &copy; Copyright <script>document.write(new Date().getFullYear())</script> - Edutech. All rights reserved.</p></div>
        </div>
      </div>
    </div>
  </footer>


        <!------------------------------- =======================================----------------------->

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
                integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
                crossorigin="anonymous"></script>
        <!--        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
                integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
                crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/gh/fontenele/bootstrap-navbar-dropdowns@5.0.2/dist/js/bootstrap-navbar-dropdowns.min.js"></script>
        <script>
            $('.navbar').navbarDropdown({theme: 'bs3', trigger: 'mouseover'});
        </script>
    </body>
</html>