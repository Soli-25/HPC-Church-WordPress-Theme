<?php
/**
 * Modal Templates
 * Include this file in templates that need modals
 * Usage: get_template_part( 'template-parts/modals' );
 */
?>

<!-- Modal: Inscreva-se Agora (Connection Card) -->
<div id="connectModal" class="modal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.85); backdrop-filter: blur(8px); z-index: 10000; justify-content: center; align-items: center; padding: 20px;">
    <div class="modal-content" style="background: white; max-width: 500px; width: 100%; max-height: 90vh; overflow-y: auto; padding: 50px; border: 3px solid #000; position: relative;">
        <button class="modal-close" onclick="closeModal('connectModal')" style="position: absolute; top: 20px; right: 20px; width: 40px; height: 40px; border-radius: 50%; background: #000; color: white; border: none; font-size: 1.5rem; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all 0.3s;">
            ×
        </button>
        
        <h2 style="font-family: 'Cormorant Garamond', serif; font-size: 2.5rem; margin-bottom: 15px; color: #000;">
            Inscreva-se Agora
        </h2>
        <p style="color: #666; margin-bottom: 30px; line-height: 1.7;">
            Queremos conhecer você! Preencha o formulário e nossa equipe entrará em contato.
        </p>
        
        <form class="modal-form" data-form-type="connect">
            <input type="text" name="name" placeholder="Nome Completo *" required style="width: 100%; padding: 14px; border: 2px solid #e0e0e0; margin-bottom: 15px; font-family: 'Montserrat', sans-serif;">
            <input type="email" name="email" placeholder="E-mail *" required style="width: 100%; padding: 14px; border: 2px solid #e0e0e0; margin-bottom: 15px; font-family: 'Montserrat', sans-serif;">
            <input type="tel" name="phone" placeholder="Telefone" style="width: 100%; padding: 14px; border: 2px solid #e0e0e0; margin-bottom: 15px; font-family: 'Montserrat', sans-serif;">
            <select name="visit_status" style="width: 100%; padding: 14px; border: 2px solid #e0e0e0; margin-bottom: 15px; font-family: 'Montserrat', sans-serif;">
                <option value="">Esta é sua primeira visita?</option>
                <option value="first">Sim, primeira vez</option>
                <option value="second">Segunda ou terceira vez</option>
                <option value="regular">Já venho frequentemente</option>
            </select>
            <textarea name="message" placeholder="Como podemos orar por você?" rows="4" style="width: 100%; padding: 14px; border: 2px solid #e0e0e0; margin-bottom: 20px; font-family: 'Montserrat', sans-serif;"></textarea>
            <button type="submit" style="width: 100%; padding: 16px; background: #000; color: white; border: none; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; cursor: pointer; transition: all 0.3s;">
                ENVIAR
            </button>
        </form>
    </div>
</div>

<!-- Modal: Junte-se ao Time (Volunteer) -->
<div id="teamModal" class="modal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.85); backdrop-filter: blur(8px); z-index: 10000; justify-content: center; align-items: center; padding: 20px;">
    <div class="modal-content" style="background: white; max-width: 500px; width: 100%; max-height: 90vh; overflow-y: auto; padding: 50px; border: 3px solid #000; position: relative;">
        <button class="modal-close" onclick="closeModal('teamModal')" style="position: absolute; top: 20px; right: 20px; width: 40px; height: 40px; border-radius: 50%; background: #000; color: white; border: none; font-size: 1.5rem; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all 0.3s;">
            ×
        </button>
        
        <h2 style="font-family: 'Cormorant Garamond', serif; font-size: 2.5rem; margin-bottom: 15px; color: #000;">
            Junte-se ao Time
        </h2>
        <p style="color: #666; margin-bottom: 30px; line-height: 1.7;">
            Use seus dons e talentos para servir! Escolha uma área de ministério.
        </p>
        
        <form class="modal-form" data-form-type="volunteer">
            <input type="text" name="name" placeholder="Nome Completo *" required style="width: 100%; padding: 14px; border: 2px solid #e0e0e0; margin-bottom: 15px; font-family: 'Montserrat', sans-serif;">
            <input type="email" name="email" placeholder="E-mail *" required style="width: 100%; padding: 14px; border: 2px solid #e0e0e0; margin-bottom: 15px; font-family: 'Montserrat', sans-serif;">
            <input type="tel" name="phone" placeholder="Telefone *" required style="width: 100%; padding: 14px; border: 2px solid #e0e0e0; margin-bottom: 15px; font-family: 'Montserrat', sans-serif;">
            <select name="ministry" required style="width: 100%; padding: 14px; border: 2px solid #e0e0e0; margin-bottom: 15px; font-family: 'Montserrat', sans-serif;">
                <option value="">Selecione o ministério *</option>
                <option value="louvor">Louvor e Adoração</option>
                <option value="infantil">Ministério Infantil</option>
                <option value="jovens">Jovens</option>
                <option value="intercessao">Intercessão</option>
                <option value="hospitalidade">Hospitalidade</option>
                <option value="midia">Mídia e Tecnologia</option>
                <option value="outros">Outros</option>
            </select>
            <textarea name="message" placeholder="Conte sobre seus talentos e experiência" rows="4" style="width: 100%; padding: 14px; border: 2px solid #e0e0e0; margin-bottom: 20px; font-family: 'Montserrat', sans-serif;"></textarea>
            <button type="submit" style="width: 100%; padding: 16px; background: #000; color: white; border: none; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; cursor: pointer; transition: all 0.3s;">
                ENVIAR CANDIDATURA
            </button>
        </form>
    </div>
