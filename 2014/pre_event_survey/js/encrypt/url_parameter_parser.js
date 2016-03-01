/* 
  Url's variables get 
  Like : ?name=小鮭魚&gender=男性&title=小學生&mail=grass.house@hotmail.com
*/

var aSide = new AES.Crypto(AES.generateKey());
var bSide = new AES.Crypto(aSide.key);
// bSide.setCounter(aSide.getCounter());
// var message = "name=小鮭魚&gender=男性&title=小學生&mail=grass.house@hotmail.com" ;
// var cipherText = aSide.encrypt(escape(message));
// var plainText = bSide.decrypt(cipherText);
// console.log(unescape(plainText)) ;

var aSide_backup = eval( "(" + "{'key':[69,243,223,118,185,28,143,31,92,28,98,217,51,108,1,165],'keySchedule':[[69,243,223,118],[185,28,143,31],[92,28,98,217],[51,108,1,165],[20,143,217,181],[173,147,86,170],[241,143,52,115],[194,227,53,214],[7,25,47,144],[170,138,121,58],[91,5,77,73],[153,230,120,159],[141,165,244,126],[39,47,141,68],[124,42,192,13],[229,204,184,146],[206,201,187,167],[233,230,54,227],[149,204,246,238],[112,0,78,124],[189,230,171,246],[84,0,157,21],[193,204,107,251],[177,204,37,135],[214,217,188,62],[130,217,33,43],[67,21,74,208],[242,217,111,87],[163,113,231,183],[33,168,198,156],[98,189,140,76],[144,100,227,27],[96,96,72,215],[65,200,142,75],[35,117,2,7],[179,17,225,28],[249,152,212,186],[184,80,90,241],[155,37,88,246],[40,52,185,234],[215,206,83,142],[111,158,9,127],[244,187,81,137],[220,143,232,99]],'counter':{'arr':[158,153,195,83,150,60,215,25,0,0,0,0,0,0,0,0]}}" + ")") ;
var bSide_backup = eval( "(" + "{'key':[69,243,223,118,185,28,143,31,92,28,98,217,51,108,1,165],'keySchedule':[[69,243,223,118],[185,28,143,31],[92,28,98,217],[51,108,1,165],[20,143,217,181],[173,147,86,170],[241,143,52,115],[194,227,53,214],[7,25,47,144],[170,138,121,58],[91,5,77,73],[153,230,120,159],[141,165,244,126],[39,47,141,68],[124,42,192,13],[229,204,184,146],[206,201,187,167],[233,230,54,227],[149,204,246,238],[112,0,78,124],[189,230,171,246],[84,0,157,21],[193,204,107,251],[177,204,37,135],[214,217,188,62],[130,217,33,43],[67,21,74,208],[242,217,111,87],[163,113,231,183],[33,168,198,156],[98,189,140,76],[144,100,227,27],[96,96,72,215],[65,200,142,75],[35,117,2,7],[179,17,225,28],[249,152,212,186],[184,80,90,241],[155,37,88,246],[40,52,185,234],[215,206,83,142],[111,158,9,127],[244,187,81,137],[220,143,232,99]],'counter':{'arr':[158,153,195,83,150,60,215,25,0,0,0,0,0,0,0,0]}}" + ")") ;

aSide.key = aSide_backup.key ;
bSide.key = bSide_backup.key ;
aSide.keySchedule = aSide_backup.keySchedule ;
bSide.keySchedule = bSide_backup.keySchedule ;
aSide.counter.arr = aSide_backup.counter.arr ;
bSide.counter.arr = bSide_backup.counter.arr ;

var QueryString = function() {
  var query_string = {} ;
  var query = window.location.search.substring(1) ;
  query = unescape(bSide.decrypt(query)) ;
  var vars = query.split("&") ;
  for (var i = 0 ; i < vars.length ; i++) {
    var pair = vars[i].split("=") ;
    if (typeof query_string[pair[0]] === "undefined") {
      query_string[pair[0]] = pair[1] ;
    } else if (typeof query_string[pair[0]] === "string") {
      var arr = [ query_string[pair[0]], pair[1] ] ;
      query_string[pair[0]] = arr ;
    } else {
      query_string[pair[0]].push(pair[1]) ;
    }
  } 
  return query_string ;
} ();
console.log(QueryString);

document.getElementById("entry_333528968").value = QueryString.qrcode ;
// document.getElementById("entry_1091538490").value = decodeURIComponent(QueryString.name) ;
// $('#group_1701966832_' + ((decodeURIComponent(QueryString.gender) == "男性") ? 1 : 2)).prop('checked', true) ;
// document.getElementById("entry_953912271").value = decodeURIComponent(QueryString.title) ;
// document.getElementById("entry_1242787359").value = QueryString.mail ;

if ( decodeURIComponent( QueryString.qrcode ) == "undefined" ) {
  $('.subline').html("本表單無效，請使用郵件指定之網址") ;
  $('.main_article').css("display", "none") ;
}
else {
  $('.spiffyRect_content').html("&nbsp;聽眾您好，非常感謝您&nbsp;<br>&nbsp;特地撥空填寫這份問卷。&nbsp;") ;
}