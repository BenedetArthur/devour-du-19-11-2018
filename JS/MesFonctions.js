function connexionRegion(event) 
{
    var userName = $("#login").val();
    console.log(userName);
$.ajax
(
    {
        type:"post",
        url:"index.php/Index_GestionRegion/Connexion",
        data:{login: userName,},
        success:function(data)
        {
            $("#regions").empty();
            $("#regions").append(data);
        },
        error:function()
        {
            alert("Erreur sur la connexion");
        }
    }
);
}

function AfficherVilles(idRegion)
{
    $.ajax(
    {
        type:"get",
        url:"index.php/Index_GestionRegion/AfficherlesVilles",
        data:"idRegion="+idRegion,
        success:function(data)
        {
            $('#villes').empty();
            $('#villes').append(data);
        },
        error:function(data)
        {
            alert('Erreur sur les villes ');
            console.log(data);
        }
    }
    );
}

function AjouterNote()
{
    var tabVilles= Array();
    var tabVote= Array();

    $('input[type=checkbox]').each(
        function(){
            tabVilles.push($(this).val());
            tabVote.push($(this).is(":checked"));
        }
    );
    $.ajax(
        {
            type:"get",
            url:"index.php/Index_GestionRegion/AjouterNotes",
            data:"tabVi="+tabVilles+"&tabVo="+tabVote,
            sucess: function(){},
            error: function()
        {
            alert("Erreur sur la mise à jour des notes");
        }
        }
        );
}