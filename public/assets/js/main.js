document.addEventListener('DOMContentLoaded', function() {
    const sidebarToggle = document.querySelector('.sidebar-toggle');
    const sidebarMenu = document.querySelector('.sidebar-menu');
    const overlay = document.createElement('div');
    overlay.classList.add('overlay');
    document.body.appendChild(overlay);

    sidebarToggle.addEventListener('click', (event) => {
        sidebarMenu.classList.toggle('show');
        sidebarToggle.classList.toggle('active');
        overlay.classList.toggle('show');
        event.stopPropagation();
    });

    overlay.addEventListener('click', () => {
        sidebarMenu.classList.remove('show');
        sidebarToggle.classList.remove('active');
        overlay.classList.remove('show');
    });

    document.addEventListener('click', (event) => {
        if (!sidebarMenu.contains(event.target) && !sidebarToggle.contains(event.target)) {
            sidebarMenu.classList.remove('show');
            sidebarToggle.classList.remove('active');
            overlay.classList.remove('show');
        }
    });
});


document.addEventListener('DOMContentLoaded', () => {
    const categoryInput = document.getElementById('categoryInput');
    const categoryList = document.getElementById('categoryList');
    const categories = ['Discord', 'CS2', 'Minecraft', 'Valorant', 'PUBG', 'Fortnite'];

    categoryInput.addEventListener('input', () => {
        const searchQuery = categoryInput.value.toLowerCase();
        categoryList.innerHTML = '';

        const filteredCategories = categories.filter(category => category.toLowerCase().includes(searchQuery));

        categoryList.classList.add('show');

        filteredCategories.forEach(category => {
            const listItem = document.createElement('li');
            listItem.textContent = category;
            categoryList.appendChild(listItem);

            listItem.addEventListener('click', () => {
                categoryInput.value = category;
                categoryList.innerHTML = '';
                categoryList.classList.remove('show');
            });
        });

        if (filteredCategories.length === 0) {
            const noResultsItem = document.createElement('li');
            noResultsItem.textContent = 'Kateqoriya tapılmadı';
            noResultsItem.classList.add('no-results');
            categoryList.appendChild(noResultsItem);
        }
    });
    document.addEventListener('click', (event) => {
        if (!categoryInput.contains(event.target) && !categoryList.contains(event.target)) {
            categoryList.classList.remove('show');
        }
    });

    categoryList.addEventListener('click', (event) => {
        event.stopPropagation();
    });
});
