<?php
  require_once ('navbar.php');
?>


         <div class="container "  style="margin-top:7%">
           <div class="row mb-5">
             <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-6 shadow-lg">
               <img src="images/login.jpg" alt="Sample image"  >
             </div>
             <div class="col-md-6 col-lg-6 col-xl-6 col-xs-12 col-sm-6 shadow-lg mb-6" >
               <form>
                 <div class="">
                   <p class="text-center mt-4" style="font-weight:bold">SIGN IN</p>
                 </div>
                 <hr>


                 <!-- Email input -->
                 <div class="form-outline mb-4">
                   <input type="email" id="form3Example3" class="form-control form-control-lg"
                     placeholder="Enter a valid email address" />
                   <label class="form-label" for="form3Example3">Email address</label>
                 </div>

                 <!-- Password input -->
                 <div class="form-outline mb-3">
                   <input type="password" id="form3Example4" class="form-control form-control-lg"
                     placeholder="Enter password" />
                   <label class="form-label" for="form3Example4">Password</label>
                 </div>

                 <div class="d-flex justify-content-between align-items-center">
                   <!-- Checkbox -->
                   <div class="form-check mb-0">
                     <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                     <label class="form-check-label" for="form2Example3">
                       Remember me
                     </label>
                   </div>
                   <a href="#!" class="text-body">Forgot password?</a>
                 </div>

                 <div class="text-center text-lg-start mt-4 pt-2">
                   <button type="button" class="btn btn-primary btn-lg"
                     style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                   <p class=" mt-2 pt-1 mb-5">Don't have an account? <a href="#!"
                       class="link-danger">Register</a></p>
                 </div>

               </form>
             </div>
           </div>
         </div>


	
   <?php 

     require_once('footer.php')

    ?>

   </div>
</body>
</html>