<div id="ColRight">
 <div id="pagebaner">
        <img src="images/pet store banner 7 png.png">
    </div>

    <div id="pagecontent">
        <h2>Contact Us</h2> <br>

        Required information is marked with an asterik (*). <br><br>
         <?php echo validation_errors();?>
            <table>
            <form action="<?php base_url();?>" method="post" name="form_contctus">

                <?php echo form_open('form'); ?>
               
             <input type = "hidden" name="formname" value="Contact">

            <tbody>
                <tr>
                <td>*First Name:</td>
                <td><input type="text" name="FName" required placeholder="First name" value="<?php echo isset ($_POST["FName"])? $_POST["FName"] : '';?>"><text id="error"><?php if(isset($ferror)) echo$ferror;?></text></td>
                </tr>   
                <tr>
                <td>*Last Name:</td>
                <td><input type="text" name="LName" required placeholder="Last name" value="<?php echo isset ($_POST["LName"])? $_POST["LName"] : '';?>"><text id="error"><?php if(isset($lerror)) echo$lerror;?></text>
                </td>
                </tr>
                
                <tr>
                <td>*E-mail:</td>
                <td><input type="email" name="emailid" required placeholder="Email Id" value="<?php echo isset ($_POST["emailid"])? $_POST["emailid"] : '';?>"><text id="error"><?php if(isset($eerror)) echo$eerror;?></text></td>
                </tr>

                <tr>
                <td>Phone:</td>
                <td><input type ="Phno" name="Phno" placeholder="Enter Phone Number" value="<?php echo isset ($_POST["Phno"])? $_POST["Phno"] : '';?>"    ><text id="error"><?php if(isset($pherror)) echo$pherror;?></text></td>
                </tr>
                <tr>
                <td>*Comments: </td>
                <td><textarea name ="Tarea" required placeholder="Comments Please :-)"><?php echo isset ($_POST["Tarea"])? $_POST["Tarea"] : '';?></textarea><text id="error"><?php if(isset($terror)) echo$terror;?></text></td></tr>     
               </tbody>

                
            </table>
                    <br>
            <input type="submit" name="submit" value="submit">
                    <br>
            </form>
                <br>