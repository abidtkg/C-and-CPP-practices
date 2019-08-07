let xhr = new XMLHttpRequest();
xhr.open("POST", "https://api.abidtkg.com/api.php");
xhr.responseType = "json";
xhr.send();
// the response is {"message": "Hello, world!"}
xhr.onload = function() {
  let responseObj = xhr.response;
  //alert(responseObj.result);
  let arrays = responseObj;
  console.log(arrays); // Hello, world!
};
