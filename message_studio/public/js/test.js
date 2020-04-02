
window.onload = () => {

    let mainNavLinks = document.querySelectorAll(".stickyBar");
    let mainSections = document.querySelectorAll("section");

    console.log(mainNavLinks);
    console.log(mainSections);

    window.addEventListener("scroll", event => {
    let fromTop = window.scrollY;
    console.log(mainSections);
        mainNavLinks.forEach(link => {
            let section = document.querySelector(link.hash);
            console.log(section);
            if (  section.offsetTop <= fromTop && section.offsetTop + section.offsetHeight > fromTop) {
                console.log(section.offsetTop);
                link.classList.add("current")
            } else {
                link.classList.remove("current");
            }
        });
    },false);
}