function setCookie(cname, cvalue, exdays){
    var d = new Date();
    d.setTime(d.getTime()+(exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toDateString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/"; 
}

function almacenamiento(){
    var response = false;
    try{
        console.log ("Se inicia el almacenamiento")
        var nombre = document.getElementById("nombre").value;
        var telefono = document.getElementById("telefono").value;
        var correo = document.getElementById("correo").value;
        var mensaje = document.getElementById("mensaje").value;
        setCookie("nombre", nombre, 10);
        setCookie("telefono", telefono, 10);
        setCookie("correo", correo, 10);
        setCookie("mensaje", mensaje, 10);
        sessionStorage.setItem("nombre", nombre);
        sessionStorage.setItem("telefono", telefono);
        sessionStorage.setItem("correo", correo);
        sessionStorage.setItem("mensaje", mensaje);
        localStorage.setItem("nombre", nombre);
        localStorage.setItem("telefono", telefono);
        localStorage.setItem("correo", correo);
        localStorage.setItem("mensaje", mensaje);
        console.log('info almacenada correctamente');      
        response = true;
    } catch(error){
        console.error(error);
    }
    return response;
}
function validacion(){
    
    console.log ("Se inicia el validacion")
        var nombre = document.getElementById("nombre").value;
        var telefono = document.getElementById("telefono").value;
        var correo = document.getElementById("correo").value;
        var mensaje = document.getElementById("mensaje").value;
        console.log('Se finaliza el validacion');        
    if (nombre && telefono && correo && mensaje !== ""){
        window.alert("informacion almacenada correctamente");
    }else{
        window.alert("Por favor llene todos los campos requeridos");
    }
}

const observer = new IntersectionObserver((entries) =>{
    entries.forEach((entry) =>{
        console.log(entry)
        if(entry.isIntersecting){
            entry.target.classList.add("show")
        }
    });
});

const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el)=>observer.observe(el));