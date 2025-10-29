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

<!-- Next Steps Section -->
<section id="nextsteps" class="container">
    <h2 class="section-title">Descubra a HPC Church</h2>
    
    <div class="grid-3">
        <div class="card">
            <div class="card-icon">🙏</div>
            <h3 class="card-title">Primeiro Passo</h3>
            <p class="card-text">
                É novo aqui? Queremos conhecer você! Preencha nosso cartão de conexão 
                e descubra como fazer parte da nossa família.
            </p>
            <button class="elegant-btn" onclick="openModal('connectModal')">Inscreva-se Agora</button>
        </div>
        
        <div class="card">
            <div class="card-icon">🤝</div>
            <h3 class="card-title">Servir com Propósito</h3>
            <p class="card-text">
                Descubra seus dons e talentos servindo em nossos ministérios. 
                Faça a diferença na vida de outras pessoas.
            </p>
            <button class="elegant-btn" onclick="openModal('teamModal')">Junte-se ao Time</button>
        </div>
        
        <div class="card">
            <div class="card-icon">✝️</div>
            <h3 class="card-title">Compromisso com Cristo</h3>
            <p class="card-text">
                Pronto para dar o próximo passo na sua jornada de fé? 
                O batismo é uma declaração pública do seu compromisso com Jesus.
            </p>
            <button class="elegant-btn" onclick="openModal('baptismModal')">Quero Ser Batizado</button>
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
