const categoryItems = document.querySelectorAll('.category-item');
const productItems = document.querySelectorAll('.product-item');

categoryItems.forEach(item => {
    item.addEventListener('click', () => {
        // Hapus kelas 'active' dari semua item kategori
        categoryItems.forEach(category => {
            category.classList.remove('active');
        });

        // Tambahkan kelas 'active' ke item kategori yang dipilih
        item.classList.add('active');

        const selectedCategory = item.getAttribute('data-category');

        // Tampilkan atau sembunyikan produk berdasarkan kategori yang dipilih
        productItems.forEach(product => {
            const productCategory = product.getAttribute('data-category');
            if (selectedCategory === 'all' || selectedCategory === productCategory) {
                product.style.display = 'block';
            } else {
                product.style.display = 'none';
            }
        });
    });
});