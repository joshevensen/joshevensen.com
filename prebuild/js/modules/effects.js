// Click on Modal Button
$('#modalButton').click(function() {
	$('#modalOverlay').fadeIn();
	$('#modal').addClass('open');
});

// Click on Modal Close
$('#modalClose').click(function(e) {
	e.preventDefault();

	$('#modal').removeClass('open');
	$('#modalOverlay').fadeOut();
})

// Click on Modal Overlay
$('#modalOverlay').click(function() {
	$('#modal').removeClass('open');
	$(this).fadeOut();
})