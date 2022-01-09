$(() => {
    $('#avatar').click(() => $('#avatar-choice').show())

    $('.window-wrap').click((event) => {
        if (event.target.classList.contains('window-wrap')) {
            event.target.style.display = 'none'
        }
    })
})