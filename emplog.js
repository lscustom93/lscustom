function validate() {
 
    var a = document.getElementById("mdp").value;
    var b = document.getElementById("confirm_mdp").value;

    if (a == b) {
        alert("Les mots de passe correspondent.");
        return false; }