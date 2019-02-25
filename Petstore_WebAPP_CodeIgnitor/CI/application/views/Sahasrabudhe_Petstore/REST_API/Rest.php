<?php

$verb = $_SERVER['REQUEST_METHOD'];


if($verb=='GET')

{
if($_GET['tel'])
{

$fname=$_REQUEST['tel'];
echo $fname;


}

else
{

die("ERROR:Required Parameteres not given");

}


}
elseif($verb=='POST')
{



}



?>