<p style="background-color: red;font-size: 25px;text-align: center;">Attention ⚠ supprimer un utilisateur est irréversible !</p>
<?php

	$admin;

	foreach ($listUsers as $user) {

		if($user['admin'] == 0){
			$admin = 0;
		}else{
			$admin = 1;
		}

		?>
		<table><td style="width: 30%">
		<hr>
		<h2>pseudo : <br><?php echo $user['pseudo']; ?></h2>
		<h2>email : <br><?php echo $user['mail']; ?></h2>

		</td>
		<td style="padding-right: 75px;">
		<?php

			if($admin == 0){
				?><a onclick="return confirm('Etes-vous sûr de vouloir promouvoir cet utilisateur ?');" href="grade.php?action=1&id=<?php echo $user['id'] ?>"><button class="button" style="width: 300px; height: 50px;">PASSER ADMIN</button></a><?php
			}else{
				?><a onclick="return confirm('Etes-vous sûr de vouloir rétrograder cet utilisateur ?');" href="grade.php?action=0&id=<?php echo $user['id'] ?>"><button class="button" style="width: 300px; height: 50px;">RETIRER GRADE</button></a><?php
					
			}
		?>
			
			<a onclick="return confirm('Etes-vous sûr de vouloir supprimer cet utilisateur ?');" href="grade.php?action=3&id=<?php echo $user['id'] ?>"><button class="button" style="width: 300px; height: 50px;">SUPPRIMER</button></a>
		</td></table>

		<br>

		<?php
	}


?>