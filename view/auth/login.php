<div class="wrapper">
    <div class="logo"> <img src="img/logo.png" alt=""> </div>
    <div class="text-center mt-4 name"> Almoxarifado </div>
    <form class="p-3 mt-3" action="../Controllers/Auth.php" method="POST">
        <div class="form-field d-flex align-items-center"> 
            <span class="far fa-user"></span> 
            <input type="text" name="userName" id="userName" placeholder="Username"> 
        </div>
        <div class="form-field d-flex align-items-center"> 
            <span class="fas fa-key"></span> 
            <input type="password" name="password" id="pwd" placeholder="Password"> 
        </div> 
        <button class="btn mt-3" type="submit">Login</button>
    </form>
    <div class="text-center fs-6"> 
        <a onclick="loadPage(2)" href="javascript:void(0)">Forget password?</a> or 
        <a onclick="loadPage(3)" href="javascript:void(0)">Sign up</a> </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
