<?php if(!class_exists('Rain\Tpl')){exit;}?>    <header>
        <nav class="barra">
            <h1 class="logo">
                <a href="/"><span class="icono-cup"></span></a>
                CUP
            </h1>
            <div class="menu1" id="menu1">
                <ul>
                    <li><a href="/membros">MEMBROS</a></li>
                    <li><a href="/projetos">PROJETOS</a></li>
                    <li><a href="#" id="drop1">MAIS</a></li>
                </ul>
            </div>

            <div class="pesquisa-login">
                <a href="#" id="pesquisar"><span class="icono-search"></span></a>
                <a href="#"><span class="icono-user" id="login"></span></a>
            </div>
            <div class="link-responsivo">
                <a href="#"><span class="icono-user" id="login2"></span></a>
            </div>
        </nav>
        <div class="submenu1" id="submenu1">
            <ul>
                <li>
                    <ul>
                        <li><h4 class="titulo2">COMUNIDADE</h4></li>
                        <li><a href="mercado.html">Mercado</a></li> 
                        <li><a href="eventos.html">Eventos</a></li>
                        <li><a href="videos.html">Videos</a></li>
                    </ul>
                </li>
                <li>
                    <ul>
                        <li><h4 class="titulo2">PARTICIPE</h4></li>
                        <li><a href="reporte.html">Reporte um Bug</a></li>
                        <li><a href="foruns.html">Fóruns</a></li>
                        <li><a href="listas.html">Listas de Correspondencias</a></li>
                    </ul>
                </li>
                <li>
                    <ul>
                        <li><h4 class="titulo2">GRUPOS DE TRABALHO</h4></li>
                        <li><a href="internet.html">Internet das Coisas</a></li>
                        <li><a href="ciencia.html">Ciencia</a></li>
                        <li><a href="suporte-longo.html">Suporte de Longo Termo</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="pesquisar-caixa">
            <input type="search" id="pesquisar-campo"><button class="b b-vermelho">Pesquisar</button>
        </div>
        <div class="pop-login esquerda" id="pop-login">
            <div class="linha">
                <div class="c c12 direita">
                    <button class="b b-vermelho" id="login1">X</button>
                </div>
            </div>
            <div class="linha">
                <div class="c c6">
                    <h2 class="titulo2">Crie Seu Login</h2>
                    <form class="">
                        <label for="email-cadastro">Informe Seu Email</label>
                        <input type="email" name="email-cadastro" id="email-cadastro">
                        <label for="senha-cadastro">Crie Uma Senha</label>
                        <input type="password" name="senha-cadastro" id="senha-cadastro">
                        <label for="senha-cadastro-repita">Repita Sua Senha</label>
                        <input type="password" name="senha-cadastro-repita" id="    senha-cadastro-repita">
                        <input type="submit" name="cadastrar" value="Cadastrar" class="b b-vermelho">
                    </form>
                </div>
                <div class="c c6">
                    <h2 class="titulo2">Faça Login</h2>
                    <form class="formulario">
                        <label for="email-login">Email</label>
                        <input type="email" id="email-login" name="email-login">
                        <label for="senha-login">Senha</label>
                        <input type="password" name="senha-login" id="senha-login">
                        <input type="submit" name="enviar" value="Login" class="b b-padrao">
                    </form>
                </div>
            </div>
        </div>
            
    </header>