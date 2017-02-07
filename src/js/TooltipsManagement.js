//This code manage the behaviour of personnal tooltips

$(document).ready(function(){


    $('#tooltipped_infosSite').tooltip({
        delay: 150,
        tooltip: 'VeilleRSS is a RSS feed aggregator designed to carry out my personnal technological watch.',
        position: 'left',
        html: false
    });

    $('#tooltipped_contacts').tooltip({
        delay: 150,
        tooltip: 'Contact me : mathieu.robilliard@gmail.com',
        position: 'left',
        html: false
    });

    $('#tooltipped_infosDetails').tooltip({
        delay: 150,
        tooltip: 'Add RSS feeds to follow your favorites sites in real time!',
        position: 'left',
        html: false
    });

    $('#tooltipped_author').tooltip({
        delay: 150,
        tooltip: 'Author : Mathieu Robilliard -- Computer Science and Management Engineer',
        position: 'left',
        html: false
    });



});
