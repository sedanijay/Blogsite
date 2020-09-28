document.getElementById('heading').innerHTML = localStorage['title'] || 'Blog Title';
document.getElementById('content').innerHTML = localStorage['text'] || ' Use ctrl+B for Bold, ctrl+U for Underline and ctrl+I for Italic :) ';

 // setInterval(function() {
 //      localStorage['title'] = document.getElementById('heading').innerHTML;
 //      localStorage['text'] = document.getElementById('content').innerHTML;
 // }, 1000);