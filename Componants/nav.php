<nav>
<!--    <a href="/" class="navbar-brand">Accueil</a>-->
    <ul>
        <li class="gauche"><a href="/tp">Accueil</a></li>
        <li><a class="droite" href="/tp/?page=boutique">Boutique</a></li>
        <li><a class="droite" href="/tp/?page=panier">Panier</a></li>
        <li><a class="droite" href="/tp/?page=deconnexion">Deconnexion</a></li>
    </ul>
</nav>
<style>
    nav{

        background-color: silver;
        padding-top: 15px;
        font-size: 2rem;
    }
    nav ul{
        width: 100%;
        display: flex;
        justify-content: space-evenly;
        margin-bottom: 0px;

    }
     nav ul li {
        display: inline;
        /*display: flex;*/
        /* flex-direction: row;*/
    }

    /*nav ul li a{*/
    /*    margin-right: 25px;*/
    /*}*/
    .gauche{
        margin-right: 65%;
    }
    .droite{
        margin-right: 30px;
    }
</style>
