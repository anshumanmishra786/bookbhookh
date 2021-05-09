<?php
// session_start();
//if(!isset($_SESSION['name'])){
//header('location:login.php');
//}
if ($_SERVER['REQUEST_METHOD']=='POST'){
  $name = $_POST['name'];
  $pass = $_POST['pass'];
  require_once('regd.php');
  $sql= "SELECT * FROM userinfo WHERE name = '$name' AND pass = '$pass' ";
  $result = mysqli_query($con,$sql);
  $check = mysqli_fetch_array($result);
  if(isset($check)){
  header('location:index.php');
  }else{
  header('location:login.php'); 
  }
  }
  ?>
<html>
  <head>
      <meta charset="utf-8">
       <title> Book Bhookh </title>
            <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
            
           <link rel="stylesheet" href="master.css"> 
         <!-- Font Awesome -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link rel="https://fontawesome.com/icons/facebook-square?style=brands" >
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <!-- Bootstrap Scripts -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </head>

 <!-- HTML -->

 <body align="center" style="background-color: #c6ff1a;">

       <!-- NAVBAR -->

      <div class="container-fluid containerr">
             <nav class="navbar navbar-expand-lg navbar-dark ">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                      <a class=" navbar-brand" href="">BOOK BHOOKH</a>
                      <ul class="navbar-nav ml-auto">
                          <li class="nav-item">
                              <a class="nav-link" href="myorder.php">Your Orders</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="login.php">Log Out</a>
                        </li>
                     </ul>
                  </div>
              </nav>
         </div>
         <br><br><br>

         <!-- HEAD -->

         <div class="intro">
            <div class="con">
               <span><button id="popit" type="button" class="button1 btn" > ABOUT US </button></span> 
               <span><button id="seller" type="button" class="button2 btn"> BEST SELLERS </button></span> 
               <span><button id="contactme" type="button" class="button3 btn"> CONTACT US </button></span>
           </div> 
         <table class="table" cellspacing="100" align:"center" style="background-color:#99cc00;"  >
                    <tr>
                        <td align="left"> <h1>BOOK BHOOKH</h1>
                                   THIS WEBSITE IS BASICALLY DESIGNED FOR PC <br>
                                 We are a team who wish to introduce <em>You</em> a new way of <em>READING</em>.  <br><b>Click on the option "BEST SELLERS"
                                <br> to explore and know more about our collection.</b><br><br><br>
                                
                            </p>
                         </td>
                        <td align="center">
                            <table>
                                <tr>
                                    <td> <img src="images/cloud.png" alt="cloud-image" width="95" height="35"></td>
                                    <td> <img src="images/cloud.png" alt="cloud-image" width="50" height="14">  </td> 
                                </tr>
                            </table>
                        </td>
                    </tr>
         </table>
        </div>
        <div class="sliderss">
        <div class="auto-sliding" width="790" height="400">
          
         <ul class="autoslide">
            <li><img src="images/marv.jpg" alt="pic1" width="755" height="300"></li>
            <li><img src="images/slide2.jpg" alt="pic2" width="755" height="300"></li>
            <li><img src="images/slide3.png" alt="pic3" width="755" height="300"></li>
            <li><img src="images/slide4.jpg" alt="pic4" width="755" height="300"></li>
         </ul>
      </div>
      <div class="auto-slidin">
         <ul class="autoslide">
            <li><img src="images/msz.jpg" alt="pic1" width="755" height="300"></li>
            <li><img src="images/hbz.jpg" alt="pic2" width="755" height="300"></li>
            <li><img src="images/gbz.jpg" alt="pic3" width="755" height="300"></li>
            <li><img src="images/cpz1.jpg" alt="pic4" width="755" height="300"></li>
         </ul>
      </div>
      </div>
      <br>
      <!-- <table>
         <tr>
             <td> <img src="images/cloud.png" alt="cloud-image" width="95" height="35"></td>
             <td> <img src="images/cloud.png" alt="cloud-image" width="50" height="14">  </td> 
         </tr>
     </table> -->

       

        <!-- BUTTONS -->

         <div class="container containerr">
                 <hr size="4";> 
        </div>


        <!-- ABOUT US -->


                 <div class="popupp centerr">
                   <div class="icon">
                      <br>
                       <i class="fa fa-address-card-o fa-sm"></i>
                   </div>
                   <div class="title">
                        <h5>ABOUT US</h5>
                   </div>
                   <div class="description">
                          <h1>BOOK BHOOKH TEAM</h1>
                            <div class="inputt-box">
                               <div class="about">
                                   <p>
                                     <br> 
                                     <h6> Hello! We hope you liked our website and our vision. </h6><br>
                                     <strong> We are a team of three that includes Anshuman, Shreetam and Shailesh. We are basically
                                         web developers who wish to provide easy reading materials access to people so that they always have something good to read.
                                        We have a collection of different genre materials. Make sure to check them out and feel free to mail us for queries.
                                       </strong>. 
                                   </p>
                               </div>
                            </div>
                   </div>
                   <div class="dismiss-btn">
                          <button id="dismiss-popupp-btn">B A C K</button>
                   </div>
                 </div><br>
          
         <br>


         <!-- BEST SELLERS  -->



          <div class="popoff centerr">
          
          <div class="description">
                 <h3>BEST SELLERS</h3>
                   <div class="inputtt-box ed-box">
                        <div id="sellers" class="books-img">
                              <br>
                              <div class="row input input-box">
                                
                                  <div class="column column1">
                                           <a href="eng.php"><img src="images/hp.jpg" alt="" height="250" width="180;"></a>
                                           <p><h6>ENGLISH</h6></p>
                                  </div>
                                 <div class="column column2">
                                        <a href="hindi.php"><img src="images/hn.jpg" alt="" height="250" width="180;"></a>
                                        <p><h6>HINDI</h6></p>
                                  </div>
                               
                                  <div class="column column3">
                                       <a href="magazines.php"> <img src="images/mgz.jpg" alt="" height="250" width="180"></a>
                                       <p><h6>MAGAZINES</h6></p>
                                  </div>
                                
                                  <div class="column column4">
                                        <a href="academic.php"><img src="images/rds.jpg" alt="" height="250" width="180"></a>
                                        <p><h6>ACADEMICS</h6></p>
                                  </div>
                                
                              </div>     
                          </div>     
                      </div>
                 </div>
          <div class="dismiss-btn">
                 <button id="dismiss-popoff-btn">B A C K</button>
          </div>
        </div><br> 


        <!-- CONTACTS -->

        <div class="poppin centerr">
          <div class="title">
               <h5>CONTACT US</h5>
          </div>
          <div class="description">
                 <h1>BOOK BHOOKH TEAM</h1>
                  <div class="inputttt-box about">
                      <div id="contacts" class="contacts-img" align="left">
                          <div class="text input input-box ed-box">
                            <p>Let us know about your query and questions <br> about anything! Your reviews and suggestions matter.
                            </p>
                                   Email: anshugudduamsr@gmail.com <br>
                                   Instagram:
                                   <a href="https://www.instagram.com/beingdaanav/?hl=en">@beingdaanav</a>
                             <form action="contact.php" method="get" enctype="text/plain">
                                  <hr>
                             
                             <div> <label>Your Name</label>
                                  <input type="text" name="yourname" value=""><br >
                             </div>
                             <div class="label">
                                  <label>Do you want to sign up for the email list?
                                  <input type="checkbox" name="yourCheckbox"><br ></label>
                             </div>
                             <div>
                                  <label>Your email:</label>
                                  <input type="email" name="yourmail" value=""><br >
                                  <label>Your Message</label><br >
                                  <textarea name="yourmsg" rows="3" cols="40"></textarea><br><br>
                                  <button type="submit" name="submit" value="submit" class="submit-btn clicks"> SUBMIT </button>
                             </div>
                             </form>
                           </div> 
                        </div>
                  
                 </div> 
             </div> 
      
             <div class="dismiss-btn">
               <button id="dismiss-poppin-btn">B A C K</button>
             </div>
        </div><br>


        <!-- FOOTER -->

        <div class="thanks" align="center"> 
         <h3> Thanks for visiting </h3>
         <p class="copyright">© 2021 BOOKBHOOKH.</p></td>
         <footer  class="social-icon" >
          <a class="fa fa-facebook-square"></a>
          <a class="fa fa-instagram"></a>
          <a class="fa fa-twitter-square"></a>
          <a class="fa fa-envelope"></a>
          <p>© Copyright 2021 BOOK BHOOKH <br> Anshuman Mishra</p>
        </footer>
      </div> 


    <!-- JSCRIPT -->



     <script type="text/javascript">
      document.getElementById("popit").addEventListener("click",function(){
      document.getElementsByClassName("popupp")[0].classList.add("active");
      });
      document.getElementById("dismiss-popupp-btn").addEventListener("click",function(){
      document.getElementsByClassName("popupp")[0].classList.remove("active");
      });
      document.getElementById("seller").addEventListener("click",function(){
      document.getElementsByClassName("popoff")[0].classList.add("active");
      }); 
      document.getElementById("dismiss-popoff-btn").addEventListener("click",function(){
      document.getElementsByClassName("popoff")[0].classList.remove("active");
      }); 
      document.getElementById("contactme").addEventListener("click",function(){
      document.getElementsByClassName("poppin")[0].classList.add("active");
      }); 
      document.getElementById("dismiss-poppin-btn").addEventListener("click",function(){
      document.getElementsByClassName("poppin")[0].classList.remove("active");
      }); 
   </script>
  </body>
</html>