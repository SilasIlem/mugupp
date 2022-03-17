<style>
    * {
        padding : 0px;
        margin : 0px;
        box-sizing : border-box;
    }

    #container {
        display : flex;
        flex-direction : column-reverse;
        width : 96vw;
        margin : 20px auto;
        box-shadow : 0px 0px 8px #07649f;
        height : 96vh;
    }

    #main {
        width : 100%;
        height : 70%;
    }

    #description {
        width : 100%;
        height : 30%;
        background-image : linear-gradient(to bottom, #1288d1, #07649f);
    }

    form {
        display : flex;
        flex-direction : column;
        height : 500px;
        width : 300px;
        margin : auto;
        justify-content: space-around;
        align-items : center;
    }
    
    form input {
        width : 100%;
        height : 50px;
        color : grey;

    }

    input::placeholder {
        text-align : center;
    }

    form div {
        display : flex;
        flex-direction: row;
        justify-content : space-around;
    }
    
    form div input {
        width : 48%;
    }

    form button {
        color : white;
        background : #07649f;
        width : 100%;
        height : 30px;
        border-radius : 8px;
    }

    #description {
        padding : 30px;
    }

    #description h1, #description h2 {
        color : white;
        text-align : center;
        font-weight : bolder;
    }

    #description p {
        color : white;
        font-weight : bold;
        margin-top : 40px;
        text-align : center;
    }

    #description h2 {
        font-size : 38px;
    }

    #transactrust {
        width : 180px;
        margin : 10px 38%;
        height : 80px;
    }
</style>
<div id = container>
    <div id = main>
        <img id = transactrust src="{{ asset('images/Tranxactrust motion color.png') }}" alt="">
        <form action="">
            <input type="text" placeholder = "Account Name">
            <input type="email" placeholder = "Email Address">
            <input type="number" placeholder = "Card Number">
            <div>
                <input type="date" placeholder = "MM/YY" format = "mm-yy">
                <input type="number" placeholder = "Card Security Number">
            </div>
            
            <button>Pay Now</button>
        </form>
    </div>

    <div id = description>
        <h1>Payment For AST</h1>

        <p>To Pay</p> <h2>$10</h2>
    </div>
</div>