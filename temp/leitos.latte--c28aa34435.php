<?php

use Latte\Runtime as LR;

/** source: leitos.latte */
final class Template_c28aa34435 extends Latte\Runtime\Template
{
	public const Source = 'leitos.latte';

	public const Blocks = [
		['scripts' => 'blockScripts', 'main' => 'blockMain'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('scripts', get_defined_vars()) /* line 2 */;
		$this->renderBlock('main', get_defined_vars()) /* line 7 */;
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
<script src="static/js/colaboradores.js"></script>
';
	}


	/** {block main} on line 7 */
	public function blockMain(array $ʟ_args): void
	{
		echo '<main class="container py-4 mt-5">
    <div class="row mt-5">
        <!-- Cards de resumo -->
        <div class="col-12 col-md-3 mb-4">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-body">
                    <h6 class="text-uppercase text-muted mb-3">Leitos Totais</h6>
                    <h2 class="fw-bold">150</h2>
                    <small class="text-primary">Inclui UTI e Enfermaria</small>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-4">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-body">
                    <h6 class="text-uppercase text-muted mb-3">Disponíveis</h6>
                    <h2 class="fw-bold text-success">28</h2>
                    <small class="text-success">+5 hoje</small>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-4">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-body">
                    <h6 class="text-uppercase text-muted mb-3">Ocupados</h6>
                    <h2 class="fw-bold">117</h2>
                    <small class="text-danger">-3% em relação à semana passada</small>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-4">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-body">
                    <h6 class="text-uppercase text-muted mb-3">Última Atualização</h6>
                    <h2 class="fw-bold">06/07/2025</h2>
                    <small class="text-muted">Sistema Hospitalar</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabela de leitos -->
    <div class="row">
        <section class="col-lg-8 mb-4">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Status de Leitos</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover align-middle mb-0" id="tabelaLeitos">
                        <thead class="table-light">
                            <tr>
                                <th>ID do Leito</th>
                                <th>Tipo</th>
                                <th>Setor</th>
                                <th>Status</th>
                                <th>Paciente</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>L-001</td>
                                <td>UTI</td>
                                <td>UTI Adulto</td>
                                <td>
                                     <div class="d-flex justify-content-center">
                                        <button class="btn btn-sm btn-danger" disabled>Ocupado</button>
                                    </div>
                                </td>
                                <td>Maria Silva</td>
                                <td>
                                    <div class="btn-group d-flex justify-content-center">
                                        <button class="btn btn-sm btn-info">Detalhes</button>
                                        <button class="btn btn-sm btn-warning">Transferir</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>L-045</td>
                                <td>Enfermaria</td>
                                <td>Clínica Geral</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-sm btn-success" disabled>Disponível</button>
                                    </div>
                                </td>
                                <td>-</td>
                                <td>
                                    <div class="btn-group d-flex justify-content-center">
                                        <button class="btn btn-sm btn-primary">Alocar</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>L-023</td>
                                <td>UTI</td>
                                <td>UTI Neonatal</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-sm btn-danger" disabled>Ocupado</button>
                                    </div>
                                </td>
                                <td>-</td>
                                <td>
                                    <div class="btn-group d-flex justify-content-center">
                                        <button class="btn btn-sm btn-secondary">Cancelar</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>L-078</td>
                                <td>Enfermaria</td>
                                <td>Ortopedia</td>
                                <td>
                                     <div class="d-flex justify-content-center">
                                        <button class="btn btn-sm btn-danger" disabled>Ocupado</button>
                                    </div>
                                </td>
                                <td>José Lima</td>
                                <td>
                                    <div class="btn-group d-flex justify-content-center">
                                        <button class="btn btn-sm btn-info">Detalhes</button>
                                        <button class="btn btn-sm btn-warning">Transferir</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Próximas altas -->
        <section class="col-lg-4 mb-4">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Altas Previstas</h5>
                </div>
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">07/07 - Maria Silva - UTI</li>
                        <li class="list-group-item">08/07 - José Lima - Enfermaria</li>
                        <li class="list-group-item">09/07 - Ana Paula - Ortopedia</li>
                        <li class="list-group-item">09/07 - Lucas Rocha - UTI Neonatal</li>
                        <li class="list-group-item">10/07 - Helena Martins - Clínica Geral</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</main>

';
	}
}
