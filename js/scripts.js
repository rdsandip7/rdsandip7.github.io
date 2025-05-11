document.addEventListener('DOMContentLoaded', function () {
    // Example: Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const navbar = document.getElementById('mainNavbar');
    const navLinks = document.querySelectorAll('.nav-link');
    const sections = document.querySelectorAll('section');
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');

    // Add scroll event listener
    window.addEventListener('scroll', function () {
        // Shrink navbar on scroll
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }

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
//tools 
document.addEventListener('DOMContentLoaded', function () {
    const carousel = document.querySelector('.tools-carousel');
    const controls = document.querySelectorAll('.carousel-control');
    const filterButtons = document.querySelectorAll('.carousel-btn');

    // Carousel Navigation
    controls.forEach(control => {
        control.addEventListener('click', () => {
            const scrollAmount = control.classList.contains('next') ? 300 : -300;
            carousel.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        });
    });

    // Filter Functionality
    filterButtons.forEach(button => {
        button.addEventListener('click', function () {
            const category = this.dataset.category;

            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            document.querySelectorAll('.tool-card').forEach(card => {
                card.style.display = category === 'all' || card.dataset.category === category ?
                    'block' : 'none';
            });
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

document.addEventListener('DOMContentLoaded', function () {
    const contactForm = document.getElementById('contactForm');
    const successModal = new bootstrap.Modal(document.getElementById('successModal'));

    // Form validation
    contactForm.addEventListener('submit', function (event) {
        event.preventDefault();
        event.stopPropagation();

        // Check form validity
        if (contactForm.checkValidity()) {
            // Get form values
            const formData = {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                subject: document.getElementById('subject').value,
                message: document.getElementById('message').value
            };

            // Here you would typically send the data to a server
            console.log('Form submitted:', formData);

            // Simulate form submission
            setTimeout(() => {
                // Reset form
                contactForm.reset();
                contactForm.classList.remove('was-validated');

                // Show success modal
                successModal.show();
            }, 1000);
        }

        contactForm.classList.add('was-validated');
    });

    // Close modal when clicking on backdrop
    document.getElementById('successModal').addEventListener('click', function (e) {
        if (e.target === this) {
            successModal.hide();
        }
    });
});

