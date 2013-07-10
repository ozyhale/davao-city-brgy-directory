/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

var masterLevel = 1;
var level = 1;
var aimage = true;
var simple = true;
var polygon = false;
var image = 'game';

function levelUp() {

    masterLevel++;

    bootbox.alert("<h3>Congratulations! proceed to level " + masterLevel + "</h3>", function() {
        if (masterLevel === 2 || masterLevel === 6 || masterLevel === 10 || masterLevel === 14 || masterLevel === 18 || masterLevel === 22) {
            simple = false;
        } else if (masterLevel === 3 || masterLevel === 7 || masterLevel === 11 || masterLevel === 15 || masterLevel === 19 || masterLevel === 23) {
            polygon = true;
        } else if (masterLevel === 4 || masterLevel === 8 || masterLevel === 12 || masterLevel === 16 || masterLevel === 20 || masterLevel === 18) {
            aimage = false;
        } else if (masterLevel === 5 || masterLevel === 9 || masterLevel === 13 || masterLevel === 17 || masterLevel === 21) {
            simple = true;
            polygon = false;
            aimage = true;
            level++;
        }

        $('#level_value_puzzle').text(masterLevel);

        snapfit.remove(document.getElementById(image));
        snapfit.add(document.getElementById(image), {
            level: level,
            mixed: true,
            bwide: 1,
            aimage: aimage,
            simple: simple,
            nokeys: true,
            polygon: polygon,
            callback: function() {
                levelUp();
            }
        });

    });
}

//when click header
$('#puzzle_div').on('click', function() {

    snapfit.add(document.getElementById(image), {
        level: level,
        mixed: true,
        bwide: 1,
        aimage: aimage,
        simple: simple,
        nokeys: true,
        polygon: polygon,
        callback: function() {
            levelUp();
        }
    });

    //show buttons
    $('#give_up_puzzle').fadeIn();
    $('#shuffle_puzzle').fadeIn();
    $('#help_puzzle').fadeIn();

    //show level
    $('#level_puzzle').fadeIn();
    $('#level_value_puzzle').text(masterLevel);

//    snapfit.admix(document.getElementById(image), true);

    //hide background
//    $('#ice_header').hide();

    //hide header
//    $('.art-header').fadeOut();

    //show puzzle
//    $('#puzzle_div').show();

    //hide buttons
//    $('#play_puzzle').fadeOut();

});

//when click play
//$('#play_puzzle').on('click', function() {
//
//    snapfit.admix(document.getElementById(image), true);
//
//    //hide background
//    $('#art-main').css('background-image', 'url()');
//
//    //hide header
//    $('.art-header').fadeOut();
//
//    //show puzzle
//    $('#puzzle_div').fadeIn();
//
//    //hide buttons
//    $('#play_puzzle').fadeOut();
//
//    //show buttons
//    $('#give_up_puzzle').fadeIn();
//    $('#shuffle_puzzle').fadeIn();
//    $('#help_puzzle').fadeIn();
//
//    //show level
//    $('#level_puzzle').fadeIn();
//    $('#level_value_puzzle').text(masterLevel);
//
//});

//when click give-up
$('#give_up_puzzle').on('click', function() {

    snapfit.solve(document.getElementById(image));

    //hide buttons
    $('#give_up_puzzle').fadeOut();
    $('#shuffle_puzzle').fadeOut();
    $('#help_puzzle').fadeOut(2000, function (){
        location.reload();
    });

    //show button
//    $('#retry_puzzle').fadeIn(2000, function (){
//        
//    });
    //show background
//    $('#art-main').css('background-image', 'url("' + base_url + 'application/views/templates/images/page.png")');

    //hide puzzle
//    $('#puzzle_div').fadeOut(2000, function() {
//
//        //show header
//        $('.art-header').fadeIn();
//    });
});

//shuffle pieces
$('#shuffle_puzzle').on('click', function() {
    snapfit.admix(document.getElementById(image), simple);
});

//play again puzzle
$('#retry_puzzle').on('click', function() {

    snapfit.admix(document.getElementById(image), true);

    //show buttons
    $('#give_up_puzzle').fadeIn();
    $('#shuffle_puzzle').fadeIn();
    $('#help_puzzle').fadeIn();

    //hide buttons
    $('#retry_puzzle').fadeOut();

    //hide background
    $('#art-main').css('background-image', 'url()');

    //hide header
    $('.art-header').fadeOut();

    //show puzzle
    $('#puzzle_div').fadeIn();
});

//when user click help
$('#help_puzzle').on('click', function() {
    //show modal
    $('#help_puzzle_modal').modal('show');
});

//on document ready
$(document).ready(function() {

    //hide buttons
    $('#give_up_puzzle').hide();
    $('#shuffle_puzzle').hide();
    $('#retry_puzzle').hide();
    $('#help_puzzle').hide();

    //hide level info
    $('#level_puzzle').hide();

//    snapfit.add(document.getElementById(image), {
//        level: level, 
//        mixed: true, 
//        bwide: 1, 
//        aimage: aimage, 
//        simple: simple, 
//        nokeys: true, 
//        callback: function() {
//            levelUp();
//        }
//    });

//snapfit.solve(document.getElementById(image));

    //hide puzzle            
//    $('#puzzle_div').hide();

});