<html>
<head>
<style>
@import url('https://fonts.googleapis.com/css?family=Arimo');
$coral: #eb9478;
$maroon: #8e2807;
$title: #493b76;
body {
    display: flex;
    justify-content: center;
}
.wrapper {
    margin-top: 5%;
    width: 60%;
    display: flex;
    justify-content: center;
    font-family: "Arimo";
    background-color: $coral;
    -webkit-box-shadow: 9px 13px 25px 0px rgba(0, 0, 0, 0.18);
    -moz-box-shadow: 9px 13px 25px 0px rgba(0, 0, 0, 0.18);
    box-shadow: 9px 13px 25px 0px rgba(0, 0, 0, 0.18);
    animation: slideUp 2000ms ease;
}
@keyframes slideUp {
    0% {
        -webkit-transform: translateY(100%);
        transform: translateY(100%);
        visibility: visible;
    }

    100% {
        -webkit-transform: translateY(0);
        transform: translateY(0);
        }
}

.container {
    width: 65%;
    padding: 5% 10%;
}

h1 {
    align-self: center;
}

form {
    width: 100%;

    >* {
        margin-top: 20px;
    }

    input {
        width: 100%;
        min-height: 25px;
        border: 0;
        font-size: 1rem;
        letter-spacing: .15rem;
        font-family: "Arimo";
        margin-top: 5px;
        color: $maroon;
        border-radius: 4px;
    }

    label {
        text-transform: uppercase;
        font-size: 12px;
        letter-spacing: 2px;
        color: $maroon;
    }

    h1 {
        font-size: 24px;
        line-height: 10px;
        color: $title;
        letter-spacing: 1px;
    }

    h1:nth-of-type(2) {
        margin-top: 10%;
    }
}

.name {
    justify-content: space-between;
    display: flex;
    margin-bottom: 10px;
    width: 100%;

    div {
        width: 45%;
    }
}

.address-info {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;

    div {
        width: 30%;
    }
}

.cc-info {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;

    div {
        width: 45%;
    }
}

.btns {
    display: flex;
    flex-direction: column;
    align-items: flex-end;


    button {
        margin: 10px 10;
        height: 30px;
        width: 40%;
        color: #cfc9e1;
        background-color: #4a3b76;
        text-transform: uppercase;
        border: 0;
        border-radius: .3rem;
        letter-spacing: 2px;

        &:hover {
            animation-name: btn-hov;
            animation-duration: 550ms;
            animation-fill-mode: forwards;
        }
    }
}

@keyframes btn-hov {
    100% {
        background-color: #cfc9e1;
        color: #4a3b76;
        transform: scale(1.05)
    }
}

input:focus,
button:focus {
    outline: none;
}

@media (max-width: 736px) {
    .wrapper {
        width: 100%;
    }

    .container {
        width: 100%;
    }

    .btns {
        align-items: center;
        margin bottom:10px;

        button {
            width: 50%;
        }
    }

    form h1 {
        text-align: center;
    }

    .name,
    .address-info,
    .cc-info {
        flex-direction: column;
        width: 100%;
        justify-content: space-between;
        margin-bottom: 10px;

        div {
            align-items: center;
            flex-direction: column;
            width: 100%;
            display: flex;
        }
    }

    input {
        margin: 5px 0;
        min-height: 30px;
    }
    
}
</style>
</head>
<div class="wrapper">
    <div class="container">

    <div class="panel">
    <a href="#">
       <h4><button class="btn btn-primary">Payment details</button></h4>
     </a>
    </div>
        <form action="{{ route('lipa')}}" method="POST">
           @csrf
            <h2>
             Checkout Here
            </h2>
            <div class="name">
                <div>
                    <label for="f-name">Name</label>
                    <input type="text" name="name">
                </div>
                <div>
                    <label for="l-name">Location</label>
                    <input type="text" name="location">
                </div>
            </div>
            <div class="address-info">
                <div>
                    <label for="amount">Amount</label>
                    <input type="text" name="amount">
                </div>
                <div>
                    <label for="mobile">Mobile No:</label>
                    <input type="phone" name="mobile">
                </div>
             </div>
            <div class="btns">
               <input type="submit" value="purchase">
            </div>
            <p>You will receive popup massage once you click purchase.Enter your pin to complete transaction.</p>
        </form>
    </div>
</div>
<html>