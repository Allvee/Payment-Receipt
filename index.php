<!DOCTYPE html>
<html lang="en">

    <meta charset="utf-8"/>
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png"/>
    <link rel="icon" type="image/png" href="assets/img/favicon.png"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Receipt & payment status</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport'/>
    <meta name="viewport" content="width=device-width"/>
    <link rel="stylesheet" href="css/bootstrap-3.3.2.min.css" type="text/css">


    <link rel="stylesheet" href="css/bootstrap-multiselect.css" type="text/css">

    <link rel="stylesheet" href="css/cdnbootstrap.min.css">
    <link rel="stylesheet" href="css/datatable.css">

    <link rel="stylesheet" href="popup/css/jquery.modal.css">
    <link rel="stylesheet" href="popup/css/jquery.modal.theme-atlant.css">
    <link rel="stylesheet" href="popup/css/jquery.modal.theme-xenon.css">

</head>

<body>
<script type="text/javascript">

</script>
<div class="container">
    <div id="header" style="display: none">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header" style="margin-right: 40%">
                                <img src="images/logo.png" alt="Logo" style="width:150px;height:100px;">
                            </div >
                            <ul class="nav navbar-nav">
                                <li class="active btn" id="home" onclick="view('container','homeView',true);changeTab('home');"><a>Home</a></li>
                                <li class="btn" id="receipt" onclick="view('container','receiptView',true); changeTab('receipt');"><a>Receipt</a></li>
                                <li class="btn" id="payment" onclick="view('container','paymentView',true);changeTab('payment');"><a>payment</a></li>
								<li  class="btn" onclick="logout();"> <a>Logout<span id="loguser"></span></a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div id="container"></div>
        </div>
    </div>
</div>

    <div id="login_directory" class="hidden">
        <div class="row">
            <div class="col-lg-12" style=" font-weight: bold; text-align: center;"><h2>Troubleshoot Technologies</h2></div>
            <div class="col-lg-12" style=" font-weight: bold; text-align: center;"><h4>Committed to quality service</h4></div>
        </div>
            <div class="row"><div class="col-sm-2"></div>
                <div class="col-sm-6 ">
                    <div class="text-center">
                        <h4 class="text-uppercase" style=" font-weight: 700; margin-bottom: 0px !important;">Sign In</h4>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" style="margin-bottom: 10px !important;" id="loginForm" name="loginForm"
                              onSubmit="loginController();return false;">
                            <div class="form-group ">
                                <div class="col-xs-12">
                                    <input class="form-control" type="text" name="username" required="" placeholder="Username"
                                           data-validate='[{"not_empty":"Please input your username"}]'/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <input class="form-control" type="password" name='password' required=""
                                           placeholder="Password" data-validate='[{"not_empty":"Please input your password"}]'/>
                                </div>
                            </div>
                            <div class="form-group text-center m-t-30">
                                <div class="col-xs-12">
                                    <button class="btn btn-custom btn-bordred btn-block waves-effect waves-light text-uppercase"
                                            type="submit">Log In
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div><div class="col-sm-2"></div>
            </div>
        </div>

<div id="homeView" class="hidden">
    <div class="row">
	 <div class="col-lg-12" style=" font-weight: bold; text-align: center;"><h2>Troubleshoot Technologies</h2></div>
	 <div class="col-lg-12" style=" font-weight: bold; text-align: center;"><h4>Committed to quality service</h4></div>
	  <div class="col-lg-12" style="text-align: left;"><h4>Receipt & payment:</h4></div>
        <div class="col-lg-1" style=" font-weight: bold">Year</div>
        <div class="col-lg-3">
            <div class="form-group">
                <select class="form-control" id="selectionYear">
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                </select>
            </div>
        </div>

        <div class="col-lg-1" style=" font-weight: bold">Month</div>
        <div class="col-lg-3">
            <div >
                <select multiple="multiple" class="form-control" id="selectionMonth">
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
            </div>
        </div>
        <div class="col-lg-12"><br></div>
        <div class="col-lg-1"></div>
        <div class="col-lg-2">
            <div class="radio">
                <label style=" font-weight: bold"><input type="radio" name="dataViewView" id="receiptViewdt">RECEIPT</label>
            </div>
        </div>

        <div class="col-lg-2">
            <div class="radio">
                <label style=" font-weight: bold"><input type="radio" name="dataViewView" id="paymentViewdt">PAYMENT</label>
            </div>
        </div>

        <div class="col-lg-2">
            <div class="radio">
                <label style=" font-weight: bold"><input type="radio" name="dataViewView" id="allViewdt" checked="checked">JOURNAL</label>
            </div>
        </div>
        <div class="col-lg-5">
            <button class="btn btn-primary" onclick="getData();"> SHOW REPORT</button>
        </div>
    </div>

    <div class="row" >
        <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1">
            <div class="card-content">
                <h3><p id="tableTitle" style=" font-weight: bold; text-align: center"></p></h3>
                <div id="tableRow">
                <table class="table table-bordered" style=" overflow:scroll;height:100px;" width="100%" id="dataTable">

                </table></div>
            </div>
        </div>
    </div>
