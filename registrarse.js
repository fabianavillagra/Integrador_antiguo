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

document.addEventListener("DOMContentLoaded", function() {
    const selectElement = document.querySelector('select[name="txtEdad"]');

    selectElement.addEventListener('change', function() {
        const selectedOption = this.value;

        if (selectedOption === "1" || selectedOption === "2" || selectedOption === "3" || selectedOption === "4") {
            window.location.href = 'registroinfante.html'; // Redirige a registroinfante.html según la opción seleccionada en "Edad"
        }
        // Puedes agregar más condiciones para otras opciones si es necesario
    });
});
