<?php
/**
 * Template Name: Agenda
 * Template for Events Calendar with interactive calendar and event signups
 */

get_header(); ?>

<section class="hero" style="margin-top: 88px; padding: 80px 40px 60px; background: #000; color: white; text-align: center;">
    <h1 style="font-family: 'Cormorant Garamond', serif; font-size: 4.5rem; font-weight: 300; letter-spacing: 3px; margin-bottom: 15px;">
        Agenda de Eventos
    </h1>
    <p style="font-size: 1.2rem; font-weight: 300; letter-spacing: 0.5px;">
        Participe da nossa comunidade. Inscreva-se nos eventos e ações sociais.
    </p>
</section>

<div class="container" style="max-width: 1400px; margin: 0 auto; padding: 60px 40px;">
    <!-- Filters -->
    <div class="filters" style="display: flex; justify-content: center; gap: 15px; margin-bottom: 50px; flex-wrap: wrap;">
        <button class="filter-btn active" data-filter="all" style="padding: 12px 30px; background: #000; border: 2px solid #000; color: white; font-size: 0.85rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1.5px; cursor: pointer; transition: all 0.3s;">
            Todos
        </button>
        <button class="filter-btn" data-filter="culto" style="padding: 12px 30px; background: white; border: 2px solid #e0e0e0; color: #666; font-size: 0.85rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1.5px; cursor: pointer; transition: all 0.3s;">
            Cultos
        </button>
        <button class="filter-btn" data-filter="grupo" style="padding: 12px 30px; background: white; border: 2px solid #e0e0e0; color: #666; font-size: 0.85rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1.5px; cursor: pointer; transition: all 0.3s;">
            Grupos
        </button>
        <button class="filter-btn" data-filter="acao" style="padding: 12px 30px; background: white; border: 2px solid #e0e0e0; color: #666; font-size: 0.85rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1.5px; cursor: pointer; transition: all 0.3s;">
            Ações Sociais
        </button>
        <button class="filter-btn" data-filter="especial" style="padding: 12px 30px; background: white; border: 2px solid #e0e0e0; color: #666; font-size: 0.85rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1.5px; cursor: pointer; transition: all 0.3s;">
            Eventos Especiais
        </button>
    </div>

    <!-- Calendar Header -->
    <div class="calendar-header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 40px; padding: 30px; background: white; border: 2px solid #000;">
        <h2 class="calendar-title" id="currentMonth" style="font-family: 'Cormorant Garamond', serif; font-size: 2.5rem; font-weight: 600;">
            Fevereiro 2025
        </h2>
        <div class="calendar-nav" style="display: flex; gap: 15px;">
            <button onclick="changeMonth(-1)" style="padding: 12px 25px; background: #000; color: white; border: none; font-weight: 600; cursor: pointer; text-transform: uppercase; letter-spacing: 1px; font-size: 0.8rem; transition: all 0.3s;">
                ◀ Anterior
            </button>
            <button onclick="changeMonth(1)" style="padding: 12px 25px; background: #000; color: white; border: none; font-weight: 600; cursor: pointer; text-transform: uppercase; letter-spacing: 1px; font-size: 0.8rem; transition: all 0.3s;">
                Próximo ▶
            </button>
        </div>
    </div>

    <!-- Calendar Grid -->
    <div class="calendar-grid" id="calendarGrid" style="display: grid; grid-template-columns: repeat(7, 1fr); gap: 1px; background: #e0e0e0; border: 2px solid #000; margin-bottom: 60px;">
        <!-- Day headers -->
        <div class="calendar-day-header" style="background: #000; color: white; padding: 20px; text-align: center; font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 2px;">Dom</div>
        <div class="calendar-day-header" style="background: #000; color: white; padding: 20px; text-align: center; font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 2px;">Seg</div>
        <div class="calendar-day-header" style="background: #000; color: white; padding: 20px; text-align: center; font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 2px;">Ter</div>
        <div class="calendar-day-header" style="background: #000; color: white; padding: 20px; text-align: center; font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 2px;">Qua</div>
        <div class="calendar-day-header" style="background: #000; color: white; padding: 20px; text-align: center; font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 2px;">Qui</div>
        <div class="calendar-day-header" style="background: #000; color: white; padding: 20px; text-align: center; font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 2px;">Sex</div>
        <div class="calendar-day-header" style="background: #000; color: white; padding: 20px; text-align: center; font-weight: 700; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 2px;">Sáb</div>
    </div>

    <!-- Events List -->
    <div class="events-list" style="margin-top: 60px;">
        <h2 style="font-family: 'Cormorant Garamond', serif; font-size: 3rem; font-weight: 300; margin-bottom: 40px; text-align: center;">
            Próximos Eventos
        </h2>
        <div id="eventsList"></div>
    </div>
