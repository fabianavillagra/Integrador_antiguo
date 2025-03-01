const inputs = document.querySelectorAll(".input");

function addcl() {
    let parent = this.parentNode.parentNode;
    parent.classList.add("focus");
}

function remcl() {
    let parent = this.parentNode.parentNode;
    if ((this.value === "" || this.value === null) && this.tagName !== "SELECT") {
        parent.classList.remove("focus");
    }
}

inputs.forEach(input => {
    input.addEventListener("focus", addcl);
    input.addEventListener("blur", remcl);
});

document.getElementById('edadSelect').addEventListener('change', function() {
    var selectedValue = this.value;

    switch (selectedValue) {
        case '1':
            window.location.href = 'primeraetapa.html';
            break;
        case '2':
            window.location.href = 'segundaetapa.html';
            break;
        case '3':
            window.location.href = 'terceraetapa.html';
            break;
        case '4':
            window.location.href = 'cuartaetapa.html';
            break;
        default:
            // Acción por defecto o ningún cambio
            break;
    }
});

