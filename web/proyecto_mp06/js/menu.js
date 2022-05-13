function activar (nom){
    let todos=document.querySelectorAll(".men");
    for (let i = 0; i < todos.length; i++) {
        todos[i].classList.remove('active');
    }
    resultado=".".concat(nom);
    let nombre=document.querySelector(resultado);
    nombre.classList.add("active");
}