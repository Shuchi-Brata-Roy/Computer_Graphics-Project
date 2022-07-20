<html>
    <title> Registration Form</title>
        <body>
        <h1 align = "center"> Registration Form </h1>
<form action="" method="post" enctype="multipart/form-data">

                <table align = "center">
                    <tr><td>First Name:</td>
                    <td> <input type="text"name="fname" ></td></tr>

                    <tr><td>Last Name:</td>
                    <td><input type="text"name="lname"></td></tr>

                    <tr><td>Age:</td>
                    <td><input type="text" name="age"></td></tr>

                    <tr><td>Designation</td>
                    <td><input type="radio" name="designation"value="Junior Programmer">Junior Programmer
                    <input type="radio" name="designation"value="Senior Programmer">Senior Programmer
                    <input type="radio" name="designation"value="Project Lead">Project Leader</td></tr>

                    <tr><td>Preferred Language</td>
                    <td><input type="checkbox" name="PL1" value="java">Java
                    <input type="checkbox" name="PL2" value="php">PHP
                    <input type="checkbox" name="PL3" value="c++">C++</td></tr>

                    <tr><td>E-mail:</td>
                    <td><input type="text"name="email"></td></tr>

                    <tr><td>Password: </td>
                    <td> <input type="password" name="password" ></td></tr>

                    <tr> <td> Please choose a file: </td>
                    <td><input type="file" name="myfile" > </td></tr>

                    <tr> <td> <br> 
                    <input type="submit"name="submit"value="Submit">
                    <input type="submit"name="reset"value="Reset"></td> </tr>

            </table>
        </form> 
    </body>
</html>

<?php 
        include '../control/registrationprocess.php'
        ?>>