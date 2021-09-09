<style>
    body {
        background: #EBEBEB;
    }

    .invoice-wrap {
        box-shadow: 0 0 4px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    #mobile-preview-close a {
        position: fixed;
        left: 20px;
        bottom: 30px;
        background-color: #fff;
        font-weight: 600;
        outline: 0 !important;
        line-height: 1.5;
        border-radius: 3px;
        font-size: 14px;
        padding: 7px 10px;
        border: 1px solid #fff;
        text-decoration: none;
    }

    #mobile-preview-close img {
        width: 20px;
        height: auto;
    }

    #mobile-preview-close a:nth-child(2) {
        left: 190px;
        background: #f5f5f5;
        border: 1px solid #9f9f9f;
        color: #555 !important;
    }

    #mobile-preview-close a:nth-child(2) img {
        height: auto;
        position: relative;
        top: 2px;
    }

    .invoice-wrap {
        padding: 20px;
    }


    @media print {
        #mobile-preview-close a {
            display: none
        }

        /* .invoice-wrap {0} */
        body {
            background: none;
        }

        .invoice-wrap {
            box-shadow: none;
            margin-bottom: 0px;
        }

    }
</style>