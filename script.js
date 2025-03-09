document.addEventListener("DOMContentLoaded", function () {
    activateDropdown();
    activateFeedbackPopup();
});

// Function to activate dropdown menu
function activateDropdown() {
    document.querySelectorAll('.dropdown').forEach(dropdown => {
        const button = dropdown.querySelector('.dropbtn');

        button.addEventListener('click', function (event) {
            event.preventDefault();

            let dropdownContent = dropdown.querySelector('.dropdown-content');

            // Hide all other dropdowns
            document.querySelectorAll('.dropdown-content').forEach(menu => {
                if (menu !== dropdownContent) menu.classList.remove('show');
            });

            // Toggle the clicked dropdown
            dropdownContent.classList.toggle('show');
        });
    });

    // Close dropdown if clicked outside
    window.addEventListener('click', function (event) {
        if (!event.target.matches('.dropbtn')) {
            document.querySelectorAll('.dropdown-content').forEach(menu => {
                menu.classList.remove('show');
            });
        }
    });
}

// Function to activate feedback popup
function activateFeedbackPopup() {
    const feedbackLink = document.getElementById("feedback");
    const feedbackPopup = document.getElementById("feedbackPopup");
    const closePopup = document.getElementById("closePopup");

    if (feedbackLink && feedbackPopup && closePopup) {
        feedbackLink.addEventListener("click", function (e) {
            e.preventDefault();
            feedbackPopup.style.display = "flex";
        });

        closePopup.addEventListener("click", function () {
            feedbackPopup.style.display = "none";
        });

        // Attach validation to form
        const feedbackForm = document.getElementById('feedbackForm');
        if (feedbackForm) {
            feedbackForm.onsubmit = function (event) {
                if (!validateFeedback()) {
                    event.preventDefault();
                }
            };
        }
    }
}

// Function to validate the feedback form
function validateFeedback() {
    var fullname = document.feedbackForm.fullName.value.trim();
    var email = document.feedbackForm.email.value.trim();
    var phone = document.feedbackForm.phone.value.trim();
    var feedbackDesc = document.feedbackForm.feedbackDesc.value.trim();

    if (!fullname) {
        alert("Please enter your full name.");
        return false;
    }
    if (!email) {
        alert("Please enter your email id.");
        return false;
    }
    if (!phone || phone.length < 10) {
        alert("Please enter a valid 10-digit phone number.");
        return false;
    }
    if (!feedbackDesc) {
        alert("Please provide your feedback.");
        return false;
    }

    alert("Feedback submitted successfully. Thank you!");
    return true;
}
