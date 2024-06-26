<?php
require_once("ohmsfunction/function.php");
get_header();
?>
    <title>User Login || Sunnah</title>
</head>
<body>
     <div class="body w-screen min-h-screen bg-5th font-roboto overflow-hidden">
<?php get_nav() ?>  

    <!-- User login body part start -->
      <div class="login-image">
        <div class="bg-black/50 py-60 px-5">
          <div class="max-w-5xl mx-auto p-6 flex flex-col md:flex-row justify-between gap-7 bg-black/75 shadow-xl md:hover:scale-105 transition duration-500">
            <div class="md:w-1/2 text-white bg-primary/50 flex justify-center items-center py-10 md:py-0">
              <div class="px-12 flex flex-col items-center">
                <h1 class="text-xl text-Secondary font-bold">Welcome to Here</h1>
                <p class="text-center">“Remain patient and give all your respect to our beloved seniors; they have earned their dignity through their lifetimes.”</p>
              </div>
            </div>

            <!-- Form start-->
            <div class="md:w-1/2">
                <div class="text-2xl bg-primary/50 text-center p-2 mb-7 text-Secondary font-bold">
                   <h1>User Login</h1>
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

                  <div class="text-Secondary text-center my-3 flex justify-between px-1 font-bold">
                    <p>Not registered? <span class="text-blue-700 hover:text-blue-500"><a href="signUp.html">Sign up</a></span></p>
                    <p class="text-blue-700 hover:text-blue-500"><a href="#">Forgot Password?</a></p>
                  </div>
                </div>
             </div>
            <!-- Form end -->
          </div>
        </div>
      </div>
    <!-- User login body part end -->

<?php get_footer() ?>   