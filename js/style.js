
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

function scrollFunction() {
  if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 20) {
      document.getElementById("logo").style.width = "20%";
      document.getElementById("logo").style.marginTop = "6px";
      document.getElementById("logo").style.marginLeft = "92px";
      document.getElementById("navbar").style.width = "100%";
      document.getElementById("navbar").style.marginLeft = "0";
      document.getElementById("navbar").style.height = "10%";
      // document.getElementById("navbar").style.marginTop = "12px";
      document.getElementById("navbar-right").style.marginTop= "-42px";
      document.getElementById("navbar-right").style.marginLeft= "500px";
  } else {
      document.getElementById("logo").style.width = "30%";
      document.getElementById("logo").style.marginTop = "8px";
      document.getElementById("logo").style.marginLeft = "11px";
      document.getElementById("navbar").style.marginLeft = "74px";
      document.getElementById("navbar").style.width = "89.6%";
      document.getElementById("navbar").style.height = "11%";
      document.getElementById("navbar-right").style.marginTop= "-47px";
      document.getElementById("navbar-right").style.marginLeft= "400px";
  }
}

//open category list product
function openCategory(evt, categoryName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(categoryName).style.display = "block";
  evt.currentTarget.className += " active";
}
// Get the element with id="defaultOpen" and click on it



// show form

function showform() {
  var x = document.getElementById("form-content");
  if (x.style.display === "none") {
      x.style.display = "block";
  } else {
      x.style.display = "none";
  }
}

function showform2() {
  var x = document.getElementById("form-content2");
  if (x.style.display === "none") {
      x.style.display = "block";
  } else {
      x.style.display = "none";
  }
}

// show content tab

function openPage(evt, pageName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontents");
  for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace("active", "");
  }
  document.getElementById(pageName).style.display = "block";
  evt.currentTarget.className += " active";
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();