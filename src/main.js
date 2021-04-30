var cards = document.getElementsByClassName('card')
var jump = 10
var actualShow = 10

for (let i = 0; i <= jump-1; i++) {
  cards[i].classList.remove('hidden')
}

function showCards(start = 0, end = 9) {
  for (let i = start; i <= end-1; i++) {
    cards[i].classList.remove('hidden')
  }
  actualShow = end
}

window.onscroll = function(ev) {
  console.log(actualShow, '-------------------------------')
  if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
      showCards(actualShow, actualShow+jump)
  }
}