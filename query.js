function myquery(scope, api, post, callback, isasync, error_msg, isEncrypted){

  var fullapi = 'http://121.42.58.44:81/jpy/ex01.php?api='+api;

  if(window.mock){
    callback(window.mock);
    return;
  }

  if(typeof(isEncrypted) == 'undefined'){
    isEncrypted = defaultEncrypted;
  }
  isasync = isasync == 'sync' ? false : true;

  var q = encode(post, isEncrypted);

  myalert = scope ? scope.myalert : alert;
  $.ajax({
    async      : isasync,
    url        : fullapi,
    method     : 'POST',
    crossDomain: true,
    data       : q,
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
        return;
      }
      else if(r.code == -1){
        myalert('提交失败，系统错误');
      }

      if(typeof(error_msg) == 'function'){
        error_msg(r);
      }
    }
  });
}
