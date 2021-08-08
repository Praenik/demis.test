document.addEventListener('DOMContentLoaded', () => {

    const email = document.getElementById('email')
    const regexpEmail = /.+@.+\..+/i

    email.addEventListener('blur', () => {
        if (email.value !== '')
            if (email.value.search(regexpEmail) !== 0)
                document.getElementById('email_error').innerHTML = 'E-mail введен неверно'
            else if (document.getElementById('email_error').innerHTML !== null)
                document.getElementById('email_error').innerHTML = ''
    })

    $('#telephone').mask('+7 (999) 999-99-99')
})