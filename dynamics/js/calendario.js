const anterior = document.getElementById ("anterior");
const siguiente = document.getElementById("siguiente");
const MesAno = document.getElementById("Ano_mes")
const tabla = document.getElementById("tabla");
const formEvento = document.getElementById("formEvento");
const formulario = document.getElementById("Formulario");
const editar = document.getElementById("editar");
const anadir = document.getElementById("anadir");
const fecha = document.getElementById("fecha");

const date = new Date();
const [diaAct, semAct, mesAct, anoAct] = [date.getDate(), date.getDay(), date.getMonth(), date.getFullYear()];
console.log([mesAct, diaAct, anoAct]);

function mostrarEventos(fecha){
    
    let nombre = ' ';
      
        return fetch("../php/mostrandoEventos.php?q="+fecha)
        .then((response) => {
          return response.json();
        })
        .then((datosJSON) => {
          console.log(datosJSON);
          if(datosJSON.ok == true){
            return nombre = datosJSON.datos.nombre;
            datosJSON.resolve(nombre);
            console.log(datosJSON.datos.nombre);
          }else{
            alert("no salió");
          }
        }).then((resolve) => {
            resolve(nombre);
        })
        
        // return nombre;
    
}

function dibujarCal (diaSem,  diaAct, mesAct){
    MesAno.innerHTML = mes[mesBien]+' '+anoBien;
    
    // crear.innerHTML = '';
    var orden = 1;
    var contador = 0;
    var cuenta = duracion[mesBien];
    for(let j =1; j <=6; j++){    //fila
        let cadena = '<tr class="fila">'
        if(j==1){
            if(diaSem == 1){
                cadena +='<td class="columna2" id="7"></td>';
                for (let k = 1; k<=6; k++){ //columna
             
                    if (orden <= cuenta){
                        if (mesBien < 10 && orden <10){
                            cadena +='<td class="columna" id='+anoBien+'-0'+mesBien+'-0'+orden+'>'+orden+'</td>'; //mostrarEventos(anoBien+'-0'+mesBien+'-0'+orden)+'</td>';
                        } else if(mesBien < 10 && orden > 9){
                            cadena +='<td class="columna" id='+anoBien+'-0'+mesBien+'-'+orden+'>'+orden+'</td>'; //mostrarEventos(anoBien+'-0'+mesBien+'-'+orden)+'</td>';
                        } else if(mesBien > 9 && orden < 10){
                            cadena +='<td class="columna" id='+anoBien+'-'+mesBien+'-0'+orden+'>'+orden+'</td>'; //mostrarEventos(anoBien+'-'+mesBien+'-0'+orden)+'</td>';
                        } else if(mesBien > 9 && orden > 9){
                            cadena +='<td class="columna" id='+anoBien+'-'+mesBien+'-'+orden+'>'+orden+'</td>'; //mostrarEventos(anoBien+'-'+mesBien+'-'+orden)+'</td>';
                        } 
                    }  
                    orden++;
                }
            } else if (diaSem == 2){
                cadena +='<td class="columna2" id="0"></td>';
                cadena +='<td class="columna2" id="1"></td>';
                for (let k = 1; k<=5; k++){ //columna
             
                    if (orden <= cuenta){
                        if (mesBien < 10 && orden <10){
                            cadena +='<td class="columna" id='+anoBien+'-0'+mesBien+'-0'+orden+'>'+orden+'</td>'; //mostrarEventos(anoBien+'-0'+mesBien+'-0'+orden)+'</td>';
                        } else if(mesBien < 10 && orden > 9){
                            cadena +='<td class="columna" id='+anoBien+'-0'+mesBien+'-'+orden+'>'+orden+'</td>'; //mostrarEventos(anoBien+'-0'+mesBien+'-'+orden)+'</td>';
                        } else if(mesBien > 9 && orden < 10){
                            cadena +='<td class="columna" id='+anoBien+'-'+mesBien+'-0'+orden+'>'+orden+'</td>'; //mostrarEventos(anoBien+'-'+mesBien+'-0'+orden)+'</td>';
                        } else if(mesBien > 9 && orden > 9){
                            cadena +='<td class="columna" id='+anoBien+'-'+mesBien+'-'+orden+'>'+orden+'</td>'; //mostrarEventos(anoBien+'-'+mesBien+'-'+orden)+'</td>';
                        } 
                    }  
                    orden++;
                }
            } else if (diaSem == 3){
                cadena +='<td class="columna2"  id="0"></td>';
                cadena +='<td class="columna2"  id="0"></td>';
                cadena +='<td class="columna2"  id="2"></td>';
                for (let k = 1; k<=4; k++){ //columna
             
                    if (orden <= cuenta){
                        if (mesBien < 10 && orden <10){
                            cadena +='<td class="columna" id='+anoBien+'-0'+mesBien+'-0'+orden+'>'+orden+'</td>'; //mostrarEventos(anoBien+'-0'+mesBien+'-0'+orden)+'</td>';
                        } else if(mesBien < 10 && orden > 9){
                            cadena +='<td class="columna" id='+anoBien+'-0'+mesBien+'-'+orden+'>'+orden+'</td>'; //mostrarEventos(anoBien+'-0'+mesBien+'-'+orden)+'</td>';
                        } else if(mesBien > 9 && orden < 10){
                            cadena +='<td class="columna" id='+anoBien+'-'+mesBien+'-0'+orden+'>'+orden+'</td>'; //mostrarEventos(anoBien+'-'+mesBien+'-0'+orden)+'</td>';
                        } else if(mesBien > 9 && orden > 9){
                            cadena +='<td class="columna" id='+anoBien+'-'+mesBien+'-'+orden+'>'+orden+'</td>'; //mostrarEventos(anoBien+'-'+mesBien+'-'+orden)+'</td>';
                        } 
                        
                    }  
                    orden++;
                }
            } else if (diaSem == 4){
                cadena +='<td class="columna2" id="0"></td>';
                cadena +='<td class="columna2" id="0"></td>';
                cadena +='<td class="columna2" id="0"></td>';
                cadena +='<td class="columna2" id="3"></td>';
                for (let k = 1; k<=3; k++){ //columna
                    if (orden <= cuenta){
                        if (mesBien < 10 && orden <10){
                            cadena +='<td class="columna" id='+anoBien+'-0'+mesBien+'-0'+orden+'>'+orden+'</td>'; //mostrarEventos(anoBien+'-0'+mesBien+'-0'+orden)+'</td>';
                        } else if(mesBien < 10 && orden > 9){
                            cadena +='<td class="columna" id='+anoBien+'-0'+mesBien+'-'+orden+'>'+orden+'</td>'; //mostrarEventos(anoBien+'-0'+mesBien+'-'+orden)+'</td>';
                        } else if(mesBien > 9 && orden < 10){
                            cadena +='<td class="columna" id='+anoBien+'-'+mesBien+'-0'+orden+'>'+orden+'</td>'; //mostrarEventos(anoBien+'-'+mesBien+'-0'+orden)+'</td>';
                        } else if(mesBien > 9 && orden > 9){
                            cadena +='<td class="columna" id='+anoBien+'-'+mesBien+'-'+orden+'>'+orden+'</td>'; //mostrarEventos(anoBien+'-'+mesBien+'-'+orden)+'</td>';
                        } 
                        
                    }  
                    orden++;
                }
            } else if (diaSem == 5){
                cadena +='<td class="columna2" id="0"></td>';
                cadena +='<td class="columna2" id="0"></td>';
                cadena +='<td class="columna2" id="0"></td>';
                cadena +='<td class="columna2" id="0"></td>';
                cadena +='<td class="columna2" id="4"></td>';
                for (let k = 1; k<=2; k++){ //columna
             
                    if (orden <= cuenta){
                        if (mesBien < 10 && orden <10){
                            cadena +='<td class="columna" id='+anoBien+'-0'+mesBien+'-0'+orden+'>'+orden+'</td>'; //mostrarEventos(anoBien+'-0'+mesBien+'-0'+orden)+'</td>';
                        } else if(mesBien < 10 && orden > 9){
                            cadena +='<td class="columna" id='+anoBien+'-0'+mesBien+'-'+orden+'>'+orden+'</td>'; //mostrarEventos(anoBien+'-0'+mesBien+'-'+orden)+'</td>';
                        } else if(mesBien > 9 && orden < 10){
                            cadena +='<td class="columna" id='+anoBien+'-'+mesBien+'-0'+orden+'>'+orden+'</td>'; //mostrarEventos(anoBien+'-'+mesBien+'-0'+orden)+'</td>';
                        } else if(mesBien > 9 && orden > 9){
                            cadena +='<td class="columna" id='+anoBien+'-'+mesBien+'-'+orden+'>'+orden+'</td>'; //mostrarEventos(anoBien+'-'+mesBien+'-'+orden)+'</td>';
                        } 
                        
                    }  
                    orden++;
                }
            } else if (diaSem == 6){
                cadena +='<td class="columna2" id="0"></td>';
                cadena +='<td class="columna2" id="0"></td>';
                cadena +='<td class="columna2" id="0"></td>';
                cadena +='<td class="columna2" id="0"></td>';
                cadena +='<td class="columna2" id="0"></td>';
                cadena +='<td class="columna2" id="5"></td>';
                for (let k = 1; k<=1; k++){ //columna
             
                    if (orden <= cuenta){
                        if (mesBien < 10 && orden <10){
                            cadena +='<td class="columna" id='+anoBien+'-0'+mesBien+'-0'+orden+'>'+orden+'</td>'; //mostrarEventos(anoBien+'-0'+mesBien+'-0'+orden)+'</td>';
                        } else if(mesBien < 10 && orden > 9){
                            cadena +='<td class="columna" id='+anoBien+'-0'+mesBien+'-'+orden+'>'+orden+'</td>'; //mostrarEventos(anoBien+'-0'+mesBien+'-'+orden)+'</td>';
                        } else if(mesBien > 9 && orden < 10){
                            cadena +='<td class="columna" id='+anoBien+'-'+mesBien+'-0'+orden+'>'+orden+'</td>'; //mostrarEventos(anoBien+'-'+mesBien+'-0'+orden)+'</td>';
                        } else if(mesBien > 9 && orden > 9){
                            cadena +='<td class="columna" id='+anoBien+'-'+mesBien+'-'+orden+'>'+orden+'</td>'; //mostrarEventos(anoBien+'-'+mesBien+'-'+orden)+'</td>';
                        } 
                    }  
                    orden++;
                }
            }
        } else {
            for (let k = 1; k<=7; k++){ //columna
             
                if (orden <= cuenta){
                    if (mesBien < 10 && orden <10){
                        cadena +='<td class="columna" id='+anoBien+'-0'+mesBien+'-0'+orden+'>'+orden+'</td>'; //mostrarEventos(anoBien+'-0'+mesBien+'-0'+orden)+'</td>';
                    } else if(mesBien < 10 && orden > 9){
                        cadena +='<td class="columna" id='+anoBien+'-0'+mesBien+'-'+orden+'>'+orden+'</td>'; //mostrarEventos(anoBien+'-0'+mesBien+'-'+orden)+'</td>';
                    } else if(mesBien > 9 && orden < 10){
                        cadena +='<td class="columna" id='+anoBien+'-'+mesBien+'-0'+orden+'>'+orden+'</td>'; //mostrarEventos(anoBien+'-'+mesBien+'-0'+orden)+'</td>';
                    } else if(mesBien > 9 && orden > 9){
                        cadena +='<td class="columna" id='+anoBien+'-'+mesBien+'-'+orden+'>'+orden+'</td>'; //mostrarEventos(anoBien+'-'+mesBien+'-'+orden)+'</td>';
                    } 
                    
                }  
                orden++;
            }
        }
        cadena += '</tr>';
        tabla.innerHTML += cadena;    
    }
}

