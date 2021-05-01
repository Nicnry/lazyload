var cards = document.getElementsByClassName('card')
var jump = 10
var actualShow = 10
var time = 1000

showCards()

function showCards(time = 0, start = 0, end = 10) {
  setTimeout(function(){ 
    for (let i = start; i <= end-1; i++) {
      cards[i].classList.remove('hidden')
    }
    actualShow = end
  }, time);
}

window.onscroll = function(ev) {
  if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
    if (actualShow < cards.length-jump) {
      showCards(time, actualShow, actualShow+jump)
    } else {
      showCards(time, actualShow, cards.length)
    }
  }
}
