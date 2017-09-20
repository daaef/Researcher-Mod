
<!-- added bootstrap navbar code here -->
<nav class="navbar fixed-top navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#"><img src="resources/img/indexicon.png" alt="" class="logo"></a>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav navbar-right">
              <?php  /**
             * Created by IntelliJ IDEA.
             * User: OLAYIWOLE
             * Date: 06/09/2017
             * Time: 03:49
             */ nav_main($db_conn); ?>
            </ul>
  </div>
</nav>
<!-- <nav>
    <div class="container">
        <img src="resources/img/indexicon.png" alt="" class="logo">
        <ul class="main-nav">
            <?php  /**
             * Created by IntelliJ IDEA.
             * User: OLAYIWOLE
             * Date: 06/09/2017
             * Time: 03:49
             */ nav_main($db_conn); ?>
        </ul>
    </div>
</nav> -->




