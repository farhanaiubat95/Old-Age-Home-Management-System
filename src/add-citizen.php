
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="../image/logo1.png" type="image/x-icon">
    <link rel="stylesheet" href="./output.css">
    <title>Dashboard || Sunnah</title>
</head>
<body class="body w-screen min-h-screen bg-5th font-roboto flex flex-col overflow-hidden">

    <!--== Header Start ==-->
    <header class="header bg-primary flex-none h-20 flex justify-center items-center ">
       <div class="flex justify-center items-center gap-3 text-4th text-2xl font-bold capitalize scale-105 shadow-lg">
          <img class="h-14 rounded-full border-2 border-Secondary scale-105 shadow-xl" src="./image/logo1.png" alt="">
          <p>Sunnah Old Age Home</p>
       </div>
    </header>
    <!--== Header End ==-->


    <div class="flex flex-col md:flex-row w-full grow md:relative">
     
        <!--==== SideBar Start ===-->
        <aside class="bg-black h-12 md:h-auto flex-none md:w-[240px] text-white md:absolute md:left-0 md:bottom-0 md:top-0 relative">
            <!-- dash menu button start-->
            <div  class=" px-2 pt-1 leading-10 block md:hidden"><button type="button" class="btn m-1"><i class="hover:border px-2 text-2xl hover:scale-110 fa-solid fa-bars"></i></button></div>
            <!-- dash menu button end-->

            <div class="sidebar w-[240px] bg-black absolute top-12 left-0 transition duration-500 ease-out  -translate-x-64 md:-translate-x-0 md:static ">
             <!-- sidebar Header Start-->
              <div class="flex flex-col justify-center gap-1 items-center py-7 border-b border-b-gray-300">
                <img class="h-16 w-16 md:h-20 md:w-20 rounded-full border-2 block" src="./image/Arif.jpg" alt="">
                <h1 class="md:text-lg mt-3">Farhana Bente Islam</h1>
                <span class="text-sm"><i class="text-[#41B06E] text-sm fa fa-circle"></i> Online</span>
              </div>
             <!-- sidebar Header Start-->
            
              <div class="border-b border-b-gray-300 py-2 text-xl text-center"><h1>Navigation</h1></div>
              
             <!-- Sidebar Nav Start-->
             <div class=" mt-5 flex flex-col h-[600px] overflow-y-scroll no-scrollbar">
               <div>
                <div class="sidebarnav"><a href="dashboard.php"><i class='bx bxs-dashboard'></i><span class="pl-1">Dashboard</span></a></div>
                <div class="sidebarnav"><a href="all-citizen.php"><i class='bx bx-male-female'></i><span class="pl-1">Citizen Details</span></a></div>
                <div class="sidebarnav"><a href="all-doctors.php"><i class="fas fa-user-md"></i><span class="pl-1">Doctor</span></a></div>
                <div class="sidebarnav"><a href="all-caregiver.php"><i class="fa-solid fa-user-nurse"></i><span class="pl-1">Caregiver</span></a></div>
                <div class="sidebarnav"><a href="all-admin.php"><i class="fa-solid fa-user-check"></i><span class="pl-1">Admin Details</span></a></div>
                <div class="sidebarnav"><a href="all-Services.php"><i class='bx bxs-food-menu'></i><span class="pl-1">Services</span></a></div>
                <div class="sidebarnav"><a href="all-Rooms.php"><i class='bx bxs-building-house'></i><span class="pl-1">Rooms</span></a></div>
                <div class="sidebarnav"><a href="all-Reports.php"><i class='bx bxs-report' ></i><span class="pl-1">Reports</span></a></div>
               </div>
             </div>
             <!-- Sidebar Nav End-->
            </div>
        </aside>
        <!--== Sidebar End ==-->


        <!--== Panel Part Start ==-->
        <div class=" grow flex flex-col md:p-2 md:absolute md:right-0 md:bottom-0 md:top-0 md:left-64">
