<?php

use Latte\Runtime as LR;

/** source: pacientes.latte */
final class Template_97695302ad extends Latte\Runtime\Template
{
	public const Source = 'pacientes.latte';

	public const Blocks = [
		['scripts' => 'blockScripts', 'modal' => 'blockModal', 'main' => 'blockMain'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo "\n";
		$this->renderBlock('scripts', get_defined_vars()) /* line 3 */;
		echo "\n";
		$this->renderBlock('modal', get_defined_vars()) /* line 8 */;
		echo "\n";
		$this->renderBlock('main', get_defined_vars()) /* line 104 */;
	}


	public function prepare(): array
	{
		extract($this->params);

		$this->parentName = 'dashboard.latte';
		return get_defined_vars();
	}


	/** {block scripts} on line 3 */
	public function blockScripts(array $ʟ_args): void
	{
		echo '<script src="static/js/pacientes.js"></script>
<script src="static/js/masks.js"></script>
';
	}


	/** {block modal} on line 8 */
	public function blockModal(array $ʟ_args): void
	{
		echo '<div class="modal fade" id="insertPacienteModal" tabindex="-1" aria-labelledby="insertPacienteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <input id="pacienteId" hidden>
                <h1 class="modal-title fs-5" id="insertPacienteModalLabel">Cadastrar Paciente</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="col-12 form-floating mb-3">
                    <input type="text" class="form-control" id="nome">
                    <label class="form-label" for="nome">Nome completo</label>
                </div>

                <div class="col-12 form-floating mb-3">
                    <input type="text" class="form-control cpf" id="cpf">
                    <label class="form-label" for="cpf">CPF</label>
                </div>

                <div class="col-12 form-floating mb-3">
                    <input type="text" class="form-control rg" id="rg">
                    <label class="form-label" for="rg">RG</label>
                </div>

                <div class="col-12 form-floating mb-3">
                    <input type="text" class="form-control phone" id="telefone">
                    <label class="form-label" for="telefone">Telefone</label>
                </div>
                <div class="col-12 form-floating mb-3">
                    <input type="text" class="form-control" id="email">
                    <label class="form-label" for="email">E-mail</label>
                </div>

                <div class="col-12 form-floating mb-3">
                    <input type="date" class="form-control" id="dataNascimento">
                    <label class="form-label" for="dataNascimento">Data nascimento</label>
                </div>

                <div class="col-12 mb-3 d-flex form-control" id="divGenero">
                    <div class="form-check me-5">
                        <input class="form-check-input" type="radio" name="genero" id="generoMasculino" value="Masculino">
                        <label class="form-check-label" for="generoMasculino">Masculino</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="genero" id="generoFeminino" value="Feminino">
                        <label class="form-check-label" for="generoFeminino">Feminino</label>
                    </div>
                </div>

                <div class="col-12 form-floating mb-3">
                    <input type="text" class="form-control" id="estadoUf">
                    <label class="form-label" for="estadoUf">Estado UF</label>
                </div>

                <div class="col-12 form-floating mb-3">
                    <input type="text" class="form-control" id="cidade">
                    <label class="form-label" for="cidade">Cidade</label>
                </div>

                <div class="col-12 form-floating mb-3">
                    <input type="text" class="form-control" id="endereco">
                    <label class="form-label" for="endereco">Endereço</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" onclick="insertPaciente();" id="btnSalvar">Salvar</button>
                <button type="button" class="btn btn-success" onclick="updatePaciente();" id="btnEditar">Salvar</button>
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


	/** {block main} on line 104 */
	public function blockMain(array $ʟ_args): void
	{
		echo '<div class="container py-5 mt-5">
    <div class="container d-flex justify-content-between">
        <div class="container d-flex">
            <i class="fa-solid fa-users fa-4x me-3 mb-4"></i>
            <h1 class="mb-4 text-center">Painel de Pacientes</h1>
        </div>
        <div class="container d-flex justify-content-end pe-0">
            <button class="btn btn-icon p-0" data-bs-toggle="tooltip" title="Editar paciente" onclick="modalInsertPaciente();"><i class="fa-solid fa-user-plus fa-2x"></i></button>
        </div>
    </div>
    <div class="card">
        <div class="card-header"><h5>Tabela de pacientes</h5></div>
        <div class="card-body p-4">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover align-middle " id="tabelaPacientes">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Idade</th>
                            <th>Sexo</th>
                            <th>Contato</th>
                            <th>Cpf</th>
                            <th>Email</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
';
	}
}
