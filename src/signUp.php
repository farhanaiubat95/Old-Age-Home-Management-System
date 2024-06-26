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
      <div class="registration-image ">
        <div class="bg-black/25 py-24 px-5">
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
     </div>


    <!--=====================
         Custom JS Start
    ======================-->  
    <script src="./script.js"></script>
 </body>
</html>