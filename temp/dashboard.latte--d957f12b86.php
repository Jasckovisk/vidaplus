<?php

use Latte\Runtime as LR;

/** source: dashboard.latte */
final class Template_d957f12b86 extends Latte\Runtime\Template
{
	public const Source = 'dashboard.latte';

	public const Blocks = [
		['scripts' => 'blockScripts', 'main' => 'blockMain'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('scripts', get_defined_vars()) /* line 2 */;
		$this->renderBlock('main', get_defined_vars()) /* line 6 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		$this->parentName = '@master.latte';
		return get_defined_vars();
	}


	/** {block scripts} on line 2 */
	public function blockScripts(array $ʟ_args): void
	{
		echo '<script src="static/js/masks.js"></script>
<script src="static/js/pacientes.js"></script>
';
	}


	/** {block main} on line 6 */
	public function blockMain(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<main class="container py-4 mt-5">
  <div class="row mt-5">
    <!-- Cards de resumo -->
    <div class="col-12 col-md-3 mb-4">
      <div class="card shadow-sm border-0 rounded-3">
        <div class="card-body">
          <h6 class="text-uppercase text-muted mb-3">Pacientes</h6>
          <h2 class="fw-bold">128</h2>
          <small class="text-success">+12% desde último mês</small>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-3 mb-4">
      <div class="card shadow-sm border-0 rounded-3">
        <div class="card-body">
          <h6 class="text-uppercase text-muted mb-3">Consultas Hoje</h6>
          <h2 class="fw-bold">8</h2>
          <small class="text-danger">-3% desde ontem</small>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-3 mb-4">
      <div class="card shadow-sm border-0 rounded-3">
        <div class="card-body">
          <h6 class="text-uppercase text-muted mb-3">Receitas</h6>
          <h2 class="fw-bold">R$ 15.200</h2>
          <small class="text-success">+8% desde último mês</small>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-3 mb-4">
      <div class="card shadow-sm border-0 rounded-3">
        <div class="card-body">
          <h6 class="text-uppercase text-muted mb-3">Feedback</h6>
          <h2 class="fw-bold">97%</h2>
          <small class="text-success">Satisfação dos pacientes</small>
        </div>
      </div>
    </div>
  </div>

  <!-- Gráfico e tabela -->
  <div class="row">
    <section class="col-lg-8 mb-4">
      <div class="card shadow-sm border-0 rounded-3">
        <div class="card-header bg-white">
          <h5 class="mb-0">Atendimento Mensal</h5>
        </div>
        <div class="card-body">
          <!-- Aqui poderia entrar um gráfico com chart.js ou similar -->
          <div class="d-flex justify-content-center align-items-center" style="max-height: 120%">
             <canvas id="myChart"></canvas>
          </div>
        </div>
      </div>
    </section>

    <section class="col-lg-4 mb-4">
      <div class="card shadow-sm border-0 rounded-3">
        <div class="card-header bg-white">
          <h5 class="mb-0">Últimos Pacientes</h5>
        </div>
        <div class="card-body p-0">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Jennifer Ramiro</li>
            <li class="list-group-item">Jackson Douglas</li>
            <li class="list-group-item">Maria Silva</li>
            <li class="list-group-item">Carlos Souza</li>
            <li class="list-group-item">Ana Pereira</li>
          </ul>
        </div>
      </div>
    </section>
  </div>
</main>
';
	}
}
