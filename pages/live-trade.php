<div class="main">
    <div class="main_title"><span>
            <p>Live Trading</p>
        </span></div>
    <div style="padding: 24px; background-color: rgba(255, 255, 255, 0.024); border-radius: 12px;">
        <div style="display: flex; justify-content: center; align-items: center; height: 70vh; position: relative;"><video autoplay="" playsinline="" controls="" src="https://app.glymsprocopytrading.com/ranking/live-trade.mp4" style="width: 100%; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;"></video><button class="sc-dWZrec iWagTn button bounce" id="startLiveTradeBtn">Start live Trading</button></div>
    </div>
</div>

<script>
    function startLiveTrading() {
        let t = document.getElementById("startLiveTradeModal")
        if (t)
            t.style.display = "flex";
    }

    // Attach the event listener after DOM is ready
    document.addEventListener('DOMContentLoaded', function() {
        const startBtn = document.getElementById('startLiveTradeBtn');
        if (startBtn) {
            startBtn.addEventListener('click', startLiveTrading);
        }
    });
</script>