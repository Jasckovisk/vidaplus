<?php

use Latte\Runtime as LR;

/** source: servicos.latte */
final class Template_87ac6ff784 extends Latte\Runtime\Template
{
	public const Source = 'servicos.latte';

	public const Blocks = [
		['scripts' => 'blockScripts', 'content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo "\n";
		$this->renderBlock('scripts', get_defined_vars()) /* line 3 */;
		echo "\n";
		$this->renderBlock('content', get_defined_vars()) /* line 8 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		$this->parentName = 'master.latte';
		return get_defined_vars();
	}


	/** {block scripts} on line 3 */
	public function blockScripts(array $ʟ_args): void
	{
		echo '<script src="static/js/login.js"></script>
<script src="static/js/masks.js"></script>
';
	}


	/** {block content} on line 8 */
	public function blockContent(array $ʟ_args): void
	{
		echo '<section class="container-fluid p-0">
    <div class="position-relative" style="height: 820px;">
        <!-- Imagem de fundo -->
        <div class="w-100 h-100" style="
             background-image: url(\'/static/images/blur.jpg\');
             background-size: cover;
             background-position: center top;
             background-repeat: no-repeat;
             filter: brightness(0.6);
             ">
        </div>
        <div class="position-absolute bottom-0 start-0 w-100 px-4">
            <div class="container bg-dark bg-opacity-50 rounded p-4 text-white my-5 ">
                <div class="d-flex justify-content-between gap-3 mb-5 flex-wrap">
                    <div class="card overflow-hidden" style="width: 25rem; height: 18rem;">
                        <img src="/static/images/card1.jpg" class="w-100 h-100" style="object-fit: cover;" alt="...">
                    </div>

                    <div class="card overflow-hidden" style="width: 25rem; height: 18rem;">
                        <img src="/static/images/card2.jpg" class="w-100 h-100" style="object-fit: cover;" alt="...">
                    </div>

                    <div class="card overflow-hidden" style="width: 25rem; height: 18rem;">
                        <img src="/static/images/card3.jpg" class="w-100 h-100" style="object-fit: cover;" alt="...">
                    </div>
                </div>
                <h2 class="fw-semibold mb-4 text-center text-white">Nossos Serviços</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card bg-transparent border-light h-100">
                            <div class="card-body">
                                <h5 class="card-title text-white">
                                    <i class="fas fa-stethoscope me-2 fa-xl"></i> Consultas Médicas
                                </h5>
                                <p class="card-text text-white">Atendimento com especialistas de diversas áreas, com foco em diagnóstico preciso, escuta ativa e cuidado personalizado.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card bg-transparent border-light h-100">
                            <div class="card-body">
                                <h5 class="card-title text-white">
                                    <i class="fas fa-heartbeat me-2 fa-xl"></i> Exames e Diagnósticos
                                </h5>
                                <p class="card-text text-white">Infraestrutura moderna para realização de exames laboratoriais e de imagem, com agilidade e precisão.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card bg-transparent border-light h-100">
                            <div class="card-body">
                                <h5 class="card-title text-white">
                                    <i class="fas fa-procedures me-2 fa-xl"></i> Internações e Cirurgias
                                </h5>
                                <p class="card-text text-white">Unidades de internação equipadas e equipe cirúrgica preparada para procedimentos com segurança e excelência.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card bg-transparent border-light h-100">
                            <div class="card-body">
                                <h5 class="card-title text-white">
                                    <i class="fas fa-user-nurse me-2 fa-xl"></i> Enfermagem 24h
                                </h5>
                                <p class="card-text text-white">Assistência contínua com equipe de enfermagem dedicada ao bem-estar e conforto do paciente em todos os momentos.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card bg-transparent border-light h-100">
                            <div class="card-body">
                                <h5 class="card-title text-white">
                                    <i class="fas fa-ambulance me-2 fa-xl"></i> Pronto Atendimento
                                </h5>
                                <p class="card-text text-white">Atendimento emergencial rápido, com equipe treinada e estrutura preparada para urgências e emergências.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card bg-transparent border-light h-100">
                            <div class="card-body">
                                <h5 class="card-title text-white">
                                    <i class="fas fa-child me-2 fa-xl"></i> Pediatria e Saúde da Família
                                </h5>
                                <p class="card-text text-white">Cuidado especial para crianças e atenção integral à saúde familiar com foco preventivo e humanizado.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
';
	}
}
