<style>
    .hfrIRq {
        padding: 8px 10px;
        border-radius: 8px;
        background-color: rgb(47, 150, 240);
        border: none;
        outline: none;
        font-size: 16px;
        line-height: 28px;
        color: rgb(255, 255, 255);
        font-weight: 600;
        width: 100%;
        cursor: pointer;
        text-align: center;
    }


    .hfrIRq.disabled {
        background-color: rgb(153, 153, 161);
        color: white;
        cursor: not-allowed;
        user-select: none;
        pointer-events: none;
    }


    .ljQjAf .error {
        color: rgb(255, 51, 68);
        font-size: 14px;
        margin-top: 8px;
    }


    .ljQjAf .wrapper {
        width: 100%;
    }


    .ljQjAf label {
        font-size: 14px;
        font-weight: 500;
        color: white;
        line-height: 24px;
    }


    .ljQjAf input {
        box-sizing: border-box;
        font-size: 16px;
        border-radius: 8px;
        padding: 12px;
        border: 1px solid rgb(34, 39, 57);
        background-color: rgba(27, 31, 45, 0.3);
        font-family: "Inter var", Inter, sans-serif;
        color: white;
        margin-top: 8px;
        width: 100%;
    }


    .ljQjAf input::placeholder {
        color: rgb(186, 194, 222);
    }


    .ljQjAf input:hover {
        background: rgba(12, 110, 242, 0.1);
        border: 1px solid rgb(47, 150, 240);
    }


    .ljQjAf input:not(:placeholder-shown) {
        background: rgba(12, 110, 242, 0.1);
        border: 1px solid rgb(47, 150, 240);
    }


    .ljQjAf input.input_error:hover {
        background: rgba(12, 110, 242, 0.1);
        border: 1px solid rgb(255, 51, 68);
    }


    .ljQjAf input:-webkit-autofill,
    .ljQjAf input:-webkit-autofill:hover,
    .ljQjAf input:-webkit-autofill:focus,
    .ljQjAf textarea:-webkit-autofill,
    .ljQjAf textarea:-webkit-autofill:hover,
    .ljQjAf textarea:-webkit-autofill:focus,
    .ljQjAf select:-webkit-autofill,
    .ljQjAf select:-webkit-autofill:hover,
    .ljQjAf select:-webkit-autofill:focus {
        -webkit-text-fill-color: white;
        box-shadow: rgba(12, 110, 242, 0.1) 0px 0px 0px 1000px inset;
        transition: background-color 5000s ease-in-out;
        border: 1px solid rgb(47, 150, 240);
    }


    .ljQjAf.variant input:not(:placeholder-shown) {
        background-color: rgba(27, 31, 45, 0.3);
        border: 1px solid rgb(34, 39, 57);
    }


    .ljQjAf.variant input:-webkit-autofill,
    .ljQjAf input:-webkit-autofill:hover,
    .ljQjAf input:-webkit-autofill:focus,
    .ljQjAf textarea:-webkit-autofill,
    .ljQjAf textarea:-webkit-autofill:hover,
    .ljQjAf textarea:-webkit-autofill:focus,
    .ljQjAf select:-webkit-autofill,
    .ljQjAf select:-webkit-autofill:hover,
    .ljQjAf select:-webkit-autofill:focus {
        -webkit-text-fill-color: white;
        box-shadow: rgba(12, 110, 242, 0.1) 0px 0px 0px 1000px inset;
        transition: background-color 5000s ease-in-out;
        border: 1px solid rgb(34, 39, 57);
    }


    .GzHem {
        margin: auto;
        background: transparent;
        display: block;
        shape-rendering: auto;
        animation: 1s linear 0s infinite normal none running spin;
        transform-origin: center center;
    }


    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }


    .kCXPrl {
        display: flex;
        flex-direction: column;
        padding: 8px;
        background-color: rgb(5, 8, 11);
        max-height: 100vh;
        overflow-y: auto;
        width: 100%;
        height: 100vh;
        position: relative;
    }


    .kCXPrl .page_wrapper {
        height: 100%;
        margin-top: 88px;
        max-height: 100vh;
        overflow: auto;
    }


    .kCXPrl .page_top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 24px;
    }


    @media screen and (max-width: 1200px) {
        .kCXPrl .page_top {
            flex-direction: column;
            gap: 16px;
            align-items: flex-start;
        }
    }


    .kCXPrl .page_content {
        padding-bottom: 48px;
    }


    .kCXPrl .page_title {
        font-size: 24px;
        color: white;
        font-weight: 600;
    }


    .kCXPrl .page_context {
        color: rgb(186, 194, 222);
        font-size: 16px;
        margin-top: 8px;
        line-height: 20px;
    }


    .kCXPrl .main_title {
        width: 100%;
        display: flex;
        justify-content: space-between;
        margin-top: 48px;
    }


    .kCXPrl .main_title span {
        display: flex;
        gap: 8px;
        align-items: center;
    }


    .kCXPrl .main_title span p {
        font-size: 18px;
        font-weight: 600;
        color: rgb(255, 255, 255);
    }


    .kCXPrl .main_title button {
        border-radius: 32px;
        cursor: pointer;
        color: rgb(255, 255, 255);
        padding: 12px 16px;
        font-size: 14px;
        font-weight: 600;
        font-family: Inter;
        background-color: rgb(12, 108, 242);
        outline: none;
        border: none;
    }


    .kCXPrl .main_title button.variant {
        font-family: Inter;
        padding: 8px 12px;
        background-color: rgb(27, 31, 45);
        color: rgb(186, 194, 222);
        outline: none;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        display: grid;
        place-content: center;
    }


    .kCXPrl .main_title button.variant.active {
        font-family: Inter;
        background-color: rgb(12, 13, 13);
        color: rgb(12, 108, 242);
        outline: none;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 600;
    }


    .kCXPrl .main_title button.variant.active svg path {
        fill: rgb(12, 108, 242);
    }


    .fAxuiM {
        max-height: 100vh;
        max-width: 100vw;
        background-color: rgb(5, 8, 11);
        height: 100vh;
        width: 100%;
    }


    .fAxuiM .container {
        background-color: transparent;
        padding-bottom: 64px;
        height: 100%;
        width: 100%;
        overflow-y: scroll;
    }


    @media screen and (max-width: 1200px) {
        .fAxuiM .container {
            padding-bottom: 165px;
        }
    }


    .fAxuiM .form {
        display: grid;
        gap: 32px;
    }


    .igxMDI .authCode {
        position: relative;
        cursor: text;
        /* user-select: none;
        pointer-events: none; */
    }


    .igxMDI .authCode .authCode_box_holder {
        display: flex;
        justify-content: space-evenly;
        gap: 8px;
    }


    .igxMDI .authCode .authCode_box_holder .authCode_box {
        position: relative;
        width: 3rem;
        height: 3rem;
        text-align: center;
        color: rgb(255, 255, 255);
        font-size: 1.125rem;
        line-height: 1.125rem;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: 0.3s;
        border: 1px solid transparent;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 4px;
        outline: none;
    }


    .igxMDI .authCode .authCode_input_holder {
        position: absolute;
        inset: 0px;
        pointer-events: none;
    }


    .igxMDI .authCode .authCode_input_holder .authCode_input {
        position: absolute;
        inset: 0px;
        width: 100%;
        height: 100%;
        display: flex;
        text-align: left;
        opacity: 1;
        color: white;
        pointer-events: all;
        background: transparent;
        caret-color: transparent;
        border: 0px solid transparent;
        outline: transparent solid 0px;
        box-shadow: none;
        line-height: 1;
        letter-spacing: -0.5em;
        font-size: var(--root-height);
        font-family: monospace;
        font-variant-numeric: tabular-nums;
    }
</style>