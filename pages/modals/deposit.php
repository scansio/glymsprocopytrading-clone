<div id="toggleDepositModal1" role="presentation" class="MuiModal-root css-8ndowl" style="display: none; place-content: center; z-index: 10001; padding: 12px; overflow: scroll; scrollbar-width: none;">
    <div aria-hidden="true" class="MuiBackdrop-root MuiModal-backdrop css-919eu4" style="opacity: 1; transition: opacity 225ms cubic-bezier(0.4, 0, 0.2, 1);"></div>
    <div tabindex="0" data-testid="sentinelStart"></div>
    <div class="sc-cfxfQh inaFvt scrollbar-hide" tabindex="-1">
        <div class="modal_top">
            <p>Deposit</p><svg onclick="toggleDepositModal('1')" width="12" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg" style="cursor: pointer;">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8647 0.366365C12.3532 -0.122122 13.1451 -0.122122 13.6336 0.366365C14.1221 0.854853 14.1221 1.64685 13.6336 2.13533L8.88929 6.87968L13.8743 11.8647C14.3628 12.3532 14.3628 13.1451 13.8743 13.6336C13.3858 14.1221 12.5938 14.1221 12.1053 13.6336L7.12032 8.64864L2.13533 13.6336C1.64685 14.1221 0.854853 14.1221 0.366366 13.6336C-0.122122 13.1451 -0.122122 12.3532 0.366366 11.8647L5.35136 6.87968L0.607014 2.13533C0.118527 1.64685 0.118527 0.854853 0.607014 0.366365C1.0955 -0.122122 1.8875 -0.122122 2.37598 0.366365L7.12032 5.11071L11.8647 0.366365Z" fill="rgba(255, 255, 255, 0.5)"></path>
            </svg>
        </div>
        <div class="modal_content">
            <p class="modal_description">To make a deposit, choose your preferred method and enter an amount.</p>
            <div class="top">
                <div class="deposit_bottom">
                    <div class="sc-kpDprT hWIEwx type_select">
                        <div class="wrapper">
                            <p class="label">Method:</p><span class="content">
                                <div class="icon_wrap">
                                    <img id="tokenImage" src="./assets/asseticons/BTC.svg" alt="">
                                    <select name="assets" id="" onchange="changeTokenImage(this.value)">
                                        <option value="BTC">BTC</option>
                                        <option value="ETH">ETH</option>
                                        <option value="BCH">BCH</option>
                                    </select>
                                </div>
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6 9L12 15L18 9" stroke="#5C6175" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </div>
                    </div>

                    <div class="sc-fPXMhL fXfxHK">
                        <div class="label">
                            <p>Amount:</p>
                        </div>
                        <div class="wrapper"><input type="number" placeholder="0.00000"><span class="asset"><span>
                                    <p>USD</p>
                                </span></span></div>
                    </div>
                </div>
            </div>
            <div class="modal_footer">
                <div class="buttons" style="display: flex; gap: 12px; align-items: center;"><button onclick="toggleDepositModal('2')" class="button" style="border-radius: 8px; border: none; background-color: grey; color: white; width: 100%; place-self: center; cursor: pointer;">
                        <p style="font-size: 14px; padding: 12px; font-weight: 600; font-family: &quot;Open Sans&quot;;">Deposit</p>
                    </button></div>
            </div>
        </div>
    </div>
    <div tabindex="0" data-testid="sentinelEnd"></div>
</div>


<div id="toggleDepositModal2" role="presentation" class="MuiModal-root css-8ndowl" style="display: none; place-content: center; z-index: 10001; padding: 12px; overflow: scroll; scrollbar-width: none;">
    <div aria-hidden="true" class="MuiBackdrop-root MuiModal-backdrop css-919eu4" style="opacity: 1; transition: opacity 225ms cubic-bezier(0.4, 0, 0.2, 1);"></div>
    <div tabindex="0" data-testid="sentinelStart"></div>
    <div class="sc-cfxfQh inaFvt scrollbar-hide" tabindex="-1">
        <div class="modal_top">
            <p>Deposit</p><svg onclick="toggleDepositModal('2')" width="12" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg" style="cursor: pointer;">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8647 0.366365C12.3532 -0.122122 13.1451 -0.122122 13.6336 0.366365C14.1221 0.854853 14.1221 1.64685 13.6336 2.13533L8.88929 6.87968L13.8743 11.8647C14.3628 12.3532 14.3628 13.1451 13.8743 13.6336C13.3858 14.1221 12.5938 14.1221 12.1053 13.6336L7.12032 8.64864L2.13533 13.6336C1.64685 14.1221 0.854853 14.1221 0.366366 13.6336C-0.122122 13.1451 -0.122122 12.3532 0.366366 11.8647L5.35136 6.87968L0.607014 2.13533C0.118527 1.64685 0.118527 0.854853 0.607014 0.366365C1.0955 -0.122122 1.8875 -0.122122 2.37598 0.366365L7.12032 5.11071L11.8647 0.366365Z" fill="rgba(255, 255, 255, 0.5)"></path>
            </svg>
        </div>
        <div class="modal_content">
            <p class="modal_description">To make a deposit, choose your preferred method and enter an amount.</p>
            <div class="top">
                <div class="deposit_bottom">
                    <div>
                        <div style="display: flex; flex-direction: column; align-items: center; margin-bottom: 16px;"><img src="https://api.qrserver.com/v1/create-qr-code/?size=180x180&amp;data=14Gph1kfSoyXw4dPesJFYVnXwniJJYqnY4" alt="QR Code" class="qr-code" style="margin-bottom: 8px;"></div>
                        <div class="sc-gFqAYk daOwnt amount_box">
                            <div class="label">
                                <p>Address: </p><img src="./assets/asseticons/info.svg" alt="" class="error_inform" id="popcorn">
                            </div>
                            <div class="wrapper"><input type="text" placeholder="14Gph1kfSoyXw4dPesJFYVnXwniJJYqnY4" disabled="" value="14Gph1kfSoyXw4dPesJFYVnXwniJJYqnY4" style="width: 85%;"><span class="asset" style="cursor: pointer;">
                                    <p>Copy</p>
                                </span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="display: flex; justify-content: center; gap: 8px;"><img src="./assets/asseticons/BTC.svg" alt="" width="14">
                <p style="font-size: 12px;">BTC</p>
            </div>
        </div>
    </div>
    <div tabindex="0" data-testid="sentinelEnd"></div>
</div>


<script>
    function changeTokenImage(value) {
        document.getElementById("tokenImage").src = `./assets/asseticons/${value}.svg`
    }
</script>