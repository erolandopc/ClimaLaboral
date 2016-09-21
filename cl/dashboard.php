<!DOCTYPE html>
<html>
	<?php include_once('../master/head.php'); ?>
	<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
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
			        <li><a href="/"><i class="fa fa-home"></i> Inicio</a></li>
			      </ol>
			    </section>

			    
			    <section class="content">
	      			
					<div class="row">
				    	<div id="divTotalEmpleados" class="col-lg-3 col-md-4 col-sm-6 col-xs-12 btn btnMdl">
				        	<div class="info-box bg-aqua">
				        		<span class="info-box-icon"><i class="fa fa-users"></i></span>
				            	<div class="info-box-content">
				            		<span class="info-box-text">Personal activo</span>
				            		<span id="TotalEmpleados" class="info-box-number"></span>
				            		<div class="progress"><div id="BarTotalEmpleados" class="progress-bar"></div></div>
				                	<span id="PorcTotalEmpleados" class="progress-description"></span>
				            	</div>
				          	</div>
				        </div>

				        <div id="divTotalInscritos" class="col-lg-3 col-md-4 col-sm-6 col-xs-12 btn btnMdl">
				        	<div class="info-box bg-yellow">
				            	<span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>
					            <div class="info-box-content">
				              		<span class="info-box-text">Participantes</span>
				              		<span id="TotalInscritos" class="info-box-number"></span>
				              		<div class="progress"><div id="BarTotalInscritos" class="progress-bar"></div></div>
				                  	<span id="PorcTotalInscritos" class="progress-description"></span>
				            	</div>
				          	</div>
				        </div>
				        
				        <div id="divInvitados" class="col-lg-3 col-md-4 col-sm-6 col-xs-12 btn btnMdl">
				        	<div class="info-box bg-green">
				            	<span class="info-box-icon"><i class="fa fa-envelope"></i></span>
				            	<div class="info-box-content">
				              		<span class="info-box-text">Con correo-e</span>
				              		<span id="Invitados" class="info-box-number"></span>
					              	<div class="progress"><div id="BarInvitados" class="progress-bar"></div></div>
				                  	<span id="PorcInvitados" class="progress-description"></span>
				            	</div>
					        </div>
				        </div>


				        <div id="divSinCorreo" class="col-lg-3 col-md-4 col-sm-6 col-xs-12 btn btnMdl">
				        	<div class="info-box bg-red">
				            	<span class="info-box-icon"><i class="fa fa-envelope-o"></i></span>
				            	<div class="info-box-content">
				              		<span class="info-box-text">Sin correo-e</span>
				              		<span id="SinCorreo" class="info-box-number"></span>
						            <div class="progress"><div id="BarSinCorreo" class="progress-bar"></div></div>
				                  	<span id="PorcSinCorreo" class="progress-description"></span>
				            	</div>
				          	</div>
				        </div>
				    

				        <div id="divSinCorreo" class="col-lg-3 col-md-4 col-sm-6 col-xs-12 btn btnMdl">
				        	<div class="info-box bg-green">
				            	<span class="info-box-icon"><i class="fa fa-check"></i></span>
					            <div class="info-box-content">
					            	<span class="info-box-text">Finalizados</span>
				              		<span id="Finalizados" class="info-box-number"></span>
					            	<div class="progress"><div id="BarFinalizados" class="progress-bar"></div></div>
				                  	<span id="PorcFinalizados" class="progress-description"></span>
				            	</div>
				          	</div>
				        </div>
				        
				        <div id="divEnProceso" class="col-lg-3 col-md-4 col-sm-6 col-xs-12 btn btnMdl">
				        	<div class="info-box bg-orange">
				            	<span class="info-box-icon"><i class="fa fa-gears"></i></span>
				            	<div class="info-box-content">
					              	<span class="info-box-text">En progreso</span>
					              	<span id="EnProceso" class="info-box-number"></span>
					              	<div class="progress"><div id="BarEnProceso" class="progress-bar"></div></div>
					                <span id="PorcEnProceso" class="progress-description"></span>
				            	</div>
				        	</div>
				        </div>

				        <div id="divSinIniciar" class="col-lg-3 col-md-4 col-sm-6 col-xs-12 btn btnMdl">
				        	<div class="info-box bg-red">
				            	<span class="info-box-icon"><i class="fa fa-exclamation"></i></span>
				            	<div class="info-box-content">
					              	<span class="info-box-text">Pendientes</span>
					              	<span id="SinIniciar" class="info-box-number"></span>
					              	<div class="progress"><div id="BarSinIniciar" class="progress-bar"></div></div>
					                <span id="PorcSinIniciar" class="progress-description"></span>
				            	</div>
				        	</div>
				        </div>

				        
				        <div id="divFecha" class="col-lg-3 col-md-4 col-sm-6 col-xs-12 btn btnMdl">
				        	<div class="info-box bg-blue">
				            	<span class="info-box-icon"><i class="fa fa-calendar"></i></span>
				            	<div class="info-box-content">
					              	<span class="info-box-text">Fecha</span>
					              	<span id="Fecha" class="info-box-number"></span>
					              	<div class="progress"><div class="progress-bar"></div></div>
					                <span class="progress-description"></span>
				            	</div>
				        	</div>
				        </div>


				        <div id="divMujeres" class="col-lg-3 col-md-4 col-sm-6 col-xs-12 btn btnMdl">
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

				        <div id="divHombres" class="col-lg-3 col-md-4 col-sm-6 col-xs-12 btn btnMdl">
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


  		<div id="mdl" class="modal fade">
  			<div class="modal-dialog modal-lg">
  				<div class="modal-content">
  					<div class="modal-header">
  						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
  						<h4 id="mdlTitulo" class="modal-title">Modal title</h4>
  					</div>
  					<div class="modal-body">
  						<div id="resultado"></div>			
  					</div>
  					<div class="modal-footer">
  						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
  					</div>
  				</div>
  			</div>
  		</div>

  		<?php include_once('../master/scripts.php'); ?>
  		<script type="text/javascript">
			

  			$(document).ready(function(){

              	$.ajax({
              	  url: 'http://cl.mop.gob.sv/Svc/ResultadosExt.svc/dashboard',
              	  type: 'post',
              	  dataType: 'json',
              	  beforeSend: function() { 
              	  	cargando(); 
              	  },
              	  success: function(data) { 
              	  	//alert(data);
              	  	cargarDatos(data); 
              	  },
              	  error: function(xhr, textStatus, errorThrown) {

              	    alert(
              	    			JSON.stringify(xhr) + ", " + 
              	    			textStatus + ",  " + 
              	    			errorThrown
              	    	);
					
              	  }
              	}); 

		
				$(".btnMdl").click(function(){
					
					var id = $(this).attr("id");
					var msg = $("#" + id + " .info-box-text").html();
					$("#mdlTitulo").html(msg);

					//alert(id);

					var svc ="";
					switch(id)
					{
						case "divTotalEmpleados":
						{
							svc = "personal.json";
							break;
						}
						default:
						{
							break;
						}
					}


					$.ajax({
						url: svc,
						type: 'POST',
						dataType: 'json',
						data: {},
						beforeSend: function() {

						},
						success: function(data) {
							
							$("#resultado").append($("<table>").attr({
								"id"	: "tbl",
								"class"	: "table table-striped table-hover table-bordered table-responsive",
								"width"	: "100%"
							}));

							$("#tbl").append( $("<tr>") );
							$("#tbl tr:last").append( $("<th>").html("Orden").addClass("text-center") );
							$("#tbl tr:last").append( $("<th>").html("NombreCompleto").addClass("text-center") );
							$("#tbl tr:last").append( $("<th>").html("Sexo").addClass("text-center") );
							$("#tbl tr:last").append( $("<th>").html("Edad").addClass("text-center") );

							$.each(data, function(i,v){
								$("#tbl").append( $("<tr>") );
								$("#tbl tr:last").append( $("<td>").html(v.Orden).addClass("text-center") );
								$("#tbl tr:last").append( $("<td>").html(v.NombreCompleto).addClass("text-left") );
								$("#tbl tr:last").append( $("<td>").html(v.Sexo).addClass("text-center") );
								$("#tbl tr:last").append( $("<td>").html(v.Edad).addClass("text-center") );
							});
						},
						error: function(xhr, textStatus, errorThrown) {
							
						}
					});

					$("#mdl").modal("show");
				});
				

  			});

			function cargarDatos(data){
					//data.TotalEmpleados = "1,300";
              	  	data.PorcTotalEmpleados = "100% activos";
              	  	data.BarTotalEmpleados = "100%";

              	  	data.PorcTotalInscritos = "18% empleados";
              	  	data.BarTotalInscritos = "18%";

              	  	data.PorcInvitados = parseInt(100 * data.Invitados / data.TotalInscritos) + "% Invit. electrónica";
              	  	data.BarInvitados = parseInt (100 * data.Invitados / data.TotalInscritos) + "%";

              	  	data.SinCorreo 	= data.TotalInscritos - data.Invitados;
              	  	data.PorcSinCorreo = parseInt(100 * (data.TotalInscritos - data.Invitados) / data.TotalInscritos) + "% Invit. directa";
              	  	data.BarSinCorreo = parseInt (100 * (data.TotalInscritos - data.Invitados)/ data.TotalInscritos) + "%";

              	  	$("#TotalEmpleados").html(data.TotalEmpleados);
              	  	$("#PorcTotalEmpleados").html(data.PorcTotalEmpleados);
              	  	$("#BarTotalEmpleados").css("width", data.BarTotalEmpleados);

              	  	$("#TotalInscritos").html(data.TotalInscritos);
              	  	$("#PorcTotalInscritos").html(data.PorcTotalInscritos);
              	  	$("#BarTotalInscritos").css("width", data.BarTotalInscritos);

              	  	$("#Invitados").html(data.Invitados);
              	  	$("#PorcInvitados").html(data.PorcInvitados);
              	  	$("#BarInvitados").css("width", data.BarInvitados);

              	  	$("#SinCorreo").html(data.SinCorreo);
              	  	$("#PorcSinCorreo").html(data.PorcSinCorreo);
              	  	$("#BarSinCorreo").css("width", data.BarSinCorreo);

              	  	$("#Finalizados").html(data.Finalizados);
              	  	$("#PorcFinalizados").html(data.PorcFinalizado + "% de avance");
              	  	$("#BarFinalizados").css("width", data.PorcFinalizado);

              	  	$("#EnProceso").html(data.EnProceso);
              	  	$("#PorcEnProceso").html(data.PorcEnProceso + "% llenando la encuesta");
              	  	$("#BarEnProceso").css("width", data.PorcEnProceso);

              	  	$("#SinIniciar").html(data.SinIniciar);
              	  	$("#PorcSinIniciar").html(data.PorcSinIniciar + "% sin iniciar la encuesta");
              	  	$("#BarSinIniciar").css("width", data.PorcSinIniciar);

              	  	$("#Hombres").html(data.Hombres);
              	  	$("#PorcHombres").html(data.PorcHombres + "% hombres invitados");
              	  	$("#BarHombres").css("width", data.PorcHombres);

              	  	$("#Mujeres").html(data.Mujeres);
              	  	$("#PorcMujeres").html(data.PorcMujeres + "% mujeres invitadas");
              	  	$("#BarMujeres").css("width", data.PorcMujeres);

              	  	var today = new Date();
					var dd = today.getDate();
					var mm = today.getMonth()+1; //January is 0!
					var yyyy = today.getFullYear();

					if(dd<10) {
					    dd='0'+dd
					} 

					if(mm<10) {
					    mm='0'+mm
					} 

					today = dd+'/'+mm+'/'+yyyy;
					$("#Fecha").html(today);
			}

			function cargando(){
				var img = "<img src='/dist/img/loading.svg' />";
              	  	
          	  	$("#TotalEmpleados").html(img);
          	  	$("#TotalInscritos").html(img);
          	  	$("#Invitados").html(img);
          	  	$("#SinCorreo").html(img);
          	  	
          	  	$("#Finalizados").html(img);
          	  	$("#EnProceso").html(img);
          	  	$("#SinIniciar").html(img);

          	  	$("#Hombres").html(img);
          	  	$("#Mujeres").html(img);
          	  	$("#Fecha").html(img);
			}

  		</script>

	</body>
</html>
