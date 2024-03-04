<?php
    $hour = date('H');

    // Determine the appropriate greeting based on the time of day
    if ($hour < 12) {
        $saudacao = ' um bom dia';
    } elseif ($hour < 18) {
        $saudacao = ' uma boa tarde';
    } else {
        $saudacao = ' uma boa noite';
    }
    

    ?>
        <?php include("header.php") 
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
                    <img src="assets/imagens/logo-ahn.jpeg" class="img-fluid foto-perfil my-5" alt="">
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
                                    Sou Albert desenvolvedor Front-End com conhecimento em HTML, CSS, JavaScript, PHP e também em Frameworks como Bootstrap e Tailwind
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
                                    <div class="col-md-8 col-12 my-3">
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
                                    <div class="col-md-4 col-12 my-3">
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
            <div class="row">
                <!-- Primeiros 3 projetos -->
                <div class="col-md-4 col-sm-6 link-projetos mb-2">
                    <div class="card">
                        <a class="text-decoration-none" href="https://www.multiclad.com.br/">
                            <div class="card-body">
                                <h5 class="card-title">Multiclad</h5>
                                <p class="card-text">Realizei esse site quando estava na BMA Soluções Digitais</p>
                            </div>
                        </a>
                    </div>
                </div>  
                <div class="col-md-4 col-sm-6 link-projetos mb-2">
                    <div class="card">
                        <a class="text-decoration-none" href="https://www.prizmaq.com.br/">
                            <div class="card-body">
                                <h5 class="card-title">Prizmaq</h5>
                                <p class="card-text">Realizei esse LP(Land Page) quando estava na BMA Soluções Digitais</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 link-projetos mb-2">
                    <div class="card">
                        <a class="text-decoration-none" href="https://www.grupoboschi.com.br/lp2/consorcio2/">
                            <div class="card-body">
                                <h5 class="card-title">Grupo Boschi</h5>
                                <p class="card-text">Realizei esse LP(Land Page) quando estava na BMA Soluções Digitais</p>
                            </div>
                        </a>
                    </div>
                </div>        
            </div>
            <div id="projetos-restantes" class="row d-none link-projetos">
                <div class="col-md-4 col-12 ">
                    <div class="card">
                        <a class="text-decoration-none" href="">
                            <div class="card-body">
                                <h5 class="card-title">Bma Soluções Digitais (LP Sistemas)</h5>
                                <p class="card-text">Descrição do projeto 4.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="card">
                        <a class="text-decoration-none" href="">
                            <div class="card-body">
                                <h5 class="card-title">Projeto 5</h5>
                                <p class="card-text">Descrição do projeto 5.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <div class="card">
                        <a class="text-decoration-none" href="">
                            <div class="card-body">
                                <h5 class="card-title">Projeto 6</h5>
                                <p class="card-text">Descrição do projeto 6.</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Botão "Ver Mais" -->
        <div class="col-md-12 text-center mt-3">
            <button id="ver-mais-menos" class="btn ver-mais">Ver Mais</button>
        </div>
    </section>

</main>
    
<?php include("footer.php") ?>

