// Show an element
const show = function (elem) {

	// Get the natural height of the element
	const getHeight = function () {
		elem.style.display = 'block'; // Make it visible
		const height = elem.scrollHeight + 'px'; // Get it's height
		elem.style.display = ''; //  Hide it again
		return height;
	};

	const height = getHeight(); // Get the natural height
	elem.classList.add('is-visible'); // Make the element visible
	elem.style.height = height; // Update the max-height

	// Once the transition is complete, remove the inline max-height so the content can scale responsively
	window.setTimeout(function () {
		elem.style.height = '';
	}, 350);

};

// Hide an element
const hide = function (elem) {

	// Give the element a height to change from
	elem.style.height = elem.scrollHeight + 'px';

	// Set the height back to 0
	window.setTimeout(function () {
		elem.style.height = '0';
	}, 1);

	// When the transition is complete, hide it
	window.setTimeout(function () {
		elem.classList.remove('is-visible');
	}, 350);

};

// Toggle element visibility
const toggle = function (elem) {

	// If the element is visible, hide it
	if (elem.classList.contains('is-visible')) {
		hide(elem);
		return;
	}

	// Otherwise, show it
	show(elem);
	
};

// Listen for click events
document.addEventListener('click', function (event) {

	// Make sure clicked element is our toggle
	if (!event.target.classList.contains('toggle')) return;

	// Prevent default link behavior
	event.preventDefault();

	// Get the content
	const content = document.querySelector(event.target.hash);
	if (!content) return;

	// Toggle the content
	toggle(content);

}, false);

const toggleMainOne = document.querySelector('.toggle-one');
const toggleMainTwo = document.querySelector('.toggle-two');
if(toggleMainOne){
	toggleMainOne.addEventListener('click', function(){
		toggleMainOne.classList.toggle('toggle-border');
	});
	
	toggleMainTwo.addEventListener('click', function(){
		toggleMainTwo.classList.toggle('toggle-border');
	})
}




