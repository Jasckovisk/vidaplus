<?php

use Latte\Runtime as LR;

/** source: configuracoes.latte */
final class Template_734a9422d2 extends Latte\Runtime\Template
{
	public const Source = 'configuracoes.latte';

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
        <!-- Cards resumo rápidos -->
        <div class="col-12 col-md-3 mb-3">
            <div class="card shadow-sm rounded-3 border-0">
                <div class="card-body">
                    <h6 class="text-uppercase text-muted mb-2">Versão do Sistema</h6>
                    <h2 class="fw-bold">v2.5.1</h2>
                    <small class="text-success">Atualizado recentemente</small>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-3">
            <div class="card shadow-sm rounded-3 border-0">
                <div class="card-body">
                    <h6 class="text-uppercase text-muted mb-2">Usuários Ativos</h6>
                    <h2 class="fw-bold">134</h2>
                    <small class="text-primary">Em uso agora</small>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-3">
            <div class="card shadow-sm rounded-3 border-0">
                <div class="card-body">
                    <h6 class="text-uppercase text-muted mb-2">Backups Recentes</h6>
                    <h2 class="fw-bold">03</h2>
                    <small class="text-muted">Últimos 7 dias</small>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-3">
            <div class="card shadow-sm rounded-3 border-0">
                <div class="card-body">
                    <h6 class="text-uppercase text-muted mb-2">Alertas Ativos</h6>
                    <h2 class="fw-bold text-danger">7</h2>
                    <small>Problemas críticos</small>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Formulário configurações -->
        <section class="col-lg-8 mb-4">
            <div class="card shadow-sm rounded-3 border-0">
                <div class="card-header bg-white">
                    <h5 class="mb-0">Configurações Gerais</h5>
                </div>
                <div class="card-body">
                    <form id="configSistemaForm">
                        <div class="mb-3">
                            <label for="nomeSistema" class="form-label">Nome do Sistema</label>
                            <input type="text" class="form-control" id="nomeSistema" value="Hospital XYZ" required>
                        </div>
                        <div class="mb-3">
                            <label for="urlSistema" class="form-label">URL do Sistema</label>
                            <input type="url" class="form-control" id="urlSistema" value="https://hospitalxyz.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="fusoHorario" class="form-label">Fuso Horário</label>
                            <select class="form-select" id="fusoHorario" required>
                                <option value="America/Sao_Paulo" selected>America/Sao_Paulo (GMT-3)</option>
                                <option value="America/New_York">America/New_York (GMT-4)</option>
                                <option value="Europe/Lisbon">Europe/Lisbon (GMT+1)</option>
                                <!-- Mais fusos aqui -->
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar Configurações</button>
                    </form>
                </div>
            </div>

            <div class="card shadow-sm rounded-3 border-0 mt-4">
                <div class="card-header bg-white">
                    <h5 class="mb-0">Segurança</h5>
                </div>
                <div class="card-body">
                    <form id="configSegurancaForm">
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="ativar2FA" checked>
                            <label class="form-check-label" for="ativar2FA">
                                Ativar Autenticação de Dois Fatores (2FA)
                            </label>
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" id="bloquearIPSuspeito" checked>
                            <label class="form-check-label" for="bloquearIPSuspeito">
                                Bloquear IPs suspeitos automaticamente
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar Segurança</button>
                    </form>
                </div>
            </div>

