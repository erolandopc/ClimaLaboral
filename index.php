<!DOCTYPE html>
<html>
	<?php include_once('/master/head.php'); ?>
	<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
		<div class="wrapper">
			<?php include_once('/master/header.php'); ?>
			<?php include_once('/master/menu.php'); ?>


			<div class="content-wrapper">		    
			    <section class="content-header">
			      <h1>
			        Sistema para el Estudio del Clima Laboral
			        <small>MOPTVDU</small>
			      </h1>
			      
			    </section>

			    
			    <section class="content">
	      			
	      			<div class="row">
			        <div class="col-lg-3 col-xs-6">
			          
			          <div class="small-box bg-aqua btn" onclick="window.location = '/cl/dashboard.php'">
			            <div class="inner">
			              	<h3 class="hidden-xs">Dashboard</h3>
			            	<h4 class="visible-xs">Dashboard</h4>
			              	<p>Panel del control</p>
			            </div>
			            <div class="icon"><i class="ion ion-bag"></i></div>
			            <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
			          </div>

			        </div>


			        <div class="col-lg-3 col-xs-6 hidden">
			          <div class="small-box bg-green btn">
			            <div class="inner">
			            	<h3 class="hidden-xs">Listado</h3>
			            	<h4 class="visible-xs">Listado</h4>
			            	<p>Detalle del personal</p>
			            </div>
			            <div class="icon"><i class="ion ion-stats-bars"></i></div>
			            <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
			          </div>
			        </div>


			        <div class="col-lg-3 col-xs-6">
			          <!-- small box -->
			          <div class="small-box bg-yellow btn" onclick="window.location = '/cl/resultados.php'">
			            <div class="inner">
			              <h3 class="hidden-xs">Resultados</h3>
			              <h4 class="visible-xs">Resultados</h4>
			              <p>Resultados generales</p>
			            </div>
			            <div class="icon"><i class="ion ion-person-add"></i></div>
			            <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
			          </div>
			        </div>
			        <!-- ./col -->
			        <div class="col-lg-3 col-xs-6 hidden">
			          <!-- small box -->
			          <div class="small-box bg-red btn">
			            <div class="inner">
			              <h3 class="hidden-xs">Análisis</h3>
			              <h4 class="visible-xs">Análisis</h4>
			              <p>Detalles de resultados</p>
			            </div>
			            <div class="icon"><i class="ion ion-pie-graph"></i></div>
			            <a href="#" class="small-box-footer"><i class="fa fa-arrow-circle-right"></i></a>
			          </div>
			        </div>
			        <!-- ./col -->
			      </div>
					

	    		</section>
   
  			</div>
  		
  			<?php include_once('/master/footer.php'); ?>

  		</div>	

  		<?php include_once('/master/scripts.php'); ?>
  		<script type="text/javascript">
			

  			$(document).ready(function(){


				
				

  			});

  		</script>

	</body>
</html>
