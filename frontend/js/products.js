const buttons = document.querySelectorAll('.amountOfProductsModifier')
const amount = document.querySelector('.amount')
const postAmount = document.querySelector('.amountToPost')
const form = document.getElementById('buy')
let counter = 0;

form.addEventListener('submit', () => {
    postAmount.value = amount.innerHTML
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
