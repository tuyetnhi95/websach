

<?php
$sach = new sach();
if(isset($_GET["search"]) && isset($_GET)){
$mota=getIndex('mota');
$row = $sach->timmota($mota);


//print_r($row);
}
?>

<table width="549" bgcolor="#FFFFFF" >
<?php foreach($row as $value){ ?>
  <tr>
    <td colspan="2" rowspan="3"><img src="images/book/<?php echo $value["hinh"];?>" height="200px"  width="200px"/></td>
    <td width="338" style="color:#F00"><h2><?php echo $value['tensach'];?></h2></td>
   
  </tr>

  <tr>
  
    <td><u><b>Giới Thiệu</b></u></td>
  </tr>
  <tr>
    
    <td ><?php echo $value['mota']; ?></td>
  </tr>
  <tr>
 

  
  </tr>
  <tr>
    <td width="105">Số Lượng</td>
    <td width="90"><input type="number" name="soluong" style=" width:35px; margin-left:-50px;" /></td>
    <td>Chọn Mua   <img src="images/templatemo_shopping_cart.png" /></td>
  </tr>
    <?php } ?>
</table>
