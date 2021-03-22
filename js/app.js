// ____________Cart functionality___________________

let cartCount = 0 // initialize cart with 0
let quantityCount = 1 // initialize quantity with 1;

let cartDisplay = document.querySelector("#cart-display");
let quantityDisplay = document.querySelector("#quantity-display");



// for index.html

function incrementCart() {
	cartDisplay.innerHTML = ++cartCount+"";
}

// for detail.html

function incrementQuantity(){
	quantityDisplay.innerHTML = ++quantityCount+"";
}

function decrementQuantity() {
	if (quantityCount ===1)
		return

	quantityDisplay.innerHTML= --quantityCount+""
}

function addQuantityToCart(){
	cartCount += quantityCount
	cartDisplay.innerHTML = cartCount ;
}

//___________________________________________________
// toggle navbar
let Nav = document.getElementById('js-menu');
let navBarToggle = document.getElementById('js-navbar-toggle');

navBarToggle.addEventListener('click', function () {
	console.log("hello")
	Nav.classList.toggle('active');
});

//__________________________________________________

// Form Functionalities


let form = document.getElementById("form")
let msg = document.getElementById("msgForEmptyForm")
let customerName = document.getElementById("name")
let feedback = document.getElementById("feedback")
let formWrapper = document.getElementById("formWrapper")

$("#addRevBtn").click(function () {
	$("#form").removeClass("hide")
    $("#form").animate({ "left": 0 }, "slow");
});

function validateForm(){

	if (feedback.value == ""){
		msg.classList.remove("hide")
		feedback.focus()
	}
	else{
		if(customerName.value.length == 0){
			customerName.value = "Customer"
		}
		form.submit()
	}


}

let counter = document.getElementById("counter")
feedback.addEventListener('input', function(e) {
    const target = e.target;
    const currentLength = target.value.length;
    counter.innerHTML = `${currentLength}/500`;
});

function removeErrorMessage(){
	msg.classList.add("hide")

}
//___________________________________________________


