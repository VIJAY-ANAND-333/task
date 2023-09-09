<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light py-3 bg-info">
        <a class="navbar-brand text-white" href="#">Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto ">
            <li class="nav-item active">
              <a class="nav-link text-white" href="#">Shop by Bike <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Motorcycle Accessories</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Riding gear
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item text-white" href="#">Action</a>
                <a class="dropdown-item text-white" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item text-white" href="#">Something else here</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled text-white" href="#">Helmets and Accessories</a>
            </li>
          </ul>
          <div>
            <div type="button" class="btn" data-toggle="modal" data-target="#signInModal">
              <img src="./Images/user.png" alt="" style="height: 20px;">
            </div>
            <div type="button" class="btn"><img src="./Images/bell.png" alt="" style="height: 20px;"></div>
            <div type="button" class="btn"><img src="./Images/heart.png" alt="" style="height: 20px;"></div>
            <div type="button" class="btn"><img src="./Images/shopping-cart.png" alt="" style="height: 20px;"></div>
          </div>
        </div>
      </nav>
    <!-- form of resistrstion -->
    <div class="py-4" style="background-color: #ebebeb;">
      <h1 class="text-center row justify-content-center">Create Account</h1>
      <form class="row justify-content-center">
        <div class="form-group w-50 col-7">
          <label for="Reg-ach" class="ml-2">First Name</label>
          <input
            type="text"
            name="fname"
            id="fname"
            class="form-control"
            id="Reg-ach"
            placeholder="Enter First Name"
          />
        </div>
        <div class="form-group w-50 col-7">
          <label for="Reg-jj6">Last Name</label>
          <input
            type="text"
            name="last_name"
            id="last_name"
            class="form-control"
            id="Reg-jj6"
            placeholder="Enter Last Name"
          />
        </div>
        <div class="form-group w-50 col-7">
          <label for="Reg-jxv">Email</label>
          <input
            type="email"
            name="email"
            class="form-control"
            id="Reg-jxv"
            placeholder="Enter Email"
          />
        </div>
        <div class="form-group w-50 col-7">
          <label for="Reg-n31">Mobile No.</label>
          <input
            type="text"
            name="mobile"
            class="form-control"
            id="Reg-n31"
            value=""
            placeholder="Enter Mobile No"
          />
        </div>
        <div class="form-group w-50 col-7">
          <label for="Reg-fd8">Password</label>
          <input
            type="password"
            name="password"
            class="form-control"
            id="password"
            placeholder="Enter Password"
          />
        </div>
        <div class="form-group w-50 col-7">
          <label>Your Gender</label>
          <div class="form-check">
            <input
              type="radio"
              name="gen"
              value="gender:male"
              class="form-check-input"
              id="cus-4h4"
            />
            <label class="form-check-label" for="cus-4h4">Male</label>
          </div>
          <div class="form-check w-50 col-7">
            <input
              type="radio"
              name="gen"
              value="gender:female"
              class="form-check-input"
              id="cus-4h5"
            />
            <label class="form-check-label" for="cus-4h5">Female</label>
          </div>
        </div>
        <div class="form-group w-50 col-7">
          <label for="bir-211">Birthday</label>
          <input
            type="date"
            name="date"
            class="form-control"
            id="bir-211"
            placeholder="Enter "
          />
        </div>
        <div class="form-group w-50 col-7">
          <label for="sub-r38">Which Motorcycle Do You Own</label>
          <select name="motor" class="form-control" id="sub-r38">
            <option value="customer[tags][Bike]">Select your bike Brand</option>
            <option value="Yamaha">Yamaha</option>
            <option value="Bmw">Bmw</option>
            <option value="Hero">Hero</option>
            <option value="Royal Enfield">Royal Enfield</option>
            <option value="Ktm">Ktm</option>
            <option value="Bajaj">Bajaj</option>
            <option value="Honda">Honda</option>
            <option value="Triumph">Triumph</option>
            <option value="Kawasaki">Kawasaki</option>
            <option value="Benelli">Benelli</option>
            <option value="Other Bikes">Other Bikes</option>
          </select>
        </div>
        <div class="form-group w-50 col-7">
          <select name="model" class="form-control" id="top-8ws">
            <option value="customer[tags][Bike]">
              Please select bike model
            </option>
            <option value="Es6">Es6</option>
            <option value="Es4">Es4</option>
            <!-- Add options here -->
          </select>
        </div>
        <div class="form-group w-50 col-7">
          <select name="year" class="form-control" id="cha-lcm">
            <option value="customer[tags][Bike]">
              Please select bike year
            </option>
            <option value="1995-2000">1995-2000</option>
            <option value="2000-2005">2000-2005</option>
            <option value="2005-2010">2005-2010</option>
            <option value="2010-2015">2010-2015</option>
            <option value="2015-2020">2015-2020</option>
            <option value="2020-Now">2020-Now</option>
            <!-- Add options here -->
          </select>
        </div>
      </form>
      <div class="row justify-content-center">
        <input
          onclick="submit()"
          class="btn btn-primary w-25"
          style="max-width: 15rem"
        />
      </div>
    </div>

    <!-- end of resistrstion form  -->
    <div class="footer mt-auto bg-dark text-white py-4 ">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-3 col-sm-12">
                    <h5>More About</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Green basket</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Affiliate</a></li>
                        <li><a href="#">Terms and Conditions</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-3 col-sm-12">
                    <h5>Help</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">FAQs</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Cancellation Policy</a></li>
                        <li><a href="#">Shipping Policy</a></li>
                        <li><a href="#">Site Map</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <h5 class="mx-lg-5 mx-md-0">Get Social With Us</h5>
                    <div class="d-flex justify-content-lg-center justify-content-md-start">
                        <button class="btn-secondary rounded-circle p-2 py-1  mx-2">
                            <img src="./Images/facebook.png" alt="" class="img-fluid">
                        </button>
                        <button class="rounded-circle btn-secondary p-2 py-1 mx-2">
                            <img src="./Images/instagram.png" alt="" class="img-fluid">
                        </button>
                        <button class="btn-secondary rounded-circle p-2 py-1 mx-2">
                            <img src="./Images/twitter.png" alt="" class="img-fluid">
                        </button>
                        <button class="btn-secondary rounded-circle p-2 py-1 mx-2">
                            <img src="./Images/pinterest-circular-logo-symbol.png" alt="" class="img-fluid">
                        </button>
                        <button class="btn-secondary rounded-circle p-2 py-1 mx-2">
                            <img src="./Images/youtube.png" alt="" class="img-fluid">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
      integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script>
        function submit(){
            var fname=$('input[name=fname]').val();
            var last_name=$('input[name=last_name]').val();
            var mobile=$('input[name=mobile]').val();
            var email=$('input[name=email]').val();
            var birthday=$('input[name=date]').val();
            var password=$('input[name=password]').val();
            var gen=$('input[name=gen]').val();
            var model=$('input[name=model]').val();
            
            $.ajax({
                url:'form-submit.php',
                method:'POST',
                type:'json',
                data:{fname:fname, last_name:last_name,mobile:mobile,email:email,birthday:birthday,
                password:password,gen:gen,model:model},
                success:function(response){
                  console.log(response);
                }
            })
        }
    </script>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js'></script>
  </body>
</html>
