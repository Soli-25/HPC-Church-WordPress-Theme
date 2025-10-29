<?php
/*
Template Name: Loja
*/
get_header(); ?>

<style>
    .page-hero {
        margin-top: 88px;
        min-height: 50vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.6) 100%),
                    url('https://images.unsplash.com/photo-1512820790803-83ca734da794?w=1920&q=80') center/cover;
        color: white;
        text-align: center;
        padding: 60px 40px;
    }
    
    .page-hero h1 {
        font-family: 'Cormorant Garamond', serif;
        font-size: 4rem;
        font-weight: 300;
        letter-spacing: 3px;
        margin-bottom: 20px;
    }
    
    .page-hero p {
        font-size: 1.2rem;
        opacity: 0.9;
        letter-spacing: 2px;
    }
    
    .store-section {
        max-width: 1400px;
        margin: 0 auto;
        padding: 100px 40px;
    }
    
    .products-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 40px;
        margin-top: 60px;
    }
    
    .product-card {
        border: 2px solid #f0f0f0;
        transition: all 0.3s;
        overflow: hidden;
    }
    
    .product-card:hover {
        border-color: #000;
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    
    .product-image {
        width: 100%;
        height: 300px;
        background: #f0f0f0;
        overflow: hidden;
    }
    
    .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .product-info {
        padding: 30px;
        text-align: center;
    }
    
    .product-category {
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: #666;
        margin-bottom: 10px;
    }
    
    .product-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 1.8rem;
        margin-bottom: 15px;
        font-weight: 600;
    }
    
    .product-description {
        font-size: 0.95rem;
        line-height: 1.8;
        color: #555;
        margin-bottom: 20px;
    }
    
    .product-price {
        font-size: 1.5rem;
        font-weight: 600;
        color: #000;
        margin-bottom: 20px;
    }
    
    .product-btn {
        display: inline-block;
        padding: 15px 35px;
        background: #000;
        color: white;
        text-decoration: none;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 2px;
        transition: all 0.3s;
        border: 2px solid #000;
        font-size: 0.85rem;
        cursor: pointer;
    }
    
    .product-btn:hover {
        background: white;
        color: #000;
    }
    
    .woocommerce-notice {
        background: #fffbea;
        border: 2px solid #ffd700;
        padding: 40px;
        text-align: center;
        margin-top: 60px;
        border-radius: 5px;
    }
    
    .woocommerce-notice h3 {
        font-family: 'Cormorant Garamond', serif;
        font-size: 2rem;
        margin-bottom: 20px;
        color: #333;
    }
    
    .woocommerce-notice p {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #555;
        margin-bottom: 20px;
    }
</style>

<!-- Hero Section -->
<section class="page-hero">
    <div>
        <h1>Loja HPC Church</h1>
        <p>Recursos para Fortalecer Sua Fé</p>
    </div>
</section>

<!-- Verificar se WooCommerce está ativo -->
<?php if ( class_exists( 'WooCommerce' ) ) : ?>
    
    <section class="store-section">
        <?php echo do_shortcode('[products limit="12" columns="3" orderby="date" order="DESC"]'); ?>
    </section>
    
