var hotel= new Object();
    hotel.nome='Beira Mar',
    hotel.quartos=50,
    hotel.reservados=50,
    hotel.academia= true,
    hotel.ocupacao='Hotel lotado.',
    checaDisponibilidade= function(){
        return hotel.quartos - hotel.reservados;

    };

    
    if (checaDisponibilidade===0) {
        qrtoReservados= document.getElementById('quartosReservado');
        qrtoReservados.textContent= hotel.ocupacao;
    } else{
        var qrtoReservados= document.getElementById('quartosReservado');
        qrtoReservados.textContent=hotel.reservados;
    }
    var qrtoHotel= document.getElementById('quartosHotel');
    qrtoHotel.textContent= hotel.quartos;
    
   

