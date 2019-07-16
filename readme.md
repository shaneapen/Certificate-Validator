## Google Sheet Custom function to generate n length ID
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