</div>

<!-- Modal: Quero Ser Batizado (Baptism) -->
<div id="baptismModal" class="modal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.85); backdrop-filter: blur(8px); z-index: 10000; justify-content: center; align-items: center; padding: 20px;">
    <div class="modal-content" style="background: white; max-width: 500px; width: 100%; max-height: 90vh; overflow-y: auto; padding: 50px; border: 3px solid #000; position: relative;">
        <button class="modal-close" onclick="closeModal('baptismModal')" style="position: absolute; top: 20px; right: 20px; width: 40px; height: 40px; border-radius: 50%; background: #000; color: white; border: none; font-size: 1.5rem; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all 0.3s;">
            ×
        </button>
        
        <h2 style="font-family: 'Cormorant Garamond', serif; font-size: 2.5rem; margin-bottom: 15px; color: #000;">
            Quero Ser Batizado
        </h2>
        <p style="color: #666; margin-bottom: 30px; line-height: 1.7;">
            Que decisão maravilhosa! O batismo é um passo importante de obediência e fé.
        </p>
        
        <form class="modal-form" data-form-type="baptism">
            <input type="text" name="name" placeholder="Nome Completo *" required style="width: 100%; padding: 14px; border: 2px solid #e0e0e0; margin-bottom: 15px; font-family: 'Montserrat', sans-serif;">
            <input type="email" name="email" placeholder="E-mail *" required style="width: 100%; padding: 14px; border: 2px solid #e0e0e0; margin-bottom: 15px; font-family: 'Montserrat', sans-serif;">
            <input type="tel" name="phone" placeholder="Telefone *" required style="width: 100%; padding: 14px; border: 2px solid #e0e0e0; margin-bottom: 15px; font-family: 'Montserrat', sans-serif;">
            <input type="date" name="birthdate" placeholder="Data de Nascimento" style="width: 100%; padding: 14px; border: 2px solid #e0e0e0; margin-bottom: 15px; font-family: 'Montserrat', sans-serif;">
            <select name="already_believer" style="width: 100%; padding: 14px; border: 2px solid #e0e0e0; margin-bottom: 15px; font-family: 'Montserrat', sans-serif;">
                <option value="">Você já aceitou Jesus como Salvador?</option>
                <option value="yes">Sim</option>
                <option value="no">Não, mas quero conhecer mais</option>
            </select>
            <textarea name="message" placeholder="Conte-nos sobre sua decisão de ser batizado" rows="4" style="width: 100%; padding: 14px; border: 2px solid #e0e0e0; margin-bottom: 20px; font-family: 'Montserrat', sans-serif;"></textarea>
            <button type="submit" style="width: 100%; padding: 16px; background: #000; color: white; border: none; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; cursor: pointer; transition: all 0.3s;">
                SOLICITAR BATISMO
            </button>
        </form>
    </div>
</div>

