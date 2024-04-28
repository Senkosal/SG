$(document).ready(() => {
    function changeColor() {
        const icon = $('.icon')
        $.each(icon, (index, element) => {
            const text = element.parentElement.querySelector('span')
            if ($(element).attr('class').includes('selected')) {
                $(text).css('color', '#9747FF')
                element.src = element.src.replace('default', 'selected')
            } else {
                $(text).css('color', '#fff')
                element.src = element.src.replace('selected', 'default')
            }
        })
    }
    changeColor();
    const menu = $('.btnMenu')
    $.each(menu, (index, MenuElement) => {
        $(MenuElement).on('click', function () {
            $.each(menu, (index, element) => {
                const icon = element.querySelector('img.icon')
                icon.classList.remove('selected')
            })
            this.querySelector('img.icon').classList.add('selected')
            changeColor();
        })
    })
})



