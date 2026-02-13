
// ========== CANVAS BACKGROUND ==========
const canvas = document.getElementById('bg-canvas');

if (canvas) {
    canvas.style.willChange = 'transform';
    let isCanvasVisible = true;
    const ctx = canvas.getContext('2d');
    let width, height;
    let particles = [];

    const PARTICLE_COUNT = 80;
    const PARTICLE_COLOR = '#0F172A';
    const CONNECTION_DIST = 120;

    function resize() {
        width = canvas.width = window.innerWidth;
        height = canvas.height = window.innerHeight;
    }
    window.addEventListener('resize', resize);
    resize();

    let mouse = { x: width / 2, y: height / 2 };
    window.addEventListener('mousemove', (e) => {
        mouse.x = e.clientX;
        mouse.y = e.clientY;
    }, { passive: true });

    // Pause animation when canvas is off-screen
    const canvasObserver = new IntersectionObserver((entries) => {
        isCanvasVisible = entries[0].isIntersecting;
    }, { threshold: 0 });
    canvasObserver.observe(canvas);

    class Particle {
        constructor() {
            this.x = Math.random() * width;
            this.y = Math.random() * height;
            this.vx = (Math.random() - 0.5) * 0.15;
            this.vy = (Math.random() - 0.5) * 0.15;
            this.size = Math.random() * 1.5 + 0.5;
        }

        update() {
            this.x += this.vx;
            this.y += this.vy;

            if (this.x < 0 || this.x > width) this.vx *= -1;
            if (this.y < 0 || this.y > height) this.vy *= -1;

            const dx = this.x - mouse.x;
            const dy = this.y - mouse.y;
            const dist = Math.sqrt(dx * dx + dy * dy);
            if (dist < 250) {
                const force = (250 - dist) / 250;
                this.vx -= (dx / dist) * force * 0.005;
                this.vy -= (dy / dist) * force * 0.005;
            }
        }

        draw() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fillStyle = PARTICLE_COLOR;
            ctx.globalAlpha = 0.6;
            ctx.fill();
        }
    }

    function initParticles() {
        particles = [];
        for (let i = 0; i < PARTICLE_COUNT; i++) {
            particles.push(new Particle());
        }
    }

    function animate() {
        requestAnimationFrame(animate);
        if (!isCanvasVisible) return;
        ctx.clearRect(0, 0, width, height);

        particles.forEach(p => {
            p.update();
            p.draw();
        });

        ctx.strokeStyle = PARTICLE_COLOR;
        ctx.lineWidth = 0.5;

        for (let i = 0; i < particles.length; i++) {
            for (let j = i + 1; j < particles.length; j++) {
                const dx = particles[i].x - particles[j].x;
                const dy = particles[i].y - particles[j].y;
                const dist = Math.sqrt(dx * dx + dy * dy);

                if (dist < CONNECTION_DIST) {
                    ctx.beginPath();
                    ctx.moveTo(particles[i].x, particles[i].y);
                    ctx.lineTo(particles[j].x, particles[j].y);
                    ctx.globalAlpha = (1 - (dist / CONNECTION_DIST)) * 0.3;
                    ctx.stroke();
                }
            }
        }

        particles.forEach(p => {
            const dx = p.x - mouse.x;
            const dy = p.y - mouse.y;
            const dist = Math.sqrt(dx * dx + dy * dy);
            if (dist < 200) {
                ctx.beginPath();
                ctx.moveTo(p.x, p.y);
                ctx.lineTo(mouse.x, mouse.y);
                ctx.globalAlpha = (1 - (dist / 200)) * 0.4;
                ctx.stroke();
            }
        });


    }

    initParticles();
    animate();
}

// ========== SCROLL REVEAL ==========
const observerOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -50px 0px"
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('active');
            observer.unobserve(entry.target);
        }
    });
}, observerOptions);

document.querySelectorAll('.reveal').forEach(el => {
    observer.observe(el);
});

// ========== ACCORDION ==========
const accordionItems = document.querySelectorAll('.accordion-item');

accordionItems.forEach(item => {
    const header = item.querySelector('.accordion-header');
    if (header) {
        header.addEventListener('click', () => {
            accordionItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('open');
                }
            });
            item.classList.toggle('open');
        });
    }
});

