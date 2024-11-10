import './bootstrap'; // This should initialize Echo
import Alpine from 'alpinejs'; // Alpine.js initialization follows
if (window.Livewire) {
    window.Livewire.start();
}

window.Alpine = Alpine;
Alpine.start();
