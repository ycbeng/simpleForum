<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>/*
Ref:
Thanks to:
http://www.jqueryscript.net/layout/Simple-jQuery-Plugin-To-Create-Pinterest-Style-Grid-Layout-Pinterest-Grid.html
*/

body {
 background-color:#eee;   
}    

#pinBoot {
  position: relative;
  max-width: 100%;
  width: 100%;
}
img {
  width: 100%;
  max-width: 100%;
  height: auto;
}
.white-panel {
  position: absolute;
  background: white;
  box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.3);
  padding: 10px;
}
/*
stylize any heading tags withing white-panel below
*/

.white-panel h1 {
  font-size: 1em;
}
.white-panel h1 a {
  color: #A92733;
}
.white-panel:hover {
  box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);
  margin-top: -5px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}</style>
<div class="container">
  <div class="row">
    <h2>Pinterest Responsive Grid</h2>

    <p>Best viewed <a href="http://bootsnipp.com/iframe/Zkk0O" target="_blank">full screen</a>
    </p>
    <hr>
    <section id="pinBoot">
    @foreach($discussion as $d)
      <article class="white-panel"><img src="http://i.imgur.com/sDLIAZD.png" alt="">
        <h4><a href="#"> {{ $d->title }} </a></h4>
        <p> {{ str_limit($d->content,50) }}</p>
      </article>

     @endforeach 

    </section>


    <hr>


  </div>
  <p>
    <a href="http://validator.w3.org/check?uri=http%3A%2F%2Fbootsnipp.com%2Fiframe%2FZkk0O" target="_blank"><small>HTML</small><sup>5</sup></a>
    <br>
    <br>

  </p>

</div>