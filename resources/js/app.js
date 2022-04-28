require('./bootstrap');
var $ = require("Jquery");

$(document).ready(function(){


    // CHIAMATA ALL'API PER RECUPERARE I DATI DA PASSARE AL TEMPLATE CHE SI OCCUPERA' DI STAMPARLI

    var address = 'http://127.0.0.1:8000/ajax';

    $('.test').on('click', function(){

        $.ajax({
            url: address,
            method: 'GET',
            // Se la chiamata va a buon find...
            success: function (response){
    
                //console.log(response[0].elements[0].distance.text);
    
                    var homeTemplate = $('#template');
    
                printHomeData(response, homeTemplate);
            
                // Se si dovessero presentare errori...
            },
            error: function(){
                alert('Ops...Qualcosa è andato storto.');
            }
    
        });
    })

    function printHomeData (response, printTemplate){

        //Compilo il template Handlebars
        var source = $('#source_app_template').html();
        var template = Handlebars.compile(source);
        
        // Definisco i dati che mi servono per la succesiva stampa
        for (var i = 0; i < response.result.length; i++) {

            console.log(response);

            var thisItem = response.result[i].elements[i];
            console.log(thisItem.distance.text);
            // Compilo il contesto
            var context = {
                origins : response.origins,
                destinations : response.destinations,
                distance : thisItem.distance.text,
                duration : thisItem.duration.text
            }
            // Aggiungo ogni singolo oggetto al template
            var html = template(context);

            printTemplate.append(html);
            
        }




    }
        

    
});

// var axios = require('axios');

// var config = {
//   method: 'get',
//   url: 'http://127.0.0.1:8000/ajax',
//   headers: { }
// };

// axios(config)
// .then(function (response) {
//   console.log(JSON.stringify(response.data));
// })
// .catch(function (error) {
//   console.log(error);
// });