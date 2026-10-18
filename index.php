<?php include 'tools/components/head.php'?>
<body>
    <!--Default Navbar-->
    <?php include 'tools/components/nav.php'?>
    <!--Conteúdo principal da página-->
    <main>
        <section class="container py-5 section-ancestral">
            <div class="text-center">
                <img src="tools/images/android-chrome-512x512.png" alt="Logo Ancestrality" class="img-fluid mx-auto d-block mb-3" style="max-width:180px;">
                <h1>Ancestrality</h1>
                <h2 class="h4 fst-italic">Onde retornamos ao passado natural e sem a toxidade do mundo presente.</h2>
                <p class="lead mt-4">
                    Aqui você encontrará informações de como viver uma vida natural e funcional baseado em como os nossos antepassados realmente viviam: caçando, se movimentando, comendo comida de verdade e vivendo na pele o ordinário de forma extraordinária.
                </p>
            </div>
        </section>
        <section class="container my-4">
            <h2 class="text-center my-4">Conheça as seções</h2>
            <article class="my-4">
                <a href="super-alimentos.php" class="text-decoration-none" style="color:inherit;">
                    <div class="card shadow-sm card-ancestral">
                        <div class="row g-0 align-items-stretch">
                            <div class="col-12 col-md-8 d-flex flex-column">
                                <div class="card-header card-header-ancestral">Super Alimentos e suas Propriedades</div>
                                <div class="card-body d-flex align-items-center justify-content-center text-center flex-grow-1">
                                    <h3 class="card-title h5 mb-0">As propriedades escondidas de alimentos simples que potencializam a nossa saúde e bem-estar</h3>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 card-img-wrapper">
                                <img src="tools/images/superalimentos.png" alt="Imagem de alimentos super nutritivos" class="card-img-fill card-img-fill-right">
                            </div>
                        </div>
                    </div>
                </a>
            </article>
            <article class="my-4">
                <a href="pratos-ancestrais.php" class="text-decoration-none" style="color:inherit;">
                    <div class="card shadow-sm card-ancestral">
                        <div class="row g-0 align-items-stretch">
                            <div class="col-12 col-md-4 card-img-wrapper">
                                <img src="tools/images/pratos-ancestrais.jpeg" alt="Prato ancestral em mesa rústica" onerror="this.style.display='none'" class="card-img-fill card-img-fill-left">
                            </div>
                            <div class="col-12 col-md-8 d-flex flex-column">
                                <div class="card-header card-header-ancestral">Pratos Ancestrais</div>
                                <div class="card-body d-flex align-items-center justify-content-center text-center flex-grow-1">
                                    <h3 class="card-title h5 mb-0">As comidas perdidas pelo tempo e suas receitas</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </article>
            <article class="my-4">
                <a href="hábitos-milenares.php" class="text-decoration-none" style="color:inherit;">
                    <div class="card shadow-sm card-ancestral">
                        <div class="row g-0 align-items-stretch">
                            <div class="col-12 col-md-8 d-flex flex-column">
                                <div class="card-header card-header-ancestral">Hábitos Milenares</div>
                                <div class="card-body d-flex align-items-center justify-content-center text-center flex-grow-1">
                                    <h3 class="card-title h5 mb-0">A verdadeira longevidade disfarçada de costumes bem conhecidos</h3>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 card-img-wrapper">
                                <img src="tools/images/habitos-milenares.jpg" alt="Idoso saudável praticando hábito milenar" onerror="this.style.display='none'" class="card-img-fill card-img-fill-right">
                            </div>
                        </div>
                    </div>
                </a>
            </article>
            <article class="my-4">
                <a href="mal-secxxi.php" class="text-decoration-none" style="color:inherit;">
                    <div class="card shadow-sm card-ancestral">
                        <div class="row g-0 align-items-stretch">
                            <div class="col-12 col-md-4 card-img-wrapper">
                                <img src="tools/images/mal-secxxi.jpg" alt="comida processada" onerror="this.style.display='none'" class="card-img-fill card-img-fill-left">
                            </div>
                            <div class="col-12 col-md-8 d-flex flex-column">
                                <div class="card-header card-header-ancestral">O Grande Mal do séc. XXI</div>
                                <div class="card-body d-flex align-items-center justify-content-center text-center flex-grow-1">
                                    <h3 class="card-title h5 mb-0">O destrutivo estilo de vida do mundo moderno</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </article>
            <article class="my-4">
                <a href="nutrimind-ai.php" class="text-decoration-none" style="color:inherit;">
                    <div class="card shadow-sm card-ancestral">
                        <div class="row g-0 align-items-stretch">
                            <div class="col-12 col-md-8 d-flex flex-column">
                                <div class="card-header card-header-ancestral">NutriMind — Montador de planos de dieta</div>
                                <div class="card-body d-flex align-items-center justify-content-center text-center flex-grow-1">
                                    <h3 class="card-title h5 mb-0">Nossa IA personalizada que permite você criar um plano de dieta baseado em nossos antepassados</h3>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 card-img-wrapper">
                                <img src="tools/images/nutrimind-ai.jpeg" alt="IA gerando plano alimentar" onerror="this.style.display='none'" class="card-img-fill card-img-fill-right">
                            </div>
                        </div>
                    </div>
                </a>
            </article>
        </section>
    </main>
    <!--Default Footer -->
    <?php include 'tools/components/footer.php'?>
    <!--CDN Javascript Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
