<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/simple-line-icons.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/jquery-ui.css" rel="stylesheet">
    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="css/skydash.css">
    <!-- enable canvas for old versions of IE -->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta http-equiv="edit-Type" edit="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  </head>
  <body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-white" id="warning-nav">
      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">        
        <ul class="navbar-nav" id="navbase64">
          <li class="nav-item">
            <label><strong class="font-weight-bold text-danger" id="warning" ></strong></label>                        
          </li>
        </ul>
      </div>
    </nav>
    <nav class="navbar navbar-expand-sm navbar-light bg-white border border-top-0">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExample09">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item navleft">
            <img class="dblogo" height="50" src="brand/sky.png" alt="logo">
          </li>
        </ul>
      </div>
      <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">        
        <ul class="navbar-nav" id="navbase64">
          <li class="nav-item" id="channelgroupholder">
            <label for="channelgroup" class="small col-form-label  align-center">Channel List</label>
            <select id="channelgroup" class="form-control form-control-sm border-light bg-light"></select>
          </li>
          <li class="nav-item">
            <label for="unit" class="small col-form-label  align-center">Unit</label>
            <select id="unit" class="form-control form-control-sm border-light  bg-light">
              <option value="1">000</option>
              <!-- <option value="2">ATV</option> -->
            </select>
          </li>
          <li class="nav-item" id="channelgroupholder">
            <label class="small col-form-label  align-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          </li>
          <li class="nav-item">
            <label for="periodtype" class="small col-form-label  align-center">Period</label>
            <select id="periodtype" class="form-control form-control-sm border-light  bg-light">
              <option value="1">Date</option>
              <option value="2">Week</option>
              <option value="3">Month</option>
              <option value="4">Quarter</option>
              <option value="5">Year</option>
            </select>
          </li>
          <li class="nav-item" id="periodwrapper">
            <label for="customperiod" class="small col-form-label  align-center">&nbsp;</label>
            <div class="row">
              <input type="text" id="customperiod" class="form-control form-control-sm">
            </div>                      
          </li>          
          <li class="nav-item">
            <label for="prev" class="small col-form-label  align-center">&nbsp;</label><br/>
            <button class="btn btn-light btn-sm" id="prev"><i class="icon-arrow-left"></i></button>
          </li>
          <li class="nav-item">
            <label for="next" class="small col-form-label  align-center">&nbsp;</label><br/>
            <button class="btn btn-light btn-sm" id="next"><i class="icon-arrow-right"></i></button>
          </li>
          <li class="nav-item" id="channelgroupholder">
            <label for="channelgroup" class="small col-form-label  align-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          </li>
          <li class="nav-item">
            <label for="barnum" class="small col-form-label  align-center">Graph: # of Points (Maximum 13)</label>
            <input type="text" id="barnum" class="form-control form-control-sm" value="13">
          </li>
          <li class="nav-item">
            <label for="channelgroup" class="small col-form-label  align-center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          </li>
          <li class="nav-item dropdown">
            <label for="bmi" class="small col-form-label  align-center">Search Title or BMI</label>
            <!-- <input type="text" id="filterbmi" class="form-control form-control-sm"> -->
            <div id="filter-group">
              <input type="text" id="filterbmi" class="form-control form-control-sm">
              <span id="emptyfilter">x</span>              
            </div>
            <div class="dropdown-content">
              <ul id="list"><ul>
            </div>
          </li>
          <li class="nav-item">
            <label for="help" class="small col-form-label  align-center">&nbsp;</label><br/>
            <a href="https://wirbei.sky.de/intranet/#!/container/container-rossi/contents" target="_blank"><img src="icon/question.png" id="help" height="30" alt="placeholder+image"></a>            
          </li>
        </ul>
        <ul class="navbar-nav ml-auto" id="rightlogo">
          <li class="nav-item navlogo navright">
            <img class="dblogo" height="40" src="brand/db.ico" alt="logo">
          </li>
          <li class="nav-item" id="telogo">
            <img height="25" src="brand/te.png" alt="logo">
          </li>
        </ul>
      </div>
    </nav>
    <main role="main" class="container-fluid">
      <div class="row">
        <div class="col-sm-12 col-md-7" id="performance-content">
          <div class="card border">
            <div class="card-body">
              <div class="table-responsive" id="channelperformance"></div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-5" id="performance-content">
          <div class="card border">
            <div class="card-body">
              <div class="table-responsive" id="programeperformance"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-12" id="trending-content">
          <div class="card border">
            <div class="card-body">
              <div class="table-responsive" id="bargraph"></div>
            </div>
          </div>
        </div>
      </div>
      <div id="exportcontainer" class="bg-info border">
        <div class="card-title bg-light" id="btnshowhideEx" value="hidden">Show Export Module</div>        
        <div class="row">
          <div class="col-sm-6">            
            <div class="col-sm-12" id="exportbody">
              <div class="checkbox">
                <label><input type="radio" name="format" value="xlsx" checked="true">Xlsx Format</label>
                <label><input type="radio" name="format" value="csv">CSV Format</label>            
              </div>
            </div>
            <div class="col-sm-12" id="exportbody">
              <button class="btn btn-sm" id="exportchannel" value="hidden">Export Channel Performance</button>
              <br/><a class="btn btn-sm" id="dlchannel" disable="true" download>No exported Xslx file</a>
            </div>        
            <div class="col-sm-12" id="exportbody">
              <button class="btn btn-sm" id="exportprogramme" value="hidden">Export Programme Performance</button>
              <br/><a class="btn btn-sm" id="dlprog" disable="true" download>No exported Xslx file</a>
            </div>        
            <div class="col-sm-12" id="exportbody">
              <button class="btn btn-sm" id="exporttrending" value="hidden">Export Trending</button>
              <br/><a class="btn btn-sm" id="dltrend" disable="true" download>No exported Xslx file</a>
            </div>
          </div>
          <div class="col-sm-6"></div>
        </div>
      </div>
    </main>
    <script src="js/jquery.min.js"></script>    
    <script src="js/bicubicInterpolation.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootbox.min.js"></script>
    <script src="js/underscore-min.js"></script>
    <script src="js/echarts3.js"></script>
    <script src="js/jquery.floatThead.js"></script>
    <script src="js/alasql.min.js"></script>
    <script src="js/html2canvas.min.js"></script>
    <script src="js/xlsx.core.min.js"></script>
    <script src="js/jquery-ui.js"></script>    
    <script src="js/skydash.js?v=1"></script>
  </body>
</html>
