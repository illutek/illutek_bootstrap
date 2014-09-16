(function ($, Drupal, window, document, undefined) {
    Drupal.behaviors.my_custom_behavior = {
        attach: function(context, settings) {

            if ($(".view").hasClass("drupalsite-view")) {
                $(".view").addClass("grid-view"); // Zet .grid-view als standaard class van de view
                $(".table").click(function() {
                    if ($(".view").hasClass("grid-view")) {
                        $(".view").addClass("list-view"); // voeg .list-view aan de view class
                        $(".view").removeClass("grid-view"); // verwijder .grid-view van de view class
                    }
                });
                $(".list").click(function() {
                    if ($(".view").hasClass("list-view")) {
                        $(".view").addClass("grid-view"); // voeg .grid-view van de view class
                        $(".view").removeClass("list-view"); // verwijder .list-view van de view class
                    }
                });
            }
        }
    };
}) (jQuery, Drupal, this, this.document);