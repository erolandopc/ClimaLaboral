<!DOCTYPE html>
<html>
	<?php include_once('../master/head.php'); ?>
	<body class="hold-transition skin-blue sidebar-mini sidebar-collapsee">
		<div class="wrapper">
			<?php include_once('../master/header.php'); ?>
			<?php include_once('../master/menu.php'); ?>


			<div class="content-wrapper">		    
			    <section class="content-header">
			      <h1>
			        Dashboard
			        <small>Panel de control</small>
			      </h1>
			      <ol class="breadcrumb">
			        <li><a href="/"><i class="fa fa-dashboard"></i> Inicio</a></li>
			        <li class="active">Dashboard</li>
			      </ol>
			    </section>

			    
			    <section class="content">
	      			
					<div class="row">
				    	<div class="col-md-3 col-sm-6 col-xs-12">
				        	<div class="info-box bg-aqua">
				        		<span class="info-box-icon"><i class="fa fa-users"></i></span>
				            	<div class="info-box-content">
				            		<span class="info-box-text">Personal activo</span>
				            		<span id="" class="info-box-number"></span>
				            		<div class="progress"><div class="progress-bar"></div></div>
				                	<span class="progress-description"></span>
				            	</div>
				          	</div>
				        </div>

				        <div class="col-md-3 col-sm-6 col-xs-12">
				        	<div class="info-box bg-yellow">
				            	<span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>
					            <div class="info-box-content">
				              		<span class="info-box-text">Participantes</span>
				              		<span class="info-box-number"></span>
				              		<div class="progress"><div class="progress-bar"></div></div>
				                  	<span class="progress-description"></span>
				            	</div>
				          	</div>
				        </div>
				        
				        <div class="col-md-3 col-sm-6 col-xs-12">
				        	<div class="info-box bg-green">
				            	<span class="info-box-icon"><i class="fa fa-envelope"></i></span>
				            	<div class="info-box-content">
				              		<span class="info-box-text">Con correo-e</span>
				              		<span class="info-box-number"></span>
					              	<div class="progress"><div class="progress-bar"></div></div>
				                  	<span class="progress-description"></span>
				            	</div>
					        </div>
				        </div>


				        <div class="col-md-3 col-sm-6 col-xs-12">
				        	<div class="info-box bg-red">
				            	<span class="info-box-icon"><i class="fa fa-envelope-o"></i></span>
				            	<div class="info-box-content">
				              		<span class="info-box-text">Sin correo-e</span>
				              		<span class="info-box-number"></span>
						            <div class="progress"><div class="progress-bar"></div></div>
				                  	<span class="progress-description"></span>
				            	</div>
				          	</div>
				        </div>
				    

				        <div class="col-md-3 col-sm-6 col-xs-12">
				        	<div class="info-box bg-green">
				            	<span class="info-box-icon"><i class="fa fa-check"></i></span>
					            <div class="info-box-content">
					            	<span class="info-box-text">Finalizados</span>
				              		<span id="TotalInscritos" class="info-box-number"></span>
					            	<div class="progress"><div class="progress-bar"></div></div>
				                  	<span class="progress-description"></span>
				            	</div>
				          	</div>
				        </div>
				        
				        <div class="col-md-3 col-sm-6 col-xs-12">
				        	<div class="info-box bg-orange">
				            	<span class="info-box-icon"><i class="fa fa-gears"></i></span>
				            	<div class="info-box-content">
					              	<span class="info-box-text">En progreso</span>
					              	<span class="info-box-number"></span>
					              	<div class="progress"><div class="progress-bar"></div></div>
					                <span class="progress-description"></span>
				            	</div>
				        	</div>
				        </div>

				        <div class="col-md-3 col-sm-6 col-xs-12">
				        	<div class="info-box bg-red">
				            	<span class="info-box-icon"><i class="fa fa-exclamation"></i></span>
				            	<div class="info-box-content">
					              	<span class="info-box-text">Pendientes</span>
					              	<span class="info-box-number"></span>
					              	<div class="progress"><div class="progress-bar"></div></div>
					                <span class="progress-description"></span>
				            	</div>
				        	</div>
				        </div>

				        
				        <div class="col-md-3 col-sm-6 col-xs-12">
				        	<div class="info-box bg-blue">
				            	<span class="info-box-icon"><i class="fa fa-calendar"></i></span>
				            	<div class="info-box-content">
					              	<span class="info-box-text">Fecha</span>
					              	<span class="info-box-number"></span>
					              	<div class="progress"><div class="progress-bar"></div></div>
					                <span class="progress-description"></span>
				            	</div>
				        	</div>
				        </div>


				        <div class="col-md-3 col-sm-6 col-xs-12">
				        	<div class="info-box bg-maroon">
				            	<span class="info-box-icon"><i class="fa fa-female"></i></span>
				            	<div class="info-box-content">
				              		<span class="info-box-text">Mujeres</span>
				              		<span id="Mujeres" class="info-box-number"></span>
				              		<div class="progress"><div id="BarMujeres" class="progress-bar" ></div></div>
				              		<span id="PorcMujeres" class="progress-description"></span>
				            	</div>
				          	</div>
				        </div>

				        <div class="col-md-3 col-sm-6 col-xs-12">
				        	<div class="info-box bg-blue">
				            	<span class="info-box-icon"><i class="fa fa-male"></i></span>
				            	<div class="info-box-content">
				              		<span class="info-box-text">Hombres</span>
				              		<span id="Hombres" class="info-box-number"></span>
				              		<div class="progress"><div id="BarHombres" class="progress-bar" ></div></div>
				                  	<span id="PorcHombres" class="progress-description"></span>
				            	</div>
				          	</div>
				        </div>

				    </div>

	    		</section>
   
  			</div>
  		
  			<?php include_once('../master/footer.php'); ?>

  		</div>	

  		<?php include_once('../master/scripts.php'); ?>
  		<script type="text/javascript">
			

  			$(document).ready(function(){

  				/*              	
              	$.ajax({
              	  //crossDomain: true,
              	  url: 'http://cl.mop.gob.sv/Svc/Resultados.svc/dashboard',
              	  type: 'post',
              	  dataType: 'jsonp',
              	  beforeSend: function() {},
              	  success: function(data) {

              	  	$("#TotalInscritos").html(data.TotalInscritos);

              	  },
              	  error: function(xhr, textStatus, errorThrown) {
              	    alert(textStatus);
              	  }
              	}); 
		
				*/
				

  			});

  		</script>

	</body>
</html>
