<?php
    session_start();
    if (!isset($_SESSION['online']) || $_SESSION['online'] !== true) {
        $_SESSION['flash_error'] = 'Acesso negado. Por favor, inicie sessão para acessar esta página.';
        header('Location: pagina-login.php');
        exit();
    }
?>
<?php include 'tools/components/head.php'?>
<body>
    <!--Default Navbar-->
    <?php include 'tools/components/nav.php'?>
     <section class="container py-5 section-ancestral">
            <div class="text-center">
                <img src="tools/images/android-chrome-512x512.png" alt="Logo Ancestrality" class="img-fluid mx-auto d-block mb-3" style="max-width:180px;">
                <h1>NutriMind — Montador de planos de dieta</h1>
                <h2 class="h4 fst-italic">Deixe-nos ajudar há montar um plano de dieta natural e funcional</h2>
                <p class="lead mt-4">
                    O NutriMind é uma ferramenta de inteligência artificial projetada para criar planos de dieta personalizados com base em suas preferências alimentares, necessidades nutricionais e objetivos de saúde.
                    Ele utiliza algoritmos avançados para analisar suas informações e gerar um plano de dieta equilibrado, nutritivo e adaptado ao seu estilo de vida.
                    Com o NutriMind, você pode alcançar seus objetivos de saúde e bem-estar de forma mais eficiente e personalizada.
                </p>
            </div>
        </section>
        <main>
            <hr class="text-center my-4">
            <section class="container my-5">
                <h2 class="text-center my-4">Como funciona o NutriMind?</h2>
                <p class="lead text-center">
                    O NutriMind funciona coletando informações sobre suas preferências alimentares, restrições dietéticas, objetivos de saúde e estilo de vida. 
                    Com base nesses dados, ele utiliza algoritmos avançados para criar um plano de dieta personalizado que atenda às suas necessidades nutricionais 
                    e preferências alimentares.
                    O processo é simples: você fornece as informações necessárias, 
                    e o NutriMind gera um plano de dieta equilibrado e adaptado ao seu estilo de vida.
                    Ele leva em consideração fatores como calorias, macronutrientes, micronutrientes e variedade alimentar para garantir que você receba uma dieta completa e nutritiva.
                </p>
            </section>
            <section class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="card card-ancestral shadow-sm">
                            <div class="card-header card-header-ancestral text-center py-3">
                                <h3 class="mb-0">Monte o seu Plano com o NutriMind</h3>
                            </div>
                            <div class="card-body p-4 p-md-5">
                                <form id="nutrimind-form" class="needs-validation" novalidate>
                                    <div class="mb-3">
                                        <label for="objetivo" class="form-label">Objetivo</label>
                                        <input type="text" class="form-control" id="objetivo"
                                               placeholder="Seu objetivo" required minlength="5">
                                        <div class="invalid-feedback">Descreva o seu objetivo (mínimo 5 caracteres).</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="restricoes" class="form-label">Restrições</label>
                                        <input type="text" class="form-control" id="restricoes"
                                               placeholder="Restrições alimentares, alergias, etc." required minlength="5">
                                        <div class="invalid-feedback">Indique restrições ou escreva "Nenhuma" (mínimo 5 caracteres).</div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="nivel_atividade" class="form-label">Nível de atividade física</label>
                                        <select class="form-select" id="nivel_atividade" required>
                                            <option value="" selected>Selecione seu nível de atividade física</option>
                                            <option value="sedentario">Sedentário</option>
                                            <option value="leve">Leve</option>
                                            <option value="moderado">Moderado</option>
                                            <option value="intenso">Intenso</option>
                                        </select>
                                        <div class="invalid-feedback">Selecione o seu nível de atividade física.</div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="mt-4 mb-3 pb-2 border-bottom text-uppercase fw-semibold">Dados Biométricos</h5>
                                        <label for="sexo" class="form-label">Sexo</label>
                                        <select class="form-select" id="sexo" required>
                                            <option value="" selected>Selecione seu sexo</option>
                                            <option value="masculino">Masculino</option>
                                            <option value="feminino">Feminino</option>
                                            <option value="outro">Outro</option>
                                            <option value="prefiro-nao-dizer">Prefiro não dizer</option>
                                        </select>
                                        <div class="invalid-feedback">Selecione o seu sexo.</div>
                                        <div class="mb-3 mt-3">
                                            <label for="peso" class="form-label">Peso (kg)</label>
                                            <input type="number" class="form-control" id="peso"
                                                   placeholder="Seu peso" required min="1" max="150" step="0.1">
                                            <div class="invalid-feedback">Indique o seu peso em kg (1–150).</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="altura" class="form-label">Altura (cm)</label>
                                            <input type="number" class="form-control" id="altura"
                                                   placeholder="Sua altura" required min="50" max="250" step="1">
                                            <div class="invalid-feedback">Indique a sua altura em cm (50–250).</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="cintura" class="form-label">Cintura (cm) <small class="form-text text-muted">(opcional)</small></label>
                                            <input type="number" class="form-control" id="cintura" placeholder="Sua cintura" min="0">
                                        </div>
                                        <div class="mb-3">
                                            <label for="quadril" class="form-label">Quadril (cm) <small class="form-text text-muted">(opcional)</small></label>
                                            <input type="number" class="form-control" id="quadril" placeholder="Seu quadril" min="0">
                                        </div>
                                        <div class="mb-3">
                                            <label for="pescoco" class="form-label">Pescoço (cm) <small class="form-text text-muted">(opcional)</small></label>
                                            <input type="number" class="form-control" id="pescoco" placeholder="Seu pescoço" min="0">
                                        </div>
                                        <div class="mb-3">
                                            <label for="percentual_gordura" class="form-label">Percentual de Gordura Corporal</label>
                                            <input type="number" class="form-control" id="percentual_gordura"
                                                   placeholder="Seu percentual de gordura" required min="1" max="70" step="0.1">
                                            <div class="invalid-feedback">Indique o percentual de gordura corporal (1–35).</div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="preferencias_alimentares" class="form-label">Preferências Alimentares <small class="form-text text-muted">(opcional)</small></label>
                                        <input type="text" class="form-control" id="preferencias_alimentares" placeholder="Alimentos que você gosta ou não gosta">
                                    </div>
                                    <div class="mb-3">
                                        <label for="frequencia_refeicoes" class="form-label">Frequência de Refeições <small class="form-text text-muted">(opcional)</small></label>
                                        <select class="form-select" id="frequencia_refeicoes">
                                            <option value="" selected>Selecione a frequência de refeições</option>
                                            <option value="1">1 refeição por dia</option>
                                            <option value="2">2 refeições por dia</option>
                                            <option value="3">3 refeições por dia</option>
                                            <option value="4">4 refeições por dia</option>
                                            <option value="5">5 refeições por dia</option>
                                            <option value="6">6 ou mais refeições por dia</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="orcamento" class="form-label">Orçamento <small class="form-text text-muted">(opcional)</small></label>
                                        <input type="text" class="form-control" id="orcamento" placeholder="Orçamento mensal para alimentos">
                                    </div>
                                    <div class="mb-3">
                                        <label for="comentarios" class="form-label">Comentários <small class="form-text text-muted">(opcional)</small></label>
                                        <input type="text" class="form-control" id="comentarios" placeholder="Perda de peso, ganho muscular, controle de diabetes, etc.">
                                    </div>
                                    <button type="submit" id="btn-gerar-plano" class="btn btn-primario w-100 mt-3">Criar Plano de Dieta</button>
                                    <div id="nutrimind-feedback" class="mt-3" role="alert"></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    <!--Default Footer -->
    <?php include 'tools/components/footer.php'?>
    <!--CDN Javascript Boostrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="tools/js/form-validation.js" defer></script>
    <script src="tools/js/gemini-requests.js"></script>
    <script>
        const ACTIVITY_DEFINITIONS = {
            'sedentario': 'Pouco ou nenhum exercício, trabalho sentado',
            'leve':       'Exercício leve 1–3 dias/semana',
            'moderado':   'Exercício moderado 3–5 dias/semana',
            'intenso':    'Exercício intenso 6–7 dias/semana'
        };

        function showFeedback(type, message) {
            const el = document.getElementById('nutrimind-feedback');
            el.className = `alert alert-${type} mt-3`;
            el.textContent = message;
            el.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }

        document.getElementById('nutrimind-form').addEventListener('submit', async function (e) {
            e.preventDefault();

            const btn = document.getElementById('btn-gerar-plano');
            btn.disabled = true;
            btn.textContent = 'A gerar plano…';
            document.getElementById('nutrimind-feedback').className = '';
            document.getElementById('nutrimind-feedback').textContent = '';

            const nivelAtividade = document.getElementById('nivel_atividade').value;

            const userData = {
                nome:              <?= json_encode($_SESSION['username']) ?>,
                email:             <?= json_encode($_SESSION['email']) ?>,
                dataNascimento:    <?= json_encode($_SESSION['data_nascimento']) ?>,
                objetivo:          document.getElementById('objetivo').value,
                restricoes:        document.getElementById('restricoes').value,
                preferencias:      document.getElementById('preferencias_alimentares').value,
                nivelAtividade:    nivelAtividade,
                definicaoAtividade: ACTIVITY_DEFINITIONS[nivelAtividade] ?? nivelAtividade,
                sexo:              document.getElementById('sexo').value,
                peso:              document.getElementById('peso').value,
                altura:            document.getElementById('altura').value,
                percentualGordura: document.getElementById('percentual_gordura').value,
                cintura:           document.getElementById('cintura').value,
                quadril:           document.getElementById('quadril').value,
                pescoco:           document.getElementById('pescoco').value,
                comentario:        document.getElementById('comentarios').value,
            };

            try {
                const result = await generateGeminiResponse(userData);
                if (result?.sucesso) {
                    showFeedback('success', 'Plano criado com sucesso! Verifica o teu e-mail.');
                } else {
                    showFeedback('danger', result?.erro ?? 'Resposta inesperada. Tenta novamente.');
                }
            } catch (err) {
                showFeedback('danger', 'Erro ao comunicar com o servidor: ' + err.message);
            } finally {
                btn.disabled = false;
                btn.textContent = 'Criar Plano de Dieta';
            }
        });
    </script>
</body>
</html>