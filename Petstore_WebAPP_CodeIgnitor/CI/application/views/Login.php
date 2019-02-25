<div id="ColRight">

    <div id="pagebaner">
        <img src="images/pet store banner 5 png.png">
    </div>

    <div id="pagecontent">
        <h2>Login</h2> <br>

        Required information is marked with an asterik (*). <br><br>
         <?php echo validation_errors();?>
        <table>
               <form method ="POST" action="<?php base_url();?>">
               

                   <?php echo form_open('form');?>    
                 <input type="hidden" name="formname" value="cloginform">

                   
                <tbody><tr>
                
                <td>*E-mail:</td>
                <td><input type="email" name="emailid" required placeholder="Email Id" value="<?php echo isset ($_POST["emailid"])? $_POST["emailid"] : '';?>"><text id="error"><?php if(isset($ueerror)) echo$ueerror;?></text></td>
                </tr>
                <tr>
                <td>*Password:</td>
                <td><input type="password" name="pwd" required placeholder="Password" value="<?php echo isset ($_POST["pwd"])? $_POST["pwd"] : '';?>"><text id="error"><?php if(isset($peerror)) echo$peerror;?></text></td>
                </tr>      
                </tbody>
              
        </table>


                <br>
                <input type="submit" value="login" name='submit'>
                
                  </form>