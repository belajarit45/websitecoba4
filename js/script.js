function toggleUserMenu() {
    const menu = document.getElementById('user-menu');
    menu.classList.toggle('hidden');
}

function updateTrendingList() {
    // Example code to update trending list
    const trendingList = document.getElementById('trending-list');
    const keywords = ['Keyword 1', 'Keyword 2', 'Keyword 3'];

    keywords.forEach(keyword => {
        const li = document.createElement('li');
        li.textContent = keyword;
        trendingList.appendChild(li);
    });
}

document.addEventListener('DOMContentLoaded', () => {
    updateTrendingList();
    // Add code to handle image slider here
});
