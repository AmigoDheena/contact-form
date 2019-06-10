var code;
function createCaptcha_page() {
  //clear the contents of captcha div first 
  document.getElementById('captcha_page').innerHTML = "";
  var charsArray =
  "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@!#$%^&*";
  var lengthOtp = 6;
  var captcha_page = [];
  for (var i = 0; i < lengthOtp; i++) {
    //below code will not allow Repetition of Characters
    var index = Math.floor(Math.random() * charsArray.length + 1); //get the next character from the array
    if (captcha_page.indexOf(charsArray[index]) == -1)
      captcha_page.push(charsArray[index]);
    else i--;
  }
  var canv = document.createElement("canvas");
  canv.id = "captcha_page";
  canv.width = 100;
  canv.height = 50;
  var ctx = canv.getContext("2d");
  ctx.font = "25px Georgia";
  ctx.strokeText(captcha_page.join(""), 0, 30);
  //storing captcha_page so that can validate you can save it somewhere else according to your specific requirements
  code = captcha_page.join("");
  document.getElementById("captcha_page").appendChild(canv); // adds the canvas to the body element
}
