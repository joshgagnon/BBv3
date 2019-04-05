
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


   // $('.modal').on('shown.bs.modal', function(){

        const picker = new Lightpick({ 
            field: $(this).find('.date-field-start')[0], 
            secondField: $(this).find('.date-field-end')[0], 
            singleDate: false,
            parentEl: '.calendar-container',
            numberOfColumns: 2,
            numberOfMonths: 2,
            inline: true,
            dayClasses: (day) => {
                return ['red-room', 'green-room'].filter(() => Math.random() >0.5);
            }
        });



        $('.submit-request').on('click', function() {
            $('#request-form').submit();

        });

        $('#request-form').on('submit', function(e) {
            e.preventDefault();
            if(!e.target.checkValidity()) {
                $(this).addClass('was-validated');
                return false;
            }
             $('#calendar-modal').modal('hide');
             $.ajax({
                   type: $(this).attr('method'),
                   url: $(this).attr('action'),
                   data: $(this).serialize(), // serializes the form's elements.
                 })
             .then(() => {
                $('#confirmation-modal').modal('show');
             })
             .catch(() => {
                $('#confirmation-modal').modal('show');
             });

            return true;
        })

   // })


})