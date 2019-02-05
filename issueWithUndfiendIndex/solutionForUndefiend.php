<body>
<div>
<form id="form1" name="form1" method="post" action="">
 <table width="20%" border="0" cellspacing="0">
  <tr>
   <td>Width</td>
   <td><label>
    <input type="text" name="width" id="width" />
   </label></td>
  </tr>
  <tr>
   <td>Length</td>
   <td><label>
    <input type="text" name="length" id="length" />
   </label></td>
  </tr>
  <tr>
   <td><label>
    <input type="submit" name="submit" id="submit" value="Submit" />
   </label></td>
   <td>&nbsp;</td>
  </tr>
 </table>
</form>

</div>
<?php

//My soloution
if( isset($_POST['length']) && isset($_POST['length'])){
    $length = $_POST['length'];
    $width = $_POST['width'];
    $answer = $width * $length;
    print $answer;
}
?>