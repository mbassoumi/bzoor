<h1>Elegant Contact Form</h1>
<form class="cf">
    <div class="half left cf">
        <input type="text" id="input-name" placeholder="Name">
        <input type="email" id="input-email" placeholder="Email address">
        <input type="text" id="input-subject" placeholder="Subject">
    </div>
    <div class="half right cf">
        <textarea name="message" type="text" id="input-message" placeholder="Message"></textarea>
    </div>
    <input type="submit" value="Submit" id="input-submit">
</form>

<style>
    @import url(https://fonts.googleapis.com/css?family=Merriweather);
    *,
    *:before,
    *:after {
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    html, body {
        background: #f1f1f1;
        font-family: 'Merriweather', sans-serif;
        padding: 1em;
    }

    h1 {
        text-align: center;
        color: #a8a8a8;
        text-shadow: 1px 1px 0 white;
    }

    form {
        max-width: 600px;
        text-align: center;
        margin: 20px auto;
    }
    form input, form textarea {
        border: 0;
        outline: 0;
        padding: 1em;
        -moz-border-radius: 8px;
        -webkit-border-radius: 8px;
        border-radius: 8px;
        display: block;
        width: 100%;
        margin-top: 1em;
        font-family: 'Merriweather', sans-serif;
        -moz-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        resize: none;
    }
    form input:focus, form textarea:focus {
        -moz-box-shadow: 0 0px 2px #e74c3c !important;
        -webkit-box-shadow: 0 0px 2px #e74c3c !important;
        box-shadow: 0 0px 2px #e74c3c !important;
    }
    form #input-submit {
        color: white;
        background: #e74c3c;
        cursor: pointer;
    }
    form #input-submit:hover {
        -moz-box-shadow: 0 1px 1px 1px rgba(170, 170, 170, 0.6);
        -webkit-box-shadow: 0 1px 1px 1px rgba(170, 170, 170, 0.6);
        box-shadow: 0 1px 1px 1px rgba(170, 170, 170, 0.6);
    }
    form textarea {
        height: 126px;
    }

    .half {
        float: left;
        width: 48%;
        margin-bottom: 1em;
    }

    .right {
        width: 50%;
    }

    .left {
        margin-right: 2%;
    }

    @media (max-width: 480px) {
        .half {
            width: 100%;
            float: none;
            margin-bottom: 0;
        }
    }
    /* Clearfix */
    .cf:before,
    .cf:after {
        content: " ";
        /* 1 */
        display: table;
        /* 2 */
    }

    .cf:after {
        clear: both;
    }

</style>
