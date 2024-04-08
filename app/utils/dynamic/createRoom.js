const btn = document.querySelector('.createRoom')
const id_noti = document.querySelector('#id_noti')
const horas = document.querySelector('#horas')
const id_stripe = document.querySelector('#id_stripe')

const randomNumber = Math.floor(100000 + Math.random() * 900000);

btn.addEventListener('click',async e =>{
    e.preventDefault()

    const res = await fetch('../app/controllers/createRoom.php', {
        method: 'POST',
        body: JSON.stringify({
            name:randomNumber.toString(),
            enable:true
        }),
        headers: {
            "Content-Type": "application/json",
        },
    })

    const data = await res.json()

    if (res.ok) {
        window.location.href =`http://localhost/advisorysync/dynamic/profile?id_noti=${id_noti.value}&horas=${horas.value}&id_stripe=${id_stripe.value}&data=${JSON.stringify(data)}`
    }

})