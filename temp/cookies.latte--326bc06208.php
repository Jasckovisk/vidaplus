<?php

use Latte\Runtime as LR;

/** source: cookies.latte */
final class Template_326bc06208 extends Latte\Runtime\Template
{
	public const Source = 'cookies.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<div class="container-fluid card shadow-sm position-fixed bottom-0 m-4 d-none" style="max-width: 100vh; z-index: 1050;" id="cookiesCard">
    <div class="card-body">
        <h5 class="card-title">Política de Cookies</h5>
        <p class="card-text">
            Utilizamos cookies para melhorar sua experiência em nosso site. Ao continuar navegando, você concorda com nossa <a href="#">Política de Cookies</a>.
        </p>
        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-primary" data-bs-dismiss="card" onclick="$(\'#cookiesCard\').addClass(\'d-none\');">Aceitar</button>
        </div>
    </div>
</div>

';
	}
}
