// Buatkan fungsi untuk menampilkan alert ketika card film diklik
const cards = document.querySelectorAll('.card');

cards.forEach(card => {
    card.addEventListener('click', () => {
        const filmTitle = card.querySelector('h2').innerText;
        alert(`Anda memilih film: ${filmTitle}`);
    });
});
