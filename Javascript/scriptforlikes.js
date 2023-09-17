$( document ).ready(function() {

    window.addEventListener('load', function () {
      console.log('Cette fonction est exécutée une fois quand la page est chargée.');
       var buttons = document.querySelectorAll('.bouton');

        for (let i = 0; i != buttons.length; ++i)
        {
                buttons[i].setAttribute('data-id', i+1);
                     var xhr1 = new XMLHttpRequest();
                   var formData1 = new FormData();
                    xhr1.open('POST', 'Classement.php');
           formData1.append('fruit', buttons[i].getAttribute('data-id'));
            xhr1.send(formData1);

            buttons[i].addEventListener('click', function(){
                var xhr = new XMLHttpRequest();
                xhr.open('POST', 'likes.php');
                var formData = new FormData();
                formData.append('fruit', buttons[i].getAttribute('data-id'));
                xhr.send(formData);
              
            });
        }
          console.log('Fonction de like chargée.');
    });
   });