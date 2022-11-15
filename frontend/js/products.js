const buttons = document.querySelectorAll('.amountOfProductsModifier')
const amount = document.querySelector('.amount')
const postAmount = document.querySelector('.amountToPost')
const addToCart = document.getElementById('addToCart')
const subimages = document.querySelectorAll('.subimage')
const albumCover = document.querySelector('.albumCover')
const subImagebox = document.querySelector('.subImages')
let counter = 0;

addToCart.addEventListener('click', (e) => {
    
    if(amount.value == 0 || amount.value === ''){
        e.preventDefault()
    } else {
        postAmount.value = amount.innerHTML
    }
})

buttons.forEach(button => {
    button.addEventListener('click', (e) => {
        if(counter === 0){
            amount.value = counter
        }
        if(e.target.classList.contains('less')){
            amount.value = counter--
        }e
        if(e.target.classList.contains('more')){
            amount.value = counter += 1
        }
    })
})

subimages.forEach(image => {
    image.addEventListener('click', () => {
        const mainImage = albumCover.src
        albumCover.src = image.src
        image.src = mainImage
    })
})