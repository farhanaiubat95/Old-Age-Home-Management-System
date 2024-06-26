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
               <div class="bg-Secondary/50 grow p-3 border-x border-b border-gray-400 overflow-hidden">
                <div class="h-[100vh] overflow-y-scroll no-scrollbar">
                    <!-- Common for all part -->
                     
                    <div class="p-2 grid sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 ">
                        <!-- Card1 Start-->
                        <div class="bg-[rgb(50,1,47)] p-7 flex justify-between rounded-lg ">
                            <div class="text-white">
                                <div class="mb-8">
                                    <h3 class="text-2xl ">Total Citizen</h3>
                                    <h1 class="text-4xl font-bold">1</h1>
                                </div>
                                <div class="mt-auto"><a class="text-blue-700 hover:text-blue-600" href="#">More Details ></a></div>
                            </div>
                            <div>
                                <i class="text-white text-5xl fa-solid fa-users"></i>
                            </div>
                        </div>
                        <!-- Card1 End -->
    
                        <!-- Card2 Start-->
                        <div class="bg-[#003C43] p-7 flex justify-between rounded-lg">
                            <div class="text-white">
                                <div class="mb-8">
                                    <h3 class="text-2xl ">Total Contact User</h3>
                                    <h1 class="text-4xl font-bold">2</h1>
                                </div>
                                <div class="mt-auto"><a class="text-blue-700 hover:text-blue-600" href="#">More Details ></a></div>
                            </div>
                            <div>
                                <i class="text-white text-5xl fa-solid fa-user"></i>
                            </div>
                        </div>
                        <!-- Card2 End -->
    
                        <!-- Card3 Start-->
                        <div class="bg-[#481E14] p-7 flex justify-between rounded-lg">
                            <div class="text-white">
                                <div class="mb-8">
                                    <h3 class="text-2xl ">Total Fund</h3>
                                    <h1 class="text-4xl font-bold">3</h1>
                                </div>
                                <div class="mt-auto"><a class="text-blue-700 hover:text-blue-600" href="#">More Details ></a></div>
                            </div>
                            <div>
                                <i class="text-5xl text-white fa-regular fa-money-bill-1"></i>
                            </div>
                        </div>
                        <!-- Card3 End -->
    
                        <!-- Card4 Start-->
                        <div class="bg-[rgb(50,1,47)] p-7 flex justify-between rounded-lg">
                            <div class="text-white">
                                <div class="mb-8">
                                    <h3 class="text-2xl ">Total Caregiver</h3>
                                    <h1 class="text-4xl font-bold">4</h1>
                                </div>
                                <div class="mt-auto"><a class="text-blue-700 hover:text-blue-600" href="#">More Details ></a></div>
                            </div>
                            <div>
                                <i class="text-white text-5xl fa-solid fa-user-nurse"></i>
                            </div>
                        </div>
                        <!-- Card4 End -->
    
                        <!-- Card5 Start-->
                        <div class="bg-[#240750] p-7 flex justify-between rounded-lg">
                            <div class="text-white">
                                <div class="mb-8">
                                    <h3 class="text-2xl ">Total Doctor</h3>
                                    <h1 class="text-4xl font-bold">5</h1>
                                </div>
                                <div class="mt-auto"><a class="text-blue-700 hover:text-blue-600" href="#">More Details ></a></div>
                            </div>
                            <div>
                                <i class="text-white text-5xl fas fa-user-md"></i>
                            </div>
                        </div>
                        <!-- Card5 End -->
    
                        <!-- Card6 Start-->
                        <div class="bg-[#1A4D2E] p-7 flex justify-between rounded-lg">
                            <div class="text-white">
                                <div class="mb-8">
                                    <h3 class="text-2xl ">Total room</h3>
                                    <h1 class="text-4xl font-bold">6</h1>
                                </div>
                                <div class="mt-auto"><a class="text-blue-700 hover:text-blue-600" href="#">More Details ></a></div>
                            </div>
                            <div>                 
                                <i class='text-white text-5xl bx bxs-building-house'></i>
                            </div>
                        </div>
                        <!-- Card6 End -->
    
                        <!-- Card7 Start-->
                        <div class="bg-[#524C42] p-7 flex justify-between rounded-lg">
                            <div class="text-white">
                                <div class="mb-8">
                                    <h3 class="text-2xl ">Total Admin</h3>
                                    <h1 class="text-4xl font-bold">7</h1>
                                </div>
                                <div class="mt-auto"><a class="text-blue-700 hover:text-blue-600" href="#">More Details ></a></div>
                            </div>
                            <div>
                                <i class="text-white text-5xl fa-solid fa-user-check"></i>
                            </div>
                        </div>
                        <!-- Card7 End -->
    
    
                    </div>

                    <!-- Common for all part -->
                </div>

               </div>
            <!-- Panel Body End-->
<?php get_dash_footer(); ?>