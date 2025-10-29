<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<nav>
    <div class="nav-content">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
            <?php
            if ( has_custom_logo() ) {
                the_custom_logo();
            } else {
                bloginfo( 'name' );
            }
            ?>
        </a>
        
        <div class="nav-links">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'container'      => false,
                'menu_class'     => 'nav-links',
                'fallback_cb'    => false,
                'items_wrap'     => '%3$s',
                'link_before'    => '<span>',
                'link_after'     => '</span>',
            ) );
            ?>
            <a href="<?php echo esc_url( home_url( '/ofertas' ) ); ?>" class="give-btn nav-link">Ofertar Agora</a>
        </div>
        
        <!-- Mobile Menu Button -->
        <button class="mobile-menu-toggle" aria-label="Menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</nav>

<style>
    /* Navigation Styles */
    nav {
        background: rgba(255, 255, 255, 0.98);
        backdrop-filter: blur(10px);
        box-shadow: 0 1px 0 rgba(0,0,0,0.05);
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 1000;
        border-bottom: 1px solid rgba(0,0,0,0.08);
    }

    .nav-content {
        max-width: 1400px;
        margin: 0 auto;
        padding: 25px 40px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo {
        font-family: 'Cormorant Garamond', serif;
        font-size: 2rem;
        font-weight: 600;
        color: #000000;
        text-decoration: none;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .nav-links {
        display: flex;
        align-items: center;
        gap: 45px;
    }

    .nav-link {
        color: #333;
        text-decoration: none;
        font-weight: 400;
        font-size: 0.9rem;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: all 0.3s ease;
        position: relative;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        bottom: -5px;
        left: 0;
        width: 0;
        height: 1px;
        background: #000;
        transition: width 0.3s ease;
    }

    .nav-link:hover::after {
        width: 100%;
    }

    .nav-link:hover {
        color: #000;
    }

    .give-btn {
        background: #000;
        color: white !important;
        padding: 12px 28px;
        border-radius: 0;
        font-weight: 500;
        letter-spacing: 1.5px;
        transition: all 0.3s ease;
        border: 2px solid #000;
    }

    .give-btn::after {
        display: none;
    }

    .give-btn:hover {
        background: white;
        color: #000 !important;
    }

    .mobile-menu-toggle {
        display: none;
        flex-direction: column;
        gap: 5px;
        background: none;
        border: none;
        cursor: pointer;
        padding: 10px;
    }

    .mobile-menu-toggle span {
        width: 25px;
        height: 2px;
        background: #000;
        transition: all 0.3s ease;
    }

    @media (max-width: 968px) {
        .nav-links {
            display: none;
        }

        .mobile-menu-toggle {
            display: flex;
        }

        .nav-content {
            padding: 20px;
        }
    }
</style>
