let screenHistory = ['homeScreen'];
let currentConnectionIndex = 0;
const connections = [
    {
        name: 'Sandip Dhakal',
        country: 'Nepal',
        photo: 'sandip.jpg',
        professionalExperience: [
            'Software Engineer at Tech Corp',
            'Intern at Startup Inc.'
        ]
    },
    {
        name: 'Adebayo Olumide',
        country: 'Nigeria',
        photo: 'judah.jpg',
        professionalExperience: [
            'IT Specialist at Global IT Solutions',
            'Network Administrator at Tech Innovations'
        ]
    },
    {
        name: 'Carlos Hernandez',
        location: 'Madrid, Spain',
        photo: 'https://via.placeholder.com/375x375',
        professionalExperience: [
            'Data Analyst at Data Insights Ltd',
            'Research Intern at Madrid University'
        ]
    }
];

function navigateHome() {
    navigate('homeScreen');
}

function toggleMenu() {
    const menu = document.getElementById('menu');
    menu.style.display = menu.style.display === 'none' ? 'block' : 'none';
}

function navigate(screenId) {
    // Hide all screens
    const screens = document.querySelectorAll('.screen');
    screens.forEach(screen => {
        screen.style.display = 'none';
    });

    // Show the selected screen
    const selectedScreen = document.getElementById(screenId);
    selectedScreen.style.display = 'block';

    // Add screen to history for back navigation
    if (screenHistory[screenHistory.length - 1] !== screenId) {
        screenHistory.push(screenId);
    }

    // Hide the menu
    const menu = document.getElementById('menu');
    menu.style.display = 'none';
}

function goBack() {
    // Remove the current screen from history
    if (screenHistory.length > 1) {
        screenHistory.pop();
    }

    // Get the previous screen from history
    const previousScreenId = screenHistory[screenHistory.length - 1];

    // Show the previous screen
    navigate(previousScreenId);
}

function saveProfile() {
    alert('Profile saved!');
    navigate('homeScreen');
}

function nextConnection(connected) {
    const connection = connections[currentConnectionIndex];
    if (connected) {
        showConfirmation('You connected with ' + connection.name);
    } else {
        showConfirmation('You ignored ' + connection.name);
    }
    currentConnectionIndex = (currentConnectionIndex + 1) % connections.length;
    showConnection();
}

function showConfirmation(message) {
    const confirmation = document.getElementById('confirmation');
    const confirmationText = document.getElementById('confirmationText');
    confirmationText.innerText = message;
    confirmation.style.display = 'flex';
    setTimeout(() => {
        confirmation.style.display = 'none';
    }, 2000); // Hide after 2 seconds
}

function showConnection() {
    const connection = connections[currentConnectionIndex];
    const connectionCard = document.getElementById('connectionCard');
    connectionCard.querySelector('img').src = connection.photo;
    connectionCard.querySelector('h2').innerText = connection.name;
    if (connection.location) {
        connectionCard.querySelector('p.location').innerText = 'Location: ' + connection.location;
    } else {
        connectionCard.querySelector('p.location').innerText = 'Country: ' + connection.country;
    }
}

function viewProfile(profileId) {
    const profile = connections[profileId];
    const profileName = document.getElementById('profileName');
    const profileLocation = document.getElementById('profileLocation');
    const profileExperience = document.getElementById('profileExperience');
    const profilePhoto = document.getElementById('profilePhoto');
    const profileBackground = document.getElementById('profileBackground'); // Assuming you have this element in your HTML

    profileName.textContent = profile.name;
    if (profile.location) {
        profileLocation.textContent = 'Location: ' + profile.location;
    } else {
        profileLocation.textContent = 'Country: ' + profile.country;
    }

    // Clear previous experience
    profileExperience.innerHTML = '';

    // Populate professional experience
    profile.professionalExperience.forEach(exp => {
        const p = document.createElement('p');
        p.textContent = exp;
        profileExperience.appendChild(p);
    });

    profilePhoto.src = profile.photo;
    // Assuming you have a background image URL in the profile object
    profileBackground.style.backgroundImage = `url(${profile.backgroundImage})`;

    navigate('userProfileScreen');
}

// Function to toggle profile menu visibility
function toggleProfileMenu(profileMenuId) {
    const profileMenu = document.getElementById(profileMenuId);
    profileMenu.style.display = profileMenu.style.display === 'block' ? 'none' : 'block';
}

// Event listener for the three-dot menu (for each user)
// Since the DOM is not ready when this script runs, use window.onload to add event listeners
window.onload = () => {
    const threeDotMenus = document.querySelectorAll('.three-dot-menu');
    threeDotMenus.forEach((menu, index) => {
        menu.addEventListener('click', function() {
            const profileMenuId = `profileMenu${index}`;
            toggleProfileMenu(profileMenuId);
        });
    });

    // Initialize the first connection on load
    showConnection(); // Show initial connection on load
};
