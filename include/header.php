<header class="header">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between w-100">

            <!-- Left Group: 4-Square Button + Divider + Accessibility + Nav -->
            <div class="header-left-wrapper d-flex align-items-center">
                <div class="header-left d-flex align-items-center">

                    <button class="header-menu-btn hamburger-open-btn" id="openTaslMenuBtn" type="button"
                        aria-label="Toggle Menu">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M4 5C4 4.73478 4.10536 4.48043 4.29289 4.29289C4.48043 4.10536 4.73478 4 5 4H9C9.26522 4 9.51957 4.10536 9.70711 4.29289C9.89464 4.48043 10 4.73478 10 5V9C10 9.26522 9.89464 9.51957 9.70711 9.70711C9.51957 9.89464 9.26522 10 9 10H5C4.73478 10 4.48043 9.89464 4.29289 9.70711C4.10536 9.51957 4 9.26522 4 9V5ZM14 5C14 4.73478 14.1054 4.48043 14.2929 4.29289C14.4804 4.10536 14.7348 4 15 4H19C19.2652 4 19.5196 4.10536 19.7071 4.29289C19.8946 4.48043 20 4.73478 20 5V9C20 9.26522 19.8946 9.51957 19.7071 9.70711C19.5196 9.89464 19.2652 10 19 10H15C14.7348 10 14.4804 9.89464 14.2929 9.70711C14.1054 9.51957 14 9.26522 14 9V5ZM4 15C4 14.7348 4.10536 14.4804 4.29289 14.2929C4.48043 14.1054 4.73478 14 5 14H9C9.26522 14 9.51957 14.1054 9.70711 14.2929C9.89464 14.4804 10 14.7348 10 15V19C10 19.2652 9.89464 19.5196 9.70711 19.7071C9.51957 19.8946 9.26522 20 9 20H5C4.73478 20 4.48043 19.8946 4.29289 19.7071C4.10536 19.5196 4 19.2652 4 19V15ZM14 15C14 14.7348 14.1054 14.4804 14.2929 14.2929C14.4804 14.1054 14.7348 14 15 14H19C19.2652 14 19.5196 14.1054 19.7071 14.2929C19.8946 14.4804 20 14.7348 20 15V19C20 19.2652 19.8946 19.5196 19.7071 19.7071C19.5196 19.8946 19.2652 20 19 20H15C14.7348 20 14.4804 19.8946 14.2929 19.7071C14.1054 19.5196 14 19.2652 14 19V15Z"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>
                    </button>
                    <span class="divider"></span>
                    <button class="a11y-btn" id="openTaslA11yBtn" type="button" aria-label="Accessibility Adjustments"
                        onclick="(function(e){if(e&&e.preventDefault)e.preventDefault();var m=document.getElementById('taslA11yModal'),o=document.getElementById('taslA11yOverlay');if(m){m.classList.add('is-open');m.style.setProperty('display','flex','important');}if(o){o.classList.add('is-open');o.style.setProperty('display','block','important');}})(event)">
                        <img src="<?php echo $base_url; ?>images/Banner/toilet.png" alt="Accessibility"
                            class="a11y-icon-img">
                    </button>
                </div>

                <nav class="nav-pill d-inline-flex align-items-center">
                    <ul class="nav-menu list-unstyled d-flex align-items-center mb-0 ps-0">
                        <!-- 1. HOME -->
                        <li class="nav-item">
                            <a href="<?php echo $base_url; ?>index.php" class="nav-link">
                                <span class="at-link-swap">
                                    <span class="text-1">Home</span>
                                    <span class="text-2">Home</span>
                                </span>
                            </a>
                        </li>

                        <!-- 2. AEROSTRUCTURES & AERO - ENGINES -->
                        <li class="nav-item has-megamenu">
                            <a href="<?php echo $base_url; ?>about-us.php" class="nav-link">
                                <span class="at-link-swap">
                                    <span class="text-1">Aerostructures &amp; Aero - Engines</span>
                                    <span class="text-2">Aerostructures &amp; Aero - Engines</span>
                                </span>
                                <span class="nav-corner-icon"></span>
                            </a>
                            <div class="megamenu-dropdown" data-cols="3"
                                data-title="Aerostructures &amp; Aero - Engines"
                                data-img="<?php echo $base_url; ?>images/division/Aerostruct.png">
                                <div class="megamenu-topbar">
                                    <img src="<?php echo $base_url; ?>images/division/Aerostruct.png" alt="Aerostructures &amp; Aero - Engines" class="mm-topbar-img">
                                    <div class="mm-topbar-caption">
                                        <span class="mm-topbar-line"></span>
                                        <h4 class="mm-topbar-title">Aerostructures &amp; Aero - Engines</h4>
                                    </div>
                                </div>
                                <div class="megamenu-columns">
                                    <div class="megamenu-column">
                                        <div class="megamenu-col-head">
                                            <a href="<?php echo $base_url; ?>about-us.php"
                                                class="megamenu-col-title-link">
                                                <span>Centres of Excellence (CoEs)</span>
                                            </a>
                                        </div>
                                        <ul class="megamenu-list list-unstyled mb-0">
                                            <li><a href="<?php echo $base_url; ?>about-us.php"
                                                    class="megamenu-link">Assembly</a></li>
                                            <li><a href="<?php echo $base_url; ?>about-us.php"
                                                    class="megamenu-link">Composites</a></li>
                                            <li><a href="<?php echo $base_url; ?>about-us.php"
                                                    class="megamenu-link">Metallics</a></li>
                                            <li><a href="<?php echo $base_url; ?>about-us.php"
                                                    class="megamenu-link">Aero-Engines</a></li>
                                        </ul>
                                    </div>
                                    <div class="megamenu-column">
                                        <div class="megamenu-col-head">
                                            <a href="<?php echo $base_url; ?>about-us.php"
                                                class="megamenu-col-title-link">
                                                <span>Customers &amp; Programs</span>
                                            </a>
                                        </div>
                                        <ul class="megamenu-list list-unstyled mb-0">
                                            <li><a href="<?php echo $base_url; ?>about-us.php"
                                                    class="megamenu-link">Commercial</a></li>
                                            <li><a href="<?php echo $base_url; ?>about-us.php"
                                                    class="megamenu-link">Defence</a></li>
                                            <li><a href="<?php echo $base_url; ?>about-us.php"
                                                    class="megamenu-link">Commercial Engines</a></li>
                                        </ul>
                                    </div>
                                    <div class="megamenu-column">
                                        <div class="megamenu-col-head">
                                            <a href="<?php echo $base_url; ?>about-us.php"
                                                class="megamenu-col-title-link">
                                                <span>Capabilities</span>
                                            </a>
                                        </div>
                                        <ul class="megamenu-list list-unstyled mb-0">
                                            <li><a href="<?php echo $base_url; ?>about-us.php"
                                                    class="megamenu-link">Engineering and Technology</a></li>
                                            <li><a href="<?php echo $base_url; ?>about-us.php"
                                                    class="megamenu-link">Operational Excellence</a></li>
                                            <li><a href="<?php echo $base_url; ?>about-us.php"
                                                    class="megamenu-link">Rapid Industrialization &amp; Rate
                                                    Readiness</a></li>
                                            <li><a href="<?php echo $base_url; ?>about-us.php"
                                                    class="megamenu-link">Quality &amp; Awards</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- 3. AIRBORNE PLATFORMS & SYSTEMS (EXACT INTERNAL LINKS) -->
                        <li class="nav-item has-megamenu">
                            <a href="<?php echo $base_url; ?>F&R Wing-Platforms.php" class="nav-link">
                                <span class="at-link-swap">
                                    <span class="text-1">Airborne Platforms &amp; Systems</span>
                                    <span class="text-2">Airborne Platforms &amp; Systems</span>
                                </span>
                                <span class="nav-corner-icon"></span>
                            </a>
                            <div class="megamenu-dropdown" data-cols="5" data-title="Airborne Platforms &amp; Systems"
                                data-img="<?php echo $base_url; ?>images/division/Airborne Plat.png">
                                <div class="megamenu-topbar">
                                    <img src="<?php echo $base_url; ?>images/division/Airborne Plat.png" alt="Airborne Platforms &amp; Systems" class="mm-topbar-img">
                                    <div class="mm-topbar-caption">
                                        <span class="mm-topbar-line"></span>
                                        <h4 class="mm-topbar-title">Airborne Platforms &amp; Systems</h4>
                                    </div>
                                </div>
                                <div class="megamenu-columns">
                                    <!-- Column 1: Unmanned Aerial Systems -->
                                    <div class="megamenu-column">
                                        <div class="megamenu-col-head">
                                            <a href="<?php echo $base_url; ?>unnamed-ariel-system.php"
                                                class="megamenu-col-title-link">
                                                <span>Unmanned Aerial Systems</span>
                                            </a>
                                        </div>
                                        <ul class="megamenu-list list-unstyled mb-0">
                                            <li><a href="<?php echo $base_url; ?>rakshak-vtol.php" class="megamenu-link">Rakshak VTOL
                                                </a></li>
                                            <li><a href="<?php echo $base_url; ?>als.php" class="megamenu-link">
                                                    Advanced Loitering Systems(ALS)
                                                </a></li>
                                        </ul>
                                    </div>

                                    <!-- Column 2: Fixed and Rotary Wing Platforms -->
                                    <div class="megamenu-column">
                                        <div class="megamenu-col-head">
                                            <a href="<?php echo $base_url; ?>f&r wing-platforms.php"
                                                class="megamenu-col-title-link">
                                                <span>Fixed and Rotary Wing Platforms</span>
                                            </a>
                                        </div>
                                        <ul class="megamenu-list list-unstyled mb-0">
                                            <li><a href="<?php echo $base_url; ?>airbus-c295.php"
                                                    class="megamenu-link">Airbus C295</a></li>
                                            <li><a href="<?php echo $base_url; ?>airbus-h125.php"
                                                    class="megamenu-link">Airbus H125</a></li>
                                            <li><a href="<?php echo $base_url; ?>naval-utility.php"
                                                    class="megamenu-link">Naval Utility Helicopter</a></li>
                                        </ul>
                                    </div>

                                    <!-- Column 3: Mission Systems and Avionics -->
                                    <div class="megamenu-column">
                                        <div class="megamenu-col-head standalone-head">
                                            <a href="<?php echo $base_url; ?>mission-system.php"
                                                class="megamenu-col-title-link">
                                                <span>Mission Systems and Avionics</span>

                                            </a>
                                        </div>
                                    </div>

                                    <!-- Column 4: Satellite Integration -->
                                    <div class="megamenu-column">
                                        <div class="megamenu-col-head standalone-head">
                                            <a href="<?php echo $base_url; ?>satellite-integration.php"
                                                class="megamenu-col-title-link">
                                                <span>Satellite Integration</span>

                                            </a>
                                        </div>
                                    </div>

                                    <!-- Column 5: Missile Systems & Parts -->
                                    <div class="megamenu-column">
                                        <div class="megamenu-col-head standalone-head">
                                            <a href="<?php echo $base_url; ?>missile-system&parts.php"
                                                class="megamenu-col-title-link">
                                                <span>Missile Systems &amp; Parts</span>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- 4. DEFENCE & SECURITY -->
                        <li class="nav-item has-megamenu">
                            <a href="<?php echo $base_url; ?>Missile-System&Parts.php" class="nav-link">
                                <span class="at-link-swap">
                                    <span class="text-1">Defence &amp; Security</span>
                                    <span class="text-2">Defence &amp; Security</span>
                                </span>
                                <span class="nav-corner-icon"></span>
                            </a>
                            <div class="megamenu-dropdown" data-cols="7" data-title="Defence &amp; Security"
                                data-img="<?php echo $base_url; ?>images/division/Defence &S.png">
                                <div class="megamenu-topbar">
                                    <img src="<?php echo $base_url; ?>images/division/Defence &S.png" alt="Defence &amp; Security" class="mm-topbar-img">
                                    <div class="mm-topbar-caption">
                                        <span class="mm-topbar-line"></span>
                                        <h4 class="mm-topbar-title">Defence &amp; Security</h4>
                                    </div>
                                </div>
                                <div class="megamenu-columns">
                                    <div class="megamenu-column">
                                        <div class="megamenu-col-head">
                                            <a href="<?php echo $base_url; ?>Missile-System&Parts.php"
                                                class="megamenu-col-title-link">
                                                <span>Weapon Systems</span>
                                            </a>
                                        </div>
                                        <ul class="megamenu-list list-unstyled mb-0">
                                            <li><a href="<?php echo $base_url; ?>Missile-System&Parts.php"
                                                    class="megamenu-link">Rocket and Missile Launchers</a></li>
                                            <li><a href="<?php echo $base_url; ?>about-us.php"
                                                    class="megamenu-link">Artillery Gun Systems</a></li>
                                            <li><a href="<?php echo $base_url; ?>about-us.php"
                                                    class="megamenu-link">Armoured Sub-Systems</a></li>
                                        </ul>
                                    </div>
                                    <div class="megamenu-column">
                                        <div class="megamenu-col-head">
                                            <a href="<?php echo $base_url; ?>MissonSystem.php"
                                                class="megamenu-col-title-link">
                                                <span>C4I Systems</span>
                                            </a>
                                        </div>
                                        <ul class="megamenu-list list-unstyled mb-0">
                                            <li><a href="<?php echo $base_url; ?>MissonSystem.php"
                                                    class="megamenu-link">Air Defence Systems</a></li>
                                            <li><a href="<?php echo $base_url; ?>MissonSystem.php"
                                                    class="megamenu-link">Communication Systems</a></li>
                                            <li><a href="<?php echo $base_url; ?>MissonSystem.php"
                                                    class="megamenu-link">Combat Management Systems</a></li>
                                            <li><a href="<?php echo $base_url; ?>MissonSystem.php"
                                                    class="megamenu-link">Electronic Warfare Systems</a></li>
                                            <li><a href="<?php echo $base_url; ?>MissonSystem.php"
                                                    class="megamenu-link">Rugged Sub-Systems</a></li>
                                        </ul>
                                    </div>
                                    <div class="megamenu-column">
                                        <div class="megamenu-col-head">
                                            <a href="<?php echo $base_url; ?>about-us.php"
                                                class="megamenu-col-title-link">
                                                <span>Sensor Systems</span>
                                            </a>
                                        </div>
                                        <ul class="megamenu-list list-unstyled mb-0">
                                            <li><a href="<?php echo $base_url; ?>about-us.php"
                                                    class="megamenu-link">Radar Systems</a></li>
                                            <li><a href="<?php echo $base_url; ?>about-us.php"
                                                    class="megamenu-link">Sonar Systems</a></li>
                                        </ul>
                                    </div>
                                    <div class="megamenu-column">
                                        <div class="megamenu-col-head standalone-head">
                                            <a href="<?php echo $base_url; ?>about-us.php"
                                                class="megamenu-col-title-link">
                                                <span>Optronics</span>

                                            </a>
                                        </div>
                                    </div>
                                    <div class="megamenu-column">
                                        <div class="megamenu-col-head">
                                            <a href="<?php echo $base_url; ?>about-us.php"
                                                class="megamenu-col-title-link">
                                                <span>Testing Services</span>
                                            </a>
                                        </div>
                                        <ul class="megamenu-list list-unstyled mb-0">
                                            <li><a href="<?php echo $base_url; ?>about-us.php" class="megamenu-link">EMI
                                                    / EMC</a></li>
                                            <li><a href="<?php echo $base_url; ?>about-us.php" class="megamenu-link">RF
                                                    Wireless</a></li>
                                            <li><a href="<?php echo $base_url; ?>about-us.php"
                                                    class="megamenu-link">ESS</a></li>
                                            <li><a href="<?php echo $base_url; ?>about-us.php"
                                                    class="megamenu-link">On-site EMI</a></li>
                                        </ul>
                                    </div>
                                    <div class="megamenu-column">
                                        <div class="megamenu-col-head">
                                            <a href="<?php echo $base_url; ?>about-us.php"
                                                class="megamenu-col-title-link">
                                                <span>Fuel Cell Systems</span>
                                            </a>
                                        </div>
                                        <ul class="megamenu-list list-unstyled mb-0">
                                            <li><a href="<?php echo $base_url; ?>about-us.php"
                                                    class="megamenu-link">Portable Fuel Cell Systems</a></li>
                                            <li><a href="<?php echo $base_url; ?>about-us.php"
                                                    class="megamenu-link">Fuel Cell Auxiliary Power Units</a></li>

                                        </ul>
                                    </div>
                                    <div class="megamenu-column">
                                        <div class="megamenu-col-head">
                                            <a href="<?php echo $base_url; ?>about-us.php"
                                                class="megamenu-col-title-link">
                                                <span>Security</span>
                                            </a>
                                        </div>
                                        <ul class="megamenu-list list-unstyled mb-0">
                                            <li><a href="<?php echo $base_url; ?>about-us.php"
                                                    class="megamenu-link">Physical Security</a></li>
                                            <li><a href="<?php echo $base_url; ?>about-us.php"
                                                    class="megamenu-link">Cyber Security</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <!-- 5. LAND MOBILITY -->
                        <li class="nav-item has-megamenu">
                            <a href="<?php echo $base_url; ?>about-us.php" class="nav-link">
                                <span class="at-link-swap">
                                    <span class="text-1">Land Mobility</span>
                                    <span class="text-2">Land Mobility</span>
                                </span>
                                <span class="nav-corner-icon"></span>
                            </a>
                            <div class="megamenu-dropdown" data-cols="3" data-title="Land Mobility"
                                data-img="<?php echo $base_url; ?>images/division/Land Mobility.png">
                                <div class="megamenu-topbar">
                                    <img src="<?php echo $base_url; ?>images/division/Land Mobility.png" alt="Land Mobility" class="mm-topbar-img">
                                    <div class="mm-topbar-caption">
                                        <span class="mm-topbar-line"></span>
                                        <h4 class="mm-topbar-title">Land Mobility</h4>
                                    </div>
                                </div>
                                <div class="megamenu-columns">
                                    <div class="megamenu-column">
                                        <div class="megamenu-col-head">
                                            <a href="<?php echo $base_url; ?>about-us.php"
                                                class="megamenu-col-title-link">
                                                <span>Products</span>
                                            </a>
                                        </div>
                                        <ul class="megamenu-list list-unstyled mb-0">
                                            <li><a href="<?php echo $base_url; ?>about-us.php"
                                                    class="megamenu-link">Combat Vehicles</a></li>
                                            <li><a href="<?php echo $base_url; ?>about-us.php"
                                                    class="megamenu-link">Light Armored vehicles</a></li>
                                            <li><a href="<?php echo $base_url; ?>about-us.php"
                                                    class="megamenu-link">Tactical &amp; Combat Support Vehicles</a>
                                            </li>
                                            <li><a href="<?php echo $base_url; ?>about-us.php"
                                                    class="megamenu-link">Logistic and Mission Support Vehicles</a></li>
                                        </ul>
                                    </div>
                                    <div class="megamenu-column">
                                        <div class="megamenu-col-head">
                                            <a href="<?php echo $base_url; ?>about-us.php"
                                                class="megamenu-col-title-link">
                                                <span>Engineering Services</span>
                                            </a>
                                        </div>
                                        <ul class="megamenu-list list-unstyled mb-0">
                                            <li><a href="<?php echo $base_url; ?>about-us.php"
                                                    class="megamenu-link">Overhauls and Upgrades</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- Right: Logo -->
            <div class="header-right flex-shrink-0">
                <a href="<?php echo $base_url; ?>index.php" class="d-inline-block">
                    <img src="<?php echo $base_url; ?>images/Banner/logo.png" alt="Tata Advanced Systems"
                        class="logo-img logo-white">
                    <img src="<?php echo $base_url; ?>images/Banner/_TASL-logo.png" alt="Tata Advanced Systems"
                        class="logo-img logo-blue">
                </a>
            </div>
        </div>
    </div>




