const searchBox = document.getElementById('search-box');
const searchBtn = document.getElementById('search-btn');
const results = document.querySelector('.results');

searchBox.addEventListener('input', function() {
    // Code pour la recherche en temps réel
    // Récupérer les résultats de la recherche et les afficher dans la liste de résultats
});

searchBtn.addEventListener('click', function(event) {
    event.preventDefault();
    // Code pour la recherche lorsque le bouton est cliqué
    // Récupérer les résultats de la recherche et les afficher dans la liste de résultats
});

searchBox.addEventListener('focus', function() {
    results.style.display = 'block';
});

searchBox.addEventListener('blur', function() {
    results.style.display = 'none';
});