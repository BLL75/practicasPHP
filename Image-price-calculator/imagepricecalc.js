(function($) {

  $.fn.ImagePriceCalc= function () {      
		
// Initialize Variables

	var total=0;
	var child=this.children(); 	
	this.addClass("image-price-calc");	
	$('#selmaster > option[value="0"]').attr('selected', 'selected');
	$('#selextra1 > option[value="0"]').attr('selected', 'selected');
	$('#selextra2 > option[value="0"]').attr('selected', 'selected');
	$("input:checkbox").prop('checked', false);
	$("#noneradio").attr('checked', true);
	InitialUpdate();

	$('#btnCarro').click(function(valorProveedor){
		//alert('adsf');
        //alert($("#selmaster").val());
        //alert($("#selmaster option:selected").text());
        alert($("input:checkbox").val());
        //alert($("#noneradio").val());
        //$(attr('data-total');

        valor1 = parseInt($("#selmaster").val());
		valor2 = parseInt($("#selextra1").val());
		valor3 = parseInt($("#selextra2").val());
		//valor4 = parseInt($("#cantidad").val());
		total = valor1 + valor2 + valor3;

		//alert(total);




		
		params = { textoMaster:$("#selmaster option:selected").text(),
		           precioTotal:total};

		str = jQuery.param( params );			
		
		$.ajax({
			//dataType: 'json',
			url: 'http://localhost/Curso/retoque/wp-content/plugins/Image-price-calculator/test.php',
			type: 'POST',
			async: true,
			data: str,
			error: function(xhr, ajaxOptions, thrownError){
			     alert(xhr);
				 alert(thrownError);
			}
		});

	

	});	
	
	$(".image-price-calc").append("<div id='marcoimagen'></div>");

	$(".image-price-calc input[type=checkbox]").change( function() {
		var path = $("#selmaster option:selected").attr('id');
			if($(this).is(':checked')) {
				var checkboxval= $(this).val();
				if($.isNumeric(checkboxval)) {				
					$(this).attr('data-total', checkboxval);
					if (path != "selnone"){
						$("#marcoimagen").append("<IMG id=img"+this.id+" class=imgClass SRC=wp-content/plugins/image-price-calculator/"+path+"/"+this.id+".png </IMG>");
						$(".imgClass").css({"width": "500px", "height": "475px","position": "absolute", "right": "50px" , "top":"250px"});
					}
				}
				else {
					$(this).attr('data-total', 0);
				}
			}					
			else {
				$("#img"+this.id).remove();				
				$(this).attr('data-total', 0);
				
			}		
		
		UpdateTotal();
	
	});
	
	$("#selmaster").change( function() {
		$("#marcoimagen").remove();
		$(".image-price-calc").append("<div id='marcoimagen'></div>");
		$('#selextra1 > option[value="0"]').attr('selected', 'selected');
		$('#selextra2 > option[value="0"]').attr('selected', 'selected');
		$("input:checkbox").prop('checked', false); 
		$("#noneradio").attr('checked', true);
		InitialUpdate();	
		var optionid = $("#selmaster option:selected").attr('id');
		$("#optiondelsel1").remove();	
		if(optionid!="selnone"){
			$("#marcoimagen").append('<IMG id="optiondelsel1" class="imgClass" SRC="wp-content/plugins/image-price-calculator/'+optionid+'/'+optionid+'.png" </IMG>');
			$(".imgClass").css({"width": "500px", "height": "475px","position": "absolute", "right": "50px" , "top":"250px"});
		}
		UpdateTotal();
	});
	$("#selextra1").change( function() {
		var path = $("#selmaster option:selected").attr('id');
		var optionid = $("#selextra1 option:selected").attr('id');
		$("#optiondelsel2").remove();
			if (path != "selnone"){
				if(optionid!="selnone2"){	
					$("#marcoimagen").append('<IMG id="optiondelsel2" class="imgClass" SRC="wp-content/plugins/image-price-calculator/'+path+'/'+optionid+'.png" </IMG>');
					$(".imgClass").css({"width": "500px", "height": "475px","position": "absolute", "right": "50px" , "top":"250px"});
				}
			}
			UpdateTotal();
			
	});
	$("#selextra2").change( function() {
		var path = $("#selmaster option:selected").attr('id');
		var optionid = $("#selextra2 option:selected").attr('id');
		$("#optiondelsel3").remove();
		if (path != "selnone"){
			if(optionid!="selnone3"){
				$("#marcoimagen").append('<IMG id="optiondelsel3" class="imgClass" SRC="wp-content/plugins/image-price-calculator/'+path+'/'+optionid+'.png" </IMG>');
				$(".imgClass").css({"width": "500px", "height": "475px","position": "absolute", "right": "50px" , "top":"250px"});
			}
		}
		UpdateTotal();
		
	});
	
	$(".image-price-calc input[type=radio]").change( function() {
		var path = $("#selmaster option:selected").attr('id');
			if($(this).is(':checked')) {
				var radioval= $(this).val();
				if(($.isNumeric(radioval))&&(radioval!=0)) {				
					sumaRadio = $(this).attr('data-total', radioval);
					if (path != "selnone"){
					$("#marcoimagen").append("<IMG id=im"+this.id+".png class='imgClass imradioClass' SRC=wp-content/plugins/image-price-calculator/"+path+"/"+this.id+".png </IMG>");
					$(".imgClass").css({"width": "500px", "height": "475px","position": "absolute", "right": "50px" , "top":"250px"});
					}
				}else {
					$(this).attr('data-total', 0);
					$(".imradioClass").remove();
				}
			}else {
					$(this).attr('data-total', 0);
					$(".imradioClass").remove();
			}		
		UpdateTotal();
	
	});
	
	//Initialize all fields if data is there
	
	function InitialUpdate() {				
	
		$(".image-price-calc input[type=checkbox]").each( function() {
	
			if($(this).is(':checked')) {
				var checkboxval= $(this).val();
				if($.isNumeric(checkboxval)) {				
					$(this).attr('data-total', checkboxval);
				}
				else {
					$(this).attr('data-total', 0);
				}
			}					
			else {
				$(this).attr('data-total', 0);
			}					
	
		});
	
		
		$(".image-price-calc input[type=radio]").each( function() {
			if($(this).is(':checked')) {
				var radioval= $(this).val();
				if($.isNumeric(radioval)) {				
					$(this).attr('data-total', radioval);
				}
				else {
					$(this).attr('data-total', 0);
				}
			}					
			else {
				$(this).attr('data-total', 0);
			}		
		});	
			
		$(".image-price-calc option").each( function() {
			if($(this).is('option:selected')) {
				var selval= $(this).val();
				if($.isNumeric(selval)) {				
					$(this).attr('data-total', selval);
				}
				else {
					$(this).attr('data-total', 0);
				}
			}					
			else {
				$(this).attr('data-total', 0);
			}		
		});		
			
			UpdateTotal();
	
	}
	
		//Change value of total field by adding all data totals in form
	
	function UpdateTotal() {
		
		total=0;		
		
		child.each(function () {			
			if ($(this).is( "select" )) {
			   itemcost = $(this).children( ":selected" ).val();
			} else {
			   itemcost = $(this).attr("data-total") || 0;			   
			}
			total += parseFloat(itemcost);
		});			
			    
		$(".image-price-calc #image-price-total label").html($.number(total,2)+"€");		
						
		
	}	
		
	this.append('<div id="sidebar"><div id="image-price-total"><h3 style="margin:0;"> Total: </h3><label id="image-price-total-num">' + $.number(total,2) + '€ </label></div> </div>');	
	  
	return this;
   
};  // End of plugin

}(jQuery));