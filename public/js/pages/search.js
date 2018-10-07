$(document).ready(function() {
    $('#advanced-search').addClass('hidden');
    $('#navbar-search').addClass('hidden');

    var isAdvanced = false;

    document.getElementById('advanced-button').onclick = function() {
        if (isAdvanced) {
            $('#advanced-search').addClass('hidden');
            setSearchButton(this, 'SHOW ADVANCED SEARCH');
        } else {
            $('#advanced-search').removeClass('hidden');
            setSearchButton(this, 'HIDE ADVANCED SEARCH');
        }
        isAdvanced = !isAdvanced;
    };

    function setSearchButton(button, text) {
        button.innerHTML = text + '<i class="material-icons right">settings</i>';
    }
});
