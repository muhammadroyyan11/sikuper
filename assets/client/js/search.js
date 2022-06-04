function myFunction() {
    // DOM
    const input = document.getElementById('myInput').value.toUpperCase();
    const cardContainer = document.getElementById('card-lists');
    const card = cardContainer.getElementsByClassName('col-md-4');


    for (let i = 0; i < card.length; i++) {
        let tittle = card[i].querySelector(".card-body");

        if (tittle.innerText.toUpperCase().indexOf(input) > -1) {
            card[i].style.display = "";
        } else{
            card[i].style.display = "none";
        }
    }
}