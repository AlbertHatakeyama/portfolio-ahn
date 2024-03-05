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