<!-- Modal: Pedido de Oração (Prayer Request) -->
<div id="prayerModal" class="modal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.85); backdrop-filter: blur(8px); z-index: 10000; justify-content: center; align-items: center; padding: 20px;">
    <div class="modal-content" style="background: white; max-width: 500px; width: 100%; max-height: 90vh; overflow-y: auto; padding: 50px; border: 3px solid #000; position: relative;">
        <button class="modal-close" onclick="closeModal('prayerModal')" style="position: absolute; top: 20px; right: 20px; width: 40px; height: 40px; border-radius: 50%; background: #000; color: white; border: none; font-size: 1.5rem; cursor: pointer; display: flex; align-items: center; justify-content: center; transition: all 0.3s;">
            ×
        </button>
        
        <h2 style="font-family: 'Cormorant Garamond', serif; font-size: 2.5rem; margin-bottom: 15px; color: #000;">
            Pedido de Oração
        </h2>
        <p style="color: #666; margin-bottom: 30px; line-height: 1.7;">
            Compartilhe seu pedido conosco. Nossa equipe de intercessão está pronta para orar por você.
        </p>
        
        <form class="modal-form" data-form-type="prayer">
            <input type="text" name="name" placeholder="Nome Completo *" required style="width: 100%; padding: 14px; border: 2px solid #e0e0e0; margin-bottom: 15px; font-family: 'Montserrat', sans-serif;">
            <input type="email" name="email" placeholder="E-mail *" required style="width: 100%; padding: 14px; border: 2px solid #e0e0e0; margin-bottom: 15px; font-family: 'Montserrat', sans-serif;">
            <input type="tel" name="phone" placeholder="Telefone (opcional)" style="width: 100%; padding: 14px; border: 2px solid #e0e0e0; margin-bottom: 15px; font-family: 'Montserrat', sans-serif;">
            <select name="privacy" style="width: 100%; padding: 14px; border: 2px solid #e0e0e0; margin-bottom: 15px; font-family: 'Montserrat', sans-serif;">
                <option value="private">Pedido confidencial (apenas equipe de oração)</option>
                <option value="public">Pode compartilhar com a igreja</option>
            </select>
            <textarea name="message" placeholder="Descreva seu pedido de oração *" rows="5" required style="width: 100%; padding: 14px; border: 2px solid #e0e0e0; margin-bottom: 20px; font-family: 'Montserrat', sans-serif;"></textarea>
            <button type="submit" style="width: 100%; padding: 16px; background: #000; color: white; border: none; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; cursor: pointer; transition: all 0.3s;">
                ENVIAR PEDIDO
            </button>
        </form>
    </div>
</div>

<style>
.modal.active {
    display: flex !important;
}

.modal-close:hover {
    background: #2a2a2a !important;
    transform: rotate(90deg);
}

.modal-form input:focus,
.modal-form select:focus,
.modal-form textarea:focus {
    outline: none;
    border-color: #000;
}

.modal-form button[type="submit"]:hover {
    background: #2a2a2a;
}

/* Close modal on overlay click */
.modal {
    cursor: pointer;
}

.modal-content {
    cursor: default;
}
</style>

<script>
// Open modal function
function openModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }
}

// Close modal function
function closeModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal) {
        modal.classList.remove('active');
        document.body.style.overflow = '';
    }
}

// Close modal on overlay click
document.querySelectorAll('.modal').forEach(modal => {
    modal.addEventListener('click', function(e) {
        if (e.target === this) {
            closeModal(this.id);
        }
    });
});

// Handle form submissions
document.querySelectorAll('.modal-form').forEach(form => {
    form.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        const formData = new FormData(this);
        const formType = this.dataset.formType;
        const data = Object.fromEntries(formData);
        data.form_type = formType;
        
        const button = this.querySelector('button[type="submit"]');
        const originalText = button.textContent;
        button.textContent = 'ENVIANDO...';
        button.disabled = true;
        
        try {
            const response = await fetch('<?php echo admin_url('admin-ajax.php'); ?>', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: new URLSearchParams({
                    action: 'hpc_submit_form',
                    nonce: '<?php echo wp_create_nonce('hpc_church_nonce'); ?>',
                    ...data
                })
            });
            
            const result = await response.json();
            
            if (result.success) {
                alert('✅ ' + result.data.message);
                this.reset();
                
                // Close the modal
                const modalId = this.closest('.modal').id;
                closeModal(modalId);
            } else {
                alert('❌ Erro ao enviar formulário. Tente novamente.');
            }
        } catch (error) {
            console.error('Form submission error:', error);
            alert('❌ Erro ao enviar formulário. Verifique sua conexão e tente novamente.');
        } finally {
            button.textContent = originalText;
            button.disabled = false;
        }
    });
});

// Make functions globally available
window.openModal = openModal;
window.closeModal = closeModal;
</script>
