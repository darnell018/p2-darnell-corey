// Prevents reload and openin of second page. Displays Success Notice
// https://codepen.io/pmcdev/pen/rrjydE

// Note:
// - A separate .js-* prefixed selector is used to handle JS interactions.
// - Using jQuery

$('.js-subscribe-form').on('submit', (e) => {
	e.preventDefault(); // Prevent a page reload for this example and for asynchronous calls.
	$('.subscribe-form').html('<p class="success-message">You are on the List!</p>');
});
