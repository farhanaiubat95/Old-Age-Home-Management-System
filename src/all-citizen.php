<?php
require_once("ohmsfunction/dashboard-function.php");
get_dash_header();
?>
    <title>Dashboard || Sunnah</title>
</head>
<body class="body w-screen min-h-screen bg-5th font-roboto flex flex-col overflow-hidden">

<?php get_dash_sidebar(); ?>
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
<?php get_dash_footer(); ?>