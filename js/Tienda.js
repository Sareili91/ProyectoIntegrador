window.onload = function(){
pantalla=document.getElementById("textoPantalla");
}
const IPa = ['0'];//empieza en 0 para que ya tenga guardado que sera de numeros enteros
acceso=0; //1 es que no se puede hacer la compra y 0 que si se puede
function numero(cantidad, membresia) {//Esto es para poder sacar el descuento, si se aplican los 2 solo quita los ---> // <---- del else
         if (cantidad<=3000 && membresia==1/*1 es si, 0 es no*/){
			cantidad=cantidad-(cantidad*0.20);
		 }
		 //else
		 {
			 if (cantidad<=2000){
				cantidad=cantidad-(cantidad*0.15);
			 }
		 }
		 return cantidad;
         }
function Fechas(año,mes,dia,añolimite,meslimite,dialimite) { //Este es asi, para evitar hacer mil operaciones, solo recibe las fechas por separado, creeme, es mil veces mas rapido asi
         var f1 = new Date(año, mes-1, dia);
		 var f2 = new Date(añolimite, meslimite-1, dialimite);
		 if(f1 < f2){
				alert("La fecha limite ya fue superada");
				acceso=1;
			}
		return acceso;
         }	
function EliminarIP(IP) {//Cada que se quite un producto
			IPa.unshift(IP);
         }		
function VerificarIP(IP) {//Se verifica que no sean las mismas IP y se agregue un producto
			for(let i=1; i<IPa.length; i++) {
				if(IPa==IP[i]){
					alert("Ya pediste este producto");
				}
				else {
				IPa.push(IP);
				}
			}
         }