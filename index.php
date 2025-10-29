<?php get_header(); ?>

<style>
    /* Hero Section */
    .hero-section {
        margin-top: 88px;
        min-height: 85vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        background: linear-gradient(135deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.5) 100%), 
                    url('https://images.unsplash.com/photo-1438232992991-995b7058bbb3?w=1920&q=80') center/cover;
        color: white;
        position: relative;
    }
    
    .hero-content {
        max-width: 900px;
        padding: 40px;
    }
    
    .hero-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 5rem;
        font-weight: 300;
        letter-spacing: 3px;
        margin-bottom: 25px;
        line-height: 1.2;
    }
    
    .hero-subtitle {
        font-size: 1.3rem;
        font-weight: 300;
        letter-spacing: 3px;
        opacity: 0.95;
        margin-bottom: 40px;
    }
    
    .hero-cta {
        display: inline-block;
        padding: 18px 45px;
        background: white;
        color: #000;
        text-decoration: none;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 2px;
        transition: all 0.3s ease;
        border: 2px solid white;
        font-size: 0.9rem;
    }
    
    .hero-cta:hover {
        background: transparent;
        color: white;
    }
    
    /* Container */
    .container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 100px 40px;
    }
    
    /* Section Title */
    .section-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 3rem;
        text-align: center;
        margin-bottom: 60px;
        font-weight: 300;
        letter-spacing: 2px;
    }
    
    /* Grid */
    .grid-3 {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 50px;
        margin-top: 60px;
    }
    
    .card {
        text-align: center;
        padding: 40px;
        border: 2px solid #f0f0f0;
        transition: all 0.3s;
    }
    
    .card:hover {
        border-color: #000;
        transform: translateY(-5px);
    }
    
    .card-icon {
        font-size: 3rem;
        margin-bottom: 20px;
    }
    
    .card-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 1.8rem;
        margin-bottom: 15px;
        font-weight: 600;
    }
    
    .card-text {
        font-size: 0.95rem;
        line-height: 1.8;
        color: #555;
    }
    
    .elegant-btn {
        display: inline-block;
        margin: 10px;
        padding: 16px 40px;
        background: #000;
        color: white;
        text-decoration: none;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 2px;
        transition: all 0.3s ease;
        border: 2px solid #000;
        font-size: 0.85rem;
        cursor: pointer;
    }
    
    .elegant-btn:hover {
        background: white;
        color: #000;
    }
    
    @media (max-width: 968px) {
        .hero-title {
            font-size: 3rem;
        }
        
        .hero-subtitle {
            font-size: 1.1rem;
        }
        
        .container {
            padding: 60px 20px;
        }
    }
</style>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-content">
        <h1 class="hero-title">Dê Seu Próximo Passo</h1>
        <p class="hero-subtitle">Descubra Seu Propósito • Cresça na Fé • Faça a Diferença</p>
        <a href="#nextsteps" class="hero-cta">Explore as Oportunidades</a>
    </div>
</section>

<!-- Discover HPC Church Section -->
<section id="nextsteps" class="container" style="text-align: center;">
    <p class="section-badge" style="font-size: 0.9rem; letter-spacing: 2px; text-transform: uppercase; color: #000; font-weight: 600; margin-bottom: 20px;">Inscrições Abertas para Dezembro 2025</p>
    <h2 class="section-title">Descubra a HPC Church</h2>
    <p class="card-text" style="max-width: 900px; margin: 0 auto 20px;">
        Seja você novo na HPC Church ou querendo aprender mais sobre nossa Visão e Valores Fundamentais, 
        queremos colocá-lo no caminho rápido para descobrir seus próximos passos em direção a viver a vida 
        ao máximo—tanto em se conectar na HPC Church quanto em se tornar a pessoa que Deus o chamou para ser.
    </p>
    <p class="card-text" style="max-width: 900px; margin: 0 auto 30px;">
        Descubra a HPC Church ajuda você a aprender um pouco mais sobre si mesmo, onde você pertence na HPC Church, 
        e acreditamos que você descobrirá verdadeiramente como estar plenamente conectado, conhecido e amado.
    </p>
    <div class="date-info" style="font-size: 0.9rem; letter-spacing: 2px; text-transform: uppercase; color: #000; font-weight: 600; margin: 35px 0; padding: 20px 0; border-top: 1px solid #e0e0e0; border-bottom: 1px solid #e0e0e0;">
        20 de Novembro, 2025 às 18:00
    </div>
    <button class="elegant-btn" onclick="openModal('connectModal')">Inscreva-se Agora</button>
</section>

<div class="divider" style="max-width: 800px; margin: 100px auto; height: 1px; background: linear-gradient(to right, transparent, #ddd, transparent);"></div>

<!-- Discover Dream Team Section -->
<section class="container" style="text-align: center;">
    <h2 class="section-title">Descubra o Dream Team</h2>
    <p class="card-text" style="max-width: 900px; margin: 0 auto 30px;">
        Seja você novo na HPC Church ou apenas se sentindo estagnado em sua fé, queremos colocá-lo no 
        caminho rápido para descobrir seus próximos passos em direção a viver a vida ao máximo fazendo 
        a diferença na vida de outras pessoas.
    </p>
    <button class="elegant-btn" onclick="openModal('teamModal')">Junte-se ao Time</button>
