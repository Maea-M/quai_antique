/*
1.Mettre des id correspondant aux champs à chercher
- date
- heure
- nombre de couverts
- bouton d'envoi du formulaire?

2. commencer le tout à 0

3. Faire un appel pour voir le nombre de places dispo

$.ajax({
    url : '/booking',
    type: 'POST',
    data : {'clé': valeur },
});
/*Ala 
var settings = {
    "url": "http://15.236.148.78/products/all",
    "method": "GET",
    "timeout": 0,
    };
    
    $.ajax(settings).done(function (response) {
    console.log(response);
    });

    var requestOptions = {
        method: 'GET',
        redirect: 'follow'
        };
        
        fetch("http://15.236.148.78/products/all", requestOptions)
        .then(response => response.text())
        .then(result => console.log(result))
        .catch(error => console.log('error', error));
        */