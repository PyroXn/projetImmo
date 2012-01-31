$(function() {
    $("#cp").blur(function() {
        $.ajax ({
            url : "index.php?p=loadville&cp="+$("#cp").val() ,
            complete:  function (xhr, result)
            {
                if(result != "success") return;
                var reponse = xhr.responseText;
                $('#ville').html(reponse);
            }
        });
        $.ajax ({
            url : "index.php?p=loadregion&cp="+$("#cp").val() ,
            complete:  function (xhr, result)
            {
                if(result != "success") return;
                var reponse = xhr.responseText;
                $('#region').html(reponse);
            }
        });
    });
});