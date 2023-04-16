let inputs = document.querySelectorAll("input");

inputs.forEach(function (input) {
    input.addEventListener("input", function (event) {
        if (this.classList.contains("is-invalid")) {
            this.classList.remove("is-invalid");
        }
    });
});

let selects = document.querySelectorAll("select");

selects.forEach(function (select) {
    select.addEventListener("change", function (event) {
        if (this.classList.contains("is-invalid")) {
            this.classList.remove("is-invalid");
        }
    });
});
