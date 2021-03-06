<!DOCTYPE html>
<html>
	<?php include_once('../master/head.php'); ?>

	<style type="text/css">
		.table td { 
			border: solid #cccccc 1px !important;  
			padding: 2px !important;
		}	

		.box-header {
			padding: 4px 6px !important;
		}
		.btn-box-tool { margin-top: -8px;}
		section.content{
			min-height:  20px !important;
			padding-bottom:  0px !important;
		}

		.fila:hover { cursor: pointer;}
	</style>


	<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
		<div class="wrapper">
			<?php include_once('../master/header.php'); ?>
			<?php include_once('../master/menu.php'); ?>



			<div class="content-wrapper">		    
			    <section class="content-header">
			      <h1>
			        Resultados
			        <small>Datos estad&iacute;sticos de los resultados.</small>
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
				     				<h3 class="box-title">Distribuci&oacute;n general de la muestra a nivel MOPTVDU</h3>
				     				<div class="box-tools pull-right">
					                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					                </div>
				     			</div>
				     			<div class="box-body">

				     				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				     					<table class="table table-bordered table-responsive bg-success">
				     						<tr>
				     							<td class="text-center text-bold" style="width: 75%;" colspan="3">G&eacute;nero</td>
				     						</tr>
				     						<tr>
				     							<td class="btnf text-center text-bold"><input id="cbxMas" class="cbx" type="checkbox" checked /> Masculino </td>
					     						<td class="btnf text-center text-bold"><input id="cbxFem" class="cbx" type="checkbox" checked /> Femenino</td>
					     						<td class="text-center text-bold">Total</td>
				     						</tr>
				     						<tr>
				     							<td id="est_mas" class="text-center"></td>
					     						<td id="est_fem" class="text-center"></td>
					     						<td id="est_tot" class="text-center"></td>
				     						</tr>
				     						<tr>
				     							<td id="por_mas" class="text-center"></td>
					     						<td id="por_fem" class="text-center"></td>
					     						<td id="por_tot" class="text-center"></td>
				     						</tr>
				     					</table>
				     				</div>
				     				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				     					<table class="table table-bordered table-responsive bg-info">
				     						<tr>
				     							<td class="text-center text-bold" colspan="4">Edad</td>
				     						</tr>
				     						<tr>
				     							<td class="btnf text-center text-bold" style="width: 25%;"><input id="cbxRE1" class="cbx" type="checkbox" checked /> 18-29</td>
						     					<td class="btnf text-center text-bold" style="width: 25%;"><input id="cbxRE2" class="cbx" type="checkbox" checked /> 30-41</td>
						     					<td class="btnf text-center text-bold" style="width: 25%;"><input id="cbxRE3" class="cbx" type="checkbox" checked /> 42-53</td>
						     					<td class="btnf text-center text-bold" style="width: 25%;"><input id="cbxRE4" class="cbx" type="checkbox" checked /> &gt;=54 </td>
				     						</tr>
				     						<tr>
				     							<td id="est_edad_1" class="text-center"></td>
						     					<td id="est_edad_2" class="text-center"></td>
						     					<td id="est_edad_3" class="text-center"></td>
						     					<td id="est_edad_4" class="text-center"></td>
				     						</tr>
				     						<tr>
				     							<td id="por_edad_1" class="text-center"></td>
						     					<td id="por_edad_2" class="text-center"></td>
						     					<td id="por_edad_3" class="text-center"></td>
						     					<td id="por_edad_4" class="text-center"></td>
				     						</tr>
				     					</table>
				     				</div>
				     				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				     					<table class="table table-bordered table-responsive bg-success">
				     						<tr>
				     							<td class="text-center text-bold" style="width: 25%;" colspan="4">Antigüedad</td>
				     						</tr>
				     						<tr>
				     							<td class="btnf text-center text-bold" style="width: 25%;"><input id="cbxRTS1" class="cbx" type="checkbox" checked />  1-9</td>
						     					<td class="btnf text-center text-bold" style="width: 25%;"><input id="cbxRTS2" class="cbx" type="checkbox" checked /> 10-18</td>
						     					<td class="btnf text-center text-bold" style="width: 25%;"><input id="cbxRTS3" class="cbx" type="checkbox" checked /> 19-27</td>
						     					<td class="btnf text-center text-bold" style="width: 25%;"><input id="cbxRTS4" class="cbx" type="checkbox" checked /> &gt;=28</td>
				     						</tr>
				     						<tr>
				     							<td id="est_anti_1" class="text-center"></td>
						     					<td id="est_anti_2" class="text-center"></td>
						     					<td id="est_anti_3" class="text-center"></td>
						     					<td id="est_anti_4" class="text-center"></td>
				     						</tr>
				     						<tr>
				     							<td id="por_anti_1" class="text-center"></td>
						     					<td id="por_anti_2" class="text-center"></td>
						     					<td id="por_anti_3" class="text-center"></td>
						     					<td id="por_anti_4" class="text-center"></td>
				     						</tr>
				     					</table>
				     				</div>
				     				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
				     					<table class="table table-bordered table-responsive bg-info">
				     						<tr>
				     							<td class="text-center text-bold" style="width: 25%;" colspan="4">Viceministerio</td>
				     						</tr>
				     						<tr>
					     					
					     					<td class="btnf text-center text-bold" style="width: 25%;"><input id="cbxU1" class="cbx" type="checkbox" checked /> CORP</td>
					     					<td class="btnf text-center text-bold" style="width: 25%;"><input id="cbxU2" class="cbx" type="checkbox" checked /> VMOP</td>
					     					<td class="btnf text-center text-bold" style="width: 25%;"><input id="cbxU3" class="cbx" type="checkbox" checked /> VMT</td>
					     					<td class="btnf text-center text-bold" style="width: 25%;"><input id="cbxU4" class="cbx" type="checkbox" checked /> VMVDU</td>
					     					
					     				</tr>
					     				<tr>
					     					<td id="est_corp"	class="text-center"></td>
					     					<td id="est_vmop"	class="text-center"></td>
					     					<td id="est_vmt" 	class="text-center"></td>
					     					<td id="est_vmvdu"	class="text-center"></td>
					     				</tr>
					     				<tr>
					     					<td id="por_corp" class="text-center"></td>
					     					<td id="por_vmop" class="text-center"></td>
					     					<td id="por_vmt" class="text-center"></td>
					     					<td id="por_vmvdu" class="text-center"></td>
					     				</tr>

				     					</table>
				     				</div>
				     				
				     				<div class="col-xs-12">
					     				<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
					     					<table class="table table-bordered table-responsive bg-warning">
					     						<tr>
					     							<td colspan="2" class="btnf text-center text-bold"><input id="cbxLL" class="cbx" type="checkbox" checked /> PLANTEL LA LECHUZA</td>				     							
					     						</tr>
					     						<tr>
					     							<td id="valPlantelLL" class="text-center"></td>
					     							<td id="porPlantelLL" class="text-right"></td>
					     						</tr>
					     					</table>
					     				</div>
					     				<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
					     					<table class="table table-bordered table-responsive bg-warning">
					     						<tr>
					     							<td colspan="2" class="btnf text-center text-bold"><input id="cbxST" class="cbx" type="checkbox" checked /> VMT SANTA TECLA</td>
					     						</tr>
					     						<tr>
					     							<td id="valPlantelST" class="text-center"></td>
					     							<td id="porPlantelST" class="text-right"></td>
					     						</tr>
					     					</table>
					     				</div>
					     				<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
					     					<table class="table table-bordered table-responsive bg-warning">
					     						<tr>
					     							<td colspan="2" class="btnf text-center text-bold"><input id="cbxPM" class="cbx" type="checkbox" checked /> MONTECARMELO</td>
					     						</tr>
					     						<tr>
					     							<td id="valPlantelPM" class="text-center"></td>
					     							<td id="porPlantelPM" class="text-right"></td>
					     						</tr>
					     					</table>
					     				</div>
					     				<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
					     					<table class="table table-bordered table-responsive bg-warning">
					     						<tr>
					     							<td colspan="2" class="btnf text-center text-bold"><input id="cbxSA" class="cbx" type="checkbox" checked /> REGIONAL SANTA ANA</td>		
					     						</tr>
					     						<tr>
					     							<td id="valPlantelSA" class="text-center"></td>
					     							<td id="porPlantelSA" class="text-right"></td>
					     						</tr>
					     					</table>
					     				</div>
					     				<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
					     					<table class="table table-bordered table-responsive bg-warning">
					     						<tr>
					     							<td colspan="2" class="btnf text-center text-bold"><input id="cbxSM" class="cbx" type="checkbox" checked /> REGIONAL SAN MIGUEL</td>			
					     						</tr>
					     						<tr>
					     							<td id="valPlantelSM" class="text-center"></td>
					     							<td id="porPlantelSM" class="text-right"></td>
					     						</tr>
					     					</table>
					     				</div>
					     				<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
					     					<table class="table table-bordered table-responsive bg-warning">
					     						<tr>
					     							<td colspan="2" class="btnf text-center text-bold"><input id="cbxVC" class="cbx" type="checkbox" checked /> PLANTEL VMT CENTRO</td>		
					     						</tr>
					     						<tr>
					     							<td id="valPlantelVC" class="text-center"></td>
					     							<td id="porPlantelVC" class="text-right"></td>
					     						</tr>
					     					</table>
					     				</div>

					     				<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
					     					<table class="table table-bordered table-responsive bg-warning">
					     						<tr>
					     							<td colspan="2" class="btnf text-center text-bold"><input id="cbxCH" class="cbx" type="checkbox" checked /> CHALATENANGO</td>		
					     						</tr>
					     						<tr>
					     							<td id="valPlantelCH" class="text-center"></td>
					     							<td id="porPlantelCH" class="text-right"></td>
					     						</tr>
					     					</table>
					     				</div>

					     				<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
					     					<table class="table table-bordered table-responsive bg-warning">
					     						<tr>
					     							<td colspan="2" class="btnf text-center text-bold"><input id="cbxMI" class="cbx" type="checkbox" checked /> PLANTEL MIRAFLORES</td>		
					     						</tr>
					     						<tr>
					     							<td id="valPlantelMI" class="text-center"></td>
					     							<td id="porPlantelMI" class="text-right"></td>
					     						</tr>
					     					</table>
					     				</div>

					     				<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
					     					<table class="table table-bordered table-responsive bg-warning">
					     						<tr>
					     							<td colspan="2" class="btnf text-center text-bold"><input id="cbxAC" class="cbx" type="checkbox" checked /> BASCULA ACAJUTLA</td>		
					     						</tr>
					     						<tr>
					     							<td id="valPlantelAC" class="text-center"></td>
					     							<td id="porPlantelAC" class="text-right"></td>
					     						</tr>
					     					</table>
					     				</div>


					     				<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
					     					<table class="table table-bordered table-responsive bg-warning">
					     						<tr>
					     							<td colspan="2" class="btnf text-center text-bold"><input id="cbxPV" class="cbx" type="checkbox" checked /> PARQUE VIAL</td>		
					     						</tr>
					     						<tr>
					     							<td id="valPlantelPV" class="text-center"></td>
					     							<td id="porPlantelPV" class="text-right"></td>
					     						</tr>
					     					</table>
					     				</div>

					     				<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
					     					<table class="table table-bordered table-responsive bg-warning">
					     						<tr>
					     							<td colspan="2" class="btnf text-center text-bold"><input id="cbxPA" class="cbx" type="checkbox" checked /> PLANTA ASFALTICA</td>		
					     						</tr>
					     						<tr>
					     							<td id="valPlantelPA" class="text-center"></td>
					     							<td id="porPlantelPA" class="text-right"></td>
					     						</tr>
					     					</table>
					     				</div>

					     				<div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
					     					<div class="text-center">
					     						<span id="btn" class="btn btn-info btn-lg"><i class="fa fa-refresh"></i> Actualizar</span>
					     					</div>
					     				</div>


					     			</div>





				     			</div>

				     			<!--
				     			<div class="box-footer">
				     					<div class="text-right">
				     						<span id="btn" class="btn btn-info btn-xs"><i class="fa fa-refresh"></i> Actualizar</span>
				     					</div>
				     			</div> -->
				     					
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
				     				<div class="box-tools pull-right">
					                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					                </div>
				     			</div>
				     			<div class="box-body">


									<table id="tblDimension" class="table table striped table-hover table-bordered table-responsive">
										<tr class="info">
											<td class="text-center " style="width: 35%;"> <span class="hidden-xs">Dimensi&oacute;n</span><span class="visible-xs">Dimensi&oacute;n</span></td>
											<td class="text-center e" style="width: 12%;"><span class="hidden-xs">Excelente</span><span class="visible-xs">Exc</span></td>
											<td class="text-center b" style="width: 12%;"><span class="hidden-xs">Bueno</span><span class="visible-xs">Bue</span></td>
											<td class="text-center d" style="width: 12%;"><span class="hidden-xs">Deficiente</span><span class="visible-xs">Def</span></td>
											<td class="text-center c" style="width: 12%;"><span class="hidden-xs">Cr&iacute;tico</span><span class="visible-xs">Cr&iacute;</span></td>
											<td class="text-center x" style="width: 5%;"><input id="cbx" type="checkbox" checked class="" /></td>
										</tr>
									</table>
								</div>
							</div>

						</div>

						<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

							<div class="box box-warning box-solid">
				     			<div class="box-header">
				     				<h3 class="box-title">Gr&aacute;fico</h3>
				     				<div class="box-tools pull-right">
					                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					                </div>
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

							<div class="box box-primary box-solid">
				     			<div class="box-header">
				     				<h3 class="box-title">Percepci&oacute;n general sobre los factores de estudio del clima laboral institucional a nivel MOPTVDU.</h3>
				     				<div class="box-tools pull-right">
					                	<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					                </div>
				     				
				     			</div>

				     			<div class="box-body">
				     				<div class="pull-right box-tools">
				     					<span id="neg" class="btn btn-danger btn-xs pull-right"  data-toggle="true" title="" ><i class="fa fa-minus"></i> Negativos</span>
					                    <span id="pos" class="btn btn-success btn-xs pull-right" data-toggle="true" title="" ><i class="fa fa-plus"></i> Positivos</span>
					                    
					                </div>
				     				<div id="barChart"></div>
				     			</div>	
				     		</div>
				     	</div>
				    </div>
				</div>
  			</div>
  		
  			<?php include_once('../master/footer.php'); ?>

  		</div>	


  		

  		<?php include_once('../master/scripts.php'); ?>
  		
  		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/exporting.js"></script>
		

  		<script type="text/javascript">
			
			$(".btnf").click(function(){
					
				var f = $(this);
				var c = f.find("input");

				if(!c.prop("checked"))
				{
					//f.addClass("success");
				}
				else
				{
					//f.removeClass("success");
				}

				c.prop("checked", !c.prop("checked"));
			});

			
			$("#pos").click(function(){
				var tempScrollTop = $(window).scrollTop();

				$(".fila").removeClass("success");
				$(".fila input[type=checkbox]").prop("checked", false);

				$("#tblDimension tr:gt(0)").each(function(i,v){

					var f = Array();
				    $(this).children('td').each(function(ii, vv){
				        f[ii] = $(this).html().replace(" %","");
				    }); 

				    var posi = parseFloat( f[1] ) + parseFloat( f[2] );
				    
				    if(posi >= 70.00){
				    	$(this).addClass("success");
				    	$(this).find("input[type=checkbox]").prop("checked", true);
				    }


				});

				calcularPromedio();

				var chart = $('#barChart').highcharts();
        		chart.series[0].show();
        		chart.series[1].show();
        		chart.series[2].hide();
        		chart.series[3].hide();

				$(window).scrollTop(tempScrollTop);
			});
			$("#neg").click(function(){
				var tempScrollTop = $(window).scrollTop();

				$(".fila").removeClass("success");
				$(".fila input[type=checkbox]").prop("checked", false);

				$("#tblDimension tr:gt(0)").each(function(i,v){

					var f = Array();
				    $(this).children('td').each(function(ii, vv){
				        f[ii] = $(this).html().replace(" %","");
				    }); 

				    var posi = parseFloat( f[1] ) + parseFloat( f[2] );
				    
				    if(posi < 70.00){
				    	$(this).addClass("success");
				    	$(this).find("input[type=checkbox]").prop("checked", true);
				    }


				});

				calcularPromedio();
				
				var chart = $('#barChart').highcharts();
        		chart.series[0].hide();
        		chart.series[1].hide();
        		chart.series[2].show();
        		chart.series[3].show();


				$(window).scrollTop(tempScrollTop);
			});



  			$(document).ready(function(){
  				cargaInicial();
  			});

  			$("#btn").click(function(){

  				var filtro = "s=''";


  				if($("#cbxMas").prop("checked"))
  					filtro += ",'Masculino'";

  				if($("#cbxFem").prop("checked"))
  					filtro += ",'Femenino'";

  				filtro += "&re=''";

  				if($("#cbxRE1").prop("checked"))
  					filtro += ",'18-29'";

  				if($("#cbxRE2").prop("checked"))
  					filtro += ",'30-41'";

  				if($("#cbxRE3").prop("checked"))
  					filtro += ",'42-53'";

  				if($("#cbxRE4").prop("checked"))
  					filtro += ",'54-56'";


  				filtro += "&rts=''";

  				if($("#cbxRTS1").prop("checked"))
  					filtro += ",'1-9'";

  				if($("#cbxRTS2").prop("checked"))
  					filtro += ",'10-18'";

  				if($("#cbxRTS3").prop("checked"))
  					filtro += ",'19-27'";

  				if($("#cbxRTS4").prop("checked"))
  					filtro += ",'28-36'";

  				filtro += "&u=''";

  				if($("#cbxU1").prop("checked"))
  					filtro += ",'CORPORATIVAS'";

  				if($("#cbxU2").prop("checked"))
  					filtro += ",'VMOP'";

  				if($("#cbxU3").prop("checked"))
  					filtro += ",'VMT'";

  				if($("#cbxU4").prop("checked"))
  					filtro += ",'VMVDU'";

  				filtro += "&p=''";

  				if($("#cbxLL").prop("checked"))
  					filtro += ",'PLANTEL LA LECHUZA'";

  				if($("#cbxST").prop("checked"))
  					filtro += ",'PLANTEL VMT SANTA TECLA'";

				if($("#cbxPM").prop("checked"))
  					filtro += ",'PLANTEL MONTECARMELO'";  				

				if($("#cbxSM").prop("checked"))
  					filtro += ",'REGIONAL SAN MIGUEL'";

  				if($("#cbxSA").prop("checked"))
  					filtro += ",'REGIONAL SANTA ANA'";

  				if($("#cbxVC").prop("checked"))
  					filtro += ",'PLANTEL VMT CENTRO'";

  				if($("#cbxCH").prop("checked"))
  					filtro += ",'PLANTEL CHALATENANGO'";

  				if($("#cbxMI").prop("checked"))
  					filtro += ",'PLANTEL MIRAFLORES'";

				if($("#cbxAC").prop("checked"))
  					filtro += ",'BASCULA ACAJUTLA'";

  				if($("#cbxPV").prop("checked"))
  					filtro += ",'PARQUE DE EDUCACION VIAL'";

  				if($("#cbxPA").prop("checked"))
  					filtro += ",'PLANTA ASFALTICA'";




  				$.ajax({
              	  url: 'http://cl.mop.gob.sv/Svc/ResultadosExt.svc/estadisticasVariable?' + filtro,
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
              	  url: 'http://cl.mop.gob.sv/Svc/ResultadosExt.svc/tablaResultadosVariable?' + filtro,
              	  type: 'post',
              	  dataType: 'json',
              	  //data : JSON.stringify(filtro),
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
  			});

  			function cargaInicial(){
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

  			}


			$("#cbx").change(function(){
				var tempScrollTop = $(window).scrollTop();
				var v = $(this).is(":checked");
				$("td.x input[type=checkbox]").prop('checked', v);

				if(v)
				{
					$(".fila").addClass("success");
				}
				else
				{
					$(".fila").removeClass("success");
				}

				calcularPromedio();
				$(window).scrollTop(tempScrollTop);
			});


			function cargarTabla(data) {


				$("#tblDimension").find("tr:gt(0)").remove();

				$.each(data, function(i,v){

					if(v.Factor != "Total")
						$("#tblDimension").append( $("<tr>").addClass("fila success") ) ;
					else
						$("#tblDimension").append( $("<tr>").addClass("") ) ;

					$("#tblDimension tr:last").append(   $("<td>").html(v.Factor) );
					$("#tblDimension tr:last").append(   $("<td>").addClass("text-right e").html( mask(v.Excelente) ) );
					$("#tblDimension tr:last").append(   $("<td>").addClass("text-right b").html( mask(v.Bueno) ) );
					$("#tblDimension tr:last").append(   $("<td>").addClass("text-right d").html( mask(v.Deficiente) ) );
					$("#tblDimension tr:last").append(   $("<td>").addClass("text-right c").html( mask(v.Critico) ) );					
					//$("#tblDimension tr:last").append(   $("<td>").addClass("text-right t").html( mask(v.Total) ) );					
					$("#tblDimension tr:last").append( '<td class="text-center x"><input type="checkbox" checked /></td>' );
				});

				$(".fila").click(function(){
					var tempScrollTop = $(window).scrollTop();
					var f = $(this);
					var c = f.find("input");

					if(!c.prop("checked"))
					{
						f.addClass("success");
					}
					else
					{
						f.removeClass("success");
					}

					c.prop("checked", !c.prop("checked"));
					calcularPromedio();
					$(window).scrollTop(tempScrollTop);
				});

				$("#tblDimension tr:last").addClass("warning text-bold");				

				var datos = [ 
					{ name: "Excelente" , color:"#109618", y: parseFloat( $("td.e:last").html().replace(" %","") ) },
					{ name: "Bueno"		, color:"#3366CC", y: parseFloat( $("td.b:last").html().replace(" %","") ) },
					{ name: "Deficiente", color:"#FF9900", y: parseFloat( $("td.d:last").html().replace(" %","") ) },
					{ name: "Crítico"	, color:"#DC3912", y: parseFloat( $("td.c:last").html().replace(" %","") ) }
				];
				
				$("td.e:first").css( {"backgroundColor":datos[0].color, "color" : "#ffffff"});
				$("td.b:first").css( {"backgroundColor":datos[1].color, "color" : "#ffffff"});
				$("td.d:first").css( {"backgroundColor":datos[2].color, "color" : "#ffffff"});
				$("td.c:first").css( {"backgroundColor":datos[3].color, "color" : "#ffffff"});

				$("td.e:last").css( {"backgroundColor":datos[0].color, "color" : "#ffffff"});
				$("td.b:last").css( {"backgroundColor":datos[1].color, "color" : "#ffffff"});
				$("td.d:last").css( {"backgroundColor":datos[2].color, "color" : "#ffffff"});
				$("td.c:last").css( {"backgroundColor":datos[3].color, "color" : "#ffffff"});

				
				var ancho = $("#tblDimension").css("width").replace("px","");
				var alto = $("#tblDimension").css("height").replace("px","");
				
				if(alto < 600)
					$("#pieChart").css("height", alto);
				



				//graficar(data,datos,'');
				calcularPromedio();
			}


			function calcularPromedio() {
				var dim = Array();
				var exc = Array();
				var bue = Array();
				var def = Array();
				var cri = Array();
				//alert("ok");

				var n = 0.00;
				var sumExc = 0.00;
				var sumBue = 0.00;
				var sumDef = 0.00;
				var sumCri = 0.00;

				var data = Array();

				$("tr.success").each(function(i, v){
					n += 1.00;
					var f = Array();
				    $(this).children('td').each(function(ii, vv){
				        f[ii] = $(this).html();
				    });     

				    dim.push( f[0] );
				    exc.push( f[1].replace(" %","") );
				    bue.push( f[2].replace(" %","") );
				    def.push( f[3].replace(" %","") );
				    cri.push( f[4].replace(" %","") );

				    sumExc += parseFloat( f[1].replace(" %","") );
					sumBue += parseFloat( f[2].replace(" %","") );
					sumDef += parseFloat( f[3].replace(" %","") );
					sumCri += parseFloat( f[4].replace(" %","") );

					data.push({ 
								"Factor": 		f[0], 
								"Excelente": 	parseFloat( f[1].replace(" %","") ), 
								"Bueno": 		parseFloat( f[2].replace(" %","") ), 
								"Deficiente": 	parseFloat( f[3].replace(" %","") ), 
								"Critico": 		parseFloat( f[4].replace(" %","") ) 
							});
				})

				var a = "";

				if(n > 0.00){
					$("#tblDimension tr:last .e").html( mask( sumExc / n )  );
					$("#tblDimension tr:last .b").html( mask( sumBue / n )  );
					$("#tblDimension tr:last .d").html( mask( sumDef / n )  );
					$("#tblDimension tr:last .c").html( mask( sumCri / n )  );

					a = "<span class='success'>Positivo: " + mask( (sumExc + sumBue) / n ) + ", " +
							"Negativo: " + mask( (sumDef + sumCri) / n ) + "</span>";

				

				}else{
					$("#tblDimension tr:last .e").html( mask( 0 )  );
					$("#tblDimension tr:last .b").html( mask( 0 )  );
					$("#tblDimension tr:last .d").html( mask( 0 )  );
					$("#tblDimension tr:last .c").html( mask( 0 )  );

					

				}
				

				var datos = [ 
					{ name: "Excelente" , color:"#109618", y: parseFloat( $("td.e:last").html().replace(" %","") ) },
					{ name: "Bueno"		, color:"#3366CC", y: parseFloat( $("td.b:last").html().replace(" %","") ) },
					{ name: "Deficiente", color:"#FF9900", y: parseFloat( $("td.d:last").html().replace(" %","") ) },
					{ name: "Crítico"	, color:"#DC3912", y: parseFloat( $("td.c:last").html().replace(" %","") ) }
				];



				graficar(data,datos,a);
			}

			function graficar(data,datos,a){

			    $('#pieChart').highcharts({
			        chart: {
			            plotBackgroundColor: null,
			            plotBorderWidth: null,
			            plotShadow: false,
			            type: 'pie'
			        },
			        title: {
			            text: a
			        },
			        tooltip: {
			            pointFormat: '<b>{point.percentage:.1f}%</b>'
			        },
			        plotOptions: {
			            pie: {
			                allowPointSelect: true,
			                cursor: 'pointer',
			                dataLabels: {
			                    enabled: true,
			                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
			                    style: {
			                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
			                    }
			                },
			                showInLegend: true
			            }
			        },
			        credits: { enabled: false },
			        series: [{
			            name: '',
			            colorByPoint: true,
			            data: datos
			        }]
			    });


			    var categorias = Array();				    

			    var exc = Array();
			    var bue = Array();
			    var def = Array();
			    var cri = Array();

			    
			    $.each(data, function(i,v){
			    	if(v.Factor != "Total"){
				    	categorias.push(v.Factor);
				    	exc.push(v.Excelente);
				    	bue.push(v.Bueno);
				    	def.push(v.Deficiente);
				    	cri.push(v.Critico);
			    	}
			    });

			    var criterios = [
			    					{ name: 'Excelente'	, color: datos[0].color, data: exc },
			    					{ name: 'Bueno'		, color: datos[1].color, data: bue },
			    					{ name: 'Deficiente', color: datos[2].color, data: def },
			    					{ name: 'Crítico'	, color: datos[3].color, data: cri }
			    				];


			    $('#barChart').highcharts({
			        chart: {
			            type: 'column',
			            height: 500
			        },
			        title: {
			            text: ''
			        },
			        subtitle: {
			            text: ''
			        },
			        xAxis: {
			            categories: categorias,
			            crosshair: true
			        },
			        yAxis: {
			            min: 0,
			            title: {
			                text: 'Porcentaje del criterio (%)'
			            }
			        },
			        tooltip: {
			            headerFormat: '<span style="font-size:1.3em"><b>{point.key}</b></span><table>',
			            pointFormat: 	'<tr>'+
			            					'<td style="color:{series.color};padding:0">{series.name}: </td>' +
			                				'<td style="padding:0; text-align: right;">' + 
			                					'<b>{point.y:.1f} %</b>'+
			                				'</td>'+ 
			                			'</tr>',
			            //footerFormat: '</table>',
			            footerFormat: '<tr><td><b>Total: </b></td><td>{point.total: .1f} %</td></tr>',
			            formatter: function(){ 

			            	var s = "";
			            	var sum = 0.0;

			            	s = "<table>";
			            	
			            	s += 
		                    		'<tr>'+
		            					'<td colspan="2" style="background-color: #3C8DBC; color: #ffffff; padding: 3px;">' + this.x +  '</td>' +		                				
		                			'</tr><tr><td>&nbsp;</td></tr>'
		                			;


				            $.each(this.points, function(i, point) {
			                    
			                    s += 
			                    		'<tr>'+
			            					'<td style="color:' + point.series.color + ';">' + point.series.name  + ': </td>' +
			                				'<td style="text-align: right;">' + 
			                					'<b>' + point.y +' %</b>'+
			                				'</td>'+ 
			                			'</tr>';
			                	sum += point.y;


			                });

			                s += 
		                    		'<tr>'+
		            					'<td colspan="2">&nbsp;	</td>' +		                				
		                			'</tr>';

		                	if(sum > 99)
		                		sum = 100.0;

			                s += 
		                    		'<tr style="background-color: #3C8DBC; color: #ffffff; padding: 3px;">'+
		            					'<td style="padding: 3px;">Total : </td>' +
		                				'<td style="padding: 3px; text-align: right;">' + 
		                					 mask(sum) +
		                				'</td>'+ 
		                			'</tr>';

				           	s += "</table>";
			               	return s;

			            },
			            shared: true,
			            useHTML: true,
			            isSum: true
			        },
			        plotOptions: {
			            column: {
			                pointPadding: 0.2,
			                borderWidth: 0,
			                dataLabels: {
			                	enabled: true,
			                	format: '{y} %'
			                }
			            },
			            showInLegend: true
			        },
			        credits: { enabled: false },
			        series: criterios
			    });
			}

			function cargarDatos(data){



				//$("#est_ref").html("Muestra");
				$("#est_mas").html(data[0].Masculino);
				$("#est_fem").html(data[0].Femenino);
				$("#est_tot").html(data[0].Finalizados);
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


				$("#valPlantelLL").html(data[0].Lechuza);
				$("#valPlantelST").html(data[0].SantaTecla);
				$("#valPlantelPM").html(data[0].MonteCarmelo);
				$("#valPlantelSA").html(data[0].SantaAna);
				$("#valPlantelSM").html(data[0].SanMiguel);
				$("#valPlantelVC").html(data[0].VmtCentro);
				$("#valPlantelCH").html(data[0].Chalatenango);
				$("#valPlantelMI").html(data[0].MiraFlores);
				$("#valPlantelAC").html(data[0].Acajutla);
				$("#valPlantelPV").html(data[0].ParqueVial);
				$("#valPlantelPA").html(data[0].PlantaAsfaltica);


				var total = data[0].Finalizados;

				if(total == 0)
					total = 0.1;

				//$("#por_ref").html("Porcentaje");
				$("#por_mas").html(  	porc(data[0].Masculino, total) 			);
				$("#por_fem").html(		porc(data[0].Femenino, total)			);
				$("#por_tot").html(		porc(data[0].Finalizados, total)		);
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

				$("#porPlantelLL").html(	porc(data[0].Lechuza, total) 			);
				$("#porPlantelST").html(	porc(data[0].SantaTecla, total) 		);
				$("#porPlantelPM").html(	porc(data[0].MonteCarmelo, total)	 	);
				$("#porPlantelSA").html(	porc(data[0].SantaAna, total) 			);
				$("#porPlantelSM").html(	porc(data[0].SanMiguel, total) 			);
				$("#porPlantelVC").html(	porc(data[0].VmtCentro, total) 			);
				$("#porPlantelCH").html(	porc(data[0].Chalatenango, total) 		);
				$("#porPlantelMI").html(	porc(data[0].MiraFlores, total) 		);
				$("#porPlantelAC").html(	porc(data[0].Acajutla, total) 			);
				$("#porPlantelPV").html(	porc(data[0].ParqueVial, total) 		);
				$("#porPlantelPA").html(	porc(data[0].PlantaAsfaltica, total) 	);

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
