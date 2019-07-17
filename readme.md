# [Certificate Validator](https://verify.cecieee.org)
A web app to verify certificates issued by IEEE Student Branch College of Engineering Chengannur

## Steps to Issue a new certificate
1. Add a random ID as the first column in the CSV file.
2. Convert the CSV to JSON using this [CSV to JSON converter](https://www.csvjson.com/csv2json). **It should be noted that the JSON should be in a hash format with the random ID being the key.**
3. Create the necessary files and folders in `data`

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
