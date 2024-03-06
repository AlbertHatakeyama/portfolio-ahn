<section class="footer">
    <footer class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12 text-white text-center">
                    <h2 class="text-center">Redes Sociais</h2>
                    <div class="row">
                        <div class="col-md-8">
                            <ul class="list-unstyled">
                                <li><i class="fa-brands fa-linkedin"></i><a class="text-decoration-none m-2" href="https://www.linkedin.com/in/albert-hatakeyama-nabarrete-75495622a/">LinkedIn</a></li>
                                <li><i class="fa-brands fa-github"></i><a class="text-decoration-none m-2" href="https://github.com/AlbertHatakeyama">GitHub</a></li>
                                <li><i class="fa-brands fa-whatsapp"></i><a class="text-decoration-none m-2" href="https://api.whatsapp.com/">WhatsApp</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12 text-center">
                    <img src="assets/imagens/logo-ahn.jpeg" class="img fluid" alt="Perfil" id="home">
                </div>
            </div>
        </div>
    </footer>
</section>
</body>
</html>
<script rel="stylesheet" href="assets/js/bootstrap.bundle.min.js"></script>
<script rel="stylesheet" href="assets/js/bootstrap.esm.min.js"></script>
<script rel="stylesheet" href="assets/js/bootstrap.min.js"></script>
<script rel="stylesheet" href="assets/js/custom.js"></script>
<script rel="stylesheet" href="assets/js/holder.min.js"></script>
<script rel="stylesheet" href="assets/js/jquery-3.2.1.slim.min.js"></script>
<script rel="stylesheet" href="assets/js/popper.min.js"></script>
<script rel="stylesheet" defer href="assets/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script>
     // Function to write the sentence
    function writeSentence(sentence, index, element) {
    if (index < sentence.length) {
        // Get the element where the sentence will be written
        const targetElement = document.getElementById(element);

        // Append the character at the current index
        targetElement.textContent += sentence[index];

        // Increment the index and set a delay of 50 milliseconds
        setTimeout(() => writeSentence(sentence, index + 1, element), 70);
    }
    }

    // Call the function with the sentence you want to write and the element ID
    writeSentence("Olá <?php echo $saudacao; ?>, sou Albert desenvolvedor front-end, legal ver você aqui, por favor deixe me apresentar brevemente 👇​", 0, "texto-digitado");
</script>
<script>
    document.getElementById("ver-mais-menos").addEventListener("click", function() {
        var projetosRestantes = document.getElementById("projetos-restantes");
        var botao = document.getElementById("ver-mais-menos");

        if (projetosRestantes.classList.contains("d-none")) {
            projetosRestantes.classList.remove("d-none");
            botao.textContent = "Ver Menos";
        } else {
            projetosRestantes.classList.add("d-none");
            botao.textContent = "Ver Mais";
        }
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const habilidadeImgs = document.querySelectorAll('.habilidade-img');
        const descricaoContainer = document.getElementById('descricao');
        
        habilidadeImgs.forEach(function(img) {
            img.addEventListener('click', function() {
                const descricao = this.getAttribute('data-descricao');
                descricaoContainer.textContent = descricao;
            });
        });
    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    const habilidadeImagens = document.querySelectorAll('.habilidade-footer');
    const descricaoContainer = document.getElementById('descricao-container');

    habilidadeImagens.forEach(imagem => {
        imagem.addEventListener('click', function() {
            exibirDescricao(this.getAttribute('data-descricao'));
        });
    });

    function exibirDescricao(descricao) {
        descricaoContainer.innerHTML = ''; // Limpa qualquer descrição anterior

        const cardDescricao = document.createElement('div');
        cardDescricao.classList.add('card', 'mt-2');

        const cardBody = document.createElement('div');
        cardBody.classList.add('card-body');

        const descricaoText = document.createTextNode(descricao);
        cardBody.appendChild(descricaoText);

        cardDescricao.appendChild(cardBody);

        descricaoContainer.appendChild(cardDescricao);
    }
});

</script>
