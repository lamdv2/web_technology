//--------------...---------------
//
window.addEventListener("load", function() {

    const slider = document.querySelector(".slider");

    const sliderMain = document.querySelector(".slider-main");

    const sliderItems = document.querySelectorAll(".slider-item");

    const nextBtn = document.querySelector(".slider-next");

    const prevBtn = document.querySelector(".slider-prev");

    const dotItems = document.querySelectorAll(".slider-dot-item");

    const sliderItemWidth = sliderItems[0].offsetWidth;

    const sliderLength = sliderItems.length;

    let postionX = 0,
        index = 0;

    nextBtn.addEventListener('click', function() {
        handleChangSlider(1);
    });

    prevBtn.addEventListener('click', function() {
        handleChangSlider(0);
    });

    [...dotItems].forEach(item => item.addEventListener('click', function(e) {
        [...dotItems].forEach(el => el.classList.remove('active'));
        e.target.classList.add("active");
        const sliderIndex = parseInt(e.target.dataset.index);
        index = sliderIndex;
        postionX = -(index * sliderItemWidth);
        sliderMain.style = `transform: translateX(${postionX}px)`;
    }));

    function handleChangSlider(dir) {
        if (dir === 1) {
            index++;
            if (index > sliderLength - 1) {
                postionX = sliderItemWidth;
                index = 0;
            }
            postionX -= sliderItemWidth;
            sliderMain.style = `transform: translateX(${postionX}px)`;
        } else if (dir === 0) {
            index--;
            if (index < 0) {
                postionX = -(sliderItemWidth * sliderLength);
                index = sliderLength - 1;
            }
            postionX += sliderItemWidth;
            sliderMain.style = `transform: translateX(${postionX}px)`;
        }

        [...dotItems].forEach(el => el.classList.remove('active'));
        dotItems[index].classList.add("active");
    }

});