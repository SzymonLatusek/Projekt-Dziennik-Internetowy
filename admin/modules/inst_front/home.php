<div class="container">
	<div class="rows">
		<div class="col-md-12">
			<div class="well">
				<div class="media">
			  <a class="pull-left" href="#">
			    <img class="media-object" src="<?php echo WEB_ROOT; ?>/img/CSA bannerjpg.png" width="800px">
			  </a>
			</div>
			</div>
	</div>
</div>
<div class="container">

	<div class="col-xs-12 col-sm-9">
		<div class="rows">
			<div class="well">
				<fieldset>
					<legend><h4 class="text-center"></h4></legend>
						<p></p>
				</fieldset>	
				<fieldset>
					<legend><h4 class="text-center"></h4></legend>
						<p></p>
				</fieldset>	

				
			</div>
		</div>
	</div>
	<!--/span--> 
	<div class="row row-offcanvas row-offcanvas-right">
		<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
			<div class="sidebar-nav">
				<div class="panel panel-success">
				
			  		<div class="panel-heading">Informacje</div>
					   <div class="panel-body">	
							<div class="col-xs-12 col-sm-12">
							 <span class="glyphicon glyphicon-user"> </span> <label><?Php echo $_SESSION['ACCOUNT_NAME'];?></label><br/>
							 <span class="glyphicon glyphicon-cog"> </span> <label><?Php echo $_SESSION['ACCOUNT_TYPE'];?></label><br/>
							  <a href="<?php echo WEB_ROOT; ?>admin/logout.php" class="btn btn-default">Wyloguj <span class="glyphicon glyphicon-log-out"></span></a>
							</div>					            					            		
						</div>
					          
				</div>
			</div>
		</div>
	</div>
<!--/.well --> 
</div><!--container-->
	