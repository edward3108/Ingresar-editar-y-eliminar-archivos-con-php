function validar(){
  var veficar=true;

     if(!document.form1.nombre.value)
	 {
		alert("Debe llenar el campo nombre");
		document.form1.nombre.focus();
		veficar= false;
	 }
    
     else if (!document.form1.tarea.value)
     {
     	alert("Debe dejar un comentario");
		document.form1.tarea.focus();
		veficar=false;

     }
    if (veficar)
    {
    	document.form1.submit();

    }
    }
    
    function eliminar(url)
    {
        if (confirm("En veradad desea eliminar este registro?"))
        {
            window.location=url;
        }

    }
