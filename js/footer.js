$(document).ready(function () {
    const scrollTopArrow = $('#scroll-top-arrow');

    $(window).scroll(function () {
        const scrollPosition = $(this).scrollTop();
        const pageHeight = $(document).height() - $(window).height();

        // Show the arrow when scrolling down 1/3 of the page
        if (scrollPosition > pageHeight / 3) {
            scrollTopArrow.fadeIn();
        } else {
            scrollTopArrow.fadeOut();
        }
    });
});