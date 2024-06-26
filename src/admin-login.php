<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="../image/logo1.png" type="image/x-icon">
    <link rel="stylesheet" href="./output.css">
    <title>Admin Login || Sunnah</title>
</head>
<body>
     <div class="body w-screen min-h-screen bg-5th font-roboto overflow-hidden">
      <!--=====================
               Nav Start
        ======================-->  
        <div class="navbar1 w-full max-h-[100px] bg-Secondary scale-105 md:bg-black/25 shadow-md md:shadow-xl shadow-3rd fixed top-0 left-0 z-50">
          <div class="max-w-5xl  mx-auto flex justify-between items-center py-2 px-5 md:px-0">
          <!-- Logo Start-->
            <div>
              <img class="max-h-20" src="../image/logo1.png" alt="">              
          </div>
          <!-- Logo End-->

          <!-- Menubar Start-->
           <div class="flex flex-col md:flex-row items-center gap-2">
              <!-- Menu Button Start-->
             <button type="button" class="nav-btn text-4xl hover:scale-125 text-primary md:hidden">
              <i class="fa-solid fa-bars"></i>
             </button>
            <!-- Menu Button End-->
          <div class="navbar">
              <div class="navbar-inner">
                  <div class="nav"><a href="home.html">Home</a></div>
                  <div class="nav"><a href="#service">Services</a></div>
                  <div class="nav"><a href="#eligibility">Eligibility</a></div>
                  <div class="nav"><a href="#rules">Rules</a></div>
                  <div class="nav"><a href="#about">About Us</a></div>
                  <div class="nav"><a href="#contact">Contact Us</a></div>
                  <div id="btn-log1" class="btn-log1"><button class="login" type="button">Login</button></div>
                  <div class="btn-log2 md:absolute md:right-0 md:top-16 hidden">
                      <div id="btn-log2" >
                          <div class="nav1"><a href="admin-login.html">Admin Login</a></div>
                          <div class="nav1"><a href="login.html">User Login</a></div>
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

      <div class="login-image">
        <div class="bg-black/50 py-60 px-5">
          <div class="max-w-5xl mx-auto p-6 flex flex-col md:flex-row justify-between gap-7 bg-black/75 shadow-xl md:hover:scale-105 transition duration-500">
            <div class="md:w-1/2 text-white bg-primary/50 flex justify-center items-center py-10 md:py-0">
              <div class="px-12 flex flex-col items-center">
                <h1 class="text-xl text-Secondary font-bold">Caring for the Elderly</h1>
                <p class="text-center">“Remain patient and give all your respect to our beloved seniors; they have earned their dignity through their lifetimes.”</p>
              </div>
            </div>

            <!-- Form start-->
            <div class="md:w-1/2">
                <div class="text-2xl bg-primary/50 text-center p-2 mb-7 text-Secondary font-bold">
                   <h1>Admin Login</h1>
                </div>
                <div>
                  <form action="#" class="flex flex-col gap-7">
                     <div class="flex flex-col"> 
                         <label class="font-bold block text-Secondary text-lg pb-1">User Name :</label> 
                         <input class="form-input" type="text" placeholder="@alex95" name="user">
                     </div>
 
                     <div class="flex flex-col"> 
                         <label class="font-bold block text-Secondary text-lg pb-1">Password :</label> 
                         <input class="form-input" type="text" placeholder=" enter correct password" name="pass">
                     </div>
 
                     <!-- Button -->
                     <div class="submit-btn">
                         <button>Register Now</button>
                      </div>
                  </form>

                  <div class="text-blue-800 text-center my-3 font-bold hover:text-blue-400">
                    <a href="#">Forgot Password?</a>
                  </div>
                </div>
             </div>
            <!-- Form end -->
          </div>
        </div>
      </div>

       <!--=====================
            Footer  Start
     ======================--> 
     <footer class="bg-primary mt-auto">
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