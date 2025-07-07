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
    $(".email").on("input", function () {
        const email = $(this).val().trim();

        // Regex simples para e-mail válido
        const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

        if (regexEmail.test(email)) {
            $(this).removeClass("is-invalid").addClass("is-valid");
        } else {
            $(this).removeClass("is-valid").addClass("is-invalid");
        }
    });
});