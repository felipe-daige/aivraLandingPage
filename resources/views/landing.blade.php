<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/img/favicon.ico') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aivra - Arquitetura de Negócio & Automação Inteligente</title>
    <meta name="description"
        content="Transformamos custos operacionais em ativos estratégicos de crescimento. Automação, Integração, Infraestrutura e IA para empresas mid-market e enterprise.">
    <link rel="canonical" href="https://aivra.com.br/" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://aivra.com.br/" />
    <meta property="og:title" content="Aivra - Automação Inteligente & IA para Negócios" />
    <meta property="og:description"
        content="Escale sua operação com previsibilidade. Arquitetura de dados e automação para eliminar gargalos e aumentar ROI." />
    <meta property="og:image" content="https://aivra.com.br/og-image.jpg" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="https://aivra.com.br/" />
    <meta property="twitter:title" content="Aivra - Automação Inteligente & IA" />
    <meta property="twitter:description"
        content="Escale sua operação com previsibilidade. Arquitetura de dados e automação para eliminar gargalos." />
    <meta property="twitter:image" content="https://aivra.com.br/og-image.jpg" />

    <meta name="robots" content="index, follow" />
    <meta name="author" content="Aivra Automation" />


    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
    <script src="{{ asset('js/landing.js') }}" defer></script>

    <script type="application/ld+json">
        {
            "@@context": "https://schema.org",
            "@@type": "Organization",
            "name": "Aivra Automação",
            "url": "https://aivra.com.br",
            "logo": "https://aivra.com.br/assets/img/Logo.svg",
            "description": "Arquitetura de Negócio & Automação Inteligente para empresas mid-market e enterprise.",
            "contactPoint": {
                "@@type": "ContactPoint",
                "telephone": "+55-11-99999-9999",
                "contactType": "sales",
                "areaServed": "BR",
                "availableLanguage": "Portuguese"
            },
            "sameAs": [
                "https://linkedin.com/company/aivra",
                "https://instagram.com/aivra"
            ]
        }
    </script>


</head>

