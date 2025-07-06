<?php

use Latte\Runtime as LR;

/** source: master.latte */
final class Template_237eabfa87 extends Latte\Runtime\Template
{
	public const Source = 'master.latte';

	public const Blocks = [
		['title' => 'blockTitle', 'content' => 'blockContent', 'modal' => 'blockModal', 'main' => 'blockMain', 'footer' => 'blockFooter', 'scripts' => 'blockScripts'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<!doctype html>
<html lang="pt-br">
    <head>
        <title>';
		$this->renderBlock('title', get_defined_vars()) /* line 4 */;
		echo '</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="static/css/style.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/css/selectize.default.min.css" rel="stylesheet" />

        <!-- jQuery -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

        <!-- Selectize JS -->
        <script   src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/js/selectize.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <header id="content">
';
		$this->createTemplate('navbar.latte', $this->params, 'include')->renderToContentType('html') /* line 21 */;
		$this->createTemplate('cookies.latte', $this->params, 'include')->renderToContentType('html') /* line 22 */;
		$this->renderBlock('content', get_defined_vars()) /* line 23 */;
		echo '        </header>
        <main id="main" style="background: #ffffff;
              background: linear-gradient(95deg,rgba(255, 255, 255, 1) 0%, rgba(200, 255, 0, 1) 32%, rgba(4, 184, 157, 1) 66%, rgba(0, 145, 39, 1) 100%);">
';
		$this->renderBlock('modal', get_defined_vars()) /* line 27 */;
		$this->renderBlock('main', get_defined_vars()) /* line 28 */;
		echo '        </main>
        <footer id="footer">
';
		$this->createTemplate('footer.latte', $this->params, 'include')->renderToContentType('html') /* line 31 */;
		$this->renderBlock('footer', get_defined_vars()) /* line 32 */;
		echo '        </footer>
';
		$this->renderBlock('scripts', get_defined_vars()) /* line 34 */;
		echo '    </body>
</html>';
	}


	/** {block title} on line 4 */
	public function blockTitle(array $ʟ_args): void
	{
	}


	/** {block content} on line 23 */
	public function blockContent(array $ʟ_args): void
	{
	}


	/** {block modal} on line 27 */
	public function blockModal(array $ʟ_args): void
	{
	}


	/** {block main} on line 28 */
	public function blockMain(array $ʟ_args): void
	{
	}


	/** {block footer} on line 32 */
	public function blockFooter(array $ʟ_args): void
	{
	}


	/** {block scripts} on line 34 */
	public function blockScripts(array $ʟ_args): void
	{
	}
}
