$(document).ready(function () {
    tabelaConsultas = $('#tabelaConsultas').DataTable({
        language: {
            url: "https://cdn.datatables.net/plug-ins/1.13.6/i18n/pt-BR.json"
        },
        pageLength: 5,
        lengthMenu: [5, 10, 25, 50, 100],
        responsive: true
    });
    tabelaTelemedicina = $('#tabelaTelemedicina').DataTable({
        language: {
            url: "https://cdn.datatables.net/plug-ins/1.13.6/i18n/pt-BR.json"
        },
        pageLength: 5,
        lengthMenu: [5, 10, 25, 50, 100],
        responsive: true
    });
    
    iniciaTabela();
});

var dadosConsultas = [];

function angendarConsulta() {
    msgError = "";
    saida = {};
    saida["nome"] = $("#nome").val();
    saida["email"] = $("#email").val();
    saida["telefone"] = parseInt($("#telefone").val());
    saida["mensagem"] = $("#mensagem").val();
    saida["consulta"] = $("#tipoConsulta")[0].selectize.getValue();

    if (saida["consulta"] == "") {
        msgError += "Selecione um tipo de consulta.\n";
    }
    if (saida["nome"] == "") {
        msgError += "Preencha o campo nome.\n";
    }
    if (saida["email"] == "") {
        msgError += "Preencha o campo e-mail.\n";
    }
    if (saida["telefone"] == "") {
        msgError += "Preencha o campo telefone.\n";
    }
    if (msgError !== "") {
        document.getElementById("toastMsg").innerText = msgError;
        const toast = new bootstrap.Toast(document.getElementById("liveToast"));
        toast.show();
    } else {
        $("#consultaModal").modal("hide");
        $("#responseModal").modal("show");
    }
}

function modalConsultas() {
    $("#modalAgendamento").modal("show");
    $("#btnEditar").addClass("d-none");
    $("#btnSalvar").removeClass("d-none")
}
function modalEditarConsultas() {
    $("#btnSalvar").addClass("d-none");
    $("#btnEditar").removeClass("d-none")
}

function insertConsulta() {
    let consulta = {
        tipoConsulta: $('#tipoConsulta').val().trim(),
        doutor: $('#doutor').val().trim(),
        cpf: $('#cpf').val().trim(),
        dataConsulta: $('#dataConsulta').val().trim(),
        horaConsulta: $('#horaConsulta').val().trim(),
        observacoes: $('#observacoes').val().trim()
    };

    let check = true;
    $('.border-danger').removeClass('border-danger');

    for (let campo in consulta) {
        if (consulta[campo] === '' || consulta[campo] === null) {
            $(`#${campo}`).addClass('border-danger');
            check = false;
        }
    }

    if (!check) {
        alert('Preencha todos os campos obrigatórios.');
        return;
    }

    let lastId = localStorage.getItem('agendamento_lastId');
    if (lastId === null || isNaN(parseInt(lastId))) {
        lastId = 1;
    } else {
        lastId = parseInt(lastId) + 1;
    }

    consulta['id'] = lastId;
    localStorage.setItem('agendamento_lastId', lastId);

    let agendamentos = JSON.parse(localStorage.getItem('agendamentos_consultas')) || [];
    agendamentos.push(consulta);
    localStorage.setItem('agendamentos_consultas', JSON.stringify(agendamentos));

    $('#modalAgendamento').modal('hide');
    alert('Consulta cadastrada com sucesso!');
    carregarTabelaAgendamentos();
}

function updateConsulta() {
    const id = $('#pacienteId').val();
    if (!id) {
        alert('ID da consulta não encontrado para edição.');
        return;
    }

    let agendamentos = JSON.parse(localStorage.getItem('agendamentos_consultas')) || [];
    const index = agendamentos.findIndex(c => c.id == id);

    if (index === -1) {
        alert('Consulta não encontrada para edição.');
        return;
    }

    agendamentos[index] = {
        id: parseInt(id),
        tipoConsulta: $('#tipoConsulta').val().trim(),
        doutor: $('#doutor').val().trim(),
        cpf: $('#cpf').val().trim(),
        dataConsulta: $('#dataConsulta').val().trim(),
        horaConsulta: $('#horaConsulta').val().trim(),
        observacoes: $('#observacoes').val().trim()
    };

    localStorage.setItem('agendamentos_consultas', JSON.stringify(agendamentos));
    $('#modalAgendamento').modal('hide');
    alert('Consulta atualizada com sucesso!');
    carregarTabelaAgendamentos();
}

function excluirConsulta(id) {
    let agendamentos = JSON.parse(localStorage.getItem('agendamentos_consultas')) || [];
    agendamentos = agendamentos.filter(c => c.id != id);
    localStorage.setItem('agendamentos_consultas', JSON.stringify(agendamentos));
    alert('Consulta excluída com sucesso!');
    carregarTabelaAgendamentos();
}

function iniciaTabela() {
    let agendamentos = JSON.parse(localStorage.getItem('agendamentos_consultas')) || [];
    const tbody = document.getElementById('tabelaAgendamentosBody');
    tbody.innerHTML = '';

    if (agendamentos.length === 0) {
        tbody.innerHTML = '<tr><td colspan="6" class="text-center">Nenhuma consulta encontrada.</td></tr>';
        return;
    }

    agendamentos.forEach(consulta => {
        const tr = document.createElement('tr');
        tr.innerHTML = `
            <td>${consulta.tipoConsulta}</td>
            <td>${consulta.doutor}</td>
            <td>${consulta.cpf}</td>
            <td>${consulta.dataConsulta}</td>
            <td>${consulta.horaConsulta}</td>
            <td class="text-end">
                <button class="btn btn-sm btn-warning me-2" onclick="editarConsulta(${consulta.id})">Editar</button>
                <button class="btn btn-sm btn-danger" onclick="excluirConsulta(${consulta.id})">Excluir</button>
            </td>
        `;
        tbody.appendChild(tr);
    });
}

function editarConsulta(id) {
    const agendamentos = JSON.parse(localStorage.getItem('agendamentos_consultas')) || [];
    const consulta = agendamentos.find(c => c.id == id);

    if (!consulta) {
        alert('Consulta não encontrada.');
        return;
    }

    $('#pacienteId').val(consulta.id);
    $('#tipoConsulta').val(consulta.tipoConsulta);
    $('#doutor').val(consulta.doutor);
    $('#cpf').val(consulta.cpf);
    $('#dataConsulta').val(consulta.dataConsulta);
    $('#horaConsulta').val(consulta.horaConsulta);
    $('#observacoes').val(consulta.observacoes);

    $('#btnSalvar').hide();
    $('#btnEditar').show();
    $('#modalAgendamento').modal('show');
}
