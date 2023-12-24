document.addEventListener("DOMContentLoaded", function() {
    const navLinks = document.querySelectorAll(".navbar a");

    navLinks.forEach((link) => {
        link.addEventListener("click", (e) => {
            e.preventDefault();

            const targetId = link.getAttribute("href").substring(1);
            const targetSection = document.getElementById(targetId);

            if (targetSection) {
                window.scrollTo({
                    top: targetSection.offsetTop,
                    behavior: "smooth",
                });
            }
        });
    });
});


document.addEventListener("DOMContentLoaded", function() {
    const accordionItems = document.querySelectorAll(".accordion li");

    accordionItems.forEach((item) => {
        const input = item.querySelector("input[type='radio']");
        const content = item.querySelector(".conten");

        input.addEventListener("change", () => {
            if (input.checked) {
                // content.style.maxHeight = content.scrollHeight + "px";
            } else {
                content.style.maxHeight = null;
            }
        });
    });
});


document.addEventListener("DOMContentLoaded", function() {
    const submitButton = document.getElementById("submit");
    const form = document.querySelector(".form");

    submitButton.addEventListener("click", function(e) {
        e.preventDefault();


        const childName = document.querySelector("input[name='childname']").value;
        const childAge = document.querySelector("input[name='childage']").value;

        if (childName.trim() === "" || childAge.trim() === "") {
            alert("Please fill in all required fields.");
        } else {

            form.submit();
        }
    });
});