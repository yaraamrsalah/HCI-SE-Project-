<html>
<head>
	<title>shop by brand</title>
<link rel="stylesheet" href="<?=ASSETS?>css/brand.css">

</head>
<body>
<?php  $this->view("includes/header",$data);?>   
<br><br><br><br><br><br>
   <center >
<h1> shop by brand  </h1> 
</center>

<div class="content">
			<div class="categories">
				<a href="#Ray-Ban.png" target="_blank" class="image-title">
				<img src="<?=ASSETS?>images/Ray-Ban.png" class="image-item"/>
			</div>	

		<a href="#armani" target="_blank">
			<div class="categories">
				<img src="<?=ASSETS?>images/armani.png" class="image-item"/>
				
			</div>
		</a> 
		<a href="#boss">
			<div class="categories">
				<img src="<?=ASSETS?>images/boss.jfif" class="image-item"/>
				
			</div>
		</a>
		<a href="#tommyhilfiger"> 
			<div class="categories">
				<img src="<?=ASSETS?>images/tommyhilfiger.jpg" class="image-item"/>
				
			</div>
			<a href="#Ralph-Lauren">
			<div class="categories">
				<img src="<?=ASSETS?>images/Ralph-Lauren.png" class="image-item"/>
				
			</div>
		</a>
			<a href="#PierreCardin">
			<div class="categories">
				<img src="<?=ASSETS?>images/PierreCardin.png" class="image-item"/>
				
			</div>
		</a>
		<a href="#seven">
			<div class="categories">
				<img src="<?=ASSETS?>images/seven.jpeg" class="image-item"/>
				
			</div>
		</a>
			<a href="#Polaroid">
			<div class="categories">
				<img src="<?=ASSETS?>images/Polaroid.png" class="image-item"/>
			</div>
		</a>

		</div>
		</body>
		<?php $this->view("includes/footer",$data);?>   
</html>