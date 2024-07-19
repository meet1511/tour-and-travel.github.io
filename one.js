const searchInput = document.querySelector('.search-input input');
const autocomBox = document.querySelector('.autocom-box');

// Simulated list of suggestions (replace with actual data)
const suggestions = ['Australia', 'United Kingdom', 'France', 'India', 'United States', 'Italy'];

searchInput.addEventListener('input', () => {
    const inputValue = searchInput.value.toLowerCase();
    const filteredSuggestions = suggestions.filter(suggestion =>
        suggestion.toLowerCase().startsWith(inputValue)
        
        
    );

    // Display filtered suggestions
    autocomBox.innerHTML = '';
    filteredSuggestions.forEach(suggestion => {
        const suggestionItem = document.createElement('div');
        suggestionItem.textContent = suggestion;
        autocomBox.appendChild(suggestionItem);
    });
});
