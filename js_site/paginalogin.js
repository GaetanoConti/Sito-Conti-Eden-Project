
 function validaForm() { 
    if (document.registr.mail.value=="") { 
        alert("Inserire indirizzo email!"); 
    return false; 
    } 
    if (document.registr.pass.value == "") {
        alert("Inserire la password!"); 
    return false; 
    }
}