</div>

<!-- Modal de Inscrição -->
<div id="signupModal" class="modal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.85); backdrop-filter: blur(8px); z-index: 10000; justify-content: center; align-items: center; padding: 20px;">
    <div class="modal-content" style="background: white; max-width: 600px; width: 100%; max-height: 90vh; overflow-y: auto; padding: 50px; border: 3px solid #000; position: relative;">
        <span class="modal-close" onclick="closeSignupModal()" style="position: absolute; top: 20px; right: 30px; font-size: 2rem; cursor: pointer; line-height: 1; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border-radius: 50%; background: #000; color: white; transition: all 0.3s;">&times;</span>
        <h2 id="modalTitle" style="font-family: 'Cormorant Garamond', serif; font-size: 2.5rem; margin-bottom: 30px;">
            Inscrever-se no Evento
        </h2>
        <form id="signupForm" class="modal-form" style="display: flex; flex-direction: column; gap: 15px;">
            <input type="hidden" id="eventId" name="eventId">
            <input type="text" name="name" placeholder="Seu Nome Completo" required style="width: 100%; padding: 14px; border: 2px solid #e0e0e0; font-family: 'Montserrat', sans-serif;">
            <input type="email" name="email" placeholder="Seu E-mail" required style="width: 100%; padding: 14px; border: 2px solid #e0e0e0; font-family: 'Montserrat', sans-serif;">
            <input type="tel" name="phone" placeholder="Seu Telefone" required style="width: 100%; padding: 14px; border: 2px solid #e0e0e0; font-family: 'Montserrat', sans-serif;">
            <select name="attendance" style="width: 100%; padding: 14px; border: 2px solid #e0e0e0; font-family: 'Montserrat', sans-serif;">
                <option value="">Como você vai participar?</option>
                <option value="presencial">Presencial</option>
                <option value="online">Online (se disponível)</option>
            </select>
            <select name="volunteers" style="width: 100%; padding: 14px; border: 2px solid #e0e0e0; font-family: 'Montserrat', sans-serif;">
                <option value="">Deseja ser voluntário neste evento?</option>
                <option value="yes">Sim, quero ajudar!</option>
                <option value="no">Não, apenas participar</option>
            </select>
            <textarea name="message" placeholder="Alguma observação? (opcional)" rows="3" style="width: 100%; padding: 14px; border: 2px solid #e0e0e0; font-family: 'Montserrat', sans-serif;"></textarea>
            <button type="submit" style="padding: 16px; background: #000; color: white; border: none; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; cursor: pointer; margin-top: 10px;">
                CONFIRMAR INSCRIÇÃO
            </button>
        </form>
    </div>
</div>

<style>
.filter-btn:hover, .filter-btn.active {
    background: #000 !important;
    color: white !important;
    border-color: #000 !important;
}

.calendar-nav button:hover {
    background: #2a2a2a;
}

.calendar-day {
    background: white;
    min-height: 120px;
    padding: 10px;
    position: relative;
    cursor: pointer;
    transition: all 0.2s;
}

.calendar-day:hover {
    background: #f8f8f8;
}

.calendar-day.other-month {
    background: #fafafa;
    opacity: 0.5;
}

.calendar-day.today {
    background: #fff9e6;
    border: 2px solid #ffcc00;
}

.day-number {
    font-size: 1.2rem;
    font-weight: 700;
    margin-bottom: 8px;
}

