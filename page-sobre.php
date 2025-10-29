<?php
/*
Template Name: Sobre
*/
get_header(); ?>

<style>
    .page-hero {
        margin-top: 88px;
        min-height: 50vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.6) 100%),
                    url('https://images.unsplash.com/photo-1438232992991-995b7058bbb3?w=1920&q=80') center/cover;
        color: white;
        text-align: center;
        padding: 60px 40px;
    }
    
    .page-hero h1 {
        font-family: 'Cormorant Garamond', serif;
        font-size: 4rem;
        font-weight: 300;
        letter-spacing: 3px;
        margin-bottom: 20px;
    }
    
    .page-hero p {
        font-size: 1.2rem;
        opacity: 0.9;
        letter-spacing: 2px;
    }
    
    .content-section {
        max-width: 1200px;
        margin: 0 auto;
        padding: 100px 40px;
    }
    
    .section-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 3rem;
        margin-bottom: 30px;
        font-weight: 300;
        letter-spacing: 2px;
    }
    
    .section-text {
        font-size: 1.1rem;
        line-height: 2;
        color: #444;
        margin-bottom: 30px;
    }
    
    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 40px;
        margin: 80px 0;
    }
    
    .stat-card {
        text-align: center;
        padding: 40px;
        border: 2px solid #f0f0f0;
        transition: all 0.3s;
    }
    
    .stat-card:hover {
        border-color: #000;
        transform: translateY(-5px);
    }
    
    .stat-number {
        font-family: 'Cormorant Garamond', serif;
        font-size: 4rem;
        font-weight: 600;
        color: #000;
        margin-bottom: 10px;
    }
    
    .stat-label {
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: #666;
    }
    
    .values-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 50px;
        margin-top: 60px;
    }
    
    .value-card {
        text-align: center;
        padding: 40px;
        background: #f9f9f9;
    }
    
    .value-icon {
        font-size: 3rem;
        margin-bottom: 20px;
    }
    
    .value-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 1.8rem;
        margin-bottom: 15px;
        font-weight: 600;
    }
    
    .value-text {
        font-size: 0.95rem;
        line-height: 1.8;
        color: #555;
    }
    
    .leadership-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 40px;
        margin-top: 60px;
    }
    
    .leader-card {
        text-align: center;
    }
    
    .leader-photo {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        margin: 0 auto 20px;
        background: #f0f0f0;
        overflow: hidden;
    }
    
    .leader-photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .leader-name {
        font-family: 'Cormorant Garamond', serif;
        font-size: 1.8rem;
        margin-bottom: 5px;
        font-weight: 600;
    }
    
    .leader-role {
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: #666;
        margin-bottom: 15px;
    }
    
    .leader-bio {
        font-size: 0.95rem;
        line-height: 1.8;
        color: #555;
    }
</style>

<!-- Hero Section -->
<section class="page-hero">
    <div>
        <h1>Sobre a HPC Church</h1>
        <p>Conectando Pessoas com Deus e Umas com as Outras</p>
    </div>
</section>

<!-- Nossa História -->
<section class="content-section">
    <h2 class="section-title">Nossa História</h2>
    <p class="section-text">
        A HPC Church nasceu de um sonho de criar uma comunidade vibrante onde pessoas de todas as 
        idades e origens pudessem se conectar com Deus e umas com as outras de maneira autêntica. 
        Fundada em Marietta, Atlanta, nossa igreja tem crescido através do amor, serviço e compromisso 
        com a Palavra de Deus.
    </p>
    <p class="section-text">
        Desde o início, nossa missão tem sido clara: ajudar cada pessoa a descobrir seu propósito em 
        Cristo, crescer na fé e fazer a diferença no mundo. Acreditamos que a igreja não é apenas um 
        lugar que você visita aos domingos, mas uma família da qual você faz parte todos os dias.
    </p>
    <p class="section-text">
        Hoje, somos uma comunidade de centenas de pessoas que se reúnem para adorar, aprender, servir 
        e crescer juntos. Nossa visão é continuar expandindo o Reino de Deus, uma vida transformada 
        por vez.
    </p>
</section>

<!-- Estatísticas -->
<section class="content-section" style="background: #fafafa;">
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-number">500+</div>
            <div class="stat-label">Membros Ativos</div>
        </div>
        <div class="stat-card">
            <div class="stat-number">50+</div>
            <div class="stat-label">Grupos de Conexão</div>
        </div>
        <div class="stat-card">
            <div class="stat-number">15+</div>
            <div class="stat-label">Ministérios</div>
        </div>
        <div class="stat-card">
            <div class="stat-number">10</div>
            <div class="stat-label">Anos de Ministério</div>
        </div>
    </div>
</section>

