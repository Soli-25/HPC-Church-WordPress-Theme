<?php
/**
 * Archive Template (Blog Listing)
 * Displays blog posts with elegant design
 */

get_header(); ?>

<!-- Hero com Foto Grande do Pastor -->
<section class="hero-pastor" style="margin-top: 88px; background: linear-gradient(135deg, #f8f8f8 0%, #ffffff 100%); padding: 80px 40px; border-bottom: 2px solid #e8e8e8;">
    <div class="hero-pastor-content" style="max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: 400px 1fr; gap: 80px; align-items: center;">
        <?php if ( get_theme_mod( 'hpc_pastor_photo' ) ) : ?>
            <div class="pastor-photo-large" style="width: 400px; height: 533px; background: url('<?php echo esc_url( get_theme_mod( 'hpc_pastor_photo' ) ); ?>') center/cover; border: 3px solid #000; box-shadow: 0 20px 60px rgba(0,0,0,0.15); position: relative;">
                <div style="content: ''; position: absolute; top: 15px; left: 15px; right: -15px; bottom: -15px; border: 2px solid #d0d0d0; z-index: -1;"></div>
            </div>
        <?php endif; ?>
        
        <div class="hero-pastor-text">
            <h1 style="font-family: 'Cormorant Garamond', serif; font-size: 5rem; font-weight: 300; color: #000; margin-bottom: 20px; letter-spacing: 3px; line-height: 1.1;">
                Blog do<br>Pastor Otavio
            </h1>
            <h2 style="font-family: 'Cormorant Garamond', serif; font-size: 2.2rem; font-weight: 400; color: #666; margin-bottom: 30px; letter-spacing: 2px;">
                Reflexões & Ensinamentos
            </h2>
            <p style="font-size: 1.15rem; line-height: 1.9; color: #555; margin-bottom: 20px; font-weight: 300; letter-spacing: 0.3px;">
                Bem-vindo ao blog do Pastor Otavio! Aqui você encontrará reflexões profundas sobre fé, 
                ensinamentos bíblicos práticos e inspiração para sua jornada espiritual.
            </p>
            <p style="font-size: 1.15rem; line-height: 1.9; color: #555; margin-bottom: 20px; font-weight: 300; letter-spacing: 0.3px;">
                Cada artigo é escrito com o coração de quem deseja ver vidas transformadas pelo poder 
                do evangelho e pelo amor incondicional de Cristo.
            </p>
            <div class="pastor-quote" style="margin-top: 40px; padding: 30px; background: #000; color: #fff; border-left: 4px solid #fff; font-style: italic; font-size: 1.1rem; line-height: 1.8; letter-spacing: 0.5px;">
                "A Palavra de Deus não é apenas para ser lida, mas para ser vivida. 
                Que estas reflexões possam inspirar você a caminhar mais perto de Jesus todos os dias."
                <br><strong>— Pastor Otavio</strong>
            </div>
        </div>
    </div>
</section>

<!-- Blog Posts -->
<div class="blog-container" style="max-width: 1200px; margin: 80px auto; padding: 0 40px;">
    <h2 class="section-title" style="font-family: 'Cormorant Garamond', serif; font-size: 3.5rem; font-weight: 300; text-align: center; margin-bottom: 60px; letter-spacing: 2px; color: #000;">
        Artigos Recentes
    </h2>
    
    <div class="posts-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(360px, 1fr)); gap: 50px;">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <article class="post-card" style="background: #fafafa; border: 1px solid #e8e8e8; transition: all 0.4s ease; overflow: hidden;">
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-image" style="width: 100%; aspect-ratio: 16/10; background: url('<?php echo esc_url( get_the_post_thumbnail_url() ); ?>') center/cover;"></div>
                <?php endif; ?>
                
                <div class="post-content" style="padding: 35px;">
                    <div class="category" style="font-size: 0.7rem; text-transform: uppercase; letter-spacing: 2.5px; color: #999; font-weight: 700; margin-bottom: 15px;">
                        <?php the_category( ', ' ); ?>
                    </div>
                    
                    <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 2rem; font-weight: 500; margin-bottom: 18px; line-height: 1.3; color: #000;">
                        <a href="<?php the_permalink(); ?>" style="color: inherit; text-decoration: none;">
                            <?php the_title(); ?>
                        </a>
                    </h3>
                    
                    <p class="excerpt" style="font-size: 1rem; line-height: 1.8; color: #666; margin-bottom: 25px; font-weight: 300;">
                        <?php echo wp_trim_words( get_the_excerpt(), 20 ); ?>
                    </p>
                    
                    <div class="meta" style="font-size: 0.8rem; color: #aaa; display: flex; align-items: center; gap: 15px; margin-bottom: 25px; padding-bottom: 20px; border-bottom: 1px solid #e8e8e8;">
                        <?php echo get_avatar( get_the_author_meta( 'ID' ), 40, '', '', array( 'style' => 'width: 40px; height: 40px; border-radius: 50%; border: 2px solid #000;' ) ); ?>
                        <span><?php the_author(); ?></span>
                        <span>•</span>
                        <span><?php echo get_the_date(); ?></span>
                        <span>•</span>
                        <span><?php echo ceil( str_word_count( get_the_content() ) / 200 ); ?> min</span>
                    </div>
                    
                    <a href="<?php the_permalink(); ?>" class="post-link" style="display: inline-block; color: #000; font-weight: 700; text-decoration: none; text-transform: uppercase; font-size: 0.75rem; letter-spacing: 2px; border-bottom: 3px solid #000; padding-bottom: 5px; transition: all 0.3s;">
                        Ler Artigo Completo →
                    </a>
                </div>
            </article>
        <?php endwhile; else : ?>
            <p style="text-align: center; font-size: 1.2rem; color: #666;">Nenhum artigo encontrado.</p>
        <?php endif; ?>
    </div>
    
    <!-- Pagination -->
    <div class="pagination" style="margin-top: 80px; text-align: center;">
        <?php
        the_posts_pagination( array(
            'mid_size'  => 2,
            'prev_text' => '← Anterior',
            'next_text' => 'Próximo →',
        ) );
        ?>
    </div>
</div>

<style>
.post-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.12);
    border-color: #000;
}

.post-link:hover {
    border-bottom-color: transparent;
    transform: translateX(5px);
}

@media (max-width: 968px) {
    .hero-pastor-content {
        grid-template-columns: 1fr !important;
        gap: 40px !important;
        text-align: center;
    }
    .pastor-photo-large {
        margin: 0 auto;
        width: 300px !important;
        height: 400px !important;
    }
    .hero-pastor-text h1 {
        font-size: 3.5rem !important;
    }
    .hero-pastor-text h2 {
        font-size: 1.8rem !important;
    }
    .posts-grid {
        grid-template-columns: 1fr !important;
    }
}
</style>

<?php get_footer(); ?>
