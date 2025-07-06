<?php

use Latte\Runtime as LR;

/** source: sobre.latte */
final class Template_e76fd3d9dd extends Latte\Runtime\Template
{
	public const Source = 'sobre.latte';

	public const Blocks = [
		['content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo "\n";
		$this->renderBlock('content', get_defined_vars()) /* line 3 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		$this->parentName = 'master.latte';
		return get_defined_vars();
	}


	/** {block content} on line 3 */
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

        <!-- Texto sobreposto no bottom -->
        <div class="position-absolute bottom-0 start-0 w-100 p-4">
            <div class="container bg-dark bg-opacity-50 rounded p-4 text-white">
                <div class="container d-flex">
                    <div class="col-6">
                        <h1 class="fw-semibold display-5 mb-3">Hospital Vida<span class="text-danger">Plus</span></h1>
                        <p class="">
                            A VidaPlus é um hospital de referência em saúde, fundado com o propósito de oferecer um atendimento de excelência, humanizado e acessível a todos. Desde a sua criação, a instituição se compromete em ir além do cuidado clínico tradicional, promovendo uma experiência completa de acolhimento, segurança e respeito à individualidade de cada paciente. Com uma infraestrutura moderna, tecnológica e acolhedora, investimos continuamente na atualização de equipamentos na formação de uma equipe técnica multidisciplinar qualificada, preparada para atender com empatia, responsabilidade. Nosso objetivo é garantir que cada pessoa que passe pela VidaPlus receba não apenas um tratamento, mas atenção integral e confiança.
                        </p>
                    </div>
                    <div class="d-flex justify-content-center col-6">
                        <img src="/static/images/isometric.png" height="400" alt="Imagem">
                    </div>
                </div>
                <p>
                    Nosso corpo clínico é composto por profissionais experientes e comprometidos com o bem-estar dos pacientes, atuando com ética, empatia e responsabilidade. Cada detalhe da nossa estrutura foi pensado para proporcionar segurança, conforto e eficiência no atendimento.
                </p>
                <p>
                    Na VidaPlus, acreditamos que cuidar da saúde vai além do tratamento: envolve ouvir, compreender e acompanhar cada pessoa em sua jornada. Atuamos com foco em resultados, mas sem abrir mão do acolhimento humano.
                </p>
                <div class="row mt-4 justify-content-between">
                    <div class="col-md-4   bg-opacity-50 rounded px-2">
                        <h4 class="text-primary pt-4 px-2">Missão</h4>
                        <p class="px-2">Promover saúde com qualidade, ética e humanização, respeitando a individualidade de cada paciente.</p>
                    </div>
                    <div class="col-md-4   bg-opacity-50 rounded px-2">
                        <h4 class="text-primary pt-4 px-2">Visão</h4>
                        <p class="px-2">Ser reconhecido como um centro de excelência hospitalar, referência em cuidado integral e inovação em saúde.</p>
                    </div>
                    <div class="col-md-4  bg-opacity-50 rounded px-2">
                        <h4 class="text-primary pt-4 px-2">Valores</h4>
                        <ol class="mb-0 px-4">
                            <li  class="text-white text-decoration-none">Ética e transparência</li>
                            <li  class="text-white text-decoration-none">Empatia e respeito</li>
                            <li  class="text-white text-decoration-none">Segurança e qualidade</li>
                            <li  class="text-white text-decoration-none">Inovação contínua</li>
                            <li  class="text-white text-decoration-none">Valorização da vida</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid py-5 bg-light px-4" >
        <h2 class="text-center mb-5">Nossos Valores</h2>
        <div class="row align-items-center justify-content-center">
            <div class="col-10 d-flex justify-content-center">
                <div class="col-md-3 text-center mb-4 ">
                    <i class="fas fa-shield-alt fa-5x text-success mb-3 lift"></i>
                    <h4>Segurança do paciente</h4>
                    <div class="d-flex flex-column align-items-center">
                        <p class="col-10">Seguimos rigorosos padrões clínicos e operacionais para assegurar um ambiente seguro em cada etapa do atendimento.</p>
                    </div>
                </div>
                <div class="col-md-3 text-center mb-4">
                    <i class="fas fa-hands-helping fa-5x text-info mb-3 lift"></i>
                    <h4>Respeito à dignidade humana</h4>
                    <div class="d-flex flex-column align-items-center">
                        <p class="col-10">Acreditamos que todo paciente merece ser tratado com consideração e respeito, independente de sua condição.</p>
                    </div>
                </div>
                <div class="col-md-3 text-center mb-4">
                    <i class="fas fa-hand-holding-heart fa-5x text-danger mb-3 lift"></i>
                    <h4>Responsabilidade social</h4>
                    <div class="d-flex flex-column align-items-center">
                        <p class="col-10">Promovemos a inclusão e o acesso à saúde com programas voltados à comunidade e atenção à equidade.</p>
                    </div>
                </div>
                <div class="col-md-3 text-center mb-4">
                    <i class="fas fa-lightbulb fa-5x text-warning mb-3 lift"></i>
                    <h4>Inovação a serviço da vida</h4>
                    <div class="d-flex flex-column align-items-center">
                        <p class="col-10">Investimos em tecnologias modernas e soluções eficazes para diagnósticos e tratamentos.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

';
	}
}
