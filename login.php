
<html>
    <head>
       <title> Login Page </title>
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,900&display=swap" rel="stylesheet">
         
    </head>
  <body>
      <div class="all">
      <div class="form-box">
       
               <h1>BOOK BHOOKH</h1>
               <div id="error"></div>
               <form id="form" action="valid.php" method="post">
               <div class="input-box mail">
                         <i class="fa fa-user" ></i>
                        <input id="username" type="text" name="name" placeholder="Username" value="" >
                        
               </div>
               <div class="input-box pass">
                    <i class="fa fa-key" ></i>
                    <input id="password" type="password" name="pass" placeholder="Password" required>
                    <!-- <span class="eye" onclick="myFunction()">
                      <i id="hide1" class="fa fa-eye" ></i>
                      <i id="hide2" class="fa fa-eye-slash" ></i>
                    </span> -->
               </div>
               <a href="index.php"><button type="button" class="login-btn click"> LOGIN </button></a>
            </form>
                  <div class="signup ">
                         <p> Dont have an account? <u>Click below to sign up</u> <br>
                        Can also log in without an account for checking if dont want to be a member! </p>

                       <div class="popup centerr">
                            <div class="icon">
                                <i class="fa fa-user-circle"></i>
                            </div>
                            <div class="title ">
                                SIGN UP PAGE
                            </div>
                            <div class="description">
                                   <h1>BOOK BHOOKH</h1>
                                   <div class="inputt-box">
                                      <form action="regd.php" onsubmit="return validation()" method="post">
                                          <div class="email ">
                                             <i class="faa fa fa-user-circle fa-xs" ></i> 
                                             <input type="text" name="name" placeholder="Username" id="userwork" >
                                             <span class="chane" id="username"></span>
                                          </div>
                                          <div class="email ">
                                             <i class="faa fa fa-envelope-o fa-xs" ></i>
                                             <input type="text" name="mail" placeholder="Email Id" id="mailwork" >
                                             <span class="chane" id="emailids"></span>
                                          </div>
                                          <div class="pass password email">
                                             <i class="faa fa fa-key fa-xs" ></i>
                                             <input type="password" name="pass" placeholder="Create Password" id="passwork">
                                             <span class="chane" id="passwords"></span>
                                          </div>
                                          <div class="pass confirm email">
                                              <i class="faa fa fa-lock fa-xs" ></i>
                                             <input type="password" name="passcon" placeholder="Confirm Password" id="confwork">
                                             <span class="chane" id="confpass"></span>
                                          </div> <br>
                                          <div class="dob gender choose">
                                             <input type="date" placeholder="Date of Birth">
                                             <label for="gender"></label>
                                             <select name="gender" id="gender">
                                                 <option value="male">Male</option>
                                                 <option value="female">Female</option>
                                                 <option value="others">Others</option>
                                             </select>
                                          </div><br>
                                          <button type="submit" name="submit" value="submit" class="signup-btn clicks"> SIGN UP </button>
                                       </form>
                                   </div>
                            </div><br>
                            <div class="dismiss-btn">
                               <button id="dismiss-popup-btn">B A C K</button>
                            </div>
                     </div>
                         <div class="center chh">
                             <button id="signup"> SIGN UP </button>
                         </div>
                   </div>
       </div>
    </div>
       <script type="text/javascript">
              document.getElementById("signup").addEventListener("click",function(){
              document.getElementsByClassName("popup")[0].classList.add("active");
              });
              document.getElementById("dismiss-popup-btn").addEventListener("click",function(){
              document.getElementsByClassName("popup")[0].classList.remove("active");
              });  
              
              function validation(){
                var user = document.getElementById('userwork').value;
                var mail = document.getElementById('mailwork').value;
                var password = document.getElementById('passwork').value;
                var confpass = document.getElementById('confwork').value;
               
                if(user==""){
                    document.getElementById('username').innerHTML=" **Username Missing"
                    return false;
                }
                if((user.length < 6)||(user.length > 15)){
                    document.getElementById('username').innerHTML=" **Username must have 6-15 chars"
                    return false;
                }
                if(!isNaN(user)){
                    document.getElementById('username').innerHTML=" **Username needs alphabets"
                    return false;
                }
                if(mail==""){
                    document.getElementById('emailids').innerHTML=" **Email Missing"
                    return false;
                }
                if(mail.indexOf('@') <= 0){
                    document.getElementById('emailids').innerHTML=" **@ Invalid position"
                    return false;
                }
                if((mail.charAt(mail.length-4) != '.') && (mail.charAt(mail.length-3) != '.')){
                    document.getElementById('emailids').innerHTML=" **Invalid Email Id"
                    return false;  
                }
                if(password==""){
                    document.getElementById('passwords').innerHTML=" **Please give a password"
                    return false;
                }
                if((password.length < 6)||(password.length > 20)){
                    document.getElementById('passwords').innerHTML=" **Password must have 6-20 characters"
                    return false;
                }
                if(confpass==""){
                    document.getElementById('confpass').innerHTML=" **Confirmation Missing"
                    return false;
                }
                if(password != confpass){
                    document.getElementById('confpass').innerHTML=" **Passwords are not matching"
                    return false;
                }
            }

            // var pwd= document.getElementbyId('password');
            // var eye= document.getElementbyId('hide2');
            // eye.addEventListener('click', togglePass);

            // function togglePass(){
            //     eye.classList.toggle('active');
            //     (pwd.type=='password')? pwd.type= 'text' : pwd.type= 'password';
            // }
      </script> 
   </body>
</html>