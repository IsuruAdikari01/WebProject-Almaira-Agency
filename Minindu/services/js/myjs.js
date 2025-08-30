function toggleContent(index) {
    const content = document.getElementById(`content-${index}`);
    const arrow = content.previousElementSibling.querySelector('.toggle-arrow');

    if (content.style.display === 'block') {
        content.style.display = 'none';
        arrow.innerHTML = '&#x25BC;';
    } else {
        content.style.display = 'block';
        arrow.innerHTML = '&#x25B2;';
    }
}