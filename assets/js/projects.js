// JavaScript to automatically cycle through carousel slides
document.addEventListener("DOMContentLoaded", function () {
  var myCarousel = document.getElementById("carouselFade");
  var carousel = new bootstrap.Carousel(myCarousel, {
    interval: 4000,
    pause: "hover",
    wrap: true,
  });
});

// JavaScript to toggle class on click for propertyTab
document.querySelectorAll('.propertyTab .nav-link').forEach(function(link) {
    link.addEventListener('click', function(e) {
        e.preventDefault(); 
        var target = this.getAttribute('data-bs-target'); 
        var parentTabContent = this.closest('.projcontainer0').querySelector('.plan-cont'); 
        var targetTabContent = parentTabContent.querySelector(target); 
        var allTabLinks = this.closest('.projcontainer0').querySelectorAll('.propertyTab .nav-link');
        
        allTabLinks.forEach(function(tabLink) {
            tabLink.classList.remove('active'); 
        });
        this.classList.add('active');

        var allTabPanes = parentTabContent.querySelectorAll('.tab-pane'); 
        allTabPanes.forEach(function(tab) {
            tab.classList.remove('show', 'active'); 
        });
        targetTabContent.classList.add('show', 'active'); 
    });
});

// JavaScript to toggle class on click for plan-tabContent
document.querySelectorAll('.plan-trigger').forEach(function(link) {
    link.addEventListener('click', function(e) {
        e.preventDefault(); 
        var target = this.getAttribute('data-bs-target'); 
        var parentTabContent = this.closest('.projcontainer0').querySelector('.plan-cont'); 
        var targetTabContents = parentTabContent.querySelectorAll(target); 
        var allTabPanes = parentTabContent.querySelectorAll('.tab-pane');
        
        allTabPanes.forEach(function(tab) {
            tab.classList.remove('show', 'active'); 
        });
        targetTabContents.forEach(function(targetPane) {
            targetPane.classList.add('show', 'active'); 
        });
    });
});