$(document).ready(function(){

     var updateOutput = function (e) {
         var list = e.length ? e : $(e.target),
                 output = list.data('output');
         /*if (window.JSON) {
             output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
         } else {
             output.val('JSON browser support required for this demo.');
         }*/
     };

     // activate Nestable for list 2
     $('#nestable2').nestable({
         group: 1
     }).on('change', updateOutput);

     // output initial serialised data     
     updateOutput($('#nestable2').data('output', $('#nestable2-output')));

     $('#data_5 .input-daterange').datepicker({
     	format: 'yyyy-mm-dd',
        keyboardNavigation: false,
        forceParse: false,
        autoclose: true
    });


     $("#fecha_inicio, #fecha_fin").change(function(){
     	$("#form-fechas").submit();
     });

    $("#agregarEscalaDis").click(function(){
        $("#escalas_d").append('<tr><td><input type="text" name="minimo_d[]" class="form-control"></td><td><input type="text" name="maximo_d[]" class="form-control"></td><td><input type="text" name="porcentaje_d[]" class="form-control"></td></tr>');
    });


    $("#agregarEscalaLider").click(function(){
        $("#escalas_l").append('<tr><td><input type="text" name="minimo_l[]" class="form-control"></td><td><input type="text" name="maximo_l[]" class="form-control"></td><td><input type="text" name="porcentaje_l[]" class="form-control"></td></tr>');
    });

    $("#agregarEscalaIncentivo").click(function(){
        $("#escalas_incentivo").append('<tr><td><input type="text" name="minimo[]" class="form-control"></td><td><input type="text" name="maximo[]" class="form-control"></td><td><input type="text" name="bono[]" class="form-control"></td></tr>');
    });

    $("#nueva-opcion").click(function(){
        $("#caja-piezas").append('<tr><td><input type="text" name="nombre[]" class="form-control"></td><td><input type="file" name="imagen[]" class="form-control"></td><td><select name="tipo_convencion[]" class="form-control"><option value="COLOR">COLOR</option><option value="IMAGEN">IMAGEN</option></select></td><td><input type="color" name="color_convencion[]" class="form-control"><input type="file" name="imagen_convencion[]" class="form-control"  style="display: none;"></td><td><select name="estado[]" class="form-control"><option value="1">ACTIVO</option><option value="0">INACTIVO</option></select></td></tr>');
    });

    $(".eliminarOpcionPieza").click(function(){
        var idpieza = $(this).attr("idpieza");
        var idopcion = $(this).attr("idopcion");

        var r = confirm("¿Seguro que desea eliminar ésta opción?");

        if (r) {

            $.ajax({
                type: 'POST',
                url: "Admin/Piezas/EliminarOpcionPieza",
                data: { idpieza:idpieza, idopcion:idopcion },
                dataType: 'json',
                async: false,
                success: function(response) {
                    alert('Se elimino '+response.filas+' opción(es)');
                    location.reload();
                },
                error: function() {
                    alert('No se pudo eliminar la opción');
                    location.reload();
                }
            });
        }
    });

    $(".eliminarEntidad").click(function(){

        var entidad = $(this).attr("entidad");
        var identidad = $(this).attr("identidad");

        var r = confirm("¿Seguro que desea eliminar "+entidad+"?");

        if (r) {

            $.ajax({
                type: 'POST',
                url: "Admin/EliminarEntidad",
                data: { identidad:identidad, entidad:entidad },
                dataType: 'json',
                async: false,
                success: function(response) {

                        if (response.filas==false) {
                            alert("No se pudo eliminar la entidad. Es posible que otros elementos dependan de ella.");                            
                        }else{
                            alert('Se elimino '+response.filas+' '+response.entidad);
                            location.reload();
                        }
                },
                error: function() {
                    alert('No se pudo eliminar el registro');
                }
            });
        }
    });


    var config = {
                '.chosen-select'           : {},
                '.chosen-select-deselect'  : {allow_single_deselect:true},
                '.chosen-select-no-single' : {disable_search_threshold:10},
                '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                '.chosen-select-width'     : {width:"95%"}
                }
            for (var selector in config) {
                $(selector).chosen(config[selector]);
            }

    CKEDITOR.replace('descripcion');  
    CKEDITOR.replace('contenido');
    CKEDITOR.replace('uso');        
    //CKEDITOR.replace('presentacion');
})