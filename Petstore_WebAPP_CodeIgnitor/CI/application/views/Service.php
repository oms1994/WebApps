
    
        <div id="ColRight">

    <div id="pagebaner">
        <img src="images/pet store banner 5 png.png">
    </div>

    <div id="pagecontent">
        <h2>Service</h2> <br>

        Required information is marked with an asterik (*). <br><br>
            <?php echo validation_errors();?>
        <table>
            <form action="<?php base_url();?>" method="post" id="form1">

                   <?php echo form_open('form'); ?>    

                 <input type="hidden" name="formname" value="serviceform">
                  
            <tbody>
                <tr>
                <td>*First Name:</td>
                <td><input type="text" name="FName" required placeholder="First name" value="<?php echo isset ($_POST["FName"])? $_POST["FName"] : '';?>"><text id="error"><?php if(isset($ferror)) echo$ferror;?></text></td>
                </tr>   
                <tr>
                <td>*Last Name:</td>
                <td><input type="text" name="LName" required placeholder="Last name" value="<?php echo isset ($_POST["LName"])? $_POST["LName"] : '';?>"  ><text id="error"><?php if(isset($lerror)) echo$lerror;?></text>
                </td>
                </tr>
                
                <tr>
                <td>*E-mail:</td>
                <td><input type="email" name="emailid" required placeholder="Email Id" value="<?php echo isset ($_POST["emailid"])? $_POST["emailid"] : '';?>"    ><text id="error"><?php if(isset($eerror)) echo$eerror;?></text></td>
                </tr>

                <tr>
                <td>Phone:</td>
                <td><input type ="Phno" name="Phno" minlength="10" maxlength="10"placeholder="Enter Phone Number" value="<?php echo isset ($_POST["Phno"])? $_POST["Phno"] : '';?>"    ><text id="error"><?php if(isset($pherror)) echo$pherror;?></text></td>
                </tr>
                <tr>
                <td>Business Name:</td>
                <td><input type="text" name="BName" placeholder="Enter Your Business Name" value="<?php echo isset ($_POST["BName"])? $_POST["BName"] : '';?>"></td>
                </tr>     
                </tbody>

                
            </table>
                    <br>
            <input type="submit" name="submit" value="submit">
                    <br>
            </form>
                <br>