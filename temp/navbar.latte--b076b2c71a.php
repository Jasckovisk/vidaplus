<?php

use Latte\Runtime as LR;

/** source: navbar.latte */
final class Template_b076b2c71a extends Latte\Runtime\Template
{
	public const Source = 'navbar.latte';


	public function main(array $ʟ_args): void
	{
		echo '<div class="bg-success text-center text-white fw-semibold shadow" style="height: 26px;">Consultas com 30% de desconto para convênios!</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
    <div class="container-fluid col-10">
        <a class="fw-bold display-6 text-dark text-decoration-none" href="/">Vida<span class="fst-italic text-danger">Plus</span><i class="fa-solid fa-heart-circle-plus text-danger ms-2"></i>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sobre">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/servicos">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contato">Contato</a>
                </li>
            </ul>
            <a class="btn btn-success ms-3" href="/login"> Entrar</a>
            <a class="btn btn-secondary ms-2" href="/registro"> Registrar</a>
        </div>
    </div>
</nav>

';
	}
}
