<?php get_header(); ?>

<style>
    .page-hero {
        margin-top: 88px;
        padding: 120px 40px 80px;
        background: linear-gradient(135deg, #000 0%, #2a2a2a 100%);
        color: white;
        text-align: center;
    }
    
    .page-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 4rem;
        font-weight: 300;
        letter-spacing: 3px;
        margin: 0;
    }
    
    .page-content {
        max-width: 900px;
        margin: 0 auto;
        padding: 80px 40px;
        font-size: 1.05rem;
        line-height: 1.9;
    }
    
    .page-content h1,
    .page-content h2,
    .page-content h3 {
        font-family: 'Cormorant Garamond', serif;
        margin: 40px 0 20px;
    }
    
    .page-content p {
        margin-bottom: 20px;
    }
    
    .page-content img {
        max-width: 100%;
        height: auto;
        margin: 30px 0;
    }
    
    @media (max-width: 968px) {
        .page-title {
            font-size: 2.5rem;
        }
        
        .page-content {
            padding: 60px 20px;
        }
    }
</style>

<?php while ( have_posts() ) : the_post(); ?>

    <div class="page-hero">
        <h1 class="page-title"><?php the_title(); ?></h1>
    </div>

    <div class="page-content">
        <?php the_content(); ?>
    </div>

<?php endwhile; ?>

<?php get_footer(); ?>
