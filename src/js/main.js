$('.exit-button').on('click', function (event) {
    event.preventDefault();
    let url = "index.php";
    $(location).attr('href',url);
});