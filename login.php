<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login Page</title>
     <style>
          #saran{
               background-image: url('../../../img/saran.jpg' ) ;
               background-size: 100%;
               background-repeat:no-repeat;
               
          }
     </style>
     
  

</head>
<body id="saran">


//*background-color: antiquewhite;*/
     
     <div style="font-size: 30px; padding: 50px; margin: 150px 400px 150px 400px; border: 5px; border-color: black;"> 
          <form action="insertex.php" method="post" id="form" >
               <label   for="Name">Name&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;:</label>
               <input type="text" name="name_l" placeholder="Username" required style="font-size: 18pt; height: 25px; width:300px;"> <br>
               <label for="email">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>
               <input type="email" name="email_l" placeholder="abc@gmail.com" required style="font-size: 18pt; height: 25px; width:300px;"> <br>
               <label for="password">Password:</label>
               <input type="password" name="passcode_l" placeholder="*********" required style="font-size: 18pt; height:25px; width:300px;"> <br>
               <input type="submit" value="Login" onclick="myfunction()">
              
               
               <form action="update.php">
               <input type="button" name="update" value="update" onclick="">

               </form>
               
               <input type="reset" value="Clear" onclick="cfunction()">
               
               <script>
                    function myfunction(){
                         alert("Login Successfully")
                         
                    }
                    </script>
                    <script> 
                    function cfunction(){
                    alert("Cleared successfully")
                    
               }
              </script>

          </form>
        
     </div>
     <p>     <a href="../HTML/index.php">Go back</a></p>
     <footer>
          <div id="footer" style="text-align:center">
               &copy; 2022!Copyrights
          </div>
          
     </footer>
     
</body>
</html>