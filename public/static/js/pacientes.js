$(document).ready(function () {
    $('#nome, #cpf, #rg, #email, #telefone,#dataNascimento, #estadoUf,#cidade, #endereco, #divGenero').on('input', function () {
        $(this).removeClass('border-danger');
    });
    tabelaPacientes = $('#tabelaPacientes').DataTable({
        language: {
            url: "https://cdn.datatables.net/plug-ins/1.13.6/i18n/pt-BR.json"
        },
        pageLength: 5,
        lengthMenu: [5, 10, 25, 50, 100],
        responsive: true
    });
    tabelaAuditoria = $('#tabelaAuditoria').DataTable({
        language: {
            url: "https://cdn.datatables.net/plug-ins/1.13.6/i18n/pt-BR.json"
        },
        pageLength: 5,
        lengthMenu: [5, 10, 25, 50, 100],
        responsive: true
    });
    const ctx = document.getElementById('myChart');
    const ctx2 = document.getElementById('myChartFinanceiro');
    new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Clínico Geral', 'Pediatria', 'Cardiologia', 'Ortopedia', 'Ginecologia', 'Dermatologia'],
            datasets: [{
                    label: 'Quantidade de Atendimentos',
                    data: [35, 20, 12, 8, 15, 10],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
        },
        options: {
            plugins:{
              legend:{
                   position: 'right' 
              }  
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    new Chart(ctx2, {
        type: 'line',
        data: {
            labels: ['Clínico Geral', 'Pediatria', 'Cardiologia', 'Ortopedia', 'Ginecologia', 'Dermatologia'],
            datasets: [{
                    label: 'Quantidade de Atendimentos',
                    data: [35, 20, 12, 8, 15, 10],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
        },
        options: {
            plugins:{
              legend:{
                   position: 'bottom' 
              }  
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    iniciaTabela();
});
var key;
var dadosPacientes = [];
function modalInsertPaciente() {
    $('#btnSalvar').removeClass('d-none');
    $('#btnEditar').addClass('d-none');
    $('#insertPacienteModal').modal('show');
    $('#nome, #cpf, #rg, #telefone, #email, #dataNascimento, #estadoUf, #cidade, #endereco').val('');
    $('input[name="genero"]').prop('checked', false);
}

function modalEditPaciente(id) {
     $('#btnSalvar').addClass('d-none');
     $('#pacienteId').val(id);
    const key = 'pacienteFake_' + id;
    const paciente = JSON.parse(localStorage.getItem(key));

    if (!paciente) {
        alert('Paciente não encontrado.');
        return;
    }
    $('#nome').val(paciente.nome);
    $('#cpf').val(paciente.cpf);
    $('#rg').val(paciente.rg);
    $('#telefone').val(paciente.telefone);
    $('#email').val(paciente.email);
    $('#dataNascimento').val(paciente.dataNascimento);
    $('#estadoUf').val(paciente.estadoUf);
    $('#cidade').val(paciente.cidade);
    $('#endereco').val(paciente.endereco);
    $(`input[name="genero"][value="${paciente.genero}"]`).prop('checked', true);

    $('#formPaciente').data('editar-id', id);

    $('#btnSalvarPaciente').text('Atualizar').attr('onclick', 'updatePaciente()');

    $('#insertPacienteModal').modal('show');
}



function insertPaciente() {
    let saida = {
        nome: $('#nome').val().trim(),
        cpf: $('#cpf').val().trim(),
        rg: $('#rg').val().trim(),
        telefone: $('#telefone').val().trim(),
        email: $('#email').val().trim(),
        dataNascimento: $('#dataNascimento').val().trim(),
        genero: $('input[name="genero"]:checked').val(),
        estadoUf: $('#estadoUf').val().trim(),
        cidade: $('#cidade').val().trim(),
        endereco: $('#endereco').val().trim()
    };
    let check = true;
    $('.border-danger').removeClass('border-danger');
    $('#divGenero').removeClass('border border-danger');
    for (let campo in saida) {
        if (saida[campo] === '' || saida[campo] === null) {
            $(`#${campo}`).addClass('border-danger');
            check = false;
        }
    }

    if (!saida['genero']) {
        $('#divGenero').addClass('border border-danger');
        check = false;
    }

    if (!check) {
        alert('Preencha todos os campos obrigatórios.');
        return;
    }

    for (let i = 0; i < localStorage.length; i++) {
        const key = localStorage.key(i);
        if (key.startsWith('pacienteFake_')) {
            const paciente = JSON.parse(localStorage.getItem(key));
            if (paciente && paciente.cpf === saida.cpf) {
                $('#cpf').addClass('border-danger');
                alert('CPF já está cadastrado para outro paciente.');
                return;
            }
            if (paciente && paciente.email === saida.email) {
                $('#email').addClass('border-danger');
                alert('E-mail já está cadastrado para outro paciente.');
                return;
            }
        }
    }

    let lastId = localStorage.getItem('pacienteFake_lastId');
    if (lastId === null || isNaN(parseInt(lastId))) {
        lastId = 1;
    } else {
        lastId = parseInt(lastId) + 1;
    }

    saida['id'] = lastId;
    localStorage.setItem('pacienteFake_lastId', lastId);
    localStorage.setItem('pacienteFake_' + lastId, JSON.stringify(saida));
    $('#insertPacienteModal').modal('hide');
    $('#responseModal').modal('show');
    // Atualiza a tabela, se função existir
    if (typeof iniciaTabela === 'function') {
        iniciaTabela();
    }
}



function iniciaTabela() {
    let myData = [];
    let dadosPacientes = {};
    Object.keys(localStorage).forEach(key => {
        if (key.startsWith('pacienteFake_')) {
            const paciente = JSON.parse(localStorage.getItem(key));
            acoes = `
            <div class=btn-group>
            <button class="btn btn-sm btn-success " onclick="modalEditPaciente(${paciente.id})">Editar</button>
            <button class="btn btn-sm btn-danger" onclick="excluirPaciente(${paciente.id})">Excluir</button>
            </div>
        `;
            if (typeof paciente.id !== 'undefined') {
                const linha = [
                    paciente.id,
                    paciente.nome,
                    calculaIdadeSimples(paciente.dataNascimento),
                    paciente.genero,
                    paciente.cpf || '-',
                    paciente.telefone,
                    paciente.email || '-',
                    acoes
                ];
                dadosPacientes[paciente.id] = paciente;
                myData.push(linha);
            }
        }
    });
    const tabelaPacientes = $('#tabelaPacientes').DataTable();
    tabelaPacientes.clear();
    tabelaPacientes.rows.add(myData);
    tabelaPacientes.draw();
}

function calculaIdadeSimples(dataNascimentoStr) {
    if (!dataNascimentoStr)
        return null;
    // Supondo formato DD/MM/AAAA
    const ano = parseInt(dataNascimentoStr.split('/')[2], 10);
    if (isNaN(ano))
        return null;
    const anoAtual = new Date().getFullYear();
    return anoAtual - (ano + 2000);
}

function excluirPaciente(id) {
    const chave = 'pacienteFake_' + id;

    if (localStorage.getItem(chave)) {
        const confirmar = confirm('Tem certeza que deseja excluir este paciente?');
        if (confirmar) {
            localStorage.removeItem(chave);
            console.log('Paciente removido com ID:', id);

            // Recarrega a tabela, se função existir
            if (typeof iniciaTabela === 'function') {
                iniciaTabela();
            }

            alert('Paciente excluído com sucesso!');
        }
    } else {
        alert('Paciente não encontrado.');
    }
}

function updatePaciente() {
    let id = $('#pacienteId').val(); // ID armazenado no modo edição
    if (!id) {
        alert('ID do paciente não encontrado para atualização.');
        return;
    }

    let saida = {
        id: id,
        nome: $('#nome').val().trim(),
        cpf: $('#cpf').val().trim(),
        rg: $('#rg').val().trim(),
        telefone: $('#telefone').val().trim(),
        email: $('#email').val().trim(),
        dataNascimento: $('#dataNascimento').val().trim(),
        genero: $('input[name="genero"]:checked').val(),
        estadoUf: $('#estadoUf').val().trim(),
        cidade: $('#cidade').val().trim(),
        endereco: $('#endereco').val().trim()
    };

    let check = true;
    $('.border-danger').removeClass('border-danger');
    $('#divGenero').removeClass('border border-danger');

    for (let campo in saida) {
        if (campo !== 'id' && (saida[campo] === '' || saida[campo] === null)) {
            $(`#${campo}`).addClass('border-danger');
            check = false;
        }
    }

    if (!saida.genero) {
        $('#divGenero').addClass('border border-danger');
        check = false;
    }

    if (!check) {
        alert('Preencha todos os campos obrigatórios.');
        return;
    }

    for (let i = 0; i < localStorage.length; i++) {
        const key = localStorage.key(i);
        if (key.startsWith('pacienteFake_')) {
            const paciente = JSON.parse(localStorage.getItem(key));
            if (!paciente) continue;

            if (paciente.id != id) {
                if (paciente.cpf === saida.cpf) {
                    $('#cpf').addClass('border-danger');
                    alert('CPF já está cadastrado para outro paciente.');
                    return;
                }
                if (paciente.email === saida.email) {
                    $('#email').addClass('border-danger');
                    alert('E-mail já está cadastrado para outro paciente.');
                    return;
                }
            }
        }
    }

    localStorage.setItem('pacienteFake_' + id, JSON.stringify(saida));

    $('#insertPacienteModal').modal('hide');
    $('#responseModal').modal('show');
    $('#modalAlert').text('Dados do paciente atualizados com sucesso!');
    $('#formPaciente').removeData('editar-id');

    if (typeof iniciaTabela === 'function') {
        iniciaTabela();
    }
}

