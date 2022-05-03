    $(document).ready(function(){
        $('#send_message').click(function(e){
            e.preventDefault();
            var error = false;
         
            var email = $('#email').val();
            var messageForm = $('#questions').val();

            if(email.length == 0 || email.indexOf('@') == '-1'){
                var error = true;
                $('#email_error').fadeIn(500);
            }else{
                $('#email_error').fadeOut(500);
            }

            if(messageForm.length == 0){
                var error = true;
                $('#message_error').fadeIn(500);
            }else{
                $('#message_error').fadeOut(500);
            }
           console.log('dasdsa');
             if(error == false){
                $('#send_message').attr({'disabled' : 'true', 'value' : 'Отправка...' });
                
                 $.post("send.php", $("#mailForm").serialize(),function(result){
                 	console.log('falseeeeeee' , result);
                     if(result == 'sent'){
                          $('#submit-block').remove();
                         $('#mail_success').fadeIn(500);
                    }else{
                         $('#mail_fail').fadeIn(500);
                        $('#send_message').removeAttr('disabled').attr('value', 'Send The Message');
                    }
                });
            }
        });
    });