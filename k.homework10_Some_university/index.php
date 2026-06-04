<body>
  <div class="container">
    <div class="form-container shadow">
      <h1 class="text-center mb-1">SOME UNIVERSITY</h1>
      <h4 class="text-center mb-3">Student Registration Form</h4>
      <form action=" " method="POST">
        <!-- Name -->
        <div class="row mb-3 align-items-center">
          <label for="name" class="col-sm-4 col-form-label form-label">Name:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control form-control-sm" id="name" name="name" required>
          </div>
        </div>

        <!-- DOB -->
        <div class="row mb-3 align-items-center">
          <label for="dob" class="col-sm-4 col-form-label form-label">DOB:</label>
          <div class="col-sm-8">
            <input type="date" class="form-control form-control-sm" id="dob" name="dob" required>
          </div>
        </div>

        <!-- Sex -->
        <div class="row mb-3 align-items-center">
          <label class="col-sm-4 col-form-label form-label">Sex:</label>
          <div class="col-sm-8">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="sex" id="male" value="Male" checked>
              <label class="form-check-label text-white" for="male">Male</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="sex" id="female" value="Female">
              <label class="form-check-label text-white" for="female">Female</label>
            </div>
          </div>
        </div>

        <!-- Email -->
        <div class="row mb-3 align-items-center">
          <label for="email" class="col-sm-4 col-form-label form-label">Email:</label>
          <div class="col-sm-8">
            <input type="email" class="form-control form-control-sm" id="email" name="email" required>
          </div>
        </div>

        <!-- Address -->
        <div class="row mb-3 align-items-center">
          <label for="address" class="col-sm-4 col-form-label form-label">Address:</label>
          <div class="col-sm-8">
            <input type="text" class="form-control form-control-sm" id="address" name="address" required>
          </div>
        </div>

        <!-- School -->
        <div class="row mb-3 align-items-center">
          <label for="school" class="col-sm-4 col-form-label form-label">School:</label>
          <div class="col-sm-8">
            <select class="form-select form-select-sm" id="school" name="school" required>
              <option value="" selected disabled>Select..</option>
              <option value="School of Science">School of Science</option>
              <option value="School of Engineering">School of Engineering</option>
            </select>
          </div>
        </div>

        <!-- Department -->
        <div class="row mb-3 align-items-center">
          <label for="department" class="col-sm-4 col-form-label form-label">Department:</label>
          <div class="col-sm-8">
            <select class="form-select form-select-sm" id="department" name="department" required>
              <option value="" selected disabled>Select Department</option>
              <option value="Computer Science">Computer Science</option>
              <option value="Information Technology">Information Technology</option>
            </select>
          </div>
        </div>

        <!-- Course -->
        <div class="row mb-3 align-items-center">
          <label for="course" class="col-sm-4 col-form-label form-label">Course:</label>
          <div class="col-sm-8">
            <select class="form-select form-select-sm" id="course" name="course" required>
              <option value="" selected disabled>Select Course</option>
              <option value="Web Development">Web Development</option>
              <option value="Database Systems">Database Systems</option>
            </select>
          </div>
        </div>

        <!-- Mobile Number -->
        <div class="row mb-4 align-items-center">
          <label for="mobile" class="col-sm-4 col-form-label form-label">Mobile Number:</label>
          <div class="col-sm-8">
            <input type="tel" class="form-control form-control-sm" id="mobile" name="mobile" required>
          </div>
        </div>

        <!-- Buttons -->
        <div class="row mb-4">
          <div class="col-sm-8 offset-sm-4 d-flex gap-2">
            <button type="reset" class="btn btn-light btn-sm text-dark px-3">Reset</button>
            <button type="submit" class="btn btn-light btn-sm text-dark px-3" value="Post me">Submit</button>
          </div>
        </div>
      </form>

      <!-- Footer Motto -->
      <div class="text-center footer-text mt-3 text-white-50">
        some university motto n' stuff.
      </div>
    </div>
  </div>

  </div>

  </div>

</body>

</html>
<?php
include("Header.php");
?>