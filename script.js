function showSection(id){
  document.querySelectorAll('.section')
    .forEach(function(sec){
      sec.classList.remove('active');
    });
  document.getElementById(id).classList.add('active');
}

