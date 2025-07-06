<?php

use Phroute\Phroute\RouteCollector;

return function (Phroute\Phroute\RouteCollector $router, $latte) {
    $router->get('/', function () use ($latte) {
        return $latte->renderToString('index.latte', ['title' => 'Página Inicial']);
    });

    $router->post('/registro', function () {
        // Captura todos os dados enviados via POST
        $dados = $_POST;

        // Converte para JSON formatado
        $json = json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

        // Salva em um arquivo
        file_put_contents(__DIR__ . '/../data/registro.json', $json);

        // Retorna resposta simples (pode ser uma view, um echo, etc.)
        return 'Dados recebidos e salvos com sucesso.';
    });

    $router->get('/sobre', function () use ($latte) {
        return $latte->renderToString('sobre.latte', ['title' => 'Página Inicial']);
    });
    $router->get('/contato', function () use ($latte) {
        return $latte->renderToString('contato.latte', ['title' => 'Página contato']);
    });
    $router->get('/servicos', function () use ($latte) {
        return $latte->renderToString('servicos.latte', ['title' => 'Página servicos']);
    });
    $router->get('/registro', function () use ($latte) {
        return $latte->renderToString('registro.latte', ['title' => 'Página Registro']);
    });
    $router->get('/pacientes', function () use ($latte) {
        return $latte->renderToString('pacientes.latte', ['title' => 'Página pacientes']);
    });
    $router->get('/consultas', function () use ($latte) {
        return $latte->renderToString('consultas.latte', ['title' => 'Página consultas']);
    });
    $router->get('/prontuarios', function () use ($latte) {
        return $latte->renderToString('prontuarios.latte', ['title' => 'Página prontuarios']);
    });
    $router->get('/telemedicina', function () use ($latte) {
        return $latte->renderToString('telemedicina.latte', ['title' => 'Página telemedicina']);
    });
    $router->get('/profissionais', function () use ($latte) {
        return $latte->renderToString('profissionais.latte', ['title' => 'Página profissionais']);
    });

    $router->get('/agendas', function () use ($latte) {
        return $latte->renderToString('agendas.latte', ['title' => 'Página agendas']);
    });
    $router->get('/prescricoes', function () use ($latte) {
        return $latte->renderToString('prescricoes.latte', ['title' => 'Página prescricoes']);
    });
    $router->get('/leitos', function () use ($latte) {
        return $latte->renderToString('leitos.latte', ['title' => 'Página leitos']);
    });
    $router->get('/estoque', function () use ($latte) {
        return $latte->renderToString('estoque.latte', ['title' => 'Página estoque']);
    });
    $router->get('/financeiro', function () use ($latte) {
        return $latte->renderToString('financeiro.latte', ['title' => 'Página financeiro']);
    });
    $router->get('/acessos', function () use ($latte) {
        return $latte->renderToString('acessos.latte', ['title' => 'Página acessos']);
    });
    $router->get('/auditoria', function () use ($latte) {
        return $latte->renderToString('auditoria.latte', ['title' => 'Página auditoria']);
    });
    $router->get('/configuracoes', function () use ($latte) {
        return $latte->renderToString('configuracoes.latte', ['title' => 'Página configuracoes']);
    });

    $router->get('/perfil', function () use ($latte) {
        return $latte->renderToString('perfil.latte', ['title' => 'Página perfil']);
    });

    $router->get('/login', function () use ($latte) {
        return $latte->renderToString('login.latte', ['title' => 'Página Login']);
    });

    $router->get('/dashboard', function () use ($latte) {
        return $latte->renderToString('dashboard.latte', ['title' => 'Página Dashboard']);
    });

    $router->get('/user/{id}', function ($id) use ($latte) {
        return $latte->renderToString('user.latte', ['userId' => $id]);
    });
};
