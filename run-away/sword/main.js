/* Navigation */

(function($) {
    var $base = $(document.documentElement),
        $nav = $('.blog-navigation');
    $nav.find('li').on("mouseenter mouseleave", function(e) {
        if ($base.hasClass('mobile-menu-is-active')) return;
        $(this).children('ul').filter(':not(:animated)')[e.type == "mouseenter" ? "slideDown" : "slideUp"](200);
    });
})(jQuery);


/* Mobile Navigation */

(function($) {
    var $base = $(document.documentElement),
        $toggle = $('.blog-navigation-toggle');
    $toggle.on("click", function() {
        $base.toggleClass('mobile-menu-is-active');
        $(this).toggleClass('active');
        return false;
    });
})(jQuery);