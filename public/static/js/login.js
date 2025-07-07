$(document).ready(function () {
    document.addEventListener("keydown", function (event) {
        if (event.key === "Enter") {
            event.preventDefault(); // evita submit se for dentro de um form
            document.getElementById("login").click(); // aciona o botão
        }
    });
    $('#registroNome, #registroCpf, #registroEmail, #registroTelefone, #registroSenha, #confirmarSenha').on('input', function () {
        $(this).removeClass('border-danger');
    });
    const adminEmail = 'admin@admin.com';
    const adminSenha = '123456';

    const keyAdmin = 'tabelaUsuarios_' + adminEmail;

    if (!localStorage.getItem(keyAdmin)) {
        const admin = {
            nome: 'Administrador',
            userLogin: adminEmail,
            senha: adminSenha,
            tipo: 'admin'
        };

        localStorage.setItem(keyAdmin, JSON.stringify(admin));
        console.log('Usuário admin criado:', admin);
    }
});


var registro = {};

function cadastro() {
    registro['nome'] = $('#registroNome').val();
    registro['userLogin'] = $('#registroEmail').val();
    registro['telefone'] = $('#registroTelefone').val();
    registro['cpf'] = $('#registroCpf').val();
    registro['senha'] = $('#registroSenha').val();
    registro['tipo'] = 'cliente';

    let check = true;

    if (registro['nome'] === '') {
        $('#registroNome').addClass('border-danger');
        check = false;
    }

    if (registro['userLogin'] === '') {
        $('#registroEmail').addClass('border-danger');
        check = false;
    }

    if (registro['telefone'] === '') {
        $('#registroTelefone').addClass('border-danger');
        check = false;
    }

    if (registro['cpf'] === '') {
        $('#registroCpf').addClass('border-danger');
        check = false;
    }

    if (registro['senha'] === '') {
        $('#registroSenha').addClass('border-danger');
        check = false;
    }

    if ($('#confirmarSenha').val() === '') {
        $('#confirmarSenha').addClass('border-danger');
        check = false;
    }

    if (check === true && $('input[name="termosCondicoes"]:checked').length > 0) {
        const senha = $('#registroSenha').val();
        const confirmarSenha = $('#confirmarSenha').val();
        const email = $('#registroEmail').val().trim();
        const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        // Valida senhas
        if (senha !== confirmarSenha) {
            $('#registroSenha, #confirmarSenha').addClass('border-danger');
            $('#notificacao').removeClass('d-none').text('As senhas não coincidem.');
            return;
        }

        // Valida e-mail
        if (!regexEmail.test(email)) {
            $('#registroEmail').addClass('border-danger');
            $('#notificacao').removeClass('d-none').text('Digite um e-mail válido.');
            return;
        }

        // Tudo certo: salva
        registro['userLogin'] = email;
        $('#responseModal').modal('show');
        localStorage.setItem('tabelaUsuarios_' + registro['userLogin'], JSON.stringify(registro));
    }
}

function senhaMatch() {
    const senha = $('#registroSenha').val();
    const confirmar = $('#confirmarSenha').val();

    $('#registroSenha, #confirmarSenha').removeClass('border-success border-danger');

    if (!senha && !confirmar)
        return;
    if (senha && !confirmar)
        return;

    if (senha !== confirmar) {
        $('#registroSenha, #confirmarSenha').addClass('border-danger');
    } else {
        $('#registroSenha, #confirmarSenha').addClass('border-success');
        $('#notificacao').addClass('d-none');
    }
}

function loginFake() {
    const email = $('#email').val();
    const senha = $('#senha').val();

    const usuario = JSON.parse(localStorage.getItem('tabelaUsuarios_' + email));

    if (usuario && usuario.userLogin === email && usuario.senha === senha) {
        localStorage.setItem('logado', 'true');
        localStorage.setItem('logadoEmail', email); // onde 'email' é o digitado no login
        window.location.href = '/dashboard';
    } else {
        alert('Login inválido.');
    }
}
