(function ($, Drupal, window, document, undefined) {
    Drupal.behaviors.my_custom_behavior = {
        attach: function(context, settings) {

            if ($(".view").hasClass("drupalsite-view")) {
                $(".view").addClass("grid-view"); // Sets .grid-view as default class on the view
                $(".table").click(function() {
                    if ($(".view").hasClass("grid-view")) {
                        $(".view").addClass("list-view"); // adds .grid-view to the view class
                        $(".view").removeClass("grid-view"); // removes .list-view from the view class
                    }
                });
                $(".list").click(function() {
                    if ($(".view").hasClass("list-view")) {
                        $(".view").addClass("grid-view"); // adds .list-view to the view class
                        $(".view").removeClass("list-view"); // removes .grid-view from the view class
                    }
                });
            }
            // //Sets default class for course views and toggles class when changing view.
            // $('#content').once('drupalsite-view', function() {
            //     console.log('has it0');
            // });
        }
    };
}) (jQuery, Drupal, this, this.document);