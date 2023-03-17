console.log('hello world!')
/*
1.Mettre des id correspondant aux champs à chercher
- date
- heure
- nombre de couverts
- bouton d'envoi du formulaire?
*/
document.addEventListener('DOMContentLoaded', function() {
    const dateTime = document.querySelector("#booking_form_date")
    console.log(dateTime)
})


//2. commencer le tout à 0, mettre un max par exemple 100
dateTime[0].value = "";
//3. Faire un appel pour voir le nombre de places disponibles
setInterval(function () { getNumberGuests(dateTimeInput[0].value); }, 100);

function getNumberGuests(dateTime) {
    //mettre ajax({
//    url : '/booking',
//    type: 'POST',
//    data : {'dateTime': dateTime },
//})
}

/*4. Si pas de créneaux => mettre un message : pas de dispo
5. Si crénaux dispo, valider la réservation => mettre un message : résa effectuée
*/

