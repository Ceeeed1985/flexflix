export default function scrollContainer(scrollSpeed = 15) {
    return {
        interval: null,
        scrollSpeed: 1400,
        scrollLeft() {
            if (this.interval !== null) return;
            this.interval = setInterval(() => {
                this.$refs.scrollContainer.scrollBy({ left: -this.scrollSpeed, behavior: 'smooth' });
            }, 20);
        },
        scrollRight() {
            if (this.interval !== null) return;
            this.interval = setInterval(() => {
                this.$refs.scrollContainer.scrollBy({ left: this.scrollSpeed, behavior: 'smooth' });
            }, 20);
        },
        stopScroll() {
            clearInterval(this.interval);
            this.interval = null;
        },
        scrollWithWheel(event) {
            // Récupère la direction du scroll (deltaY positif pour descente, négatif pour montée)
            const scrollAmount = event.deltaY > 0 ? this.scrollSpeed : -this.scrollSpeed;
            this.$refs.scrollContainer.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        },
    };
}
