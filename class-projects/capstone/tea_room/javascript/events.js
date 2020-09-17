$(document).ready(function () {
    $('#calendar').eCalendar({

        weekDays: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        months: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        textArrows: {previous: '<', next: '>'},
        eventTitle: 'Events',
        url: '',
        events: [
            {title: 'Tea Ceremony', description: 'Ceremony Lead: ', datetime: new Date(2020, 6, 16, 16)},
            {title: 'Tea Ceremony', description: 'Ceremony Lead: ', datetime: new Date(2020, 6, 23, 16)},
            {title: 'Music Night', description: 'Artist: Led Zeppelin', datetime: new Date(2020, 6, 18, 19)},
            {title: 'Music Night', description: 'Artist: Gorillaz', datetime: new Date(2020, 6, 25, 19)}
        ]});
});