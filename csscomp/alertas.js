function eliminar(){
    swal({
        title: "quieres eliminar?",
        text: "no podras recupearar este archivo!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "si, eliminar!",
        closeOnConfirm: false
      },
      function(){
        swal("eliminado", "el registro fue eliminado.", "success");
      });
		}
