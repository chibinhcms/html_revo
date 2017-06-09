<!DOCTYPE html>
<html>
<head>
<title>Revo - Multi-Purpose Responsive Theme</title>
<?php include("boxes/head.php"); ?>
</head>

<body class="ltr res layout-1  ">
<div id="wrapper" class="wrapper-full banners-effect-1">   
	<?php include("boxes/header.php"); ?>
                            
<div id="content">
	<div class= "container page-category">
		<ul class="breadcrumb">
        <li><a href="http://localhost/so_revo/index.php?route=common/home"><i class="fa fa-home"></i></a></li>
        <li><a href="http://localhost/so_revo/index.php?route=product/category&amp;path=57">Shop Collection</a></li>
      </ul>
		<div class="row">
			<?php include("boxes/left.php"); ?>
			<div id="content" class="col-md-9 col-sm-12 col-xs-12">
				<div class="products-category">
					<?php include("boxes/todaydeals.php"); ?>
					<?php include("catalog_grid.php"); ?>
				</div>
			</div>
		</div>	
	</div>	
</div>		
	
		
	<?php include("boxes/footer.php"); ?>
    </div>
</body>
</html>