<div id="score-board-wrapper">
	<div id="score_board">
		<script language="javascript">document.write(score_301);</script>
	</div>
	<form name="darts" id="darts">
		<?php
			for( $i = 20 ; $i > 0 ; $i-- )
			{
				switch( $i )
				{
					case 20:
					case 15:
					case 10:
					case 5:		
						echo '<table class="dart_board_part" style="display:none;" id="group_' . $i . '">
						<tr align="center">
							<td></td>
							<td alt="single" title="single">s</td>
							<td alt="double" title="double">d</td>
							<td alt="triple" title="triple">t</td>
						</tr>';
						break;
				}
				echo '<tr align="center">' . 
					'<td>' . $i . '</td>' .
					'<td><input type="radio" id="r' . $i . '" name="r' . $i . '" value="' . $i . '" alt="single ' . $i . '" title="single ' . $i . '" onClick="javascript: throw_dart(this);"></td>' .
					'<td><input type="radio" id="r' . $i . '" name="r' . $i . '" value="' . ($i*2) . '" alt="double ' . $i . '" title="double ' . $i . '" onClick="javascript: throw_dart(this);"></td>' .
									'<td><input type="radio" id="r' . $i . '" name="r' . $i . '" value="' . ($i*3) . '" alt="triple ' . $i . '" title="triple ' . $i . '" onClick="javascript: throw_dart(this);"></td></tr>'; 
					switch( $i )
					{
						case 16:
						case 11:
						case 6:
						case 1:
							echo '</table>' . "\r\n";
							break;
					}
				}
				echo '
					<table class="dart_board_part">
						<tr>
							<td>bulls</td>
							<td><input onClick="javascript: throw_dart(this);" value="25" type="radio" alt="25" title="25" id="bulls"></td>
							<td>eye</td>
							<td><input onClick="javascript: throw_dart(this);" value="50" type="radio" alt="50" title="50" id="eye"></td>
						</tr>
						<tr>
							<td>blanks</td>
							<td><input value="0" onClick="javascript: throw_dart(this);" type="radio" alt="out of bounds" title="out of bounds" id="blank1"></td>
							<td><input value="0" onClick="javascript: throw_dart(this);" type="radio" alt="out of bounds" title="out of bounds" id="blank2"></td>
							<td><input value="0" onClick="javascript: throw_dart(this);" type="radio" alt="out of bounds" title="out of bounds" id="blank3"></td>		
						</tr>
						<tr>	
							<td>darts left</td>
							<td id="darts_left" align="center" colspan="3" style="font-weight:bolder;">I I I</td>
						</tr>
					</table>

					<script language="javascript">displayBoardPart(\'group_20\');</script>
					<div style="text-align:center;">
						<span class="darts_links" onClick="javascript:displayBoardPart(\'group_20\');">20-16</span>
						<span class="darts_links" onClick="javascript:displayBoardPart(\'group_15\')">15-11</span>
						<span class="darts_links" onClick="javascript:displayBoardPart(\'group_10\')">10-6</span>
						<span class="darts_links" onClick="javascript:displayBoardPart(\'group_5\')">5-1</span>
						<p>
							<input type="button" onClick="javascript: resetRound();" value=" reset ">
							<input type="button" onClick="javascript: newRound();" value=" new round ">
						</p>
					</div></form>';?>
</div> <!-- score board wrapper -->
