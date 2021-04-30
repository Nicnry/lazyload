<?php
include './Core/CardFactory.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="src/main.css">
	<title>Lazy load?</title>
</head>
<body>
	<div id="content">
		<?php
			for ($i = 0; $i <= count($cards)-1; $i++) {
				?>
				<div id="card-<?= $i ?>" class="card hidden">
					<div class="title">
						<h2><?= $cards[$i]->get_name() ?></h2>
					</div>
					<div class="picture">
						<img src="<?= $cards[$i]->get_picture() ?>" alt="mon chat">
					</div>
					<div class="text">
						<p><?= $cards[$i]->get_description() ?></p>
					</div>
				</div>
			<?php
			}
		?>
	</div>
</body>
<script src="src/main.js"></script>
</html>
