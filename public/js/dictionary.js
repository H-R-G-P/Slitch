$("#select-sorting").on('change', function() {
    let url_string = window.location.href;
    let url = new URL(url_string);
    window.location.href = url.pathname + '?sortBy=' + this.selectedOptions[0].value;
});

$('#detPdfBtn').on('click', function () {

})