<?php else : ?>
    
    <!-- Produtos de Exemplo (Mostrar quando WooCommerce não está instalado) -->
    <section class="store-section">
        <div class="woocommerce-notice">
            <h3>💡 WooCommerce Não Instalado</h3>
            <p>
                Para ativar a loja com produtos reais, instale o plugin <strong>WooCommerce</strong>.<br>
                Vá em: <strong>Plugins → Adicionar Novo → Buscar "WooCommerce" → Instalar e Ativar</strong>
            </p>
            <p style="font-size: 0.95rem; opacity: 0.8;">
                Abaixo estão produtos de exemplo para demonstração do design:
            </p>
        </div>
        
        <div class="products-grid">
            <!-- Produto 1 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1544947950-fa07a98d237f?w=600&h=600&fit=crop" alt="Bíblia de Estudo">
                </div>
                <div class="product-info">
                    <div class="product-category">Bíblias</div>
                    <h3 class="product-title">Bíblia de Estudo NVI</h3>
                    <p class="product-description">
                        Bíblia completa com notas de estudo, mapas e recursos para aprofundar seu conhecimento bíblico.
                    </p>
                    <div class="product-price">R$ 89,00</div>
                    <button class="product-btn" onclick="alert('Instale o WooCommerce para comprar produtos!')">Adicionar ao Carrinho</button>
                </div>
            </div>
            
            <!-- Produto 2 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?w=600&h=600&fit=crop" alt="Livro">
                </div>
                <div class="product-info">
                    <div class="product-category">Livros</div>
                    <h3 class="product-title">Vencendo com Cristo</h3>
                    <p class="product-description">
                        Livro inspirador do Pastor Otavio sobre como superar desafios através da fé em Jesus.
                    </p>
                    <div class="product-price">R$ 35,00</div>
                    <button class="product-btn" onclick="alert('Instale o WooCommerce para comprar produtos!')">Adicionar ao Carrinho</button>
                </div>
            </div>
            
            <!-- Produto 3 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1583743814966-8936f5b7be1a?w=600&h=600&fit=crop" alt="Camiseta">
                </div>
                <div class="product-info">
                    <div class="product-category">Vestuário</div>
                    <h3 class="product-title">Camiseta HPC Church</h3>
                    <p class="product-description">
                        Camiseta oficial da igreja em 100% algodão. Disponível em várias cores e tamanhos.
                    </p>
                    <div class="product-price">R$ 45,00</div>
                    <button class="product-btn" onclick="alert('Instale o WooCommerce para comprar produtos!')">Adicionar ao Carrinho</button>
                </div>
            </div>
            
            <!-- Produto 4 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1512820790803-83ca734da794?w=600&h=600&fit=crop" alt="Devocional">
                </div>
                <div class="product-info">
                    <div class="product-category">Devocionais</div>
                    <h3 class="product-title">Devocional Diário</h3>
                    <p class="product-description">
                        365 dias de reflexões bíblicas para fortalecer sua caminhada com Deus.
                    </p>
                    <div class="product-price">R$ 29,90</div>
                    <button class="product-btn" onclick="alert('Instale o WooCommerce para comprar produtos!')">Adicionar ao Carrinho</button>
                </div>
            </div>
            
            <!-- Produto 5 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1506619216599-9d16d0903dfd?w=600&h=600&fit=crop" alt="Caneca">
                </div>
                <div class="product-info">
                    <div class="product-category">Presentes</div>
                    <h3 class="product-title">Caneca HPC</h3>
                    <p class="product-description">
                        Caneca personalizada com logo da igreja e versículo inspirador.
                    </p>
                    <div class="product-price">R$ 25,00</div>
                    <button class="product-btn" onclick="alert('Instale o WooCommerce para comprar produtos!')">Adicionar ao Carrinho</button>
                </div>
            </div>
            
            <!-- Produto 6 -->
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1481627834876-b7833e8f5570?w=600&h=600&fit=crop" alt="CD">
                </div>
                <div class="product-info">
                    <div class="product-category">Música</div>
                    <h3 class="product-title">CD Adoração ao Vivo</h3>
                    <p class="product-description">
                        Coletânea de louvores gravados ao vivo nos cultos da HPC Church.
                    </p>
                    <div class="product-price">R$ 20,00</div>
                    <button class="product-btn" onclick="alert('Instale o WooCommerce para comprar produtos!')">Adicionar ao Carrinho</button>
                </div>
            </div>
        </div>
        
        <!-- Instruções de Instalação -->
        <div style="max-width: 900px; margin: 80px auto 0; padding: 40px; background: #f9f9f9; border-left: 5px solid #000;">
            <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 2rem; margin-bottom: 20px;">Como Ativar a Loja Real</h3>
            <ol style="font-size: 1.1rem; line-height: 2; color: #555; padding-left: 20px;">
                <li><strong>Instalar WooCommerce:</strong> Vá em Plugins → Adicionar Novo → Busque "WooCommerce"</li>
                <li><strong>Ativar o Plugin:</strong> Clique em "Instalar Agora" e depois "Ativar"</li>
                <li><strong>Configurar Loja:</strong> Siga o assistente de configuração (moeda, pagamento, envio)</li>
                <li><strong>Adicionar Produtos:</strong> Vá em Produtos → Adicionar Novo</li>
                <li><strong>Esta página carregará automaticamente os produtos reais!</strong></li>
            </ol>
        </div>
    </section>
    
<?php endif; ?>

<?php get_footer(); ?>
