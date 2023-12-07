const container = document.querySelector(".main");
const takenContainer = document.querySelector(".taken");
const inputContainer = document.querySelector("input[name='SeatName']");
const priceContainer = document.getElementById("price");
const inputPriceContainer = document.querySelector("input[name='SubTotal']");

const selectedSeats = [];
let count = 0;

container.addEventListener("click", (e) => {
    if (e.target.classList.contains("seat")) {
        e.target.classList.toggle("select");
        const seatChosen = e.target.textContent;
        const price = 45000;

        const n = selectedSeats.indexOf(seatChosen);

        if (n === -1){
            selectedSeats.push(seatChosen);
            count += price;
        } else{
            const seatIndex = selectedSeats.indexOf(seatChosen);
            selectedSeats.splice(seatIndex, 1);
            count -= price;
        }

        seatChosenIdx();
        totalPrice();
    }
});

function seatChosenIdx(){
    const seatsText = selectedSeats.length > 0 ? selectedSeats.join(" ") : "";
    takenContainer.textContent = seatsText;
    inputContainer.value = seatsText;
}


function totalPrice(){
    const priceSub = price === 0 ? price(" ") : "";
    priceContainer.textContent = count.toLocaleString();
    inputPriceContainer.value = count.toLocaleString();
}
