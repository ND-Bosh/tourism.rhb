function research() 
{
        var x = document.getElementById("search").value;
        if (x=="Mosquée")
        {
            window.open("mosquee.html");
        }
        if (x=="Dafra" || x=="Silure")
        {
            window.open("/dafra.html");
        }
        if ("x"=="guinguette") 
        {
            window.open("guinguette.html");
        }
}
document.getElementById("formulaire").addEventListener("submit",function(e){
    e.preventdefault();
    let hotel=document.getElementById("hotel").value;
    let prenom=document.getElementById("prenom").value;
    alert('Hôtel réservé!!!<br/>Bon sejour à l'Hôtel ',hotel,' M ',prenom);
});