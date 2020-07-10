
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

//slick slide for detail product
// $(document).on('ready', function() {

//   $('.slider-for').slick({
//         slidesToShow: 1,
//         slidesToScroll: 1,
//         arrows: false,
//         fade: true,
//         asNavFor: '.slider-nav'
//     });

//     $('.slider-nav').slick({
//         slidesToShow: 4,
//         slidesToScroll: 1,
//         asNavFor: '.slider-for',
//         dots: false,
//         centerMode: true,
//         focusOnSelect: true
//     });

// });

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
      document.getElementById("navbar-right").style.marginTop= "-35px";
      document.getElementById("navbar-right").style.marginLeft= "378px";
  } else {
      document.getElementById("logo").style.width = "30%";
      document.getElementById("logo").style.marginTop = "8px";
      document.getElementById("logo").style.marginLeft = "11px";
      document.getElementById("navbar").style.marginLeft = "74px";
      document.getElementById("navbar").style.width = "89.6%";
      document.getElementById("navbar").style.height = "13%";
      document.getElementById("navbar-right").style.marginTop= "-47px";
  }
}


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
  // document.getElementById("defaultOpen").click();

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

/*Display image products*/
