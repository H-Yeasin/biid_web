
(function(){
  var nav=document.getElementById('navLinks');
  var menu=document.getElementById('menuBtn');
  if(menu && nav){menu.addEventListener('click',function(){nav.classList.toggle('open');});}
  if(nav){nav.querySelectorAll('a').forEach(function(a){a.addEventListener('click',function(){nav.classList.remove('open');});});}

  var bankSearch=document.getElementById('bankSearch');
  if(bankSearch){
    bankSearch.addEventListener('input',function(){
      var q=this.value.trim().toLowerCase();
      document.querySelectorAll('.bank-card').forEach(function(card){
        var name=(card.getAttribute('data-bank')||'').toLowerCase();
        card.style.display=name.indexOf(q)>-1?'':'none';
      });
    });
  }
})();
