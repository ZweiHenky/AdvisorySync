const fav=document.querySelector("#fav")

fav.addEventListener("click",function(e){
    e.preventDefault()
    fav.setAttribute("src","../app/assets/icons/heartCrack.svg")
})