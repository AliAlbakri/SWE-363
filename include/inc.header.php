    <nav  class="navbar navbar-expand-lg  navbar-custom  navbar-dark justify-content-spacebetween">
        <a class="navbar-brand " href="#">
            <img src="./Images/logo-White.svg" alt="">
        </a>

        <button class="navbar-toggler mr-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <i class="fas fa-bars"></i>
        </button>
        <div class="ml-auto collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
            <ul class="navbar-nav text-center nav-links">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home</a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="#Menu">Menu</a></a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="#Gallery">Gallery</a></a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="#Testimonials">Testimonials</a></a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" href="#Contact">Contact Us</a></a>
                </li>

                <li class="red-link nav-item">
                    <a class="nav-link" href="#">Search <i class="fas fa-search"></i></a>
                </li>

                <li class="red-link nav-item">
                    <a class="nav-link" href="#">Profile <i class="fas fa-user"></i></a>
                </li>

                <li id="cart" data-toggle="modal" data-target="#cart-modal" class="red-link nav-item">
                    <a class="nav-link" >Cart <i class="fas fa-shopping-cart"></i> <span id="cart-display">0 </span> </a>
                </li>

            </ul>
        </div>
    </nav>


<!-- Modal -->
<div class="modal fade" id="cart-modal" tabindex="-1" role="dialog" aria-labelledby="cart-modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="cart-modalLabel">Cart Items</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mx-5 ">
                <div class="row justify-content-between">
                    <p>item</p>
                    <p>price</p>
                </div>

                <div id="cart-items">

                </div>

                <div class="row justify-content-between">
                    <p>Total</p>
                    <p id="total-display-cart">0</p>
                </div>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                <button id="order-now" type="button" class="btn  btn-warning">Order now</button>
            </div>
        </div>
    </div>
</div>


