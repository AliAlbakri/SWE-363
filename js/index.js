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
