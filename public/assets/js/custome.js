document.addEventListener("DOMContentLoaded", function () {

    console.log("customs js added");
    const btn = document.querySelector(".btn");
    if (btn) {
        btn.addEventListener("click", function () {
            alert("Button clicked!");
        });
    }
});