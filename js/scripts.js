const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
const scrollBehavior = prefersReducedMotion ? 'auto' : 'smooth';

document.addEventListener('DOMContentLoaded', function () {
    // Example: Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: scrollBehavior
            });
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('section');
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');

    // Add scroll event listener
    window.addEventListener('scroll', function () {

        // Highlight active section
        let current = '';
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.clientHeight;
            if (window.scrollY >= sectionTop - 100) {
                current = section.getAttribute('id');
            }
        });

        navLinks.forEach(link => {
            link.classList.remove('active');
            if (link.getAttribute('href') === `#${current}`) {
                link.classList.add('active');
            }
        });
    });

    // Close mobile menu when clicking a link
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (navbarCollapse.classList.contains('show')) {
                navbarToggler.click();
            }
        });
    });

    // Initialize scroll event
    window.dispatchEvent(new Event('scroll'));
});


// Skills Section Interactivity
document.addEventListener('DOMContentLoaded', function () {
    const skillItems = document.querySelectorAll('.skill-item');
    skillItems.forEach(item => {
        item.addEventListener('mouseover', function () {
            this.style.transform = 'translateX(10px)';
        });
        item.addEventListener('mouseout', function () {
            this.style.transform = 'translateX(0)';
        });
    });
});
document.addEventListener('DOMContentLoaded', function () {
    const carousel = document.querySelector('.tools-carousel');
    const controls = document.querySelectorAll('.carousel-control');
    const filterButtons = document.querySelectorAll('.carousel-btn');
    let autoSlideInterval;
    const autoSlideSpeed = 3000; // milliseconds

    // Carousel Navigation
    controls.forEach(control => {
        control.addEventListener('click', () => {
            const scrollAmount = control.classList.contains('next') ? 300 : -300;
            carousel.scrollBy({ left: scrollAmount, behavior: scrollBehavior });
        });
    });

    // Filter Functionality
    filterButtons.forEach(button => {
        button.addEventListener('click', function () {
            const category = this.dataset.category;

            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            document.querySelectorAll('.tool-card').forEach(card => {
                card.style.display = category === 'all' || card.dataset.category === category ? 'block' : 'none';
            });

            // Start or stop auto-slide based on the selected category
            if (category === 'all') {
                startAutoSlide();
            } else {
                stopAutoSlide();
            }
        });
    });

    // Horizontal Scroll
    let isDown = false;
    let startX;
    let scrollLeft;

    carousel.addEventListener('mousedown', (e) => {
        isDown = true;
        startX = e.pageX - carousel.offsetLeft;
        scrollLeft = carousel.scrollLeft;
    });

    carousel.addEventListener('mouseleave', () => {
        isDown = false;
    });

    carousel.addEventListener('mouseup', () => {
        isDown = false;
    });

    carousel.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - carousel.offsetLeft;
        const walk = (x - startX) * 2;
        carousel.scrollLeft = scrollLeft - walk;
    });

    // Auto-slide functionality
    function startAutoSlide() {
        stopAutoSlide(); // Ensure any existing interval is cleared
        if (prefersReducedMotion) return;
        autoSlideInterval = setInterval(() => {
            carousel.scrollBy({ left: 300, behavior: scrollBehavior });
        }, autoSlideSpeed);
    }

    function stopAutoSlide() {
        clearInterval(autoSlideInterval);
    }
});
//resume

document.addEventListener('DOMContentLoaded', function () {
    const resumeItems = document.querySelectorAll('.resume-item');
    resumeItems.forEach(item => {
        item.addEventListener('mouseover', function () {
            this.style.transform = 'scale(1.05)';
        });
        item.addEventListener('mouseout', function () {
            this.style.transform = 'scale(1)';
        });
    });
});
//contact 

// Contact form delivery.
// Paste your Formspree form URL here (e.g. 'https://formspree.io/f/abcdwxyz').
// While it is empty, the form opens the visitor's email app with the message
// pre-filled, so messages are never silently lost.
const CONTACT_FORM_ENDPOINT = '';
const CONTACT_EMAIL = 'rdsandip7@gmail.com';

document.addEventListener('DOMContentLoaded', function () {
    const contactForm = document.getElementById('contactForm');
    const successModal = new bootstrap.Modal(document.getElementById('successModal'));
    const submitBtn = contactForm.querySelector('button[type="submit"]');
    const statusEl = document.getElementById('contactFormStatus');

    function setStatus(text) {
        statusEl.textContent = text;
        statusEl.hidden = !text;
    }

    contactForm.addEventListener('submit', async function (event) {
        event.preventDefault();
        event.stopPropagation();
        contactForm.classList.add('was-validated');
        setStatus('');
        if (!contactForm.checkValidity()) return;

        const formData = {
            name: document.getElementById('name').value.trim(),
            email: document.getElementById('email').value.trim(),
            subject: document.getElementById('subject').value.trim(),
            message: document.getElementById('message').value.trim()
        };

        if (!CONTACT_FORM_ENDPOINT) {
            const subject = formData.subject || `Message from ${formData.name}`;
            const body = `${formData.message}\n\n${formData.name}\n${formData.email}`;
            window.location.href = `mailto:${CONTACT_EMAIL}?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(body)}`;
            return;
        }

        submitBtn.disabled = true;
        try {
            const response = await fetch(CONTACT_FORM_ENDPOINT, {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
                body: JSON.stringify({ ...formData, _replyto: formData.email })
            });
            if (!response.ok) throw new Error(`HTTP ${response.status}`);
            contactForm.reset();
            contactForm.classList.remove('was-validated');
            successModal.show();
        } catch (err) {
            setStatus(`Sorry, your message could not be sent. Please email me directly at ${CONTACT_EMAIL}.`);
        } finally {
            submitBtn.disabled = false;
        }
    });

    // Close modal when clicking on backdrop
    document.getElementById('successModal').addEventListener('click', function (e) {
        if (e.target === this) {
            successModal.hide();
        }
    });
});


// Keep the footer copyright year current
document.addEventListener('DOMContentLoaded', function () {
    const yearEl = document.getElementById('copyrightYear');
    if (yearEl) yearEl.textContent = new Date().getFullYear();
});
