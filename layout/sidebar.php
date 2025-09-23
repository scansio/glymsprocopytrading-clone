<script>
    // JavaScript to toggle sidebar visibility based on screen size
    function toggleSidebar(show = false, initial = false) {
        const mobileSidebar = document.querySelector('.mobile-sidebar');
        const desktopSidebar = document.querySelector('.desktop-sidebar');

        if (window.innerWidth <= 768) {
            // Mobile view
            if (mobileSidebar) mobileSidebar.style.display = show && !initial ? 'block' : "none";
            if (desktopSidebar) desktopSidebar.style.display = 'none';
        } else {
            // Desktop view
            if (mobileSidebar) mobileSidebar.style.display = 'none';
            if (desktopSidebar) desktopSidebar.style.display = show ? 'block' : "none";
        }
    }

    // Run on document loaded
    document.addEventListener('DOMContentLoaded', function() {
        // Initial call
        toggleSidebar(true, true);

        // Listen for window resize
        window.addEventListener('resize', function() {
            toggleSidebar(true, true);
        });
    });

    function toggleUserTab() {
        const userTabMenu = document.querySelectorAll('.userTabMenu');
        if (userTabMenu) {
            for (let i = 0; i < userTabMenu.length; i++) {
                if (userTabMenu[i].style.display === 'block') {
                    userTabMenu[i].style.display = 'none';
                } else {
                    userTabMenu[i].style.display = 'block';
                }
            }
        }
    }
</script>

<style>
    .userTabMenu {
        display: none;
    }
</style>

<div class="sc-esYjtY iLtyI mobile-sidebar" style="display: none;">
    <div class="sc-tafSX eHcceq"></div>
    <div class="sc-fXSgRJ fTTUFL scrollbar-hide ">
        <div class="top_section"><span style="display: flex; justify-content: space-between; align-items: center;"><img src="./assets/logo.png" alt="logo" width="100px" height="50px" class="logo"><img src="./assets/asseticons/close.svg" alt="" class="sidebar_close" onclick="toggleSidebar(false)"></span>
            <div class="mobile_menu_navigation">
                <div class="swipeable-content">
                    <div class="page"><a class="link" href="./dashboard.php"><button><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" strokeLineJoin="round" class="lucide lucide-house">
                                    <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                                    <path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                </svg>
                                <p>Dashboard</p>
                            </button></a><a class="link" href="./deposit.php"><button><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" strokeLineJoin="round" class="lucide lucide-circle-plus">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M8 12h8"></path>
                                    <path d="M12 8v8"></path>
                                </svg>
                                <p>Deposit</p>
                            </button></a><a class="link" href="./withdraw.php"><button><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" strokeLineJoin="round" class="lucide lucide-circle-minus">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M8 12h8"></path>
                                </svg>
                                <p>Withdraw</p>
                            </button></a><a class="link" href="./convert.php"><button><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" strokeLineCap="round" strokeLineJoin="round" class="lucide lucide-arrow-left-right">
                                    <path d="M8 3 4 7l4 4"></path>
                                    <path d="M4 7h16"></path>
                                    <path d="m16 21 4-4-4-4"></path>
                                    <path d="M20 17H4"></path>
                                </svg>
                                <p>Convert</p>
                            </button></a><a class="link" href="./assets.php"><button><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" strokeLineJoin="round" class="lucide lucide-wallet-minimal">
                                    <path d="M17 14h.01"></path>
                                    <path d="M7 7h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14"></path>
                                </svg>
                                <p>Assets</p>
                            </button></a><a class="link" href="./markets.php"><button><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" strokeLineJoin="round" class="lucide lucide-chart-pie">
                                    <path d="M21 12c.552 0 1.005-.449.95-.998a10 10 0 0 0-8.953-8.951c-.55-.055-.998.398-.998.95v8a1 1 0 0 0 1 1z"></path>
                                    <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                                </svg>
                                <p>Markets</p>
                            </button></a><a class="link" href="./live-trade.php"><button><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" strokeLineCap="round" strokeLineJoin="round" class="lucide lucide-activity">
                                    <path d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2"></path>
                                </svg>
                                <p>Live Trade</p>
                            </button></a><a class="link" href="./trade.php"><button><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" strokeLineJoin="round" class="lucide lucide-trending-up">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                    <polyline points="16 7 22 7 22 13"></polyline>
                                </svg>
                                <p>Demo Trade</p>
                            </button></a>
                        <a class="link" href="./stake.php">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" strokeLineCap="round" strokeLineJoin="round" class="lucide lucide-coins">
                                    <circle cx="8" cy="8" r="6"></circle>
                                    <path d="M18.09 10.37A6 6 0 1 1 10.34 18"></path>
                                    <path d="M7 6h1v4"></path>
                                    <path d="m16.71 13.88.7.71-2.82 2.82"></path>
                                </svg>
                                <p>Stake</p>
                            </button></a><a class="link" href="./ranking.php"><button><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" strokeLineCap="round" strokeLineJoin="round" class="lucide lucide-shield-half">
                                    <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                                    <path d="M12 22V2"></path>
                                </svg>
                                <p>Ranking</p>
                            </button></a>
                        <a class="link" href="./referrals.php"><button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" strokeLineCap="round" strokeLineJoin="round" class="lucide lucide-users">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <p>Referrals</p>
                            </button></a>

                        <a class="link" href="./wallet-connect.php">
                            <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" strokeLineCap="round" strokeLineJoin="round" class="lucide lucide-link">
                                    <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                                    <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                                </svg>
                                <p>Wallet Connect</p>
                            </button>
                        </a>
                        <a class="link" href="./copy-experts.php"><button><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" strokeLineJoin="round" class="lucide lucide-copy">
                                    <rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect>
                                    <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path>
                                </svg>
                                <p>Copy Experts</p>
                            </button></a>
                        <a class="link" href="./settings.php"><button><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" strokeLineJoin="round" class="lucide lucide-settings">
                                    <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>
                                <p>Settings</p>
                            </button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sc-fjvwmM hJiwgB bottom_section">
            <div class="menu userTabMenu">
                <a href="./settings.php">

                    <span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" strokeLineJoin="round" class="lucide lucide-settings">
                            <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                        <p>Settings</p>
                    </span>

                </a>
                <a href="#">
                    <span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" strokeLineCap="round" strokeLineJoin="round" class="lucide lucide-log-out">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" x2="9" y1="12" y2="12"></line>
                        </svg>
                        <p>Log out</p>
                    </span>
                </a>

            </div>
            <div class="user_tab" onclick="toggleUserTab()"><span class="user_container">
                    <div class="user_circle">
                        <p>M</p>
                    </div><span class="user_details">
                        <p class="name">Munner Jennifer</p>
                    </span>
                </span><span class="selectors"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 9L12 4L17 9" stroke="#BAC2DE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 15L12 20L17 15" stroke="#BAC2DE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg></span></div>
        </div>
    </div>
