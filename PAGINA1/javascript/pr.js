let btn = document.getElementById('btn');

function handleClick(event){
    let images = document.querySelector('.images');
    let img = document.querySelectorAll('img');
    let lastImg=img[img.length-1]
    images.prepend(lastImg);
}

btn.addEventListener("click",handleClick)
