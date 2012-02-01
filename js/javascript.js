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
    
    var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    var nom = false;
    var prenom = false;
    var adresse = false;
    var cp = false;
    var ville = false;
    var pays = false;
    var telephone = false;
    var email = false;
    var question = false;

    //nom
    $("#nom").blur(function() {
        if($(this).val() == "") {
             $(this).next().show().html("<img src='templates/images/check-rouge.png''> Merci de bien vouloir saisir votre nom");
             
             $('#submit').attr("id", "noSubmit");
             $('#noSubmit').attr("disabled","disabled");
             nom = false;
        } else {
            $(this).next().show().html("<img src='templates/images/check-vert.png''>");
            nom = true;
            if(nom == true && prenom == true && adresse == true && cp == true && ville == true && pays == true && telephone == true && email == true && question == true) {
                $('#noSubmit').attr("id", "submit");
                $('#submit').removeAttr("disabled");         
            }
            
        }
    });
    
    
    //prenom
    $("#prenom").blur(function() {
        if($(this).val() == "") {
             $(this).next().show().html("<img src='templates/images/check-rouge.png''> Merci de bien vouloir saisir votre prénom");
             
             $('#submit').attr("id", "noSubmit");
             $('#noSubmit').attr("disabled","disabled");
             prenom = false;
        } else {
            $(this).next().show().html("<img src='templates/images/check-vert.png''>");
            prenom = true;
            if(nom == true && prenom == true && adresse == true && cp == true && ville == true && pays == true && telephone == true && email == true && question == true) {
                $('#noSubmit').attr("id", "submit");
                $('#submit').removeAttr("disabled");         
            }
            
        }
    });
    
    //adresse
    $("#adresse").blur(function() {
        if($(this).val() == "") {
             $(this).next().show().html("<img src='templates/images/check-rouge.png''> Merci de bien vouloir saisir votre adresse");
             
             $('#submit').attr("id", "noSubmit");
             $('#noSubmit').attr("disabled","disabled");
             adresse = false;
        } else {
            $(this).next().show().html("<img src='templates/images/check-vert.png''>");
            adresse = true;
            if(nom == true && prenom == true && adresse == true && cp == true && ville == true && pays == true && telephone == true && email == true && question == true) {
                $('#noSubmit').attr("id", "submit");
                $('#submit').removeAttr("disabled");         
            }
            
        }
    });
    
    //code postal
    $("#cp").blur(function() {
        if($(this).val() == "") {
             $(this).next().show().html("<img src='templates/images/check-rouge.png''> Merci de bien vouloir saisir votre code postal");
             
             $('#submit').attr("id", "noSubmit");
             $('#noSubmit').attr("disabled","disabled");
             cp = false;
        } else {
            $(this).next().show().html("<img src='templates/images/check-vert.png''>");
            cp = true;
            if(nom == true && prenom == true && adresse == true && cp == true && ville == true && pays == true && telephone == true && email == true && question == true) {
                $('#noSubmit').attr("id", "submit");
                $('#submit').removeAttr("disabled");         
            }
            
        }
    });
    
    //ville
    $("#ville").blur(function() {
        if($(this).val() == "") {
             $(this).next().show().html("<img src='templates/images/check-rouge.png''> Merci de bien vouloir saisir votre ville");
             
             $('#submit').attr("id", "noSubmit");
             $('#noSubmit').attr("disabled","disabled");
             ville = false;
        } else {
            $(this).next().show().html("<img src='templates/images/check-vert.png''>");
            ville = true;
            if(nom == true && prenom == true && adresse == true && cp == true && ville == true && pays == true && telephone == true && email == true && question == true) {
                $('#noSubmit').attr("id", "submit");
                $('#submit').removeAttr("disabled");         
            }
            
        }
    });
    
    //pays
    $("#pays").blur(function() {
        if($(this).val() == "") {
             $(this).next().show().html("<img src='templates/images/check-rouge.png''> Merci de bien vouloir saisir votre pays");
             
             $('#submit').attr("id", "noSubmit");
             $('#noSubmit').attr("disabled","disabled");
             pays = false;
        } else {
            $(this).next().show().html("<img src='templates/images/check-vert.png''>");
            pays = true;
            if(nom == true && prenom == true && adresse == true && cp == true && ville == true && pays == true && telephone == true && email == true && question == true) {
                $('#noSubmit').attr("id", "submit");
                $('#submit').removeAttr("disabled");         
            }
            
        }
    });
    
    //telephone
    $("#telephone").blur(function() {
        if($(this).val() == "") {
             $(this).next().show().html("<img src='templates/images/check-rouge.png''> Merci de bien vouloir saisir votre numero de téléphone");
             
             $('#submit').attr("id", "noSubmit");
             $('#noSubmit').attr("disabled","disabled");
             telephone = false;
        } else {
            $(this).next().show().html("<img src='templates/images/check-vert.png''>");
            telephone = true;
            if(nom == true && prenom == true && adresse == true && cp == true && ville == true && pays == true && telephone == true && email == true && question == true) {
                $('#noSubmit').attr("id", "submit");
                $('#submit').removeAttr("disabled");         
            }
            
        }
    });
    
    //email
    $("#email").blur(function() {
        if($(this).val() == "") {
             $(this).next().show().html("<img src='templates/images/check-rouge.png''> Merci de bien vouloir saisir votre email");
             
             $('#submit').attr("id", "noSubmit");
             $('#noSubmit').attr("disabled","disabled");
             email = false;
        } else if (!ck_email.test($(this).val())) {
            $(this).next().show().html("<img src='templates/images/check-rouge.png''>L\'adresse e-mail n'est pas valide.");
            $('#submit').attr("id", "noSubmit");
             $('#noSubmit').attr("disabled","disabled");
             mail = false;
        } else {
            $(this).next().show().html("<img src='templates/images/check-vert.png''>");
            email = true;
            if(nom == true && prenom == true && adresse == true && cp == true && ville == true && pays == true && telephone == true && email == true && question == true) {
                $('#noSubmit').attr("id", "submit");
                $('#submit').removeAttr("disabled");         
            }
            
        }
    });
    
    //question
    $("#question").blur(function() {
        if($(this).val() == "") {
             $(this).next().show().html("<img src='templates/images/check-rouge.png''> Merci de bien vouloir saisir votre question");
             
             $('#submit').attr("id", "noSubmit");
             $('#noSubmit').attr("disabled","disabled");
             question = false;
        } else {
            $(this).next().show().html("<img src='templates/images/check-vert.png''>");
            question = true;
            if(nom == true && prenom == true && adresse == true && cp == true && ville == true && pays == true && telephone == true && email == true && question == true) {
                $('#noSubmit').attr("id", "submit");
                $('#submit').removeAttr("disabled");         
            }
            
        }
    });
    
    //test avant d'envoyer

        //nom
        $("#submit").blur(function() {
            if($(this).val() == "") {
                 $(this).next().show().html("<img src='templates/images/check-rouge.png''> Merci de bien vouloir saisir votre nom");

                 $('#submit').attr("id", "noSubmit");
                 $('#noSubmit').attr("disabled","disabled");
                 nom = false;
            } else {
                $(this).next().show().html("<img src='templates/images/check-vert.png''>");
                nom = true;
                if(nom == true && prenom == true && adresse == true && cp == true && ville == true && pays == true && telephone == true && email == true && question == true) {
                    $('#noSubmit').attr("id", "submit");
                    $('#submit').removeAttr("disabled");         
                }

            }
        });


        //prenom
        $("#submit").blur(function() {
            if($(this).val() == "") {
                 $(this).next().show().html("<img src='templates/images/check-rouge.png''> Merci de bien vouloir saisir votre prénom");

                 $('#submit').attr("id", "noSubmit");
                 $('#noSubmit').attr("disabled","disabled");
                 prenom = false;
            } else {
                $(this).next().show().html("<img src='templates/images/check-vert.png''>");
                prenom = true;
                if(nom == true && prenom == true && adresse == true && cp == true && ville == true && pays == true && telephone == true && email == true && question == true) {
                    $('#noSubmit').attr("id", "submit");
                    $('#submit').removeAttr("disabled");         
                }

            }
        });

        //adresse
        $("#submit").blur(function() {
            if($(this).val() == "") {
                 $(this).next().show().html("<img src='templates/images/check-rouge.png''> Merci de bien vouloir saisir votre adresse");

                 $('#submit').attr("id", "noSubmit");
                 $('#noSubmit').attr("disabled","disabled");
                 adresse = false;
            } else {
                $(this).next().show().html("<img src='templates/images/check-vert.png''>");
                adresse = true;
                if(nom == true && prenom == true && adresse == true && cp == true && ville == true && pays == true && telephone == true && email == true && question == true) {
                    $('#noSubmit').attr("id", "submit");
                    $('#submit').removeAttr("disabled");         
                }

            }
        });

        //code postal
        $("#submit").blur(function() {
            if($(this).val() == "") {
                 $(this).next().show().html("<img src='templates/images/check-rouge.png''> Merci de bien vouloir saisir votre code postal");

                 $('#submit').attr("id", "noSubmit");
                 $('#noSubmit').attr("disabled","disabled");
                 cp = false;
            } else {
                $(this).next().show().html("<img src='templates/images/check-vert.png''>");
                cp = true;
                if(nom == true && prenom == true && adresse == true && cp == true && ville == true && pays == true && telephone == true && email == true && question == true) {
                    $('#noSubmit').attr("id", "submit");
                    $('#submit').removeAttr("disabled");         
                }

            }
        });

        //ville
        $("#submit").blur(function() {
            if($(this).val() == "") {
                 $(this).next().show().html("<img src='templates/images/check-rouge.png''> Merci de bien vouloir saisir votre ville");

                 $('#submit').attr("id", "noSubmit");
                 $('#noSubmit').attr("disabled","disabled");
                 ville = false;
            } else {
                $(this).next().show().html("<img src='templates/images/check-vert.png''>");
                ville = true;
                if(nom == true && prenom == true && adresse == true && cp == true && ville == true && pays == true && telephone == true && email == true && question == true) {
                    $('#noSubmit').attr("id", "submit");
                    $('#submit').removeAttr("disabled");         
                }

            }
        });

        //pays
        $("#submit").blur(function() {
            if($(this).val() == "") {
                 $(this).next().show().html("<img src='templates/images/check-rouge.png''> Merci de bien vouloir saisir votre pays");

                 $('#submit').attr("id", "noSubmit");
                 $('#noSubmit').attr("disabled","disabled");
                 pays = false;
            } else {
                $(this).next().show().html("<img src='templates/images/check-vert.png''>");
                pays = true;
                if(nom == true && prenom == true && adresse == true && cp == true && ville == true && pays == true && telephone == true && email == true && question == true) {
                    $('#noSubmit').attr("id", "submit");
                    $('#submit').removeAttr("disabled");         
                }

            }
        });

        //telephone
        $("#submit").blur(function() {
            if($(this).val() == "") {
                 $(this).next().show().html("<img src='templates/images/check-rouge.png''> Merci de bien vouloir saisir votre numero de téléphone");

                 $('#submit').attr("id", "noSubmit");
                 $('#noSubmit').attr("disabled","disabled");
                 telephone = false;
            } else {
                $(this).next().show().html("<img src='templates/images/check-vert.png''>");
                telephone = true;
                if(nom == true && prenom == true && adresse == true && cp == true && ville == true && pays == true && telephone == true && email == true && question == true) {
                    $('#noSubmit').attr("id", "submit");
                    $('#submit').removeAttr("disabled");         
                }

            }
        });

        //email
        $("#submit").blur(function() {
            if($(this).val() == "") {
                 $(this).next().show().html("<img src='templates/images/check-rouge.png''> Merci de bien vouloir saisir votre email");

                 $('#submit').attr("id", "noSubmit");
                 $('#noSubmit').attr("disabled","disabled");
                 email = false;
            } else if (!ck_email.test($(this).val())) {
                $(this).next().show().html("<img src='templates/images/check-rouge.png''>L\'adresse e-mail n'est pas valide.");
                $('#submit').attr("id", "noSubmit");
                 $('#noSubmit').attr("disabled","disabled");
                 mail = false;
            } else {
                $(this).next().show().html("<img src='templates/images/check-vert.png''>");
                email = true;
                if(nom == true && prenom == true && adresse == true && cp == true && ville == true && pays == true && telephone == true && email == true && question == true) {
                    $('#noSubmit').attr("id", "submit");
                    $('#submit').removeAttr("disabled");         
                }

            }
        });

        //question
        $("#submit").blur(function() {
            if($(this).val() == "") {
                 $(this).next().show().html("<img src='templates/images/check-rouge.png''> Merci de bien vouloir saisir votre question");

                 $('#submit').attr("id", "noSubmit");
                 $('#noSubmit').attr("disabled","disabled");
                 question = false;
            } else {
                $(this).next().show().html("<img src='templates/images/check-vert.png''>");
                question = true;
                if(nom == true && prenom == true && adresse == true && cp == true && ville == true && pays == true && telephone == true && email == true && question == true) {
                    $('#noSubmit').attr("id", "submit");
                    $('#submit').removeAttr("disabled");         
                }

            }
        });
    
    $("#submit").click(function() {
        if(!nom || !prenom || !adresse || !cp || !ville || !pays || !telephone || !email || !question) {
            alert("Merci de bien vouloir saisir tous les champs");
            return false;
        }
        return true;
    })
    
});