var mes = [];
    mes [1] = 'Enero';
    mes [2] = 'Febrero';
    mes [3] = 'Marzo';
    mes [4] = 'Abril';
    mes [5] = 'Mayo';
    mes [6] = 'Junio';
    mes [7] = 'Julio';
    mes [8] = 'Agosto';
    mes [9] = 'Septiembre';
    mes [10] = 'Octubre';
    mes [11] = 'Noviembre';
    mes [12] = 'Diciembre';

var duracion = [];
    duracion [1] = 31;
    duracion [2] = 28;
    duracion [3] = 31;
    duracion [4] = 30;
    duracion [5] = 31;
    duracion [6] = 30;
    duracion [7] = 31;
    duracion [8] = 31;
    duracion [9] = 30;
    duracion [10] = 31;
    duracion [11] = 30;
    duracion [12] = 31;

var dia = [];
    dia [1] = 'Mon';
    dia [2] = 'Tue';
    dia [3] = 'Wed';
    dia [4] = 'Thu';
    dia [5] = 'Fri';
    dia [6] = 'Sat';
    dia [7] = 'Sun';
    

if((anoBien == 2024 && mesBien == 2) || (anoBien == 2020 && mesBien == 2)){
    duracion[2] = 29;
}

// MesAno.innerHTML = mes[mesAct+1]+' '+anoAct;

