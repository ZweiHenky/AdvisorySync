const btnClose = document.querySelectorAll('.closeNav')
const back = document.querySelector('.backNav')
const aside = document.querySelector('aside')

const openMenu = document.querySelector('.openMenu')

openMenu.addEventListener('click', ()=>{
    aside.classList.remove('-translate-x-full')
    back.classList.remove('-translate-x-full')
})

btnClose.forEach(btn =>{
    btn.addEventListener('click', ()=>{
        aside.classList.add('-translate-x-full')
        back.classList.add('-translate-x-full')
    })
})