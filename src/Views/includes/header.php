<?php ob_start() ?>
<nav>
    <a href="/"><img src="/img/files/logo.png" alt=""></a>
    <ul class="menu-fluid">
        <li><a href="#" class="activeMenuBurger menu">menu</a>
            <ul class="menuBurger">
                <li class="cross"><img src="img/assets/cross.svg" alt=""></li>
                <li><a href="#">home</a></li>
                <li><a href="#">model</a></li>
                <li><a href="#">watch</a></li>
                <li><a href="#">brands</a></li>
                <li><a href="#" class="activeMenuBurger">pages <i class="fa-solid fas fa-chevron-right"></i></a>
                    <ul class="menuBurger">
                        <li class="backMenu"><i class="fa-regular fas fa-chevron-left"></i></li>
                        <li>pages</li>
                        <li><a href="#">about</a></li>
                        <li><a href="#">blog</a></li>
                        <li><a href="#">faq</a></li>
                        <li><a href="#">contact us</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="/cart"><i class="fa-solid fas fa-cart-plus"></i></a></li>
        <li><a href="/login"><i class="fa-solid fas fa-user"></i></a></li>
        <li><a href="#" class="search"><img src="img/assets/search.svg" alt=""></a></li>
        <li><a href="#">USD <i class="fa-regular fas fa-chevron-down"></i></a></li>
    </ul>
</nav>
<?php
$header = ob_get_clean();
?>