<?php

use Latte\Runtime as LR;

/** source: registro.latte */
final class Template_5b93863cce extends Latte\Runtime\Template
{
	public const Source = 'registro.latte';

	public const Blocks = [
		['scripts' => 'blockScripts', 'modal' => 'blockModal', 'main' => 'blockMain'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		echo "\n";
		$this->renderBlock('scripts', get_defined_vars()) /* line 3 */;
		echo '

';
		$this->renderBlock('modal', get_defined_vars()) /* line 9 */;
		echo "\n";
		$this->renderBlock('main', get_defined_vars()) /* line 34 */;
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


	/** {block modal} on line 9 */
	public function blockModal(array $ʟ_args): void
	{
		echo '<div class="modal fade animate__animated animate__bounce" id="responseModal" tabindex="-1" aria-labelledby="responseModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="responseModalLabel">Cadastro concluído</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body p-4">
                <div class="alert alert-success text-center" role="alert">
                    <i class="fa-solid fa-circle-check text-success fa-4x mb-3"></i>
                    <h4 class="alert-heading">Cadastro concluído com sucesso!</h4>
                    <p>Seja bem-vindo à VidaPlus! Sua conta foi criada com sucesso.</p>
                    <hr>
                    <p class="mb-0">Enviamos um e-mail de confirmação para você. Por favor, verifique sua caixa de entrada (ou a pasta de spam) e siga as instruções para ativar sua conta.</p>
                </div>
            </div>
            <div class="modal-footer">
                <a class="btn btn-secondary" data-bs-dismiss="modal" onclick="window.location.href = \'/\';">Fechar</a>
            </div>
        </div>
    </div>
</div>
';
	}


	/** {block main} on line 34 */
	public function blockMain(array $ʟ_args): void
	{
		echo '<section class="">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <!-- Lado da imagem -->
            <div class="h-100 p-0" style="background-image: url(\'static/images/blur-hospital.jpg\'); background-size: cover; background-position: center;">
                <div class="d-flex flex-column h-100 justify-content-center align-items-center text-white bg-secondary bg-opacity-50 p-5">
                    <div class="col-md-4 col-lg-3 d-flex align-items-center justify-content-center bg-light p-4 border card shadow">
                        <div class="w-100 p-4">
                            <h2 class="mb-4 fw-semibold text-center">Cadastro Vida<span class="text-danger">Plus</span></h2>
                            <div class="mb-3 form-floating">
                                <input type="text" class="form-control" id="registroNome" placeholder="Digite seu nome">
                                <label for="nome" class="form-label text-muted">Nome completo</label>
                            </div>
                            <div class="mb-3 form-floating">
                                <input type="text" class="form-control cpf" id="registroCpf" placeholder="Digite seu cpf" required>
                                <label for="registroCpf" class="form-label text-muted">CPF</label>
                            </div>
                            <div class="mb-3 form-floating">
                                <input type="email" class="form-control" id="registroEmail" placeholder="Digite seu e-mail" required>
                                <label for="email" class="form-label text-muted">E-mail</label>
                            </div>
                            <div class="mb-3 form-floating">
                                <input type="phone" class="form-control phone" id="registroTelefone" placeholder="Digite seu e-mail" required>
                                <label for="telefone" class="form-label text-muted">Telefone</label>
                            </div>
                            <div class="mb-4 form-floating">
                                <input type="password" class="form-control" id="registroSenha" oninput="senhaMatch();" placeholder="Digite sua senha" required>
                                <label for="registroSenha" class="form-label text-muted">Senha</label>
                            </div>
                            <div class="mb-4 form-floating">
                                <input type="password" class="form-control" id="confirmarSenha" oninput="senhaMatch();" placeholder="Digite sua senha" required>
                                <label for="confirmarSenha" class="form-label text-muted">Confirmar senha</label>
                            </div>
                            <div class="d-grid">
                                <button type="button" class="btn btn-success btn-lg rounded-3" id="login" onclick="cadastro();">Cadastrar</button>
                            </div>
                            <div class="text-center pt-2">
                                <div class="form-check text-start mt-3">
                                    <input class="form-check-input" type="checkbox" id="termosCondicoes" name="termosCondicoes" value="1" required>
                                    <label class="form-check-label" for="termosCondicoes">
                                        Concordo com os <a href="#" class="text-decoration-underline text-primary">termos e condições</a> de uso da VidaPlus.
                                    </label>
                                </div>
                            </div>
                            <div class="text-center mt-4 d-flex flex-column">
                                <small class="text-danger d-none" id="notificacao">Senhas precisam ser iguais!</small>
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
