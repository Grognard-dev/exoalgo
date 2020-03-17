function nullornot(){
    var form = document.getElementById('form');
    var nullornot = document.getElementById('nullornot');
    if(form.value == ""){
        nullornot.innerHTML = 'remplir le formulaire';
        return false;
    } else{
        nullornot.innerHTML = 'formulaire remplie';
        return false;
    }
}










