<header>

    <div class="header__content">
        
        <div class="header__logo">
            <a href="/" title="Pàgina d'inici de Petits Detalls">
                <img src="/images/logo-petits-detalls.png" alt="Logo de Petits Detalls">
            </a>
            
            <div class="nav-toggle">
                <input type="checkbox" class="nav-toggle__checkbox" id="navi-toggle" autocomplete="off">
                <label for="navi-toggle" class="nav-toggle__button">
                    <span class="nav-toggle__icon">
                        &nbsp;
                    </span>
                </label>
            </div>
        </div>

        <nav class="menu toggleHidden">
            <ul>
            <?php
                $menu_length = count($menu);
                for($i = 0; $i < $menu_length; $i++) {
                    $cta_item = ($i == $menu_length - 1) ? "cta cta--c1" : "";
                    ?>
                        <li>
                            <a title="<?=$menu[$i]['title']?>" href="<?=$menu[$i]['url']?>" <?= $cta_item ? 'class="'.$cta_item.'"' : '' ?>">
                                <?=$menu[$i]['name']?>
                            </a>
                        </li>
                    <?php                        
                } 
                ?>
                
                <!-- idiomes -->
                <?php if(isset($correspondencies)) : ?>
                    <li class="languages">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" />
                            <path d="M3.6 9h16.8" />
                            <path d="M3.6 15h16.8" />
                            <path d="M11.5 3a17 17 0 0 0 0 18" />
                            <path d="M12.5 3a17 17 0 0 1 0 18" />
                        </svg>

                        
                        <div class="languages__list">
                            <?php
                                $mappedRoutes = [];
                                foreach ($correspondencies as $index => $route) {
                                    if (isset($languages[$index])) {
                                        $mappedRoutes[$route] = $languages[$index];
                                    }
                                }

                                foreach ($mappedRoutes as $route => $language) {
                                    if ($request === $route) {
                                        echo $language['name'];
                                    } else {
                                        echo '<a href="'.$route.'">'.$language['name'].'</a>';
                                    }
                                }
                            ?>
                        </div>
                    </li>
                <?php endif; ?>        
                
            </ul>
        </nav>
  
    </div>

  <script>
    const menuToggle = document.querySelector(".nav-toggle"),
    menuCheckBox = document.querySelector(".nav-toggle__checkbox"),
    menuMobile = document.querySelector(".menu"),
    menuIdiomes = document.querySelector(".header__lang"),
    menuItems = document.querySelectorAll(".menu__list-item--submenu");
    function toggleMenu() {
        menuCheckBox.checked
            ? (menuMobile.classList.replace("toggleHidden", "toggleVisible"), menuIdiomes.classList.replace("toggleHidden", "toggleVisible"))
            : (menuMobile.classList.replace("toggleVisible", "toggleHidden"), menuIdiomes.classList.replace("toggleVisible", "toggleHidden"));
    }
    menuToggle.addEventListener("click", toggleMenu);

  </script>
</header>