var orden = 1;
var contador = 0;
var diaSem = semAct;
var anoBien = anoAct;
var mesBien =  mesAct+1;
var cuenta = duracion[mesBien];
console.log(mesBien);
console.log(anoBien);

for(let i = 1; i < diaAct; i++){
    if(diaSem == 1)
    {   
        diaSem = 7;
    } else {
        diaSem--;
    }
}
console.log(mes[mesAct+1]);
console.log(duracion[mesAct+1]);
console.log(dia[semAct]);

anterior.addEventListener("click", () =>{
    if((anoBien == 2024 && mesBien == 1) || (anoBien == 2020 && mesBien == 1)){
        duracion[2] = 29;
    }
    tabla.innerHTML='';

    for(let i = 1; i < duracion[mesBien]; i++){
        if(diaSem == 1)
        {   
            diaSem = 7;
        } else {
            diaSem--;
        }
    }
    console.log(diaSem);

    if(diaSem == 1){   
        diaSem = 7;
    } else {
        diaSem--;
    } 
    // diaSem-=1;
    console.log(diaSem);

    if(mesBien==1){
        mesBien = 12;
        anoBien -= 1;
    } else {
        mesBien-=1;
    }
    // console.log("antes");
    // console.log(mes[mesBien]);
    // console.log(anoBien);  
    
    
    console.log(diaSem);
    dibujarCal(diaSem,  diaAct, mesAct);
    
});

