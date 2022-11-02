function searchProduct(name) {
    let produtoExiste = false;
    let produtos = document.getElementsByClassName('index-product');

    for (let i = 0; i < produtos.length; i++){
        produtos[i].style.display = "none";
    }

    for (let i = 0; i < produtos.length; i++){
        if (produtos[i].getAttribute("key") === name){
            produtos[i].style.display = "block";
            produtoExiste = true;
        }
    }

    if (!produtoExiste) {
        alert("Este produto não foi encontrado.");
    }

}

function showAllProducts() {
    let produtos = document.getElementsByClassName('index-product');

    for (let i = 0; i < produtos.length; i++){
        produtos[i].style.display = "block";
    }
}