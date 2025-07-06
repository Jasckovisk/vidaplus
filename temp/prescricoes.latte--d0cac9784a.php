<?php

use Latte\Runtime as LR;

/** source: prescricoes.latte */
final class Template_d0cac9784a extends Latte\Runtime\Template
{
	public const Source = 'prescricoes.latte';

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
                    <h6 class="text-uppercase text-muted mb-3">Total de Prescrições</h6>
                    <h2 class="fw-bold">124</h2>
                    <small class="text-success">+12 nesta semana</small>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-4">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-body">
                    <h6 class="text-uppercase text-muted mb-3">Emitidas Hoje</h6>
                    <h2 class="fw-bold">9</h2>
                    <small class="text-primary">em tempo real</small>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-4">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-body">
                    <h6 class="text-uppercase text-muted mb-3">Pendentes de Assinatura</h6>
                    <h2 class="fw-bold">3</h2>
                    <small class="text-warning">aguardando médico</small>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-4">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-body">
                    <h6 class="text-uppercase text-muted mb-3">Última Prescrição</h6>
                    <h2 class="fw-bold">06/07/2025</h2>
                    <small class="text-muted">por Dr. Rafael Lima</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabela de prescrições -->
    <div class="row">
        <section class="col-lg-8 mb-4">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Prescrições Recentes</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover align-middle mb-0" id="tabelaPrescricoes">
                        <thead class="table-light">
                            <tr>
                                <th>Paciente</th>
                                <th>Medicamento</th>
                                <th>Data</th>
                                <th>Médico</th>
                                <th>Status</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Maria Oliveira</td>
                                <td>Amoxicilina 500mg</td>
                                <td>07/07/2025</td>
                                <td>Dr. João Silva</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-sm btn-success" disabled>Assinada</button>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group d-flex justify-content-center">
                                        <button class="btn btn-sm btn-info">Visualizar</button>
                                        <button class="btn btn-sm btn-danger">Cancelar</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Rafael Lima</td>
                                <td>Dipirona 1g</td>
                                <td>07/07/2025</td>
                                <td>Dra. Marina Costa</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-sm btn-warning" disabled>Pendente</button>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group d-flex justify-content-center">
                                        <button class="btn btn-sm btn-info">Visualizar</button>
                                        <button class="btn btn-sm btn-danger">Cancelar</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Lucas Rocha</td>
                                <td>Losartana 50mg</td>
                                <td>06/07/2025</td>
                                <td>Dr. Tiago Mendes</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-sm btn-success" disabled>Assinada</button>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group d-flex justify-content-center">
                                        <button class="btn btn-sm btn-info">Visualizar</button>
                                        <button class="btn btn-sm btn-danger">Cancelar</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Juliana Castro</td>
                                <td>Metformina 850mg</td>
                                <td>06/07/2025</td>
                                <td>Dr. Tiago Mendes</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-sm btn-danger" disabled>Cancelada</button>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group d-flex justify-content-center">
                                        <button class="btn btn-sm btn-secondary" disabled>Indisponível</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Lateral -->
        <section class="col-lg-4 mb-4">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Últimas Prescrições</h5>
                </div>
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">07/07 - Maria Oliveira - Amoxicilina</li>
                        <li class="list-group-item">07/07 - Rafael Lima - Dipirona</li>
                        <li class="list-group-item">06/07 - Lucas Rocha - Losartana</li>
                        <li class="list-group-item">06/07 - Juliana Castro - Metformina</li>
                        <li class="list-group-item">05/07 - Paulo Mendes - Ibuprofeno</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</main>
';
	}
}
