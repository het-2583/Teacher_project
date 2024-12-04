<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration or Sign Up form in HTML CSS | CodingLab </title> 
    <link rel="stylesheet" href="style.css">
    <style>
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #4070f4;
}
.wrapper{
  position: relative;
  max-width: 430px;
  width: 100%;
  background: #fff;
  padding: 34px;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.2);
}
.wrapper h2{
  position: relative;
  font-size: 22px;
  font-weight: 600;
  color: #333;
}
.wrapper h2::before{
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 28px;
  border-radius: 12px;
  background: #4070f4;
}
.wrapper form{
  margin-top: 30px;
}
.wrapper form .input-box{
  height: 52px;
  margin: 18px 0;
}
form .input-box input{
  height: 100%;
  width: 100%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  color: #333;
  border: 1.5px solid #C7BEBE;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
}
.input-box input:focus,
.input-box input:valid{
  border-color: #4070f4;
}
form .policy{
  display: flex;
  align-items: center;
}
form h3{
  color: #707070;
  font-size: 14px;
  font-weight: 500;
  margin-left: 10px;
}
.input-box.button input{
  color: #fff;
  letter-spacing: 1px;
  border: none;
  background: #4070f4;
  cursor: pointer;
}
.input-box.button input:hover{
  background: #0e4bf1;
}
form .text h3{
 color: #333;
 width: 100%;
 text-align: center;
}
form .text h3 a{
  color: #4070f4;
  text-decoration: none;
}
form .text h3 a:hover{
  text-decoration: underline;
}
    </style>
   </head>
<body>
  <div class="wrapper">
    <h2>Registration</h2>
    <form action="{{ route('register') }}" method="POST">
      @csrf
      <div class="input-box">
        <!-- <input type="text" placeholder="Enter your name" required> -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>
      </div>


      <div class="input-box">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" value="{{ old('email') }}" required>
      </div>



      <div class="input-box">
        <label for="PhoneNo">Phone Number</label>
        <input type="tel" id="Phone Number" name="Phone Number"  required>
      </div>


      <div class="input-box">
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>
      </div>


      <div class="input-box">
        <label for="SchoolName">School Name</label>
        <input type="text" id="School Name" name="School Name"  required>
      </div>


      


      <div class="input-box">
        <label for="Board">Board</label>
        <input type="text" id="Board" name="Board"  required>
      </div>


      <div class="input-box">
        <label for="Standard">Standard</label>
        <input type="integer" id="Standard" name="Standard"  required>
      </div>


      <div class="input-box">
      <!-- <input type="checkbox" id="subject1" name="subject1" value="Physics"> <label for="subject1">Physics</label><br>
      <input type="checkbox" id="subject2" name="subject2" value="Maths"> <label for="subject2">Maths</label><br>
      <input type="checkbox" id="subject3" name="subject3" value="Chemistry"> <label for="subject3">Chemistry</label><br>
      <input type="checkbox" id="subject4" name="subject4" value="Biology"> <label for="subject4">Biology</label><br>
      <input type="checkbox" id="subject5" name="subject5" value="Gujarati"> <label for="subject5">Gujarati</label><br>
      <input type="checkbox" id="subject6" name="subject6" value="Sanskrit"> <label for="subject6">Sanskrit</label><br> -->
      <label>Subjects:</label><br>
    <label>
        <input type="checkbox" name="Subjects[]" value="Maths" {{ in_array('Maths', old('Subjects', [])) ? 'checked' : '' }}>
        Maths
    </label>
    <label>
        <input type="checkbox" name="Subjects[]" value="Physics" {{ in_array('Physics', old('Subjects', [])) ? 'checked' : '' }}>
        Physics
    </label>
    <label>
        <input type="checkbox" name="Subjects[]" value="Chemistry" {{ in_array('Chemistry', old('SUbjects', [])) ? 'checked' : '' }}>
        Chemistry
    </label>
    <label>
        <input type="checkbox" name="Subjets[]" value="Biology" {{ in_array('Biology', old('Subjects', [])) ? 'checked' : '' }}>
        Biology
    </label>
    <label>
        <input type="checkbox" name="Subjets[]" value="Gujarati" {{ in_array('Gujarati', old('Subjects', [])) ? 'checked' : '' }}>
        Gujarati
    </label>
    <label>
        <input type="checkbox" name="Subjets[]" value="Sanskrit" {{ in_array('Sanskrit', old('Subjects', [])) ? 'checked' : '' }}>
        Sanskrit
    </label>
      </div>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

      <div class="input-box">
        <label for="Medium">Medium</label>
        <input type="text" id="Medium" name="Medium"  required>
      </div>


      


      <div class="input-box">
        <label for="Total_fees">Total_fees</label>
        <input type="integer" id="Total_fees" name="Total_fees"  required>
      </div>


      <div class="input-box">
        <label for="Discount">Discount</label>
        <input type="integer" id="Discount" name="discount"  required>
      </div>


      <div class="input-box">
        <label for="Shift">Shift</label>
        <input type="text" id="Shift" name="Shift"  required>
      </div>


      <div class="input-box">
        <label for="Reference">Reference</label>
        <input type="text" id="Reference" name="Reference"  required>
      </div>


      <div class="input-box">
        <label for="Paid_fees">Paid_fees</label>
        <input type="integer" id="Paid_fees" name="Paid_fees"  required>
      </div>


      <div class="input-box">
        <label for="Remaining_amount">Remaining_amount</label>
        <input type="integer" id="Remaining_amount" name="Remaining_amount"  required>
      </div>


      <div class="input-box">
        <label for="Fees_date">Fees_date</label>
        <input type="date" id="Fees_date" name="Fees_date"  required>
      </div>


      <div class="input-box">
        <label for="Due_date">Due_date</label>
        <input type="date" id="Due_date" name="Due_date"  required>
      </div>

      
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
      <button type="submit">Register</button>
      </div>
      <div class="text">
        <h3>Already have an account? <a href="#">Login now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>