</div>

<div id="receiptView" class="hidden">
    <div class="row">
        <div class="col-lg-12" style=" font-weight: bold; text-align: center;"><h2>Troubleshoot Technologies</h2></div>
        <div class="col-lg-12" style=" font-weight: bold; text-align: center;"><h4>Committed to quality service</h4></div>
        <div class="col-lg-12" style="text-align: left;"><h4>Receipt Entry:</h4></div>
        <br>
        <br>
        <div class="col-lg-2"><button class="btn btn-warning" id="saveCancelReceiptUser" onclick="saveCancelReceiptUser();">New Receipt Name</button></div>
        <div class="col-lg-2"><button class="btn btn-warning" id="saveCancelReceiptEntry" onclick="saveCancelReceiptEntry();">New Entry</button></div>
    </div>
    <br>
    <br>
    <div id="receiptViewForm">

    </div>

</div>
<div id="paymentView" class="hidden">

    <div class="row">
        <div class="col-lg-12" style=" font-weight: bold; text-align: center;"><h2>Troubleshoot Technologies</h2></div>
        <div class="col-lg-12" style=" font-weight: bold; text-align: center;"><h4>Committed to quality service</h4></div>
        <div class="col-lg-12" style="text-align: left;"><h4>Payment Entry:</h4></div>
        <br>
        <br>
        <div class="col-lg-2"><button class="btn btn-warning" id="saveCancelPaymentUser" onclick="saveCancelPaymentUser();">New Payment Name</button></div>
        <div class="col-lg-2"><button class="btn btn-warning" id="saveCancelPaymentEntry" onclick="saveCancelPaymentEntry();">New Entry</button></div>
    </div>
    <br>
    <br>
    <div id="paymentViewForm">

    </div>

</div>

<div id="receiptViewFormHtmlNewUser" class="hidden">
    <form id="receiptFormUser" onsubmit="saveReceipt(); return false;" enctype="text/plain">
        <input id="receiptID" name="receiptID" type="hidden" value="NA">
        <input id="receiptAction" name="receiptAction" type="hidden" value="ADD">
        <div class="form-group">
            <div class="row">


                <div class="col-lg-5">
                    <label for="receiptName">Name:</label>
                    <input type="text" class="form-control" id="receiptName" name="receiptName" value="NA">
                </div>

                <div class="col-lg-6">
                    <label for="receiptYear">Year:</label>
                    <input type="number" class="form-control" id="receiptYear" name="receiptYear">
                </div>

                <div class="col-lg-6">
                    <label for="receiptMonth">Month:</label>
                    <select class="form-control" id="receiptMonth" name="receiptMonth">
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                </div>


            </div>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-lg-8"></div>
                <div class="col-lg-2">
                    <button class="btn-lg btn-primary" type="button" onclick="ConfirmBackToReceipt();">Back</button>
                </div>
                <div class="col-lg-2">
                    <button class="btn-lg btn-primary" type="submit">Save</button>
                </div>
            </div>
        </div>
    </form>

</div>

<div id="receiptViewFormHtmlNewEntry" class="hidden">
    <div class="row">
        <div class="col-lg-1" style=" font-weight: bold">Year</div>
        <div class="col-lg-3">
            <div class="form-group">
                <select class="form-control" id="receiptSelectionYear">
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                </select>
            </div>
        </div>

        <div class="col-lg-1" style=" font-weight: bold">Month</div>
        <div class="col-lg-3">
            <div class="form-group">
                <select class="form-control" id="receiptSelectionMonth">
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
            </div>
        </div>
        <div class="col-lg-4">
            <button class="btn btn-primary" onclick="getReceiptList();"> Get Receipt Name List</button>
        </div>
    </div>
    <form id="receiptFormEntry" onsubmit="updateReceipt(); return false;" enctype="text/plain">
        <input id="receiptID" name="receiptID" type="hidden" value="NA">
        <input id="receiptAction" name="receiptAction" type="hidden" value="UPDATE">
        <div class="form-group">
            <div class="row">

                <div class="col-lg-6">
                    <label for="receiptNameselect">Name:</label>
                    <select type="text" class="form-control" id="receiptNameselect" name="receiptNameselect"></select>
                </div>

                <div class="col-lg-6">
                    <label for="receiptDay">Date:</label>
                    <select class="form-control" id="receiptDay" name="receiptDay">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>

                </div>

                <div class="col-lg-6">
                    <label for="receiptAmount">Ammount:</label>
                    <input type="number" class="form-control" id="receiptAmount" name="receiptAmount">
                </div>

                <div class="col-lg-6">
                    <label for="receiptType">Receipt Type </label>
                    <select class="form-control" id="receiptType" name="receiptType">
                        <option value="1">Cash On Hand</option>
                        <option value="2">Cash On Bank</option>
                    </select>
                </div>


            </div>

            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-lg-8"></div>
                <div class="col-lg-2">
                    <button class="btn-lg btn-primary" type="button" onclick="ConfirmBackToReceipt();">Back</button>
                </div>
                <div class="col-lg-2">
                    <button class="btn-lg btn-primary" type="submit">Save</button>
                </div>

            </div>
        </div>
    </form>

