<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $Sno = $_POST['Sno'];
        $Fname = $_POST['Fname'];
        $Lname = $_POST['Lname'];
        // $gender= $_POST['gender']
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $Estatus = $_POST['Estatus'];
        $linked = $_POST['linked'];
        $Pwebsite = $_POST['Pwebsite'];
        $jobTitle = $_POST['jobTitle'];
        $CompanyName = $_POST['CompanyName'];
        $Location = $_POST['Location'];
        $Sdate = $_POST['Sdate'];
        $Edate = $_POST['Edate'];
        $School = $_POST['School'];
        $College = $_POST['College'];
        $qualification = $_POST['qualification'];
        $field_of_study = $_POST['field_of_study'];
        $G_start_date = $_POST['G_start_date'];
        $G_end_date = $_POST['G_end_date'];
        $skill1 = $_POST['skill1'];
        $skill2 = $_POST['skill2'];
        $skill3 = $_POST['skill3'];
        $skill4 = $_POST['skill4'];
        $skill5 = $_POST['skill5'];
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Educational Qualifications</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 38px;
      color: #fff;
      z-index: 2;
      }
      p.top-info {
      margin: 10px 0;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 25px 0 #1c87c9; 
      }
     .banner {
      position: relative;
      height: 210px;
      background-image: url("/uploads/media/default/0001/02/fb57ab781c34da322c884532bfec751e843e36fc.jpeg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.6); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      select {
      width: 100%;
      padding: 7px 0;
      background: transparent;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color: #1c87c9;
      }
      .item input:hover, .item select:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 6px 0 #1c87c9;
      color: #1c87c9;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #a9a9a9;
      }
      .item i {
      right: 2%;
      top: 30px;
      z-index: 1;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 10px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      span.required {
      margin-left: 0;
      color: red;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid #1c87c9;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid #1c87c9;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: auto;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background: #1c87c9;
      font-size: 16px;
      font-weight: 700;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #1e6fa0;
      }
      @media (min-width: 568px) {
      .name-item, .contact-item, .position-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input {
      width: calc(50% - 20px);
      }
      .contact-item .item, .position-item .item {
      width: calc(50% - 8px);
      }
      .contact-item input, .position-item input {
      width: calc(100% - 12px);
      }
      .position-item select {
      width: 100%;
      }
      }
    </style>
  </head>
  <body>
    <form action="/loginsystem/test.php" method="post">
    <div class="testbox">
      <form action="/">
        <div class="banner">
          <h1>Personal Details</h1>
        </div>Please enter your details</p>
        <div class="item">
        <p class="top-info">
          <p>Name<span class="required">*</span></p>
          <div class="name-item">
            <input type="text" name="Fname" placeholder="First" required/>
            <input type="text" name="Lname" placeholder="Last" required/>
          </div>
        </div>
        <div class="question">
          <!-- <p>Gender<span class="required">*</span></p>
          <div class="question-answer" require> 
            <div>
              <input type="radio" value="none" id="radio_5" name="gender" />
              <label for="radio_5" class="radio"><span>Female</span></label>
            </div>
            <div>
              <input type="radio" value="none" id="radio_6" name="gender" />
              <label for="radio_6" class="radio"><span>Male</span></label>
            </div>
            <div>
              <input type="radio" value="none" id="radio_6" name="gender" />
              <label for="radio_6" class="radio"><span>Other</span></label>
            </div> -->
        <div class="contact-item">
          <div class="item">
            <p>Email<span class="required">*</span></p>
            <input type="email" name="email" required/>
          </div>
          <div class="item">
            <p>Phone<span class="required">*</span></p>
            <input type="number" name="phone" required/>
          </div>
        </div>
        <div class="position-item">
          <div class="item">
            <div class="question">
              <p>What is your current employment status?<span class="required">*</span></p>
              <div class="question-answer">
                <div>
                  <input type="radio" value="none" id="radio_1" name="Estatus" required/>
                  <label for="radio_1" class="radio"><span>Employed</span></label>
                </div>
                <div>
                  <input type="radio" value="none" id="radio_2" name="Estatus" required/>
                  <label for="radio_2" class="radio"><span>Self-Employed</span></label>
                </div>
                <div>
                  <input type="radio" value="none" id="radio_3" name="Estatus" required/>
                  <label for="radio_3" class="radio"><span>Unemployed</span></label>
                </div>
                <div>
                  <input type="radio" value="none" id="radio_4" name="Estatus" required/>
                  <label for="radio_4" class="radio"><span>Student</span></label>
                </div>
              </div>
            </div>
            
          </div>
         
        </div>
        
        <div class="item">
          <p>Please enter a bio</p>
          <input type="text" name="bio"/>
        </div>
        
        <p>Linked in profile link</p>
            <div class="name-item">
              <input type="text" name="linked" placeholder="Profile Link"/>
            </div>

            <p>Personal website</p>
            <div class="name-item">
              <input type="text" name="Pwebsite" placeholder="url"/>
            </div>

          </div>
        </div>
      </form>
    </div>

    <div class="testbox">
      <form action="/">
        <div class="banner">
          <h1>Skills</h1>
        </div>Please enter your skills</p>
        <div class="item">
        <p class="top-info">
          <p>Skill 1</p>
          <div class="name-item">
            <input type="text" name="skill1" placeholder="Job Title/Industry/Skill" required/>
            
          </div>
          
          <p>Skill 2</p>
          <div class="name-item">
            <input type="text" name="skill2" placeholder="Job Title/Industry/Skill" required/>
            
          </div>
          <p>Skill 3</p>
          <div class="name-item">
            <input type="text" name="skill3" placeholder="Job Title/Industry/Skill" required/>
            
          </div>
          <p>Skill 4</p>
          <div class="name-item">
            <input type="text" name="skill4" placeholder="Job Title/Industry/Skill" required/>
            
          </div>
          <p>Skill 5</p>
          <div class="name-item">
            <input type="text" name="skill5" placeholder="Job Title/Industry/Skill" required/>
            
          </div>

        <div class="btn-block">
          <button type="submit">+ Add Field</button>
        </div>
      </div>
    </div>
    
        
      </form>
    </div>

    <div class="testbox">
      <form action="/">
        <div class="banner">
          <h1>Past Experiences</h1>
        </div>Please enter your past experiences</p>
        <div class="item">
        <p class="top-info">
          <p>Company 1</p>
          <div class="name-item">
            <input type="text" name="jobTitle" placeholder="Job Title" />
            <input type="text" name="CompanyName" placeholder="Company Name"/>
            <input type="text" name="Location" placeholder="Location"/>
          </div>
          <div class="item">
            <p> Start date</p>
            <input type="date" name="Sdate"/>
            <i class="fas fa-calendar-alt"></i>
          </div>
          <div class="item">
            <p> End date</p>
            <input type="date" name="Edate" required/>
            <i class="fas fa-calendar-alt"></i>
          </div>
        </div>

        <div class="btn-block">
          <button type="submit">+ Add Field</button>
        </div>
      </div>
    </div>
    
        
      </form>
    </div>
    <div class="testbox">
      <form action="/">
        <div class="banner">
          <h1>Educational Qualifications</h1>
        </div>Please enter your education qualifications</p>
        <div class="item">
        <p class="top-info">
          <p>School/College name<span class="required">*</span></p>
          <div class="name-item">
            <input type="text" name="School" placeholder="Name of school" required/>
            <input type="text" name="College" placeholder="Name of college/University" required/>
          </div>
        </div>
        <div class="question">
          <p>Select Qualification level</p>
          <div class="question-answer">
            <div>
              <input type="text" name="qualification" placeholder="level of qualification" required/>
            </div>
        <div class="contact-item">
          <div class="item">
            <p>Field of study<span class="required">*</span></p>
            <input type="text" name="field_of_study" required/>
          </div>
          <div class="item">
        
          <div class="item">
            <p>Graduation Start date<span class="required">*</span></p>
            <input type="date" name="G_start_date" required/>
            <i class="fas fa-calendar-alt"></i>
          </div>
          <div class="item">
            <p>Graduation End date<span class="required">*</span></p>
            <input type="date" name="G_end_date" required/>
            <i class="fas fa-calendar-alt"></i>
          </div>
        </div>
        <div class="btn-block">
          <button type="submit">Submit</button>
        </div>    
    </div> 

    </form>
  </body>
</html>