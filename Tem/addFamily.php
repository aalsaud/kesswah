<!DOCTYPE html>
<html lang="ar">
  <head>
    <meta charset="utf-8">
    <title>كسوة &middot; اضافة اسرة</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="./assets/css/bootstrap.rtl.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 60px;
      }

      /* Custom container */
      .container {
        margin: 0 auto;
        max-width: 1000px;
      }
      .container > hr {
        margin: 60px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 80px 0;
        text-align: center;
/*         background-image: -webkit-linear-gradient(rgba(166,28,212,0.12) 20%, #ffffff 120%) */
      }
      .jumbotron h1 {
        font-size: 100px;
        line-height: 1;
      }
      .jumbotron .lead {
        font-size: 24px;
        line-height: 1.25;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }


      /* Customize the navbar links to be fill the entire space of the .navbar */
      .navbar .navbar-inner {
        padding: 0;
      }
      .navbar .nav {
        margin: 0;
        display: table;
        width: 100%;
      }
      .navbar .nav li {
        display: table-cell;
        width: 1%;
        float: none;
      }
      .navbar .nav li a {
        font-weight: bold;
        text-align: center;
        border-left: 1px solid rgba(255,255,255,.75);
        border-right: 1px solid rgba(0,0,0,.1);
      }
      .navbar .nav li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
      .navbar .nav li:last-child a {
        border-right: 0;
        border-radius: 0 3px 3px 0;
      }
    </style>
    <link href="./assets/css/bootstrap-responsive.css" rel="stylesheet">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="./assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="./assets/ico/favicon.png">

  </head>

  <body>
    <div class="container">

      <div class="masthead">      
            <h1  class="muted"><img id="logo" src="./assets/img/logo.png" /> كسوة عائشة</h1> 
        <div class="navbar">
          <div class="navbar-inner">
            <div class="container">
              <ul class="nav">
                <li><a href="home.php"><i class="icon-home"></i> الصفحة الرئيسية</a></li>
                <li><a href="addClothes.php"><i class="icon-plus-sign"></i> إضافة ملابس</a></li>
                <li class="active"><a href="#"><i class="icon-plus-sign"></i> إضافة أسرة</a></li>
                <li><a href="callUs.php"><i class="icon-envelope"></i> اتصل بنا</a></li>
              </ul>
            </div>
          </div>
        </div><!-- /.navbar -->
      </div>
	  <div id="loginAlert">
	  </div>
      <!-- Jumbotron -->
      <div class="jumbotron">
        <h2>اضافة اسرة</h2>
        <p class="lead"></p>
        <p>
        <form id="addFamilyForm">
	        <table class="table table-hover" id="addFamilyTable">
              <thead>
<!--               	رقم الجوال	الجنس	العمر	مقاس الفنيلة	الخصر	الطول -->
                <tr>
                  <th>الاسم</th>
                  <th>الجوال</th>
                  <th>الجنس</th>
                  <th>العمر</th>
                  <th>مقاس</th>
                  <th>الطول</th>
                  <th>العنوان</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
	                  <div class="control-group">
					  <div class="controls">
					    <input type="text" class="input-block-level" id="name">
					    <span class="help-inline"></span>
					  </div>
					</div>
                  </td>
                  <td>
	                  <div class="control-group">
					  <div class="controls">
					    <input type="number" class="input-block-level" id="mobile">
					    <span class="help-inline">يجب </span>
					  </div>
					</div>
                  </td>
                  <td>
	                  <div class="control-group">
					  <div class="controls">
					    <select class="input-block-level" id="gender">
						  <option>ذكر</option>
						  <option>أنثى</option>
						</select>
					    <span class="help-inline"></span>
					  </div>
					</div>
                  </td>
                  <td>
	                  <div class="control-group">
					  <div class="controls">
					    <input type="number" class="input-block-level" id="age">
					    <span class="help-inline"></span>
					  </div>
					</div>
                  </td>
                  <td>
	                  <div class="control-group">
					  <div class="controls">
					    <select class="input-block-level" id="T-Size">
						  <option>XXXL</option>
						  <option>XXL</option>
						  <option>XL</option>
						  <option>L</option>
						  <option>M</option>
						  <option>S</option>
						</select>
					    <span class="help-inline"></span>
					  </div>
					</div>
                  </td>
                  <td>
	                  <div class="control-group">
					  <div class="controls">
					    <input type="number" class="input-block-level" id="height">
					    <span class="help-inline"></span>
					  </div>
					</div>
                  </td>
                  <td>
	                  <div class="control-group">
					  <div class="controls">
					    <input type="text" class="input-block-level" id="address">
					    <span class="help-inline"></span>
					  </div>
					</div>
                  </td>
                </tr>
              </tbody>
            </table>
        </p>
      </div>
      <div>
      <div class="jumbotron">
	          <div class="form-actions">
	            <a class="btn btn-large" id="addFamilyBtn">+</a>
	            <a class="btn btn-large" id="removeFamilyBtn">-</a>
	            <a class="btn btn-large btn-primary" href="#"> تسجيل الاسرة</a>
	          </div>
	          </div>
      </form>
      </div>
      <hr>

    <div id="footer">
      <div class="container">
        <p class="muted credit">&copy;جميع الحقوق محفوظة لــ <a href="#">كسوة</a> 2013.</p>
      </div>
    </div>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
      <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="./assets/js/jquery-1.10.1.min.js"></script>
    <script src="./assets/js/custom.js"></script> 
    <script src="./assets/js/jquery.js"></script>
    <script src="./assets/js/bootstrap-transition.js"></script>
    <script src="./assets/js/bootstrap-alert.js"></script>
    <script src="./assets/js/bootstrap-modal.js"></script>
    <script src="./assets/js/bootstrap-dropdown.js"></script>
    <script src="./assets/js/bootstrap-scrollspy.js"></script>
    <script src="./assets/js/bootstrap-tab.js"></script>
    <script src="./assets/js/bootstrap-tooltip.js"></script>
    <script src="./assets/js/bootstrap-popover.js"></script>
    <script src="./assets/js/bootstrap-button.js"></script>
    <script src="./assets/js/bootstrap-collapse.js"></script>
    <script src="./assets/js/bootstrap-carousel.js"></script>
    <script src="./assets/js/bootstrap-typeahead.js"></script>
  </body>
</html>
