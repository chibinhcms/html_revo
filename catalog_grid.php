<div class="product-filter filters-panel">
	  <div class="row">
		<div class="box-list col-md-2 hidden-sm hidden-xs">
			<div class="view-mode">
				<div class="list-view">
					<button class="btn btn-default grid active" data-toggle="tooltip" title="" data-original-title="Grid"><i class="fa fa-th-large"></i></button>
					<button class="btn btn-default list " data-toggle="tooltip" title="" data-original-title="List"><i class="fa fa-bars"></i></button>
				</div>
			</div>
		</div>
		<div class="short-by-show form-inline text-right col-md-10 col-sm-12">
			<div class="form-group short-by">
				<label class="control-label" for="input-sort">Sort By:</label>
				<select id="input-sort" class="form-control" onchange="location = this.value;">
				  				  				  <option value="http://localhost/so_revo/index.php?route=product/category&amp;path=57&amp;sort=p.sort_order&amp;order=ASC" selected="selected">Default</option>
				  				  				  				  <option value="http://localhost/so_revo/index.php?route=product/category&amp;path=57&amp;sort=pd.name&amp;order=ASC">Name (A - Z)</option>
				  				  				  				  <option value="http://localhost/so_revo/index.php?route=product/category&amp;path=57&amp;sort=pd.name&amp;order=DESC">Name (Z - A)</option>
				  				  				  				  <option value="http://localhost/so_revo/index.php?route=product/category&amp;path=57&amp;sort=p.price&amp;order=ASC">Price (Low &gt; High)</option>
				  				  				  				  <option value="http://localhost/so_revo/index.php?route=product/category&amp;path=57&amp;sort=p.price&amp;order=DESC">Price (High &gt; Low)</option>
				  				  				  				  <option value="http://localhost/so_revo/index.php?route=product/category&amp;path=57&amp;sort=rating&amp;order=DESC">Rating (Highest)</option>
				  				  				  				  <option value="http://localhost/so_revo/index.php?route=product/category&amp;path=57&amp;sort=rating&amp;order=ASC">Rating (Lowest)</option>
				  				  				  				  <option value="http://localhost/so_revo/index.php?route=product/category&amp;path=57&amp;sort=p.model&amp;order=ASC">Model (A - Z)</option>
				  				  				  				  <option value="http://localhost/so_revo/index.php?route=product/category&amp;path=57&amp;sort=p.model&amp;order=DESC">Model (Z - A)</option>
				  				  				</select>
			</div>

			<div class="form-group">
				<label class="control-label" for="input-limit">Show:</label>
				<select id="input-limit" class="form-control" onchange="location = this.value;">
				  				  				  <option value="http://localhost/so_revo/index.php?route=product/category&amp;path=57&amp;limit=12" selected="selected">12</option>
				  				  				  				  <option value="http://localhost/so_revo/index.php?route=product/category&amp;path=57&amp;limit=25">25</option>
				  				  				  				  <option value="http://localhost/so_revo/index.php?route=product/category&amp;path=57&amp;limit=50">50</option>
				  				  				  				  <option value="http://localhost/so_revo/index.php?route=product/category&amp;path=57&amp;limit=75">75</option>
				  				  				  				  <option value="http://localhost/so_revo/index.php?route=product/category&amp;path=57&amp;limit=100">100</option>
				  				  				</select>
			</div>
			
			<div class="product-compare form-group"><a href="http://localhost/so_revo/index.php?route=product/compare" id="compare-total" class="btn btn-default"><i class="fa fa-retweet"></i> Compare</a></div>
			
		</div>
		
	  </div>
	</div>