            <div class="card shadow-sm rounded-3 border-0 mt-4">
                <div class="card-header bg-white">
                    <h5 class="mb-0">Notificações</h5>
                </div>
                <div class="card-body">
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="notificarEmail" checked>
                        <label class="form-check-label" for="notificarEmail">
                            Notificar por e-mail sobre eventos importantes
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="notificarSMS">
                        <label class="form-check-label" for="notificarSMS">
                            Notificar por SMS
                        </label>
                    </div>
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="notificarPush" checked>
                        <label class="form-check-label" for="notificarPush">
                            Notificações Push no navegador
                        </label>
                    </div>
                    <div class="form-group mb-3">
                        <label for="horarioDoNotificar" class="form-label">Horário preferencial para notificações</label>
                        <input type="time" class="form-control" id="horarioDoNotificar" value="08:00">
                    </div>
                    <div class="form-group mb-3">
                        <label for="frequenciaNotificacoes" class="form-label">Frequência de notificações</label>
                        <select class="form-select" id="frequenciaNotificacoes" required>
                            <option value="imediato" selected>Imediato</option>
                            <option value="diario">Diário</option>
                            <option value="semanal">Semanal</option>
                            <option value="mensal">Mensal</option>
                            <option value="nunca">Nunca</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary ">Salvar Notificações</button>
                </div>
            </div>


        </section>

        <!-- Backup e status -->
        <section class="col-lg-4 mb-4">
            <div class="card shadow-sm rounded-3 border-0">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Backup e Restauração</h5>
                </div>
                <div class="card-body">
                    <p>Último backup automático: <strong>03/07/2025 02:00</strong></p>
                    <button class="btn btn-outline-primary w-100 mb-3">Fazer Backup Agora</button>
                    <button class="btn btn-outline-danger w-100">Restaurar Backup</button>
                </div>
            </div>

            <div class="card shadow-sm rounded-3 border-0 mt-4">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Status do Sistema</h5>
                </div>
                <div class="card-body">
                    <p>Sistema está: <span class="badge bg-success">Online</span></p>
                    <p>Tempo de atividade: <strong>12 dias 4 horas</strong></p>
                    <p>Última verificação: 05/07/2025 15:30</p>
                </div>
            </div>

            <!-- Novas seções -->
            <div class="card shadow-sm rounded-3 border-0 mt-4">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Logs Recentes</h5>
                </div>
                <div class="card-body small" style="max-height: 150px; overflow-y: auto; font-family: monospace;">
                    <ul class="list-unstyled mb-0">
                        <li><span class="text-muted">[05/07 14:55]</span> Usuário João logou com sucesso.</li>
                        <li><span class="text-muted">[05/07 14:50]</span> Backup automático concluído.</li>
                        <li><span class="text-muted">[05/07 14:30]</span> Tentativa de login falhou (IP suspeito).</li>
                        <li><span class="text-muted">[05/07 14:10]</span> Permissão alterada para usuário Maria.</li>
                        <li><span class="text-muted">[05/07 13:45]</span> Sistema atualizado para versão 2.5.1.</li>
                    </ul>
                </div>
            </div>

            <div class="card shadow-sm rounded-3 border-0 mt-4">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Alertas de Segurança</h5>
                </div>
                <div class="card-body">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            IP bloqueado automaticamente
                            <span class="badge bg-danger rounded-pill">3</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Tentativas de acesso não autorizadas
                            <span class="badge bg-warning rounded-pill">7</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            Usuários com senha expirada
                            <span class="badge bg-info rounded-pill">2</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card shadow-sm rounded-3 border-0 mt-4">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Versão do Sistema</h5>
                </div>
                <div class="card-body">
                    <p><strong>2.5.1</strong> — Atualizado em 01/07/2025</p>
                    <a href="#" class="btn btn-sm btn-outline-secondary w-100">Ver notas da versão</a>
                </div>
            </div>

            <div class="card shadow-sm rounded-3 border-0 mt-4">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Links Rápidos</h5>
                </div>
                <div class="card-body">
                    <div class="list-group">
                        <a href="/acessos" class="list-group-item list-group-item-action">Configurações de Usuário</a>
                        <a href="/acessos" class="list-group-item list-group-item-action">Gerenciamento de Permissões</a>
                        <a href="/auditoria" class="list-group-item list-group-item-action">Logs do Sistema</a>
                        <!--<a href="/suporte" class="list-group-item list-group-item-action">Suporte Técnico</a>-->
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

';
	}
}
