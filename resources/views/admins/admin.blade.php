<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>{{config('app.name','MyProfile')}}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link href="css/mycss.css" rel="stylesheet" />
  {{-- <link href="css/app.css" rel="stylesheet" /> --}}
  <style>
    .admin-body{
    background-color:rgba(255, 255, 255, 0.87);
    color:black;
    padding:0px 0px 20px 0px;
}
  .list{
    list-style-type:none;
    margin-left:0px;
    padding-left:0px;
  }

  .li{
    border-top: 1px solid #37414b;
    border-bottom: 1px solid #1f262d;
    display: block;
    position: relative;
    line-height: 20px;
    text-align: -webkit-match-parent;
    padding-top:10px;
    padding-bottom:10px;
  }

  .foot{
    padding-top:20px;
    padding-bottom:20px;
    margin-bottom:0px;
    margin-top:0px;
}

.form-style-3{
	/* max-width: 450px; */
	/* font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif; */
}
.form-style-3 label{
	display:block;
	margin-bottom: 10px;
}
.form-style-3 label > span{
	float: left;
  width: 20%;
  margin-left:30px;
	color: #99bbff;
	font-weight: bold;
	font-size: 13px;
	text-shadow: 1px 1px 1px #fff;
}
.form-style-3 fieldset{
	border-radius: 10px;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	margin: 0px 0px 10px 0px;
	border: 1px solid #99bbff;
	padding: 20px;
	background: white;
	box-shadow: inset 0px 0px 15px #e6eeff;
	-moz-box-shadow: inset 0px 0px 15px #e6eeff;
	-webkit-box-shadow: inset 0px 0px 15px #e6eeff;
}
.form-style-3 fieldset legend{
	color: #cce6ff;
	border-top: 1px solid #99bbff;
	border-left: 1px solid #99bbff;
	border-right: 1px solid #99bbff;
	border-radius: 5px 5px 0px 0px;
	-webkit-border-radius: 5px 5px 0px 0px;
	-moz-border-radius: 5px 5px 0px 0px;
	background: white;
	padding: 0px 8px 3px 8px;
	box-shadow: -0px -1px 2px #F1F1F1;
	-moz-box-shadow:-0px -1px 2px #F1F1F1;
	-webkit-box-shadow:-0px -1px 2px #F1F1F1;
	font-weight: normal;
	font-size: 12px;
}
.form-style-3 textarea{
	width:250px;
	height:100px;
}
.form-style-3 input[type=text],
.form-style-3 input[type=date],
.form-style-3 input[type=datetime],
.form-style-3 input[type=number],
.form-style-3 input[type=search],
.form-style-3 input[type=time],
.form-style-3 input[type=url],
.form-style-3 input[type=email],
.form-style-3 select, 
.form-style-3 textarea{
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	border: 1px solid #99bbff;
	outline: none;
	color: #99bbff;
	padding: 5px 8px 5px 8px;
	box-shadow: inset 1px 1px 4px #e6eeff;
	-moz-box-shadow: inset 1px 1px 4px #e6eeff;
	-webkit-box-shadow: inset 1px 1px 4px #e6eeff;
	background: white;
	width:60%;
}
.form-style-3  input[type=submit],
.form-style-3  input[type=button]{
	background: #cce6ff;
	border: 1px solid #99bbff;
	padding: 5px 15px 5px 15px;
	color: blue;
	box-shadow: inset -1px -1px 3px #e6eeff;
	-moz-box-shadow: inset -1px -1px 3px #e6eeff;
	-webkit-box-shadow: inset -1px -1px 3px #e6eeff;
	border-radius: 3px;
	border-radius: 3px;
	-webkit-border-radius: 3px;
	-moz-border-radius: 3px;	
	font-weight: bold;
}
.required{
	color:red;
	font-weight:normal;
}

  </style>
</head>

<body style="background-color:#333; color:#ddd">
  <div class="container-fluid" style="margin-bottom:0px; padding-bottom:0px;">
  <div class="row">
  <div class="col-sm-3">
  <h2>ADMIN PAGE</h2>
  </div>
  <div class="col-sm-9">
