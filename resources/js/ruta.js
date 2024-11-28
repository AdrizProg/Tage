import dashboard from './dashboard';
import composteras from './composteras';
import compostera from './composteraSola';
import registros from './registros';

let currentHash = "";

export default function pintar() {
    const hash = window.location.href; // Obtiene el fragmento actual (#catalogo)
    // console.log(hash)

    // Evitar procesar la misma URL dos veces
    if (hash === currentHash) {
        return;
    }
    currentHash = hash; // Actualiza el hash actual

    if (hash.includes("#composteras")) {
        composteras();
    } else if (hash.includes("#compostera")) {
        compostera(hash.slice(-1));
    } else if (hash.includes("#registros")) {
        registros();
    } else if (hash.includes("/dashboard")) {
        dashboard();
    }
}