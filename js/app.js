document.addEventListener("DOMContentLoaded", e => {
    console.log(navigator.userAgent);

    let el, modal, closed, open_modal, closed_all, body,randImg,randImgModale,linkAPI;

    el = document.querySelectorAll(".grid-picture-large li");
    modal = document.querySelector(".parent-modale");
    closed = document.querySelector(".modale button");
    closed_all = document.querySelector(".modale img");
    body = document.querySelector("body");
    randImg = document.querySelectorAll("li > figure > img");
    randImgModale = document.querySelectorAll("section > ul > li");
    linkAPI = 'https://loremflickr.com/500/500/Sports_?random=${num}';
    /* property elements */

    open_modal = function () {
        console.log(this.dataset);
        /* data attributes */
        let image = this.dataset.image;
        let title = this.dataset.title;
        let desc = this.dataset.description;
        let dates = this.dataset.dates;
        /* add the active class */
        modal.classList.add("modale-active"); 
        /* getting all the HTML elements */
        document.querySelector(".modale img").setAttribute("src", image);
        document.querySelector(".modale .desc h3").innerText = title;
        document.querySelector(".modale .desc p").innerHTML = `<strong>Description : </strong>${desc}`;
        document.querySelector(".modale .desc time").innerHTML = `<strong>Date de publication : </strong>${dates}`;
        document.querySelector(".modale .desc time").setAttribute("datetime", dates);
        /* 
        Adding the class active to the body
        to prevent scrolling when the modal is open
        */
        body.style = "overflow: hidden";
    };
    for (rows of el) {
        rows.addEventListener("click", open_modal);
    }
    // close the modal and reset the body overflow
    closed.addEventListener("click", () => {
        modal.classList.remove("modale-active");
        body.style = "overflow: visible";
    });

    closed_all.addEventListener("click", () => {
        modal.classList.remove("modale-active");
        body.style = "overflow: scroll";
    });

    /* generate a random date for the images */
    const randomDate = (start, end) => {
        return new Date(start.getTime() + Math.random() * (end.getTime() - start.getTime()));
    }

    /* add elements */
    const randGenerator = () => {

        for (let i = 0; i < randImg.length; i++) 
            {
                randImg[i].src = linkAPI.replace("${num}",i);
                for (let j = 0; j < randImgModale.length; j++) 
                {
                    randImgModale[j].dataset.image = linkAPI.replace("${num}",j);
                    randImgModale[j].dataset.title = "Image Sport n°" + j;
                    randImgModale[j].dataset.description = "Le sport c'est génial";

                    // adapting the date format for the image
                    randImgModale[j].dataset.dates = randomDate(new Date(2012, 0, 1), new Date(Date.now())).toLocaleDateString();
                }
              }
            }
            randGenerator();
});