// ========== MODAL & MULTI-STEP FORM ==========
// ========== MODAL LOGIC ==========
const modal = document.getElementById('lead-modal');
const openBtns = document.querySelectorAll('.open-modal');
const closeBtn = document.querySelector('.close-modal');

if (modal) {
    openBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            modal.classList.add('active');
            // Reset form to step 1 when opening
            resetFormToStep(1);
        });
    });

    if (closeBtn) {
        closeBtn.addEventListener('click', () => {
            modal.classList.remove('active');
        });
    }

    window.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.remove('active');
        }
    });
}

// ========== MULTI-STEP FORM LOGIC ==========
const form = document.getElementById('lead-form');

if (form) {
    const steps = document.querySelectorAll('.form-step');
    const progressFill = document.getElementById('progress-fill');
    const progressText = document.getElementById('progress-text');
    const btnPrev = document.getElementById('btn-prev');
    const btnNext = document.getElementById('btn-next');
    const btnSubmit = document.getElementById('btn-submit');

    // Build step sequence — detect if branching steps exist
    const hasBranching = document.querySelector('.form-step[data-step="2a"]') !== null;

    // Default linear sequence (no branching, e.g. landing page modal)
    let stepSequence = [];
    steps.forEach(s => {
        const id = s.dataset.step;
        // Skip branch steps from default sequence
        if (id !== '2a' && id !== '2b') {
            stepSequence.push(id);
        }
    });
    // If no branching, include all steps linearly
    if (!hasBranching) {
        stepSequence = [];
        steps.forEach(s => stepSequence.push(s.dataset.step));
    }

    let currentStepIndex = 0;

    function getCurrentStepId() {
        return stepSequence[currentStepIndex];
    }

    function rebuildSequence() {
        if (!hasBranching) return;

        const personType = form.querySelector('input[name="person_type"]:checked');
        const branch = personType ? personType.value : null;

        // Rebuild: 1, 2, (2a or 2b), 3, 4, 5, ...
        const baseSteps = [];
        steps.forEach(s => {
            const id = s.dataset.step;
            if (id !== '2a' && id !== '2b') {
                baseSteps.push(id);
            }
        });

        // Insert the correct branch after step "2"
        const idx2 = baseSteps.indexOf('2');
        if (idx2 !== -1 && branch) {
            const branchStep = branch === 'pf' ? '2a' : '2b';
            baseSteps.splice(idx2 + 1, 0, branchStep);
        }

        stepSequence = baseSteps;
    }

    function updateFormUI() {
        const activeId = getCurrentStepId();

        // Update steps visibility
        steps.forEach(step => {
            step.classList.toggle('active', step.dataset.step === activeId);
        });

        // Update progress bar
        const totalVisible = stepSequence.length;
        const progressPercent = ((currentStepIndex + 1) / totalVisible) * 100;
        if (progressFill) progressFill.style.width = `${progressPercent}%`;

        // Update progress text
        if (progressText) progressText.textContent = `Etapa ${currentStepIndex + 1} de ${totalVisible}`;

        // Update navigation buttons
        if (btnPrev) btnPrev.disabled = currentStepIndex === 0;

        if (currentStepIndex === stepSequence.length - 1) {
            if (btnNext) btnNext.style.display = 'none';
            if (btnSubmit) btnSubmit.style.display = 'flex';
        } else {
            if (btnNext) btnNext.style.display = 'flex';
            if (btnSubmit) btnSubmit.style.display = 'none';
        }

        // Scroll modal to top if inside modal
        if (modal) {
            const modalContent = modal.querySelector('.modal-content');
            if (modalContent) {
                modalContent.scrollTop = 0;
            }
        }
    }

    function validateStep(stepId) {
        const currentStepEl = document.querySelector(`.form-step[data-step="${stepId}"]`);
        if (!currentStepEl) return true;

        const requiredInputs = currentStepEl.querySelectorAll('input[required], textarea[required], select[required]');
        let isValid = true;

        requiredInputs.forEach(input => {
            // For radio groups, check if any in the group is selected
            if (input.type === 'radio') {
                const groupName = input.name;
                const groupChecked = currentStepEl.querySelector(`input[name="${groupName}"]:checked`);
                if (!groupChecked) {
                    isValid = false;
                    input.closest('.radio-group')?.classList.add('error');
                } else {
                    input.closest('.radio-group')?.classList.remove('error');
                }
                return;
            }

            if (!input.value.trim()) {
                isValid = false;
                input.classList.add('error');

                // Add error shake animation
                input.parentElement.classList.add('shake');
                setTimeout(() => {
                    input.parentElement.classList.remove('shake');
                }, 500);
            } else {
                input.classList.remove('error');
            }
        });

        return isValid;
    }

    window.resetFormToStep = function (step) {
        currentStepIndex = 0;
        updateFormUI();
    };

    if (btnNext) {
        btnNext.addEventListener('click', () => {
            const currentId = getCurrentStepId();

            if (!validateStep(currentId)) return;

            // After step 2 (type selector), rebuild the sequence with the chosen branch
            if (currentId === '2' && hasBranching) {
                rebuildSequence();
            }

            if (currentStepIndex < stepSequence.length - 1) {
                currentStepIndex++;
                updateFormUI();
            }
        });
    }

    if (btnPrev) {
        btnPrev.addEventListener('click', () => {
            if (currentStepIndex > 0) {
                currentStepIndex--;
                // If we went back to step 2 from a branch, keep sequence intact
                updateFormUI();
            }
        });
    }

    // Prevent Enter from submitting - instead go to next step
    form.addEventListener('keydown', (e) => {
        if (e.key === 'Enter' && e.target.tagName !== 'TEXTAREA') {
            e.preventDefault();
            const currentId = getCurrentStepId();
            if (validateStep(currentId) && currentStepIndex < stepSequence.length - 1) {
                if (currentId === '2' && hasBranching) {
                    rebuildSequence();
                }
                currentStepIndex++;
                updateFormUI();
            }
        }
    });

    form.addEventListener('submit', async (e) => {
        e.preventDefault();

        // Collect all form data
        const formData = new FormData(form);
        const data = {};
        formData.forEach((value, key) => {
            data[key] = value;
        });

        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

        try {
            const response = await fetch('/leads', { // URL to be confirmed/adjusted by backend
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify(data)
            });

            if (response.ok) {
                // Show success message
                // Check if we are in a modal or inline
                const successContainer = modal ? modal.querySelector('.modal-content') : form.parentElement;

                if (successContainer) {
                    successContainer.innerHTML = `
                        <div class="form-success">
                        <div class="success-icon">
                            <i class="ph ph-check-circle"></i>
                        </div>
                        <h2>Solicitação Enviada!</h2>
                        <p>Recebemos suas informações e entraremos em contato em breve.</p>
                        <button type="button" class="btn-primary" onclick="window.location.reload();">
                            Voltar
                        </button>
                        </div>
                    `;
                }

            } else {
                console.error('Form submission failed:', response.statusText);
                alert('Ocorreu um erro ao enviar. Por favor, tente novamente.');
            }
        } catch (error) {
            console.error('Network error:', error);
            alert('Erro de conexão. Verifique sua internet.');
        }
    });

    // Remove error state on input
    document.querySelectorAll('.form-step input, .form-step textarea').forEach(input => {
        input.addEventListener('input', () => {
            input.classList.remove('error');
        });
    });

    // Initialize form UI
    updateFormUI();
}

