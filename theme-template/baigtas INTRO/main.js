const box = document.getElementById('box');

const btn = document.getElementById('btn');

const logo = document.getElementById('main_logo');

const mainWords = document.getElementById('main_wrd');

const cls = document.getElementById('close')


btn.addEventListener('click', function handleClick() {
  if (box.style.display === 'block') {
    box.style.display = 'none';
    logo.style.display = 'block';
    mainWords.style.display = 'block';


  } else {
    box.style.display = 'block';
    logo.style.display = 'none';
    mainWords.style.display = 'none';
  }
});

cls.addEventListener('click', function handleClick() {
  if (box.style.display === 'none') {
    box.style.display = 'block';
    logo.style.display = 'none';
    mainWords.style.display = 'none';


  } else {
    box.style.display = 'none';
    logo.style.display = 'block';
    mainWords.style.display = 'block';
  }
});

