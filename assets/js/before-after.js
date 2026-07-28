/**
 * File before-after.js.
 * Interactive Before/After image comparison slider.
 * Handles both .vhs-ba-container and .vhs-ba2-container.
 */
(function () {
	function initSlider(container) {
		var slider = container.querySelector('.vhs-ba-range-slider, .vhs-ba2-range-slider');

		if (!slider) {
			slider = document.createElement('input');
			slider.type = 'range';
			slider.min = '0';
			slider.max = '100';
			slider.value = '50';
			slider.className = container.classList.contains('vhs-ba2-container')
				? 'vhs-ba2-range-slider'
				: 'vhs-ba-range-slider';
			slider.setAttribute('aria-label', 'Drag to compare before and after');
			container.appendChild(slider);
		}

		function setPos(val) {
			var clamped = Math.max(0, Math.min(100, parseFloat(val)));
			container.style.setProperty('--slider-pos', clamped + '%');
			if (parseFloat(slider.value) !== clamped) slider.value = clamped;
		}

		slider.addEventListener('input', function () { setPos(this.value); });
		slider.addEventListener('change', function () { setPos(this.value); });

		var dragging = false;

		function posFromEvent(e) {
			var rect = container.getBoundingClientRect();
			var clientX = e.touches ? e.touches[0].clientX : e.clientX;
			return ((clientX - rect.left) / rect.width) * 100;
		}

		container.addEventListener('mousedown', function (e) {
			dragging = true;
			setPos(posFromEvent(e));
		});
		window.addEventListener('mousemove', function (e) {
			if (dragging) setPos(posFromEvent(e));
		});
		window.addEventListener('mouseup', function () { dragging = false; });

		container.addEventListener('touchstart', function (e) {
			dragging = true;
			setPos(posFromEvent(e));
		}, { passive: true });
		window.addEventListener('touchmove', function (e) {
			if (dragging) setPos(posFromEvent(e));
		}, { passive: true });
		window.addEventListener('touchend', function () { dragging = false; });
	}

	function initAll() {
		document.querySelectorAll('.vhs-ba-container, .vhs-ba2-container').forEach(initSlider);
	}

	if (document.readyState === 'loading') {
		document.addEventListener('DOMContentLoaded', initAll);
	} else {
		initAll();
	}
})();
