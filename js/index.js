$(document).ready(function(){
	
	$.ajax({
	  url: 'data/estudiantes.json',
	  type: 'POST',
	  dataType: 'json',
	  data: {},
	  beforeSend: function() {
		   
		   $("#tbl").hide();
		   $("#divAlertas")
		   				.html("<div class='alert alert-warning'>Cargando datos...</div>")
		   				.show();
	  },
	  success: function(data) {

		   	$.each(data, function(i,v) {
		   		$("#tbl").append( $("<tr>").attr("id",v.Codigo) );
		   		$("#tbl tr:last").append( $("<td>").html(v.Codigo).addClass("text-center Codigo") );
		   		$("#tbl tr:last").append( $("<td>").html(v.Apellidos).addClass("Apellidos") );
		   		$("#tbl tr:last").append( $("<td>").html(v.Nombres).addClass("Nombres") );
		   		$("#tbl tr:last").append( $("<td>").html(v.Nota).addClass("text-center Nota") );

		   		$("#tbl tr:last").append( $("<td>").addClass("text-center Accion"));
		   		
		   		var btnEdit = $("<span> ")
					   				.addClass("btn btn-warning btn-xs btnEdit")
					   				.html("<i class='fa fa-edit'>")
					   				.attr("title","Editar registro.")
					   				.attr("id","btnEdit_" + v.Codigo )
					   				;

				var btnElim = $("<span>")
					   				.addClass("btn btn-danger btn-xs btnElim")
					   				.html("<i class='fa fa-remove'>")
					   				.attr("title","Eliminar registro.")
									.attr("id","btnElim_" + v.Codigo );
					   				;


		   		$("#tbl tr:last td:last").append(btnEdit);
		   		$("#tbl tr:last td:last").append(btnElim);
		   		$("#tbl tr:last td:last .btn").css("margin","2px");

		   	});
	
			
			$(".btnEdit").click(function(){
				var id= $(this).attr("id").replace("btnEdit_","");
				
				$("#txtCodigo").val(id);
				$("#txtApellidos").val( $("tr[id="+ id +"] td.Apellidos").html() );
				$("#txtNombres").val( $("tr[id="+ id +"] td.Nombres").html() );
				$("#txtNota").val( $("tr[id="+ id +"] td.Nota").html() );

				$("#mdlLabel")
					.html("Editar registro:")
					.attr("accion","editar")
					;

				$("#mdl").modal("show");
			});
			

					

			$(".btnElim").click(function(e){
				var id= $(this).attr("id").replace("btnElim_","");
				var r = confirm("¿Confirma la eliminación del registro?");
				if (r == true) {
				    $("#" + id ).remove();
				} 
				
			});
			




		   	$("#divAlertas").hide();
	    	$("#tbl").show();

	  },
	  error: function(xhr, textStatus, errorThrown) {
	    
	  }
	});


	$("#btnAgre").click(function(){
		$("#mdlLabel")
			.html("Agregar registro:")
			.attr("accion","insertar")
			;
		$("#txtCodigo").val("");
		$("#txtApellidos").val("");
		$("#txtNombres").val("");
		$("#txtNota").val("");
		$("#mdl").modal("show");
	});

	$("#btnGuardar").click(function(){

		var accion = $("#mdlLabel").attr("accion");
		//alert(accion);

		if(accion == "insertar")
		{
			$("#tbl").append( $("<tr>").attr("id", $("#txtCodigo").val() ) );
	   		
	   		$("#tbl tr:last").append( $("<td>").html($("#txtCodigo").val()).addClass("text-center Codigo") );
	   		$("#tbl tr:last").append( $("<td>").html($("#txtApellidos").val()).addClass("Apellidos") );
	   		$("#tbl tr:last").append( $("<td>").html($("#txtNombres").val()).addClass("Nombres") );
	   		$("#tbl tr:last").append( $("<td>").html($("#txtNota").val()).addClass("text-center Nota") );



	   		$("#tbl tr:last").append( $("<td>").addClass("text-center Accion"));
	   		
	   		var btnEdit = $("<span> ")
				   				.addClass("btn btn-warning btn-xs btnEdit")
				   				.html("<i class='fa fa-edit'>")
				   				.attr("title","Editar registro.")
				   				.attr("id","btnEdit_" + $("#txtCodigo").val() )
				   				;

			var btnElim = $("<span>")
				   				.addClass("btn btn-danger btn-xs btnElim")
				   				.html("<i class='fa fa-remove'>")
				   				.attr("title","Eliminar registro.")
								.attr("id","btnElim_" + $("#txtCodigo").val() );
				   				;


	   		$("#tbl tr:last td:last").append(btnEdit);
	   		$("#tbl tr:last td:last").append(btnElim);
	   		$("#tbl tr:last td:last .btn").css("margin","2px");
	   		
		}
		else
		{
			var id = $("#txtCodigo").val();
			
			$("#tbl tr[id="+ id +"] td.Codigo").html($("#txtCodigo").val());
			$("#tbl tr[id="+ id +"] td.Nombres").html($("#txtNombres").val());
			$("#tbl tr[id="+ id +"] td.Apellidos").html($("#txtApellidos").val());
			$("#tbl tr[id="+ id +"] td.Nota").html($("#txtNota").val());

			

		}

		$("#mdl").modal("hide");
	});

});