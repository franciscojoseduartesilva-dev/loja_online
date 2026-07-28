<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecnomais Standby | Em Construção</title>
    <!-- Google Fonts & FontAwesome para ícones -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: #0b0f19;
            color: #f3f4f6;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow-x: hidden;
        }

        /* Efeito de Fundo Tecnológico */
        .bg-glow {
            position: absolute;
            width: 400px;
            height: 400px;
            background: linear-gradient(135deg, #0066ff 0%, #00f2fe 100%);
            filter: blur(150px);
            border-radius: 50%;
            z-index: -1;
            top: -100px;
            right: -100px;
            opacity: 0.4;
        }

        header {
            padding: 2rem;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            letter-spacing: 1px;
            color: #ffffff;
        }

        .logo span {
            color: #00f2fe;
        }

        main {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 2rem 1rem;
            max-width: 800px;
            margin: 0 auto;
        }

        .badge {
            background: rgba(0, 242, 254, 0.1);
            color: #00f2fe;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            border: 1px solid rgba(0, 242, 254, 0.3);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        h1 {
            font-size: clamp(2.2rem, 5vw, 3.5rem);
            font-weight: 700;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        h1 span {
            background: linear-gradient(135deg, #0066ff 0%, #00f2fe 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        p {
            font-size: 1.1rem;
            color: #9ca3af;
            margin-bottom: 2.5rem;
            line-height: 1.6;
        }

        /* Formulário de Inscrição / Alerta */
        .subscribe-box {
            display: flex;
            gap: 10px;
            width: 100%;
            max-width: 450px;
            margin-bottom: 2rem;
        }

        .subscribe-box input {
            flex: 1;
            padding: 0.9rem 1.2rem;
            border-radius: 8px;
            border: 1px solid #1f2937;
            background: #111827;
            color: #fff;
            outline: none;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .subscribe-box input:focus {
            border-color: #00f2fe;
        }

        .subscribe-box button {
            padding: 0.9rem 1.5rem;
            border-radius: 8px;
            border: none;
            background: linear-gradient(135deg, #0066ff 0%, #00f2fe 100%);
            color: #fff;
            font-weight: 600;
            cursor: pointer;
            transition: opacity 0.3s;
        }

        .subscribe-box button:hover {
            opacity: 0.9;
        }

        /* Redes Sociais / Contato */
        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 1rem;
        }

        .social-icons a {
            width: 45px;
            height: 45px;
            background: #111827;
            border: 1px solid #1f2937;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #f3f4f6;
            font-size: 1.2rem;
            text-decoration: none;
            transition: all 0.3s;
        }

        .social-icons a:hover {
            background: #00f2fe;
            color: #0b0f19;
            border-color: #00f2fe;
            transform: translateY(-3px);
        }

        footer {
            padding: 1.5rem;
            text-align: center;
            font-size: 0.9rem;
            color: #6b7280;
            border-top: 1px solid #1f2937;
        }

        @media (max-width: 600px) {
            .subscribe-box {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

    <div class="bg-glow"></div>

    <header>
        <div class="logo">TECNOmais <span>Standby</span></div>
    </header>

    <main>
        <div class="badge">
            <i class="fa-solid fa-microchip"></i> Nova Experiência Tecnológica
        </div>

        <h1>Estamos preparando <span>algo incrível</span> para você!</h1>
        
        <p>A <strong>Tecnomais Standby</strong> está chegando com as melhores soluções, gadgets e inovações do mercado. Inscreva-se abaixo para ser o primeiro a saber quando lançarmos e garantir ofertas exclusivas.</p>

        <form class="subscribe-box" onsubmit="event.preventDefault(); alert('Obrigado! Em breve entraremos em contato com novidades.');">
            <input type="email" placeholder="Digite seu melhor e-mail" required>
            <button type="submit">Avise-me</button>
        </form>

        <div class="social-icons">
            <a href="#" title="WhatsApp"><i class="fa-brands fa-whatsapp"></i></a>
            <a href="#" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" title="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
    </main>

    <footer>
        <p>&copy; 2026 Tecnomais Standby. Todos os direitos reservados.</p>
    </footer>

</body>
</html>