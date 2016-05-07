<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Registration form Template | PrepBootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<div class="page-header">
    <h1>Basic Form <small></small></h1>
</div>

<!-- Registration form - START -->
<div class="container">
    <div class="row">
        <form role="form" action="payment.php" method="post">
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                
    					<input type="hidden" value="App Test" name="username" class="form-control"  />
                       
                        <input type="hidden" value="PPxhnXwHMXJG3e" name="password"  class="form-control" />
                        <input type="hidden" value="NewProspect" name="method" />

                  <div class="form-group">
                    <label for="InputName">First Name</label>
                    <div class="input-group">
  
                         
                         <input type="text" class="form-control" name="firstName" id="firstName" placeholder="  " required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="InputName">Last Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="lastName" id="lastName" placeholder="  " required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputName">Address</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="address1" id="address1" placeholder="  " required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputName">City </label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="city" id="city" placeholder="  " required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputName">State </label>
                    <div class="input-group">
                        <select id="state" name="state" class="validate[required] form-control" required>
                            <option value="" selected="selected"></option>
        
                            <option value="">***UNITED STATES***</option>
        
                            <option value="AL">Alabama</option>
        
                            <option value="AK">Alaska</option>
        
                            <option value="AZ">Arizona</option>
        
                            <option value="AR">Arkansas</option>
        
                            <option value="CA">California</option>
        
                            <option value="CO">Colorado</option>
        
                            <option value="CT">Connecticut</option>
        
                            <option value="DE">Delaware</option>
        
                            <option value="DC">District Of Columbia</option>
        
                            <option value="FL">Florida</option>
        
                            <option value="GA">Georgia</option>
        
                            <option value="HI">Hawaii</option>
        
                            <option value="ID">Idaho</option>
        
                            <option value="IL">Illinois</option>
        
                            <option value="IN">Indiana</option>
        
                            <option value="IA">Iowa</option>
        
                            <option value="KS">Kansas</option>
        
                            <option value="KY">Kentucky</option>
        
                            <option value="LA">Louisiana</option>
        
                            <option value="ME">Maine</option>
        
                            <option value="MD">Maryland</option>
        
                            <option value="MA">Massachusetts</option>
        
                            <option value="MI">Michigan</option>
        
                            <option value="MN">Minnesota</option>
        
                            <option value="MS">Mississippi</option>
        
                            <option value="MO">Missouri</option>
        
                            <option value="MT">Montana</option>
        
                            <option value="NE">Nebraska</option>
        
                            <option value="NV">Nevada</option>
        
                            <option value="NH">New Hampshire</option>
        
                            <option value="NJ">New Jersey</option>
        
                            <option value="NM">New Mexico</option>
        
                            <option value="NY">New York</option>
        
                            <option value="NC">North Carolina</option>
        
                            <option value="ND">North Dakota</option>
        
                            <option value="OH">Ohio</option>
        
                            <option value="OK">Oklahoma</option>
        
                            <option value="OR">Oregon</option>
        
                            <option value="PA">Pennsylvania</option>
        
                            <option value="RI">Rhode Island</option>
        
                            <option value="SC">South Carolina</option>
        
                            <option value="SD">South Dakota</option>
        
                            <option value="TN">Tennessee</option>
        
                            <option value="TX">Texas</option>
        
                            <option value="UT">Utah</option>
        
                            <option value="VT">Vermont</option>
        
                            <option value="VA">Virginia</option>
        
                            <option value="WA">Washington</option>
        
                            <option value="WV">West Virginia</option>
        
                            <option value="WI">Wisconsin</option>
        
                            <option value="WY">Wyoming</option>
        
                <option value="">***CANADA***</option>
                <option value="AB">Alberta</option>
                <option value="BC">British Columbia</option>
                <option value="MB">Manitoba</option>
                <option value="NB">New Brunswick</option>
                <option value="NL">Newfoundland and Labrador</option>
                <option value="NT">Northwest Territories</option>
                <option value="NS">Nova Scotia</option>
                <option value="NU">Nunavut</option>
                <option value="ON">Ontario</option>
                <option value="PE">Prince Edward Island</option>
                <option value="QC">Quebec</option>
                <option value="SK">Saskatchewan</option>
                <option value="YT">Yukon</option>
                        </select><span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputName">Country </label>
                    <div class="input-group">
 						<select name="country" id="country" class="validate[required] form-control" required>
                            <option selected="selected" value="US">United States</option>
                            <option value="CA">Canada</option>
                        </select>                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputName">ZIP Code</label>
                    <div class="input-group">
                         <input type="text" class="form-control" name="zip" id="zip" placeholder="" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputName">Phone</label>
                    <div class="input-group">
                         <input type="text" class="form-control" name="phone" id="phone" placeholder="  " required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
 
                <div class="form-group">
                    <label for="InputEmail">Enter Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmailFirst" name="email" placeholder="Enter Email" value="" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
            	<input type="hidden" name="campaignId" value="69">
 				<input type="hidden" name="step" value="1">
                <input type="hidden" name="SID" value="SID">
                <input type="hidden" name="AFID" value="AFID">
                <input type="hidden" name="AFFID" value="AFFID">
                <input type="hidden" name="C1" value="C1111">
                <input type="hidden" name="C2" value="C222">
                <input type="hidden" name="C2" value="C333">
                <input type="hidden" name="AID" value="AID">
                <input type="hidden" name="OPT" value="OPT">
                <input type="hidden" name="notes" value="Prospect Notes">
                <input type="hidden" name="ipAddress" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
     
                <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">

            </div>
        </form>
        <div id="result">
        </div>
 
    </div>
</div>
<!-- Registration form - END -->

</div>

</body>
</html>