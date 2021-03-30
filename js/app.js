// ____________Cart functionality___________________

let cartCount = 0 // initialize cart with 0
let cartTotal = 0
let quantityCount = 1 // initialize quantity with 1;

let cartDisplay = document.querySelector("#cart-display");
let quantityDisplay = document.querySelector("#quantity-display");

let cartItems = document.querySelector('#cart-items')
let totalDisplay = document.querySelector('#total-display-cart')




// for index.html

function incrementCart(e) {
	let meal = e.target.name
	let price = meals[meal].price

	let cartItem = document.createElement("div")

	cartItem.innerHTML = `<div class="row justify-content-between ">
		                        <p>${meal}</p>
		                        <p>${price}</p>
		                  </div>`

	cartItems.appendChild(cartItem);

	let totalPrice  = (cartTotal + price)


	totalDisplay.innerText= totalPrice;
	cartDisplay.innerHTML = ++cartCount+"";

	// update cart total
	cartTotal = totalPrice;
}

// order button
$('#cart').click(function (){
	$('#order-now').click(function (){
		cartCount = 0;
		cartDisplay.innerText = cartCount

		cartTotal = 0;
		totalDisplay.innerText= 0;

		$('#cart-items').empty()

		$('#cart-modal').modal('hide')

	})
})





// cart for detail.html

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


// ************************ detail functions ******************
let path = window.location.pathname;
let page = path.split("/").pop();
// Form Functionalities

if(page==='detail.html') {
	let form = document.getElementById("form")
	let msg = document.getElementById("msgForEmptyForm")
	let customerName = document.getElementById("name")
	let feedback = document.getElementById("feedback")
	let formWrapper = document.getElementById("formWrapper")

	$("#addRevBtn").click(function () {
		$("#form").removeClass("hide")
		$("#form").animate({"left": 0}, "slow");
	});

	function validateForm() {

		if (feedback.value == "") {
			msg.classList.remove("hide")
			feedback.focus()
		} else {
			if (customerName.value.length == 0) {
				customerName.value = "Customer"
			}
			form.submit()
		}


	}

	let counter = document.getElementById("counter")
	feedback.addEventListener('input', function (e) {
		const target = e.target;
		const currentLength = target.value.length;
		counter.innerHTML = `${currentLength}/500`;
	});

	function removeErrorMessage() {
		msg.classList.add("hide")

	}
}

$('ul .tab').click(function (){
	$('ul .tab').removeClass("active")
	$(this).addClass('active')

})
// **************************************************
//___________________________________________________



let meals = {

	"Best sandwich":{
		price:39.9
	},
	"Burger":{
		price: 29.9
	},
	"Burger Meal":{
		price: 27.9
	},
	"Best Deal Meal":{
		price: 25.9
	},
	"Chicken Burger":{
		price: 22.9
	},
	"Pizza":{
		price: 45.9
	},

}
