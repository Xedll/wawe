let images = []; //зачаток блядской галереи. Сделать проверки на соотношение сторон фото и ставить соотвтественные классы
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

window.onload = () => {

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
})