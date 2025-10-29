/**
 * HPC Church Theme - Main JavaScript
 */

(function($) {
    'use strict';

    // Mobile Menu Toggle
    $('.mobile-menu-toggle').on('click', function() {
        $('.nav-links').slideToggle();
        $(this).toggleClass('active');
    });

    // Smooth Scroll
    $('a[href^="#"]').on('click', function(e) {
        var target = $(this.getAttribute('href'));
        if (target.length) {
            e.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top - 88
            }, 800);
        }
    });

    // Modal Functions
    window.openModal = function(modalId) {
        $('#' + modalId).fadeIn(300).css('display', 'flex');
        $('body').css('overflow', 'hidden');
    };

    window.closeModal = function(modalId) {
        $('#' + modalId).fadeOut(300);
        $('body').css('overflow', '');
    };

    // Close modal on overlay click
    $('.modal-overlay').on('click', function(e) {
        if (e.target === this) {
            $(this).fadeOut(300);
            $('body').css('overflow', '');
        }
    });

    // Form submission via AJAX
    $('.modal-form').on('submit', function(e) {
        e.preventDefault();
        
        var $form = $(this);
        var $button = $form.find('button[type="submit"]');
        var originalText = $button.text();
        
        $button.text('Enviando...').prop('disabled', true);
        
        var formData = {
            action: 'hpc_submit_form',
            nonce: hpcAjax.nonce,
            form_type: $form.attr('id'),
        };
        
        $form.serializeArray().forEach(function(item) {
            formData[item.name] = item.value;
        });
        
        $.ajax({
            url: hpcAjax.ajax_url,
            type: 'POST',
            data: formData,
            success: function(response) {
                if (response.success) {
                    alert('✅ ' + response.data.message);
                    $form[0].reset();
                    $form.closest('.modal-overlay').fadeOut(300);
                    $('body').css('overflow', '');
                } else {
                    alert('❌ ' + response.data.message);
                }
            },
            error: function() {
                alert('❌ Erro ao enviar formulário. Tente novamente.');
            },
            complete: function() {
                $button.text(originalText).prop('disabled', false);
            }
        });
    });

})(jQuery);
