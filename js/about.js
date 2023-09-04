const experience = [
    {
        "foto": "js.png",
        "naam": "JavaScript",
    },
    {
        "foto": "php.png",
        "naam": "PhP & mySQL",
    },
    {
        "foto": "dart.png",
        "naam": "Dart",
    },
    {
        "foto": "python.png",
        "naam": "Python",
    }
];

for (i = 0; i < experience.length; i++) {
    plaatsDiv(i)
};

function plaatsDiv(i) {
    const experienceDiv = document.createElement("div");
    experienceDiv.classList.add("experience");

    const foto = document.createElement("img");
    foto.classList.add("experienceImg");
    const naam = document.createElement("div");
    naam.classList.add("experienceName");

    foto.src = `../media/${experience[i]["foto"]}`
    naam.innerHTML = experience[i]["naam"];

    experienceDiv.append(foto, naam);
    let test = document.getElementById(`myExperiences`)

    document.getElementById(`myExperiences`).append(experienceDiv);
}

function delay(time) {
    return new Promise(resolve => setTimeout(resolve, time));
}

let button = document.getElementById("downloadButton")
let iconSkipForward = document.querySelector(".downloadAnimation");

let animationSkipForward = bodymovin.loadAnimation({
    container: iconSkipForward,
    renderer: "svg",
    loop: false,
    autoplay: false,
    path: "../media/download.json",
});

busy = false;

downloadButton.addEventListener("click", async () => {
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

console.log(button.href)


