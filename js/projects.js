document.addEventListener('DOMContentLoaded', () => {
    loadProjects();
    initModalHandlers();
});

// Global state
let allProjects = [];
let currentPage = 1;
const projectsPerPage = 6;
let activeCategory = 'all';

async function loadProjects() {
    try {
        const response = await fetch('projects/projects.json');
        if (!response.ok) throw new Error('Network response was not ok');

        const data = await response.json();
        console.log('Raw JSON data:', data);

        // Validate projects array
        if (!data.projects || !Array.isArray(data.projects)) {
            throw new Error('Invalid JSON structure - missing projects array');
        }

        // Sort projects by date (newest first)
        allProjects = data.projects.sort((a, b) => {
            const dateA = new Date(a.date || new Date());
            const dateB = new Date(b.date || new Date());
            return dateB - dateA;
        });
        console.log('Sorted projects:', allProjects);

        renderProjects();
        renderFilters();
    } catch (error) {
        console.error('Failed to load projects:', error);
        showError();
    }
}

function renderProjects() {
    const grid = document.getElementById('projects-grid');

    const filtered = activeCategory === 'all'
        ? allProjects
        : allProjects.filter(p => p.category === activeCategory);

    const start = (currentPage - 1) * projectsPerPage;
    const paginated = filtered.slice(start, start + projectsPerPage);

    grid.innerHTML = paginated.map(project => `
        <div class="project-card" data-id="${project.id}">
            <div class="project-image">
                <img src="images/${project.image}" alt="${project.title}">
            </div>
            <div class="project-content">
                <h3 class="project-title">${project.title}</h3>
                <p class="project-desc">${project.short_desc}</p>
                <div class="tech-tags">
                    ${project.tech.map(tech => `<span class="tech-tag">${tech}</span>`).join('')}
                </div>
                <button class="view-more-btn">View Details</button>
            </div>
        </div>
    `).join('');

    renderPagination(filtered);
}

function renderFilters() {
    const uniqueCategories = [...new Set(allProjects.map(p => p.category))];
    const filtersContainer = document.querySelector('.project-filters');

    // Clear existing filters
    filtersContainer.innerHTML = '';

    // Create filter buttons
    const filterButtons = [
        { category: 'all', text: 'All' },
        ...uniqueCategories.map(category => ({ category, text: category }))
    ];

    filterButtons.forEach(button => {
        const btn = document.createElement('button');
        btn.classList.add('filter-btn');
        btn.dataset.category = button.category;
        btn.textContent = button.text;
        if (button.category === activeCategory) {
            btn.classList.add('active');
        }
        btn.addEventListener('click', () => {
            const category = button.category;
            activeCategory = category;
            currentPage = 1; // Reset to first page when changing category
            renderProjects();
            // Update active state of buttons
            document.querySelectorAll('.filter-btn').forEach(btn => {
                btn.classList.remove('active');
                if (btn.dataset.category === category) {
                    btn.classList.add('active');
                }
            });
        });
        filtersContainer.appendChild(btn);
    });
}

function renderPagination(filteredProjects) {
    const totalPages = Math.ceil(filteredProjects.length / projectsPerPage);
    const pagination = document.getElementById('pagination');

    pagination.innerHTML = `
        ${Array.from({ length: totalPages }, (_, i) => `
            <button class="page-btn ${i + 1 === currentPage ? 'active' : ''}" 
                    data-page="${i + 1}">${i + 1}</button>
        `).join('')}
    `;

    pagination.addEventListener('click', (e) => {
        if (e.target.classList.contains('page-btn')) {
            currentPage = parseInt(e.target.dataset.page);
            renderProjects();
        }
    });
}

// model handeler to expand project card
function initModalHandlers() {
    console.log('Initializing modal handlers...');
    
    const modal = new bootstrap.Modal(document.getElementById('projectModal'));
    const grid = document.getElementById('projects-grid');
    console.log('Grid element:', grid);

    grid.addEventListener('click', (e) => {
        console.log('Grid click detected. Target:', e.target);
        
        const card = e.target.closest('.project-card');
        const button = e.target.closest('.view-more-btn');
        console.log('Card element:', card);
        console.log('Button element:', button);

        if (card || button) {
            const projectElement = card || button.closest('.project-card');
            const projectId = projectElement?.dataset?.id;
            console.log('Project ID found:', projectId);
            
            if (projectId) {
                console.log('Attempting to show project ID:', projectId);
                showProjectDetails(projectId);
                modal.show();
            }
        }
    });
}


function showProjectDetails(projectId) {
    const project = allProjects.find(p => p.id == projectId);
    const modal = document.getElementById('projectModal');
    
    // Set content
    modal.querySelector('.project-title').textContent = project.title;
    modal.querySelector('.project-image-main').src = `images/${project.image}`;
    
    // Set description
    const descriptionHTML = Array.isArray(project.long_desc) 
        ? project.long_desc.map(p => `<p>${p}</p>`).join('')
        : project.long_desc.split('\n').map(p => `<p>${p}</p>`).join('');
    modal.querySelector('.project-description').innerHTML = descriptionHTML;

    // Set tech stack
    modal.querySelector('.tech-tags').innerHTML = project.tech.map(tech => `
        <span class="tech-tag">
            <i class="fas fa-code me-2"></i>${tech}
        </span>
    `).join('');

    // Set links
    const links = [];
    if (project.links.github) {
        links.push(`
            <a href="${project.links.github}" 
               class="btn btn-outline-danger project-link"
               target="_blank">
               <i class="fab fa-github"></i> Source Code
            </a>
        `);
    }
    if (project.links.demo) {
        links.push(`
            <a href="${project.links.demo}" 
               class="btn btn-danger project-link"
               target="_blank">
               <i class="fas fa-external-link-alt"></i> Live Demo
            </a>
        `);
    }
    
    // Handle additional links
    if (project.links.extra) {
        Object.entries(project.links.extra).forEach(([label, url]) => {
            links.push(`
                <a href="${url}" 
                   class="btn btn-secondary project-link"
                   target="_blank">
                   <i class="fas fa-link"></i> ${label}
                </a>
            `);
        });
    }

    // Apply horizontal layout for multiple links
    const linksContainer = modal.querySelector('.links-container');
    linksContainer.innerHTML = links.join('');
    if (links.length > 2) {
        linksContainer.classList.add('flex-row', 'flex-wrap');
    }

    // Initialize animations
    setTimeout(() => {
        anime({
            targets: '.animate__animated',
            opacity: [0, 1],
            translateY: [20, 0],
            delay: anime.stagger(50),
            easing: 'easeOutExpo'
        });
    }, 100);
}
// Function to show enlarged image
function showEnlargedImage(imageSrc) {
    const enlargedImageModal = new bootstrap.Modal(document.getElementById('enlargedImageModal'));
    const enlargedImage = document.querySelector('.enlarged-image');
    enlargedImage.src = imageSrc;
    enlargedImageModal.show();
}

// Add event listener to project images
document.querySelectorAll('.project-image img').forEach(img => {
    img.addEventListener('click', () => {
        showEnlargedImage(img.src);
    });
});