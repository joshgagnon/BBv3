
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

$(document).ready(function(){


    $('.carousel').on("slide.bs.carousel", function(e) {
        var $tar = $(e.relatedTarget)
        $tar.prev().add($tar.next()).add($tar).find('.bg-image[lazy-load-src]')
            .each(function(){
                if($(this).is('img')){
                    $(this).attr('src', $(this).attr('lazy-load-src'));
                }
                else{
                    $(this).css('background-image', 'url('+$(this).attr('lazy-load-src')+")");
                }
                $(this).removeAttr('lazy-load-src');
            })


    });
})