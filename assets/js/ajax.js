
   jQuery(document). ready(function($) {

       $('#username').blur(function () {

           var username = $('username').val();

           $.ajax({

               type: 'POST',
               url: '<?php site_url(ajax/is_username_available); ?>',
               data: {username: username}

           });

           if(username.length > 3){



           }
       });

   });