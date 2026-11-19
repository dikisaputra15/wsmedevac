function filterPoliceByCategory(police, selectedCategories) {
    const normalize = category => category.trim().toLowerCase();
    const selected = new Set(selectedCategories.map(normalize));
    const counts = new Map();
    const filtered = police.filter(station => {
        const categories = new Set((station.category || '').split(',').map(normalize));
        categories.forEach(category => counts.set(category, (counts.get(category) || 0) + 1));
        return selected.size === 0 || [...categories].some(category => selected.has(category));
    });

    document.querySelectorAll('input[name="policeCategory"]').forEach(input => {
        input.closest('label').querySelector('[data-police-category-count]').textContent =
            counts.get(normalize(input.value)) || 0;
    });
    return filtered;
}
