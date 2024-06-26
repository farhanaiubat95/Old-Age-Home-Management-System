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
          <img class="h-14 rounded-full border-2 border-Secondary scale-105 shadow-xl" src="../image/logo1.png" alt="">
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
                <img class="h-16 w-16 md:h-20 md:w-20 rounded-full border-2 block" src="../image/Arif.jpg" alt="">
                <h1 class="md:text-lg mt-3">Farhana Bente Islam</h1>
                <span class="text-sm"><i class="text-[#41B06E] text-sm fa fa-circle"></i> Online</span>
              </div>
             <!-- sidebar Header Start-->
            
              <div class="border-b border-b-gray-300 py-2 text-xl text-center"><h1>Navigation</h1></div>
              
             <!-- Sidebar Nav Start-->
             <div class=" mt-5 flex flex-col h-[600px] overflow-y-scroll no-scrollbar">
               <div>
                <div class="sidebarnav"><a href="dashboard.html"><i class='bx bxs-dashboard'></i><span class="pl-1">Dashboard</span></a></div>
                <div class="sidebarnav"><a href="all-citizen.html"><i class='bx bx-male-female'></i><span class="pl-1">Citizen Details</span></a></div>
                <div class="sidebarnav"><a href="all-doctors.html"><i class="fas fa-user-md"></i><span class="pl-1">Doctor</span></a></div>
                <div class="sidebarnav"><a href="all-caregiver.html"><i class="fa-solid fa-user-nurse"></i><span class="pl-1">Caregiver</span></a></div>
                <div class="sidebarnav"><a href="all-admin.html"><i class="fa-solid fa-user-check"></i><span class="pl-1">Admin Details</span></a></div>
                <div class="sidebarnav"><a href="all-Services.html"><i class='bx bxs-food-menu'></i><span class="pl-1">Services</span></a></div>
                <div class="sidebarnav"><a href="all-Rooms.html"><i class='bx bxs-building-house'></i><span class="pl-1">Rooms</span></a></div>
                <div class="sidebarnav"><a href="all-Reports.html"><i class='bx bxs-report' ></i><span class="pl-1">Reports</span></a></div>
               </div>
             </div>
             <!-- Sidebar Nav End-->
            </div>
        </aside>
        <!--== Sidebar End ==-->


        <!--== Panel Part Start ==-->
        <div class=" grow flex flex-col md:p-2 md:absolute md:right-0 md:bottom-0 md:top-0 md:left-64">

            <!-- Panel Header Start-->
               <div class="bg-gray-300 flex-none h-12 md:h-14 flex justify-between items-center px-2 sm:px-5 text-lg border border-gray-400 shadow-md">
                    <div><p class="text-gray-500">Home / Dashboard</p></div>
                    <div>
                        <a class="p-2 font-bold bg-primary text-white hover:bg-primary/75" href="#"><span><i class="fa-solid fa-users"></i></span>  All Citizens</a>
                        <a class="p-2 font-bold bg-red-900 text-white hover:bg-red-950" href="#"><span><i class="fa-solid fa-right-from-bracket"></i></span> Logout</a>
                    </div>
               </div>
            <!-- Panel Header End-->
   
            <!-- Panel Body Start-->
               <div class="bg-primary/25 grow p-3 border-x border-b border-gray-400 overflow-hidden">
                <div class="h-[100vh] overflow-scroll no-scrollbar">
                <!-- Common for all part -->
                 
                 <!-- this table for lg to upper version Start -->
                 <div class="hidden lg:block">
                    <table class="table-auto w-full">
                        <thead class="bg-7th shadow-lg shadow-black/50">
                          <tr>
                            <th class="table-head">Id</th>
                            <th class="table-head">Username</th>
                            <th class="table-head">Phone</th>
                            <th class="table-head">Email</th>
                            <th class="table-head">Address</th>
                            <th class="table-head">NID</th>
                            <th class="table-head">Image</th>
                            <th class="table-head">Registration Date</th>
                            <th class="hidden-print table-head">Manage</th>
                          </tr>
                        </thead>
    
                        <tbody class="bg-gray-200/25 border-b border-gray-400 hover:bg-gray-400/25 transition duration-200">
                          <tr>
                            <td class="table-body">10012321</td>
                            <td class="table-body">farhan90</td>
                            <td class="table-body">01701232445</td>
                            <td class="table-body">farjhsaddsfjdkfj@asdlklsdk</td>
                            <td class="table-body">saudfdfdgflfkhgjgkjhjhkjkllklkl;klk</td>
                            <td class="table-body">19610493504549</td>
                            <td class="table-body flex justify-center"><img class="h-20 w-16 border-2 border-black" src="../image/farhana.jpg" alt=""></td>
                            <td class="table-body">2321493485475895767</td>
                            <td class="table-body">
                                <a class="p-1 bg-[#0A6847] hover:bg-[#0A6847]/50 rounded" href="#"><i class='text-white fa-solid fa-eye fa-lg'></i></a>
                                <a class="p-1 bg-[#DD761C] hover:bg-[#DD761C]/50 rounded" href="#"><i class='text-white px-1 fas fa-edit'></i></a>
                                <a class="p-1 bg-[#3572EF] hover:bg-[#3572EF]/50 rounded" href="#"><i class='text-white px-1 fa-solid fa-trash'></i></a>
                            </td>
                            
                          </tr>
                          
                        </tbody>
                      </table>
                 </div>
                  <!-- this table for lg to upper version done -->

                  <!-- this table for mobile version done -->
                  <div class="block lg:hidden">
                    <!-- table-Card start -->
                       <div class="p-5 bg-gray-300 rounded-md my-2">
                         <div class="flex justify-between py-2">
                            <div class="font-semibold text-[16px]">
                              <h1>ID: <span class="font-thin pl-1">10232435</span></h1>
                              <h1>Username: <span class="font-thin pl-1">farhan90</span></h1>
                              <h1>Phone: <span class="font-thin pl-1">01701232445</span></h1>
                              <h1>Email: <span class="font-thin pl-1">farjhsaddsfjdkfj@asdlklsdk</span></h1>
                              <h1>Address: <span class="font-thin pl-1">saudfdfdgflfkhgjgkjhjhkjkllklkl;klk</span></h1>
                              <h1>NID: <span class="font-thin pl-1">19610493504549</span></h1>
                              <h1>Registration Date: <span class="font-thin pl-1">2321493485475895767</span></h1>
                            </div>
                            <div>
                                <img class="h-32 w-28 border-2 border-black" src="../image/farhana.jpg" alt="">
                            </div>
                         </div>
                         <div class="flex items-center gap-1">
                            <a class="p-1 bg-[#0A6847] hover:bg-[#0A6847]/50 rounded" href="#"><i class='text-white fa-solid fa-eye fa-lg'></i></a> 
                            <a class="p-1 bg-[#DD761C] hover:bg-[#DD761C]/50 rounded" href="#"><i class="text-white px-1 fas fa-edit"></i></a>
                            <a class="p-1 bg-[#3572EF] hover:bg-[#3572EF]/50 rounded" href="#"><i class='text-white px-1 fa-solid fa-trash'></i></a>
                         </div>
                       </div>
                    <!-- table-Card start -->

                    <!-- table-Card1 start -->
                    <div class="p-5 bg-gray-300 rounded-md my-2">
                        <div class="flex justify-between py-2">
                           <div class="font-semibold text-[15px]">
                             <h1>ID: <span class="font-thin pl-1">10232435</span></h1>
                             <h1>Username: <span class="font-thin pl-1">farhan90</span></h1>
                             <h1>Phone: <span class="font-thin pl-1">01701232445</span></h1>
                             <h1>Email: <span class="font-thin pl-1">farjhsaddsfjdkfj@asdlklsdk</span></h1>
                             <h1>Address: <span class="font-thin pl-1">saudfdfdgflfkhgjgkjhjhkjkllklkl;klk</span></h1>
                             <h1>NID: <span class="font-thin pl-1">19610493504549</span></h1>
                             <h1>Registration Date: <span class="font-thin pl-1">2321493485475895767</span></h1>
                           </div>
                           <div>
                               <img class="h-32 w-28 border-2 border-black" src="../image/farhana.jpg" alt="">
                           </div>
                        </div>
                        <div class="flex items-center gap-1">
                           <a class="p-1 bg-[#0A6847] hover:bg-[#0A6847]/50 rounded" href="#"><i class='text-white fa-solid fa-eye fa-lg'></i></a> 
                           <a class="p-1 bg-[#DD761C] hover:bg-[#DD761C]/50 rounded" href="#"><i class="text-white px-1 fas fa-edit"></i></a>
                           <a class="p-1 bg-[#3572EF] hover:bg-[#3572EF]/50 rounded" href="#"><i class='text-white px-1 fa-solid fa-trash'></i></a>
                        </div>
                      </div>
                   <!-- table-Card1 start -->
                  </div>
                  <!-- this table for mobile version done -->


                 <!-- Common for all part -->
                </div>
            </div>
         <!-- Panel Body End-->
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