(function ($) {
    "use strict";

    /*-------------------------------------------------------------------------------
	  Preloader
	-------------------------------------------------------------------------------*/

    $(window).on("load", function () {
        if ($(".preloader").length) {
            $(".preloader").fadeOut("slow");
        }
    });

    /*-------------------------------------------------------------------------------
	  Menu
	-------------------------------------------------------------------------------*/
    $(".a-nav-toggle, [data-menuanchor]").click(function () {
        if ($("html").hasClass("body-menu-opened")) {
            $("html")
                .removeClass("body-menu-opened")
                .addClass("body-menu-close");
        } else {
            $("html")
                .addClass("body-menu-opened")
                .removeClass("body-menu-close");
        }
    });

    /*-------------------------------------------------------------------------------
	  Header Shadow
	-------------------------------------------------------------------------------*/

    $(".pp-scrollable").scroll(function () {
        if ($(this).scrollTop() > 0) {
            $(".header").addClass("header-shadow");
        } else {
            $(".header").removeClass("header-shadow");
        }
    });

    /*-------------------------------------------------------------------------------
	  Pagepiling
	-------------------------------------------------------------------------------*/
    // $("body").addClass("dark-mode");
    if ($(".a-pagepiling").length) {
        $(".a-pagepiling").pagepiling({
            scrollingSpeed: 280,
            menu: "#menu, #menuMain",
            // anchors: ["intro", "whoami", "projects", "experience", "contact"],
            anchors: ["intro", "whoami", "experience", "contact"],
            loopTop: false,
            loopBottom: true,
            navigation: {
                position: "right",
            },
            onLeave: function () {
                $(".header").removeClass("header-shadow");
                if ($(".pp-scrollable.active").scrollTop() > 0) {
                    $(".header").addClass("header-shadow");
                } else {
                    $(".header").removeClass("header-shadow");
                }
                if ($(".slide-dark-footer").hasClass("active")) {
                    $("body").addClass("body-copyright-light");
                } else {
                    $("body").removeClass("body-copyright-light");
                }
                if ($(".slide-dark-bg").hasClass("active")) {
                    $("body").addClass("body-bg-dark");
                } else {
                    $("body").removeClass("body-bg-dark");
                }
                $(".a-carousel-projects").trigger("refresh.owl.carousel");
            },
        });
    }

    /*-------------------------------------------------------------------------------
	  Carousels
	-------------------------------------------------------------------------------*/

    if ($(".a-carousel-projects").length) {
        $(".a-carousel-projects").owlCarousel({
            animateIn: "fadeIn",
            animateOut: "fadeOut",
            items: 1,
            navText: [
                '<i class="lni lni-chevron-left"></i>',
                '<i class="lni lni-chevron-right"></i>',
            ],
            smartSpeed: 750,
            dots: false,
            nav: true,
            loop: true,
        });
    }

    if ($(".a-carousel-experience").length) {
        $(".a-carousel-experience").owlCarousel({
            items: 1,
            navText: [
                '<i class="lni lni-chevron-left"></i>',
                '<i class="lni lni-chevron-right"></i>',
            ],
            smartSpeed: 750,
            margin: 30,
            dots: false,
            nav: true,
            navContainer: ".a-carousel-nav",
            loop: true,
        });
    }

    /*-------------------------------------------------------------------------------
	  Forms
	-------------------------------------------------------------------------------*/

    // File Input Path
    $(document).on("change", '.a-file input[type="file"]', function () {
        var file_field = $(this).closest(".a-file");
        var path_input = file_field.find("input.file-path");
        var files = $(this)[0].files;
        var file_names = [];
        for (var i = 0; i < files.length; i++) {
            file_names.push(files[i].name);
        }
        path_input.val(file_names.join(", "));
        path_input.trigger("change");
    });

    // Material
    if ($(".a-form-group").length) {
        $(".a-form-group .form-control").each(function () {
            if (
                $(this).val().length > 0 ||
                $(this).attr("placeholder") !== undefined
            ) {
                $(this).closest(".a-form-group").addClass("active");
            }
        });
        $(".a-form-group .form-control").focus(function () {
            $(this).closest(".a-form-group").addClass("active");
        });
        $(".a-form-group .form-control").blur(function () {
            if (
                $(this).val() == "" &&
                $(this).attr("placeholder") == undefined
            ) {
                $(this).closest(".a-form-group").removeClass("active");
            }
        });
        $(".a-form-group .form-control").change(function () {
            if (
                $(this).val() == "" &&
                $(this).attr("placeholder") == undefined
            ) {
                $(this).closest(".a-form-group").removeClass("active");
            } else {
                $(this).closest(".a-form-group").addClass("active");
            }
        });
    }

    // Send Form
    if ($(".a-ajax-form").length) {
        $(".a-ajax-form").each(function () {
            var succMessage = $(this).find(".success-message");
            var errMessage = $(this).find(".error-message");
            $(this).validate({
                errorClass: "error",
                submitHandler: function (form) {
                    $.ajax({
                        type: "POST",
                        url: "mail.php",
                        data: $(form).serialize(),
                        success: function () {
                            succMessage.show();
                        },
                        error: function () {
                            errMessage.show();
                        },
                    });
                },
            });
        });
    }
})($);
