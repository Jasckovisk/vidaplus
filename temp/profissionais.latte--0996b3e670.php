<?php

use Latte\Runtime as LR;

/** source: profissionais.latte */
final class Template_0996b3e670 extends Latte\Runtime\Template
{
	public const Source = 'profissionais.latte';

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
                    <h6 class="text-uppercase text-muted mb-3">Total de Colaboradores</h6>
                    <h2 class="fw-bold">38</h2>
                    <small class="text-success">+4 novos este mês</small>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-4">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-body">
                    <h6 class="text-uppercase text-muted mb-3">Ativos</h6>
                    <h2 class="fw-bold">34</h2>
                    <small class="text-primary">Em atividade</small>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-4">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-body">
                    <h6 class="text-uppercase text-muted mb-3">Afastados</h6>
                    <h2 class="fw-bold">4</h2>
                    <small class="text-warning">Por licença médica</small>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-4">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-body">
                    <h6 class="text-uppercase text-muted mb-3">Última Contratação</h6>
                    <h2 class="fw-bold">05/07/2025</h2>
                    <small class="text-muted">Enfermeira - UTI</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Gráfico e Lista -->
    <div class="row">
        <!-- Gráfico por Setor -->
        <section class="col-lg-8 mb-4">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Distribuição por Setor</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover align-middle mb-0" id="tabelaColaboradores">
                        <thead class="table-light">
                            <tr>
                                <th>Nome</th>
                                <th>Especialidade</th>
                                <th>CRM</th>
                                <th>Departamento</th>
                                <th>Status</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Maria Oliveira</td>
                                <td>Clínica Geral</td>
                                <td>CRM 123456</td>
                                <td>Ambulatório</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-sm btn-success" disabled>Ativo</button>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group d-flex justify-content-center">
                                        <button class="btn btn-sm btn-warning" onclick="editarColaborador(0)">Editar</button>
                                        <button class="btn btn-sm btn-danger" onclick="excluirColaborador(0)">Remover</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Carlos Souza</td>
                                <td>Cardiologia</td>
                                <td>CRM 789123</td>
                                <td>UTI</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-sm btn-success" disabled>Ativo</button>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group d-flex justify-content-center">
                                        <button class="btn btn-sm btn-warning" onclick="editarColaborador(1)">Editar</button>
                                        <button class="btn btn-sm btn-danger" onclick="excluirColaborador(1)">Remover</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Ana Paula Lima</td>
                                <td>Neurologia</td>
                                <td>CRM 654321</td>
                                <td>Consultas Externas</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-sm btn-warning" disabled>Em Férias</button>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group d-flex justify-content-center">
                                        <button class="btn btn-sm btn-warning" onclick="editarColaborador(2)">Editar</button>
                                        <button class="btn btn-sm btn-danger" onclick="excluirColaborador(2)">Remover</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Rafael Mendes</td>
                                <td>Pediatria</td>
                                <td>CRM 987654</td>
                                <td>Pronto Atendimento</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-sm btn-danger" disabled>Inativo</button>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group d-flex justify-content-center">
                                        <button class="btn btn-sm btn-warning" onclick="editarColaborador(3)">Editar</button>
                                        <button class="btn btn-sm btn-danger" onclick="excluirColaborador(3)">Remover</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Juliana Castro</td>
                                <td>Ginecologia</td>
                                <td>CRM 321789</td>
                                <td>Ambulatório</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-sm btn-success" disabled>Ativo</button>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group d-flex justify-content-center">
                                        <button class="btn btn-sm btn-warning" onclick="editarColaborador(4)">Editar</button>
                                        <button class="btn btn-sm btn-danger" onclick="excluirColaborador(4)">Remover</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Lucas Rocha</td>
                                <td>Ortopedia</td>
                                <td>CRM 112233</td>
                                <td>Centro Cirúrgico</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-sm btn-success" disabled>Ativo</button>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group d-flex justify-content-center">
                                        <button class="btn btn-sm btn-warning" onclick="editarColaborador(5)">Editar</button>
                                        <button class="btn btn-sm btn-danger" onclick="excluirColaborador(5)">Remover</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <section class="col-lg-4 mb-4">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Novos Profissionais</h5>
                </div>
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Dr. Lucas Ferreira - Cardiologia</li>
                        <li class="list-group-item">Dra. Júlia Mendes - Pediatria</li>
                        <li class="list-group-item">Enf. Paula Lima - Centro Cirúrgico</li>
                        <li class="list-group-item">Téc. João Silva - Laboratório</li>
                        <li class="list-group-item">Fisioter. Amanda Souza - Reabilitação</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</main>


';
	}
}
