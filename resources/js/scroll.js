export default function scrollContainer(scrollSpeed = 15) {
    return {
        interval: null,
        scrollSpeed: 1000,
        scrollLeft() {
            this.interval = setInterval(() => {
                this.$refs.scrollContainer.scrollBy({ left: -this.scrollSpeed, behavior: 'smooth' });
            }, 20);
        },
        scrollRight() {
            this.interval = setInterval(() => {
                this.$refs.scrollContainer.scrollBy({ left: this.scrollSpeed, behavior: 'smooth' });
            }, 20);
        },
        stopScroll() {
            clearInterval(this.interval);
            this.interval = null;
        },
    };
}