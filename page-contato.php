<?php
/*
Template Name: Contato
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
                    url('https://images.unsplash.com/photo-1423666639041-f56000c27a9a?w=1920&q=80') center/cover;
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
    
    .contact-section {
        max-width: 1400px;
        margin: 0 auto;
        padding: 100px 40px;
    }
    
    .contact-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 80px;
        margin-top: 60px;
    }
    
    .contact-info h3 {
        font-family: 'Cormorant Garamond', serif;
        font-size: 2rem;
        margin-bottom: 30px;
        font-weight: 600;
    }
    
    .info-item {
        display: flex;
        align-items: start;
        margin-bottom: 30px;
        padding-bottom: 30px;
        border-bottom: 1px solid #f0f0f0;
    }
    
    .info-icon {
        font-size: 2rem;
        margin-right: 20px;
        min-width: 50px;
    }
    
    .info-content h4 {
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: #666;
        margin-bottom: 10px;
        font-weight: 600;
    }
    
    .info-content p {
        font-size: 1.1rem;
        line-height: 1.8;
        color: #333;
    }
    
    .info-content a {
        color: #000;
        text-decoration: none;
        transition: opacity 0.3s;
    }
    
    .info-content a:hover {
        opacity: 0.7;
    }
    
    .contact-form {
        background: #fafafa;
        padding: 50px;
        border: 1px solid #e0e0e0;
    }
    
    .contact-form h3 {
        font-family: 'Cormorant Garamond', serif;
        font-size: 2rem;
        margin-bottom: 30px;
        font-weight: 600;
    }
    
    .form-group {
        margin-bottom: 25px;
    }
    
    .form-group label {
        display: block;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 10px;
        color: #666;
        font-weight: 600;
    }
    
    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 15px;
        border: 1px solid #ddd;
        font-family: 'Montserrat', sans-serif;
        font-size: 1rem;
        transition: border-color 0.3s;
    }
    
    .form-group input:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: #000;
    }
    
    .form-group textarea {
        resize: vertical;
        min-height: 150px;
    }
    
    .submit-btn {
        width: 100%;
        padding: 18px;
        background: #000;
        color: white;
        border: 2px solid #000;
        font-family: 'Montserrat', sans-serif;
        font-size: 0.9rem;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s;
    }
    
    .submit-btn:hover {
        background: white;
        color: #000;
    }
    
    .map-section {
        margin-top: 100px;
        height: 450px;
        background: #f0f0f0;
        position: relative;
    }
    
    .map-section iframe {
        width: 100%;
        height: 100%;
        border: none;
    }
    
    .schedule-section {
        background: #1a1a1a;
        color: white;
        padding: 80px 40px;
        text-align: center;
    }
    
    .schedule-title {
        font-family: 'Cormorant Garamond', serif;
        font-size: 3rem;
        margin-bottom: 50px;
        font-weight: 300;
        letter-spacing: 2px;
    }
    
    .schedule-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 40px;
        max-width: 1000px;
        margin: 0 auto;
    }
    
    .schedule-item {
        padding: 30px;
        border: 1px solid rgba(255,255,255,0.2);
    }
    
    .schedule-day {
        font-size: 1.5rem;
        font-family: 'Cormorant Garamond', serif;
        margin-bottom: 15px;
        font-weight: 600;
    }
    
    .schedule-time {
        font-size: 1.1rem;
        opacity: 0.9;
        margin-bottom: 10px;
    }
    
    .schedule-desc {
        font-size: 0.9rem;
        opacity: 0.7;
        text-transform: uppercase;
        letter-spacing: 1px;
    }
    
    @media (max-width: 968px) {
        .contact-grid {
            grid-template-columns: 1fr;
            gap: 50px;
        }
        
        .contact-form {
            padding: 30px;
        }
        
        .page-hero h1 {
            font-size: 3rem;
        }
    }
</style>

<!-- Hero Section -->
<section class="page-hero">
    <div>
        <h1>Contato</h1>
        <p>Estamos Aqui para Você</p>
    </div>
</section>

<!-- Horários de Reunião -->
<section class="schedule-section">
    <h2 class="schedule-title">Horários de Reunião</h2>
    <div class="schedule-grid">
        <div class="schedule-item">
            <div class="schedule-day">Domingo</div>
            <div class="schedule-time">10:00 AM</div>
            <div class="schedule-desc">Culto de Celebração</div>
        </div>
        <div class="schedule-item">
            <div class="schedule-day">Domingo</div>
            <div class="schedule-time">6:00 PM</div>
            <div class="schedule-desc">Culto da Noite</div>
        </div>
        <div class="schedule-item">
            <div class="schedule-day">Quarta-feira</div>
            <div class="schedule-time">7:30 PM</div>
            <div class="schedule-desc">Culto de Oração</div>
        </div>
    </div>
</section>

<!-- Informações de Contato e Formulário -->
<section class="contact-section">
    <div class="contact-grid">
        <!-- Informações de Contato -->
        <div class="contact-info">
            <h3>Entre em Contato</h3>
            
            <div class="info-item">
                <div class="info-icon">📍</div>
                <div class="info-content">
                    <h4>Endereço</h4>
                    <p>
                        3379 Canton Rd<br>
                        Marietta, GA 30066<br>
                        Estados Unidos
                    </p>
                </div>
            </div>
            
            <div class="info-item">
                <div class="info-icon">📞</div>
                <div class="info-content">
                    <h4>Telefone</h4>
                    <p><a href="tel:+17708620756">+1 (770) 862-0756</a></p>
                </div>
            </div>
            
            <div class="info-item">
                <div class="info-icon">📧</div>
                <div class="info-content">
                    <h4>E-mail</h4>
                    <p><a href="mailto:contato@hpcchurch.com">contato@hpcchurch.com</a></p>
                </div>
            </div>
            
            <div class="info-item">
                <div class="info-icon">📷</div>
                <div class="info-content">
                    <h4>Redes Sociais</h4>
                    <p>
                        <a href="https://instagram.com/hpcatlanta" target="_blank">@hpcatlanta</a><br>
                        <a href="https://wa.me/17708620756" target="_blank">WhatsApp</a>
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Formulário de Contato -->
        <div class="contact-form">
            <h3>Envie uma Mensagem</h3>
            <form id="contactForm">
                <div class="form-group">
                    <label for="name">Nome Completo *</label>
                    <input type="text" id="name" name="name" required>
                </div>
                
                <div class="form-group">
                    <label for="email">E-mail *</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="phone">Telefone</label>
                    <input type="tel" id="phone" name="phone">
                </div>
                
                <div class="form-group">
                    <label for="subject">Assunto *</label>
                    <input type="text" id="subject" name="subject" required>
                </div>
                
                <div class="form-group">
                    <label for="message">Mensagem *</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                
                <button type="submit" class="submit-btn">Enviar Mensagem</button>
            </form>
        </div>
    </div>
</section>

<!-- Mapa -->
<section class="map-section">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3311.8635157933556!2d-84.52658!3d33.96789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f50e5e6c5b7e31%3A0x1e2d3c4f5a6b7c8d!2s3379%20Canton%20Rd%2C%20Marietta%2C%20GA%2030066%2C%20USA!5e0!3m2!1sen!2sbr!4v1234567890123!5m2!1sen!2sbr" 
        allowfullscreen="" 
        loading="lazy">
    </iframe>
</section>

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const data = {
        action: 'hpc_church_submit_form',
        nonce: '<?php echo wp_create_nonce( "hpc_church_nonce" ); ?>',
        form_type: 'contato',
        name: formData.get('name'),
        email: formData.get('email'),
        phone: formData.get('phone'),
        subject: formData.get('subject'),
        message: formData.get('message')
    };
    
    fetch('<?php echo admin_url( "admin-ajax.php" ); ?>', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams(data)
    })
    .then(response => response.json())
    .then(result => {
        if (result.success) {
            alert('Mensagem enviada com sucesso! Entraremos em contato em breve.');
            document.getElementById('contactForm').reset();
        } else {
            alert('Erro ao enviar mensagem. Por favor, tente novamente.');
        }
    })
    .catch(error => {
        alert('Erro ao enviar mensagem. Por favor, tente novamente.');
    });
});
</script>

<?php get_footer(); ?>
