function onChange() {
                const password = document.querySelector('input[name=pass]');
                const confirm = document.querySelector('input[name=passconfirm]');
                if (confirm.value === password.value) {
                    confirm.setCustomValidity('');
                } else {
                    confirm.setCustomValidity('Passwords do not match');
                }
                }
            function validaForm() { 
            if (document.registr.pass.value.length < 8) {
                alert("Inserire una password di almeno 8 caratteri"); 
            return false; 
            }
            if (document.registr.nome.value=="") { 
            alert("Inserire nome"); 
            return false; 
            }  
            if (document.registr.cognome.value=="") { 
            alert("Inserire cognome"); 
            return false; 
            }
            if (document.registr.mail.value=="") { 
            alert("Inserire email"); 
            return false; 
            }
            if (document.registr.telefono.value=="") { 
            alert("Inserire numero di telefono"); 
            return false; 
            }
            if (document.registr.telefono.value!="") {
                var v=parseInt(document.registr.telefono.value); 
                if (isNaN(v)) { 
                alert("Il numero di telefono deve essere un numero"); 
                return false; 
                }  
            }
            } 