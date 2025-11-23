<?php 
include 'navbar.php'; ?>

<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container py-5">
        <h2 class="text-center mb-5">Nossos Produtos</h2>

```
    <div class="row g-4">

        <!-- Card 1 -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <img src="imagens/1.png" class="card-img-top" alt="Produto 1">
                <div class="card-body text-center">
                    <h5 class="card-title">Colar Sol e trevo</h5>
                    <p class="card-text">R$ 240,90</p>
                    <a onclick="adicionarCarrinho(1, 'Colar Sol e Trevo', 240.90, 'imagens/1.png')" 
                    class="btn btn-dark w-100" style="cursor:pointer;">
                    Adicionar ao Carrinho
                    </a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <img src="imagens/2.png" class="card-img-top" alt="Produto 2">
                <div class="card-body text-center">
                    <h5 class="card-title">Conjunto Celeste</h5>
                    <p class="card-text">R$ 390,90</p>
                    <button onclick="adicionarCarrinho(2, 'Conjunto Celeste', 390.90, 'imagens/2.png')" 
                    class="btn btn-dark w-100">Adicionar ao Carrinho</button>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <img src="imagens/3.png" class="card-img-top" alt="Produto 3">
                <div class="card-body text-center">
                    <h5 class="card-title">Kit Encanto Celestial</h5>
                    <p class="card-text">R$ 359,90</p>
                    <button onclick="adicionarCarrinho(3, 'Kit Encanto Celestial', 359.90, 'imagens/3.png')" 
                    class="btn btn-dark w-100">Adicionar ao Carrinho</button>
                </div>
            </div>
        </div>

    </div>

    <div class="row g-4 mt-4">

        <!-- Card 4 -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <img src="imagens/4.png" class="card-img-top" alt="Produto 4">
                <div class="card-body text-center">
                    <h5 class="card-title">Colar Minimalist M</h5>
                    <p class="card-text">R$ 129,90</p>
                    <button onclick="adicionarCarrinho(4, 'Colar Minimalist M', 129.90, 'imagens/4.png')" 
                    class="btn btn-dark w-100">Adicionar ao Carrinho</button>
                </div>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <img src="imagens/5.png" class="card-img-top" alt="Produto 5">
                <div class="card-body text-center">
                    <h5 class="card-title">Argola Unitária</h5>
                    <p class="card-text">R$ 159,90</p>
                    <button onclick="adicionarCarrinho(5, 'Argola Unitária', 159.90, 'imagens/5.png')" 
                    class="btn btn-dark w-100">Adicionar ao Carrinho</button>
                </div>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <img src="imagens/6.png" class="card-img-top" alt="Produto 6">
                <div class="card-body text-center">
                    <h5 class="card-title">Conjunto Coração Radiante</h5>
                    <p class="card-text">R$ 249,90</p>
                    <button onclick="adicionarCarrinho(6, 'Conjunto Coração Radiante', 249.90, 'imagens/6.png')" 
                    class="btn btn-dark w-100">Adicionar ao Carrinho</button>
                </div>
            </div>
        </div>

    </div>

    <div class="row g-4 mt-4">

        <!-- Card 7 -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <img src="imagens/7.png" class="card-img-top" alt="Produto 7">
                <div class="card-body text-center">
                    <h5 class="card-title">Trio Brilho Supremo</h5>
                    <p class="card-text">R$ 349,90</p>
                    <button onclick="adicionarCarrinho(7, 'Trio Brilho Supremo', 349.90, 'imagens/7.png')" 
                    class="btn btn-dark w-100">Adicionar ao Carrinho</button>
                </div>
            </div>
        </div>

        <!-- Card 8 -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <img src="imagens/8.png" class="card-img-top" alt="Produto 8">
                <div class="card-body text-center">
                    <h5 class="card-title">Anéis Unitários</h5>
                    <p class="card-text">R$ 109,90</p>
                    <button onclick="adicionarCarrinho(8, 'Anéis Unitários', 109.90, 'imagens/8.png')" 
                    class="btn btn-dark w-100">Adicionar ao Carrinho</button>
                </div>
            </div>
        </div>

        <!-- Card 9 -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0">
                <img src="imagens/9.png" class="card-img-top" alt="Produto 9">
                <div class="card-body text-center">
                    <h5 class="card-title">Pulseiras Unitárias</h5>
                    <p class="card-text">R$ 179,90</p>
                    <button onclick="adicionarCarrinho(9, 'Pulseiras Unitárias', 179.90, 'imagens/9.png')" 
                    class="btn btn-dark w-100">Adicionar ao Carrinho</button>
                </div>
            </div>
        </div>

    </div>
</div>

<footer class="bg-light text-dark py-4 mt-5">
    <div class="container text-center">
        <h5 class="fw-bold mb-3">NA•FER</h5>
        <p class="mb-3">Elegância que fala por você.</p>

        <div class="d-flex justify-content-center gap-4 mb-3">
            <a href="#" class="text-dark text-decoration-none">Quem Somos</a>
            <a href="#" class="text-dark text-decoration-none">Produtos</a>
            <a href="#" class="text-dark text-decoration-none">Contato</a>
        </div>

        <p class="small mb-0">© 2025 NA•FER — Todos os direitos reservados.</p>
    </div>
</footer>

<script>
function adicionarCarrinho(id, nome, preco, img) {
        window.location.href = `carrinho.php?id=${id}&nome=${encodeURIComponent(nome)}&preco=${preco}&img=${img}`;
}
</script>
```

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>
