 <?php
  include("header.php");
  ?>

 <body>

   <div?>
     <div class="form-card p-4 p-md-5 my-4 mx-3">
       <div class="mb-4">
         <h2 class="fw-semibold mb-0 fs-3">Registration</h2>
         <div class="title-line"></div>
       </div>
       
       <!-- Form Section -->
       <form action="result_table.php" method="POST">

         <!-- Title section -->
         <div class="row g-3">
          
           <!-- Full Name -->
           <div class="col-12 col-md-6">
             <label class="form-label fw-medium mb-1 small">Full Name</label>
             <input type="text" name="full_name" class="form-control" placeholder="Enter your name" required>
           </div>

           <!-- Username -->
           <div class="col-12 col-md-6">
             <label class="form-label fw-medium mb-1 small">Username</label>
             <input type="text" name="username" class="form-control" placeholder="Enter your username" required>
           </div>

           <!-- Email -->
           <div class="col-12 col-md-6">
             <label class="form-label fw-medium mb-1 small">Email</label>
             <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
           </div>

           <!-- Phone Number -->
           <div class="col-12 col-md-6">
             <label class="form-label fw-medium mb-1 small">Phone Number</label>
             <input type="tel" name="phone" class="form-control" placeholder="Enter your phone number" required>
           </div>

           <!-- Password -->
           <div class="col-12 col-md-6">
             <label class="form-label fw-medium mb-1 small">Password</label>
             <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
           </div>

           <!-- Confirm Password -->
           <div class="col-12 col-md-6">
             <label class="form-label fw-medium mb-1 small">Confirm Password</label>
             <input type="password" name="confirm_password" class="form-control" placeholder="Enter confirm your password" required>
           </div>

           <!-- Gender Radio Option -->
           <div>
             <label class="form-label fw-medium mb-2">Gender</label>
             <div class="d-flex flew-wrap gap-4">
               <div class="form-check">
                 <input type="radio" class="form-check-input" name="gender" id="male" value="male" required>
                 <label class="form-check-label small" for="male">Male</label>
               </div>
               <div class="form-check">
                 <input type="radio" class="form-check-input" name="gender" id="female" value="female" required>
                 <label class="form-check-label small" for="female">Female</label>
               </div>
               <div class="form-check">
                 <input type="radio" class="form-check-input" name="gender" id="noSay" value="prefer-not-to-say" required>
                 <label class="form-check-label small" for="noSay">Prefer not to say</label>
               </div>
             </div>
           </div>
         </div>
         <!-- Submit Button -->
         <div class="mt-4 pt-2">
           <button class="btn btn-gradient w-100 py-2 fw-medium" type="submit">Register</button>
         </div>
       </form>
     </div>
 </body>

 </html>