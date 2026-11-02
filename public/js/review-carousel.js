(() => {
    document.querySelectorAll('[data-review-carousel]').forEach(carousel => {
        const viewport = carousel.querySelector('.review-carousel-viewport');
        const track = carousel.querySelector('.review-carousel-track');
        const originals = [...track.children];
        if (originals.length < 2) return;
        const motion = window.matchMedia('(prefers-reduced-motion: reduce)');
        const toggle = carousel.querySelector('[data-review-pause]');
        let paused = motion.matches;
        let hover = false;
        let dragging = false;
        let resumeAt = 0;
        let previous = 0;
        let position = 0;
        let animation = null;
        originals.forEach(card => {
            const clone = card.cloneNode(true);
            clone.setAttribute('aria-hidden', 'true');
            clone.setAttribute('inert', '');
            track.append(clone);
        });
        const period = () => track.children[originals.length].offsetLeft - originals[0].offsetLeft;
        const label = () => {
            toggle.textContent = paused ? 'Play scrolling' : 'Pause scrolling';
            toggle.setAttribute('aria-pressed', String(paused));
        };
        const interact = () => { resumeAt = performance.now() + 5000; };
        const move = direction => {
            const step = originals[1].offsetLeft - originals[0].offsetLeft;
            const size = period();
            if (!size) return;
            position = viewport.scrollLeft;
            if (direction < 0 && position < step) position += size;
            viewport.scrollLeft = position;
            animation = { start: performance.now(), from: position, to: position + direction * step };
            interact();
        };
        carousel.querySelector('[data-review-prev]').addEventListener('click', () => move(-1));
        carousel.querySelector('[data-review-next]').addEventListener('click', () => move(1));
        toggle.addEventListener('click', () => { paused = !paused; label(); });
        carousel.addEventListener('mouseenter', () => { hover = true; });
        carousel.addEventListener('mouseleave', () => { hover = false; });
        viewport.addEventListener('pointerdown', () => { dragging = true; animation = null; interact(); });
        window.addEventListener('pointerup', () => { dragging = false; interact(); });
        viewport.addEventListener('pointercancel', () => { dragging = false; interact(); });
        viewport.addEventListener('wheel', () => { animation = null; interact(); }, { passive: true });
        viewport.addEventListener('keydown', event => {
            if (event.key === 'ArrowLeft' || event.key === 'ArrowRight') {
                event.preventDefault();
                move(event.key === 'ArrowLeft' ? -1 : 1);
            }
        });
        motion.addEventListener('change', () => { paused = motion.matches; animation = null; label(); });
        const tick = now => {
            const elapsed = previous ? Math.min(now - previous, 50) : 0;
            previous = now;
            const size = period();
            if (!document.hidden && size > 0) {
                if (animation) {
                    const progress = motion.matches ? 1 : Math.min((now - animation.start) / 400, 1);
                    const ease = 1 - Math.pow(1 - progress, 3);
                    position = animation.from + (animation.to - animation.from) * ease;
                    viewport.scrollLeft = position;
                    if (progress === 1) {
                        animation = null;
                        viewport.scrollLeft = ((position % size) + size) % size;
                    }
                } else if (!paused && !hover && !dragging && !carousel.contains(document.activeElement) && now > resumeAt) {
                    if (Math.abs(viewport.scrollLeft - position) > 2) position = viewport.scrollLeft;
                    position = (position + elapsed * 0.028) % size;
                    viewport.scrollLeft = position;
                }
            }
            requestAnimationFrame(tick);
        };
        label();
        carousel.classList.add('is-ready');
        requestAnimationFrame(tick);
    });
})();
