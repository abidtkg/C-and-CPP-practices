<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '475509719849426',
      cookie     : true,
      xfbml      : true,
      version    : 'v4.0'
    });
      
    FB.api(
  '/265348370558395',
  'GET',
  {"fields":"about"},
  function(response) {
    console.log(response);
  }
);  
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>  
</body>
</html>
https://graph.facebook.com/v4.0/265348370558395?fields=fan_count&access_token=EAAGweTvwWdIBALWHBo5KkdmZAsgzMCIdjlOgQUCwQwKmsMb0cWSix2KdKaXh27X9ZBciP7FhE4wASjtDRABCZApSv7RBbGHYxXBLCZBkZB1LGfJ08iv4ZBdHijDwhtZAdomceSzAexsHnF0z0fk7iptFSFuItpsVxE365l2VkrcoZCpfSOZADbnDGuwOu41l3iffJ90pPQt8I0DLZCxtRLpteuMuTkOZCEenV4ZD