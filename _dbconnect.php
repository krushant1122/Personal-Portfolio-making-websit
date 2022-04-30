<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "users";














// $Fname = $_POST['Fname'];
// $Lname = $_POST['Lname'];
// // $gender= $_POST['gender']
// $email = $_POST['email'];
// $phone = $_POST['phone'];
// $Estatus = $_POST['Estatus'];
// $bio = $_POST['bio'];
// $linked = $_POST['linked'];
// $Pwebsite = $_POST['Pwebsite'];
// $jobTitle = $_POST['jobTitle'];
// $CompanyName = $_POST['CompanyName'];
// $Location = $_POST['Location'];
// $Sdate = $_POST['Sdate'];
// $Edate = $_POST['Edate'];
// $School = $_POST['School'];
// $College = $_POST['College'];
// $qualification = $_POST['qualification'];
// $field_of_study = $_POST['field_of_study'];
// $G_start_date = $_POST['G_start_date'];
// $G_end_date = $_POST['G_end_date'];
// $skill1 = $_POST['skill1'];
// $skill2 = $_POST['skill2'];
// $skill3 = $_POST['skill3'];
// $skill4 = $_POST['skill4'];
// $skill5 = $_POST['skill5'];

// // $query = mysqli_query($conn,"INSERT  into resume(FirstName, LastName,Gender,Email,PhoneNumber,EmployementStatus,Linked,personalWebsite,JobTitle,CompanyName,Location,StartDate,EndDate,School,College,Qualificatio,fieldOfStudy,Graduation_Start_Date,Graduation_End_Date,Skills1,Skills2,Skills3,Skills4,Skills5)value('$Fname','$Lname','$gender','$email','$phone','$Estatus','$linked','$Pwebsite','$jobTitle','$CompanyName','$Location','$Sdate','$Edate','$School','$College','$qualification','$field_of_stud','$G_start_date','$G_end_date','$skill1','$skill2','$skill3','$skill4','$skill5')");




// $query = mysqli_query($conn,"INSERT INTO `resume` (`Fname`, `Lname`, `gender`, `email`, `phone`, `Estatus`, `bio`, `linked`, `Pwebsite`, `jobTitle`, `CompanyName`, `Location`, `Sdate`, `Edate`, `School`, `College`, `qualification`, `field_of_study`, `G_start_date`, `G_end_date`, `skill1`, `skill2`, `skill3`, `skill4`, `skill5`) VALUES ( '$Fname', '$Lname', '$gender', '$email', '$phone', '$Estatus','$bio', '$linked', '$Pwebsite', '$jobTitle', '$CompanyName', '$Location', '$Sdate', '$Edate', '$School', '$College', '$qualification', '$field_of_stud', '$G_start_date', '$G_end_date', '$skill1', '$skill2', '$skill3', '$skill4', '$skill4'););

// -- $result = mysqli_query($conn, $query);
// -- $num = mysqli_num_rows($result);

// if ($query){
//     echo "success";
// }
// else{
//     die("Error". mysqli_connect_error());
// }











$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}









?>