// ========== TABS ==========


// ========== MAGNETIC BUTTONS ==========
const magneticBtns = document.querySelectorAll('.btn-magnetic');

magneticBtns.forEach(btn => {
    let btnTicking = false;
    btn.addEventListener('mousemove', (e) => {
        if (btnTicking) return;
        btnTicking = true;
        requestAnimationFrame(() => {
            const rect = btn.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            btn.style.transform = `translate(${x * 0.15}px, ${y * 0.15}px)`;
            btnTicking = false;
        });
    }, { passive: true });

    btn.addEventListener('mouseleave', () => {
        btn.style.transform = 'translate(0, 0)';
    });
});

// ========== CARD TILT 3D EFFECT ==========
const tiltCards = document.querySelectorAll('.card-tilt');

tiltCards.forEach(card => {
    let tiltTicking = false;
    card.addEventListener('mousemove', (e) => {
        if (tiltTicking) return;
        tiltTicking = true;
        requestAnimationFrame(() => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            const rotateX = (y - centerY) / 20;
            const rotateY = (centerX - x) / 20;
            card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.02)`;
            tiltTicking = false;
        });
    }, { passive: true });

    card.addEventListener('mouseleave', () => {
        card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) scale(1)';
    });
});

// ========== SMOOTH SCROLL FOR ANCHOR LINKS ==========
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (href === '#') return;

        e.preventDefault();
        const target = document.querySelector(href);

        if (target) {
            const offsetTop = target.offsetTop - 80; // Account for fixed navbar
            window.scrollTo({
                top: offsetTop,
                behavior: 'smooth'
            });
        }
    });
});

// ========== NAVBAR SCROLL EFFECT ==========
const navbar = document.querySelector('.navbar');

if (navbar) {
    let scrollTicking = false;
    window.addEventListener('scroll', () => {
        if (scrollTicking) return;
        scrollTicking = true;
        requestAnimationFrame(() => {
            if (window.scrollY > 600) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
            scrollTicking = false;
        });
    }, { passive: true });
}

// ========== SPOTLIGHT EFFECT ==========
document.querySelectorAll('.technical-card, .saas-card').forEach(card => {
    let spotTicking = false;
    card.addEventListener('mousemove', (e) => {
        if (spotTicking) return;
        spotTicking = true;
        requestAnimationFrame(() => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            card.style.setProperty('--mouse-x', `${x}px`);
            card.style.setProperty('--mouse-y', `${y}px`);
            spotTicking = false;
        });
    }, { passive: true });
});

// ========== HERO SCROLL INDICATOR ==========
const scrollIndicator = document.querySelector('.scroll-indicator');
if (scrollIndicator) {
    scrollIndicator.addEventListener('click', () => {
        const target = document.getElementById('more-content');
        if (target) {
            const navbarHeight = 80; // Approximate navbar height
            const targetPosition = target.getBoundingClientRect().top + window.scrollY - navbarHeight;

            window.scrollTo({
                top: targetPosition,
                behavior: 'smooth'
            });
        }
    });
}

// ========== INPUT MASKS (Phone & CNPJ) ==========
function applyMask(input, maskFn) {
    if (!input) return;
    input.addEventListener('input', () => {
        const cursorPos = input.selectionStart;
        const oldLen = input.value.length;
        input.value = maskFn(input.value);
        const newLen = input.value.length;
        const newPos = cursorPos + (newLen - oldLen);
        input.setSelectionRange(newPos, newPos);
    });
}

function phoneMask(value) {
    const digits = value.replace(/\D/g, '').slice(0, 11);
    if (digits.length <= 2) return digits.length ? `(${digits}` : '';
    if (digits.length <= 7) return `(${digits.slice(0, 2)}) ${digits.slice(2)}`;
    return `(${digits.slice(0, 2)}) ${digits.slice(2, 7)}-${digits.slice(7)}`;
}

function cnpjMask(value) {
    const digits = value.replace(/\D/g, '').slice(0, 14);
    if (digits.length <= 2) return digits;
    if (digits.length <= 5) return `${digits.slice(0, 2)}.${digits.slice(2)}`;
    if (digits.length <= 8) return `${digits.slice(0, 2)}.${digits.slice(2, 5)}.${digits.slice(5)}`;
    if (digits.length <= 12) return `${digits.slice(0, 2)}.${digits.slice(2, 5)}.${digits.slice(5, 8)}/${digits.slice(8)}`;
    return `${digits.slice(0, 2)}.${digits.slice(2, 5)}.${digits.slice(5, 8)}/${digits.slice(8, 12)}-${digits.slice(12)}`;
}

applyMask(document.getElementById('whatsapp'), phoneMask);
applyMask(document.getElementById('cnpj'), cnpjMask);

function cpfMask(value) {
    const digits = value.replace(/\D/g, '').slice(0, 11);
    if (digits.length <= 3) return digits;
    if (digits.length <= 6) return `${digits.slice(0, 3)}.${digits.slice(3)}`;
    if (digits.length <= 9) return `${digits.slice(0, 3)}.${digits.slice(3, 6)}.${digits.slice(6)}`;
    return `${digits.slice(0, 3)}.${digits.slice(3, 6)}.${digits.slice(6, 9)}-${digits.slice(9)}`;
}

function dateMask(value) {
    const digits = value.replace(/\D/g, '').slice(0, 8);
    if (digits.length <= 2) return digits;
    if (digits.length <= 4) return `${digits.slice(0, 2)}/${digits.slice(2)}`;
    return `${digits.slice(0, 2)}/${digits.slice(2, 4)}/${digits.slice(4)}`;
}

applyMask(document.getElementById('cpf'), cpfMask);
applyMask(document.getElementById('birthdate'), dateMask);
