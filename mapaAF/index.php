<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div id="map">
        <img src="./imagens/mapa-alto-feliz.png" alt="">
    </div>
    <div id="info">
        <h2>Informações do Ponto Turístico</h2>
        <p id="nomePonto"></p>
        <img id="imagemPonto" src="" alt="Imagem do Ponto Turístico">
        <p id="descricaoPonto"></p>
    </div>
    <script src="script.js"></script>
</body>
</html>
<script>
const pontosTuristicos = [
    { nome: "Ponto 1", imagem: "ponto1.jpg", descricao: "Descrição do Ponto 1" },
    { nome: "Ponto 2", imagem: "ponto2.jpg", descricao: "Descrição do Ponto 2" },
    // Adicione mais pontos turísticos aqui
];

const infoNome = document.getElementById("nomePonto");
const infoImagem = document.getElementById("imagemPonto");
const infoDescricao = document.getElementById("descricaoPonto");

pontosTuristicos.forEach((ponto) => {
    const elementoPonto = document.createElement("div");
    elementoPonto.className = "ponto-turistico";
    elementoPonto.textContent = ponto.nome;

    elementoPonto.addEventListener("mouseover", () => {
        infoNome.textContent = ponto.nome;
        infoImagem.src = ponto.imagem;
        infoDescricao.textContent = ponto.descricao;
    });

    document.getElementById("map").appendChild(elementoPonto);
});
</script>

