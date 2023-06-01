$(function(){
    $('.form-horizontal button').on('click', function(){
        let formData = $('.form-horizontal').serializeArray();
        let request = {};
        for(i in formData){
            request[formData[i].name] = formData[i].value;
        }
        $.post('contacts_get_message.php', request, function(response){
            if(response == "1"){
                alert("Дані відправлено");
            }
        });

        return false;
               
    });
});