.event-mini {
    font-size: 0.7rem;
    padding: 3px 6px;
    margin: 2px 0;
    background: #000;
    color: white;
    border-radius: 2px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.event-item {
    background: white;
    border: 2px solid #e0e0e0;
    padding: 30px;
    margin-bottom: 20px;
    display: grid;
    grid-template-columns: 120px 1fr auto;
    gap: 30px;
    align-items: center;
    transition: all 0.3s;
    cursor: pointer;
}

.event-item:hover {
    border-color: #000;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}

.signup-btn {
    padding: 14px 30px;
    background: #000;
    color: white;
    border: none;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    cursor: pointer;
    font-size: 0.8rem;
    transition: all 0.3s;
}

.signup-btn:hover {
    background: #2a2a2a;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

.modal.active {
    display: flex !important;
}

.modal-close:hover {
    background: #2a2a2a !important;
    transform: rotate(90deg);
}

input:focus, select:focus, textarea:focus {
    outline: none;
    border-color: #000;
}

@media (max-width: 968px) {
    .calendar-day {
        min-height: 80px;
        padding: 5px;
    }
    .event-mini {
        font-size: 0.6rem;
    }
    .event-item {
        grid-template-columns: 1fr;
        gap: 20px;
    }
}
</style>

<script>
// Events data from WordPress
const events = <?php
$events_query = new WP_Query( array(
    'post_type' => 'evento',
    'posts_per_page' => -1,
    'meta_key' => '_evento_data',
    'orderby' => 'meta_value',
    'order' => 'ASC',
) );

$events_array = array();
while ( $events_query->have_posts() ) {
    $events_query->the_post();
    $events_array[] = array(
        'id' => get_the_ID(),
        'title' => get_the_title(),
        'date' => get_post_meta( get_the_ID(), '_evento_data', true ),
        'time' => get_post_meta( get_the_ID(), '_evento_horario', true ),
        'type' => get_post_meta( get_the_ID(), '_evento_tipo', true ),
        'desc' => wp_trim_words( get_the_excerpt(), 15 ),
    );
}
wp_reset_postdata();
echo json_encode( $events_array );
?>;

let currentFilter = 'all';
let currentDate = new Date(2025, 1, 1); // Feb 2025

// Generate calendar
function generateCalendar() {
    const year = currentDate.getFullYear();
    const month = currentDate.getMonth();
    
    const firstDay = new Date(year, month, 1).getDay();
    const daysInMonth = new Date(year, month + 1, 0).getDate();
    const daysInPrevMonth = new Date(year, month, 0).getDate();
    
    const monthNames = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
    document.getElementById('currentMonth').textContent = monthNames[month] + ' ' + year;
    
    const grid = document.getElementById('calendarGrid');
    const oldDays = grid.querySelectorAll('.calendar-day');
    oldDays.forEach(day => day.remove());
    
    // Previous month days
    for (let i = firstDay - 1; i >= 0; i--) {
        const day = createDayElement(daysInPrevMonth - i, true);
        grid.appendChild(day);
    }
    
    // Current month days
    for (let i = 1; i <= daysInMonth; i++) {
        const dateStr = year + '-' + String(month + 1).padStart(2, '0') + '-' + String(i).padStart(2, '0');
        const dayEvents = events.filter(e => e.date === dateStr && (currentFilter === 'all' || e.type === currentFilter));
        const isToday = i === 9 && month === 1 && year === 2025;
        const day = createDayElement(i, false, dayEvents, isToday);
        grid.appendChild(day);
    }
    
    // Next month days
    const totalCells = grid.children.length - 7;
    const remainingCells = 42 - totalCells;
    for (let i = 1; i <= remainingCells; i++) {
        const day = createDayElement(i, true);
        grid.appendChild(day);
    }
}

function createDayElement(dayNum, isOtherMonth, dayEvents = [], isToday = false) {
    const div = document.createElement('div');
    div.className = 'calendar-day' + (isOtherMonth ? ' other-month' : '') + (isToday ? ' today' : '');
    div.innerHTML = '<div class="day-number">' + dayNum + '</div>';
    
    if (dayEvents.length > 0) {
        dayEvents.slice(0, 2).forEach(event => {
            div.innerHTML += '<div class="event-mini">' + event.title + '</div>';
        });
        if (dayEvents.length > 2) {
            div.innerHTML += '<div class="event-mini">+' + (dayEvents.length - 2) + ' mais</div>';
        }
    }
    
    return div;
}

function generateEventsList() {
    const container = document.getElementById('eventsList');
    const filtered = currentFilter === 'all' ? events : events.filter(e => e.type === currentFilter);
    
    container.innerHTML = filtered.map(event => {
        const date = new Date(event.date + 'T00:00:00');
        const dayNames = ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'];
        const monthNames = ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'];
        
        const typeLabels = {
            'culto': 'Culto',
            'grupo': 'Grupo',
            'acao': 'Ação Social',
            'especial': 'Especial'
        };
        
        return `
            <div class="event-item" onclick="openSignupModal(${event.id})">
                <div class="event-date-box" style="text-align: center; border-right: 2px solid #e0e0e0; padding-right: 30px;">
                    <div class="month" style="font-size: 0.75rem; text-transform: uppercase; letter-spacing: 2px; color: #999; font-weight: 700;">${monthNames[date.getMonth()]}</div>
                    <div class="day" style="font-size: 3.5rem; font-weight: 700; line-height: 1; margin: 5px 0;">${date.getDate()}</div>
                    <div class="weekday" style="font-size: 0.8rem; color: #666; text-transform: uppercase; letter-spacing: 1px;">${dayNames[date.getDay()]}</div>
                </div>
                <div class="event-info">
                    <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 1.8rem; font-weight: 600; margin-bottom: 10px;">${event.title}</h3>
                    <div class="event-time" style="font-size: 0.85rem; color: #666; margin-bottom: 8px;">🕐 ${event.time}</div>
                    <div class="event-desc" style="font-size: 0.95rem; color: #555; line-height: 1.6;">${event.desc}</div>
                    <span class="event-type ${event.type}" style="display: inline-block; padding: 5px 12px; font-size: 0.7rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; margin-top: 10px; background: #E3F2FD; color: #1976D2;">${typeLabels[event.type] || event.type}</span>
                </div>
                <div class="event-action" style="text-align: right;">
                    <button class="signup-btn" onclick="event.stopPropagation(); openSignupModal(${event.id})">INSCREVER-SE</button>
                </div>
            </div>
        `;
    }).join('');
}

function changeMonth(delta) {
    currentDate.setMonth(currentDate.getMonth() + delta);
    generateCalendar();
}

function openSignupModal(eventId) {
    const event = events.find(e => e.id === eventId);
    document.getElementById('modalTitle').textContent = 'Inscrever-se: ' + event.title;
    document.getElementById('eventId').value = eventId;
    document.getElementById('signupModal').classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeSignupModal() {
    document.getElementById('signupModal').classList.remove('active');
    document.body.style.overflow = '';
}

// Filter buttons
document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
        this.classList.add('active');
        currentFilter = this.dataset.filter;
        generateCalendar();
        generateEventsList();
    });
});

// Form submission
document.getElementById('signupForm').addEventListener('submit', async function(e) {
    e.preventDefault();
    const formData = new FormData(this);
    const data = Object.fromEntries(formData);
    data.form_type = 'event_signup';
    
    const event = events.find(e => e.id === parseInt(data.eventId));
    data.eventTitle = event.title;
    data.eventDate = event.date;
    
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
            alert('✅ Inscrição confirmada! Você receberá um email de confirmação em breve.');
            this.reset();
            closeSignupModal();
        } else {
            alert('❌ Erro ao enviar inscrição. Tente novamente.');
        }
    } catch (error) {
        alert('❌ Erro ao enviar inscrição. Tente novamente.');
    }
});

// Close modal on outside click
document.getElementById('signupModal').addEventListener('click', function(e) {
    if (e.target === this) closeSignupModal();
});

// Initialize
generateCalendar();
generateEventsList();
</script>

<?php get_footer(); ?>
