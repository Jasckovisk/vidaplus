$(document).ready(function () {
    if (localStorage.getItem('logado') !== 'true') {
        window.location.href = '/login';
    }
});

if (localStorage.getItem('logado') !== 'true') {
    window.location.href = '/login';
}
function logout() {
    localStorage.removeItem('logado');
    window.location.href = '/login';
}

