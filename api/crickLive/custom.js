//ajax loader of api
$.ajax({
    url: 'https://cricapi.com/api/matches?apikey=kTBfsIFnwVUwmhD8wMAPWT06Z2f1',
    method: 'POST',
    
    success: function(res){
      console.log(res);
      let matArray = res.matches;
      console.log(matArray);
      for(x of matArray){
        document.write(x.date + x.unique_id + "<br />");
      }
    }
});