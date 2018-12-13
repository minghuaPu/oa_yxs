   (function() {
  var changeRem = function() {
   document.getElementsByTagName('html')[0].style.fontSize = document.documentElement.clientWidth / 20 + 'px';
  };
  changeRem();
  var t;
  window.addEventListener('resize', function() {
   clearTimeout(t);
   t = setTimeout(changeRem, 300);
  }, false);
  window.addEventListener('pageshow', function(e) {
   if (e.persisted) {
    clearTimeout(t);
    t = setTimeout(changeRem, 300);
   }
  }, false);
 }());