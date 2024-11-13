<?php
    include("config.php");

    $primeiro_nome = ""; // Inicializa a variável para evitar erro se o formulário não for submetido
    $genero = "";        // Inicializa o gênero com vazio
    $tratamento = "";    // Inicializa o tratamento com vazio
    $saudacao = "";      // Inicializa a saudação com vazio

    // Verifica se o formulário foi enviado com método POST e se os campos estão preenchidos
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["name"]) && !empty($_POST["genero"])) {
        $primeiro_nome = htmlspecialchars($_POST["name"]); // Protege contra XSS
        $genero = $_POST["genero"]; // Gênero selecionado pelo usuário

        // Definindo saudação com base na hora do dia
        $hour = date('H');
        if ($hour < 12) {
            $saudacao = 'bom dia';
        } elseif ($hour < 18) {
            $saudacao = 'boa tarde';
        } else {
            $saudacao = 'boa noite';
        }

        // Definindo o tratamento baseado no gênero
        if ($genero == 'o') {
            $tratamento = "Sr. $primeiro_nome";
        } elseif ($genero == 'a') {
            $tratamento = "Sra. $primeiro_nome";
        } else {
            $tratamento = "Sr(a). $primeiro_nome";
        }
    }

    include("header.php");

    // Após definir todas as variáveis, vamos verificar se temos dados para mostrar
    $temDados = ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["name"]) && !empty($_POST["genero"]));

?>

<main class="main">    
    <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="form-container justify-content-center text-center">
                <div class="logo-container">
                    Entre com seu nome
                </div>
                <form class="form" method="POST" action="process_form.php"> <!-- Envia para "process_form.php" -->
                    <div class="form-group">
                        <input type="text" id="name" name="name" placeholder="Digite o seu primeiro nome" required>
                    </div>
                    <div class="form-group my-4">
                        <select class="form-control" id="genero" name="genero" required>
                            <option value="">Selecione gênero</option>
                            <option value="o">Homem</option>
                            <option value="a">Mulher</option>
                            <option value="nao_informar">Prefiro não informar</option>
                        </select>
                        <div class="invalid-feedback">
                            Por favor, selecione um gênero.
                        </div>
                    </div>
                    <button class="form-submit-btn" type="submit">Entrar</button>
                </form>
            </div>
        </div>
    </div>
    <section id="home" class="d-flex align-items-center justify-content-center">
        <div class="container">
            <div class="text-center text-white">
                <h1 id="texto-digitado" class="apresentacao"></h1>
            </div>

            <div class="col-lg-12 text-center seta">
                <div class="my-5">
                    <i class="fa-solid fa-arrow-down-long animated-arrow"></i>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-sobre-mim">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="text-center sobremim my-5">
                        <h1>Sobre mim</h1>
                    </div>
                </div>
                <div class="col-lg-7 col-lg-7 col-sm-12 col-12 sobremim-apresentacao">
                    <div class="my-4">
                        <ul class="pl-0 lista">
                            <li>
                                <b>Nome:</b> Albert Hatakeyama Nabarrete
                            </li>
                            <hr >
                            <li>
                                <b>Idade:</b> 22 anos
                            </li>
                            <hr >
                            <li>
                                <a href="mailto:ahnabarrete@gmail.com" class="text-decoration-none">
                                    <b>Email:</b> ahnabarrete@gmail.com
                                </a>
                            </li>
                            <hr >
                            <li>
                                <b>De:</b> Brasil, São Paulo, Zona Sul
                            </li>
                            <hr>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-lg-5 col-sm-12 col-12">
                    <img src="assets/imagens/img-portfolio1" alt="" class="img-fluid bordas-arredondadas">
                </div>
                <div class="col-lg-12 col-lg-12 col-sm-12 col-12  d-flex justify-content-center mx-auto sobremim-apresentacao">
                    <div class="my-4 p-4">
                        <h1>Eu sou <b>Albert H. Nabarrete</b>, um Desenvolvedor Front-end</h1>
                        <p>
                            Atuo neste setor há três anos e tenho uma verdadeira paixão por criar! Desde sempre, me interessei por tecnologia e, em 2021, comecei a estudar programação, incentivado por meu pai e um familiar que já trabalha na área. Minha jornada começou com a criação de templates, one pages e sites utilizando HTML e CSS. Atualmente, meu objetivo é desenvolver aplicações, Sites, Land Pages e Templates responsivos.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="habilidade">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="text-center habilidades-titulo my-5">
                        <h1>Habilidades</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card mb-4">
                        <div class="card-header  align-items-center">
                            <i class="uil uil-brackets-curly mr-2 text-danger"></i>
                            <h2 class="mb-0">Front-End</h2>
                            <p class="ml-auto text-white"><b>3 anos</b> de experiência</p>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>HTML</span>
                                    <span>90%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar " role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>CSS</span>
                                    <span>80%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar " role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>JavaScript</span>
                                    <span>50%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar " role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="card mb-4">
                        <div class="card-header align-items-center">
                            <i class="uil uil-server mr-2 text-danger"></i>
                            <h2 class="mb-0">Back-End</h2>
                            <p class="ml-auto"><b>1 ano</b> de experiência</p>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>PHP</span>
                                    <span>65%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar " role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <div class="d-flex justify-content-between">
                                    <span>Java</span>
                                    <span>44%</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar " role="progressbar" style="width: 44%;" aria-valuenow="44" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="projetos " id="projetos">
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
            </div>
            <div id="projetos-restantes" class="row d-none link-projetos">
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
</main>
<?php 
    include("footer.php");
?>
 
