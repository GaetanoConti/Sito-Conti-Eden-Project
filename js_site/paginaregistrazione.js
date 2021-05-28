function onChange() {
                const password = document.querySelector('input[name=pass]');
                const confirm = document.querySelector('input[name=passconfirm]');
                if (confirm.value === password.value) {
                    confirm.setCustomValidity('');
                } else {
                    confirm.setCustomValidity('Le due password non corrispondono');
                }
                }
            function validaForm() { 
            if (document.registr.pass.value.length < 8) {
                alert("Inserire una password di almeno 8 caratteri"); 
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