<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            <h2>Fill out Survey</h2>
        </title>
        <link href='styles.css' text='text' rel='stylesheet' />
    </head>
    <body>
        <form action="PHP.php" method="POST">
            <label><h3>Personal Details:</h3></label></br>
            <p>Surname:</p><input type="text" name="surname" required="required">
            <p>First Names:</p><input type="text" name="name" required="required">
            <p>Contact number:</p><input type="text" name="contact" required="required">
            <p> Date:</p><input type="date" name="date" required="required">
            <p> Age:</p><input type="text" name="age" required="required"></br>

            <label><h3> What is your favorite food?(You can choose more than one answer)</h3></label></br>
            <input type="checkbox" name='pizza' value='pizza'>Pizza:</br>
            <input type='checkbox' name='pasta'value='pasta'>Pasta:</br>
            <input type='checkbox' name='pap' value='pap'>Pap and Wors:</br>
            <input type='checkbox' name='chicken' value='chicken'>Chicken Stir Fry:</br>
            <input type='checkbox' name='beef' value='beef'>Beef Stir Fry:</br>
            <input type='checkbox' name='other' value='other'>Other:</br>
            <label>
                <h3>On a scale of 1 to 5 indicate whether you strongly agree to strongly disagree</h3>
            </label></br>
            <table class="table" border="2px">
                <thead>
                    <tr>
                        <th></th>
                        <th>Strongly agree(1)</th>
                        <th>Agree(2)</th>
                        <th>Neutral(3)</th>
                        <th>Disagree(4)</th>
                        <th>Strongly disagree(5)</th>   
                    </tr>
                </thead>

                <tr> 
                    <td>I want to eat out </td>
                    <td><input type='radio' name='eatout' value='strongly agree(1)' required="required"></td>
                    <td><input type='radio' name='eatout' value='agree(2)'></td>
                    <td><input type='radio' name='eatout' value='neutral(3)'></td>
                    <td><input type='radio' name='eatout' value='disagree(4)'></td>
                    <td><input type='radio' name='eatout' value='strongly disagree(5)'></td>
                </tr>
                <tr>
                    <td> I like to watch movies </td> 
                    <td><input type='radio' name='movies' value='strongly agree(1)' required="required"></td>
                    <td><input type='radio' name='movies' value='agree(2)'></td>
                    <td><input type='radio' name='movies' value='neutral(3)'></td>
                    <td><input type='radio' name='movies' value='disaagree(4)'></td>
                    <td><input type='radio' name='movies' value='strongly disagree(5)'></td>
                </tr>
                <tr>
                    <td> I like to watch TV </td>
                    <td><input type='radio' name='watchtv' value='strongly agree(1)'required="required"></td>
                    <td><input type='radio' name='watchtv' value='agree(2)'></td>
                    <td><input type='radio' name='watchtv' value='neutral(3)'></td>
                    <td><input type='radio' name='watchtv' value='disaagree(4)'></td>
                    <td><input type='radio' name='watchtv' value='strongly disagree(5)'></td>
                </tr>
                <tr>
                    <td> I like to listen to the radio </td> 
                    <td><input type='radio' name='radio' value='strongly agree(1)' required="required"></td>
                    <td><input type='radio' name='radio' value='agree(2)'></td>
                    <td><input type='radio' name='radio' value='neutral(3)'></td>
                    <td><input type='radio' name='radio' value='disaagree(4)'></td>
                    <td><input type='radio' name='radio' value='strongly disagree(5)'></td>
                </tr>
            </table></br>

                <input type="Submit" name="submit" value="Submit" class="submit"> 
                </form>
                <?php
                // put your code here
                ?>
                </body>
                </html>
