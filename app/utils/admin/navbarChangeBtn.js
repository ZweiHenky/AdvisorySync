
let url = window.location.pathname

let partUrl = url.split('/');

let btnSearch = document.querySelector('#search')

btnSearch.setAttribute('action', url)
