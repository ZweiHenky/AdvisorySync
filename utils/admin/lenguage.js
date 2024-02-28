import spanish from './es.js'
import english from './en.js'

const lenguage = document.querySelector('.lenguage')

const title = document.querySelector('[data-title]')
const one = document.querySelector('[data-one]')
const two = document.querySelector('[data-two]')
const three = document.querySelector('[data-three]')
const four = document.querySelector('[data-four]')
const logOut = document.querySelector('[data-logOut]')
const allAdvisory = document.querySelector('[data-allAdvisory]')
const users = document.querySelector('[data-users]')
const revenue = document.querySelector('[data-revenue]')
const recent = document.querySelector('[data-recent]')
const user = document.querySelector('[data-user]')
const date = document.querySelector('[data-date]')
const status = document.querySelector('[data-status]')
const top = document.querySelector('[data-top]')

lenguage.addEventListener('click', (e)=>{

    if (e.target.textContent === 'Español') {
        title.innerHTML = spanish.title
        one.innerHTML = spanish.navbar.one
        two.innerHTML = spanish.navbar.two
        three.innerHTML = spanish.navbar.three
        four.innerHTML = spanish.navbar.four
        logOut.innerHTML = spanish.navbar.logOut
        allAdvisory.innerHTML = spanish.dashboard.allAdvisory
        users.innerHTML = spanish.dashboard.users
        revenue.innerHTML = spanish.dashboard.revenue
        recent.innerHTML = spanish.dashboard.recent
        user.innerHTML = spanish.dashboard.user
        date.innerHTML = spanish.dashboard.date
        status.innerHTML = spanish.dashboard.status
        top.innerHTML = spanish.dashboard.top
        lenguage.innerHTML = 'English'
        return
    }
    
    if (e.target.textContent === 'English') {
        title.innerHTML = english.title
        one.innerHTML = english.navbar.one
        two.innerHTML = english.navbar.two
        three.innerHTML = english.navbar.three
        four.innerHTML = english.navbar.four
        logOut.innerHTML = english.dashboard.logOut
        allAdvisory.innerHTML = english.dashboard.allAdvisory
        users.innerHTML = english.dashboard.users
        revenue.innerHTML = english.dashboard.revenue
        recent.innerHTML = english.dashboard.recent
        user.innerHTML = english.dashboard.user
        date.innerHTML = english.dashboard.date
        status.innerHTML = english.dashboard.status
        top.innerHTML = english.dashboard.top
        lenguage.innerHTML = 'Español'
        return
    }
})