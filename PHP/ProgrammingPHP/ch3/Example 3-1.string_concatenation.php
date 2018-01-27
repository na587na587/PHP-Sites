<?php /*function column()
{ ?>
<!--
	<table>
		<tr>
			<td>Cell A</td>
			<td>Cell B</td>
		</tr>
	</table>
-->
<?php }*/ ?>

<?php function column() 
{
	$html = "<div>
				<table>
					<tr>
						<td>Cell A</td>
						<td>Cell B</td>
					</tr>
				</table>
			</div>";
			
	return $html;
} ?>

<?php
	function strcat($left, $right)
	{
	 return $left . $right;
	}

	$first = "This is a ";
	$second = " complete sentence!";
	$table = column();
	
	echo "table: <br>[<br>" . $table . "]<br><br>";

	echo strcat($first, $second);
?>