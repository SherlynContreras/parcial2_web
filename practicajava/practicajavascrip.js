console.log("Se cargó el archivo Javascript");

var contador = 0;
function sumaContador() {
	contador++;
	console.log(contador);
	document.getElementById("contador").innerHTML = contador;
}