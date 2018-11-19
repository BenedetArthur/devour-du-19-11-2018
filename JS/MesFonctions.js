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
    numRegion=idRegion;
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
        error:function()
        {
            alert('Erreur sur les villes ');
        }
    }
    );
}

function AjouterNote()
{

}