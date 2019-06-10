<?php

/**
 * @Author: amigodheena
 * @Date:   2019-06-10 15:52:42
 * @Last Modified by:   amigodheena
 * @Last Modified time: 2019-06-10 15:53:10
 */
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact form</title>
</head>
<body onload="createCaptcha()">
	<div id="mail-status"></div>
<div id="frmContact">    
    <div>
        <label style="padding-top:20px;">Name</label>
        <span id="userName-info" class="info"></span><br />
        <input type="text" name="userName" id="userName" class="demoInputBox">
    </div>
    <div>
        <label>Email</label>
        <span id="userEmail-info" class="info"></span><br />
        <input type="text" name="userEmail" id="userEmail" class="demoInputBox">
    </div>
    <div>
        <label>Phone</label>
        <span id="phone-info" class="info"></span><br />
        <input type="text" name="phone" id="phone" class="demoInputBox">
    </div>
    <div>
        <label>Content</label>
        <span id="content-info" class="info"></span><br />
        <textarea name="content" id="content" class="demoInputBox" cols="60" rows="6"></textarea>
    </div>
    <!-- Captcha -->
    <div id="captcha"></div>
    <span id="cpatchaTextBox-info" class="info"></span><br />
    <input type="text" class="demoInputBox" placeholder="Captcha" id="cpatchaTextBox"/>
    <!-- Captcha -->
    <div>
        <button name="submit" class="btnAction" type="submit" onclick="sendContact()">Send</button>
    </div>
</div>	
</body>
</html>