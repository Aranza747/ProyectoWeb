const anterior = document.getElementById ("anterior");
const siguiente = document.getElementById("siguiente");
const MesAno = document.getElementById("Ano_mes")
const tabla = document.getElementById("tabla");
// const crear = document.getElementById("crear");

const date = new Date();
const [diaAct, semAct, mesAct, anoAct] = [date.getDate(), date.getDay(), date.getMonth(), date.getFullYear()];
console.log([mesAct, diaAct, anoAct]);

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
                cadena +='<td class="columna" id="7"></td>';
                for (let k = 1; k<=6; k++){ //columna
             
                    if (orden <= cuenta){
                        if(orden==diaAct && mesBien==mesAct+1){
                            cadena +='<td class="columna" id='+orden+'> **'+orden+'** </td>';
                        } else {
                            cadena +='<td class="columna" id='+orden+'>'+orden+'</td>';
                        }
                    }  
                    orden++;
                }
            } else if (diaSem == 2){
                cadena +='<td class="columna" id="0"></td>';
                cadena +='<td class="columna" id="1"></td>';
                for (let k = 1; k<=5; k++){ //columna
             
                    if (orden <= cuenta){
                        if(orden==diaAct){
                            cadena +='<td class="columna" id='+orden+'> **'+orden+'** </td>';
                        } else {
                            cadena +='<td class="columna" id='+orden+'>'+orden+'</td>';
                        }
                    }  
                    orden++;
                }
            } else if (diaSem == 3){
                cadena +='<td class="columna" id="0"></td>';
                cadena +='<td class="columna" id="0"></td>';
                cadena +='<td class="columna" id="2"></td>';
                for (let k = 1; k<=4; k++){ //columna
             
                    if (orden <= cuenta){
                        if(orden==diaAct){
                            cadena +='<td class="columna" id='+orden+'> **'+orden+'** </td>';
                        } else {
                            cadena +='<td class="columna" id='+orden+'>'+orden+'</td>';
                        }
                        
                    }  
                    orden++;
                }
            } else if (diaSem == 4){
                cadena +='<td class="columna" id="0"></td>';
                cadena +='<td class="columna" id="0"></td>';
                cadena +='<td class="columna" id="0"></td>';
                cadena +='<td class="columna" id="3"></td>';
                for (let k = 1; k<=3; k++){ //columna
                    if (orden <= cuenta){
                        if(orden==diaAct){
                            cadena +='<td class="columna" id='+orden+'> **'+orden+'** </td>';
                        } else {
                            cadena +='<td class="columna" id='+orden+'>'+orden+'</td>';
                        }
                        
                    }  
                    orden++;
                }
            } else if (diaSem == 5){
                cadena +='<td class="columna" id="0"></td>';
                cadena +='<td class="columna" id="0"></td>';
                cadena +='<td class="columna" id="0"></td>';
                cadena +='<td class="columna" id="0"></td>';
                cadena +='<td class="columna" id="4"></td>';
                for (let k = 1; k<=2; k++){ //columna
             
                    if (orden <= cuenta){
                        if(orden==diaAct){
                            cadena +='<td class="columna" id='+orden+'> **'+orden+'** </td>';
                        } else {
                            cadena +='<td class="columna" id='+orden+'>'+orden+'</td>';
                        }
                        
                    }  
                    orden++;
                }
            } else if (diaSem == 6){
                cadena +='<td class="columna" id="0"></td>';
                cadena +='<td class="columna" id="0"></td>';
                cadena +='<td class="columna" id="0"></td>';
                cadena +='<td class="columna" id="0"></td>';
                cadena +='<td class="columna" id="0"></td>';
                cadena +='<td class="columna" id="5"></td>';
                for (let k = 1; k<=1; k++){ //columna
             
                    if (orden <= cuenta){
                        if(orden==diaAct){
                            cadena +='<td class="columna" id='+orden+'> **'+orden+'** </td>';
                        } else {
                            cadena +='<td class="columna" id='+orden+'>'+orden+'</td>';
                        }
                    }  
                    orden++;
                }
            }
        } else {
            for (let k = 1; k<=7; k++){ //columna
             
                if (orden <= cuenta){
                    if(orden==diaAct){
                        cadena +='<td class="columna" id='+orden+'> **'+orden+'** </td>';
                    } else {
                        cadena +='<td class="columna" id='+orden+'>'+orden+'</td>';
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
        duracion[2] == 29;
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
    if((anoBien == 2024 && mesBien == 2) || (anoBien == 2020 && mesBien == 2)){
        duracion[2] == 29;
    }
    tabla.innerHTML='';

    if(mesBien==1){
        mesBien = 12;
        anoBien -= 1;
    } else {
        mesBien-=1;
    }
    console.log("antes");
    console.log(mes[mesBien]);
    console.log(anoBien);  
    diaSem-=1;
    for(let i = 1; i < duracion[mesBien]; i++){
        if(diaSem == 1)
        {   
            diaSem = 7;
        } else {
            diaSem--;
        }
    }
    console.log(diaSem);
    dibujarCal(diaSem,  diaAct, mesAct);
    
});

siguiente.addEventListener("click", (evento) =>{
    if((anoBien == 2024 && mesBien == 2) && (anoBien == 2020 && mesBien == 2)){
        duracion[2] == 29;
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
    console.log("después");
    console.log(mes[mesBien]);
    console.log(anoBien);
    console.log(diaSem);
    dibujarCal(diaSem,  diaAct, mesAct);

});


MesAno.innerHTML = mes[mesBien]+' '+anoBien;
dibujarCal(diaSem,  diaAct);







