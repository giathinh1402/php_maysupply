
//Slick slide
$(function() {
  $('.single-items').slick({
    // infinite: true,
    // slidesToShow: 1,
    // slidesToScroll: 1,
    arrows: false,
    dots: true,
    autoplay: true,
    autoplaySpeed: 2000,
  });
});

//menu scroll

function scrollFunction() {
  if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 20) {
      document.getElementById("logo").style.width = "20%";
      document.getElementById("logo").style.marginTop = "6px";
      document.getElementById("logo").style.marginLeft = "92px";
      document.getElementById("navbar").style.width = "100%";
      document.getElementById("navbar").style.marginLeft = "0";
      document.getElementById("navbar").style.height = "12%";
      // document.getElementById("navbar").style.marginTop = "12px";
      document.getElementById("navbar-right").style.marginTop= "-45px";
      document.getElementById("navbar-right").style.marginLeft= "378px";
  } else {
      document.getElementById("logo").style.width = "30%";
      document.getElementById("logo").style.marginTop = "8px";
      document.getElementById("logo").style.marginLeft = "11px";
      document.getElementById("navbar").style.marginLeft = "74px";
      document.getElementById("navbar").style.width = "89.6%";
      document.getElementById("navbar").style.height = "15%";
      document.getElementById("navbar-right").style.marginTop= "-47px";
  }
}


function openCity(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}