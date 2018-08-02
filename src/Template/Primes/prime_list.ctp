<style media="screen">
  #primeTitle {
    
  }
  .primeBox {
    border: solid orange 2px;
    border-radius: 2px;
    margin: 0.1em;
  }
</style>

<h2 id="primeTitle">Erik's Prime Number Generator</h2>

<div id="primeDiv" class="container-fluid"></div>

<script type="text/javascript">
$(document).ready(function() {
    $.getJSON("/primes.json", function( data ) {
    var items = [];
    $.each( data['primes'], function( key, val ) {
      items.push( "<span id='" + key + "' class='col-2 primeBox'>" + val + "</span>" );
    });

    $("<div/>", {
      "class": "menu row",
      html: items.join( "" )
    }).appendTo("#primeDiv");
  });
});
</script>
