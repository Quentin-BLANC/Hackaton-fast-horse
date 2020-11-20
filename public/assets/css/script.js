let country = document.querySelector("#country");
let city = document.querySelector("#city");
let selectCountry = document.querySelector("#selectCountry");
let selectCity = document.querySelector("#selectCity");

country.change(function() {
    city.style.backgroundColor = "red";
    selectCity.hidden();
}
);