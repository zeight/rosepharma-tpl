//var player = new Plyr('#player');
/////////////////////////////////////////////////////////////////////////
// READY CLASSIC
/////////////////////////////////////////////////////////////////////////

(function ready() {
  if (document.readyState != 'loading') {
    
    squeezeHeader()
    //itemInView('.mover')

  } else {
      document.addEventListener('DOMContentLoaded', ready);
  }
})();

function squeezeHeader() {
 let scrollpos = window.scrollY
    const header = document.querySelector(".site-header")
    const header_height = header.offsetHeight


    const add_class_on_scroll = () => header.classList.add("sticky")
    const remove_class_on_scroll = () => header.classList.remove("sticky")    
    
    window.addEventListener('scroll', function() { 
    scrollpos = window.scrollY;

    if (scrollpos >= header_height) { add_class_on_scroll() }
    else { remove_class_on_scroll() }

    //console.log(scrollpos)
  })  
}

function itemInView(identifier) {

  const item = document.querySelector(identifier)
  let rect = item.getBoundingClientRect()

    
    
    window.addEventListener('scroll', function() { 
      if (
         rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && /* or $(window).height() */
        rect.right <= (window.innerWidth || document.documentElement.clientWidth) /* or $(window).width() */
      ) alert('visible')
    }) 
  
}