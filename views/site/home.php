<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loja_olinetecnomais - Os Melhores Smartphones</title>
    <style>
        /* Reset e Estilos Gerais */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f4f6f9;
            color: #333;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* Cabeçalho / Navbar */
        header {
            background-color: #0f172a;
            color: #fff;
            padding: 1rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: #38bdf8;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 20px;
        }

        .nav-links a:hover {
            color: #38bdf8;
            transition: 0.3s;
        }

        .carrinho-btn {
            background-color: #38bdf8;
            color: #0f172a;
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: bold;
        }

        /* Hero Banner */
        .hero {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            color: #fff;
            padding: 80px 5%;
            text-align: center;
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .hero p {
            font-size: 1.2rem;
            color: #94a3b8;
            margin-bottom: 25px;
        }

        .btn-principal {
            background-color: #2563eb;
            color: #fff;
            padding: 12px 30px;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: bold;
            display: inline-block;
            transition: 0.3s;
        }

        .btn-principal:hover {
            background-color: #1d4ed8;
        }

        /* Seção de Produtos */
        .container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 0 20px;
        }

        .titulo-secao {
            text-align: center;
            font-size: 2rem;
            margin-bottom: 40px;
            color: #0f172a;
        }

        .grid-produtos {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .card-produto {
            background-color: #fff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-produto:hover {
            transform: translateY(-5px);
        }

        .img-container {
            background-color: #e2e8f0;
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #64748b;
            font-weight: bold;
        }

        .info-produto {
            padding: 20px;
        }

        .info-produto h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .preco-antigo {
            text-decoration: line-through;
            color: #94a3b8;
            font-size: 0.9rem;
        }

        .preco {
            font-size: 1.5rem;
            color: #16a34a;
            font-weight: bold;
            margin: 5px 0 15px 0;
        }

        .btn-comprar {
            width: 100%;
            background-color: #0f172a;
            color: #fff;
            border: none;
            padding: 10px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-comprar:hover {
            background-color: #38bdf8;
            color: #0f172a;
        }

        /* Rodapé */
        footer {
            background-color: #0f172a;
            color: #94a3b8;
            text-align: center;
            padding: 30px;
            margin-top: 60px;
        }
    </style>
</head>
<body>

    <!-- Cabeçalho -->
    <header>
        <div class="logo">loja_olinetecnomais</div>
        <ul class="nav-links">
            <li><a href="#">Início</a></li>
            <li><a href="#">Smartphones</a></li>
            <li><a href="#">Acessórios</a></li>
            <li><a href="#">Contato</a></li>
        </ul>
        <a href="#" class="carrinho-btn">🛒 Carrinho (0)</a>
    </header>

    <!-- Banner Principal -->
    <section class="hero">
        <h1>O Smartphone Ideal para Você</h1>
        <p>As melhores marcas com garantia, suporte e entrega rápida para todo o Brasil.</p>
        <a href="#produtos" class="btn-principal">Ver Promoções</a>
    </section>

    <!-- Seção de Produtos -->
    <div class="container" id="produtos">
        <h2 class="titulo-secao">Lançamentos & Destaques</h2>
        
        <div class="grid-produtos">
            
            <!-- Produto 1 -->
            <div class="card-produto">
                <div class="img-container">Foto do Smartphone 1</div>
                <div class="info-produto">
                    <h3>TecnoPhone Pro Max</h3>
                    <p class="preco-antigo">R$ 3.499,00</p>
                    <p class="preco">R$ 2.899,00</p>
                    <button class="btn-comprar">Comprar Agora</button>
                </div>
            </div>

            <!-- Produto 2 -->
            <div class="card-produto">
                <div class="img-container">Foto do Smartphone 2</div>
                <div class="info-produto">
                    <h3>TecnoPhone Lite</h3>
                    <p class="preco-antigo">R$ 1.899,00</p>
                    <p class="preco">R$ 1.399,00</p>
                    <button class="btn-comprar">Comprar Agora</button>
                </div>
            </div>

            <!-- Produto 3 -->
            <div class="card-produto">
                <div class="img-container">Foto do Smartphone 3</div>
                <div class="info-produto">
                    <h3>TecnoPhone Ultra Z</h3>
                    <p class="preco-antigo">R$ 5.299,00</p>
                    <p class="preco">R$ 4.599,00</p>
                    <button class="btn-comprar">Comprar Agora</button>
                </div>
            </div>

            <!-- Produto 4 -->
            <div class="card-produto">
                <div class="img-container">Foto do Smartphone 4</div>
                <div class="info-produto">
                    <h3>TecnoPhone Gamer X</h3>
                    <p class="preco-antigo">R$ 3.999,00</p>
                    <p class="preco">R$ 3.299,00</p>
                    <button class="btn-comprar">Comprar Agora</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Rodapé -->
    <footer>
        <p>&copy; 2026 loja_onlinetecnomais. Todos os direitos reservados.</p>
    </footer>

</body>
</html>