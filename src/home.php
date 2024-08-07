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
    <title>Home || Sunnah</title>
</head>
<body>
   
   <div class="body w-screen min-h-screen bg-5th font-roboto ">

    <!--=====================
          Nav Start
    ======================-->  
    <div class="navbar1 w-full max-h-[100px] bg-Secondary scale-105 md:bg-black/25 shadow-md md:shadow-xl shadow-3rd fixed top-0 left-0 z-50">
            <div class="max-w-5xl  mx-auto flex justify-between items-center py-2 px-5 sm:px-10 xl:px-0">
            <!-- Logo Start-->
              <div>
                <img class="max-h-20" src="./image/logo1.png" alt="">              
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
             
    <!--=====================
          Banner Start
    ======================-->  
    <div id="home" class="w-full banner-full ">
           <div class="banner">
             <div class="w-full mt-24 lg:mt-0 lg:max-w-5xl  lg:mx-auto lg:pt-48 relative">
                <!-- Banner Intro Start-->
                <div class="banner-intro pl-5 md:pl-10 lg:pl-0 py-32 md:py-40 ">
                    <h1 class="text-3xl md:text-5xl"><span class="text-primary font-bold">Sunnah</span> Old age home</h1>
                    <p class="text-[17px] md:text-2xl pt-1 pb-10 text-primary/75">That will make you feel like your own</p>
                    <a class="ml-12 sm:ml-20 md:ml-0 p-2 md:p-3 bg-primary  text-sm text-4th border-2 border-primary hover:bg-transparent hover:text-primary" target="_blank" href="signUp.php">Registration Now</a>
                </div>
                <!-- Banner Intro End-->

                <!-- Banner Card Start -->
                 <div class="banner-card ">
                    <!-- Card1 -->
                    <div class="flex gap-3 text-Secondary mx-4 md:mx-2">
                        <div class="font-bold ">
                            <i class='text-2xl bx bxs-donate-heart '></i>
                        </div>
                        <div class="flex flex-col flex-wrap">
                            <h5 class="font-bold text-lg">Give Donation</h5>
                            <p class="text-sm pr-3 text-6th">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda, ex.</p>
                        </div>
                    </div>
                    <!-- Card1 -->

                    <!-- Card2 -->
                    <div class="flex gap-3 text-Secondary border-y-2 border-y-6th md:border-y-0 md:border-x-2  md:border-x-6th mx-4 md:mx-2 py-3 md:py-0 md:px-2">
                        <div class="font-bold ">
                            <i class='text-2xl bx bxs-donate-heart'></i>
                        </div>
                        <div class="flex flex-col flex-wrap">
                            <h5 class="font-bold text-lg">Give Donation</h5>
                            <p class="text-sm pr-9 text-6th">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda, ex.</p>
                        </div>
                    </div>
                    <!-- Card2 -->

                    <!-- Card3 -->
                    <div class="flex gap-3 text-Secondary mx-4 md:mx-1">
                        <div class="font-bold ">
                            <i class='text-2xl bx bxs-donate-heart'></i>
                        </div>
                        <div class="flex flex-col flex-wrap">
                            <h5 class="font-bold text-lg">Give Donation</h5>
                            <p class="text-sm pr-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda, ex.</p>
                        </div>
                    </div>
                    <!-- Card3 -->
                 </div>
                <!-- Banner Card End -->
             </div>
           </div>
    </div>
    <!--=====================
          Banner End
    ======================--> 
  
        
     <!--=====================
          Service Start
     ======================--> 
     <div id="service" class="service w-full pt-56 pb-16 px-5  lg:px-10 md:py-28 overflow-hidden">
       <div class="w-full lg:max-w-5xl lg:mx-auto">
        <!-- Common Title Start-->
        <div class="common-title">
            <h1 class="shadow-md scale-105">Our All Services</h1>
        </div>
        <!-- Common Title End-->
  
        <!-- Service Body Start-->
        <div class="bg-3rd/50 p-4 md:p-3 lg:p-7 mb-12 md:mb-10 transition duration-500 md:hover:scale-105  xl:scale-110 xl:hover:scale-125 shadow-xl">
           <div class="max-h-[220px] sm:max-h-[420px] md:max-h-full lg:max-h-[360px] p-4 overflow-y-scroll no-scrollbar flex flex-col gap-3 md:gap-4 lg:gap-7">
           
           <!-- *service row1 Start* -->
            <div class="flex flex-col md:flex-row gap-7">
            <!-- s1 start -->
            <div class="service-card">
               <div>
                  <img class="scale-110 shadow-md border-2 border-primary" src="./image/p4.jpg" alt="">
               </div>
               <div class="pl-3 pr-4 py-2">
                  <h1 class="text-xl font-bold text-primary">Accommodation</h1>
                  <p class="text-sm text-justify py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, nulla nostrum neque minima dolor at omnis blanditiis. Natus, repudiandae debitis!</p>
                  <a class="font-bold text-sm p-1 bg-primary hover:bg-transparent text-Secondary hover:text-primary border border-primary" href="">Learn More ></a>
               </div>
            </div>
            <!-- s1 End -->
          
             <!-- s2 start -->
             <div class="service-card">
              <div>
                 <img class="scale-110 shadow-md border-2 border-primary" src="./image/p5.png" alt="">
              </div>
              <div class="pl-3 pr-4 py-2">
                 <h1 class="text-xl font-bold text-primary">Medical checkup</h1>
                 <p class="text-sm text-justify py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, nulla nostrum neque minima dolor at omnis blanditiis. Natus, repudiandae debitis!</p>
                 <a class="font-bold text-sm p-1 bg-primary hover:bg-transparent text-Secondary hover:text-primary border border-primary" href="">Learn More ></a>
              </div>
           </div>
           <!-- s2 End --> 
         </div>
           <!-- *service row1 End* -->
           

           <!-- *service row2 Start* -->
           <div class="flex flex-col md:flex-row gap-7">
            <!-- s1 start -->
            <div class="service-card">
               <div>
                  <img class="scale-110 shadow-md border-2 border-primary" src="./image/p3.png" alt="">
               </div>
               <div class="pl-3 pr-4 py-2 ">
                  <h1 class="text-xl font-bold text-primary">Interaction Centre</h1>
                  <p class="text-sm text-justify py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, nulla nostrum neque minima dolor at omnis blanditiis. Natus, repudiandae debitis!</p>
                  <a class="font-bold text-sm p-1 bg-primary hover:bg-transparent text-Secondary hover:text-primary border border-primary" href="">Learn More ></a>
               </div>
            </div>
            <!-- s1 End -->
          
             <!-- s2 start -->
             <div class="service-card">
              <div>
                 <img class="scale-110 shadow-md border-2 border-primary" src="./image/p1.jpg" alt="">
              </div>
              <div class="pl-3 pr-4 py-2">
                 <h1 class="text-xl font-bold text-primary">Nursing & Personal Care</h1>
                 <p class="text-sm text-justify py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, nulla nostrum neque minima dolor at omnis blanditiis. Natus, repudiandae debitis!</p>
                 <a class="font-bold text-sm p-1 bg-primary hover:bg-transparent text-Secondary hover:text-primary border border-primary" href="">Learn More ></a>
              </div>
           </div>
           <!-- s2 End --> 
           </div>
           <!-- *service row2 End* -->

           <!-- *service row3 Start* -->
           <div class="flex flex-col md:flex-row gap-7">
            <!-- s1 start -->
            <div class="service-card">
               <div>
                  <img class="scale-110 shadow-md border-2 border-primary" src="./image/p2.jpg" alt="">
               </div>
               <div class="pl-3 pr-4 py-2">
                  <h1 class="text-xl font-bold text-primary">Counseling</h1>
                  <p class="text-sm text-justify py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, nulla nostrum neque minima dolor at omnis blanditiis. Natus, repudiandae debitis!</p>
                  <a class="font-bold text-sm p-1 bg-primary hover:bg-transparent text-Secondary hover:text-primary border border-primary" href="">Learn More ></a>
               </div>
            </div>
            <!-- s1 End -->
          
             <!-- s2 start -->
             <div class="service-card">
              <div>
                 <img class="scale-110 shadow-md border-2 border-primary" src="./image/p6.jpg" alt="">
              </div>
              <div class="pl-3 pr-4 py-2">
                 <h1 class="text-xl font-bold text-primary">Monthly Tour</h1>
                 <p class="text-sm text-justify py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, nulla nostrum neque minima dolor at omnis blanditiis. Natus, repudiandae debitis!</p>
                 <a class="font-bold text-sm p-1 bg-primary hover:bg-transparent text-Secondary hover:text-primary border border-primary" href="">Learn More ></a>
              </div>
           </div>
           <!-- s2 End --> 
         </div>
           <!-- *service row3 End* -->
        </div>
        <!-- Service Body End-->
           </div>
       </div>
     </div>
     <!--=====================
             Service End
     ======================--> 

     <!--=====================
          Eligibility  Start
     ======================--> 
    <div id="eligibility" class="bg-primary/30 px-7 lg:px-0 py-32 overflow-hidden">
      <!-- Common Title Start-->
      <div class="common-title">
         <h1 class="shadow-xl shadow-Secondary scale-105 ">Eligibility</h1>
     </div>
     <!-- Common Title End-->
     
     <!-- ele body start-->
     <div class="max-w-5xl mx-auto  w-full mb-24 px-7 py-5 border-2 border-primary flex flex-col md:flex-row gap-2 xl:scale-125 md:shadow-2xl md:shadow-primary">
      <div >
         <img class="w-full md:w-auto md:h-72  border-2 border-Secondary " src="./image/e1.jpg" alt="">
      </div>
      
      <div class="flex flex-col gap-4">
         <div class="bg-3rd md:bg-Secondary border border-primary shadow-xl p-5  md:pl-7 md:py-10  lg:p-12 scale-125 md:scale-110 lg:scale-125 font-bold text-xl text-primary">
            <ul class="list-disc px-10 md:px-0">
              <li>Minimum Age Required is <b>50</b> years.</li>
              <li >Person should not be suffering from any infectious disease.</li>
              <li >The Person should be free from addiction of any kind.</li>
            </ul>
          </div>
          <div class="bg-primary mt-3 md:mt-0  py-5  px-6 lg:px-10  text-4th font-bold text-xl">
            <p class="text-center scale-105 hover:scale-110">Have you any query? Contact us <a class="text-yellow-600" href="#">01233446567</a></p>
          </div>
      </div>
   </div>
     <!-- ele body end -->
    </div>
     <!--=====================
          Eligibility  End
     ======================--> 


     <!--=====================
              Rules  Start
     ======================--> 
     <div id="rules" class="py-32 px-5 overflow-hidden">
      <!-- Common Title Start-->
      <div class="common-title">
         <h1 class="shadow-xl shadow-Secondary scale-105 ">Rules</h1>
     </div>
     <!-- Common Title End-->
      
     <!-- Rules citizen part Start -->
     <div class="w-full md:max-w-5xl xl:max-w-6xl mx-auto p-3 border-2 shadow-xl 2xl:scale-110">
      <div class="text-center p-3 bg-primary font-bold text-xl text-white">
         <h4>Rules For Citizen</h4>
      </div>

      <!-- rules inner part start -->
      <div class="my-10 ">
        <!-- r1 Start -->
         <div class="grid grid-cols-7 gap-2 w-full mt-3">
            <div class="flex justify-end items-center pl-3 font-bold text-xl col-start-1 col-end-6 sm:col-start-1 sm:col-end-5  md:col-start-1 md:col-end-4  text-primary">
               <p class="md:text-justify leading-5">All residents shall maintain discipline and ensure that other residents are not disturbed by their any act.</p>
            </div>

            <div class="flex justify-center col-start-6 col-end-8 md:col-start-4 md:col-end-5">
               <img class="h-20 rounded-full border-2 border-primary" src="./image/r3.png" alt="">
            </div>
         </div>
         <div class="flex justify-center">
            <img class="h-16" src="./image/line1.png" alt="">
         </div>
         <!-- r1 End -->

         <!-- r2 Start -->
         <div class="grid grid-cols-7  gap-2 w-full ">
            <div class="flex justify-center col-start-1 col-end-3 md:col-start-4 md:col-end-5">
               <img class="h-20 rounded-full border-2 border-primary" src="./image/r1.jpg" alt="">
            </div>

            <div class="flex  items-center py-5 font-bold text-xl col-start-3 col-end-8 md:col-span-3 text-primary">
               <p>Firearms and weapons are not allowed in premises.</p>
            </div>

         
         </div>
         <div class="flex justify-center">
            <img class="h-16" src="./image/line1.png" alt="">
         </div>
         <!-- r2 End -->

         <!-- r3 Start -->
         <div class="grid grid-cols-7  gap-2 w-full ">
            <div class="flex justify-end items-center py-5 font-bold text-xl col-start-1 col-end-6 md:col-start-1 md:col-end-4  text-primary">
               <p>Keeping pets are not allowed in premises.</p>
            </div>

            <div class="flex justify-center col-start-6 col-end-8 md:col-start-4 md:col-end-5">
               <img class="h-20 rounded-full border-2 border-primary" src="./image/r2.jpg" alt="">
            </div>
         </div>
         <div class="flex justify-center">
            <img class="h-16" src="./image/line1.png" alt="">
         </div>
         <!-- r3 End -->

         <!-- r4 Start -->
         <div class="grid grid-cols-7  gap-2 w-full ">
            <div class="flex justify-center col-start-1 col-end-3 md:col-start-4 md:col-end-5">
               <img class="h-20 rounded-full border-2 border-primary" src="./image/r4.png" alt="">
            </div>

            <div class="flex  items-center pr-3  font-bold text-xl col-start-3 col-end-8 md:col-span-3 text-primary">
               <p class="text-justify leading-5">our minimum lock in period is six month and after six month if discharge require than minimum two month notice require for refund of security.</p>
            </div>

         
         </div>
         <!-- r4 End -->
      </div>
      <!-- rules inner part start -->
     </div>
     <!-- Rules citizen part End -->

      <!-- Rules Visitor part Start -->
      <div class="max-w-5xl xl:max-w-6xl mx-auto p-3 border-2 shadow-xl 2xl:scale-110 mt-32">
         <div class="text-center p-3 bg-primary font-bold text-xl text-white">
            <h4>Rules For Visitor</h4>
         </div>
   
         <!-- rules inner part start -->
         <div class="my-10 sm:mx-20 md:mx-48 flex flex-col gap-5">
           <!-- r1 Start -->
            <div class="flex gap-2">
               <div class="px-5 py-3 bg-primary">
                  <img class="h-16 w-16" src="./image/watch.jpg" alt="">
               </div>
               <div class="bg-gray-300 flex items-center p-3">
                 <p class="font-bold text-primary ">Visiting hours for the guest will be from 10am to 6pm , Only identified guests are allowed inside the home.</p>
               </div>
            </div>
           <!-- r1 End -->
   
            <!-- r2 Start -->
            <div class="flex gap-2">
               
               <div class="bg-gray-300 flex items-center p-3">
                 <p class="font-bold text-primary ">Guests are not allowed to stay overnight in their resident without the permission from the management.</p>
               </div>

               <div class="px-5 py-3 bg-primary">
                  <img class="h-16 w-16 bg-white rounded-full" src="./image/not-visitor.png" alt="">
               </div>
            </div>
            <!-- r2 End -->
   
         </div>
         <!-- rules inner part start -->
        </div>
        <!-- Rules Visitor part End -->

     </div>

     <!--=====================
              Rules  End
     ======================--> 

     <!--=====================
              About  Start
     ======================--> 
      <div id="about" class="bg-gray-200 py-32 px-5 overflow-hidden" >
      <!-- Common Title Start-->
       <div class="common-title">
         <h1 class="shadow-xl shadow-Secondary scale-105 ">About Us</h1>
       </div>
      <!-- Common Title End-->
      
      <div class="about-image p-5 md:max-w-5xl xl:max-w-6xl mx-auto flex justify-center shadow-lg shadow-primary xl:scale-110 items-center border-4 border-primary py-16 mb-16">
         <div class="flex flex-col justify-center items-center max-w-4xl mx-auto bg-black/75 text-white p-6 md:p-10">
            <h1 class="text-xl md:text-4xl text-Secondary shadow-2xl scale-105 py-6">Old Age Home Management System!!</h1>
            <p class="md:text-xl text-center shadow-2xl ">We care of our elders.That is why we are here to help you and your loved ones facing difficulty in going about their daily routines. The elderly of the house need constant attention and care post-surgery or during the recuperating period. You cannot stay by their side every day,
              and there is nowhere else they would rather be than in the comforts of their home.
            </p>
           </div>
      </div>

      </div>
      <!--=====================
             About  end
     ======================--> 


     <!--=====================
            Contact  Start
     ======================--> 
      <div id="contact" class="py-32 px-10  w-full overflow-hidden">
         <!-- Common Title Start-->
            <div class="common-title ">
               <h1 class="shadow-xl shadow-Secondary scale-105 ">Contact Us</h1>
            </div>
         <!-- Common Title End-->

            <div class="contact-image max-w-5xl mx-auto mt-10 md:mt-0 shadow-lg hover:scale-105 xl:scale-110 xl:hover:scale-125 transition duration-500 shadow-primary">
               <div class="bg-black/25 rounded-md flex flex-col md:flex-row justify-between gap-2 p-5">
                  <div class="md:w-1/2 flex flex-col justify-between gap-4 md:gap-0 p-10 rounded-md bg-black/75">
                     <div class="text-Secondary">
                        <p class="text-lg font-bold"><i class="text-lg text-white fa-solid fa-location-dot"></i> Address</p>
                        <p class="text-lg font-bold">Embankment Drive Road, Dhaka 1230</p>
                      </div>
                      <div class="text-Secondary">
                        <p class="text-lg font-bold"><i class="text-lg text-white fa-solid fa-phone"></i> Let's Talk</p>
                        <p class="text-lg font-bold">013565567688</p>
                     </div>
                     <div class="text-Secondary">
                        <p class="text-lg font-bold"><i class="text-lg text-white fa-regular fa-envelope"></i> General Support</p>
                        <p class="text-lg font-bold">sunnah@gmail.com</p>
                     </div>
                  </div>
   
                  <!-- Contact form Start-->

                  <div class="md:w-1/2 flex flex-col p-4 rounded-md bg-black/75">   
                     <div class="px-5 my-5">
                       <form action="#" method="POST" class="flex flex-col gap-4">
                         <div class="flex flex-col"> 
                            <label class="font-bold block text-Secondary text-lg pb-2">Full Name :</label> 
                            <input class="form-input" type="text" placeholder="give your full name" name="pname">
                         </div>
                         <div class="flex flex-col"> 
                           <label class="font-bold block text-Secondary text-lg pb-2">Phone Number :</label> 
                           <input class="form-input" type="number" placeholder="01XXXXXXXXXX" name="pmobile">
                        </div>
                        <div class="flex flex-col"> 
                           <label class="font-bold block text-Secondary text-lg pb-2">Email Address :</label> 
                           <input class="form-input" type="email" placeholder="alex@gmail.com" name="pemail" Required>
                        </div>
                        <div class="flex flex-col"> 
                           <label class="font-bold block text-Secondary text-lg pb-2">Message :</label> 
                           <textarea  rows="1"  class="form-input" type="textarea" placeholder="write comment" name="ptext"></textarea>
                        </div>
                        
                        <div class="submit-btn">
                           <button class="cursor-pointer" name="consubmit">SEND</button>
                        </div>
                       </form>
                       <?php 
            if(isset($_POST['consubmit']))
            {
            $pname=$_POST['pname'];
            $pmobile=$_POST['pmobile'];
            $pemail=$_POST['pemail'];
            $ptext=$_POST['ptext'];

            $sql="INSERT INTO `tb_contact`(`p_id`, `pname`, `pmobile`, `pemail`, `pmessege`, `pdate`) VALUES ('null','$pname','$pmobile','$pemail','$ptext',current_timestamp)";
            $result= mysqli_query($con,$sql);
            if($result)
            {
               echo"
            <script>
            alert('Your message is stored, Thanks..'); 
            window.location.href='home.php';
            </script>
            ";
            }
            else{
            echo"
            <script>
            alert('Give the correct information...'); 
            window.location.href='home.php';
            </script>
            ";
            }
            }

            
         ?>
                     </div>
                  </div>
                  <!-- Contact form Start-->
               </div>
            </div>
      </div>

     <!--=====================
            Contact  end
     ======================--> 
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
    