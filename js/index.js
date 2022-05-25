function openModal() {
    document.querySelector('#modal-back').style.top = "0";
}

function closeModal() {
    document.querySelector('#modal-back').style.top = "-100%";
}

$(".form__singup").on("submit", function( event ) {
    event.preventDefault();

    let name = $('#name-singup').val();
    let email = $('#email-singup').val();
    let password = $('#password-singup').val();

    $.ajax({
        url: './process.php',
        method: 'POST',
        data: {name: name, email: email, password: password},
        dataType: 'JSON'
    }).done(function(result){
        alert(result)
    })
});

$(".form__sin").on("submit", function( event ) {
    event.preventDefault();

    let name = $('#name-singup').val();
    let email = $('#email-singup').val();
    let password = $('#password-singup').val();

    $.ajax({
        url: './process.php',
        method: 'POST',
        data: {name: name, email: email, password: password},
        dataType: 'JSON'
    }).done(function(result){
        alert(result)
    })
});