<!-- Nossa Missão -->
<section class="content-section">
    <h2 class="section-title">Nossa Missão</h2>
    <p class="section-text" style="font-size: 1.3rem; text-align: center; max-width: 900px; margin: 0 auto 60px; font-weight: 300; line-height: 2;">
        "Conectar pessoas com Deus e umas com as outras através do amor de Cristo, 
        ajudando cada um a descobrir seu propósito, crescer na fé e fazer a diferença no mundo."
    </p>
</section>

<!-- Nossos Valores -->
<section class="content-section" style="background: #fafafa;">
    <h2 class="section-title" style="text-align: center;">Nossos Valores</h2>
    
    <div class="values-grid">
        <div class="value-card">
            <div class="value-icon">📖</div>
            <h3 class="value-title">Palavra de Deus</h3>
            <p class="value-text">
                Acreditamos que a Bíblia é a Palavra de Deus, nossa autoridade final para fé e vida. 
                Comprometemo-nos a ensiná-la com fidelidade e aplicá-la com relevância.
            </p>
        </div>
        
        <div class="value-card">
            <div class="value-icon">🙏</div>
            <h3 class="value-title">Oração</h3>
            <p class="value-text">
                Valorizamos a oração como fundamento de tudo que fazemos. Buscamos a Deus em 
                todas as decisões e dependemos do Espírito Santo para nos guiar.
            </p>
        </div>
        
        <div class="value-card">
            <div class="value-icon">❤️</div>
            <h3 class="value-title">Amor</h3>
            <p class="value-text">
                O amor de Cristo nos constrange a amar uns aos outros incondicionalmente. 
                Criamos um ambiente onde todos são bem-vindos e valorizados.
            </p>
        </div>
        
        <div class="value-card">
            <div class="value-icon">🤝</div>
            <h3 class="value-title">Comunidade</h3>
            <p class="value-text">
                Acreditamos que fomos criados para relacionamentos. Nos grupos pequenos, 
                experimentamos conexões autênticas e crescemos juntos na fé.
            </p>
        </div>
        
        <div class="value-card">
            <div class="value-icon">🌟</div>
            <h3 class="value-title">Excelência</h3>
            <p class="value-text">
                Fazemos tudo com excelência como uma forma de honrar a Deus. Nos esforçamos 
                para dar o melhor em tudo que fazemos para o Reino.
            </p>
        </div>
        
        <div class="value-card">
            <div class="value-icon">🌍</div>
            <h3 class="value-title">Missões</h3>
            <p class="value-text">
                Somos apaixonados por levar o Evangelho até os confins da terra. Apoiamos 
                missões locais e globais através de oração, recursos e envio.
            </p>
        </div>
    </div>
</section>

<!-- Liderança -->
<section class="content-section">
    <h2 class="section-title" style="text-align: center;">Nossa Liderança</h2>
    
    <div class="leadership-grid">
        <div class="leader-card">
            <div class="leader-photo">
                <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?w=400&h=400&fit=crop" alt="Pastor Otavio">
            </div>
            <h3 class="leader-name">Pastor Otavio</h3>
            <p class="leader-role">Pastor Principal</p>
            <p class="leader-bio">
                Líder apaixonado por ver vidas transformadas pelo poder de Deus. Com mais de 15 anos 
                de ministério, dedica-se a ensinar a Palavra com clareza e relevância.
            </p>
        </div>
        
        <div class="leader-card">
            <div class="leader-photo">
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=400&fit=crop" alt="Pastora">
            </div>
            <h3 class="leader-name">Pastora Ana</h3>
            <p class="leader-role">Pastora Associada</p>
            <p class="leader-bio">
                Lidera os ministérios de mulheres e crianças com amor e dedicação. Seu coração é 
                ver famílias fortalecidas e crianças crescendo no conhecimento de Deus.
            </p>
        </div>
        
        <div class="leader-card">
            <div class="leader-photo">
                <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=400&h=400&fit=crop" alt="Pastor de Jovens">
            </div>
            <h3 class="leader-name">Pastor Lucas</h3>
            <p class="leader-role">Pastor de Jovens</p>
            <p class="leader-bio">
                Apaixonado pela próxima geração, trabalha para conectar jovens com Deus através 
                de adoração vibrante, ensino relevante e relacionamentos autênticos.
            </p>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="content-section" style="background: #1a1a1a; color: white; text-align: center;">
    <h2 class="section-title" style="color: white;">Faça Parte da Nossa Família</h2>
    <p class="section-text" style="color: rgba(255,255,255,0.9); max-width: 700px; margin: 0 auto 40px;">
        Não importa onde você está em sua jornada espiritual, há um lugar para você na HPC Church. 
        Venha nos visitar e descubra como você pode crescer e fazer a diferença.
    </p>
    <button class="elegant-btn" onclick="openModal('connectModal')" style="background: white; color: #000; border: 2px solid white;">
        Conecte-se Agora
    </button>
</section>

<?php 
get_template_part( 'template-parts/modals' );
get_footer(); 
?>