</section>

<div class="divider" style="max-width: 800px; margin: 100px auto; height: 1px; background: linear-gradient(to right, transparent, #ddd, transparent);"></div>

<!-- Baptisms Section -->
<section class="container" style="text-align: center;">
    <h2 class="section-title">Batismos</h2>
    <p class="card-text" style="max-width: 900px; margin: 0 auto 20px;">
        <strong>Adoraríamos que você participasse do Batismo!</strong>
    </p>
    <p class="card-text" style="max-width: 900px; margin: 0 auto 30px;">
        O Batismo é a expressão externa de nosso compromisso interno de seguir a Cristo e uma celebração 
        de sua nova vida em Cristo! Se você está interessado em ser batizado, por favor preencha o formulário abaixo.
    </p>
</section>

<!-- Verse Section -->
<div class="verse-section" style="background: #f9f9f9; padding: 80px 40px; margin: 80px 0; border-top: 1px solid #e0e0e0; border-bottom: 1px solid #e0e0e0;">
    <div class="verse-quote" style="max-width: 800px; margin: 0 auto; text-align: center;">
        <p class="verse-text" style="font-family: 'Cormorant Garamond', serif; font-size: 1.8rem; font-weight: 300; color: #1a1a1a; font-style: italic; line-height: 1.8; margin-bottom: 30px;">
            "Pedro respondeu: 'Arrependam-se, e cada um de vocês seja batizado em nome de Jesus Cristo 
            para perdão dos seus pecados, e receberão o dom do Espírito Santo.'"
        </p>
        <p class="verse-reference" style="font-size: 0.85rem; letter-spacing: 2px; text-transform: uppercase; color: #666; font-weight: 500;">
            Atos 2:38
        </p>
    </div>
</div>

<section class="container" style="text-align: center; padding-top: 0;">
    <button class="elegant-btn" onclick="openModal('baptismModal')">Quero Ser Batizado</button>
</section>

<div class="divider" style="max-width: 800px; margin: 100px auto; height: 1px; background: linear-gradient(to right, transparent, #ddd, transparent);"></div>

<!-- Connection Groups Section -->
<section class="container" style="text-align: center;">
    <p class="section-badge" style="font-size: 0.9rem; letter-spacing: 2px; text-transform: uppercase; color: #000; font-weight: 600; margin-bottom: 20px;">Inscrições para Grupos de Conexão Abertas</p>
    <h2 class="section-title">Somos Melhores Juntos</h2>
    <p class="card-text" style="max-width: 900px; margin: 0 auto 20px;">
        Neste outono, nossos grupos são um lugar para construir amizades, compartilhar a vida e crescer ao lado de outros. 
        Somos conhecidos, amados e desafiados através de relacionamentos autênticos, e esses grupos são projetados 
        para ajudá-lo a experimentar isso de uma forma significativa.
    </p>
    <p class="card-text" style="max-width: 900px; margin: 0 auto 30px;">
        Desde Grupos de Estudo Bíblico e Grupos de Atividades até Grupos de Serviço e mais, há algo para cada 
        estágio da vida e interesse. Seja você novo na HPC ou parte de nossa comunidade há anos, 
        você encontrará um grupo onde pode se conectar, se sentir encorajado e aproveitar o tempo juntos.
    </p>
    <a href="<?php echo home_url('/comunidade'); ?>" class="elegant-btn" style="text-decoration: none;">Encontre Seu Grupo</a>
</section>

<div class="divider" style="max-width: 800px; margin: 100px auto; height: 1px; background: linear-gradient(to right, transparent, #ddd, transparent);"></div>

<!-- Get Connected Section -->
<section class="container" style="text-align: center;">
    <h2 class="section-title">Conecte-se Conosco</h2>
    <p class="card-text" style="max-width: 900px; margin: 0 auto 30px;">
        Não importa em que estágio da vida você esteja, há um lugar onde você pertence na HPC Church.
    </p>
    <button class="elegant-btn" onclick="openModal('connectModal')">Conecte-se Agora</button>
</section>

<div class="divider" style="max-width: 800px; margin: 100px auto; height: 1px; background: linear-gradient(to right, transparent, #ddd, transparent);"></div>