</div>

<div id="paymentViewFormHtmlNewUser" class="hidden">

    <form id="paymentFormUser" onsubmit="savePayment(); return false;" enctype="text/plain">
        <input id="paymentID" name="paymentID" type="hidden" value="NA">
        <input id="paymentAction" name="paymentAction" type="hidden" value="ADD">
        <div class="form-group">
            <div class="row">
                <div class="col-lg-6">
                    <label for="receiptName">Name:</label>
                    <input type="text" class="form-control" id="paymentName" name="paymentName" value="NA">
                </div>

                <div class="col-lg-6">
                    <label for="paymentYear">Year:</label>
                    <input type="number" class="form-control" id="paymentYear" name="paymentYear">
                </div>

                <div class="col-lg-6">
                    <label for="paymentMonth">Month:</label>
                    <select class="form-control" id="paymentMonth" name="paymentMonth">
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                </div>

            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-lg-8"></div>
                <div class="col-lg-2">
                    <button class="btn-lg btn-primary" type="button" onclick="ConfirmBackToPayment();">Back</button>
                </div>
                <div class="col-lg-2">
                    <button class="btn-lg btn-primary" type="submit">Save</button>
                </div>
            </div>
        </div>
        </div>
    </form>


</div>


<div id="paymentViewFormHtmlNewEntry" class="hidden">
    <div class="row">
        <div class="col-lg-1" style=" font-weight: bold">Year</div>
        <div class="col-lg-3">
            <div class="form-group">
                <select class="form-control" id="paymentSelectionYear">
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                </select>
            </div>
        </div>

        <div class="col-lg-1" style=" font-weight: bold">Month</div>
        <div class="col-lg-3">
            <div class="form-group">
                <select class="form-control" id="paymentSelectionMonth">
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                </select>
            </div>
        </div>
        <div class="col-lg-4">
            <button class="btn btn-primary" onclick="getPaymentList();"> Get Payment Name List</button>
        </div>
    </div>


    <form id="paymentFormEntry" onsubmit="updatePayment(); return false;" enctype="text/plain">
        <input id="paymentID" name="paymentID" type="hidden" value="NA">
        <input id="paymentAction" name="paymentAction" type="hidden" value="UPDATE">
        <div class="form-group">
            <div class="row">


                <div class="col-lg-6">
                    <label for="paymentNameselect">Name:</label>
                    <select type="text" class="form-control" id="paymentNameselect" name="paymentNameselect"></select>
                </div>

                <div class="col-lg-6">
                    <label for="paymentDay">Date:</label>
                    <select class="form-control" id="paymentDay" name="paymentDay">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                </div>

                <div class="col-lg-6">
                    <label for="paymentAmount">Ammount:</label>
                    <input type="number" class="form-control" id="paymentAmount" name="paymentAmount">
                </div>

                <div class="col-lg-6">
                    <label for="paymentType">Payment Type </label>
                    <select class="form-control" id="paymentType" name="paymentType">
                        <option value="1">Cash On Hand</option>
                        <option value="2">Cash On Bank</option>
                    </select>
                </div>
            </div>
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-lg-8"></div>
                <div class="col-lg-2">
                    <button class="btn-lg btn-primary" type="button" onclick="ConfirmBackToPayment();">Back</button>
                </div>
                <div class="col-lg-2">
                    <button class="btn-lg btn-primary" type="submit">Save</button>
                </div>
            </div>
        </div>
    </form>



</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/viewJs.js"></script>
<script type="text/javascript" src="js/configJS.js"></script>
<script type="text/javascript" src="js/commonJS.js"></script>
<script type="text/javascript" src="js/controllerJS.js"></script>



<!-- for Popup -->
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script type="text/javascript" src="popup/js/jquery.modal.min.js"></script>
<script type="text/javascript" src="popup/js/jquery.modal.js"></script>

<script type="text/javascript" src="js/bootstrap-multiselect.js"></script>
<!--<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>-->
<script type="text/javascript" src="js/bootstrap-3.3.2.min.js"></script>

<script type="text/javascript" src="js/cdndatatables.js"></script>

</body>
</html>