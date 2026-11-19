function filterHospitalsByFacilityLevel(hospitals, selectedLevels) {
    const normalize = level => (level || '').trim().toLowerCase();
    const counts = new Map();
    const selected = new Set(selectedLevels.map(normalize));
    const filtered = hospitals.filter(hospital => {
        const level = normalize(hospital.facility_level);
        counts.set(level, (counts.get(level) || 0) + 1);
        return selected.size === 0 || selected.has(level);
    });

    document.querySelectorAll('input[name="hospitalLevel"]').forEach(input => {
        input.closest('label').querySelector('[data-facility-level-count]').textContent =
            counts.get(normalize(input.value)) || 0;
    });
    return filtered;
}
