window.addEventListener('scroll', function () {
    var navbar = document.getElementById('navbar')
    if (window.scrollY > 50) {
        navbar.classList.add('bg-light')
    } else {
        navbar.classList.remove('bg-light')
    }
})

document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('contact-form')
    const successMessage = document.getElementById('form-success-message')
    const errorMessage = document.getElementById('form-error-message')

    form.addEventListener('submit', function (event) {
        event.preventDefault()
        const formData = new FormData(form)

        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'Accept': 'application/json'
            }
        }).then(response => {
            if (response.ok) {
                form.reset()
                successMessage.style.display = 'block'
            } else {
                throw new Error('An error happend in the response.')
            }
        }).catch(error => {
            console.error('there was an error in the response: ', error)
            errorMessage.style.display = 'block'
        })
    })
})