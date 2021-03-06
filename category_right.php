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
        <li><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Shop Collection</a></li>
      </ul>
		<div class="row">			
			<div id="content" class="col-md-9 col-sm-12 col-xs-12">
				<div class="products-category">
					<div class="form-group clearfix">
						<div class="category-info row">
							<div class="form-group col-sm-12 col-xs-12">
								<img src="image/catalog/demo/category/fashion-cat.jpg">
								</div>
							</div>
							<h3 class="title-category">Shop Collection</h3>
						</div>
						<?php include("catalog_grid.php"); ?>
				</div>
			</div>
			<?php include("boxes/right.php"); ?>
		</div>	
	</div>	
</div>		
	
		
	<?php include("boxes/footer.php"); ?>
    </div>
</body>
</html>