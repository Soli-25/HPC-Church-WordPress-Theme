<?php
/**
 * Template Name: Comunidade
 * Template for Community page with events, groups, and social actions
 */

get_header(); ?>

<section class="hero" style="margin-top: 88px; padding: 100px 40px; background: linear-gradient(135deg, #000 0%, #2a2a2a 100%); color: white; text-align: center;">
    <h1 style="font-family: 'Cormorant Garamond', serif; font-size: 5rem; font-weight: 300; margin-bottom: 20px; letter-spacing: 3px;">
        Nossa Comunidade
    </h1>
    <p style="font-size: 1.3rem; font-weight: 300; letter-spacing: 1px; max-width: 700px; margin: 0 auto;">
        Conecte-se, cresça e faça a diferença. Junte-se aos nossos grupos, eventos e ações que transformam vidas.
    </p>
</section>

<div class="container" style="max-width: 1400px; margin: 0 auto; padding: 80px 40px;">
    <!-- Agenda de Eventos -->
    <h2 class="section-title" style="font-family: 'Cormorant Garamond', serif; font-size: 4rem; font-weight: 300; margin-bottom: 20px; letter-spacing: 2px; text-align: center;">
        Próximos Eventos
    </h2>
    <p class="section-subtitle" style="text-align: center; font-size: 1.1rem; color: #666; margin-bottom: 60px; max-width: 800px; margin-left: auto; margin-right: auto;">
        Participe dos nossos eventos e celebre a fé em comunidade
    </p>
    
    <div class="events-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(350px, 1fr)); gap: 40px; margin-bottom: 100px;">
        <?php
        $events = new WP_Query( array(
            'post_type' => 'evento',
            'posts_per_page' => 6,
            'meta_key' => '_evento_data',
            'orderby' => 'meta_value',
            'order' => 'ASC',
        ) );
        
        while ( $events->have_posts() ) : $events->the_post();
            $data = get_post_meta( get_the_ID(), '_evento_data', true );
            $horario = get_post_meta( get_the_ID(), '_evento_horario', true );
            $local = get_post_meta( get_the_ID(), '_evento_local', true );
            
            $date_obj = DateTime::createFromFormat( 'Y-m-d', $data );
            $day = $date_obj ? $date_obj->format( 'd' ) : '';
            $month_year = $date_obj ? strtoupper( $date_obj->format( 'M \• Y' ) ) : '';
        ?>
            <div class="event-card" style="background: #fafafa; border: 1px solid #e8e8e8; overflow: hidden; transition: all 0.3s ease;">
                <div class="event-date" style="background: #000; color: white; padding: 20px; text-align: center;">
                    <div class="event-day" style="font-size: 3rem; font-weight: 700; line-height: 1;">
                        <?php echo esc_html( $day ); ?>
                    </div>
                    <div class="event-month" style="font-size: 0.85rem; text-transform: uppercase; letter-spacing: 2px; margin-top: 5px;">
                        <?php echo esc_html( $month_year ); ?>
                    </div>
                </div>
                
                <div class="event-content" style="padding: 30px;">
                    <div class="event-time" style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 2px; color: #999; margin-bottom: 15px; font-weight: 600;">
                        🕐 <?php echo esc_html( $horario ); ?>
                    </div>
                    
                    <h3 class="event-title" style="font-family: 'Cormorant Garamond', serif; font-size: 2rem; font-weight: 500; margin-bottom: 15px; color: #000;">
                        <?php the_title(); ?>
                    </h3>
                    
                    <p class="event-description" style="color: #666; line-height: 1.8; margin-bottom: 20px;">
                        <?php echo wp_trim_words( get_the_excerpt(), 20 ); ?>
                    </p>
                    
                    <div class="event-location" style="font-size: 0.85rem; color: #999; display: flex; align-items: center; gap: 8px;">
                        📍 <?php echo esc_html( $local ); ?>
                    </div>
                </div>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>

    <!-- Grupos Comunitários -->
    <h2 class="section-title" style="font-family: 'Cormorant Garamond', serif; font-size: 4rem; font-weight: 300; margin-bottom: 20px; letter-spacing: 2px; text-align: center;">
        Nossos Grupos
    </h2>
    <p class="section-subtitle" style="text-align: center; font-size: 1.1rem; color: #666; margin-bottom: 60px; max-width: 800px; margin-left: auto; margin-right: auto;">
        Encontre seu lugar e conecte-se com pessoas que compartilham sua jornada
    </p>
    
    <div class="groups-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 30px; margin-bottom: 100px;">
        <?php
        $groups = array(
            array( 'icon' => '📖', 'name' => 'Estudo Bíblico', 'desc' => 'Aprofunde-se na Palavra de Deus através de estudos sistemáticos e discussões em grupo.', 'day' => 'Quartas às 19h' ),
            array( 'icon' => '🎸', 'name' => 'Louvor e Adoração', 'desc' => 'Junte-se ao nosso time de louvor e use seus talentos para glorificar a Deus.', 'day' => 'Terças às 19h30' ),
            array( 'icon' => '👨‍👩‍👧‍👦', 'name' => 'Ministério Infantil', 'desc' => 'Ensine e cuide das crianças com amor, criatividade e dedicação.', 'day' => 'Domingos às 11h' ),
            array( 'icon' => '⚡', 'name' => 'Jovens HPC', 'desc' => 'Comunidade vibrante de jovens que buscam viver a fé de forma autêntica e relevante.', 'day' => 'Sábados às 18h' ),
            array( 'icon' => '🙏', 'name' => 'Intercessão', 'desc' => 'Seja parte da equipe que sustenta a igreja através da oração fervorosa.', 'day' => 'Sextas às 6h' ),
            array( 'icon' => '💑', 'name' => 'Casais', 'desc' => 'Fortaleça seu casamento através de estudos, mentoria e momentos de comunhão.', 'day' => '1º Sábado do mês' ),
            array( 'icon' => '🇧🇷', 'name' => 'Brasileiros em Atlanta', 'desc' => 'Comunidade especial para brasileiros que desejam se conectar em português.', 'day' => 'Domingos às 15h' ),
            array( 'icon' => '🤝', 'name' => 'Hospitalidade', 'desc' => 'Receba visitantes com amor e ajude novos membros a se sentirem em casa.', 'day' => 'Domingos às 10h30' ),
        );
        
        foreach ( $groups as $group ) :
        ?>
            <div class="group-card" style="background: white; border: 2px solid #000; padding: 40px 30px; text-align: center; transition: all 0.3s ease;">
                <div class="group-icon" style="font-size: 3rem; margin-bottom: 20px;">
                    <?php echo $group['icon']; ?>
                </div>
                <h3 class="group-name" style="font-family: 'Cormorant Garamond', serif; font-size: 1.8rem; font-weight: 600; margin-bottom: 15px;">
                    <?php echo esc_html( $group['name'] ); ?>
                </h3>
                <p class="group-description" style="font-size: 0.95rem; line-height: 1.7; color: #666;">
                    <?php echo esc_html( $group['desc'] ); ?>
                </p>
                <div class="group-day" style="margin-top: 20px; font-size: 0.8rem; text-transform: uppercase; letter-spacing: 2px; font-weight: 600; color: #999;">
                    <?php echo esc_html( $group['day'] ); ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Ações e Projetos Sociais -->
    <h2 class="section-title" style="font-family: 'Cormorant Garamond', serif; font-size: 4rem; font-weight: 300; margin-bottom: 20px; letter-spacing: 2px; text-align: center;">
        Ações e Projetos
    </h2>
    <p class="section-subtitle" style="text-align: center; font-size: 1.1rem; color: #666; margin-bottom: 60px; max-width: 800px; margin-left: auto; margin-right: auto;">
        Fazendo a diferença na comunidade através do amor de Cristo
    </p>
    
    <div class="actions-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(400px, 1fr)); gap: 50px;">
        <?php
        $actions = array(
            array( 'badge' => 'EM ANDAMENTO', 'title' => 'Projeto Alimentar', 'desc' => 'Distribuímos cestas básicas mensalmente para famílias em situação de vulnerabilidade. Cada cesta alimenta uma família por 30 dias e leva esperança e dignidade.', 'btn' => 'Saiba Mais' ),
            array( 'badge' => 'SEMANAL', 'title' => 'Sopa Solidária', 'desc' => 'Todas as quartas-feiras servimos refeições quentes para pessoas em situação de rua. Mais de 100 refeições são distribuídas semanalmente com amor e respeito.', 'btn' => 'Participe' ),
            array( 'badge' => 'VOLUNTARIADO', 'title' => 'Aulas de Inglês', 'desc' => 'Oferecemos aulas gratuitas de inglês para imigrantes, ajudando na integração e capacitação profissional. Turmas para todos os níveis.', 'btn' => 'Inscreva-se' ),
            array( 'badge' => 'MISSÕES', 'title' => 'Apoio a Missionários', 'desc' => 'Sustentamos 5 famílias missionárias ao redor do mundo através de oração e recursos. Levando o evangelho onde Cristo ainda não é conhecido.', 'btn' => 'Contribua' ),
        );
        
        foreach ( $actions as $action ) :
        ?>
            <div class="action-card" style="background: linear-gradient(135deg, #f8f8f8 0%, #ffffff 100%); border: 1px solid #e8e8e8; padding: 50px 40px; transition: all 0.3s ease;">
                <span class="action-badge" style="display: inline-block; background: #000; color: white; padding: 8px 20px; font-size: 0.7rem; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 25px; font-weight: 700;">
                    <?php echo esc_html( $action['badge'] ); ?>
                </span>
                <h3 class="action-title" style="font-family: 'Cormorant Garamond', serif; font-size: 2.5rem; font-weight: 500; margin-bottom: 20px; color: #000;">
                    <?php echo esc_html( $action['title'] ); ?>
                </h3>
                <p class="action-description" style="font-size: 1.05rem; line-height: 1.9; color: #555; margin-bottom: 30px;">
                    <?php echo esc_html( $action['desc'] ); ?>
                </p>
                <a href="#" class="action-btn" style="display: inline-block; padding: 14px 35px; background: #000; color: white; text-decoration: none; font-weight: 600; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 1.5px; transition: all 0.3s;">
                    <?php echo esc_html( $action['btn'] ); ?> →
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<style>
.event-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    border-color: #000;
}

.group-card:hover {
    background: #000 !important;
    color: white;
    transform: scale(1.03);
}

.group-card:hover .group-description,
.group-card:hover .group-day {
    color: #e0e0e0 !important;
}

.action-card:hover {
    box-shadow: 0 15px 40px rgba(0,0,0,0.1);
    transform: translateY(-5px);
}

.action-btn:hover {
    background: #2a2a2a;
    transform: translateX(5px);
}

@media (max-width: 968px) {
    .hero h1 { font-size: 3rem !important; }
    .section-title { font-size: 2.5rem !important; }
    .events-grid, .groups-grid, .actions-grid { grid-template-columns: 1fr !important; }
}
</style>

<?php get_footer(); ?>
