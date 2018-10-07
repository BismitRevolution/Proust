$(document).ready(function() {
    $('#sidebar-auth').addClass('hidden');

    document.getElementById('btn-existing').onclick = function() {
        $('#register-existing').removeClass('hidden');
        $('#register-new').addClass('hidden');
    };

    document.getElementById('btn-new').onclick = function() {
        $('#register-existing').addClass('hidden');
        $('#register-new').removeClass('hidden');
    };
});
