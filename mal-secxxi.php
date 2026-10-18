<?php $csspage = 'grande-mal'; ?>
<?php $theme = 'mal-sec-xxi'; ?>
<?php include 'tools/components/head.php'?>
<body>
    <!--Default Navbar-->
    <?php include 'tools/components/nav.php'?>
    <section class="container py-5 ">
            <div class="text-center">
                <h1>Mal do Século XXI</h1>
                <h4 class=" fst-italic">Para consolidar nossa jornada pela saúde funcional, precisamos olhar para o outro lado da moeda. </h4>
                <p class="lead mt-4">
                    Se os hábitos milenares são o "manual do proprietário" do corpo humano, o estilo de vida moderno é uma sucessão de erros sistêmicos que chamamos de O Grande Mal do Século XXI.
                </p>
            </div>
    </section>
    <main class="py-5 d-flex" data-bs-spy="scroll" data-bs-target="#scrollspy-nav" data-bs-smooth-scroll="true" tabindex="0">
        <section class="col-8 ps-5">
            <div class="scrollspy-example-2">
                <article class="py">
                    <h4 id="item-1" class="border-bottom pb-2 mb-3 "> Desconexão Digital e Sobrecarga de Cortisol</h4>
                    <p class="text-start">
                        Vivemos em um estado de hiperestimulação dopaminérgica e estresse crônico 
                        que o nosso sistema nervoso não foi projetado para suportar. 
                    </p>
                    <p class="text">
                        A exposição constante a notificações e à "cultura da pressa" mantém o corpo em um estado de luta ou fuga permanente,
                        elevando o cortisol e suprimindo funções vitais como a digestão e o sistema imunológico. 
                    </p>
                    <p class="text">
                        O resultado é uma epidemia de ansiedade e exaustão mental que precede a falência física.
                    </p>
                </article>
                <article class="py">
                    <h4 id="item-2" class="border-bottom pb-2 mb-3">Deserto Nutricional e Inflexibilidade Metabólica</h4>
                    <p class="text-start">
                        A substituição de alimentos reais por ultraprocessados criou uma sociedade sobrealimentada, porém desnutrida. 
                    </p>
                    <p class="text-start">
                        O excesso de açúcares e óleos vegetais refinados destrói a barreira intestinal e causa resistência à insulina, 
                        impedindo o corpo de usar a própria gordura como energia. 
                    </p>
                    <p class="text-start">
                        Essa inflamação sistêmica de baixo grau é o terreno fértil para doenças degenerativas que nossos ancestrais raramente conheciam.
                    </p>
                </article>
                <article class="py">
                    <h4 id="item-3" class="border-bottom pb-2 mb-3">O "Zoológico Humano": Sedentarismo e Rutura Circadiana</h4>
                    <p class="text-start">
                        Transformamos nosso ambiente em uma "gaiola climatizada" onde a falta de esforço físico e a luz artificial dominam. 
                    </p>
                    <p class="text-start">
                        Ao passarmos 90% do tempo em ambientes fechados (indoor),
                        perdemos o sinal do sol que regula nossos hormônios e o movimento básico que sustenta nossa estrutura. 
                    </p>
                    <p class="text-start">
                        Essa desconexão com os ritmos naturais do planeta atrofia nossa resiliência biológica e desregula o sono,
                        o principal pilar da reparação celular.
                    </p>
                </article>
            </div>
        </section>
        <aside class="col-4 bg-body-secondary border-start border-primary rounded-end p-3">
            <div class="position-sticky" style="top: 5rem;">
                <p class="small fw-semibold text-uppercase text-primary-emphasis border-bottom border-primary pb-2 mb-3 ms-2">O Grande Mal</p>
                <nav id="scrollspy-nav" class="nav nav-pills flex-column">
                    <a href="#item-1" class="nav-link text-body">Desconexão Digital e Sobrecarga de Cortisol</a>
                    <a href="#item-2" class="nav-link text-body">Deserto Nutricional e Inflexibilidade Metabólica</a>
                    <a href="#item-3" class="nav-link text-body">O "Zoológico Humano": Sedentarismo e Rutura Circadiana</a>
                </nav>
            </div>
        </aside>
    </main>
    <!--Default Footer -->
    <?php include 'tools/components/footer.php'?>
    <!--CDN Javascript Boostrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>