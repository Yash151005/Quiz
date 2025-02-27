// Function to load header and footer dynamically
function loadComponent(file, containerId, callback) {
    fetch(file)
        .then(response => response.text())
        .then(data => {
            document.getElementById(containerId).innerHTML = data;
            if (callback) callback(); // Execute callback after loading
        })
        .catch(error => console.error(`Error loading ${file}:`, error));
}

// Function to activate dropdown menu
function activateDropdown() {
    document.querySelectorAll('.dropdown').forEach(dropdown => {
        const button = dropdown.querySelector('.dropbtn');
        button.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default anchor behavior

            let dropdownContent = dropdown.querySelector('.dropdown-content'); // Get the dropdown content

            // Hide all dropdowns first
            document.querySelectorAll('.dropdown-content').forEach(menu => {
                if (menu !== dropdownContent) menu.classList.remove('show');
            });

            // Toggle the clicked dropdown
            dropdownContent.classList.toggle('show');
        });
    });

    // Close dropdown if clicked outside
    window.addEventListener('click', function(event) {
        if (!event.target.matches('.dropbtn')) {
            document.querySelectorAll('.dropdown-content').forEach(menu => {
                menu.classList.remove('show');
            });
        }
    });
}

// Function to activate feedback popup
function activateFeedbackPopup() {
    // Open the popup when the "Feedback" link is clicked
    document.getElementById("feedback").addEventListener("click", function (e) {
        e.preventDefault();  // Prevent default behavior
        document.getElementById("feedbackPopup").style.display = "flex";  // Show popup
    });

    // Close the popup when the cross button is clicked
    document.getElementById("closePopup").addEventListener("click", function () {
        document.getElementById("feedbackPopup").style.display = "none";  // Hide popup
    });

    // Attach check function to the form submission
    const feedbackForm = document.getElementById('feedbackForm');
    feedbackForm.onsubmit = function(event) {
        if (!check()) {
            event.preventDefault(); // Prevent form submission if validation fails
        }
    };
}

// Function to validate the feedback form
function check() {
    var fullname = document.feedbackForm.fullName.value;
    var email = document.feedbackForm.email.value;
    var phone = document.feedbackForm.phone.value;
    var feedbackDesc = document.feedbackForm.feedbackDesc.value;

    if(fullname == '' || fullname == null) {
        alert("Please enter your full name.");
        return false; // Prevent form submission
    }
    if(email == '' || email == null) {
        alert("Please enter your email id.");
        return false; // Prevent form submission
    }
    if(phone == '' || phone == null) {
        alert("Please enter your phone number.");
        return false; // Prevent form submission
    }
    if(phone.length < 10) {
        alert("Phone number must be at least 10 digits.");
        return false; // Prevent form submission
    }
    if(feedbackDesc == '' || feedbackDesc == null) {
        alert("Please provide your feedback.");
        return false; // Prevent form submission
    }

    alert("Feedback submitted successfully. Thank you!");
    return true; // Allow form submission
}

// Load header and footer, then activate dropdown and feedback popup
window.addEventListener("DOMContentLoaded", function () {
    loadComponent("header.html", "header_content", function() {
        activateDropdown();  // Activate dropdown after header content is loaded
    });
    loadComponent("footer.html", "footer_content", activateFeedbackPopup);
});
