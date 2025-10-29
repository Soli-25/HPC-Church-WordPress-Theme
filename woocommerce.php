<?php
/**
 * WooCommerce Template
 */

get_header();
?>

<style>
    .woo-hero {
        margin-top: 88px;
        padding: 80px 40px;
        background: linear-gradient(135deg, #000 0%, #2a2a2a 100%);
        color: white;
        text-align: center;
    }
    
    .woo-hero h1 {
        font-family: 'Cormorant Garamond', serif;
        font-size: 4.5rem;
        font-weight: 300;
        letter-spacing: 3px;
        margin-bottom: 15px;
    }
    
    .woo-hero p {
        font-size: 1.2rem;
        font-weight: 300;
    }
    
    .woocommerce-container {
        max-width: 1400px;
        margin: 0 auto;
        padding: 60px 40px;
    }
    
    /* WooCommerce Styles */
    .woocommerce ul.products li.product {
        border: 2px solid #e0e0e0;
        transition: all 0.3s;
    }
    
    .woocommerce ul.products li.product:hover {
        border-color: #000;
        box-shadow: 0 10px 30px rgba(0,0,0,0.15);
        transform: translateY(-5px);
    }
    
    .woocommerce ul.products li.product .woocommerce-loop-product__title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 1.8rem;
    }
    
    .woocommerce ul.products li.product .price {
        color: #000;
        font-weight: 700;
    }
    
    .woocommerce a.button,
    .woocommerce button.button {
        background: #000;
        color: white;
        border: 2px solid #000;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        transition: all 0.3s;
    }
    
    .woocommerce a.button:hover,
    .woocommerce button.button:hover {
        background: white;
        color: #000;
    }
    
    @media (max-width: 968px) {
        .woo-hero h1 {
            font-size: 2.5rem;
        }
        
        .woocommerce-container {
            padding: 40px 20px;
        }
    }
</style>

<div class="woo-hero">
    <h1><?php woocommerce_page_title(); ?></h1>
    <p>Livros, Bíblias e recursos para fortalecer sua fé. Toda venda apoia a missão da igreja.</p>
</div>

<div class="woocommerce-container">
    <?php woocommerce_content(); ?>
</div>

<?php get_footer(); ?>
