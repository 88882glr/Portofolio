const experiences = [
    {
        "foto": "js.png",
        "naam": "JavaScript",
        "greenStar": 2,
        "greyStar": 3,
    },
    {
        "foto": "php.png",
        "naam": "PhP & mySQL",
        "greenStar": 2,
        "greyStar": 3,
    },
    {
        "foto": "dart.png",
        "naam": "Dart",
        "greenStar": 1,
        "greyStar": 4,
    },
    {
        "foto": "python.png",
        "naam": "Python",
        "greenStar": 1,
        "greyStar": 4,
    },
    {
        "foto": "csharp.png",
        "naam": "c#",
        "greenStar": 2,
        "greyStar": 3,
    }
];

for (i = 0; i < experiences.length; i++) {
    createExperience(i)
};

function createExperience(i) {
    const experience = document.createElement("experience");
    const skillBar = document.createElement("skill-bar");

    let greenAmount = experiences[i]["greenStar"];
    for (e = 0; e < greenAmount; e++) {
        const greenStars = document.createElement("img");
        greenStars.classList.add("green-star");
        greenStars.src = "../media/greenStar.png"
        skillBar.append(greenStars);
    }

    let greyAmount = experiences[i]["greyStar"];
    for (j = 0; j < greyAmount; j++) {
        const greyStars = document.createElement("img");
        greyStars.classList.add("grey-star");
        greyStars.src = "../media/greyStar.png"
        skillBar.append(greyStars);
    }

    const foto = document.createElement("img");
    foto.classList.add("experience-img");
    foto.src = `../media/${experiences[i]["foto"]}`

    const naam = document.createElement("experience-name");
    naam.innerHTML = experiences[i]["naam"];

    experience.append(foto, naam, skillBar);
    document.querySelector("my-experiences").append(experience);
}

function experienceAnimation() {
    let slide = document.querySelectorAll("experience");
    for (let s = 0; s < slide.length; s++) {
        slide[s].style.animation = `moveExperience 0.8s ease ${s * 0.10}s forwards`
    }
}

// -------------------------------------------------
function delay(time) {
    return new Promise(resolve => setTimeout(resolve, time));
}

let button = document.getElementById("download-button")
let iconSkipForward = document.querySelector("download-animation");

let animationSkipForward = bodymovin.loadAnimation({
    container: iconSkipForward,
    renderer: "svg",
    loop: false,
    autoplay: false,
    path: "../media/download.json",
});

busy = false;

button.addEventListener("click", async () => {
    if (busy == false) {
        busy = true;
        animationSkipForward.playSegments([0, 150], true);
        button.style.backgroundColor = "#2b8f5fbd"
        button.style.pointerEvents = "none"
        await delay(3000);
        button.style.backgroundColor = "#47af7dbd"
        button.style.pointerEvents = "all"
        busy = false;
    }
})


