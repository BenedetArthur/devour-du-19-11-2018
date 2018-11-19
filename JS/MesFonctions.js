function connexion(event) 
{
    var userName = $("#login").value;
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