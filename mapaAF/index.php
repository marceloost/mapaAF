<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div id="map">
        <img src="./imagens/mapa-alto-feliz.png" class="imagemMapa" alt="">
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
    { 
        nome: "Uffenberg", 
        imagem: "./imagens/cervejariaUffenberg.jpeg", 
        descricao: "Cervejaria no Morro Belo.",
        mapLink: "https://maps.app.goo.gl/DuScfVEDZjcspNrs6" 
    },
    { 
        nome: "Cascata de Alto Feliz", 
        imagem: "./imagens/cascataAltoFeliz.jpeg", 
        descricao: "Linda cascata encontrada no caminho à Alto Feliz.",
        mapLink: "https://maps.google.com/?q=latitude,longitude"
    },
    { 
        nome: "Cascata de Arroio Jaguar", 
        imagem: "./imagens/cascataArroioJaguar.jpeg", 
        descricao: "Cascata Arroio Jaguar.",
        mapLink: "https://maps.google.com/?q=latitude,longitude"
    },
    { 
        nome: "Cascata dos Bugres", 
        imagem: "./imagens/cascataBugres.jpeg", 
        descricao: "Cascata dos Bugres.",
        mapLink: "https://maps.google.com/?q=latitude,longitude"
    }
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

