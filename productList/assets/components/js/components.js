let anchorList = document.querySelectorAll(".card-component-fill")
for( let anchor of anchorList){
    // find cards
    let card = anchor.closest(".card-filled");

    // add click event
    card.addEventListener('click', cardFill);
}
function cardFill(e){
    // 1. get destination href address
    let anchor = this.querySelector(".card-component-fill");
    let address = anchor.href;
    // 2. change location to that address
    window.location = address; // window.location.assign( address )
}