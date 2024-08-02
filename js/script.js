let navLinks = document.getElementById("navLinks");

function showMenu(){
	navLinks.style.right = "0";
}
function hideMenu() {
	navLinks.style.right = "-200px";
}
// SCROLL REVEAL
ScrollReveal({ 
	reset: true,
	distance: '80px',
	duration: 2000,
	delay: 200 
});
ScrollReveal().reveal('.home, .cta, .header', { origin: 'top'});
ScrollReveal().reveal('.offers, .nav-links, .about-us, .contact-col, .classic, .contact-us, .weight-loss, .testimonial', { origin: 'botom'});