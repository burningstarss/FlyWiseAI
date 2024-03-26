var rotated = false;


$("#slideToggle").click(function () {
    var contentElement = $(this).closest(".home").find("#content");

    // Animación del content
    contentElement.toggle("slide", { direction: "left" }, 500);

    // Rotación del slideToggle
    var rotationDeg = rotated ? 0 : 90;
    $("#slideToggle img").animate({ rotate: rotationDeg + 'deg' }, {
        duration: 500,
        step: function (now, fx) {
            $(this).css('transform', 'rotate(' + now + 'deg)');
        }
    });

    // Actualizar el estado de rotación
    rotated = !rotated;
});
