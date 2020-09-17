
var player1 = prompt("Player 1, enter your name")
var player2 = prompt("Player 2, enter your name")

var playerTurn = 1


function reset() {

    $('table.board td').removeClass('x o');
    $('.turn').html(`It's your turn, player <span id="player-turn">1</span>`)
    playerTurn = 1
}


function checkForWinnerPlayer1 () {
    return (
        $("#1").hasClass('x') && $("#2").hasClass('x') && $("#3").hasClass('x')
        ||
        $("#4").hasClass('x') && $("#5").hasClass('x') && $("#6").hasClass('x')
        ||
        $("#7").hasClass('x') && $("#8").hasClass('x') && $("#9").hasClass('x')
        ||
        $("#1").hasClass('x') && $("#4").hasClass('x') && $("#7").hasClass('x')
        ||
        $("#2").hasClass('x') && $("#5").hasClass('x') && $("#8").hasClass('x')
        ||
        $("#3").hasClass('x') && $("#6").hasClass('x') && $("#9").hasClass('x')
        ||
        $("#1").hasClass('x') && $("#5").hasClass('x') && $("#9").hasClass('x')
        ||
        $("#3").hasClass('x') && $("#5").hasClass('x') && $("#7").hasClass('x')
        )
    }


function checkForWinnerPlayer2 () {
    return (
$("#1").hasClass('o') && $("#2").hasClass('o') && $("#3").hasClass('o')
||
$("#4").hasClass('o') && $("#5").hasClass('o') && $("#6").hasClass('o')
||
$("#7").hasClass('o') && $("#8").hasClass('o') && $("#9").hasClass('o')
||
$("#1").hasClass('o') && $("#4").hasClass('o') && $("#7").hasClass('o')
||
$("#2").hasClass('o') && $("#5").hasClass('o') && $("#8").hasClass('o')
||
$("#3").hasClass('o') && $("#6").hasClass('o') && $("#9").hasClass('o')
||
$("#1").hasClass('o') && $("#5").hasClass('o') && $("#9").hasClass('o')
||
$("#3").hasClass('o') && $("#5").hasClass('o') && $("#7").hasClass('o')
)
}







function isBoardFull () {
    return $('td.x').length + $('td.o').length == 9 
}

function userClickedSquare() {

    if ( 
        // $(this).hasClass('x') == false 
        // && 
        // $(this).hasClass('o') == false
        !$(this).hasClass('x')
        && 
        !$(this).hasClass('o')
    )  {

        if ( playerTurn == 1) {
            $(this).addClass('x')
            playerTurn = 2
        }
        else if (playerTurn == 2) {
            $(this).addClass('o')
            playerTurn = 1
        }
        $('#player-turn').html(playerTurn)

    }   else {
            alert ('That square is full!')
        }
    
    // if (checkForWinner()) {
    //     alert ('Winner')
    // }   else if (isBoardFull() ) {
    //         alert('Tie')
    //     }

    if (checkForWinnerPlayer1()) {
        playerTurn = 0
        $('.turn').html(`${player1} is the WINNER!`)
        alert (`${player1} is the WINNER!`)
    }   

    else if (checkForWinnerPlayer2()) {
        playerTurn = 0
        $('.turn').html(`${player2} is the WINNER!`)
        alert (`${player2} is the WINNER!`)
    }   
    
    else if (isBoardFull() ) {
        playerTurn = 0
        $('.turn').html(`Tied game`)
        alert('Tied game')
    }
}




reset();

$('#reset').click(reset)

$('td').click(userClickedSquare)
