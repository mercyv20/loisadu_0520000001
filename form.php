<?php

echo <<<_END

<html>
    <head>
        <title>Form for Entering Full Name</title>
    </head>
    <body>

       
       <h3>Enter Full Name</h3><br/>

       <form action="postfullname.php" method="GET" enctype="multipart/form-data">
    
       <input type="text" name="fname" value= "" /><br/>
      
       <input name="lname" placeholder=' Enter your lastname' /><br/>

       <p><input type='password' name='pass' placeholder='Enter your password'></p>

       <p><textarea name="comment"></textarea></p> 
       <input type='file' name='fileupload'>
       <input type="file" name="fileToUpload" id="fileToUpload">
       
       <p>
       <input type="submit" value="Submit Your Name" />
       </p>
       

    </form>
   

    </body>
</html>
 
_END;