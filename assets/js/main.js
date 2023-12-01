document.addEventListener("DOMContentLoaded", function () {
	const sections = document.querySelectorAll(".section");
	const navLinks = document.querySelectorAll(".navbar-nav .nav-link");

	function getOffset(el) {
		const rect = el.getBoundingClientRect();
		return rect.top + window.scrollY;
	}

	function onScroll() {
		const scrollPos = window.scrollY + 70; // Add an offset to adjust for navbar height

		sections.forEach(function (section, index) {
			const sectionTop = getOffset(section);
			const sectionHeight = section.offsetHeight;

			if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
				navLinks.forEach(function (link) {
					link.classList.remove("active");
				});
				navLinks[index].classList.add("active");
			}
		});
	}

	window.addEventListener("scroll", onScroll);
});
