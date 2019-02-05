<body style="background:<?php if (!empty( $_POST['color'] ) )echo $_POST['color']?>">
<style>
button {
	height:37px;
	width: 60px;
	border: none;
	outline: none;
	margin:14px;
	display: block;
}
form {
    background-color: #E6E6E6;
    width: 490px;
    height: 100px;
    
}
.color {
	display: flex;
}
</style>

<?php 
$colors = ['#000','#fff','#dd3333','#dd9933','#eeee22','#81d742','#1e73be','#8224e3','#194b6d'];
function button ($colors) {
  foreach ($colors as $color) { ?>
  
		<button style='background-color:<?php echo $color ?>' name='color' value='<?php echo $color ?>'></button>
		
	<?php }
}
 ?>

<form action="" method="POST">
	<label for="username" style="text-transform:uppercase;">choose color:</label>
		<div class="color">
	<?php button($colors); ?>
	</div>
</form>


</body>