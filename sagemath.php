<?php include 'header.php';?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>SageMath</title>
    <script src="https://sagecell.sagemath.org/static/embedded_sagecell.js"></script>
    <script>$(function () {
    // Make the div with id 'mycell' a Sage cell
    sagecell.makeSagecell({inputLocation:  '#mycell',
                           template:       sagecell.templates.minimal,
                           evalButtonText: 'Attiva'});
    // Make *any* div with class 'compute' a Sage cell
    sagecell.makeSagecell({inputLocation: 'div.compute',
                           evalButtonText: 'Evaluate'});
    });
    </script>
  
  <body>
  <h1>Embedded Sage Cells</h1>

  <h2>Fattoriale</h2>
  Clicca “Attiva” per calcolare il fattoriale.
    <div id="mycell"><script type="text/x-sage">
@interact
def _(a=(1, 10)):
    print factorial(a)
 </script>
</div>

<h2>I tuoi calcoli</h2>
   
<div class="container">
  <h2>Usa gli esempi predefiniti o consulta il manuale di sage</h2>
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" id="menu1" type="button" data-toggle="dropdown">Dropdown Example
    <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="http://localhost/xampp/ProjectContact/ImportGooglecontacts/contatti_selezionati.php">Funzione</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>    
    </ul>
  </div><br>
  <p><strong>Note:</strong> The data-toggle="dropdown" attribute is required regardless of whether you call the dropdown() method.</p>
</div>

<script>
$(document).ready(function(){
    $(".dropdown-toggle").dropdown();
});
</script>
Type your own Sage computation below and click “Evaluate”.
    <div class="compute"><script type="text/x-sage">plot(sin(x), (x, 0, 2*pi))</script></div>
    <div class="compute"><script type="text/x-sage">
@interact
def f(n=(0,10)):
    print 2^n
</script></div>
    </section>

  </div>
 


<?php include 'footer.php';?>