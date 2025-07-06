<?php

use Latte\Runtime as LR;

/** source: auditoria.latte */
final class Template_7fa2d27b0a extends Latte\Runtime\Template
{
	public const Source = 'auditoria.latte';

	public const Blocks = [
		['scripts' => 'blockScripts', 'modal' => 'blockModal'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		$this->renderBlock('scripts', get_defined_vars()) /* line 2 */;
		echo "\n";
		$this->renderBlock('modal', get_defined_vars()) /* line 8 */;
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


	/** {block modal} on line 8 */
	public function blockModal(array $ʟ_args): void
	{
		echo '<main class="container py-4 mt-5">
    <div class="row mb-4">
        <!-- Cards resumo -->
        <div class="col-12 col-md-3 mb-3">
            <div class="card shadow-sm rounded-3 border-0">
                <div class="card-body">
                    <h6 class="text-uppercase text-muted mb-2">Total de Logs</h6>
                    <h2 class="fw-bold">12.345</h2>
                    <small class="text-success">+8% nas últimas 24h</small>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-3">
            <div class="card shadow-sm rounded-3 border-0">
                <div class="card-body">
                    <h6 class="text-uppercase text-muted mb-2">Alertas Críticos</h6>
                    <h2 class="fw-bold text-danger">42</h2>
                    <small>Últimas 48 horas</small>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-3">
            <div class="card shadow-sm rounded-3 border-0">
                <div class="card-body">
                    <h6 class="text-uppercase text-muted mb-2">Usuários Monitorados</h6>
                    <h2 class="fw-bold">128</h2>
                    <small class="text-primary">Ativos no sistema</small>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-3">
            <div class="card shadow-sm rounded-3 border-0">
                <div class="card-body">
                    <h6 class="text-uppercase text-muted mb-2">Último Evento</h6>
                    <h2 class="fw-bold">05/07/2025 14:22</h2>
                    <small>Login suspeito detectado</small>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Tabela principal de logs -->
        <section class="col-lg-8 mb-4">
            <div class="card shadow-sm rounded-3 border-0">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Registro de Logs</h5>
                    <input type="search" class="form-control form-control-sm w-50" placeholder="Buscar por usuário, ação, IP..." aria-label="Filtro de logs" id="logSearchInput" />
                </div>
                <div class="card-body p-0" style="max-height: 480px;">
                    <table class="table table-striped table-bordered table-hover align-middle mb-0" id="tabelaAuditoria">
                        <thead class="table-light sticky-top">
                            <tr>
                                <th>Data / Hora</th>
                                <th>Usuário</th>
                                <th>Ação</th>
                                <th>IP</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody id="logTableBody">
                            <!-- Exemplo de linhas -->
                            <tr>
                                <td>05/07/2025 14:22</td>
                                <td>joaosilva</td>
                                <td>Login falhou</td>
                                <td>192.168.1.10</td>
                                <td><span class="badge bg-danger">Crítico</span></td>
                            </tr>
                            <tr>
                                <td>05/07/2025 13:55</td>
                                <td>mariaramos</td>
                                <td>Alteração de permissões</td>
                                <td>192.168.1.25</td>
                                <td><span class="badge bg-warning text-dark">Alerta</span></td>
                            </tr>
                            <tr>
                                <td>05/07/2025 12:30</td>
                                <td>admin</td>
                                <td>Login bem-sucedido</td>
                                <td>192.168.1.1</td>
                                <td><span class="badge bg-success">Normal</span></td>
                            </tr>
                            <!-- ... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Coluna lateral com eventos críticos -->
        <section class="col-lg-4 mb-4">
            <div class="card shadow-sm rounded-3 border-0">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Últimos Eventos Críticos</h5>
                </div>
                <div class="card-body p-0" style="max-height: 480px; overflow-y: auto;">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <strong>05/07/2025 14:22</strong><br/>
                            <small>Falha de login - joaosilva - IP: 192.168.1.10</small>
                        </li>
                        <li class="list-group-item">
                            <strong>04/07/2025 18:10</strong><br/>
                            <small>Alteração de permissões - mariaramos</small>
                        </li>
                        <li class="list-group-item">
                            <strong>04/07/2025 09:00</strong><br/>
                            <small>Tentativa de acesso negado - usuario123</small>
                        </li>
                        <li class="list-group-item">
                            <strong>03/07/2025 15:45</strong><br/>
                            <small>Usuário desativado - pedro.silva</small>
                        </li>
                        <li class="list-group-item">
                            <strong>02/07/2025 11:30</strong><br/>
                            <small>Login bem-sucedido - admin</small>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</main>
';
	}
}
