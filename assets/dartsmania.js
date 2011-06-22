var score_301 = 301;
var score = score_301;
var old_score = score_301;
var darts = 3;

/**
 * @name name_of_the_function
 * @param parameters
 * @return return_value
 */
function displayBoardPart( boardpart )
{
	document.getElementById("group_20").style.display = "none";
	document.getElementById("group_15").style.display = "none";
	document.getElementById("group_10").style.display = "none";
	document.getElementById("group_5").style.display = "none";

	document.getElementById(boardpart).style.display = "block";
}

/**
 * @name name_of_the_function
 * @param parameters
 * @return return_value
 */
function throw_dart( dart_obj )
{
	if( darts < 1 )
	{
		alert( "you have NO darts left, dude" );
		dart_obj.checked = false;
	}
	else
	{
		if( darts == 3 )
		{
			old_score = score;
		}

		if( score - dart_obj.value == 0 )
		{
			alert( "Congrats! You've won!" );
			location.reload();
		}
		if( score-dart_obj.value < 0 )
		{
			alert( "Oh no! You went too low ..." );
			resetRound();
		}
		else
		{
			score = score - dart_obj.value;
			document.getElementById("score_board").innerHTML = score;
			
			darts = darts - 1;
			document.getElementById("darts_left").innerHTML = "";
			for( j=0 ; j<darts ; j++ )
			{
				document.getElementById("darts_left").innerHTML = document.getElementById("darts_left").innerHTML + "I ";
			}
		}
	}
}

/**
 * @name name_of_the_function
 * @param parameters
 * @return return_value
 */
function resetRound()
{
	darts = 3;
	score = old_score;
	document.getElementById("score_board").innerHTML = score;
	document.getElementById("darts_left").innerHTML = "I I I";
	document.darts.reset();
}

/**
 * @name name_of_the_function
 * @param parameters
 * @return return_value
 */
function newRound()
{
	darts = 3;
	document.getElementById("darts_left").innerHTML = "I I I";
	document.darts.reset();
}
