require('./bootstrap');
import Lightpick from 'lightpick';
import axios from 'axios';

axios.defaults.headers.common = {
    'X-Requested-With': 'XMLHttpRequest',
    'X-CSRF-TOKEN' : document.querySelector('meta[name="csrf-token"]').getAttribute('content')
}

let _booked = {};
const format = 'DD/MM/YYYY';

const availabilty = (date, room) => {
    return !(_booked[date] || []).includes(room);
}


const availabilityToClasses = (date) => {
     date = date.format(format);
     return ['red-room', 'green-room'].filter(room => !(_booked[date] || []).includes(room));

}

const updateAvailabilty = (date, name, available, calendar) => {
    if(available) {
         _booked[date] =  (_booked[date] || []).filter(room => room !== name);

    }
    else{
       _booked[date] = _booked[date] || [];
       _booked[date].push(name);
    }
    calendar.setDisableDates();
    return axios.post('/change-availability', {
        date, name, available
    });
}

const getAvailabilty = () => {
    return axios.get('/availability')
        .then(response => {
            _booked = response.data.reduce((acc, date) => {
                acc[date.date_string] = date.rooms_booked;
                return acc;
            }, {})
        })
}


window.homeJS = function(){
   

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


    getAvailabilty()
        .then(() => {
        const picker = new Lightpick({ 
            field: $('.date-field-start')[0], 
            secondField: $('.date-field-end')[0], 
            singleDate: false,
            parentEl: '.calendar-container',
            numberOfColumns: 2,
            numberOfMonths: 2,
            inline: true,
            dayClasses: availabilityToClasses
        });
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
            $('#failure-modal').modal('show');
         });

        return true;
    })
}



window.manageJS = function() {
    let _calendar;
    getAvailabilty()
        .then(() => {
            _calendar = new Lightpick({ 
                parentEl: '.calendar-container',
                field: $('.calendar-date-field')[0],
                numberOfColumns: 3,
                numberOfMonths: 6,
                inline: true,
                dayClasses: availabilityToClasses,
                onSelect: (value) => {
                    if(value) {
                        $('.room-availability').removeAttr('disabled');
                    }
                    $('#red-room').prop('checked', availabilty(value, 'red-room'));
                    $('#green-room').prop('checked',availabilty(value, 'green-room'))
                }
            });

        });

    $('.room-availability').on('change', function() {
        updateAvailabilty($('.calendar-date-field').val(), $(this).prop('name'), $(this).prop('checked'), _calendar);
    });
}


$(document).ready(function(){
    if($('.home-page').length) {
        homeJS();
    }
    if($('.manage-page').length) {
        manageJS();
    }
});