siguiente.addEventListener("click", (evento) =>{
    if((anoBien == 2024 && mesBien == 1) || (anoBien == 2020 && mesBien == 1)){
        duracion[2] = 29;
        console.log("entras?");
        console.log(duracion[2]);
        console.log(anoBien);
        console.log(mesBien);


    }
    tabla.innerHTML='';
    for(let i = 1; i < duracion[mesBien]; i++){
        if(diaSem == 7)
        {   
            diaSem = 1;
        } else {
            diaSem++;
        }
    }
    if(diaSem == 7){   
        diaSem = 1;
    } else {
        diaSem++;
    }    

    if(mesBien==12){
        mesBien = 1;
        anoBien += 1;
    } else {
        mesBien+=1;
    }
    // MesAno.innerHTML = mes[mesBien]+' '+anoAct; //No se imprime bien
    // console.log("después");
    // console.log(mes[mesBien]);
    // console.log(anoBien);
    // console.log(diaSem);
    dibujarCal(diaSem,  diaAct, mesAct);

});


MesAno.innerHTML = mes[mesBien]+' '+anoBien;
dibujarCal(diaSem,  diaAct);


editar.addEventListener("click", (evento) =>{

    tabla.addEventListener("click", (evento) =>{
        formulario.innerHTML = '';
        formulario.innerHTML += '<div id="contenedorForm">';
        formulario.innerHTML += '<label for="nombre">Nombre del evento</label><br>';
        formulario.innerHTML += '    <input type="text" id="nombre" name="nombre" class="input"><br><br>';

        formulario.innerHTML += '    <label for="descripcion">Descripción del evento</label><br>';
        formulario.innerHTML += '    <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="area"></textarea><br><br>';

        formulario.innerHTML += '    <label for="hora">Hora del evento</label><br>';
        formulario.innerHTML += '    <input type="time" name="hora" id="hora" class="input"><br><br>';
            
        formulario.innerHTML += '   <label for="fecha">Fecha del evento</label><br>'
        formulario.innerHTML += '<input type="date" name="fecha" id="fecha" class="input" value="'+evento.target.id+'"> <br><br>';

        formulario.innerHTML += '    <button type="submit" id="anadir">Añadir evento</button>';
        formulario.innerHTML += '</div>';

        formEvento.style.display = "block";
    });
    
});

// anadir.addEventListener("click", (evento)=>{
//     formEvento.style.display = "none";
// });







