// Get the modal and relevant elements
const modal = document.getElementById('htmlModal');
const openModalBtn = document.querySelector('.modellogin');
const closeModalBtn = modal.querySelector('.close');
const cancelBtn = modal.querySelector('.cancelbtn'); // Corrected selector for cancel button
const modalContent = modal.querySelector('.modal-content'); // Modal content element

// Function to toggle modal visibility
function toggleModal() {
    if (modal.style.display === 'block') {
        modal.style.display = 'none'; // Hide modal
    } else {
        modal.style.display = 'block'; // Show modal
    }
}

// Function to hide modal
function hideModal() {
    modal.style.display = 'none';
}

// Event listeners
openModalBtn.addEventListener('click', toggleModal); // Open modal
closeModalBtn.addEventListener('click', hideModal); // Close modal on close button
cancelBtn.addEventListener('click', hideModal); // Hide modal when cancel button is clicked

// Close modal on Escape key press
document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
        hideModal();
    }
});

// Close modal when clicking outside the modal content
modal.addEventListener('click', (event) => {
    if (!modalContent.contains(event.target)) {
        hideModal();
    }
});