<!-- login section
    <div style="background-color:white; width:100%; hieght:50px;">huuu</div> -->
  </div>
  </div>
  <div class="row">
  <div class="col-sm-2">
    <ul class="list">
      <li class="li" id="landingPage"> <i class="icon-home"></i>Landing Page</li>
      <li class="li" id="aboutMe">About me</li>
      <li class="li" id="skills">My skills</li>
    </ul>
  </div>
  <div class="col-sm-10 admin-body">
  
    <div style="height:45px; width:100%; background-color:white; text-align:center; padding-top:10px; border-bottom: 1px solid rgb(180, 162, 162);">
      <strong>Welcome to the admin page.</strong>
    </div>
  
  <br>
  <div class="container">
    <div class="row">
      <div class="col-sm-2"></div>
      <div class="col-sm-8 form-style-3">
        <div id="landingPageInfo">
          <form>
            <fieldset><legend>Landing Page</legend>
             <label for="field2"><span>Passport Picture</span><input type="email" class="input-field" name="field2" value="" /></label>
             <label for="field6"><span>Basic information </span><textarea name="field6" class="textarea-field"></textarea></label>
           </fieldset>
        </form>
        </div>

        <div id="aboutMeInfo">
          <form>
            <fieldset><legend>About Me Page</legend>
             <div style="color:#99bbff; text-align:center; margin-bottom:20px;">Please provide your client with a summary of all they need to know about you.</div>
             <label for="field6"><span>About Me </span><textarea name="field6" class="textarea-field"></textarea></label>
           </fieldset>
        </form>
        </div>

        <div id="skillsInfo">
          <form>
            <fieldset><legend>Skills Page</legend>
            <table style="border-collapse:separate; border-spacing:30px; width:90%;">
              <tbody id="loading_rows">
                <tr class="memberrow xx">       
                  <td><input name="skill[xx]" type="text" class="form-control" required="" placeholder="Skill"></td>       
                  <td><input name="rate[xx]" type="text" class="form-control" required="" placeholder="Rate(%)"></td>
                  <td align="right">
                  <!--<button type="button" class="btn btn-danger removerow" data-row="1">X</button>-->
                  </td>  
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th></th>
                  <th></th>
                  <th><button type="button" id="btn_add_row" class="btn btn-primary" style="float: right">+</button></th>
                </tr>                              
              </tfoot>
              </table>


              <table style="border-collapse:separate; border-spacing:0px 10px; width:60%; align:center;">
              <tbody id="loading_rows_sec">
                <tr class="memberrowsec xx">       
                  <td><input name="demoskill[xx]" type="text" class="form-control" required="" placeholder="Demonstrated skills"></td>
                  <td align="left">
                  <!--<button type="button" class="btn btn-danger removerowsec" data-row="1">X</button>-->
                  </td>  
                </tr>
              </tbody>
              <tfoot>
                <tr>
                  <th></th>
                  <th align="left"><button type="button" id="btn_add_row_sec" class="btn btn-primary" style="float: right">+</button></th>
                </tr>                              
              </tfoot>
              </table>
           </fieldset>
        </form>
        </div>
      </div>
      <div class="col-sm-2"></div>
    </div>
  </div>

</div>
  </div>
  <div class="row foot" align="center">
            <div class="col-sm-12">
                <h4 style="color:beige"><strong>Get in touch</strong></h4>
                <p>
                  <i class="glyphicon glyphicon-earphone"></i> +234 706 784 9898 <br>
                  <i class="fa fa-envelope-o"></i> chinyelu@ibutechinyelu.com
                </p>
                Copyright © Ibute Chinyelu. All Rights Reserved.
            </div>
  </div>
  </div>



  <script>
    $(document).ready(function(){
      $("#landingPageInfo").show();
      $("#aboutMeInfo").hide();
      $("#skillsInfo").hide();

      $("#landingPage").on('click',function(){
        $("#landingPageInfo").show(1500);
        $("#aboutMeInfo").hide();
        $("#skillsInfo").hide();
      });

      $("#aboutMe").on('click',function(){
        $("#landingPageInfo").hide();
        $("#aboutMeInfo").show(1500);
        $("#skillsInfo").hide();
      });

      $("#skills").on('click',function(){
        $("#landingPageInfo").hide();
        $("#aboutMeInfo").hide();
        $("#skillsInfo").show(1500);
      });
    });
  </script>

<script type="text/javascript">
        //add new row
            var $rowCount = 0;
            $("#btn_add_row").on("click",function(){
    //alert("sadfsdf");
            $rowCount ++;
            var $row = '<tr class="memberrow ' + $rowCount + '">';
            $row += '       <td><input name="skill[' + $rowCount + ']" type="text" class="form-control" required="" placeholder="Skill"></td>';
            $row += '       <td><input name="rate[' + $rowCount + ']" type="text" class="form-control" required="" placeholder="Rate(%)"></td>';
            $row += '       <td align="right"><button type="button" class="btn btn-danger removerow" data-row="' + $rowCount + '">X</button></td>';
            $row += '  </tr>';
    
            $("#loading_rows").append($row);    
            $('.datepicker').datepick({dateFormat: 'yyyy-mm-dd'});
            });

$(document).on("click","button.removerow",function(){
    $("tr.memberrow." + $(this).attr("data-row")).remove();
})


//add new row second
var $rowCount = 0;
            $("#btn_add_row_sec").on("click",function(){
    //alert("sadfsdf");
            $rowCount ++;
            var $row = '<tr class="memberrowsec ' + $rowCount + '">';
            $row += '       <td><input name="demoskill[' + $rowCount + ']" type="text" class="form-control" required="" placeholder="Demonstrated skill"></td>';
            $row += '       <td align="left"><button type="button" class="btn btn-danger removerowsec" data-row="' + $rowCount + '">X</button></td>';
            $row += '  </tr>';
    
            $("#loading_rows_sec").append($row);    
            $('.datepicker').datepick({dateFormat: 'yyyy-mm-dd'});
            });

$(document).on("click","button.removerowsec",function(){
    $("tr.memberrowsec." + $(this).attr("data-row")).remove();
})
        </script>

</body>

</html>
