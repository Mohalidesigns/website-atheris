import './bootstrap';
import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect';
import collapse from '@alpinejs/collapse';

Alpine.plugin(intersect);
Alpine.plugin(collapse);

// Counter animation component
Alpine.data('counter', () => ({
    current: 0,
    target: 0,
    suffix: '',
    prefix: '',
    init() {
        this.target = parseInt(this.$el.dataset.target) || 0;
        this.suffix = this.$el.dataset.suffix || '';
        this.prefix = this.$el.dataset.prefix || '';
    },
    animate() {
        const duration = 2000;
        const steps = 60;
        const increment = this.target / steps;
        let step = 0;
        const timer = setInterval(() => {
            step++;
            this.current = Math.min(Math.round(increment * step), this.target);
            if (step >= steps) clearInterval(timer);
        }, duration / steps);
    },
    get display() {
        return this.prefix + this.current.toLocaleString() + this.suffix;
    }
}));

// Mobile menu
Alpine.data('mobileMenu', () => ({
    open: false,
    toggle() { this.open = !this.open; },
    close() { this.open = false; }
}));

// Dropdown
Alpine.data('dropdown', () => ({
    open: false,
    toggle() { this.open = !this.open; },
    close() { this.open = false; }
}));

// Hero Carousel
Alpine.data('heroCarousel', () => ({
    currentSlide: 0,
    totalSlides: 0,
    autoplayTimer: null,
    init() {
        this.totalSlides = parseInt(this.$el.dataset.slides) || 1;
        if (this.totalSlides > 1) {
            this.startAutoplay();
        }
    },
    next() {
        this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
        this.restartAutoplay();
    },
    prev() {
        this.currentSlide = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides;
        this.restartAutoplay();
    },
    goTo(index) {
        this.currentSlide = index;
        this.restartAutoplay();
    },
    startAutoplay() {
        this.autoplayTimer = setInterval(() => {
            this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
        }, 6000);
    },
    restartAutoplay() {
        clearInterval(this.autoplayTimer);
        if (this.totalSlides > 1) {
            this.startAutoplay();
        }
    },
    destroy() {
        clearInterval(this.autoplayTimer);
    }
}));

window.Alpine = Alpine;
Alpine.start();
