<script>
    const MOBILE_BREAKPOINT = 768;

    const onChange = () => {
        if (window.screen.width > MOBILE_BREAKPOINT) {
            openSidebar()
        } else {
            closeSidebar()
        }
    };
    window.addEventListener("resize", onChange);

    function openSidebar(e) {
        e?.preventDefault()
        const sidebar = document.getElementById("sidebar")
        if (sidebar)
            sidebar.style.transform = 'initial'
    }

    function closeSidebar(e) {
        e?.preventDefault()
        const sidebar = document.getElementById("sidebar")
        if (sidebar)
            sidebar.style.transform = 'translate(-100%)'
    }

    function toggleClass(elementId, className) {
        const element = document.getElementById(elementId)
        if (element) {
            element.classList.toggle(className)
        }
    }


    function closeSlideIn() {
        // go back to previous page or go dashboard if no history
        if (window.history.length > 1) {
            window.history.back()
        } else {
            window.location.href = '/dashboard.php'
        }
        //
    }
</script>