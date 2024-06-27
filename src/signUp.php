<?php
require_once("connect.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="../image/logo1.png" type="image/x-icon">
    <link rel="stylesheet" href="./output.css">
    <title>Registration-Form || Sunnah</title>
</head>
<body>
     <div class="body w-screen min-h-screen bg-5th font-roboto overflow-hidden">

      <!--=====================
               Nav Start
        ======================-->  
        <div class="navbar1 w-full max-h-[100px] bg-Secondary scale-105 md:bg-black/25 shadow-md md:shadow-xl shadow-3rd fixed top-0 left-0 z-50">
            <div class="max-w-5xl  mx-auto flex justify-between items-center py-2 px-5 sm:px-10 xl:px-0">
            <!-- Logo Start-->
              <div>
                <img class="max-h-20" src="../image/logo1.png" alt="">              
            </div>
            <!-- Logo End-->

            <!-- Menubar Start-->
             <div class="flex flex-col md:flex-row items-center gap-2">
                <!-- Menu Button Start-->
               <button type="button" class="navbtn text-4xl hover:scale-125 text-primary md:hidden">
                <i class="fa-solid fa-bars"></i>
               </button>
              <!-- Menu Button End-->
            <div class="navbar">
                <div class="navbar-inner">
                    <div class="nav"><a href="home.php">Home</a></div>
                    <div class="nav"><a href="#service">Services</a></div>
                    <div class="nav"><a href="#eligibility">Eligibility</a></div>
                    <div class="nav"><a href="#rules">Rules</a></div>
                    <div class="nav"><a href="#about">About Us</a></div>
                    <div class="nav"><a href="#contact">Contact Us</a></div>
                    <div id="btn-log1" class="btn-log1"><button class="login" type="button">Login</button></div>
                    <div class="btn-log2 md:absolute md:right-0 md:top-16 hidden">
                        <div id="btn-log2" >
                            <div class="nav1"><a href="admin-login.php" >Admin Login</a></div>
                            <div class="nav1"><a href="login.php" >User Login</a></div>
                        </div>  
                    </div>          
                </div>
            </div>
             </div>
            <!-- Menubar End-->
            </div>
        </div>       
        <!--=====================
                Nav end
        ======================-->   


     <!--================================
            Registration form body  Start
     =================================-->
      <div class="registration-image">
        <div class="bg-black/25 pt-36 pb-24  px-5">
           <!--=====================
             Form Part Start
           ======================-->  
          <div class="max-w-5xl mx-auto p-10 bg-black/75 shadow-xl md:hover:scale-105 transition duration-500">
            <div class="bg-primary text-center text-white p-2 text-xl font-bold mb-10"><h1>Registration Form</h1></div>
            <!-- Form Start-->
            <div>
                <form action="#" class="flex flex-col justify-between gap-10">
                    <!-- form design Start-->
                     <div class="flex flex-col md:flex-row justify-between gap-10">
                        <!-- div1 -->
                    <div class="md:w-1/2 flex flex-col gap-4">
                        <div class="flex flex-col"> 
                            <label class="font-bold block text-Secondary text-lg pb-1">User Name :</label> 
                            <input class="form-input" type="text" placeholder="@alex95" name="user">
                        </div>
        
                        <div class="flex flex-col"> 
                            <label class="font-bold block text-Secondary text-lg pb-1">Full Name :</label> 
                            <input class="form-input" type="text" placeholder="give your full name" name="fullname">
                        </div>
        
                        <div class="flex flex-col"> 
                            <label class="font-bold block text-Secondary text-lg pb-1">Phone Number :</label> 
                            <input class="form-input" type="number" placeholder="013XXXXXXXX" name="phone">
                        </div>
        
                        <div class="flex flex-col"> 
                            <label class="font-bold block text-Secondary text-lg pb-1">Email Address :</label> 
                            <input class="form-input" type="email" placeholder="alex@gmail.com" name="email">
                        </div>
        
                        <div class="flex flex-col"> 
                            <label class="font-bold block text-Secondary text-lg pb-1">Date of Birth :</label> 
                            <input class="form-input" type="date" name="date">
                        </div>
        
                        <div class="flex flex-col"> 
                            <label class="font-bold block text-Secondary text-lg pb-1">National ID : <span class="text-sm text-white">(if you have, then give carefully)</span></label> 
                            <input class="form-input" type="number" placeholder="011*********" name="nid">
                        </div>
  
                        <div class="flex flex-col"> 
                          <label class="font-bold block text-Secondary text-lg pb-1">Citizenship:</label> 
                          <select class="form-input" name="citizenship" id="citizenship">
                              <option value="none" selected disabled hidden>Select</option>
                              <option value="Bangladeshi">Bangladeshi</option>
                           </select>
                      </div>                   
  
                      <div class="flex flex-col"> 
                          <label class="font-bold block text-Secondary text-lg pb-1">Uploade Image :</label> 
                          <input class="form-input" type="file" name="image">
                      </div>
  
                      <div class="flex flex-col"> 
                          <label class="font-bold block text-Secondary text-lg pb-1">Permanent address:</label> 
                          <textarea  rows="1"  class="form-input" type="textarea" placeholder="give correct address" name="address"></textarea>
                      </div>
                         
                      </div>
                      <!-- div1 -->
        
                      <!-- div2 -->
                      <div class="md:w-1/2 flex flex-col gap-4">  
  
                          <div class="flex justify-between gap-5">
                              <div class="flex flex-col w-1/2"> 
                                  <label class="font-bold block text-Secondary text-lg pb-1">Gendar :</label> 
                                  <select class="form-input" name="gender" id="gender">
                                      <option value="none" selected disabled hidden>Select</option>
                                      <option value="Male">Male</option>
                                      <option value="Female">Female</option>
                                      <option value="Others">Others</option>
                                  </select>
                              </div>
      
                              <div class="flex flex-col  w-1/2"> 
                                  <label class="font-bold block text-Secondary text-lg pb-1">Marital Status:</label> 
                                  <select class="form-input" name="marital" id="marital">
                                      <option value="Single">Single</option>
                                      <option value="Married">Married</option>
                                      <option value="Widowed">Widowed</option>
                                      <option value="Divorced">Divorced</option>
                                  </select>
                              </div>
                          </div>
  
                          <div class="flex flex-col"> 
                              <label class="font-bold block text-Secondary text-lg pb-1">Child :</label> 
                              <input class="form-input" type="number" placeholder=" 0" name="childNum">
                          </div>
  
                          <div class="flex flex-col"> 
                              <label class="font-bold block text-Secondary text-lg pb-1">Password :</label> 
                              <input class="form-input" type="text" placeholder=" at least 6 character" name="pass">
                          </div>
  
                          <!-- Gurdian Part -->
                          <div class="bg-Secondary text-center text-primary p-1 text-lg font-bold mt-8 mb-3"><h1>Power of Attorney/ Gurdian/ Conservators:</h1></div>
  
                          <div class="flex flex-col"> 
                              <label class="font-bold block text-Secondary text-lg pb-1">Gurdian Name :</label> 
                              <input class="form-input" type="text" placeholder=" full name" name="ug_name">
                          </div>
  
                          <div class="flex justify-between gap-5">
                              <div class="w-1/2 flex flex-col"> 
                                  <label class="font-bold block text-Secondary text-lg pb-1">Relation :</label> 
                                  <select class="form-input" name="relationn" id="marital">
                                      <option value="none" selected disabled hidden>Select</option>
                                      <option value="Father">Father</option>
                                      <option value="Mother">Mother</option>
                                      <option value="Child">Child</option>
                                      <option value="Husband">Husband</option>
                                      <option value="Wife">Wife</option>
                                      <option value="Brother">Brother</option>
                                      <option value="Sister">Sister</option>
                                      <option value="Others">Others</option>
                              </select>
                              </div>
      
                              <div class="w-1/2 flex flex-col"> 
                                  <label class="font-bold block text-Secondary text-lg pb-1">Phone Number :</label> 
                                  <input class="form-input" type="number" placeholder=" 012*********" name="ug_num">
                              </div>
                          </div>
  
                          <div class="flex flex-col"> 
                              <label class="font-bold block text-Secondary text-lg pb-1">Email id :</label> 
                              <input class="form-input" type="email" placeholder=" alex@gmail.com" name="ug_email">
                          </div>
  
                          <div class="flex flex-col"> 
                              <label class="font-bold block text-Secondary text-lg pb-1">Address :</label> 
                              <textarea class="form-input" id="textarea1" placeholder=" full address" rows="1" name="ug_add"></textarea>
                          </div>
  
                          <div class="flex flex-col"> 
                              <label class="font-bold block text-Secondary text-lg pb-1">Comments :</label> 
                              <textarea class="form-input" id="textarea1" placeholder=" write your opinion" rows="1" name="ug_comments"></textarea>
        
                          </div>
                      </div>
                      <!-- div2 -->
                     </div>
                    <!-- form design end-->

                    <!-- Button -->
                     <div class="submit-btn">
                        <button>Register Now</button>
                     </div>
                  </form>   
            </div>
            <!-- Form End-->

            <div class="bg-primary mt-6 font-bold text-Secondary text-sm">
                <marquee class="px-3"  behavior="slide" direction="left">Please give all the correct information</marquee>
             </div>

          </div>
          <!--=====================
            Form Part Start
          ======================--> 
        </div>
      </div>
     <!--==============================
            Registration form body  end
     ===============================-->

    </div>
     

  <!--=====================
            Footer  Start
     ======================--> 
     <footer class="bg-primary mt-auto overflow-hidden">
         <!-- footer 1st part start -->
         <div class="w-full py-5">
           <div class="max-w-5xl xl:max-w-6xl mx-auto flex flex-col justify-center items-center gap-4 p-14 bg-gray-400/25">
            <div class="flex items-center gap-3">
               <img class="h-12 border-2 border-white rounded-full" src="../image/logo1.png" alt="">
               <h1 class="font-bold text-xl md:text-2xl text-Secondary">Sunnah Old Age Home</h1>
            </div>
            <p class="text-sm text-white md:text-Secondary md:text-lg text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio repudiandae accusantium nostrum? Reiciendis fuga distinctio obcaecati soluta ipsum dicta nostrum? Voluptatibus aspernatur necessitatibus illo architecto maiores eum sit temporibus inventore.</p>
            <div class="flex gap-6">
             <div class="h-5 w-6 ">
               <a class="footer-icon" href="#"><i class="py-1 px-2 rounded-full border-2 fa-brands fa-facebook-f"></i></a>
             </div>
             <div class="h-5 w-6 ">
               <a class="footer-icon" href="#"><i class="p-1 rounded-full border-2 fa-brands fa-twitter"></i></a>
             </div>
             <div class="h-5 w-6 ">
               <a class="footer-icon" href="#"><i class="p-1 rounded-full border-2 fa-brands fa-linkedin-in"></i></a>
             </div>
             <div class="h-5 w-6 ">
               <a class="footer-icon" href="#"><i class="p-1 rounded-full border-2 fa-brands fa-google"></i></a>
             </div>
             <div class="h-5 w-6 ">
               <a class="footer-icon" href="#"><i class="p-1 rounded-full border-2 fa-brands fa-google-play"></i></a>
             </div>        
            </div>
           </div>
         </div>
         <!-- footer 1st part end -->

         <!-- footer Last part start -->
          <div class="md:text-lg text-primary text-center font-bold p-2 md:py-3 bg-3rd">
            <h1><span class="text-yellow-500">Copyright @2024</span> Sunnah Old Age Home Management System || Developed by Farhana Bente Islam || 21303195</h1>
          </div>
         <!-- footer Last part end -->


      </footer>
    <!--=====================
            Footer  End
     ======================-->

    </div>

       <!--=====================
             Custom JS Start
       ======================-->  
   <script src="./script.js"></script>
</body>
</html>
    