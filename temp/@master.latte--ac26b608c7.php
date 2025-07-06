<?php

use Latte\Runtime as LR;

/** source: @master.latte */
final class Template_ac26b608c7 extends Latte\Runtime\Template
{
	public const Source = '@master.latte';

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
        <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet">
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
            rel="stylesheet"
            />

        <!-- jQuery -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="static/js/auth.js"></script>
        <!-- Selectize JS -->
        <script   src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.15.2/js/selectize.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <header id="content">
';
		$this->createTemplate('@navbar.latte', $this->params, 'include')->renderToContentType('html') /* line 32 */;
		$this->renderBlock('content', get_defined_vars()) /* line 33 */;
		echo '        </header>
        <main id="main"  class="d-flex">
';
		$this->createTemplate('@sidebar.latte', $this->params, 'include')->renderToContentType('html') /* line 36 */;
		$this->renderBlock('modal', get_defined_vars()) /* line 37 */;
		$this->renderBlock('main', get_defined_vars()) /* line 38 */;
		echo '        </main>
        <footer id="footer">
';
		$this->createTemplate('@footer.latte', $this->params, 'include')->renderToContentType('html') /* line 41 */;
		$this->renderBlock('footer', get_defined_vars()) /* line 42 */;
		echo '        </footer>
';
		$this->renderBlock('scripts', get_defined_vars()) /* line 44 */;
		echo '
    </body>
</html>';
	}


	/** {block title} on line 4 */
	public function blockTitle(array $ʟ_args): void
	{
	}


	/** {block content} on line 33 */
	public function blockContent(array $ʟ_args): void
	{
	}


	/** {block modal} on line 37 */
	public function blockModal(array $ʟ_args): void
	{
	}


	/** {block main} on line 38 */
	public function blockMain(array $ʟ_args): void
	{
	}


	/** {block footer} on line 42 */
	public function blockFooter(array $ʟ_args): void
	{
	}


	/** {block scripts} on line 44 */
	public function blockScripts(array $ʟ_args): void
	{
	}
}
