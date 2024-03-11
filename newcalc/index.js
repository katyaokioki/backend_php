const buttons = document.querySelectorAll('.pins');
const input = document.querySelector('.screen');

handleClick = (evt) => {
    evt.preventDefault()
    const data = evt.target.innerText;
    let currentValue = input.value;
    input.value = currentValue+data;
}

buttons.forEach((element) => {
    element.addEventListener('click', handleClick)
})
