let navbar1 = () => {
    return `
    <link rel="stylesheet" href="./components/styles/navBarStyle.css">
    <div id="kau_main">
        <div id="kau_innerMain">
            <a id="kau_logo" href="index.html"><img  src="images/icons/Rbg.png" alt=""></a>
            <div id="kau_city_div">
                <select name="" id="kau_city">
                    <option value="">City</option>
                    <option value="Dehradun">Dehradun</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Pune">Pune</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Noida">Noida</option>
                    <option value="Gurgaon">Gurgaon</option>
                    <option value="Hydrabad">Hydrabad</option>
                    <option value="Chennai">Chennai</option>
                    <option value="Kolkata">Kolkata</option>
                </select>
            </div>

            <input id="kau_scarch" type="text" placeholder="Search for products">
            <span>
                <img id="kau_searchLogo" src="../images/icons/image2.svg" alt="">
            </span>
            <a href="cart.html" class="nav_display_flex">
                <span>
                    <img id="kau_cartLogo" src="../images/icons/image1.svg" alt="">
                </span>
                <span id="kau_cart">Cart</span>
            </a>
            

            <div>
                <button id="kau_button">LOGIN</button>
                <div id="kau_show-on-hover" class="kau_dropdc">
                    <p>
                        <img src="https://cdn-icons-png.flaticon.com/128/8033/8033582.png" alt="">
                        <a href="myAccount.html">My Account</a>
                    </p>

                    <p>
                        <img src="https://cdn-icons-png.flaticon.com/128/3524/3524659.png" alt="">
                        <a href="mySetting.html">Setting</a>
                    </p>
                    <p>
                        <img src="../images/icons/logouticon.png"
                            alt="">
                        <a href="index.html">Logout</a>
                    </p>
                    <p>
                        <img src="../images/icons/signup.png" alt="">
                        <a href="log.html">Login</a>
                    </p>
                    <p>
                        <img src="../images/icons/signup.png" alt="">
                        <a href="registration.html">Signup</a>
                    </p>
                </div>
            </div>
        </div>
    </div>`
}
function kau_myfunc() {
    let div = document.querySelector("#kau_show-on-hover");
    div.classList.toggle("kau_show");
}


// i have changed this line


// function samLogFunc(){
//     let log = document.getElementById('sam_log');
//     // console.log(log);
//     console.log('logging....')
// }

export default navbar1;
