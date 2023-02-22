<nav class="nav-c">
  <style>
*{
    margin:0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Nunito",sans-serif;
}
a{
    text-decoration: none;
    color: inherit;
}
.nav-c{
    display: flex;
    text-align: center;
    justify-content: space-between;
    align-items: center;
    width:100%;
    box-shadow: 0 2px 4px 0 rgba(0,0,0,.2);
    font-family: "Nunito",sans-serif;
}
.nav--logo{
    margin: 10px;
    height:50px;
    width: 50px;
    user-select: none;
}
.nav--account{
    margin: auto;
    padding: 10px 35px;
    background-color: #3399FF;
    border-radius: 5px;
    cursor: pointer;
}
.nav--acceuil{
    margin: auto;
    cursor: pointer;
    padding: 10px 35px;
}
  </style>
        <span class="nav--acceuil"><img src="../img/home-logo.svg" alt="icon" class="nav--icon" height="20px">
        <a href="../index">Acceuil</a></span>
        <img src="../img/logoNeptune.jpg" alt="logo" class="nav--logo">
        <span class="nav--account"><img src="../img/profil-logo.svg" alt="icon" class="nav--icon" height="20px">
        <a href="./public/login">Compte</a></span>
    </nav>