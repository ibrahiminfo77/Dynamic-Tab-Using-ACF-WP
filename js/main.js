; (function($){

    $(document).ready(function() {


        $(".menu-trigger").on('click', function(){
            $(".offcanvas-menu").addClass("active");
           $(".off-canvas-overlay").addClass("active");
        });        
        
        $(".menu-close, .off-canvas-overlay").on('click', function(){
            $(".offcanvas-menu").removeClass("active");
            $(".off-canvas-overlay").removeClass("active");
        }); // Off Canvas Menu end


        $('#ResponsiveTabs').responsiveTabs({
            startCollapsed: 'accordion'
        });
        

    });

})(jQuery);
