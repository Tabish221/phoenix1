gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

const sections = gsap.utils.toArray("section");
let currentSectionIndex = 0;

// Set up ScrollTrigger for each section to manage scrolling
sections.forEach((section, index) => {
	ScrollTrigger.create({
		trigger: section,
		start: "top top",
		pin: true,
		pinSpacing: false,
		snap: 1,
		end: "+=100%",
		onEnter: () => {
			currentSectionIndex = index;
		},
		onEnterBack: () => {
			currentSectionIndex = index;
		},
	});
});

// Function to smoothly scroll to the target section
function scrollToSection(index) {
	gsap.to(window, {
		scrollTo: {
			y: sections[index],
			offsetY: 0
		},
		duration: 1,
		ease: "power2.inOut"
	});
}

// Handle "Scroll Down" button click
document.getElementById("scrollDown").addEventListener("click", () => {
	if (currentSectionIndex < sections.length - 1) {
		currentSectionIndex++;
		scrollToSection(currentSectionIndex);
	} else {
		console.log("Already at the last section.");
	}
});

// Handle "Scroll Up" button click
document.getElementById("scrollUp").addEventListener("click", () => {
	if (currentSectionIndex > 0) {
		currentSectionIndex--;
		scrollToSection(currentSectionIndex);
	} else {
		console.log("Already at the first section.");
	}
});