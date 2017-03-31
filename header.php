
  <Table width="100%">
  <tr>
  <td>
  <?php
   @$_SESSION['login']; 
  error_reporting(1);
  ?>
  </td>
    <td>
	<?php
	if(isset($_SESSION['login']))
	{
	 echo "<strong><a href=\"welcome.php\" class='lgt'> Home </a>|<a href=\"signout.php\">Signout</a></strong>";
 	}
	 else
	 {
	 	echo "&nbsp;";
	 }
	?>
	</td>
	
  </tr>
  
</table>
