<?php

if (!isset($_SESSION)) session_start();

$u = isset($_POST["u"])?$_POST["u"]:"";
$p = isset($_POST["p"])?$_POST["p"]:"";
if ($u !="" && $p !="")
{
	if(isset ($_POST["submit"]))
	{
	
	$db = new DB();
	$arr = array(":u"=>$u, ":p"=>($p));
	$sql = "select * from khachhang where tendn= :u and matkhau= :p ";
	$rows = $db->selectQuery($sql, $arr);
	$n=Count($rows);
	if ($n >0)
	{
		$_SESSION["dangnhap"]= $rows[0];
		header("location:index.php"); exit;	
	}
	else
	{
		echo "<h2>Sai Dữ Liệu Đăng Nhập!";	
	}
	}
	
}
?>

     
        
         
         <h3>Đăng Nhập</h3>
         
       
       <form id="form1" name="form1" method="post" action="">
         
             <table align="center" width="300" height="150" >
             <tr>
                     <td style=" color:#FFF;" >Username:</td>
                        <td><input type="text" name="u" id="" size="30" /></td>
              </tr>
               <tr>
             
                   <td style=" color:#FFF;">Password:</td>
                        <td><input type="password" name="p" id="textfield2" size="30" /></td>
              </tr>
                    
                 
              <tr>
                     
                     <td colspan="2" align="center" ><input type="submit" name="submit" id="submit" value="Đăng Nhập" /></td>
               </tr>
                     </table>
                     </form>
      
   
                     
          
    
    	
    
  