var callHelper = function() {
  var random = Math.ceil(6 * Math.random()) ;
  switch(random) {
    case 1:
      $('.spiffyRect_content').html("&nbsp;Hi，年會將近很期待吧！&nbsp;") ;
      break ;
    case 2:
      $('.spiffyRect_content').html("&nbsp;麻煩您提供最寶貴的意見喔！&nbsp;") ;
      break ;
    case 3:
    case 4 :
      $('.spiffyRect_content').html("&nbsp;多選題點選一下小臉，&nbsp;<br>&nbsp;微笑就是選擇成功囉！&nbsp;") ;
      break ;
    case 5:
      $('.spiffyRect_content').html("&nbsp;這次的票卷相當熱門呢！&nbsp;<br>&nbsp;不到兩小時就售罄了！&nbsp;") ;
      break ;
    case 6:
      $('.spiffyRect_content').html("&nbsp;本次問卷絕不會用於非年會相關用途。&nbsp;") ;
      break ;
    default:
      $('.spiffyRect_content').html("") ;
      break ;
    }
}

var loopTalk = function() {
  setTimeout( function() { callHelper(); loopTalk(); }, 7000) ;
}

loopTalk() ;