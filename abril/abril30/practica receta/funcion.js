var imagen = document.getElementById('imagen');
function cambio(){
	if(imagen.src.match('encabezado1')){
		imagen.src = "IMG/encabezado2.jpg"
	}else{
		imagen.src = "IMG/encabezado1.jpg"
	}
}