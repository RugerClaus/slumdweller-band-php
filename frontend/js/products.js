const buttons = document.querySelectorAll('.amountOfProductsModifier')
const amount = document.querySelector('.amount')
const postAmount = document.querySelector('.amountToPost')
const addToCart = document.getElementById('addToCart')
const subimages = document.querySelectorAll('.subimage')
const albumCover = document.querySelector('.albumCover')
const subImagebox = document.querySelector('.subImages')
let counter = 0;

addToCart.addEventListener('click', (e) => {
    
    if(amount.innerHTML == 0 || amount.innerHTML === ''){
        e.preventDefault()
    } else {
        postAmount.value = amount.innerHTML
    }
})

buttons.forEach(button => {
    button.addEventListener('click', (e) => {
        if(counter === 0){
            amount.innerHTML = counter
        }
        if(e.target.classList.contains('less')){
            amount.innerHTML = counter--
        }e
        if(e.target.classList.contains('more')){
            amount.innerHTML = counter += 1
        }
    })
})

subimages.forEach(image => {
    image.addEventListener('click', () => {
        const mainImage = albumCover.src;
        albumCover.src = image.src
        image.src = mainImage
    })
})