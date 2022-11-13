<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    <title>Registration</title>
    <link rel="icon" type="image/png" href="images1/logo.PNG">
 
    <style type="text/css">
	
	body {
		
		font-family: 'Roboto Condensed', sans-serif;
      font-size:180%;
      background-image: none;
	  
    background: linear-gradient(7deg, #244366, #cedb19, #7319db, #19dbd4, #f08d1a);
    background-size: 1000% 1000%;

    -webkit-animation: AnimationName 24s ease infinite;
    -moz-animation: AnimationName 24s ease infinite;
    animation: AnimationName 24s ease infinite;
}

@-webkit-keyframes AnimationName {
    0%{background-position:83% 0%}
    50%{background-position:18% 100%}
    100%{background-position:83% 0%}
}
@-moz-keyframes AnimationName {
    0%{background-position:83% 0%}
    50%{background-position:18% 100%}
    100%{background-position:83% 0%}
}
@keyframes AnimationName {
    0%{background-position:83% 0%}
    50%{background-position:18% 100%}
    100%{background-position:83% 0%}
	
     

}
		
  
            
        input {
             padding:5px 5px 12px 5px;
             font-size:25px;
             border-radius:5px;
             border:1px grey solid;
             width:320px;
             }
          label {
              position:relative;
              top:12px;
              width:200px;
              float:left;
             }
          
          .form-element {   
             margin-bottom:10px;
          }	
          
         #submitbutton {
          width:130px;
          margin-left:50px;
           }

          #resetbutton {
          width:130px;
          margin-left:20px;
           }


        }
        
        </style>
  </head>
      
   <body>
   
   <?php 
if(isset($_POST['submit'])){
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$branch = $_POST['branch'];
$field = $_POST['field'];
$skills = $_POST['skills'];

$db_user="root";
$db_pass="";
$db_name="e-cell";
$db = new PDO('mysql:host=localhost;dbname=' .$db_name. ';charset=utf8',$db_user,$db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$data = $db->prepare("insert into registration(name, email, contact, branch, field, skills) values(?,?,?,?,?,?)");
$result = $data->execute([$name, $email, $phone, $branch, $field, $skills]);
if($result){header("Location: success.html");exit;}
}
?> 
       <div class="container">
	    <div class="my-5">
                <div class="card-heading text-center mb-5" style="font-weight:bold; font-size:35px;">Register Here !</div>
                <div class="card-body text-center">
				
                  <form id="contact" action="" method="post">
                        <div class ="form-element ">
             <label for="username">Name</label>
            <input type="text" name="name" id="username" placeholder="eg. your Name" required>
           </div>
     
            <div class ="form-element">
           <label for="email">Email</label>
         <input type="text" name="email" id="email" placeholder="eg. yourname@gmail.com" required>
         </div>

            <div class ="form-element">
           <label for="phone">Contact</label>
         <input type="text" name="phone" id="phone" placeholder="eg. 0123456789" required>
         </div>
                       			   
                  <div class ="form-element">
           <label for="subject">Branch</label>
         <input type="text" name="branch" id="subject" placeholder="eg. EC" required>
         </div>
		 
		 <div class ="form-element">
           <label for="phone">Field</label>
         <input type="text" name="field" id="phone" placeholder="eg. web" required>
         </div>
		 
		 <div class ="form-element">
           <label for="phone">Skills</label>
         <input type="text" name="skills" id="phone" placeholder="eg. programming" required>
         </div>
    
         <div class ="form-element">
		  <div class="">
                            <button class="btn btn-success" id="submitbutton" type="submit" name="submit">Submit</button>
                              <button  class="btn btn-primary" id="resetbutton" type="reset" name="clear">Clear</button>
                        </div>
 
         </div>
		    </form>
                </div>
            </div>
        </div>
		
</body>
</html>