<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div id="map">
        <img src="./imagens/novoMapa.png" class="imagemMapa" alt="">
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
        descricao: "Entrada na cidade, visão do letreiro de Alto Feliz juntamente da igreja Paroquial Santo Ignácio.",
        mapLink: "https://maps.app.goo.gl/PBMwtRn2PQnWCdtY7" 
    },
    { 
        nome: "Vinícola Don Guerino", 
        imagem: "./imagens/donGuerino.png", 
        descricao: "A Vinícola Don Guerino foi idealizada pelo proprietário Osvaldo Motter e família, unindo paixão, qualidade de seus produtos, as melhores técnicas de elaboração e uma linda estrutura, que encanta seus visitantes.",
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
        descricao: "Bar, Lancheria e Padaria.",
        mapLink: "https://maps.app.goo.gl/cpUCxVMdg8Cmxxxp9" 
    },
    { 
        nome: "Recanto da Cascata", 
        imagem: "./imagens/recantoCascata.jpg", 
        descricao: "Bar e Lancheria Recanto da Cascata.",
        mapLink: "https://maps.app.goo.gl/T2FNT3zKQdwCwL5S8" 
    },
    { 
        nome: "Império Lanches", 
        imagem: "./imagens/imperioLanches.jpg", 
        descricao: "Império Lanches.",
        mapLink: "https://maps.app.goo.gl/YkBVLChy9eTZqGeP8" 
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
        descricao: "Local de fácil acesso, no caminho de Feliz para Alto Feliz. Essa cascata é um capricho da natureza antes de entrar na cidade de Alto Feliz. Uma bela paisagem de boas vindas..",
        mapLink: "https://maps.app.goo.gl/Qau591iMY2HyjYhS9"
    },
    { 
        nome: "Cascata Arroio Jaguar", 
        imagem: "./imagens/cascataArroioJaguar.jpeg", 
        descricao: "Um lugar incrível no interior do município, um destino exuberante, perfeito para visitar em família, capturar aquelas imagens legais e também poder nadar.",
        mapLink: "https://maps.app.goo.gl/i6BBviKMNwPM47zR7"
    },
    { 
        nome: "Cascata dos Bugres", 
        imagem: "./imagens/cascataArroioAlegre.jpeg", 
        descricao: "Os bugres, nada mais eram que os índios que vagavam por serras e vales gaúchos antes da chegada dos europeus. Dando assim esse nome para a cascata que contém uma espécie de caverna atrás da queda de água.",
        mapLink: "https://maps.app.goo.gl/DznTVA3LyMB4mpSf7"
    },
    { 
        nome: "Encosta da Palmeira", 
        imagem: "./imagens/encostaPalmeira.jpg", 
        descricao: "Morro Esconsta da Palmeira com uma ampla visão para o município.",
        mapLink: "https://maps.app.goo.gl/Bp6AFb8b3863keiW9"
    },
    { 
        nome: "Hotel Lanfredi", 
        imagem: "./imagens/hotelLanfredi.jpeg", 
        descricao: "Construção histórica com arquitetura típica alemã na entrada da cidade.",
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

