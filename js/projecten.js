function projectAnimation() {
    let projecten = document.querySelectorAll("project");
    for (let i = 0; i < projecten.length; i++) {
        projecten[i].style.animation = `moveProject 0.8s ease ${i * 0.10}s forwards`
    }
}