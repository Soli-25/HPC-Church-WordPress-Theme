<?php get_header(); ?>

<style>
    .post-hero {
        margin-top: 88px;
        min-height: 60vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        background: linear-gradient(135deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.5) 100%), 
                    <?php if ( has_post_thumbnail() ) : ?>
                    url('<?php echo get_the_post_thumbnail_url( get_the_ID(), 'large' ); ?>') center/cover;
                    <?php else : ?>
                    linear-gradient(135deg, #000 0%, #2a2a2a 100%);
                    <?php endif; ?>
        color: white;
    }
    
    .post-hero-content {
        max-width: 800px;
        padding: 40px;
    }
    
    .post-category {
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 2px;
        opacity: 0.9;
        margin-bottom: 20px;
    }
    
    .post-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 3.5rem;
        font-weight: 300;
        letter-spacing: 2px;
        margin-bottom: 20px;
        line-height: 1.3;
    }
    
    .post-meta {
        font-size: 0.9rem;
        opacity: 0.85;
    }
    
    .post-content {
        max-width: 800px;
        margin: 0 auto;
        padding: 80px 40px;
        font-size: 1.1rem;
        line-height: 1.9;
    }
    
    .post-content h2,
    .post-content h3 {
        font-family: 'Cormorant Garamond', serif;
        margin: 40px 0 20px;
    }
    
    .post-content p {
        margin-bottom: 25px;
    }
    
    .post-content img {
        max-width: 100%;
        height: auto;
        margin: 30px 0;
    }
    
    .post-content blockquote {
        border-left: 4px solid #000;
        padding-left: 30px;
        margin: 40px 0;
        font-style: italic;
        font-size: 1.2rem;
        color: #555;
    }
    
    @media (max-width: 968px) {
        .post-title {
            font-size: 2.2rem;
        }
        
        .post-content {
            padding: 60px 20px;
            font-size: 1.05rem;
        }
    }
</style>

<?php while ( have_posts() ) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <div class="post-hero">
            <div class="post-hero-content">
                <div class="post-category">
                    <?php
                    $categories = get_the_category();
                    if ( ! empty( $categories ) ) {
                        echo esc_html( $categories[0]->name );
                    }
                    ?>
                </div>
                
                <h1 class="post-title"><?php the_title(); ?></h1>
                
                <div class="post-meta">
                    Por <?php the_author(); ?> • <?php echo get_the_date( 'd \d\e F, Y' ); ?>
                </div>
            </div>
        </div>

        <div class="post-content">
            <?php the_content(); ?>
        </div>

    </article>

<?php endwhile; ?>

<?php get_footer(); ?>
