<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aivra | Fale Conosco</title>
    <meta name="description" content="Entre em contato com a Aivra e agende sua análise tecnológica.">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Phosphor Icons -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
</head>

<body>
    <!-- Background Grid -->
    <div class="bg-grid"></div>
    <canvas id="bg-canvas"></canvas>

    <style>
        .navbar {
            opacity: 1 !important;
            pointer-events: all !important;
            transform: translateX(-50%) translateY(0) !important;
        }
    </style>

    @include('partials.header', [
    'navLinks' => [
    ['href' => '/', 'label' => 'Home'],
    ['href' => '/#solucoes', 'label' => 'Soluções'],
    ['href' => '/#sobre', 'label' => 'Sobre'],
    ['href' => '/#faq', 'label' => 'FAQ'],
    ],
    'ctaButton' => '<a href="#" class="btn-primary small" onclick="document.getElementById(\'name\').focus(); return false;">Contatar</a>'
    ])

    <section class="section contact-hero">
        <div class="container">
            <span class="badge-pill mb-4">Contato</span>
            <h1>Vamos construir o futuro?</h1>
            <p class="section-desc" style="max-width: 600px; margin: 0 auto;">
                Preencha o formulário para agendar uma análise ou entre em contato direto pelas nossas redes.
            </p>

            <div class="contact-grid">
                <!-- Form Column -->
                <div class="contact-form-wrapper">
                    <!-- FORM COPIED FROM LANDING (Minus Modal Wrapper) -->
                    <form id="lead-form">
                        <!-- SEÇÃO 1: DADOS DE CONTATO -->
                        <div class="form-step active" data-step="1">
                            <div class="step-header">
                                <span class="step-label">Etapa 1 de 8</span>
                                <h2>Dados de Contato</h2>
                                <p>Vamos começar com suas informações básicas.</p>
                            </div>
                            <div class="form-group">
                                <label for="name">Nome Completo *</label>
                                <div class="input-wrapper"><i class="ph ph-user"></i><input type="text" id="name" name="name"
                                        required placeholder="Seu nome completo"></div>
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail Profissional *</label>
                                <div class="input-wrapper"><i class="ph ph-envelope"></i><input type="email" id="email"
                                        name="email" required placeholder="seu@empresa.com"></div>
                            </div>
                            <div class="form-group">
                                <label for="whatsapp">WhatsApp (com DDD) *</label>
                                <div class="input-wrapper"><i class="ph ph-whatsapp-logo"></i><input type="tel" id="whatsapp"
                                        name="whatsapp" required placeholder="(11) 99999-9999"></div>
                            </div>
                        </div>

                        <!-- SEÇÃO 2: TIPO DE CADASTRO -->
                        <div class="form-step" data-step="2">
                            <div class="step-header">
                                <span class="step-label">Etapa 2 de 9</span>
                                <h2>Tipo de Cadastro</h2>
                                <p>Como você se identifica?</p>
                            </div>
                            <div class="form-group">
                                <div class="radio-group">
                                    <label class="radio-option"><input type="radio" name="person_type" value="pf"
                                            required><span class="radio-custom"></span><span class="radio-label">Pessoa Física (CPF)</span></label>
                                    <label class="radio-option"><input type="radio" name="person_type" value="pj"><span
                                            class="radio-custom"></span><span class="radio-label">Pessoa Jurídica (CNPJ)</span></label>
                                </div>
                            </div>
                        </div>

                        <!-- SEÇÃO 2A: DADOS PESSOAIS (CPF) -->
                        <div class="form-step" data-step="2a">
                            <div class="step-header">
                                <span class="step-label">Etapa 2 de 9 — Pessoa Física</span>
                                <h2>Dados Pessoais</h2>
                                <p>Informações sobre você e seu negócio.</p>
                            </div>
                            <div class="form-group">
                                <label for="cpf">CPF *</label>
                                <div class="input-wrapper"><i class="ph ph-identification-card"></i><input type="text" id="cpf"
                                        name="cpf" required placeholder="000.000.000-00"></div>
                            </div>
                            <div class="form-group">
                                <label for="birthdate">Data de Nascimento *</label>
                                <div class="input-wrapper"><i class="ph ph-calendar"></i><input type="text" id="birthdate"
                                        name="birthdate" required placeholder="DD/MM/AAAA"></div>
                            </div>
                            <div class="form-group">
                                <label for="pf_business">Nome do Negócio (se houver)</label>
                                <div class="input-wrapper"><i class="ph ph-storefront"></i><input type="text" id="pf_business"
                                        name="pf_business" placeholder="Ex: Consultoria João Silva"></div>
                            </div>
                            <div class="form-group">
                                <label for="pf_segment">Segmento de Atuação *</label>
                                <div class="input-wrapper"><i class="ph ph-tag"></i><input type="text" id="pf_segment"
                                        name="pf_segment" required placeholder="Ex: Consultoria, Freelancer, Comércio..."></div>
                            </div>
                            <div class="form-group">
                                <label for="pf_role">Cargo / Função *</label>
                                <div class="input-wrapper"><i class="ph ph-briefcase"></i><input type="text" id="pf_role"
                                        name="pf_role" required placeholder="Ex: Empreendedor, Autônomo, Consultor"></div>
                            </div>
                        </div>

                        <!-- SEÇÃO 2B: DADOS DA EMPRESA (CNPJ) -->
                        <div class="form-step" data-step="2b">
                            <div class="step-header">
                                <span class="step-label">Etapa 2 de 9 — Pessoa Jurídica</span>
                                <h2>Dados da Empresa</h2>
                                <p>Informações essenciais para entendermos o seu negócio.</p>
                            </div>
                            <div class="form-group">
                                <label for="company">Razão Social / Nome Fantasia *</label>
                                <div class="input-wrapper"><i class="ph ph-buildings"></i><input type="text" id="company"
                                        name="company" required placeholder="Nome da sua empresa"></div>
                            </div>
                            <div class="form-group">
                                <label for="cnpj">CNPJ *</label>
                                <div class="input-wrapper"><i class="ph ph-identification-card"></i><input type="text" id="cnpj"
                                        name="cnpj" required placeholder="00.000.000/0000-00"></div>
                            </div>
                            <div class="form-group">
                                <label for="role">Cargo / Função *</label>
                                <div class="input-wrapper"><i class="ph ph-briefcase"></i><input type="text" id="role"
                                        name="role" required placeholder="Ex: CEO, Diretor de Operações, CTO"></div>
                            </div>
                            <div class="form-group">
                                <label>Você participa da decisão de investimento em tecnologia?</label>
                                <div class="radio-group">
                                    <label class="radio-option"><input type="radio" name="decision_power" value="decisor"
                                            required><span class="radio-custom"></span><span class="radio-label">Sim, sou o
                                            decisor</span></label>
                                    <label class="radio-option"><input type="radio" name="decision_power"
                                            value="participa"><span class="radio-custom"></span><span
                                            class="radio-label">Participo da decisão</span></label>
                                    <label class="radio-option"><input type="radio" name="decision_power"
                                            value="influencia"><span class="radio-custom"></span><span
                                            class="radio-label">Apenas influencio</span></label>
                                </div>
                            </div>
                        </div>

                        <!-- SEÇÃO 3: TAMANHO & MOMENTO -->
                        <div class="form-step" data-step="3">
                            <div class="step-header">
                                <span class="step-label">Etapa 3 de 8</span>
                                <h2>Tamanho & Momento do Negócio</h2>
                                <p>Entendendo melhor a estrutura da sua empresa.</p>
                            </div>

                            <div class="form-group">
                                <label for="segment">Segmento da empresa</label>
                                <div class="input-wrapper">
                                    <i class="ph ph-tag"></i>
                                    <input type="text" id="segment" name="segment" required
                                        placeholder="Ex: Tecnologia, Varejo, Serviços...">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Quantidade de colaboradores</label>
                                <div class="radio-group horizontal">
                                    <label class="radio-option compact">
                                        <input type="radio" name="employees" value="1" required>
                                        <span class="radio-custom"></span>
                                        <span class="radio-label">1</span>
                                    </label>
                                    <label class="radio-option compact">
                                        <input type="radio" name="employees" value="2-5">
                                        <span class="radio-custom"></span>
                                        <span class="radio-label">2–5</span>
                                    </label>
                                    <label class="radio-option compact">
                                        <input type="radio" name="employees" value="6-20">
                                        <span class="radio-custom"></span>
                                        <span class="radio-label">6–20</span>
                                    </label>
                                    <label class="radio-option compact">
                                        <input type="radio" name="employees" value="21-50">
                                        <span class="radio-custom"></span>
                                        <span class="radio-label">21–50</span>
                                    </label>
                                    <label class="radio-option compact">
                                        <input type="radio" name="employees" value="50+">
                                        <span class="radio-custom"></span>
                                        <span class="radio-label">+50</span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Faturamento anual aproximado</label>
                                <div class="radio-group">
                                    <label class="radio-option">
                                        <input type="radio" name="revenue" value="<250k" required>
                                        <span class="radio-custom"></span>
                                        <span class="radio-label">Até R$250 mil / ano</span>
                                    </label>
                                    <label class="radio-option">
                                        <input type="radio" name="revenue" value="250k-1M">
                                        <span class="radio-custom"></span>
                                        <span class="radio-label">R$250 mil – R$1 milhão / ano</span>
                                    </label>
                                    <label class="radio-option">
                                        <input type="radio" name="revenue" value="1M-5M">
                                        <span class="radio-custom"></span>
                                        <span class="radio-label">R$1 milhão – R$5 milhões / ano</span>
                                    </label>
                                    <label class="radio-option">
                                        <input type="radio" name="revenue" value="5M-10M">
                                        <span class="radio-custom"></span>
                                        <span class="radio-label">R$5 milhões – R$10 milhões / ano</span>
                                    </label>
                                    <label class="radio-option">
                                        <input type="radio" name="revenue" value="10M+">
                                        <span class="radio-custom"></span>
                                        <span class="radio-label">+R$10 milhões / ano</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- SEÇÃO 4: PROCESSOS & GARGALOS -->
                        <div class="form-step" data-step="4">
                            <div class="step-header">
                                <span class="step-label">Etapa 4 de 8</span>
                                <h2>Processos & Gargalos</h2>
                                <p>Identificando onde podemos gerar mais impacto.</p>
                            </div>

                            <div class="form-group">
                                <label for="bottlenecks">Quais processos hoje mais consomem tempo, dinheiro ou geram
                                    retrabalho?</label>
                                <div class="textarea-wrapper">
                                    <textarea id="bottlenecks" name="bottlenecks" required rows="3"
                                        placeholder="Descreva os processos que mais causam dor de cabeça..."></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Hoje esses processos são:</label>
                                <div class="radio-group">
                                    <label class="radio-option">
                                        <input type="radio" name="process_status" value="manual" required>
                                        <span class="radio-custom"></span>
                                        <span class="radio-label">100% Manuais (Planilhas, papel, e-mail)</span>
                                    </label>
                                    <label class="radio-option">
                                        <input type="radio" name="process_status" value="partial">
                                        <span class="radio-custom"></span>
                                        <span class="radio-label">Parcialmente sistematizados (Usamos algum software mas ainda
                                            há muito manual)</span>
                                    </label>
                                    <label class="radio-option">
                                        <input type="radio" name="process_status" value="automated">
                                        <span class="radio-custom"></span>
                                        <span class="radio-label">Automatizados (Mas queremos melhorar/integrar)</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- SEÇÃO 5: OBJETIVO PRINCIPAL -->
                        <div class="form-step" data-step="5">
                            <div class="step-header">
                                <span class="step-label">Etapa 5 de 8</span>
                                <h2>Objetivo Principal</h2>
                                <p>O que você espera alcançar com a Aivra?</p>
                            </div>

                            <div class="form-group">
                                <label>Qual a prioridade número 1 no momento?</label>
                                <div class="radio-group">
                                    <label class="radio-option">
                                        <input type="radio" name="goal" value="cost_reduction" required>
                                        <span class="radio-custom"></span>
                                        <span class="radio-label">Reduzir Custos Operacionais</span>
                                    </label>
                                    <label class="radio-option">
                                        <input type="radio" name="goal" value="scale">
                                        <span class="radio-custom"></span>
                                        <span class="radio-label">Escalar Vendas/Sem Aumentar Equipe</span>
                                    </label>
                                    <label class="radio-option">
                                        <input type="radio" name="goal" value="data">
                                        <span class="radio-custom"></span>
                                        <span class="radio-label">Organizar Dados para Tomada de Decisão (BI)</span>
                                    </label>
                                    <label class="radio-option">
                                        <input type="radio" name="goal" value="product">
                                        <span class="radio-custom"></span>
                                        <span class="radio-label">Criar um Novo Produto/SaaS</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- SEÇÃO 6: ORÇAMENTO & PRAZO -->
                        <div class="form-step" data-step="6">
                            <div class="step-header">
                                <span class="step-label">Etapa 6 de 8</span>
                                <h2>Expectativa de Investimento</h2>
                                <p>Para alinharmos as melhores tecnologias ao seu budget.</p>
                            </div>

                            <div class="form-group">
                                <label>Qual a previsão de investimento para este projeto?</label>
                                <div class="radio-group">
                                    <label class="radio-option">
                                        <input type="radio" name="budget" value="<10k" required>
                                        <span class="radio-custom"></span>
                                        <span class="radio-label">Até R$10.000 (Projetos Pontuais)</span>
                                    </label>
                                    <label class="radio-option">
                                        <input type="radio" name="budget" value="10k-30k">
                                        <span class="radio-custom"></span>
                                        <span class="radio-label">R$10.000 – R$30.000</span>
                                    </label>
                                    <label class="radio-option">
                                        <input type="radio" name="budget" value="30k-100k">
                                        <span class="radio-custom"></span>
                                        <span class="radio-label">R$30.000 – R$100.000</span>
                                    </label>
                                    <label class="radio-option">
                                        <input type="radio" name="budget" value="100k+">
                                        <span class="radio-custom"></span>
                                        <span class="radio-label">Acima de R$100.000</span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group" style="margin-top: 1.5rem;">
                                <label>Quando você pretende iniciar?</label>
                                <div class="radio-group horizontal">
                                    <label class="radio-option compact">
                                        <input type="radio" name="timeline" value="immediate" required>
                                        <span class="radio-custom"></span>
                                        <span class="radio-label">Imediato</span>
                                    </label>
                                    <label class="radio-option compact">
                                        <input type="radio" name="timeline" value="1month">
                                        <span class="radio-custom"></span>
                                        <span class="radio-label">Em 30 dias</span>
                                    </label>
                                    <label class="radio-option compact">
                                        <input type="radio" name="timeline" value="planning">
                                        <span class="radio-custom"></span>
                                        <span class="radio-label">Apenas planejando</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- SEÇÃO 7: DESCRIÇÃO LIVRE -->
                        <div class="form-step" data-step="7">
                            <div class="step-header">
                                <span class="step-label">Etapa 7 de 8</span>
                                <h2>Detalhes Finais</h2>
                                <p>Algo mais que devemos saber antes da nossa conversa?</p>
                            </div>

                            <div class="form-group">
                                <label for="details">Descrição do Projeto (Opcional)</label>
                                <div class="textarea-wrapper">
                                    <textarea id="details" name="details" rows="4"
                                        placeholder="Fique à vontade para dar mais detalhes sobre o que você precisa..."></textarea>
                                </div>
                            </div>

                            <!-- Privacy Checkbox -->
                            <div class="privacy-notice">
                                <i class="ph ph-shield-check"></i>
                                <p>Seus dados estão protegidos. Não enviamos spam, apenas entramos em contato para falar sobre
                                    o seu projeto.</p>
                            </div>
                        </div>

                        <!-- SEÇÃO 8: REVISÃO (Opcional, ou apenas submit direto na 7) -->
                        <div class="form-step" data-step="8">
                            <div class="step-header">
                                <span class="step-label">Etapa 8 de 8</span>
                                <h2>Pronto para Enviar?</h2>
                                <p>Revise se necessário ou confirme o envio.</p>
                            </div>

                            <div class="review-summary">
                                <p>Ao clicar em "Enviar Solicitação", nossos consultores analisarão seu perfil e entrarão em
                                    contato em até 24 horas úteis.</p>
                            </div>
                        </div>

                        <!-- FORM NAVIGATION -->
                        <div class="form-navigation">
                            <button type="button" class="btn-prev" id="btn-prev" disabled>
                                <i class="ph ph-arrow-left"></i> Voltar
                            </button>
                            <button type="button" class="btn-next" id="btn-next">
                                Continuar <i class="ph ph-arrow-right"></i>
                            </button>
                            <button type="submit" class="btn-next btn-submit" id="btn-submit" style="display: none;">
                                Enviar Solicitação <i class="ph ph-paper-plane-right"></i>
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Social Column -->
                <div class="contact-social-card">
                    <h3>Canais Diretos</h3>
                    <div class="social-links-vertical">
                        <a href="https://wa.me/5511999999999" target="_blank" class="social-link-item">
                            <i class="ph ph-whatsapp-logo"></i>
                            <span>WhatsApp</span>
                        </a>
                        <a href="https://linkedin.com" target="_blank" class="social-link-item">
                            <i class="ph ph-linkedin-logo"></i>
                            <span>LinkedIn</span>
                        </a>
                        <a href="https://instagram.com" target="_blank" class="social-link-item">
                            <i class="ph ph-instagram-logo"></i>
                            <span>Instagram</span>
                        </a>
                        <a href="mailto:contato@aivra.com.br" class="social-link-item">
                            <i class="ph ph-envelope"></i>
                            <span>contato@aivra.com.br</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section (Reused) -->
    <section id="faq" class="section">
        <div class="container">
            <div class="section-header reveal">
                <span class="badge-pill">Dúvidas Frequentes</span>
                <h2>Perguntas Frequentes</h2>
            </div>
            <div class="accordion">
                <div class="accordion-item reveal delay-100">
                    <div class="accordion-header">
                        <h3>Qual o perfil de empresa ideal para trabalhar com vocês?</h3>
                        <i class="ph ph-caret-down"></i>
                    </div>
                    <div class="accordion-content">
                        <p>Atendemos empresas mid-market e enterprise que buscam eliminar trabalho manual, integrar
                            sistemas e escalar operações com previsibilidade. Nosso foco está em negócios com processos
                            complexos que precisam de arquitetura tecnológica sólida.</p>
                    </div>
                </div>
                <div class="accordion-item reveal delay-200">
                    <div class="accordion-header">
                        <h3>A tecnologia desenvolvida pertence à minha empresa?</h3>
                        <i class="ph ph-caret-down"></i>
                    </div>
                    <div class="accordion-content">
                        <p>Sim. Diferente de softwares de prateleira, desenvolvemos ativos proprietários sob medida. O código, a inteligência e toda a arquitetura pertencem ao seu negócio — aumentando seu valuation e independência tecnológica.</p>
                    </div>
                </div>
                <div class="accordion-item reveal delay-200">
                    <div class="accordion-header">
                        <h3>Preciso trocar meu ERP ou CRM atual?</h3>
                        <i class="ph ph-caret-down"></i>
                    </div>
                    <div class="accordion-content">
                        <p>Não. Nossa especialidade é orquestrar sistemas existentes. Criamos camadas de inteligência que conectam seus softwares atuais, extraindo valor sem o caos de grandes migrações.</p>
                    </div>
                </div>
                <div class="accordion-item reveal delay-300">
                    <div class="accordion-header">
                        <h3>Quanto tempo leva para implementar uma solução?</h3>
                        <i class="ph ph-caret-down"></i>
                    </div>
                    <div class="accordion-content">
                        <p>Depende da complexidade do projeto. Automações pontuais podem ser entregues em semanas,
                            enquanto arquiteturas completas levam de 2 a 6 meses. Sempre priorizamos entregas
                            incrementais com valor desde as primeiras sprints.</p>
                    </div>
                </div>
                <div class="accordion-item reveal delay-300">
                    <div class="accordion-header">
                        <h3>Como funciona a evolução do projeto?</h3>
                        <i class="ph ph-caret-down"></i>
                    </div>
                    <div class="accordion-content">
                        <p>A tecnologia nunca para. Além do suporte técnico, oferecemos squads de evolução contínua que monitoram performance, implementam melhorias e garantem que sua arquitetura escale conforme o crescimento do negócio.</p>
                    </div>
                </div>
                <div class="accordion-item reveal delay-400">
                    <div class="accordion-header">
                        <h3>Como vocês garantem ROI nos projetos?</h3>
                        <i class="ph ph-caret-down"></i>
                    </div>
                    <div class="accordion-content">
                        <p>Todo projeto começa com diagnóstico estratégico onde mapeamos métricas de baseline. Definimos
                            KPIs claros e medimos o impacto real da automação em redução de custos, tempo economizado e
                            aumento de produtividade.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-brand">
                <a href="/" class="footer-logo">
                    <img src="{{ asset('assets/img/Logo.svg') }}" alt="Aivra Logo" width="40" height="40">
                    <span>Aivra</span>
                </a>
                <p class="footer-tagline">Arquitetura de Negócio para empresas que querem escalar com previsibilidade.
                </p>
            </div>

            <div class="social-links">
                <a href="#" class="social-icon" aria-label="LinkedIn"><i class="ph ph-linkedin-logo"></i></a>
                <a href="#" class="social-icon" aria-label="Instagram"><i class="ph ph-instagram-logo"></i></a>
                <a href="#" class="social-icon" aria-label="WhatsApp"><i class="ph ph-whatsapp-logo"></i></a>
            </div>

            <div class="footer-bottom">
                <p class="copyright">&copy; 2026 Aivra Automation. Todos os direitos reservados.</p>
                <div class="footer-legal-links">
                    <a href="termos.html">Termos de Uso</a>
                    <span class="separator">|</span>
                    <a href="privacidade.html">Política de Privacidade</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ asset('js/landing.js') }}"></script>
</body>

</html>