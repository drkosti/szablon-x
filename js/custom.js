const myCarouselElement = document.querySelector('#slider-top')
const carousel = new bootstrap.Carousel(myCarouselElement, {
  interval: 4000,
  pause: false
})


//player


volume.addEventListener("input", (e) => {
  audio.volume = e.currentTarget.value / 100;
});

play.addEventListener("click", (e) => {
  return audio.paused ? audio.play() : audio.pause();
});
play2.addEventListener("click", (e) => {
  return audio.paused ? audio.play() : audio.pause();
});

//play/pause
function odpal () {
    $(this).toggleClass('wylacz');
  };

//play/pause
function odpal2 () {
    $(this).toggleClass('wylacz');
  };



  jQuery('document').ready(function($){
    setInterval(function() {
    
   
    
    $("#sc-info").load(window.location.href + " #sc-info > *");
    
    }, 30000);
    });


    //dodanie klasy do nawigacji po scroll-u
    const myNav = document.getElementById('nawigacja')

    window.onscroll = function() {
      if(window.scrollY > window.innerHeight){
        myNav.classList.add('nav-tlo')
      }else{
        myNav.classList.remove('nav-tlo')
      }
    }