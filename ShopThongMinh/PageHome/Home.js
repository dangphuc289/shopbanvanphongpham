window.addEventListener("load", function(){
    const slider = document.querySelector(".slider");
    const sliderMain = document.querySelector(".slider-main");
    const sliderItems = document.querySelectorAll(".slider-item");
    const nextBtn = document.querySelector(".slider-next");
    const prevBtn = document.querySelector(".slider-prev");
    const dotItem = document.querySelectorAll(".slider-dot-item");
    const sliderItemWidth = sliderItems[0].offsetWidth;
    const sliderLength = sliderItems.length;
    let positionX = 0;
    let index = 0;
    
    nextBtn.addEventListener("click", function() {
        changeSlide(1);
    });
    
    prevBtn.addEventListener("click", function() {
        changeSlide(-1);
    });
    
    [...dotItem].forEach((item) => item.addEventListener("click", function(e) {
         [...dotItem].forEach((el) => el.classList.remove("active"));
         e.target.classList.add("active");
         const sliderIndex = parseInt(e.target.dataset.index);
         index = sliderIndex;
         positionX = -1 * index * sliderItemWidth;
         sliderMain.style = `transform: translateX(${positionX}px)`;
    })
    );
    
    function changeSlide(direction) {
        if(direction == 1) {
            if(index >= sliderLength - 1) {
                index = sliderLength - 1;
                return;
            }
            positionX = positionX - sliderItemWidth;
            sliderMain.style = `transform: translate(${positionX}px)`;
            index ++;
        }
        else if(direction == -1) {
            if(index <= 0) {
                index = 0;
                return;
            }
            positionX = positionX + sliderItemWidth;
            sliderMain.style = `transform: translateX(${positionX}px)`;
            index --;
        }
        [...dotItem].forEach((el) => el.classList.remove("active"));
        dotItem[index].classList.add("active");
    }
    
    setInterval(function(){
        changeSlide(1);
    }, 5000);
      
});
    