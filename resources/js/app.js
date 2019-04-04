
import Lightpick from 'lightpick';

require('./bootstrap');

$(document).ready(function(){


    $('.carousel').on("slide.bs.carousel", function(e) {
        const $tar = $(e.relatedTarget)
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


    $('.modal').on('shown.bs.modal', function(){

        const picker = new Lightpick({ 
            field: $(this).find('.date-field-start')[0], 
            secondField: $(this).find('.date-field-end')[0], 
            singleDate: false,
            parentEl: '.calendar-container',
            numberOfColumns: 2,
            numberOfMonths: 2,
            inline: true });
    })


})