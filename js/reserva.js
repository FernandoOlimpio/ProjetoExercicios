// http://regexr.com/ site para testar expressoes regulares.

var hotel= new Object();
    hotel.nome='Beira Mar',
    hotel.quartos=50,
    hotel.reservados=25,
    hotel.academia= true,
    hotel.ocupacao='Hotel lotado.',
    checaDisponibilidade= function(){
        return hotel.quartos - hotel.reservados;

    };

    var qrtoReservados= document.getElementById('quartosReservado');
    qrtoReservados.textContent=hotel.reservados;

    function botao(){
            hotel.reservados++;

            if (hotel.quartos > hotel.reservados) {
                var qrtoReservados= document.getElementById('quartosReservado');
                qrtoReservados.textContent=hotel.reservados;
        
            } else{
                qrtoReservados= document.getElementById('quartosReservado');
                qrtoReservados.textContent= hotel.ocupacao;
        
            }
        }
    

    var qrtoHotel= document.getElementById('quartosHotel');
    qrtoHotel.textContent= hotel.quartos;

        function oferta() {
            var data= new Date();
            var nomeSemana=['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'];
            var nomeMes=['Janeiro','Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
            var dataFutura= new Date(data.getTime()+ 1000*60*60*24*7);
            var diaSemana= nomeSemana[dataFutura.getDay()];
            var dia= dataFutura.getDate();
            var mes=nomeMes[dataFutura.getMonth()];

            var dataFuturaTela= diaSemana+', '+ dia+ ' de '+ mes+ ' de '+ dataFutura.getFullYear();
            return dataFuturaTela;

        }

       
        function dataAtual() {
            var data= new Date();
            var diaSemana=['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'];
            var mes=['Janeiro','Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
            var dataHoje= diaSemana[data.getDay()] +', '+ data.getDate() +' de '+ mes[data.getMonth()] + ' de '+ data.getFullYear();
            return dataHoje;
            
        }
        
        document.getElementById('dataAtual').textContent=dataAtual();
        document.getElementById('oferta').textContent=oferta();
    

        document.forms[0].elements[0]= Select(); //deixa o campo selecionado.
        

      /* if (document.forms[0].elements[4]||document.forms[0].elements[5]||document.forms[0].elements[6]){
            desabilitaCrianca();
        }*/

        function desabilitaCrianca() {
            if(document.getElementById('standard')){
         crianca= document.getElementById('listaCriancas');
         crianca.disabled=true;
            }
            
        }

        function habilitaCrianca() {
            
            crianca= document.getElementById('listaCriancas');
            crianca.disabled=false; 
            
        }
        /*if(document.getElementById('master')){ 
        else if(document.getElementById('luxo')){
                crianca= document.getElementById('listaCriancas');
                crianca.disabled=false; 
             }
        }
           
           

           /* if (document.forms[0].elements[4]) {
                document.forms[0].elements[8].disabled =true
            } else {
                document.forms[0].elements[8].disabled =false
            }*/
        
   

