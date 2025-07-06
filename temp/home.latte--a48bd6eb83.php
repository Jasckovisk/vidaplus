<?php

use Latte\Runtime as LR;

/** source: home.latte */
final class Template_a48bd6eb83 extends Latte\Runtime\Template
{
	public const Source = 'home.latte';

	public const Blocks = [
		['main' => 'blockMain'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('main', get_defined_vars()) /* line 2 */;
		echo "\n";
	}


	public function prepare(): array
	{
		extract($this->params);

		$this->parentName = '@layout.latte';
		return get_defined_vars();
	}


	/** {block main} on line 2 */
	public function blockMain(array $ʟ_args): void
	{
		echo '        <div class="w-100 d-flex align-items-start justify-content-center">
            <article class="col-md-6 text-center d-flex flex-column justify-content-start align-items-center bg-white pt-5 px-5 rounded-start ">
                <h1 class="display-4 mb-3 fw-semibold">Bem-vindo ao Vida<span class="text-success fst-italic">Plus</span><i class="fa-solid fa-heart-circle-plus text-success display-1"></i><br></h1>
                <p class="lead my-4 col-12">
                    Sua saúde em primeiro lugar: tecnologia, atenção e excelência para você e sua família.<br>
                    Descubra nossos serviços e agende sua consulta de forma rápida e fácil.<br>
                    Atendimento personalizado para todas as idades e necessidades.
                </p>
                <div class="row d-flex justify-content-center gap-4 mb-4 col-12">
                    <a href="/agendar" class="btn btn-success btn-lg mb-3 col-3">Consulta</a>
                    <a href="/agendar" class="btn btn-success btn-lg mb-3 col-3">Saiba mais</a>
                </div>
                <h2 class="mb-4 mt-4">Nossos Serviços</h2>
                <div class="row mb-4">
                    <div class="col-md-4 mb-3">
                        <div class="card h-100 border-success">
                            <div class="card-body text-center">
                                <i class="bi bi-heart-pulse display-4 text-success mb-3"></i>
                                <h5 class="card-title">Consultas Médicas</h5>
                                <p class="card-text">Atendimento com especialistas para cuidar da sua saúde.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card h-100 border-primary">
                            <div class="card-body text-center">
                                <i class="bi bi-hospital display-4 text-primary mb-3"></i>
                                <h5 class="card-title">Exames Laboratoriais</h5>
                                <p class="card-text">Exames completos com tecnologia de ponta.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card h-100 border-info">
                            <div class="card-body text-center">
                                <i class="bi bi-people display-4 text-info mb-3"></i>
                                <h5 class="card-title">Atendimento Humanizado</h5>
                                <p class="card-text">Equipe dedicada ao seu bem-estar e conforto.</p>
                            </div>
                        </div>
                    </div>
                </div>
                </article>                
            <aside class="col-6 d-flex align-content-start bg-white">
                <img src="static/images/doctors.jpg" alt="Imagem de médicos atendendo pacientes" class="img-fluid rounded-end" style="height: 90%;object-fit: cover; transform: scaleX(-1);)">
            </aside>
        </div>
';
	}
}
