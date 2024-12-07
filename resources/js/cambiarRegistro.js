export default function mostrarRegistros(e) {
    const antesForm = document.getElementById('formularios');
    const formularioAntes = document.querySelector("#formularioAntes").outerHTML;
    const formularioDurante = document.querySelector("#formularioDurante").outerHTML;
    const formularioDespues = document.querySelector("#formularioDespues").outerHTML;

    if (e == 1) {
        antesForm.innerHTML = formularioAntes;
    } else if (e == 2) {
        antesForm.innerHTML = formularioDurante;
    } else if (e == 3) {
        antesForm.innerHTML = formularioDespues;
    }
}