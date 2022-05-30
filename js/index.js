function openModal() {
    document.querySelector('#modal-back').style.top = "0";
}

function closeModal() {
    document.querySelector('#modal-back').style.top = "-100%";
}

$(".form__singup").on("submit", function( event ) {
    event.preventDefault();

    let user = $('#user-singup').val();
    let email = $('#email-singup').val();
    let password = $('#password-singup').val();

    $.ajax({
        url: './register.php',
        method: 'POST',
        data: {user: user, email: email, password: password},
        dataType: 'json',
    }).done(function(result){
        alert(result)
    })
});

$(".form__singin").on("submit", function( event ) {
    event.preventDefault();

    let user = $('#user-singin').val();
    let email = $('#email-singin').val();
    let password = $('#password-singin').val();

    $.ajax({
        url: './verify_login.php',
        method: 'POST',
        data: {user: user, email: email, password: password},
        dataType: 'json',
    }).done(function(result){
        alert(result)
    })
});

