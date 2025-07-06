<?php

use Latte\Runtime as LR;

/** source: @layout.latte */
final class Template_0d395860fd extends Latte\Runtime\Template
{
	public const Source = '@layout.latte';

	public const Blocks = [
		['main' => 'blockMain'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>VidaPlus+</title>
	<link rel="stylesheet" href="static/css/style.css" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Averia+Sans+Libre:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<header id="header">
';
		$this->createTemplate('@navbar.latte', $this->params, 'include')->renderToContentType('html') /* line 19 */;
		echo '	</header>
	<main id="main">
';
		$this->renderBlock('main', get_defined_vars()) /* line 22 */;
		echo '	</main>
	<footer id="footer">
	</footer>
</body>
</html>
';
	}


	/** {block main} on line 22 */
	public function blockMain(array $ʟ_args): void
	{
	}
}
