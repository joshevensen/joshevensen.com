
$("#modalButton").click(function(){$("#modalOverlay").fadeIn(),$("#modal").addClass("open")}),$("#modalClose").click(function(a){a.preventDefault(),$("#modal").removeClass("open"),$("#modalOverlay").fadeOut()}),$("#modalOverlay").click(function(){$("#modal").removeClass("open"),$(this).fadeOut()});

//# sourceMappingURL=maps/scripts.js.map
