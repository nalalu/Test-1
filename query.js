function myquery(api, post, callback){
  var fullapi = 'http://121.42.58.44:81/jpy/ajax.php?api='+api;

  myalert = alert;
  $.ajax({
    async      : true,
    url        : fullapi,
    method     : 'POST',
    crossDomain: true,
    data       : post,
    error      : function(){
      //myalert("解析中出错，请检查网络");
      myalert("解析文件出错，请检查网络");
    },
    complete   : function(r){
      try{
        r = JSON.parse(r.response || r.responseText);
        console.log('query', fullapi, post, r);
      }
      catch(e){
        myalert('提交失败，系统错误');
        console.log(fullapi, 'back error', r.response || r.responseText, e);
        return;
      }

      if(r.code == 1){
        callback(r);
      }
      else if(r.code == -1){
        myalert('提交失败，系统错误');
      }
    }
  });
}
