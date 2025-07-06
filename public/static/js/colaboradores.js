$(document).ready(function () {
    tabelaColaboradores = $('#tabelaColaboradores').DataTable({
        language: {
            url: "https://cdn.datatables.net/plug-ins/1.13.6/i18n/pt-BR.json"
        },
        pageLength: 10,
        lengthMenu: [10, 25, 50, 100],
        responsive: true
    });
    tabelaPlantoes = $('#tabelaPlantoes').DataTable({
        language: {
            url: "https://cdn.datatables.net/plug-ins/1.13.6/i18n/pt-BR.json"
        },
        pageLength: 10,
        lengthMenu: [10, 25, 50, 100],
        responsive: true
    });
    tabelaEstoque = $('#tabelaEstoque').DataTable({
        language: {
            url: "https://cdn.datatables.net/plug-ins/1.13.6/i18n/pt-BR.json"
        },
        pageLength: 10,
        lengthMenu: [10, 25, 50, 100],
        responsive: true
    });
    tabelaPrescricoes = $('#tabelaPrescricoes').DataTable({
        language: {
            url: "https://cdn.datatables.net/plug-ins/1.13.6/i18n/pt-BR.json"
        },
        pageLength: 10,
        lengthMenu: [10, 25, 50, 100],
        responsive: true
    });
    tabelaLeitos = $('#tabelaLeitos').DataTable({
        language: {
            url: "https://cdn.datatables.net/plug-ins/1.13.6/i18n/pt-BR.json"
        },
        pageLength: 10,
        lengthMenu: [10, 25, 50, 100],
        responsive: true
    });
    tabelaFinanceiro = $('#tabelaFinanceiro').DataTable({
        language: {
            url: "https://cdn.datatables.net/plug-ins/1.13.6/i18n/pt-BR.json"
        },
        pageLength: 10,
        lengthMenu: [10, 25, 50, 100],
        responsive: true
    });
    tabelaAcessos = $('#tabelaAcessos').DataTable({
        language: {
            url: "https://cdn.datatables.net/plug-ins/1.13.6/i18n/pt-BR.json"
        },
        pageLength: 10,
        lengthMenu: [10, 25, 50, 100],
        responsive: true
    });
});