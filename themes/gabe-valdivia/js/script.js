window.onload = function(){
    const offCanvasNavBar = Array.from(document.querySelectorAll("#offcanvasNavbar a")).slice(1, 5);
    //console.log(offCanvasNavBar);

 
    
 

    offCanvasNavBar.forEach(link => {
      
      link.addEventListener("click", (event) => {
        // Prevent default behavior of jump link
        // event.preventDefault();
    
        const offcanvas = document.querySelector(".offcanvas");
        const backdrop = document.querySelector('.offcanvas-backdrop');
        
        if (offcanvas, backdrop) {
           const offcanvasInstance = new bootstrap.Offcanvas(offcanvas);
           const offcanvasBackdrop = new bootstrap.Offcanvas(backdrop);
           

           offcanvas.classList.remove('show');
           offcanvasInstance.hide();
           backdrop.classList.remove('show');


        }
      });
    });

    const links = Array.from(document.querySelectorAll("#offcanvasNavbar a")).slice(1, 5);
    links.forEach(link => {
        link.setAttribute("data-bs", "smoothScroll");
    });

      
}



