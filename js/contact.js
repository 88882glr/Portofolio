function delay(time) {
    return new Promise(resolve => setTimeout(resolve, time));
}
const button = document.getElementById("verstuur")
const iconSkipForward = document.querySelector("mail-animation");
const form = document.getElementById("form");

const voornaam = document.getElementById("voornaam");
const achternaam = document.getElementById("achternaam");
const email = document.getElementById("email");
const bericht = document.getElementById("bericht");

const animationSkipForward = bodymovin.loadAnimation({
    container: iconSkipForward,
    renderer: "svg",
    loop: false,
    autoplay: false,
    path: "../media/mail.json",
});

busy = false;

async function animation() {
    if (voornaam.value != "" && achternaam.value != "" && email.value != "" && bericht.value != "") {
        if (busy == false) {
            busy = true;
            form.style.pointerEvents = "none"
            form.style.opacity = 0;
            iconSkipForward.style.display = "block";
            animationSkipForward.playSegments([0, 230], true);
            await delay(4000);
            iconSkipForward.style.display = "none";
            form.style.opacity = 1;
            form.style.pointerEvents = "all"
            busy = false;
        }
    }
}
