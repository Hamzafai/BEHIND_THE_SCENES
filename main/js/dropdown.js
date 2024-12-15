const input = document.getElementById('dropdown-input');
const dropdownList = document.getElementById('dropdown-list');

// Toggle dropdown list on input click
input.addEventListener('click', () => {
  dropdownList.classList.toggle('active');
});

// Close dropdown when clicking outside
document.addEventListener('click', (event) => {
  if (!event.target.closest('.dropdown')) {
    dropdownList.classList.remove('active');
  }
});

// Update input field with selected options
const checkboxes = dropdownList.querySelectorAll('input[type="checkbox"]');
checkboxes.forEach((checkbox) => {
  checkbox.addEventListener('change', () => {
    const selected = Array.from(checkboxes)
      .filter((box) => box.checked)
      .map((box) => box.parentNode.textContent.trim());
    input.value = selected.join(', ') || 'Choose options';
  });
});

