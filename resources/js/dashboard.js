const composteras = document.querySelector("#contenedorComposteras");

console.log(composteras);
export default function dashboardView() {
    document.querySelector("main").innerHTML = composteras.outerHTML;
};