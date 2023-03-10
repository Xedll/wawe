const titles = Array.from(document.querySelectorAll('.title'))

//Swiper

const swiper = new Swiper('.swiper', {
   spaceBetween: 10,
   speed: 500,
   pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true,

   },
   keyboard: {
      enabled: true,
      onlyInViewport: true,
      pageUpDown: true,
   },
   autoplay: {
      delay: 5000
   },
   loop: true,
})

//Gallery
let images = [];
for (let i = 0; i < document.querySelectorAll('.gallery__item').length; i++) {

   let img = new Image();
   img.onload = () => {
      let width = this.width;
      let height = this.height;
   }

   img.src = document.querySelectorAll('.gallery__item')[i].getAttribute('style').split('').splice(10, document.querySelectorAll('.gallery__item')[i].getAttribute('style').split('').splice(10).length - 1).join('')

   if (img.width > img.height) {
      img.ratio = img.width / img.height;
   } else {
      img.ratio = img.height / img.width
   }

   if (img.ratio >= 1.75) {
      document.querySelectorAll('.gallery__item')[i].classList.add('horisontal')
   }
   images.push(img)
}

document.addEventListener('click', (e) => {
   if (e.target.className == 'gallery__group') {
      for (let i of document.querySelectorAll('.gallery__item')) {
         i.classList.add('hidden')
      }
      let id = e.target.dataset.gallery__id;
      let temp;
      if (id == 1) {
         temp = Array.from(document.querySelectorAll('.gallery__item'))
      } else {
         temp = Array.from(document.querySelectorAll('.gallery__item')).filter(i => {
            return i.dataset.id == id
         })
      }
      for (let i of temp) {
         i.classList.remove('hidden')
      }
   }

   if (e.target.tagName == 'BUTTON') {
      e.preventDefault()
   }
   if (e.target.dataset.navAnchor) { //Прокрутка страницы
      e.preventDefault()
      document.querySelector(`#${e.target.dataset.navAnchor}`).scrollIntoView({ behavior: 'smooth' })
   }
})


const setSpanWrapper = function (target) {
   let text = target.textContent
   let lastLetter = '<span class="title__after">' + text.at(-1) + '<span/>'
   let fullTitle = Array.from(text).slice(0, -1).join('')
   target.innerHTML = fullTitle + lastLetter
}

window.onload = () => {
   titles.forEach(item => {
      setSpanWrapper(item)
   })
}