<!-- ***************** -->

            <!-- Panel Header Start-->
               <div class="bg-gray-300 flex-none h-12 md:h-14 flex justify-between items-center px-2 sm:px-5 text-lg border border-gray-400 shadow-md">
                    <div><p class="text-gray-500">Home / Add New Citizen</p></div>
                    <div>
                        <a class="p-2 font-bold bg-red-900 text-white hover:bg-red-950" href="logout.php"><span><i class="fa-solid fa-right-from-bracket"></i></span> Logout</a>
                    </div>
               </div>
            <!-- Panel Header End-->
   
            <!-- Panel Body Start-->
               <div class="bg-primary/25 grow p-3 border-x border-b border-gray-400 overflow-hidden">
                <div class="h-[100vh] overflow-scroll no-scrollbar">
                <!-- Common for all part -->

                <!-- add citizen form start-->
                <div class=" p-10 shadow-xl ">
            
            <!-- Form Start-->
            <div class="h-[100vh] overflow-scroll no-scrollbar">
                <form action="#" class="flex flex-col justify-between gap-10">
                    <!-- form design Start-->
                     <div class="flex flex-col md:flex-row justify-between gap-10">
                        <!-- div1 -->
                    <div class="md:w-1/2 flex flex-col gap-4">
                        <div class="flex flex-col"> 
                            <label class="add-form-lebel">User Name :</label> 
                            <input class="add-form-input" type="text" placeholder="@alex95" name="user">
                        </div>
        
                        <div class="flex flex-col"> 
                            <label class="add-form-lebel">Full Name :</label> 
                            <input class="add-form-input" type="text" placeholder="give your full name" name="fullname">
                        </div>
        
                        <div class="flex flex-col"> 
                            <label class="add-form-lebel">Phone Number :</label> 
                            <input class="add-form-input" type="number" placeholder="013XXXXXXXX" name="phone">
                        </div>
        
                        <div class="flex flex-col"> 
                            <label class="add-form-lebel">Email Address :</label> 
                            <input class="add-form-input" type="email" placeholder="alex@gmail.com" name="email">
                        </div>
        
                        <div class="flex flex-col"> 
                            <label class="add-form-lebel">Date of Birth :</label> 
                            <input class="add-form-input" type="date" name="date">
                        </div>
        
                        <div class="flex flex-col"> 
                            <label class="add-form-lebel">National ID : <span class="text-sm text-white">(if you have, then give carefully)</span></label> 
                            <input class="add-form-input" type="number" placeholder="011*********" name="nid">
                        </div>
  
                        <div class="flex flex-col"> 
                          <label class="add-form-lebel">Citizenship:</label> 
                          <select class="add-form-input" name="citizenship" id="citizenship">
                              <option value="none" selected disabled hidden>Select</option>
                              <option value="Bangladeshi">Bangladeshi</option>
                           </select>
                      </div>                   
  
                      <div class="flex flex-col"> 
                          <label class="add-form-lebel">Uploade Image :</label> 
                          <input class="add-form-input" type="file" name="image">
                      </div>
  
                      <div class="flex flex-col"> 
                          <label class="add-form-lebel">Permanent address:</label> 
                          <textarea  rows="1"  class="add-form-input" type="textarea" placeholder="give correct address" name="address"></textarea>
                      </div>
                         
                      </div>
                      <!-- div1 -->
        
                      <!-- div2 -->
                      <div class="md:w-1/2 flex flex-col gap-4">  
  
                          <div class="flex justify-between gap-5">
                              <div class="flex flex-col w-1/2"> 
                                  <label class="add-form-lebel">Gendar :</label> 
                                  <select class="add-form-input" name="gender" id="gender">
                                      <option value="none" selected disabled hidden>Select</option>
                                      <option value="Male">Male</option>
                                      <option value="Female">Female</option>
                                      <option value="Others">Others</option>
                                  </select>
                              </div>
      
                              <div class="flex flex-col  w-1/2"> 
                                  <label class="add-form-lebel">Marital Status:</label> 
                                  <select class="add-form-input" name="marital" id="marital">
                                      <option value="Single">Single</option>
                                      <option value="Married">Married</option>
                                      <option value="Widowed">Widowed</option>
                                      <option value="Divorced">Divorced</option>
                                  </select>
                              </div>
                          </div>
  
                          <div class="flex flex-col"> 
                              <label class="add-form-lebel">Child :</label> 
                              <input class="add-form-input" type="number" placeholder=" 0" name="childNum">
                          </div>
  
                          <div class="flex flex-col"> 
                              <label class="add-form-lebel">Password :</label> 
                              <input class="add-form-input" type="text" placeholder=" at least 6 character" name="pass">
                          </div>
  
                          <!-- Gurdian Part -->
                          <div class="bg-Secondary text-center text-primary p-1 text-lg font-bold mt-8 mb-3"><h1>Power of Attorney/ Gurdian/ Conservators:</h1></div>
  
                          <div class="flex flex-col"> 
                              <label class="add-form-lebel">Gurdian Name :</label> 
                              <input class="add-form-input" type="text" placeholder=" full name" name="ug_name">
                          </div>
  
                          <div class="flex justify-between gap-5">
                              <div class="w-1/2 flex flex-col"> 
                                  <label class="add-form-lebel">Relation :</label> 
                                  <select class="add-form-input" name="relationn" id="marital">
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
                                  <label class="add-form-lebel">Phone Number :</label> 
                                  <input class="add-form-input" type="number" placeholder=" 012*********" name="ug_num">
                              </div>
                          </div>
  
                          <div class="flex flex-col"> 
                              <label class="add-form-lebel">Email id :</label> 
                              <input class="add-form-input" type="email" placeholder=" alex@gmail.com" name="ug_email">
                          </div>
  
                          <div class="flex flex-col"> 
                              <label class="add-form-lebel">Address :</label> 
                              <textarea class="add-form-input" id="textarea1" placeholder=" full address" rows="1" name="ug_add"></textarea>
                          </div>
  
                          <div class="flex flex-col"> 
                              <label class="add-form-lebel">Comments :</label> 
                              <textarea class="add-form-input" id="textarea1" placeholder=" write your opinion" rows="1" name="ug_comments"></textarea>
        
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

                <!-- add citizen form end-->

                 <!-- Common for all part -->
                 </div>
            </div>
         <!-- Panel Body End-->

         
<!-- ******************* -->
      
</div>
           <!--== Panel Part Start ==-->
    </div>
    
    <!--=====================
         Custom JS Start
    ======================-->  
    <script>
        /*============================================
            Dashboard Sidebar-btn toggle Mobile Version
        ==============================================*/ 
            let btn =document.querySelector('.btn');
            let sidebar = document.querySelector('.body');
            btn.onclick= function(){
                sidebar.classList.toggle("active4");
            }
    </script>
 </body>
</html>