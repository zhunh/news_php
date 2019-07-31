<?php
	function roll_pic($xuanze){
			include("php/connection.php");
		    //$xuanze="select * from news_item where classify='时政'";
			$result=mysqli_query($db,$xuanze);
			$row=mysqli_fetch_object($result);
			echo "<div class='item'>";
			echo "<a href='new_item.php?id=".$row->id."'><img src='../image/".$row->pictures."' alt='First slide'></a>";							
			echo "<div class='header-text hidden-xs'><div class='col-md-12 text-center'><h2>";
			echo $row->remarkes;
			echo "</h2><br><h3>";
			echo $row->title;
			echo "</h3><br></div></div></div>";	
			mysqli_free_result($result);			
		}
	?>