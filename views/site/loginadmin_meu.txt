<form action="#" method="POST">
            <div class="input-group">
                <label for="username">Login</label>
                <input type="text" id="username" name="username" placeholder="Digite seu login" required>
            </div>
            
            <div class="input-group">
                <label for="password">Senha</label>
                <div class="password-wrapper">
                    <input type="password" id="password" name="password" placeholder="Digite sua senha" required>
                    <!-- O type="button" impede que este botão envie o formulário -->
                    <button type="button" class="toggle-password" id="togglePassword">Mostrar</button>
                </div>
            </div>
            
            <button type="submit" class="btn-submit">Entrar</button>
        </form>