<!DOCTYPE html>
<html>
	<?php include_once('../master/head.php'); ?>

	<style type="text/css">
		.table td { 
			border: solid #cccccc 1px !important;  
			padding: 2px !important;
		}	

		.box-header {
			padding: 2px 6px !important;
		}
		section.content{
			min-height:  20px !important;
			padding-bottom:  0px !important;
		}
	</style>


	<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
		<div class="wrapper">
			<?php include_once('../master/header.php'); ?>
			<?php include_once('../master/menu.php'); ?>



			<div class="content-wrapper">		    
			    <section class="content-header">
			      <h1>
			        Resultados
			        <small>Datos estadísticos de los resultados.</small>
			      </h1>
			      <ol class="breadcrumb">
			        <li><a href="/"><i class="fa fa-home"></i> Inicio</a></li>
			      </ol>
			    </section>

			    
			    <section class="content">
	      			
					<div class="row">
				    	
				     	<div class="col-xs-12" > 

				     		<div class="box box-solid box-info">
				     			<div class="box-header">
				     				<h3 class="box-title">Distribución general de la muestra a nivel MOPTVDU</h3>
				     			</div>
				     			<div class="box-body">

				     				<div class="col-xs-12 col-sm-6 col-md-3 col-md-3">
				     					<table class="table table striped table-hover table-bordered table-responsive">
				     						<tr>
				     							<td class="text-center text-bold primary" style="width: 40%;" rowspan="2">Referencia</td>
				     							<td class="text-center text-bold danger" style="width: 60%;" colspan="2">G&eacute;nero</td>
				     						</tr>
				     						<tr>
				     							<td class="text-center text-bold danger">Masculino</td>
					     						<td class="text-center text-bold danger">Femenino</td>
				     						</tr>
				     						<tr>
				     							<td id="est_ref" class="text-center primary"></td>
					     						<td id="est_mas" class="text-center danger"></td>
					     						<td id="est_fem" class="text-center danger"></td>
				     						</tr>
				     						<tr>
				     							<td id="por_ref" class="text-center primary"></td>
					     						<td id="por_mas" class="text-center danger"></td>
					     						<td id="por_fem" class="text-center danger"></td>
				     						</tr>
				     					</table>
				     				</div>
				     				<div class="col-xs-12 col-sm-6 col-md-3 col-md-3">
				     					<table class="table table striped table-hover table-bordered table-responsive">
				     						<tr>
				     							<td class="text-center text-bold success" colspan="4">Edad</td>
				     						</tr>
				     						<tr>
				     							<td class="text-center text-bold success" style="width: 25%;">18-29</td>
						     					<td class="text-center text-bold success" style="width: 25%;">30-41</td>
						     					<td class="text-center text-bold success" style="width: 25%;">42-53</td>
						     					<td class="text-center text-bold success" style="width: 25%;">54-56</td>
				     						</tr>
				     						<tr>
				     							<td id="est_edad_1" class="text-center success"></td>
						     					<td id="est_edad_2" class="text-center success"></td>
						     					<td id="est_edad_3" class="text-center success"></td>
						     					<td id="est_edad_4" class="text-center success"></td>
				     						</tr>
				     						<tr>
				     							<td id="por_edad_1" class="text-center success"></td>
						     					<td id="por_edad_2" class="text-center success"></td>
						     					<td id="por_edad_3" class="text-center success"></td>
						     					<td id="por_edad_4" class="text-center success"></td>
				     						</tr>
				     					</table>
				     				</div>
				     				<div class="col-xs-12 col-sm-6 col-md-3 col-md-3">
				     					<table class="table table striped table-hover table-bordered table-responsive">
				     						<tr>
				     							<td class="text-center text-bold warning" style="width: 25%;" colspan="4">Antigüedad</td>
				     						</tr>
				     						<tr>
				     							<td class="text-center text-bold warning" style="width: 25%;">1-9</td>
						     					<td class="text-center text-bold warning" style="width: 25%;">10-18</td>
						     					<td class="text-center text-bold warning" style="width: 25%;">19-27</td>
						     					<td class="text-center text-bold warning" style="width: 25%;">28-36</td>
				     						</tr>
				     						<tr>
				     							<td id="est_anti_1" class="text-center warning"></td>
						     					<td id="est_anti_2" class="text-center warning"></td>
						     					<td id="est_anti_3" class="text-center warning"></td>
						     					<td id="est_anti_4" class="text-center warning"></td>
				     						</tr>
				     						<tr>
				     							<td id="por_anti_1" class="text-center warning"></td>
						     					<td id="por_anti_2" class="text-center warning"></td>
						     					<td id="por_anti_3" class="text-center warning"></td>
						     					<td id="por_anti_4" class="text-center warning"></td>
				     						</tr>
				     					</table>
				     				</div>
				     				<div class="col-xs-12 col-sm-6 col-md-3 col-md-3">
				     					<table class="table table striped table-hover table-bordered table-responsive">
				     						<tr>
				     							<td class="text-center text-bold info" style="width: 25%;" colspan="4">Viceministerio</td>
				     						</tr>
				     						<tr>
					     					
					     					
					     					
					     					<td class="text-center text-bold info" style="width: 25%;">CORP</td>
					     					<td class="text-center text-bold info" style="width: 25%;">VMOP</td>
					     					<td class="text-center text-bold info" style="width: 25%;">VMT</td>
					     					<td class="text-center text-bold info" style="width: 25%;">VMVDU</td>
					     					
					     				</tr>
					     				<tr>
					     					
					     					
					     					
					     					<td id="est_corp" class="text-center info"></td>
					     					<td id="est_vmop" class="text-center info"></td>
					     					<td id="est_vmt" class="text-center info"></td>
					     					<td id="est_vmvdu" class="text-center info"></td>
					     				</tr>
					     				<tr>
					     					
					     					
					     					
					     					<td id="por_corp" class="text-center info"></td>
					     					<td id="por_vmop" class="text-center info"></td>
					     					<td id="por_vmt" class="text-center info"></td>
					     					<td id="por_vmvdu" class="text-center info"></td>
					     				</tr>

				     					</table>
				     				</div>

				     					
				     			</div>			     						     			

				     	</div>
					</div>
				</section>
				
				<section class="content">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

							<div class="box box-success box-solid">
				     			<div class="box-header">
				     				<h3 class="box-title">Factores</h3>
				     			</div>
				     			<div class="box-body">


									<table id="tblDimension" class="table table striped table-hover table-bordered table-responsive">
										<tr class="info">
											<td class="text-center " style="width: 35%;">Dimensión</td>
											<td class="text-center e" style="width: 12%;">Excelente</td>
											<td class="text-center b" style="width: 12%;">Bueno</td>
											<td class="text-center d" style="width: 12%;">Deficiente</td>
											<td class="text-center c" style="width: 12%;">Crítico</td>
											<td class="text-center t" style="width: 14%;">Total</td>
											<td class="text-center x" style="width: 5%;"><input type="checkbox" checked /></td>
										</tr>
									</table>
								</div>
							</div>

						</div>

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

							<div class="box box-warning box-solid">
				     			<div class="box-header">
				     				<h3 class="box-title">Gráfico</h3>
				     			</div>
				     			<div class="box-body">
				     				<div id="pieChart"></div>
				     			</div>
				     		</div>
				     	</div>


						


					</div>

	    		</section>
   


   				<section class="content">
					<div class="row">
						<div class="col-xs-12">

							<div class="box box-danger box-solid">
				     			<div class="box-header">
				     				<h3 class="box-title">Percepci&oacute;n general sobre los factores de estudio del clima laboral institucional a nivel MOPTVDU.</h3>
				     			</div>
				     			<div class="box-body">


				     			</div>
				     		</div>
				     	</div>
				    </div>
				</div>
  			</div>
  		
  			<?php include_once('../master/footer.php'); ?>

  		</div>	


  		

  		<?php include_once('../master/scripts.php'); ?>
  		
  		<script src="http://d3js.org/d3.v3.min.js"></script>
  		<script src="/js/gradientPie.js"></script>

  		<script type="text/javascript">
			
			
  			$(document).ready(function(){

              	$.ajax({
              	  url: 'http://cl.mop.gob.sv/Svc/ResultadosExt.svc/estadisticas',
              	  type: 'post',
              	  dataType: 'json',
              	  beforeSend: function() { 
              	  	cargando(); 
              	  },
              	  success: function(data) { 
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


              	$.ajax({
              	  url: 'http://cl.mop.gob.sv/Svc/ResultadosExt.svc/tablaResultados',
              	  type: 'post',
              	  dataType: 'json',
              	  beforeSend: function() { 
              	  	cargando(); 
              	  },
              	  success: function(data) { 
              	  	cargarTabla(data); 
              	  },
              	  error: function(xhr, textStatus, errorThrown) {

              	    alert(
              	    			JSON.stringify(xhr) + ", " + 
              	    			textStatus + ",  " + 
              	    			errorThrown
              	    	);
					
              	  }
              	}); 

				

				//alert(JSON.stringify(randomData()));


				
					

  			});


			function cargarTabla(data)
			{
				$.each(data, function(i,v){

					$("#tblDimension").append( $("<tr>") ) ;

					$("#tblDimension tr:last").append(   $("<td>").html(v.Factor) );
					$("#tblDimension tr:last").append(   $("<td>").addClass("text-right e").html( mask(v.Excelente) ) );
					$("#tblDimension tr:last").append(   $("<td>").addClass("text-right b").html( mask(v.Bueno) ) );
					$("#tblDimension tr:last").append(   $("<td>").addClass("text-right d").html( mask(v.Deficiente) ) );
					$("#tblDimension tr:last").append(   $("<td>").addClass("text-right c").html( mask(v.Critico) ) );					
					$("#tblDimension tr:last").append(   $("<td>").addClass("text-right t").html( mask(v.Total) ) );					
					$("#tblDimension tr:last").append( '<td class="text-center x"><input type="checkbox" checked /></td>' );
				});

				$("#tblDimension tr:last").addClass("warning text-bold");				


				//alert(  $("td.e:last").html().replace(" %","") );

				var salesData=[
					{label:"Excelente"	, color:"#109618", value: $("td.e:last").html().replace(" %","")  },
					{label:"Bueno"		, color:"#3366CC", value: $("td.b:last").html().replace(" %","") },
					{label:"Deficiente"	, color:"#FF9900", value: $("td.d:last").html().replace(" %","") },
					{label:"Critico"	, color:"#DC3912", value: $("td.c:last").html().replace(" %","") }
				];

				$("td.e:first").css( {"backgroundColor":salesData[0].color, "color" : "#ffffff"});
				$("td.b:first").css( {"backgroundColor":salesData[1].color, "color" : "#ffffff"});
				$("td.d:first").css( {"backgroundColor":salesData[2].color, "color" : "#ffffff"});
				$("td.c:first").css( {"backgroundColor":salesData[3].color, "color" : "#ffffff"});

				$("td.e:last").css( {"backgroundColor":salesData[0].color, "color" : "#ffffff"});
				$("td.b:last").css( {"backgroundColor":salesData[1].color, "color" : "#ffffff"});
				$("td.d:last").css( {"backgroundColor":salesData[2].color, "color" : "#ffffff"});
				$("td.c:last").css( {"backgroundColor":salesData[3].color, "color" : "#ffffff"});


				var svg = d3.select("#pieChart").append("svg").attr("width", "100%").attr("height", $("#tblDimension").css("height"));

				svg.append("g").attr("id","salespie");
					
				gradPie.draw("salespie", salesData, 300, 250, 220);

				$("#pieChart").css("height",$("#tblDimension").css("height"));

			}

			function cargarDatos(data){



				$("#est_ref").html("Muestra");
				$("#est_mas").html(data[0].Masculino);
				$("#est_fem").html(data[0].Femenino);
				$("#est_edad_1").html(data[0].Edad_18_29);
				$("#est_edad_2").html(data[0].Edad_30_41);
				$("#est_edad_3").html(data[0].Edad_42_53);
				$("#est_edad_4").html(data[0].Edad_54_56);
				$("#est_anti_1").html(data[0].TS_1_9);
				$("#est_anti_2").html(data[0].TS_10_18);
				$("#est_anti_3").html(data[0].TS_19_27);
				$("#est_anti_4").html(data[0].TS_28_36);
				$("#est_corp").html(data[0].CORP);
				$("#est_vmop").html(data[0].VMOP);
				$("#est_vmt").html(data[0].VMT);
				$("#est_vmvdu").html(data[0].VMVDU);


				var total = data[0].Finalizados;

				$("#por_ref").html("Porcentaje");
				$("#por_mas").html(  	porc(data[0].Masculino, total) 			);
				$("#por_fem").html(		porc(data[0].Femenino, total)			);
				$("#por_edad_1").html(	porc(data[0].Edad_18_29, total)			);
				$("#por_edad_2").html(	porc(data[0].Edad_30_41, total)			);
				$("#por_edad_3").html(	porc(data[0].Edad_42_53, total)			);
				$("#por_edad_4").html(	porc(data[0].Edad_54_56, total)			);
				$("#por_anti_1").html(	porc(data[0].TS_1_9, total)				);
				$("#por_anti_2").html(	porc(data[0].TS_10_18, total)			);
				$("#por_anti_3").html(	porc(data[0].TS_19_27, total)			);
				$("#por_anti_4").html(	porc(data[0].TS_28_36, total)			);
				$("#por_corp").html(	porc(data[0].CORP, total)				);
				$("#por_vmop").html(	porc(data[0].VMOP, total) 				);
				$("#por_vmt").html(		porc(data[0].VMT, total) 				);
				$("#por_vmvdu").html(	porc(data[0].VMVDU, total) 				);


			}

			function mask(v){
				var p = Math.round( v * 10.00) / 10.00 ;
				return p + " %";
			}

			function porc(v, total){
				var p =  Math.round( (100*v/total) * 10)/10 ;
				return p + " %";
			}
			function cargando(){
				var img = "<img src='/dist/img/loading.svg' />";
              	 	
          	  	
			}

  		</script>

	</body>
</html>
