document.addEventListener('DOMContentLoaded', () => {
    // Kategori seçenekleri (sadece serveri olan oyunlar)
    const categories = [
        'Discord',
        'Fivem',
        'Minecraft',
        'Counter Strike 2',
        'Rust',
        'CS:GO',
        'Terraria',
        '7 Days to Die',
    ];

    const categoryInput = document.getElementById('serverCategory');
    const categoryList = document.getElementById('categoryList');

    categoryInput.addEventListener('input', function () {
        const val = this.value;
        closeAllCategoryLists();
        if (!val) { return false; }
        const matchingCategories = categories.filter(category => category.toLowerCase().includes(val.toLowerCase()));
        matchingCategories.forEach(category => {
            const item = document.createElement('div');
            const startIndex = category.toLowerCase().indexOf(val.toLowerCase());
            if (startIndex !== -1) {
                const endIndex = startIndex + val.length;
                item.innerHTML = category.substring(0, startIndex) + "<strong>" + category.substring(startIndex, endIndex) + "</strong>" + category.substring(endIndex);
            } else {
                item.textContent = category;
            }
            item.addEventListener('click', function () {
                categoryInput.value = category;
                closeAllCategoryLists();
            });
            categoryList.appendChild(item);
        });
    });

    function closeAllCategoryLists() {
        while (categoryList.firstChild) {
            categoryList.removeChild(categoryList.firstChild);
        }
    }

    document.addEventListener('click', function (e) {
        if (e.target !== categoryInput) {
            closeAllCategoryLists();
        }
    });

    const quill = new Quill('#serverInfoEditor', {
        theme: 'snow',
        placeholder: 'Server haqqında məlumat',
        modules: {
            toolbar: [
                [{ 'header': [1, 2, 3, false] }],
                ['bold', 'italic', 'underline'],
                [{ 'color': [] }, { 'background': [] }],
                ['link', 'blockquote', 'code-block', 'image'],
                [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                ['clean']
            ]
        }
    });

    const serverForm = document.getElementById('serverForm');
    serverForm.addEventListener('submit', function (e) {
        e.preventDefault();

        const serverInfoContent = quill.root.innerHTML.trim();
        const serverInfoText = quill.getText().trim();

        const serverName = document.getElementById('serverName').value.trim();
        const serverCategory = categoryInput.value.trim();
        const serverInfo = serverInfoContent;

        if (!serverName || !serverCategory || !serverInfoText) {
            alert('Zəhmət olmasa, bütün sahələri doldurun.');
            return;
        }

        if (!categories.includes(serverCategory)) {
            alert('Zəhmət olmasa, etibarlı bir kateqoriya seçin.');
            return;
        }

        document.getElementById('serverInfo').value = serverInfo;

        console.log('Server Adı:', serverName);
        console.log('Kateqoriya:', serverCategory);
        console.log('Server Məlumatı:', serverInfo);

        serverForm.reset();
        quill.setContents([]);
        closeAllCategoryLists();
        alert('Server əlavə olundu!');
    });
});
