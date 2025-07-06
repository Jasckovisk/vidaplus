$(document).ready(function () {
    $('.phone').mask('(00) 00000-0000').on('blur', function () {
        let phone = $(this).val().replace(/\D/g, '');
        if (phone.length === 10) {
            $(this).mask('(00) 0000-0000');
        } else {
            $(this).mask('(00) 00000-0000');
        }
    });
    $(".phone").on("input", function () {
        let input = $(this).val().replace(/\D/g, ""); // só números

        // Limita a 11 dígitos
        input = input.substring(0, 11);

        // Aplica máscara com regex
        if (input.length <= 10) {
            // Fixo: (00) 0000-0000
            input = input.replace(/(\d{2})(\d{4})(\d{0,4})/, "($1) $2-$3");
        } else {
            // Celular: (00) 00000-0000
            input = input.replace(/(\d{2})(\d{5})(\d{0,4})/, "($1) $2-$3");
        }

        $(this).val(input);
    });
    $(".cpf").on("input", function () {
        let input = $(this).val().replace(/\D/g, ""); // remove tudo que não for número

        // Limita a 11 dígitos
        input = input.substring(0, 11);

        // Aplica a máscara de CPF
        input = input.replace(/(\d{3})(\d{0,3})(\d{0,3})(\d{0,2})/, function (_, p1, p2, p3, p4) {
            let result = p1;
            if (p2)
                result += "." + p2;
            if (p3)
                result += "." + p3;
            if (p4)
                result += "-" + p4;
            return result;
        });

        $(this).val(input);
    });
    $(".rg").on("input", function () {
        let input = $(this).val().replace(/\D/g, ""); // remove tudo que não for número

        // Limita a 9 dígitos
        input = input.substring(0, 9);

        // Aplica a máscara de RG: 00.000.000-0
        input = input.replace(/(\d{2})(\d{0,3})(\d{0,3})(\d{0,1})/, function (_, p1, p2, p3, p4) {
            let result = p1;
            if (p2)
                result += "." + p2;
            if (p3)
                result += "." + p3;
            if (p4)
                result += "-" + p4;
            return result;
        });

        $(this).val(input);
    });
    // Bloqueia a digitação de letras e símbolos
    $(".data-nascimento").on("keypress", function (e) {
        const charCode = e.which ? e.which : e.keyCode;

        // Permite apenas números (0 a 9)
        if (charCode < 48 || charCode > 57) {
            e.preventDefault();
        }
    });

// Aplica a máscara conforme o usuário digita
    $(".data-nascimento").on("input", function () {
        let input = $(this).val().replace(/\D/g, ""); // só números

        // Limita a 8 dígitos (DDMMYYYY)
        input = input.substring(0, 8);

        // Pega dia, mês e ano separados
        let dia = input.substring(0, 2);
        let mes = input.substring(2, 4);
        let ano = input.substring(4, 8);

        // Limita dia e mês
        if (dia.length === 2) {
            let d = parseInt(dia);
            if (d < 1)
                d = 1;
            if (d > 31)
                d = 31;
            dia = d.toString().padStart(2, '0');
        }
        if (mes.length === 2) {
            let m = parseInt(mes);
            if (m < 1)
                m = 1;
            if (m > 12)
                m = 12;
            mes = m.toString().padStart(2, '0');
        }

        // Limita ano para não passar do ano atual
        if (ano.length === 4) {
            const anoAtual = new Date().getFullYear();
            let a = parseInt(ano);
            if (a > anoAtual)
                a = anoAtual;
            if (a < 1900)
                a = 1900; // limite inferior, pode ajustar
            ano = a.toString();
        }

        // Monta a data formatada
        let formatted = dia;
        if (mes)
            formatted += '/' + mes;
        if (ano)
            formatted += '/' + ano;

        $(this).val(formatted);
    });
});