(function ($) {
    'use strict';
    wp.customizerRepeater = {

        init: function () {
            $(document).on('click', '.iconpicker-items>i', function () {
                var iconClass = $(this).attr('class').slice(3);
                var classInput = $(this).parents('.iconpicker-popover').prev().find('.icon-select-field');
                classInput.val(iconClass);
                classInput.attr('value', iconClass);

                var iconPreview = classInput.parents('.icon-field-group').find('.icon-show');
                var iconElement = '<i class="fa '.concat(iconClass, '"><\/i>');
                iconPreview.empty();
                iconPreview.append(iconElement);

                // var th = $(this).parent().parent().parent();
                $(this).parents('.iconpicker-popover').removeClass('iconpicker-visible');
                classInput.trigger('change');
                //themefarmer-repeater  themefarmer-repeater-data
                //customizer_repeater_refresh_social_icons(th);
                return false;
            });
        },
        search: function ($searchField) {
            var itemsList = $searchField.parent().next().find('.iconpicker-items');
            var searchTerm = $searchField.val().toLowerCase();
            if (searchTerm.length > 0) {
                itemsList.children().each(function () {
                    if ($(this).filter('[title*='.concat(searchTerm)).length > 0 || searchTerm.length < 1) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            } else {
                itemsList.children().show();
            }
        },
        iconPickerToggle: function ($input) {
            var iconPicker = $input.parent().next();
            iconPicker.addClass('iconpicker-visible');
        }
    };

    $(document).ready(function () {
        //wp.customizerRepeater.init();
        

        $(document).on('keyup focusout', 'input#themefarmer-icon-search', function () {
            // console.log('search');
            // wp.customizerRepeater.search($(this));
            var itemsList = $(this).parents('#themefarmer-icon-picker-plate-header').siblings('div#themefarmer-icon-picker-icons');
            var searchTerm = $(this).val().toLowerCase();
            // console.log(itemsList.length);
            // console.log(searchTerm);
            if (searchTerm.length > 0) {
                itemsList.children().each(function () {
                    // console.log($(this).filter('data-index*="'+searchTerm+'"').length);
                    if ($(this).filter('[data-index*='.concat(searchTerm)).length > 0 || searchTerm.length < 1) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            } else {
                itemsList.children().show();
            }
        });

        $(document).on('click', '.icon-select-field', function(event) {
            // console.log('clicked');
            //wp.customizerRepeater.iconPickerToggle($(this));
        });

        $(document).on('click', '.icon-select-field', function(event) {
            // console.log('clicked');
            $(this).addClass('icon-field-active');
            $('div#themefarmer-icon-picker-plate').addClass('active');
            // $('div#themefarmer-icon-picker-icons').focus();
        });

        $(document).on('click', '#themefarmer-icon-picker-icons > i', function(event) {
            var icon  = $(this).data('icon');
            var icon_field = $('.icon-select-field.icon-field-active');
            icon_field.val(icon);
            var iconPreview = icon_field.parents('.icon-field-group').find('.icon-show');
            var iconElement = '<i class="fa '+icon+'"></i>';
            iconPreview.empty();
            iconPreview.append(iconElement);

            icon_field.trigger('change');
            icon_field.removeClass('icon-field-active');
            $('div#themefarmer-icon-picker-plate').removeClass('active');
        });

        var hide_icon_pate = function(e){

        }

        $(document).mouseup( function (e) {
            var container = $('div#themefarmer-icon-picker-plate');

            if (!container.is(e.target) && container.has(e.target).length === 0){
                container.removeClass('active');
            }
        });

        /*$('.icon-select-field').on('click', function () {
            
            
        });*/

        $(document).mouseup( function (e) {
            var container = $('.iconpicker-popover');

            if (!container.is(e.target)
                && container.has(e.target).length === 0)
            {
                container.removeClass('iconpicker-visible');
            }
        });

    });

})(jQuery);
