<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="stylesheet" href="../css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollReveal.js/2.0.0/scrollReveal.min.js" integrity="sha512-L56hqljAjZhvB9f32klSO2ltXUlKbaOY2KdlNLOdzxJtl0jNvNQFKTP3u0MIFUP3mXTzYdy7KCaUSvi7QBWxNg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../js/typed.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   @vite('resources/css/app.css')
    @inertiaHead
  </head>
  <body class="app-body">
    <div id='preloader'>
      <div class="bouncer ">
        <div><span id="logo">L</span></div>
        <div><span id="logo">L</span></div>
        <div><span id="logo">L</span></div>
        <div><span id="logo">L</span></div>
      </div>
    </div>
    <script>
      setTimeout(() => {
        $('#preloader').fadeToggle();
      },2000);

      // var typed = new Typed(".typing",{
	    // strings:["web developer"],
	    // typeSpeed: 100,
	    // backSpeed: 70,
	    // loop:true
      // });

      // ScrollReveal({
      //   reset: true,
      //   distance: '60px',
      //   duration: 2500,
      //   delay: 400
      // });
      // ScrollReveal().reveal('.big-name', {delay:500,origin:  'left'});
    </script>
  @inertia
    @vite('resources/js/app.js')
  </body>
  
</html>