</div>

<div class="sc-esYjtY iLtyI desktop-sidebar " style="display: none;">
    <div class="sc-tafSX eHcceq"></div>
    <div class="sc-JrEyx kSCqsC scrollbar-hide ">
        <div class="top_section"><span style="display: flex; justify-content: space-between; align-items: center;"><img
                    src="./assets/logo.png" alt="logo" width="60px" class="logo"></span>
            <div class="selectable_sections">
                <div class="selectable_section">
                    <div class="sidebar_items"><a class="link" href="./dashboard.php"><span
                                class="sidebar_item <?php echo $pageTitle == "Dashboard" ? "active" : "" ?>"><svg xmlns="http://www.w3.org/2000/svg" width="18"
                                    height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" strokeLineJoin="round" class="lucide lucide-house">
                                    <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                                    <path
                                        d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z">
                                    </path>
                                </svg>
                                <p>Dashboard</p>
                            </span></a><a class="link" href="./deposit.php"><span class="sidebar_item <?php echo $pageTitle == "Deposit" ? "active" : "" ?>"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    strokeLineJoin="round" class="lucide lucide-circle-plus">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M8 12h8"></path>
                                    <path d="M12 8v8"></path>
                                </svg>
                                <p>Deposit</p>
                            </span></a><a class="link" href="./withdraw.php"><span class="sidebar_item <?php echo $pageTitle == "Withdraw" ? "active" : "" ?>"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    strokeLineJoin="round" class="lucide lucide-circle-minus">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M8 12h8"></path>
                                </svg>
                                <p>Withdraw</p>
                            </span></a><a class="link" href="./convert.php"><span class="sidebar_item <?php echo $pageTitle == "Convert" ? "active" : "" ?>"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" strokeLineCap="round"
                                    strokeLineJoin="round" class="lucide lucide-arrow-left-right">
                                    <path d="M8 3 4 7l4 4"></path>
                                    <path d="M4 7h16"></path>
                                    <path d="m16 21 4-4-4-4"></path>
                                    <path d="M20 17H4"></path>
                                </svg>
                                <p>Convert</p>
                            </span></a><a class="link" href="./assets.php"><span class="sidebar_item <?php echo $pageTitle == "Assets" ? "active" : "" ?>"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    strokeLineJoin="round" class="lucide lucide-wallet-minimal">
                                    <path d="M17 14h.01"></path>
                                    <path d="M7 7h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14">
                                    </path>
                                </svg>
                                <p>Assets</p>
                            </span></a>
                        <a class="link" href="./markets.php"><span class="sidebar_item <?php echo $pageTitle == "Markets" ? "active" : "" ?>"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    strokeLineJoin="round" class="lucide lucide-chart-pie">
                                    <path
                                        d="M21 12c.552 0 1.005-.449.95-.998a10 10 0 0 0-8.953-8.951c-.55-.055-.998.398-.998.95v8a1 1 0 0 0 1 1z">
                                    </path>
                                    <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                                </svg>
                                <p>Markets</p>
                            </span></a><a class="link" href="./live-trade.php"><span class="sidebar_item <?php echo $pageTitle == "Live trade" ? "active" : "" ?>"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" strokeLineCap="round"
                                    strokeLineJoin="round" class="lucide lucide-activity">
                                    <path
                                        d="M22 12h-2.48a2 2 0 0 0-1.93 1.46l-2.35 8.36a.25.25 0 0 1-.48 0L9.24 2.18a.25.25 0 0 0-.48 0l-2.35 8.36A2 2 0 0 1 4.49 12H2">
                                    </path>
                                </svg>
                                <p>Live Trade</p>
                            </span></a><a class="link" href="./trade.php"><span class="sidebar_item <?php echo $pageTitle == "Trade" ? "active" : "" ?>"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    strokeLineJoin="round" class="lucide lucide-trending-up">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                    <polyline points="16 7 22 7 22 13"></polyline>
                                </svg>
                                <p>Demo Trade</p>
                            </span></a><a class="link" href="./stake.php"><span class="sidebar_item <?php echo $pageTitle == "Stake" ? "active" : "" ?>"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" strokeLineCap="round"
                                    strokeLineJoin="round" class="lucide lucide-coins">
                                    <circle cx="8" cy="8" r="6"></circle>
                                    <path d="M18.09 10.37A6 6 0 1 1 10.34 18"></path>
                                    <path d="M7 6h1v4"></path>
                                    <path d="m16.71 13.88.7.71-2.82 2.82"></path>
                                </svg>
                                <p>Stake</p>
                            </span></a><a class="link" href="./ranking.php"><span class="sidebar_item <?php echo $pageTitle == "Ranking" ? "active" : "" ?>"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" strokeLineCap="round"
                                    strokeLineJoin="round" class="lucide lucide-shield-half">
                                    <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                    </path>
                                    <path d="M12 22V2"></path>
                                </svg>
                                <p>Ranking</p>
                            </span></a>

                        <a class="link" href="./referrals.php"><span class="sidebar_item <?php echo $pageTitle == "Referrals" ? "active" : "" ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18"
                                    height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    strokeLineCap="round" strokeLineJoin="round" class="lucide lucide-users">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <p>Referrals</p>
                            </span></a>
                        <a class="link" href="./wallet-connect.php"><span class="sidebar_item <?php echo $pageTitle == "Wallet connect" ? "active" : "" ?>"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    strokeLineCap="round" strokeLineJoin="round" class="lucide lucide-link">
                                    <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path>
                                    <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path>
                                </svg>
                                <p>Wallet Connect</p>
                            </span>
                        </a>
                        <a class="link" href="./copy-experts.php"><span class="sidebar_item <?php echo $pageTitle == "Copy experts" ? "active" : "" ?>"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    strokeLineJoin="round" class="lucide lucide-copy">
                                    <rect width="14" height="14" x="8" y="8" rx="2" ry="2"></rect>
                                    <path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"></path>
                                </svg>
                                <p>Copy Experts</p>
                            </span></a>
                        <a class="link"
                            href="./settings.php">
                            <span class="sidebar_item <?php echo $pageTitle == "Settings" ? "active" : "" ?>"><svg xmlns="http://www.w3.org/2000/svg" width="18"
                                    height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" strokeLineJoin="round" class="lucide lucide-settings">
                                    <path
                                        d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z">
                                    </path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>
                                <p>Settings</p>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sc-fjvwmM hJiwgB bottom_section">
            <div class="menu userTabMenu">
                <a href="./settings.php">

                    <span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" strokeLineJoin="round"
                            class="lucide lucide-settings">
                            <path
                                d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z">
                            </path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                        <p>Settings</p>
                    </span>
                </a>
                <a href="#">

                    <span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" strokeLineCap="round" strokeLineJoin="round"
                            class="lucide lucide-log-out">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" x2="9" y1="12" y2="12"></line>
                        </svg>
                        <p>Log out</p>
                    </span>
                </a>
            </div>
            <div class="user_tab" onclick="toggleUserTab()"><span class="user_container">
                    <div class="user_circle">
                        <p>M</p>
                    </div><span class="user_details">
                        <p class="name">Munner Jennifer</p>
                    </span>
                </span><span class="selectors"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 9L12 4L17 9" stroke="#BAC2DE" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 15L12 20L17 15" stroke="#BAC2DE" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round"></path>
                    </svg></span></div>
        </div>
    </div>
</div>