<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div id="map">
        <img src="./imagens/mapaAF.png" class="imagemMapa" alt="">
    </div>
    <div id="info">
        <h2>Ponto Turístico</h2>
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
        nome: "Chegada na Cidade", 
        imagem: "./imagens/chegadaCidade.jpg", 
        descricao: "Entrada na cidade, visão do letreiro de Alto Feliz juntamente da igreja Paroquial Santo Ignácio",
        mapLink: "https://maps.app.goo.gl/PBMwtRn2PQnWCdtY7" 
    },
    { 
        nome: "Vinícola Don Guerino", 
        imagem: "./imagens/donGuerino.png", 
        descricao: "Vinícola Don Guerino",
        mapLink: "https://maps.app.goo.gl/kit4L3GsLn2Y11mb9" 
    },
    { 
        nome: "Cervejaria Uffenberg", 
        imagem: "./imagens/cervejariaUffenberg.jpeg", 
        descricao: "Produz Cervejas Artesanais de alta qualidade, possuindo um PUB onde servem 8 estilos de cervejas nas torneiras e petiscos diversos. Dispõe da possibilidade para aquisição das mesmas, em embalagens próprias do estabelecimento conforme a preferência do cliente, podendo haver visitação a fábrica mediante agendamento antecipado.",
        mapLink: "https://maps.app.goo.gl/DuScfVEDZjcspNrs6" 
    },
    { 
        nome: "Backsteinhaus", 
        imagem: "./imagens/backsteinhaus.jpeg", 
        descricao: "Um Lugar novo para curtir com a família e amigos!",
        mapLink: "https://maps.app.goo.gl/cpUCxVMdg8Cmxxxp9" 
    },
    { 
        nome: "Viveiro de Mudas Freiberger", 
        imagem: "./imagens/viveirosFreiberger.jpg", 
        descricao: "O Viveiro de Mudas Freiberger e Andrioli conquistou destaque com 3º Lugar no conjunto de Variedades. ’’Esse 3º lugar no conjunto de variedades mostra que realmente vale a pena sim todo esforço e trabalho realizado durante um ano todo e sim, estamos muito felizes com tudo isso que está acontecendo.’’ ",
        mapLink: "https://maps.app.goo.gl/rq9W44iyuBLVRe946" 
    },
    { 
        nome: "Cascata de Alto Feliz", 
        imagem: "./imagens/cascataAltoFeliz.jpeg", 
        descricao: "Linda cascata encontrada no caminho à Alto Feliz.",
        mapLink: "https://maps.app.goo.gl/Qau591iMY2HyjYhS9"
    },
    { 
        nome: "Cascata Arroio Jaguar", 
        imagem: "./imagens/cascataArroioJaguar.jpeg", 
        descricao: "Cascata Arroio Jaguar.",
        mapLink: "https://maps.app.goo.gl/i6BBviKMNwPM47zR7"
    },
    { 
        nome: "Cascata dos Bugres", 
        imagem: "./imagens/cascataArroioAlegre.jpeg", 
        descricao: "Cascata dos Bugres.",
        mapLink: "https://maps.app.goo.gl/DznTVA3LyMB4mpSf7"
    },
    { 
        nome: "Encosta da Palmeira", 
        imagem: "./imagens/encostaPalmeira.jpg", 
        descricao: "Morro Esconsta da Palmeira.",
        mapLink: "https://maps.app.goo.gl/Bp6AFb8b3863keiW9"
    },
    { 
        nome: "Hotel Lanfredi", 
        imagem: "./imagens/hotelLanfredi.jpeg", 
        descricao: "Hotel Lanfredi.",
        mapLink: "https://maps.app.goo.gl/S4DuTQT2QtVDsETV6"
    },
    { 
        nome: "Sítio Paraíso da Terra", 
        imagem: "./imagens/sitioParaiso.jpeg", 
        descricao: "Área com trilhas e cachoeiras para Ecoturismo. Possui uma casa antiga restaurada para locação por diária. A propriedade tem como objetivo a preservação de ecossistemas naturais de grande relevância ecológica e beleza cênica, possibilitando o desenvolvimento de atividades educativas e interpretação ambiental, de recreação em contato com a natureza, fomentando o Turismo ecológico.",
        mapLink: "https://maps.app.goo.gl/V49KZxmGbCk1qj8h6"
    }
];


const infoNome = document.getElementById("nomePonto");
const infoImagem = document.getElementById("imagemPonto");
const infoDescricao = document.getElementById("descricaoPonto");

pontosTuristicos.forEach((ponto) => {

    const linkPontoTuristico = document.createElement("a");
    linkPontoTuristico.href = ponto.mapLink;

    const elementoPonto = document.createElement("div");
    elementoPonto.className = "ponto-turistico";

    const nomePonto = document.createElement("p");
    nomePonto.textContent = ponto.nome;
    elementoPonto.appendChild(nomePonto);

    linkPontoTuristico.appendChild(elementoPonto);
    
    document.getElementById("map").appendChild(linkPontoTuristico);

    linkPontoTuristico.addEventListener("mouseover", () => {
        infoNome.textContent = ponto.nome;
        infoImagem.src = ponto.imagem;
        infoDescricao.textContent = ponto.descricao;
    });
});


</script>