<!-- SOAP Guide Section -->
<style>
    .soap-section {
        background: #1a1a1a;
        color: white;
        padding: 100px 40px;
        text-align: center;
        margin: 0;
    }
    
    .soap-content {
        max-width: 800px;
        margin: 0 auto;
    }
    
    .soap-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 3rem;
        font-weight: 300;
        margin-bottom: 20px;
        letter-spacing: 2px;
    }
    
    .soap-subtitle {
        font-family: 'Cormorant Garamond', serif;
        font-size: 2rem;
        font-weight: 300;
        margin-bottom: 40px;
    }
    
    .soap-text {
        font-size: 1.1rem;
        line-height: 1.8;
        margin-bottom: 30px;
        opacity: 0.9;
    }
    
    .soap-method {
        font-family: 'Cormorant Garamond', serif;
        font-size: 2.5rem;
        letter-spacing: 15px;
        margin: 40px 0;
        font-weight: 300;
    }
    
    .soap-btn {
        display: inline-block;
        margin-top: 30px;
        padding: 18px 50px;
        background: white;
        color: #000;
        text-decoration: none;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 2px;
        transition: all 0.3s ease;
        border: 2px solid white;
        font-size: 0.85rem;
    }
    
    .soap-btn:hover {
        background: transparent;
        color: white;
    }
    
    .cta-section {
        background: #fafafa;
        padding: 100px 40px;
    }
    
    .cta-container {
        max-width: 1400px;
        margin: 0 auto;
    }
    
    .cta-heading {
        font-family: 'Cormorant Garamond', serif;
        font-size: 3rem;
        text-align: center;
        margin-bottom: 60px;
        font-weight: 300;
        letter-spacing: 2px;
    }
    
    .cta-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 40px;
    }
    
    .cta-card {
        background: white;
        padding: 50px 40px;
        text-align: center;
        border: 1px solid #e0e0e0;
        transition: all 0.3s;
    }
    
    .cta-card:hover {
        border-color: #000;
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    
    .cta-card h3 {
        font-family: 'Cormorant Garamond', serif;
        font-size: 1.8rem;
        margin-bottom: 20px;
        font-weight: 600;
    }
    
    .cta-card p {
        font-size: 0.95rem;
        line-height: 1.8;
        color: #555;
        margin-bottom: 25px;
    }
    
    .cta-link {
        color: #000;
        text-decoration: none;
        font-weight: 600;
        font-size: 0.9rem;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: all 0.3s;
    }
    
    .cta-link:hover {
        opacity: 0.7;
    }
</style>

<section class="soap-section">
    <div class="soap-content">
        <h2 class="soap-title">Leia a Bíblia Conosco</h2>
        <h3 class="soap-subtitle">Guia SOAP</h3>
        <p class="soap-text">
            Acreditamos que ler a Bíblia é crucial para nossa fé, e nosso método favorito de estudo bíblico é chamado SOAP!
        </p>
        <div class="soap-method">
            E · O · A · O
        </div>
        <p class="soap-text">
            <strong>Escritura</strong> • <strong>Observação</strong> • <strong>Aplicação</strong> • <strong>Oração</strong>
        </p>
        <a href="#" class="soap-btn">Baixar Guia SOAP</a>
    </div>
</section>

<!-- Get Involved Section -->
<section class="cta-section">
    <div class="cta-container">
        <h2 class="cta-heading">Envolva-se</h2>
        <div class="cta-grid">
            <div class="cta-card">
                <h3>Preencha Seu Cartão de Conexão</h3>
                <p>Compartilhe suas informações e interesses conosco para que possamos conectá-lo melhor.</p>
                <a href="#" class="cta-link" onclick="openModal('connectModal'); return false;">Preencher Cartão →</a>
            </div>
            <div class="cta-card">
                <h3>Junte-se a Nós em Oração</h3>
                <p>Deixe-nos orar com você e por você. Compartilhe seus pedidos de oração conosco.</p>
                <a href="#" class="cta-link" onclick="openModal('prayerModal'); return false;">Enviar Pedido →</a>
            </div>
            <div class="cta-card">
                <h3>Faça uma Oferta</h3>
                <p>Participe da missão através da generosidade. Sua contribuição faz a diferença.</p>
                <a href="<?php echo home_url('/ofertas'); ?>" class="cta-link">Ofertar Agora →</a>
            </div>
        </div>
    </div>
</section>

<!-- Latest Posts Section -->
<?php
$latest_posts = new WP_Query( array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'orderby'        => 'date',
    'order'          => 'DESC'
) );

if ( $latest_posts->have_posts() ) : ?>
<section class="container" style="background: #f9f9f9;">
    <h2 class="section-title">Últimas Reflexões</h2>
    
    <div class="grid-3">
        <?php while ( $latest_posts->have_posts() ) : $latest_posts->the_post(); ?>
        <div class="card">
            <?php if ( has_post_thumbnail() ) : ?>
                <div style="margin: -40px -40px 20px; height: 200px; overflow: hidden;">
                    <?php the_post_thumbnail( 'medium', array( 'style' => 'width: 100%; height: 100%; object-fit: cover;' ) ); ?>
                </div>
            <?php endif; ?>
            
            <h3 class="card-title"><?php the_title(); ?></h3>
            <p class="card-text"><?php echo wp_trim_words( get_the_excerpt(), 20 ); ?></p>
            <a href="<?php the_permalink(); ?>" class="elegant-btn">Ler Mais</a>
        </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
</section>
<?php endif; ?>

<?php 
// Include modals
get_template_part( 'template-parts/modals' );

get_footer(); 
?>
