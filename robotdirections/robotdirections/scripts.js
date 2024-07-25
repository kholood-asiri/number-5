document.querySelectorAll('.control-button').forEach(button => {
    button.addEventListener('click', () => {
        alert(`Button ${button.id} clicked`);
    });
});
