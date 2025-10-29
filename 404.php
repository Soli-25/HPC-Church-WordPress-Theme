<?php
/**
 * 404 Error Page Template
 * Displays when page is not found
 */

get_header(); ?>

<section class="error-page" style="margin-top: 88px; min-height: calc(100vh - 400px); display: flex; align-items: center; justify-content: center; background: linear-gradient(135deg, #f8f8f8 0%, #ffffff 100%); padding: 80px 40px;">
    <div class="error-content" style="text-align: center; max-width: 600px;">
        <div class="error-number" style="font-family: 'Cormorant Garamond', serif; font-size: 12rem; font-weight: 700; line-height: 1; color: #000; margin-bottom: 30px; letter-spacing: 10px;">
            404
        </div>
        
        <h1 style="font-family: 'Cormorant Garamond', serif; font-size: 3rem; font-weight: 500; margin-bottom: 20px; color: #000;">
            Página Não Encontrada
        </h1>
        
        <p style="font-size: 1.2rem; line-height: 1.8; color: #666; margin-bottom: 40px;">
            Desculpe, mas a página que você está procurando não existe ou foi movida. 
            Explore outras áreas do nosso site ou volte à página inicial.
        </p>
        
        <!-- Search Form -->
        <div class="search-form" style="margin-bottom: 40px;">
            <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" style="display: flex; max-width: 500px; margin: 0 auto; gap: 10px;">
                <input 
                    type="search" 
                    name="s" 
                    placeholder="Buscar no site..." 
                    style="flex: 1; padding: 15px 20px; border: 2px solid #e0e0e0; font-family: 'Montserrat', sans-serif; font-size: 1rem;"
                    value="<?php echo get_search_query(); ?>"
                >
                <button 
                    type="submit" 
                    style="padding: 15px 30px; background: #000; color: white; border: none; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; cursor: pointer; transition: all 0.3s;"
                >
                    Buscar
                </button>
            </form>
        </div>
        
        <!-- Quick Links -->
        <div class="quick-links" style="display: flex; justify-content: center; gap: 20px; flex-wrap: wrap;">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="error-link" style="display: inline-block; padding: 14px 30px; background: #000; color: white; text-decoration: none; font-weight: 600; text-transform: uppercase; letter-spacing: 1.5px; font-size: 0.85rem; transition: all 0.3s;">
                🏠 Página Inicial
            </a>
            <a href="<?php echo esc_url( home_url( '/blog' ) ); ?>" class="error-link" style="display: inline-block; padding: 14px 30px; background: white; color: #000; text-decoration: none; font-weight: 600; text-transform: uppercase; letter-spacing: 1.5px; font-size: 0.85rem; border: 2px solid #000; transition: all 0.3s;">
                📖 Blog
            </a>
            <a href="<?php echo esc_url( home_url( '/contato' ) ); ?>" class="error-link" style="display: inline-block; padding: 14px 30px; background: white; color: #000; text-decoration: none; font-weight: 600; text-transform: uppercase; letter-spacing: 1.5px; font-size: 0.85rem; border: 2px solid #000; transition: all 0.3s;">
                📧 Contato
            </a>
        </div>
        
        <!-- Helpful Message -->
        <div class="helpful-message" style="margin-top: 60px; padding: 30px; background: #000; color: white; border-left: 4px solid #fff;">
            <p style="font-size: 1.05rem; line-height: 1.8; margin: 0; font-style: italic;">
                "Nem mesmo os que se perdem estão esquecidos por Deus. 
                Que você encontre o que procura e muito mais em Cristo."
            </p>
            <p style="margin-top: 15px; font-weight: 600; font-size: 0.9rem; letter-spacing: 1px;">
                — HPC Church
            </p>
        </div>
    </div>
</section>

<style>
.error-link:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 20px rgba(0,0,0,0.2);
}

button[type="submit"]:hover {
    background: #2a2a2a;
}

input[type="search"]:focus {
    outline: none;
    border-color: #000;
}

@media (max-width: 968px) {
    .error-number {
        font-size: 8rem !important;
    }
    
    h1 {
        font-size: 2rem !important;
    }
    
    p {
        font-size: 1rem !important;
    }
    
    .search-form form {
        flex-direction: column;
    }
    
    .quick-links {
        flex-direction: column;
        align-items: stretch;
    }
    
    .error-link {
        width: 100%;
        text-align: center;
    }
}
</style>

<?php get_footer(); ?>
