const readMoreBtn = document.querySelector('.read-more-btn');
const text = document.querySelector('.text');

readMoreBtn.addEventListener('click',(e)=>{
  text.classList.toggle('show-more');
  if(readMoreBtn.innerText === 'Citeste mai mult'){
    readMoreBtn.innerText= 'Citeste mai putin';
  } else {
    readMoreBtn.innerText = 'Citeste mai mult';
  }
})