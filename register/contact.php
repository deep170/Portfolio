<?php 
if(isset($_POST['submit'])){
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$phone2 = $_POST['phone2'];
$address = $_POST['address'];
$college = $_POST['college'];
$course = $_POST['course'];
$year = $_POST['year'];
$branch = $_POST['branch'];
$linkedin = $_POST['linkedin'];
$fb = $_POST['fb'];
$insta = $_POST['insta'];
$question = $_POST['question'];

$db_user="id13573102_deep";
$db_pass="";
$db_name="id13573102_registration";
$db = new PDO('mysql:host=localhost;dbname=' .$db_name. ';charset=utf8',$db_user,$db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$data = $db->prepare("insert into registration(firstname, lastname, dob, email, phone, phone2, address, 
                                               college, course, year, branch, linkedin, fb, insta, question) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$result = $data->execute([$first_name, $last_name, $dob, $email, $phone, $phone2, 
$address, $college, $course, $year, $branch, $linkedin, $fb, $insta]);
if($result){header("Location: index.html");exit;}
}
?> 