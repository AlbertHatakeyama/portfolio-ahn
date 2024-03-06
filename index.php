<?php
 include("config.php");

    $hour = date('H');

    // Determine the appropriate greeting based on the time of day
    if ($hour < 12) {
        $saudacao = ' um bom dia';
    } elseif ($hour < 18) {
        $saudacao = ' uma boa tarde';
    } else {
        $saudacao = ' uma boa noite';
    }
    
    include("header.php") 
?>

<main class="main">
    <section class="bg-white" id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12 py-5">
                    <div class="card bg-white shadow ">
                        <div class="card-body">
                            <h1 class="card-title fw-semibold" id="texto-digitado"></h1>   
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 text-end">
                    <img src="assets/imagens/img-portifolio1.jpg" class="img-fluid foto-perfil my-5" alt="">
                </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sobremim" id="sobremim">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="text-start my-5">
                        <div class="card bg-white shadow ">
                            <div class="card-body ">
                                <h1 class="card-title fw-semibold">Sobre minha pessoa:</h1>
                                <p class="fs-4 text-secondary">
                                    Me chamo Albert, tenho 21 anos e atualmente estou realizando estágio na área de Front-end. Sempre fui admirador pela maneira como a tecnologia funciona e evolui, admirando a funcionalidade e qualidade entregues nos sistemas aos usuários.
                                    <br>
                                    <br>
                                    Acredito que isso economiza tempo e traz agilidade, além de melhorar a experiência do usuário em muitos aspectos.   
                                    <br>
                                    <br>
                                    Sempre foi um entusiasta da tecnologia, admirando a facilidade que ela nos proporciona no nosso dia a dia e nos sistemas que utilizamos, direta ou indiretamente.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="text-center my-5">
                        <div class="card bg-white">
                            <div class="card-body h-100">
                                <h1 class="fw-semibold">Hard e Soft skill</h1>
                                <div class="row">
                                    <div class="col-md-8 col-12 my-3 w-100">
                                        <h2>Hard Skills</h2>
                                        <div class="text-start">
                                            <ul>
                                                <li>Domínio liguagens Front-end</li>
                                                <li>Adaptabilidade e Aprendizado Contínuo</li>
                                                <li>Design de Projetos</li>
                                                <li>Controle de Versão</li>
                                                <li>Lógica de Programação</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-12 my-3 w-100 ">
                                        <h2>Soft Skills</h2>
                                        <div class="text-start">
                                            <ul>
                                                <li>Comunicação</li>
                                                <li>Flexibilidade</li>
                                                <li>Motivação</li>
                                                <li>Trabalho em equipe</li>
                                                <li>Curiosidade</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>]
            </div>
        </div>
    </section>
    <section class="projetos my-5" id="projetos">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="text-center">
                        <h1>Projetos</h1>
                    </div>
                </div>
            </div>
            <div class="row"><!-- Primeiros 3 projetos -->
                <div class="col-md-4 col-sm-6 link-projetos mb-2">
                    <div class="card h-100">
                        <img src="assets/imagens/projetos/multiclad.png" class="img-fluid" alt="">
                        <div class="overlay">
                            <div class="row">
                                <div class="col-md-12 col-12 text-center">
                                    <img src="assets/imagens/linguagens/html-5.png" class="img-fluid" alt="">
                                    <img src="assets/imagens/linguagens/css-3.png"  class="img-fluid"alt="">
                                    <img src="assets/imagens/linguagens/js.png" class="img-fluid" alt="">
                                    <img src="assets/imagens/linguagens/php.png" class="img-fluid" alt="">
                                    <img src="assets/imagens/linguagens/bootstrap.png" class="img-fluid" alt=""> 
                                </div>
                                <div class="col-md-12 text-center">
                                    <button class="btn bg-white my-2">
                                        <a class="text-decoration-none" href="https://www.multiclad.com.br/" target="_blank">Acessar Projeto</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body ">
                            <h5 class="card-title">Projetos 1</h5>
                            <p class="card-text">Realizei esse site quando estava no primeiro estágio</p>
                            <div class="linguagens d-none">
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <img src="assets/imagens/linguagens/html-5.png" class="img-fluid" alt="">
                                        <img src="assets/imagens/linguagens/css-3.png"  class="img-fluid"alt="">
                                        <img src="assets/imagens/linguagens/js.png" class="img-fluid" alt="">
                                        <img src="assets/imagens/linguagens/php.png" class="img-fluid" alt="">
                                        <img src="assets/imagens/linguagens/bootstrap.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-12 col-12">
                                        <button class="btn bg-white my-2">
                                            <a class="text-decoration-none" href="https://www.multiclad.com.br/" target="_blank">Acessar Projeto</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 link-projetos mb-2">
                    <div class="card h-100">
                        <img src="assets/imagens/projetos/prizmaq.png" class="img-fluid" alt="">
                        <div class="overlay">
                            <div class="row">
                                <div class="col-md-12 col-12 text-center">
                                    <img src="assets/imagens/linguagens/html-5.png" class="img-fluid" alt="">
                                    <img src="assets/imagens/linguagens/css-3.png"  class="img-fluid"alt="">
                                    <img src="assets/imagens/linguagens/js.png" class="img-fluid" alt="">
                                    <img src="assets/imagens/linguagens/php.png" class="img-fluid" alt="">
                                    <img src="assets/imagens/linguagens/bootstrap.png" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-12 text-center">
                                    <button class="btn bg-white my-2">
                                        <a class="text-decoration-none" href="https://www.prizmaq.com.br/" target="_blank">Acessar Projeto</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body h-100">
                            <h5 class="card-title">Projetos 2</h5>
                            <p class="card-text">Realizei esse LP(Land Page) quando estava no primeiro estágio</p>
                            <div class="linguagens d-none">
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <img src="assets/imagens/linguagens/html-5.png" class="img-fluid" alt="">
                                        <img src="assets/imagens/linguagens/css-3.png"  class="img-fluid"alt="">
                                        <img src="assets/imagens/linguagens/js.png" class="img-fluid" alt="">
                                        <img src="assets/imagens/linguagens/php.png" class="img-fluid" alt="">
                                        <img src="assets/imagens/linguagens/bootstrap.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn bg-white my-2">
                                            <a class="text-decoration-none" href="https://www.prizmaq.com.br/" target="_blank">Acessar Projeto</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 link-projetos mb-2">
                    <div class="card h-100">
                        <img src="assets/imagens/projetos/grupo_boschi.png" class="img-fluid" alt="">
                        <div class="overlay">
                            <div class="row">
                                <div class="col-md-12 col-12 text-center">
                                    <img src="assets/imagens/linguagens/html-5.png" class="img-fluid" alt="">
                                    <img src="assets/imagens/linguagens/css-3.png"  class="img-fluid"alt="">
                                    <img src="assets/imagens/linguagens/js.png" class="img-fluid" alt="">
                                    <img src="assets/imagens/linguagens/php.png" class="img-fluid" alt="">
                                    <img src="assets/imagens/linguagens/tailwind.svg.png" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-12 text-center">
                                    <button class="btn bg-white my-2">
                                        <a class="text-decoration-none" href="https://www.grupoboschi.com.br/lp2/consorcio/" target="_blank">Acessar Projeto</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body ">
                            <h5 class="card-title">Projetos 3</h5>
                            <p class="card-text">Realizei esse LP(Land Page) quando estava no primeiro estágio</p>
                            <div class="linguagens d-none">
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <img src="assets/imagens/linguagens/html-5.png" class="img-fluid" alt="">
                                        <img src="assets/imagens/linguagens/css-3.png"  class="img-fluid"alt="">
                                        <img src="assets/imagens/linguagens/js.png" class="img-fluid" alt="">
                                        <img src="assets/imagens/linguagens/php.png" class="img-fluid" alt="">
                                        <img src="assets/imagens/linguagens/tailwind.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn bg-white my-2">
                                            <a class="text-decoration-none" href="https://www.grupoboschi.com.br/lp2/consorcio/" target="_blank">Acessar Projeto</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="projetos-restantes" class="row d-none link-projetos">
                <div class="col-md-4 col-sm-6 link-projetos mb-2 ">
                    <div class="card h-100">
                        <img src="assets/imagens/projetos/bma_lp_sistema.png" class="img-fluid" alt="">
                        <div class="overlay">
                            <div class="row">
                                <div class="col-md-12 col-12 text-center">
                                    <img src="assets/imagens/linguagens/html-5.png" class="img-fluid" alt="">
                                    <img src="assets/imagens/linguagens/css-3.png"  class="img-fluid"alt="">
                                    <img src="assets/imagens/linguagens/js.png" class="img-fluid" alt="">
                                    <img src="assets/imagens/linguagens/php.png" class="img-fluid" alt="">
                                    <img src="assets/imagens/linguagens/tailwind.png" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-12 text-center">
                                    <button class="btn bg-white my-2">
                                        <a class="text-decoration-none" href="https://bmasolucoesdigitais.com.br/lp/sistemas/" target="_blank">Acessar Projeto</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body h-100">
                            <h5 class="card-title">Projetos 4</h5>
                            <p class="card-text">Realizei esse LP(Land Page) quando estava no primeiro estágio</p>
                            <div class="linguagens d-none">
                                <div class="row">
                                    <div class="col-md-12 col-12">
                                        <img src="assets/imagens/linguagens/html-5.png" class="img-fluid" alt="">
                                        <img src="assets/imagens/linguagens/css-3.png"  class="img-fluid"alt="">
                                        <img src="assets/imagens/linguagens/js.png" class="img-fluid" alt="">
                                        <img src="assets/imagens/linguagens/php.png" class="img-fluid" alt="">
                                        <img src="assets/imagens/linguagens/tailwind.svg.png" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-12">
                                        <button class="btn bg-white my-2">
                                            <a class="text-decoration-none" href="https://bmasolucoesdigitais.com.br/lp/sistemas/" target="_blank">Acessar Projeto</a>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 link-projetos mb-2">
                    <div class="card h-100">
                        <img src="assets/imagens/projetos/site_em_construcao.jpg" class="img-fluid" alt="">
                         <!--<div class="overlay">
                                <div class="row">
                                    <div class="col-md-12 col-12"
                                        <img src="assets/imagens/linguagens/" class="img-fluid" alt="">
                                        <img src="assets/imagens/linguagens/" class="img-fluid" alt="">
                                        <img src="assets/imagens/linguagens/" class="img-fluid" alt="">
                                        <img src="assets/imagens/linguagens/" class="img-fluid" alt="">
                                        <img src="assets/imagens/linguagens/" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button class="btn bg-white my-2">
                                            <a class="text-decoration-none" href="" target="_blank">Acessar Projeto</a>
                                        </button>
                                    </div>
                                </div>                              
                            </div>-->
                        <div class="card-body">
                            <h5 class="card-title">Projeto 5</h5>
                            <p class="card-text">Em Breve</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 link-projetos mb-2">
                    <div class="card h-100">
                        <img src="assets/imagens/projetos/site_em_construcao.jpg" class="img-fluid" alt="">
                      <!--<div class="overlay">
                            <div class="row">
                                <div class="col-md-12 col-12"
                                    <img src="assets/imagens/linguagens/" class="img-fluid" alt="">
                                    <img src="assets/imagens/linguagens/" class="img-fluid" alt="">
                                    <img src="assets/imagens/linguagens/" class="img-fluid" alt="">
                                    <img src="assets/imagens/linguagens/" class="img-fluid" alt="">
                                    <img src="assets/imagens/linguagens/" class="img-fluid" alt="">
                                </div>
                                <div class="col-md-12 text-center">
                                    <button class="btn bg-white my-2">
                                        <a class="text-decoration-none" href="" target="_blank">Acessar Projeto</a>
                                    </button>
                                </div>
                            </div>
                        </div>-->
                        <div class="card-body">
                            <h5 class="card-title">Projeto 6</h5>
                            <p class="card-text">Em Breve</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Botão "Ver Mais" -->
        <div class="col-md-12 text-center mt-3">
            <button id="ver-mais-menos" class="btn button ver-mais">Ver Mais</button>
        </div>
    </section>
    <section class="habilidades" id="habilidades">
        <div class="container py-5">
                <div class="col-md-12 text-center">
                    <h1>Habilidades</h1>
                </div>
                <div class="row">
                    <div class="col-md-4 col- col-12 h-100 my-2">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-center">Linguagens Front-End</h4>
                                <div class="row">
                                    <div class="col-md-12 col-12 text-center">
                                        <img src="assets/imagens/linguagens/html-5.png" class="img-fluid habilidade-footer" alt="HTML" data-descricao="Essa linguagem tenho 2 anos de experiência.">
                                        <img src="assets/imagens/linguagens/css-3.png" class="img-fluid habilidade-footer" alt="CSS" data-descricao="Essa linguagem tenho 2 anos de experiência.">
                                        <img src="assets/imagens/linguagens/js.png" class="img-fluid habilidade-footer" alt="JavaScript" data-descricao="Essa linguagem tenho 1 ano e 4 meses de experiência.">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col- col-12 h-100 my-2">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-center">Linguagens Back-End</h4>
                                <div class="row ">
                                    <div class="col-md-12 col-12 text-center">
                                        <img src="assets/imagens/linguagens/php.png" class="img-fluid habilidade-footer" alt="PHP" data-descricao="Essa linguagem 2 anos de experiência.">
                                        <img src="assets/imagens/linguagens/python.jpg" class="img-fluid habilidade-footer" alt="Python" data-descricao="Esse frameworks tenho 1 ano de experiência.">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col- col-12 h-100 my-2 ">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title text-center">Framework CSS</h4>
                                <div class="row ">
                                    <div class="col-md-12 col-12 text-center">
                                        <img src="assets/imagens/linguagens/bootstrap.png" class="img-fluid habilidade-footer" alt="Bootstrap" data-descricao="Esse frameworks 2 anos de experiência.">
                                        <img src="assets/imagens/linguagens/tailwind.png" class="img-fluid habilidade-footer" alt="Tailwind CSS" data-descricao="Esse frameworks tenho 1 ano e 3 meses de experiência.">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-12 w-100 mt-3">
                        <div id="descricao-container" class="col-md-6 col-12 fs-2 fw-medium"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include("footer.php") ?>

