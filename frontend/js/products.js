const buttons = document.querySelectorAll('.amountOfProductsModifier')
const amount = document.querySelector('.amount')
const postAmount = document.querySelector('.amountToPost')
const addToCart = document.getElementById('addToCart')
const subimages = document.querySelectorAll('.subimage')
const albumCover = document.querySelector('.albumCover')
const subImagebox = document.querySelector('.subImages')
const checkout = document.getElementById('checkout')
let counter = 0;
console.log(checkout)

const checkoutButtons = Array.from(checkout.children);

checkoutButtons.forEach(button => {
    button.addEventListener('click', (e) => {
        e.preventDefault()
    })
})

subimages.forEach(image => {
    image.addEventListener('click', () => {
        const mainImage = albumCover.src
        albumCover.src = image.src
        image.src = mainImage
    })
})