</header>


<!-- ==============================================================
     TASL PROPRIETARY OFFCANVAS SIDEBAR NAVIGATION
     ============================================================== -->
<div class="tasl-backdrop-overlay"></div>

<div class="tasl-sidebar-area">
    <div class="tasl-sidebar-bg"></div>
    <div class="tasl-sidebar-wrapper">
        <div class="tasl-sidebar-inner">

            <!-- Header: Logo & Close Button -->
            <div class="tasl-sidebar-header d-flex justify-content-between align-items-center mb-5">
                <a href="<?php echo $base_url; ?>" class="d-flex align-items-center gap-2 text-decoration-none">
                    <img src="<?php echo $base_url; ?>images/Banner/logo.png" alt="Tata Advanced Systems"
                        class="tasl-sidebar-logo">
                </a>
                <button class="tasl-sidebar-close" id="closeTaslMenuBtn" type="button" aria-label="Close Navigation">
                    <svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                        stroke-linecap="round" stroke-linejoin="round">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>

            <!-- Navigation Menu -->
            <div class="tasl-sidebar-nav">
                <nav>
                    <ul class="list-unstyled mb-0">
                        <!-- 1. HOME -->
                        <li>
                            <div class="tasl-nav-row">
                                <a href="<?php echo $base_url; ?>">Home</a>
                            </div>
                        </li>

                        <!-- 2. ABOUT US -->
                        <li class="has-dropdown">
                            <div class="tasl-nav-row">
                                <a href="#">About Us</a>
                                <button class="tasl-accordion-btn" type="button" aria-label="Toggle Submenu">
                                    <svg class="tasl-accordion-plus" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path d="M8 1V15M1 8H15" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" />
                                    </svg>
                                </button>
                            </div>
                            <div class="tasl-submenu">
                                <div class="tasl-submenu-group">
                                    <div class="tasl-submenu-title-wrap">

                                    </div>
                                    <ul>
                                        <li><a href="<?php echo $base_url; ?>about-us.php">Board of Directors</a></li>
                                        <li><a href="<?php echo $base_url; ?>about-us.php">What We Do</a></li>
                                        <li><a href="<?php echo $base_url; ?>about-us.php">What We Value</a></li>
                                        <li><a href="<?php echo $base_url; ?>about-us.php">Joint Venture &amp; Subsidiaries</a></li>
                                    </ul>
                                </div>
                                <div class="tasl-submenu-group">
                                    <div class="tasl-submenu-title-wrap">
                                        <span class="tasl-submenu-title">Media</span>
                                    </div>
                                    <ul>
                                        <li><a href="<?php echo $base_url; ?>about-us.php">Press Releases</a></li>
                                        <li><a href="<?php echo $base_url; ?>about-us.php">Media Kit</a></li>
                                        <li><a href="<?php echo $base_url; ?>about-us.php">Brand Guidelines</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <!-- 3. AEROSTRUCTURES & AERO - ENGINES -->
                        <li class="has-dropdown">
                            <div class="tasl-nav-row">
                                <a href="#">Aerostructures &amp; Aero - Engines</a>
                                <button class="tasl-accordion-btn" type="button" aria-label="Toggle Submenu">
                                    <svg class="tasl-accordion-plus" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path d="M8 1V15M1 8H15" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" />
                                    </svg>
                                </button>
                            </div>
                            <div class="tasl-submenu">
                                <div class="tasl-submenu-group">
                                    <div class="tasl-submenu-title-wrap">
                                        <span class="tasl-submenu-title">Centres of Excellence (CoEs)</span>
                                    </div>
                                    <ul>
                                        <li><a href="#">Assembly</a></li>
                                        <li><a href="#">Composites</a></li>
                                        <li><a href="#">Metallics</a></li>
                                        <li><a href="#">Aero-Engines</a></li>
                                    </ul>
                                </div>
                                <div class="tasl-submenu-group">
                                    <div class="tasl-submenu-title-wrap">
                                        <span class="tasl-submenu-title">Customers &amp; Programs</span>
                                    </div>
                                    <ul>
                                        <li><a href="#">Commercial</a></li>
                                        <li><a href="#">Defence</a></li>
                                        <li><a href="#">Commercial Engines</a></li>
                                    </ul>
                                </div>
                                <div class="tasl-submenu-group">
                                    <div class="tasl-submenu-title-wrap">
                                        <span class="tasl-submenu-title">Capabilities</span>
                                    </div>
                                    <ul>
                                        <li><a href="#">Engineering and Technology</a></li>
                                        <li><a href="#">Operational Excellence</a></li>
                                        <li><a href="#">Rapid Industrialization &amp; Rate Readiness</a></li>
                                        <li><a href="#">Quality &amp; Awards</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <!-- 4. AIRBORNE PLATFORMS & SYSTEMS -->
                        <li class="has-dropdown">
                            <div class="tasl-nav-row">
                                <a href="#">Airborne Platforms &amp; Systems</a>
                                <button class="tasl-accordion-btn" type="button" aria-label="Toggle Submenu">
                                    <svg class="tasl-accordion-plus" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path d="M8 1V15M1 8H15" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" />
                                    </svg>
                                </button>
                            </div>
                            <div class="tasl-submenu">
                                <div class="tasl-submenu-group">
                                    <div class="tasl-submenu-title-wrap">
                                        <span class="tasl-submenu-title">Unmanned Aerial Systems</span>
                                    </div>
                                    <ul>
                                        <li><a href="<?php echo $base_url; ?>rakshak-vtol.php">Rakshak VTOL</a></li>
                                        <li><a href="<?php echo $base_url; ?>als.php">Advanced Loitering Systems (ALS)</a></li>
                                    </ul>
                                </div>
                                <div class="tasl-submenu-group">
                                    <div class="tasl-submenu-title-wrap">
                                        <span class="tasl-submenu-title">Fixed and Rotary Wing Platforms</span>
                                    </div>
                                    <ul>
                                        <li><a href="<?php echo $base_url; ?>airbus-c295.php">Airbus C295</a></li>
                                        <li><a href="<?php echo $base_url; ?>airbus-h125.php">Airbus H125</a></li>
                                        <li><a href="<?php echo $base_url; ?>naval-utility.php">Naval Utility Helicopter Partnership</a></li>
                                    </ul>
                                </div>
                                <div class="tasl-submenu-group">
                                    <div class="tasl-submenu-title-wrap">
                                        <span class="tasl-submenu-title">Mission Systems &amp; Parts</span>
                                    </div>
                                    <ul>
                                        <li><a href="<?php echo $base_url; ?>mission-system.php">Mission Systems and Avionics</a></li>
                                        <li><a href="<?php echo $base_url; ?>satellite-integration.php">Satellite Integration</a></li>
                                        <li><a href="<?php echo $base_url; ?>missile-system&parts.php">Missile Systems &amp; Parts</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <!-- 5. DEFENCE & SECURITY -->
                        <li class="has-dropdown">
                            <div class="tasl-nav-row">
                                <a href="#">Defence &amp; Security</a>
                                <button class="tasl-accordion-btn" type="button" aria-label="Toggle Submenu">
                                    <svg class="tasl-accordion-plus" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path d="M8 1V15M1 8H15" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" />
                                    </svg>
                                </button>
                            </div>
                            <div class="tasl-submenu">
                                <div class="tasl-submenu-group">
                                    <div class="tasl-submenu-title-wrap">
                                        <span class="tasl-submenu-title">Weapon Systems</span>
                                    </div>
                                    <ul>
                                        <li><a href="#">Rocket and Missile Launchers</a></li>
                                        <li><a href="#">Artillery Gun Systems</a></li>
                                        <li><a href="#">Armoured Sub-Systems</a></li>
                                    </ul>
                                </div>
                                <div class="tasl-submenu-group">
                                    <div class="tasl-submenu-title-wrap">
                                        <span class="tasl-submenu-title">C4I Systems</span>
                                    </div>
                                    <ul>
                                        <li><a href="#">Air Defence Systems</a></li>
                                        <li><a href="#">Communication Systems</a></li>
                                        <li><a href="#">Combat Management Systems</a></li>
                                        <li><a href="#">Electronic Warfare Systems</a></li>
                                        <li><a href="#">Rugged Sub-Systems</a></li>
                                    </ul>
                                </div>
                                <div class="tasl-submenu-group">
                                    <div class="tasl-submenu-title-wrap">
                                        <span class="tasl-submenu-title">Sensors &amp; Infrastructure</span>
                                    </div>
                                    <ul>
                                        <li><a href="#">Radar &amp; Sonar Systems</a></li>
                                        <li><a href="#">Optronics &amp; Electro-Optics</a></li>
                                        <li><a href="#">Testing Services (EMI / EMC, RF)</a></li>
                                        <li><a href="#">Portable Fuel Cell Systems</a></li>
                                        <li><a href="#">Physical &amp; Cyber Security</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <!-- 6. LAND MOBILITY -->
                        <li class="has-dropdown">
                            <div class="tasl-nav-row">
                                <a href="#">Land Mobility</a>
                                <button class="tasl-accordion-btn" type="button" aria-label="Toggle Submenu">
                                    <svg class="tasl-accordion-plus" width="16" height="16" viewBox="0 0 16 16"
                                        fill="none">
                                        <path d="M8 1V15M1 8H15" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" />
                                    </svg>
                                </button>
                            </div>
                            <div class="tasl-submenu">
                                <div class="tasl-submenu-group">
                                    <div class="tasl-submenu-title-wrap">
                                        <span class="tasl-submenu-title">Products</span>
                                    </div>
                                    <ul>
                                        <li><a href="#">Combat Vehicles</a></li>
                                        <li><a href="#">Light Armored vehicles</a></li>
                                        <li><a href="#">Tactical &amp; Combat Support Vehicles</a></li>
                                        <li><a href="#">Logistic and Mission Support Vehicles</a></li>
                                    </ul>
                                </div>
                                <div class="tasl-submenu-group">
                                    <div class="tasl-submenu-title-wrap">
                                        <span class="tasl-submenu-title">Engineering Services</span>
                                    </div>
                                    <ul>
                                        <li><a href="#">Overhauls and Upgrades</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <!-- 7. CAREERS -->
                        <li>
                            <div class="tasl-nav-row">
                                <a href="<?php echo $base_url; ?>about-us.php">Careers</a>
                            </div>
                        </li>

                        <!-- 8. CONTACT US -->
                        <li>
                            <div class="tasl-nav-row">
                                <a href="<?php echo $base_url; ?>about-us.php">Contact Us</a>
                            </div>
                        </li>

                        <!-- 9. INVESTORS -->
                        <li>
                            <div class="tasl-nav-row">
                                <a href="<?php echo $base_url; ?>about-us.php">Investors</a>
                            </div>
                        </li>

                        <!-- 10. MEDIA -->
                        <li>
                            <div class="tasl-nav-row">
                                <a href="<?php echo $base_url; ?>about-us.php">Media</a>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</div>