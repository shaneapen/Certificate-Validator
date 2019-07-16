# [Certificate Validator](https://verify.cecieee.org)
A web app to verify certificates issued by IEEE Student Branch College of Engineering Chengannur
## Google Sheet Custom function to generate n length ID
Credits - (https://yagisanatode.com/2018/08/23/google-sheets-random-alphabetic-random-alphanumeric-and-random-alphanumeric-character-custom-functions/)
```
function RANDALPHA(len) {
  var text = "";

  //Check if numbers
  if(typeof len !== 'number'){return text = "NaN"};
  
  var charString = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
  
  for (var i = 0; i < len; i++)
    text += charString.charAt(Math.floor(Math.random() * charString.length));
    
  return text;
}

```
