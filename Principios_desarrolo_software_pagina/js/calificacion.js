function createStarRating(ratingElement) {
    for (let i = 1; i <= 5; i++) {
        const star = document.createElement('span');
        star.classList.add('fa', 'fa-star');
        star.style.fontSize = '24px'; // Cambia el tamaño de la fuente de las estrellas a 24 píxeles
        star.addEventListener('click', function() {
            setRatingValue(ratingElement, i);
            localStorage.setItem('starRating', i); // Guarda la calificación en localStorage
        });
        ratingElement.appendChild(star);
    }
}

function setRatingValue(ratingElement, ratingValue) {
    const stars = ratingElement.querySelectorAll('.fa-star');
    stars.forEach((star, index) => {
        if (index < ratingValue) {
            star.classList.add('checked');
        } else {
            star.classList.remove('checked');
        }
    });
}

const ratingElement = document.getElementById('rating');
createStarRating(ratingElement);