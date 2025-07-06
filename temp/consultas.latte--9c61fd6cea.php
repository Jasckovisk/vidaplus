<?php

use Latte\Runtime as LR;

/** source: consultas.latte */
final class Template_9c61fd6cea extends Latte\Runtime\Template
{
	public const Source = 'consultas.latte';

	public const Blocks = [
		['title' => 'blockTitle', 'scripts' => 'blockScripts', 'modal' => 'blockModal', 'main' => 'blockMain'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo "\n";
		$this->renderBlock('title', get_defined_vars()) /* line 3 */;
		echo "\n";
		$this->renderBlock('scripts', get_defined_vars()) /* line 4 */;
		$this->renderBlock('modal', get_defined_vars()) /* line 8 */;
		$this->renderBlock('main', get_defined_vars()) /* line 89 */;
		echo "\n";
	}


	public function prepare(): array
	{
		extract($this->params);

		$this->parentName = '@master.latte';
		return get_defined_vars();
	}


	/** {block title} on line 3 */
	public function blockTitle(array $ʟ_args): void
	{
		echo 'Consultas';
	}


	/** {block scripts} on line 4 */
	public function blockScripts(array $ʟ_args): void
	{
		echo '<script src="static/js/masks.js"></script>
<script src="static/js/agendamento.js"></script>
';
	}


	/** {block modal} on line 8 */
	public function blockModal(array $ʟ_args): void
	{
		echo '<div class="modal fade" id="modalAgendamento" tabindex="-1" aria-labelledby="modalAgendamentoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <input id="pacienteId" hidden>
                <h1 class="modal-title fs-5" id="insertPacienteModalLabel">Cadastrar Consulta</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="col-12 form-floating mb-3">
                    <select class="form-select" id="tipoConsulta" aria-label="Tipo de Consulta">
                        <option value=""></option>
                        <option value="Consulta Geral">Consulta Geral</option>
                        <option value="Retorno">Retorno</option>
                        <option value="Exame">Exame</option>
                        <option value="Emergência">Emergência</option>
                    </select>
                    <label for="tipoConsulta">Tipo de Consulta</label>
                </div>
                
                <div class="col-12 form-floating mb-3">
                    <select class="form-select" id="doutor" aria-label="Doutor Responsável">
                        <option value=""></option>
                        <option value="Dr. João Silva">Dr. João Silva</option>
                        <option value="Dra. Maria Oliveira">Dra. Maria Oliveira</option>
                        <option value="Dr. Carlos Pereira">Dr. Carlos Pereira</option>
                        <option value="Dra. Ana Souza">Dra. Ana Souza</option>
                        <option value="Dr. Lucas Fernandes">Dr. Lucas Fernandes</option>
                    </select>
                    <label for="doutor">Doutor Responsável</label>
                </div>
                <div class="col-12 form-floating mb-3">
                    <input type="text" class="form-control cpf" id="cpf">
                    <label class="form-label" for="cpf">CPF</label>
                </div>
                <div class="col-12 form-floating mb-3">
                    <input type="date" class="form-control" id="dataConsulta">
                    <label for="dataConsulta">Data Consulta</label>
                </div>

                <div class="col-12 form-floating mb-3">
                    <input type="time" class="form-control" id="horaConsulta">
                    <label for="horaConsulta">Hora da Consulta</label>
                </div>
                <div class="col-12 form-floating mb-3">
                    <textarea class="form-control" id="observacoes" style="height: 100px;"></textarea>
                    <label for="observacoes">Observações / Sintomas</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="insertConsulta();" id="btnSalvar">Salvar</button>
                <button type="button" class="btn btn-success" onclick="updateConsulta();" id="btnEditar">Salvar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="responseModal" tabindex="-1" aria-labelledby="responseModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="responseModalLabel">Cadastro concluído</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body p-4">
                <div class="alert alert-success text-center" role="alert">
                    <i class="fa-solid fa-circle-check text-success fa-4x mb-3"></i>
                    <h4 class="alert-heading" id="modalAlert">Paciente cadastrado com sucesso!</h4>
                    <hr>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-secondary" data-bs-dismiss="modal" onclick="window.location.href = \'/pacientes\';">Fechar</a>
                </div>
            </div>
        </div>
    </div>
</div>

';
	}


	/** {block main} on line 89 */
	public function blockMain(array $ʟ_args): void
	{
		echo '<div class="container py-5 mt-5">
    <div class="container d-flex justify-content-between">
        <div class="container d-flex">
            <i class="fa-solid fa-file-circle-plus fa-4x me-3 mb-4"></i>
            <h1 class="mb-4 text-center">Agendamentos de Consultas</h1>
        </div>
        <div class="container d-flex justify-content-end pe-0">
            <button class="btn btn-icon p-0" data-bs-toggle="tooltip" title="Editar paciente" onclick="modalConsultas();"><i class="fa-solid fa-file-circle-plus fa-2x"></i></button>
        </div>
    </div>
    <div class="card">
        <div class="card-header"><h5>Consultas agendadas</h5></div>
        <div class="card-body p-4">
            <div class="table-responsive">
                <table class="table table-hover mb-0" id="tabelaConsultas">
                    <thead class="table-light">
                        <tr>
                            <th>Paciente</th>
                            <th>Data</th>
                            <th>Hora</th>
                            <th>Tipo</th>
                            <th class="text-end">Ações</th>
                        </tr>
                    </thead>
                    <tbody id="tabelaAgendamentosBody">
                        <!-- Linhas dinâmicas via JS -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



';
	}
}
