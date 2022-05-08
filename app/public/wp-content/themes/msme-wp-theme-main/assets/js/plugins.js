$('.owl-1').owlCarousel({
  loop:true,
  autoplay:true, 
  loop:true, 
  margin:10,
  navSpeed:2000, 
  smartSpeed:2500, 
  nav:true,
       navText : ["<img src='assets/images/left.png'>","<img src='assets/images/right.png'>"],
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:1
      }
  }
})

$('.owl-2').owlCarousel({
  loop:true,
  autoplay:true, 
  loop:true, 
  margin:10,
  navSpeed:2000, 
  smartSpeed:2500, 
  nav:true,
       navText : ["<img src='assets/images/left.png'>","<img src='assets/images/right.png'>"],
  responsive:{
      0:{
          items:1
      },
      600:{
          items:1
      },
      1000:{
          items:1
      }
  }
})

// https://github.com/robin-dela/hover-effect

var myAnimation = new hoverEffect({
      parent: document.querySelector('.my-div'),
      intensity: 0.3,
      image1: 'images/myImage1.jpg',
      image2: 'images/myImage2.jpg',
      displacementImage: 'images/myDistorsionImage.png'
  });