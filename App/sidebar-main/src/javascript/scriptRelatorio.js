// Script para criar o Relatorio nominal EM PDF...
const btnGenerate = document.querySelector("#generate-pdf");

btnGenerate.addEventListener("click", () => {
    const content = document.querySelector("#content");

    const novaData = new Date();

    const options = {
        margin: [10, 10, 10, 10],
        filename: "Relatorio Nominal - " + novaData.toLocaleDateString('pt-BR') + ".pdf",
        html2canvas: { scale: 2 },
        jsPDF: { unit: "mm", format: "a4", orientation: "portrait" },
    };

    html2pdf().set(options).from(content).save();

})

// Script para criar o Relatorio quantitativo EM PDF...
const btnGenerate2 = document.querySelector("#generate-pdf2");

btnGenerate2.addEventListener("click", () => {
    const content = document.querySelector("#content");

    const novaData = new Date();

    const options = {
        margin: [10, 10, 10, 10],
        filename: "Relatorio Quantitativo - " + novaData.toLocaleDateString('pt-BR') + ".pdf",
        html2canvas: { scale: 2 },
        jsPDF: { unit: "mm", format: "a4", orientation: "portrait" },
    };

    html2pdf().set(options).from(content).save();
});
