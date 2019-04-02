<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
.flight-engine {
    position: absolute;
    left: 0px;
    right: 0px;
    bottom: 50px;
    padding: 20px;
    z-index: 999;
}
.tab1.active {
    display: block
}
.tab1 {
    display: none
}
.tabing {
    float: left;
    width: 100%;
    background: rgba(0, 130, 185, .8);
    padding: 0 10px 10px 10px;
    color: #fff;
}
.tabing ul {
    margin: 0px;
    padding: 0px;
    list-style: none;
    width: 100%;
    float: left;
}
.tabing ul li {
    float: left;
}
.tabing ul li a {
    display: block;
    padding: 5px;
    text-decoration: none;
    color: #fff;
    background: rgba(0, 130, 185, .9);
    margin: 0 10px 0 0;
    padding: 5px 10px 5px 10px;
    border-radius: 0px 0px 5px 5px;
    font-size: 16px;
    text-align: left;
}
.tabing ul li a.active {
    background: #ba0400
}
.flight-tab {
    width: 100%;
    float: left;
    margin-top: 10px;
    padding: 15px
}
.flight-tab .textboxstyle {
    width: 100%;
    float: left;
    color: #191919;
    padding: 8px 10px 8px 35px;
    border: none;
    border-radius: 3px;
    background: #f5f5f5;
    font-size: 14px;
    line-height: 20px;
}
.persent-one {
    width: 19%;
    float: left;
    margin-right: 1%;
    position: relative;
    margin-bottom: 10px;
}
.persent-one i {
    position: absolute;
    left: 10px;
    top: 10px;
    color: #191919;
    font-size: 18px;
}
.persent-one.less-per {
    width: 16%;
    float: left;
    margin-right: 1%;
}
.persent-one.less-btn {
    width: 5%;
    float: left;
    margin-right: 1%;
}
.persent-one.less-btn .cst-btn {
    width: 85px;
    height: 85px;
    border-radius: 100%;
    position: absolute;
    top: -32px;
}$('.tabing ul li a').click(function(e) {
         e.stopPropagation();
         e.preventDefault();
         var tabcont = $(this).attr('href');
         console.log(tabcont);
         $('.tabing a').removeClass('active');
         $(this).addClass('active');
         $('.tab1').hide();
         $(tabcont).show();
     });
</style>

  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="flight-engine">
               <div class="container">
                  <div class="tabing">
                     <ul>
                        <li><a class="active" href="#1"><i class="fa fa-plane" aria-hidden="true"></i> Room</a>
                        </li>
                        
                     </ul>
                     <div class="tab-content">
                        <div id="1" class="tab1 active">
                           <div class="flight-tab row">
                             
                              <div class="persent-one less-per">
                                 <i class="fa fa-calendar" aria-hidden="true"></i>
                                 <input type="text" name="dep" class="textboxstyle" id="from-date1" placeholder="From Date">
                              </div>
                              <div class="persent-one less-per">
                                 <i class="fa fa-calendar" aria-hidden="true"></i>
                                 <input type="text" name="dep" class="textboxstyle" id="to-date" placeholder="To Date">
                              </div>
                              <div class="persent-one">
                                 <i class="fa fa-user" aria-hidden="true"></i>
                                 <div class="textboxstyle" id="passenger">Guest</div>
                              </div>
                              <div class="persent-one less-btn">
                                 <input type="Submit" name="submit" value="Search" class="btn btn-info cst-btn" id="srch">
                              </div>
                           </div>
                           <!-- flight tab -->
                        </div>
                        <!-- tab 1 -->
                         <div id="2" class="tab1">
                           <div class="flight-tab row">
                              <div class="persent-one">
                                 <i class="fa fa-map-marker" aria-hidden="true"></i>
                                 <input type="text" name="dep" class="textboxstyle" id="dep" placeholder="From City or airport">
                              </div>
                              <div class="persent-one">
                                 <i class="fa fa-map-marker" aria-hidden="true"></i>
                                 <input type="text" name="dep" class="textboxstyle" id="arival" placeholder="To City or airport">
                              </div>
                              <div class="persent-one less-per">
                                 <i class="fa fa-calendar" aria-hidden="true"></i>
                                 <input type="text" name="dep" class="textboxstyle" id="from-date1" placeholder="Depart">
                              </div>
                              <div class="persent-one less-per">
                                 <i class="fa fa-calendar" aria-hidden="true"></i>
                                 <input type="text" name="dep" class="textboxstyle" id="to-date" placeholder="Returrn">
                              </div>
                              <div class="persent-one">
                                 <i class="fa fa-user" aria-hidden="true"></i>
                                 <div class="textboxstyle" id="passenger">01 Passenger</div>
                              </div>
                              <div class="persent-one less-btn">
                                 <input type="Submit" name="submit" value="Search" class="btn btn-info cst-btn" id="srch">
                              </div>
                           </div>
                           <!-- flight tab -->
                        </div>
                        <!-- tab 1 -->
                     </div>
                     </div>
                     <!-- tab content -->
                  </div>
                  <!-- tabbing -->
               </div>
            </div>