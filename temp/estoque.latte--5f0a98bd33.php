<?php

use Latte\Runtime as LR;

/** source: estoque.latte */
final class Template_5f0a98bd33 extends Latte\Runtime\Template
{
	public const Source = 'estoque.latte';

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
                    <h6 class="text-uppercase text-muted mb-3">Itens em Estoque</h6>
                    <h2 class="fw-bold">1.245</h2>
                    <small class="text-success">+120 recebidos esta semana</small>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-4">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-body">
                    <h6 class="text-uppercase text-muted mb-3">Itens Críticos</h6>
                    <h2 class="fw-bold text-danger">6</h2>
                    <small class="text-danger">estoque baixo</small>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-4">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-body">
                    <h6 class="text-uppercase text-muted mb-3">Última Reposição</h6>
                    <h2 class="fw-bold">05/07/2025</h2>
                    <small class="text-muted">Enfermaria - Luvas e Soro</small>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-3 mb-4">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-body">
                    <h6 class="text-uppercase text-muted mb-3">Total de Categorias</h6>
                    <h2 class="fw-bold">24</h2>
                    <small class="text-primary">medicamentos, EPIs, materiais</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabela de suprimentos -->
    <div class="row">
        <section class="col-lg-8 mb-4">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Estoque Atual</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered table-hover align-middle mb-0" id="tabelaEstoque">
                        <thead class="table-light">
                            <tr>
                                <th>Item</th>
                                <th>Categoria</th>
                                <th>Quantidade</th>
                                <th>Unidade</th>
                                <th>Local</th>
                                <th>Status</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Luvas Cirúrgicas</td>
                                <td>EPIs</td>
                                <td>320</td>
                                <td>Caixas</td>
                                <td>Almoxarifado Central</td>
                                <td> 
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-sm btn-warning" disabled>Atenção</button>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group d-flex justify-content-center">
                                        <button class="btn btn-sm btn-warning">Editar</button>
                                        <button class="btn btn-sm btn-danger">Baixar</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Soro Fisiológico 0.9%</td>
                                <td>Medicamentos</td>
                                <td>75</td>
                                <td>Unidades</td>
                                <td>Farmácia</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-sm btn-warning" disabled>Atenção</button>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group d-flex justify-content-center">
                                        <button class="btn btn-sm btn-warning">Editar</button>
                                        <button class="btn btn-sm btn-danger">Baixar</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Máscaras N95</td>
                                <td>EPIs</td>
                                <td>12</td>
                                <td>Caixas</td>
                                <td>UTI</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-sm btn-danger" disabled>Crítico</button>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group d-flex justify-content-center">
                                        <button class="btn btn-sm btn-warning">Reposição</button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Seringas 5ml</td>
                                <td>Materiais</td>
                                <td>540</td>
                                <td>Unidades</td>
                                <td>Centro Cirúrgico</td>
                                <td>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-sm btn-success" disabled>Normal</button>
                                    </div>
                                </td>
                                <td>
                                    <div class="btn-group d-flex justify-content-center">
                                        <button class="btn btn-sm btn-warning">Editar</button>
                                        <button class="btn btn-sm btn-danger">Baixar</button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Lateral - Entradas Recentes -->
        <section class="col-lg-4 mb-4">
            <div class="card shadow-sm border-0 rounded-3">
                <div class="card-header bg-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Últimas Entradas</h5>
                </div>
                <div class="card-body p-0">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">06/07 - Álcool 70% - 200 unidades</li>
                        <li class="list-group-item">06/07 - Luvas - 100 caixas</li>
                        <li class="list-group-item">05/07 - Ataduras - 50 rolos</li>
                        <li class="list-group-item">04/07 - Seringas - 300 unidades</li>
                        <li class="list-group-item">03/07 - Máscaras Cirúrgicas - 500 unidades</li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</main>

';
	}
}
