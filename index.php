
<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array(  
                      'Firstname' =>     $_POST["Firstname"],
                      'Lastname' =>     $_POST["Lastname"],
                      'Gender'   =>     $_POST["Gender"],  
                      'DOB' =>     $_POST["DOB"],
                      'Religion' =>     $_POST["Religion"],
                      'presentaddress'    =>     $_POST["presentaddress"],  
                       'Permanentaddress'     =>     $_POST["Permanentaddress"],  
                          'phone' =>     $_POST["phone"],
                      'Email' =>     $_POST["Email"],
                      'Lienk'    =>     $_POST["Lienk"],  
                       'uname'     =>     $_POST["uname"],  
                        'pass'     =>     $_POST["pass"] 
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                if(file_put_contents('data.json', $final_data))  
                {  
                    echo '<script>alert("Data Added in data.json file")</script>';
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }  
    
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
</head>
<body>
    <h1>Registration Form</h1>
 


<form method="post" action="" name="registration">

        <fieldset>
            <legend>Basic Information:</legend>

        <label for="fname">First Name:</label>
        <input type="text" name="Firstname"><br>

        <label for="lname">Last name: </label>
        <input type="text" name="Lastname"><br>


            Gender:<br>
            <input type="radio" name="Gender" value="Male">Male<br>
            <input type="radio" name="Gender" value="Female">Female<br>
            <input type="radio" name="Gender" value="Other">Other<br>


         <label for="DOB">DOB</label>
         <input type="date" name="DOB"><br>

         Religion:<br>
            <select name="Religion" > 
                <option value="islam" name="islam" >islam</option> 
                <option value="hindu" name="hindu" >hindu</option> 
            </select>
            </fieldset>
            <br><br><br>




        <fieldset>
        <legend>Contact Information:</legend>
 

        <label for="presentaddress">presentaddress:</label>
        <textarea id="presentaddress" name="presentaddress" rows="2" cols="20"></textarea><br>

        <label for="Permanentaddress">Permanentaddress:</label>
        <textarea id="Permanentaddress" name="Permanentaddress" rows="2" cols="20"></textarea><br>

        
        <label for="phone">phone: </label>
        <input type="phone" name="phone" required><br>

        <label for="Email">Email: </label>
        <input type="Email" name="Email" required><br>

        <label for="Lienk">Personal Website Lienk : </label>
         <input type="Lienk" name="Lienk" required><br>
 
        
        
        </fieldset>
                <legend>Login Info:</legend>

        <br><br>
        <fieldset>
                <label for="username">User Name: </label>
        <input type="username" name="uname" required><br>

        <label for="password">Enter Password :</label>
         <input type="password" name="pass" required><br>
         <input type="submit" name="submit"value="register">
        </fieldset>
    </form>
</body>
</html>