<body>
    <div class="bg-grid"></div>
    <canvas id="bg-canvas"></canvas>

    <!-- Navbar -->
    <nav class="navbar">
        <a href="#" class="logo-container" style="text-decoration: none; color: inherit;">
            <img src="{{ asset('assets/img/Logo.svg') }}" alt="Aivra Logo" width="40" height="40" style="object-fit: contain;">
            <span class="logo-text">Aivra</span>
        </a>

        <div class="nav-center">
            <div class="nav-links">
                <a href="#solucoes">Soluções</a>
                <a href="#vantagens">Vantagens</a>
                <a href="#como-funciona">Processo</a>
                <a href="#faq">FAQ</a>
                <a href="sobre.html">Quem Somos</a>
            </div>
        </div>

        <div class="nav-right">
            <div class="social-icons-nav">
                <a href="https://linkedin.com" target="_blank" class="social-icon-nav" aria-label="LinkedIn"><i
                        class="ph ph-linkedin-logo"></i></a>
                <a href="https://instagram.com" target="_blank" class="social-icon-nav" aria-label="Instagram"><i
                        class="ph ph-instagram-logo"></i></a>
                <a href="https://wa.me/5511999999999" target="_blank" class="social-icon-nav" aria-label="WhatsApp"><i
                        class="ph ph-whatsapp-logo"></i></a>
            </div>
            <a href="#" class="btn-primary btn-magnetic btn-ripple small open-modal">Agendar</a>
        </div>
    </nav>

    <!-- NEW 3D HERO SECTION -->
    <div class="cover-container">
        <video autoplay muted loop playsinline id="bg-video">
            <source src="{{ asset('assets/CleanShot_2025-10-11_at_17.12.46_t4bh4w.mov') }}" type="video/mp4">
            Your browser does not support HTML5 video.
        </video>

        <div class="overlay"></div>

        <div class="content-center">
            <img src="{{ asset('assets/img/Logo Aivra 3D Branca.svg') }}" alt="Aivra Logo" class="logo-hero">
            <h1 class="brand-title">Aivra</h1>
            <h2 class="hero-sub fade-in-up delay-200" style="color: rgba(255, 255, 255, 0.8); font-size: 1.5rem; font-weight: 400; margin-top: 1rem; max-width: 600px; opacity: 0; animation-fill-mode: forwards;">
                Tecnologia que molda o futuro dos seus negócios.
            </h2>
        </div>

        <div class="scroll-indicator fade-in-up delay-500">
            <span class="scroll-text">Clique e conheça mais</span>
            <i class="ph ph-caret-down"></i>
        </div>


    </div>

    <!-- Hero-to-Content Blur Transition -->
    <div class="hero-transition">
        <div class="hero-transition__blur"></div>
        <div class="hero-transition__gradient"></div>
    </div>

    <!-- HERO CONTENTS -->
    <section id="more-content" class="original-hero-content"
        style="position: relative; padding: 4rem 0 8rem; margin-top: -2rem; z-index: 30;">

        <div class="hero-container">
            <div class="hero-text-col reveal">
                <div class="badge-pill">
                    <div class="indicator-dot"></div>
                    <span>Inteligência Autônoma</span>
                </div>
                <h1>
                    Sua operação <br>
                    <span class="text-gradient">sem limites.</span>
                </h1>
                <p class="hero-sub" style="color: #475569;">
                    Construímos a arquitetura de dados e automação que permite sua empresa escalar com fluidez,
                    previsibilidade e zero atrito.
                </p>

                <div class="cta-group">
                    <a href="#" class="btn-primary open-modal">Começar Agora</a>
                    <a href="#solucoes" class="btn-minimal">Explorar Soluções <i class="ph ph-arrow-down"></i></a>
                </div>

                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-value">+30%</span>
                        <span class="stat-label">Eficiência</span>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="stat-item">
                        <span class="stat-value">0%</span>
                        <span class="stat-label">Erro Humano</span>
                    </div>
                    <div class="stat-divider"></div>
                    <div class="stat-item">
                        <span class="stat-value">5x</span>
                        <span class="stat-label">ROI Médio</span>
                    </div>
                </div>
            </div>

            <div class="hero-visual-col reveal delay-200" id="hero-performance-monitor">
                <div class="glass-card-main" style="overflow: hidden;" id="glass-card-main">
                    <div class="glass-header" id="glass-header-monitor">
                        <div class="glass-dots" id="glass-dots-monitor">
                            <div class="dot" id="monitor-dot-1"></div>
                            <div class="dot" id="monitor-dot-2"></div>
                            <div class="dot" id="monitor-dot-3"></div>
                        </div>
                        <span id="monitor-label-text"
                            style="font-size: 0.75rem; color: #94A3B8; font-weight: 600; letter-spacing: 0.05em;">PERFORMANCE_MONITOR</span>
                    </div>
                    <!-- Reuse Graph Content -->
                    <div class="performance-graph-wrapper" id="performance-graph-wrapper-monitor">
                        <!-- Before Zone -->
                        <div class="p-zone before" id="p-zone-before">
                            <div class="zone-header" id="zone-header-before">
                                <span class="zone-label" id="zone-label-before">Antes</span>
                                <span class="zone-tag error" id="zone-tag-before">Processos Manuais</span>
                            </div>
                            <div class="zone-visual" id="zone-visual-before">
                                <svg viewBox="0 0 300 50" class="line-static" preserveAspectRatio="none" id="svg-line-static">
                                    <path d="M0,40 Q30,45 60,35 T120,40 T180,30 T240,45 T300,40" fill="none"
                                        stroke="#94A3B8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        opacity="0.4" stroke-dasharray="4 4" id="path-line-static" />
                                </svg>
                            </div>
                        </div>

                        <!-- After Zone -->
                        <div class="p-zone after" id="p-zone-after">
                            <div class="zone-header" id="zone-header-after">
                                <span class="zone-label" id="zone-label-after">Depois (Aivra)</span>
                                <span class="zone-tag success" id="zone-tag-after">Automação Inteligente</span>
                            </div>
                            <div class="zone-visual growth" id="zone-visual-growth">
                                <svg viewBox="0 0 300 120" class="line-growth" preserveAspectRatio="none"
                                    style="overflow: visible;" id="svg-line-growth">
                                    <defs id="svg-defs-growth">
                                        <linearGradient id="aivraGradient" x1="0" y1="0" x2="1" y2="0">
                                            <stop offset="0%" stop-color="#2563EB" id="stop-gradient-start" />
                                            <stop offset="100%" stop-color="#60A5FA" id="stop-gradient-end" />
                                        </linearGradient>
                                        <linearGradient id="fillGradient" x1="0" y1="0" x2="0" y2="1">
                                            <stop offset="0%" stop-color="#2563EB" stop-opacity="0.15" id="stop-fill-start" />
                                            <stop offset="100%" stop-color="#2563EB" stop-opacity="0" id="stop-fill-end" />
                                        </linearGradient>
                                        <filter id="glow">
                                            <feGaussianBlur stdDeviation="4" result="coloredBlur" id="fe-gaussian-blur" />
                                            <feMerge id="fe-merge">
                                                <feMergeNode in="coloredBlur" id="fe-merge-node-blur" />
                                                <feMergeNode in="SourceGraphic" id="fe-merge-node-source" />
                                            </feMerge>
                                        </filter>
                                    </defs>
                                    <!-- Fill Area -->
                                    <path d="M0,100 C80,100 120,80 180,40 C240,10 270,5 300,0 L300,120 L0,120 Z"
                                        fill="url(#fillGradient)" class="growth-area" id="path-growth-area" />
                                    <!-- Line -->
                                    <path d="M0,100 C80,100 120,80 180,40 C240,10 270,5 300,0" fill="none"
                                        stroke="url(#aivraGradient)" stroke-width="3" stroke-linecap="round"
                                        class="animate-draw" filter="url(#glow)" id="path-animate-draw" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Tech Stack Carousel -->
    <section class="tech-carousel">
        <div class="tech-track">
            <!-- Original Set -->
            <div class="tech-item"><i class="ph ph-desktop"></i><span>Web Design</span></div>
            <div class="tech-item"><i class="ph ph-rocket-launch"></i><span>Transformação Digital</span></div>
            <div class="tech-item"><i class="ph ph-share-network"></i><span>Otimização de Processos</span></div>
            <div class="tech-item"><i class="ph ph-cloud"></i><span>Arquitetura de Infraestrutura Gerenciada</span></div>
            <div class="tech-item"><i class="ph ph-tag"></i><span>Soluções Personalizadas</span></div>
            <div class="tech-item"><i class="ph ph-file-js"></i><span>Desenvolvimento de Software</span></div>
            <div class="tech-item"><i class="ph ph-robot"></i><span>Eficiência Operacional</span></div>
            <div class="tech-item"><i class="ph ph-database"></i><span>Infraestrutura de Dados</span></div>

            <!-- Duplicated Set for Infinite Scroll -->
            <div class="tech-item"><i class="ph ph-desktop"></i><span>Web Design</span></div>
            <div class="tech-item"><i class="ph ph-rocket-launch"></i><span>Transformação Digital</span></div>
            <div class="tech-item"><i class="ph ph-share-network"></i><span>Otimização de Processos</span></div>
            <div class="tech-item"><i class="ph ph-cloud"></i><span>Arquitetura de Infraestrutura Gerenciada</span></div>
            <div class="tech-item"><i class="ph ph-tag"></i><span>Soluções Personalizadas</span></div>
            <div class="tech-item"><i class="ph ph-file-js"></i><span>Desenvolvimento de Software</span></div>
            <div class="tech-item"><i class="ph ph-robot"></i><span>Eficiência Operacional</span></div>
            <div class="tech-item"><i class="ph ph-database"></i><span>Infraestrutura de Dados</span></div>
        </div>
    </section>

    <!-- Soluções - Control Panel Grid Style -->
    <section id="solucoes" class="section">
        <div class="container">
            <div class="section-header reveal">
                <h2>Ecossistema de Eficiência</h2>
                <p>Não vendemos ferramentas isoladas. Construímos a infraestrutura completa para sua empresa operar em
                    alta performance.</p>
            </div>

            <div class="control-panel-grid reveal delay-100">
                <!-- Main Feature: Automation -->
                <div class="panel-item primary-panel technical-card">
                    <div class="panel-header">
                        <div class="panel-icon primary"><i class="ph ph-gear-six"></i></div>
                        <div class="panel-status"><span class="status-dot"></span>ACTIVE</div>
                    </div>
                    <div class="panel-content">
                        <h3>Automação "End-to-End"</h3>
                        <p>Eliminamos silos operacionais. Conectamos Marketing, Vendas e Financeiro em um fluxo contínuo
                            e sem intervenção humana para tarefas repetitivas.</p>
                        <div class="panel-tags">
                            <span>Financeiro</span>
                            <span>Onboarding</span>
                            <span>Logística</span>
                        </div>
                    </div>
                    <div class="panel-visual">
                        <div class="technical-lines"></div>
                    </div>
                </div>

                <!-- AI Intelligence -->
                <div class="panel-item technical-card">
                    <div class="panel-header">
                        <div class="panel-icon secondary"><i class="ph ph-brain"></i></div>
                    </div>
                    <div class="panel-content">
                        <h3>Inteligência Artificial Corporativa</h3>
                        <p>Agentes de IA que leem contratos, atendem suporte L1/L2 e analisam dados de vendas em tempo
                            real.</p>
                    </div>
                </div>

                <!-- Data/Analytics -->
                <div class="panel-item technical-card">
                    <div class="panel-header">
                        <div class="panel-icon accent"><i class="ph ph-chart-bar"></i></div>
                    </div>
                    <div class="panel-content">
                        <h3>Data Intelligence</h3>
                        <p>Dashboards que mostram a saúde do negócio, não métricas de vaidade. LTV, CAC e Margem em
                            tempo real.</p>
                    </div>
                </div>

                <!-- Infrastructure -->
                <div class="panel-item wide-panel technical-card">
                    <div class="panel-content horizontal">
                        <div class="icon-wrapper dark"><i class="ph ph-cloud"></i></div>
                        <div class="text-content">
                            <h3>Infraestrutura & Cloud</h3>
                            <p>Arquitetura escalável na AWS/Azure. Preparamos seu terreno para suportar crescimento
                                exponencial sem quedas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Soluções & SaaS Section -->
    <section id="solucoes-saas" class="section bg-surface">
        <div class="container">
            <div class="section-header reveal">
                <h2>Soluções prontas para acelerar resultados</h2>
                <p>Além de projetos sob medida, desenvolvemos SaaS e soluções proprietárias focadas em resolver dores
                    operacionais recorrentes de forma rápida e escalável.</p>
            </div>
            <div class="saas-grid">
                <div class="saas-card glassmorphism reveal delay-100">
                    <div class="saas-badge active">Disponível</div>
                    <div class="saas-header">
                        <img src="{{ asset('assets/img/Logo Imobify.svg') }}" alt="Imobify Logo" class="saas-logo-img">
                        <h3>Imobify</h3>
                    </div>
                    <p>Chega de prints de comprovantes perdidos. Gerencie todos os seus aluguéis direto no WhatsApp:
                        recibos automáticos, alertas de vencimento e relatórios prontos para o Imposto de Renda.</p>
                    <div class="saas-tags">
                        <span class="tag">WhatsApp</span>
                        <span class="tag">IA</span>
                        <span class="tag">Imobiliário</span>
                    </div>
                    <a href="https://imobify.app" target="_blank" rel="noopener noreferrer" class="saas-cta">
                        Acessar Plataforma <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
                <div class="saas-card glassmorphism reveal delay-200">
                    <div class="saas-badge active">Novo</div>
                    <div class="saas-header">
                        <img src="{{ asset('assets/img/Logo FiscalDock.svg') }}" alt="FiscalDock Logo" class="saas-logo-img">
                        <h3
                            style="font-family: 'Inter', sans-serif; font-weight: 700; letter-spacing: -0.02em; color: #1E293B;">
                            FiscalDock</h3>
                    </div>
                    <p>Centralize arquivos fiscais, identifique pendências e riscos automaticamente, gere relatórios
                        prontos para decisão e automatize cobranças/entregas pelo WhatsApp — com trilha de evidências.
                    </p>
                    <div class="saas-tags">
                        <span class="tag">SPED</span>
                        <span class="tag">Compliance</span>
                        <span class="tag">WhatsApp</span>
                    </div>
                    <a href="https://fiscaldock.com.br" target="_blank" rel="noopener noreferrer" class="saas-cta">
                        Conhecer Solução <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
                <div class="saas-card glassmorphism reveal delay-300">
                    <div class="saas-badge active">Novo</div>
                    <div class="saas-header">
                        <img src="{{ asset('assets/img/calzapLogo.png') }}" alt="CalZAP Logo" class="saas-logo-img" style="border-radius: 8px;">
                        <h3
                            style="font-family: 'Inter', sans-serif; font-weight: 700; letter-spacing: -0.02em; color: #1E293B;">
                            CalZAP</h3>
                    </div>
                    <p>Automação inteligente para WhatsApp que recupera vendas e atende clientes 24/7. Crie fluxos visuais, integre com plataformas de vendas e use IA para transcrever áudios e responder com contexto.</p>
                    <div class="saas-tags">
                        <span class="tag">WhatsApp</span>
                        <span class="tag">Vendas</span>
                        <span class="tag">IA</span>
                    </div>
                    <a href="#" class="saas-cta open-modal">
                        Saiba Mais <i class="ph ph-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section (Luminous Flow) -->
    <section id="sobre" class="section">
        <div class="container">
            <div class="about-flow-grid">
                <div class="about-manifesto reveal">
                    <h2>Arquitetura tecnológica<br>orientada a <span class="highlight-gradient">resultados</span></h2>
                    <p>Não somos apenas implementadores. Somos arquitetos de um futuro onde sua operação flui sem
                        gargalos manuais. Transformamos complexidade em simplicidade escalável.</p>
                </div>

                <div class="glass-features reveal delay-100">
                    <div class="glass-feature-card">
                        <div class="gf-icon"><i class="ph ph-chart-polar"></i></div>
                        <div class="gf-content">
                            <h4>Foco em ROI</h4>
                            <p>Cada projeto é desenhado para gerar retorno mensurável e visível.</p>
                        </div>
                    </div>

                    <div class="glass-feature-card">
                        <div class="gf-icon"><i class="ph ph-users-three"></i></div>
                        <div class="gf-content">
                            <h4>Parceria Estratégica</h4>
                            <p>Atuamos como extensão do seu time, garantindo evolução contínua.</p>
                        </div>
                    </div>

                    <div class="glass-feature-card">
                        <div class="gf-icon"><i class="ph ph-infinity"></i></div>
                        <div class="gf-content">
                            <h4>Execução End-to-End</h4>
                            <p>Do diagnóstico à operação assistida. Cuidamos de todo o ciclo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Como Trabalhamos - Timeline Section -->
    <section id="como-trabalhamos" class="section">
        <div class="container">
            <div class="section-header reveal">
                <h2>Método orientado a resultado</h2>
                <p>Da estratégia à execução em 4 etapas.</p>
            </div>
            <div class="timeline">
                <div class="timeline-line"></div>
                <div class="timeline-step reveal delay-100">
                    <div class="step-marker"><span class="step-number">01</span></div>
                    <div class="step-content">
                        <h3>Diagnóstico Estratégico</h3>
                        <p>Mapeamos fricções, gargalos e o custo oculto da ineficiência.</p>
                    </div>
                </div>
                <div class="timeline-step reveal delay-200">
                    <div class="step-marker"><span class="step-number">02</span></div>
                    <div class="step-content">
                        <h3>Desenho da Arquitetura</h3>
                        <p>Criamos a solução que conecta estratégia, processos e tecnologia.</p>
                    </div>
                </div>
                <div class="timeline-step reveal delay-300">
                    <div class="step-marker"><span class="step-number">03</span></div>
                    <div class="step-content">
                        <h3>Implementação e Integração</h3>
                        <p>Executamos com foco em performance, segurança e escalabilidade.</p>
                    </div>
                </div>
                <div class="timeline-step reveal delay-400">
                    <div class="step-marker"><span class="step-number">04</span></div>
                    <div class="step-content">
                        <h3>Evolução Contínua</h3>
                        <p>Ajustamos e evoluímos conforme o negócio cresce.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Metrics / Social Proof -->
    <section id="impacto" class="section bg-dark text-white">
        <div class="container">
            <div class="section-header reveal" style="color: white; text-align: left;">
                <h2 style="color: white;">Resultados que sustentam o crescimento.</h2>
                <p style="color: #94a3b8;">Não prometemos "agilidade". Entregamos números auditáveis.</p>
            </div>

            <div class="metrics-grid">
                <div class="metric-card reveal delay-100">
                    <div class="metric-value">30%</div>
                    <div class="metric-label">Redução média de OPEX</div>
                    <p class="metric-desc">Cortamos custos operacionais eliminando tarefas manuais redundantes.</p>
                </div>
                <div class="metric-card reveal delay-200">
                    <div class="metric-value">24/7</div>
                    <div class="metric-label">Operação Autônoma</div>
                    <p class="metric-desc">Sua empresa vendendo e atendendo enquanto você dorme. Literalmente.</p>
                </div>
                <div class="metric-card reveal delay-300">
                    <div class="metric-value">3x</div>
                    <div class="metric-label">Aumento de Capacidade</div>
                    <p class="metric-desc">Escale sua carteira de clientes sem precisar triplicar a equipe.</p>
                </div>
            </div>

            <blockquote class="final-quote reveal delay-400">
                <span class="gradient-sweep">Não entregamos sistemas. <strong>Entregamos estruturas que imprimem
                        dinheiro.</strong></span>
            </blockquote>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="section">
        <div class="container">
            <div class="section-header reveal">
                <h2>Perguntas Frequentes</h2>
                <p>Tire suas dúvidas sobre como trabalhamos.</p>
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
                        <h3>Vocês oferecem suporte contínuo após a implementação?</h3>
                        <i class="ph ph-caret-down"></i>
                    </div>
                    <div class="accordion-content">
                        <p>Sim. Oferecemos planos de evolução contínua que incluem monitoramento, ajustes, novas
                            automações e consultoria estratégica. Nosso objetivo é ser parceiro de longo prazo, não
                            apenas um fornecedor de projeto.</p>
                    </div>
                </div>
                <div class="accordion-item reveal delay-300">
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

    <!-- Final CTA (Luminous Card) -->
    <section id="cta-card-section" class="section" style="padding-bottom: 8rem;">
        <div class="container">
            <div class="luminous-cta-wrapper reveal">
                <div class="luminous-card">
                    <!-- Background Glows -->
                    <div class="cta-orb cta-orb-1"></div>
                    <div class="cta-orb cta-orb-2"></div>

                    <div class="cta-content">
                        <h2 class="cta-gradient-text">Redesenhe o trabalho.<br>Escale com fluidez.</h2>
                        <p class="cta-sub">
                            Sua empresa pronta para o próximo nível de eficiência autônoma.
                        </p>
                        <a href="#" class="btn-primary open-modal" style="padding: 1rem 3rem; font-size: 1.1rem;">
                            Agende uma Análise
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="footer-brand">
                <a href="index.html" class="footer-logo">
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

    <!-- Modal - Multi-Step Qualification Form -->
    <div id="lead-modal" class="modal">
        <div class="modal-content modal-multistep">
            <span class="close-modal">&times;</span>

            <!-- Progress Bar -->
            <div class="form-progress">
                <div class="progress-bar">
                    <div class="progress-fill" id="progress-fill"></div>
                </div>
                <span class="progress-text" id="progress-text">Etapa 1 de 8</span>
            </div>

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

                <!-- SEÇÃO 2: PERFIL & PODER DE DECISÃO -->
                <div class="form-step" data-step="2">
                    <div class="step-header">
                        <span class="step-label">Etapa 2 de 8</span>
                        <h2>Perfil & Poder de Decisão</h2>
                        <p>Queremos entender seu contexto na empresa.</p>
                    </div>
                    <div class="form-group">
                        <label for="company">Empresa</label>
                        <div class="input-wrapper"><i class="ph ph-buildings"></i><input type="text" id="company"
                                name="company" required placeholder="Nome da sua empresa"></div>
                    </div>
                    <div class="form-group">
                        <label for="role">Cargo / Função</label>
                        <div class="input-wrapper"><i class="ph ph-briefcase"></i><input type="text" id="role"
                                name="role" required placeholder="Ex: Diretor de Operações"></div>
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
                <!-- Additional steps omitted for brevity in prompt context but included in full file write -->
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

                <!-- SEÇÃO 4: PROCESSOS & GARGALOS (pulando a seção 4 original) -->
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
                                <span class="radio-label">Totalmente manuais</span>
                            </label>
                            <label class="radio-option">
                                <input type="radio" name="process_status" value="partial">
                                <span class="radio-custom"></span>
                                <span class="radio-label">Parcialmente automatizados</span>
                            </label>
                            <label class="radio-option">
                                <input type="radio" name="process_status" value="automated">
                                <span class="radio-custom"></span>
                                <span class="radio-label">Automatizados com ferramentas</span>
                            </label>
                            <label class="radio-option">
                                <input type="radio" name="process_status" value="integrated">
                                <span class="radio-custom"></span>
                                <span class="radio-label">Bem estruturados e integrados</span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- SEÇÃO 5: MATURIDADE TECNOLÓGICA -->
                <div class="form-step" data-step="5">
                    <div class="step-header">
                        <span class="step-label">Etapa 5 de 8</span>
                        <h2>Maturidade Tecnológica</h2>
                        <p>Entendendo sua visão estratégica sobre tecnologia.</p>
                    </div>

                    <div class="form-group">
                        <label for="tech_vision">Como você enxerga o uso de tecnologia e automação dentro da sua empresa
                            hoje?</label>
                        <div class="textarea-wrapper">
                            <textarea id="tech_vision" name="tech_vision" required rows="3"
                                placeholder="Sua visão sobre tecnologia na empresa..."></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="past_attempts">Você já tentou automatizar ou estruturar processos antes? O que
                            funcionou e o que
                            não funcionou?</label>
                        <div class="textarea-wrapper">
                            <textarea id="past_attempts" name="past_attempts" required rows="3"
                                placeholder="Compartilhe suas experiências anteriores..."></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="current_tools">Quais ferramentas ou sistemas você utiliza atualmente?</label>
                        <div class="textarea-wrapper">
                            <textarea id="current_tools" name="current_tools" required rows="2"
                                placeholder="CRM, ERP, WhatsApp, planilhas, etc."></textarea>
                        </div>
                    </div>
                </div>

                <!-- SEÇÃO 6: PROBLEMA, IMPACTO & URGÊNCIA -->
                <div class="form-step" data-step="6">
                    <div class="step-header">
                        <span class="step-label">Etapa 6 de 8</span>
                        <h2>Problema, Impacto & Urgência</h2>
                        <p>Entendendo o que realmente importa agora.</p>
                    </div>

                    <div class="form-group">
                        <label for="main_problem">Qual problema, se resolvido agora, teria maior impacto no seu
                            negócio?</label>
                        <div class="textarea-wrapper">
                            <textarea id="main_problem" name="main_problem" required rows="3"
                                placeholder="Descreva o principal problema..."></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="impact">O que muda na empresa se esse problema for resolvido nos próximos 60–90
                            dias?</label>
                        <div class="textarea-wrapper">
                            <textarea id="impact" name="impact" required rows="3"
                                placeholder="Qual seria o impacto real..."></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="timing">Por que você está buscando essa solução neste momento?</label>
                        <div class="textarea-wrapper">
                            <textarea id="timing" name="timing" required rows="2"
                                placeholder="O que motivou essa busca agora..."></textarea>
                        </div>
                    </div>
                </div>

                <!-- SEÇÃO 7: INVESTIMENTO & GOVERNANÇA -->
                <div class="form-step" data-step="7">
                    <div class="step-header">
                        <span class="step-label">Etapa 7 de 8</span>
                        <h2>Investimento & Governança</h2>
                        <p>Alinhando expectativas para avançarmos juntos.</p>
                    </div>

                    <div class="form-group">
                        <label>Para esse tipo de projeto, qual faixa de investimento faz sentido para você hoje?</label>
                        <div class="radio-group">
                            <label class="radio-option">
                                <input type="radio" name="budget" value="3k-5k" required>
                                <span class="radio-custom"></span>
                                <span class="radio-label">R$3.000 – R$5.000</span>
                            </label>
                            <label class="radio-option">
                                <input type="radio" name="budget" value="5k-10k">
                                <span class="radio-custom"></span>
                                <span class="radio-label">R$5.000 – R$10.000</span>
                            </label>
                            <label class="radio-option">
                                <input type="radio" name="budget" value="10k-20k">
                                <span class="radio-custom"></span>
                                <span class="radio-label">R$10.000 – R$20.000</span>
                            </label>
                            <label class="radio-option">
                                <input type="radio" name="budget" value="20k+">
                                <span class="radio-custom"></span>
                                <span class="radio-label">+R$20.000</span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="other_decision_makers">Quem além de você participa da decisão final?</label>
                        <div class="input-wrapper">
                            <i class="ph ph-users"></i>
                            <input type="text" id="other_decision_makers" name="other_decision_makers" required
                                placeholder="Ou 'só eu'">
                        </div>
                    </div>
                </div>

                <!-- SEÇÃO 8: EXPECTATIVA & FECHAMENTO -->
                <div class="form-step" data-step="8">
                    <div class="step-header">
                        <span class="step-label">Etapa 8 de 8</span>
                        <h2>Expectativa & Fechamento</h2>
                        <p>Quase lá! Conte-nos como podemos ajudar.</p>
                    </div>

                    <div class="form-group">
                        <label for="expectation">O que você espera que a gente te ajude a resolver nesse primeiro
                            contato?</label>
                        <div class="textarea-wrapper">
                            <textarea id="expectation" name="expectation" required rows="4"
                                placeholder="Seja específico sobre suas expectativas..."></textarea>
                        </div>
                    </div>

                    <div class="privacy-notice">
                        <i class="ph ph-lock"></i>
                        <p>As informações fornecidas serão utilizadas apenas para análise do seu cenário e para contato
                            relacionado
                            à solução. Seus dados não serão compartilhados.</p>
                    </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="form-navigation">
                    <button type="button" class="btn-prev" id="btn-prev" disabled><i class="ph ph-arrow-left"></i>
                        Voltar</button>
                    <button type="button" class="btn-next" id="btn-next">Próximo <i
                            class="ph ph-arrow-right"></i></button>
                    <button type="submit" class="btn-submit" id="btn-submit" style="display: none;"><i
                            class="ph ph-paper-plane-tilt"></i> Enviar Solicitação</button>
                </div>
            </form>
        </div>
    </div>

    <script type="module" src="/js/main.js"></script>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</body>

</html>