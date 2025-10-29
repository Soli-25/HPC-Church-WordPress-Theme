<footer style="background: #000; color: white; padding: 80px 40px 40px;">
    <div style="max-width: 1400px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 60px;">
        
        <!-- Sobre -->
        <div>
            <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.8rem; margin-bottom: 20px; font-weight: 600;">
                <?php bloginfo( 'name' ); ?>
            </h3>
            <p style="font-size: 0.95rem; line-height: 1.8; opacity: 0.9;">
                <?php bloginfo( 'description' ); ?>
            </p>
        </div>
        
        <!-- Links Rápidos -->
        <div>
            <h4 style="font-size: 0.9rem; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 25px; font-weight: 600;">Links Rápidos</h4>
            <?php
            wp_nav_menu( array(
                'theme_location' => 'footer',
                'container'      => 'ul',
                'menu_class'     => 'footer-menu',
                'fallback_cb'    => false,
            ) );
            ?>
        </div>
        
        <!-- Contato -->
        <div>
            <h4 style="font-size: 0.9rem; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 25px; font-weight: 600;">Contato</h4>
            <p style="font-size: 0.9rem; line-height: 2; opacity: 0.9;">
                📍 <?php echo esc_html( get_theme_mod( 'hpc_address', '3379 Canton Rd, Marietta, GA 30066' ) ); ?><br>
                📞 <?php echo esc_html( get_theme_mod( 'hpc_phone', '+1 770-862-0756' ) ); ?><br>
                📧 <?php echo esc_html( get_theme_mod( 'hpc_email', 'contato@hpcchurch.com' ) ); ?><br>
                📷 <?php echo esc_html( get_theme_mod( 'hpc_instagram', '@hpcatlanta' ) ); ?>
            </p>
        </div>
        
        <!-- Horários -->
        <div>
            <h4 style="font-size: 0.9rem; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 25px; font-weight: 600;">Horários de Culto</h4>
            <p style="font-size: 0.9rem; line-height: 2; opacity: 0.9;">
                <strong>Domingo</strong><br>
                Manhã: 10:00<br>
                Noite: 18:00<br><br>
                <strong>Quarta-feira</strong><br>
                Culto de Oração: 19:30
            </p>
        </div>
    </div>
    
    <!-- Copyright -->
    <div style="max-width: 1400px; margin: 60px auto 0; padding-top: 40px; border-top: 1px solid rgba(255,255,255,0.1); text-align: center;">
        <p style="font-size: 0.85rem; opacity: 0.7;">
            &copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. Todos os direitos reservados.
        </p>
    </div>
</footer>

<!-- Ícones Flutuantes -->
<div style="position: fixed; right: 30px; bottom: 30px; z-index: 999; display: flex; flex-direction: column; gap: 15px;">
    <a href="https://wa.me/17708620756" target="_blank" style="width: 60px; height: 60px; background: #25D366; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.8rem; text-decoration: none; box-shadow: 0 4px 12px rgba(37, 211, 102, 0.4); transition: all 0.3s;">
        💬
    </a>
    <a href="https://instagram.com/<?php echo esc_attr( str_replace( '@', '', get_theme_mod( 'hpc_instagram', 'hpcatlanta' ) ) ); ?>" target="_blank" style="width: 60px; height: 60px; background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888); border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.8rem; text-decoration: none; box-shadow: 0 4px 12px rgba(225, 48, 108, 0.4); transition: all 0.3s;">
        📷
    </a>
</div>

<style>
    .footer-menu {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .footer-menu li {
        margin-bottom: 12px;
    }
    
    .footer-menu a {
        color: white;
        text-decoration: none;
        font-size: 0.9rem;
        opacity: 0.9;
        transition: opacity 0.3s;
    }
    
    .footer-menu a:hover {
        opacity: 1;
    }
</style>

<?php wp_footer(); ?>
</body>
</html>
