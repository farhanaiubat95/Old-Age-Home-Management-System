<?php
require_once("connect.php");

session_start();

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
    <title>Admin's Details || Sunnah</title>
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
                    <div><p class="text-gray-500">Home / All Admin Details</p></div>
                    <div>
                        <a class="p-2 font-bold bg-primary text-white hover:bg-primary/75" href="add-admin.php"><span><i class="fa-solid fa-plus"></i></span>  Add Admin</a>
                        <a class="p-2 font-bold bg-red-900 text-white hover:bg-red-950" href="logout.php"><span><i class="fa-solid fa-right-from-bracket"></i></span> Logout</a>
                    </div>
               </div>
            <!-- Panel Header End-->
   
            <!-- Panel Body Start-->
               <div class="bg-gray-100 grow p-3 border-x border-b border-gray-400 overflow-hidden">
                <div class="h-[100vh] overflow-scroll no-scrollbar">
                <!-- Common for all part -->

                  <!-- this table for all version done -->
                  <div>
                  <?php         
                              if(isset($_POST['search']))
                              {
                                $filtervalue=$_POST['query'];
                                $sql="SELECT * FROM tb_admin WHERE CONCAT(id,a_user) LIKE '%$filtervalue%'";
                                $result=mysqli_query($con,$sql);
                              }else
                              {
                                $sql="SELECT * FROM tb_admin";
                                $filtervalue="";
                                $result=mysqli_query($con,$sql);
                              }  
                  ?>
                    <!-- Search option -->
                    <div class="py-5">
                        <form action="" method="POST" enctype="multipart/data-form">
                          <input type="text" class="search-input hidden-print"  name="query" value="" placeholder="search by id">
                          <button class="search-btn hidden-print" type="submit" name="search"><i class="hover:scale-125 font-bold fa-solid fa-magnifying-glass"></i></button>
                        </form>
                    </div>   
                  <!-- Search option -->

                  <!-- Card Part Start -->
                   <div class="grid sm:grid-cols-2  lg:grid-cols-3 xl:grid-cols-4 gap-4">

                    <?php while($rows=mysqli_fetch_object($result)){ ?>

                     <!-- Card Start-->
                     <div class="p-5 border border-primary shadow-md shadow-primary/50 bg-gray-500/25">
                        <div class="flex flex-col justify-center items-center" >
                            <img class="rounded-full shadow-xl shadow-gray-400 w-52 h-52" src="<?php echo $rows->admin_image ?>" alt="">
                        </div>
                        <div class="text-center font-semibold text-lg text-7th py-5">
                            <p class="text-2xl font-bold"><?php echo $rows->admin_name ?></p>
                            <p class="text-blue-500"><?php echo $rows->id ?></p>
                            <p class="text-black"><?php echo $rows->admin_email ?></p>
                            <h1 class=" mt-5 border-2 bg-gray-400/50 border-primary/50 py-2 shadow-md shadow-gray-400 hover:bg-primary/50 hover:text-white transition duration-300"><a href="" class="">View Profile</a></h1>
                        </div>
                      </div>
                     <!-- Card End-->
                    <?php } ?>
                   </div>
                  <!-- Card Part end -->


                  </div>
                  <!-- this table for all version done -->


                 <!-- Common for all part -->
                </div>
            </div>
         <!-- Panel Body End-->

         
<!-- ******************* -->
      
      </div>
           <!--== Panel Part End ==-->
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