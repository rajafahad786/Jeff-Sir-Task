<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Registration form Template | PrepBootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<div id="maincontainer">
	<div class="section_A">
		<div class="inner_section">
			<div class="form_container">
				<form name="requestForm" action="payment.php" id="requestForm" method="post">
                    <div class="label">First Name<input type="text" name="firstName" id="firstName" class="validate[required]" required="" value=""></div>
        
                    <div class="label">Last Name<input type="text" name="lastName" id="lastName" class="validate[required]" required="" value=""></div>
        
                    <div class="label">Address <input type="text" name="address1" id="address" class="validate[required]" required="" value=""></div>
        
                    <div class="label">City <input type="text" name="city" id="city" class="validate[required]" required="" value=""></div>
        
                    <div class="label">State
                        <select id="state" name="state" class="validate[required]" required="">
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
                        </select>
                    </div>
        
                    <div class="label">Country
                        <select name="country" id="country" class="validate[required]" required="">
                            <option selected="selected" value="US">United States</option>
                            <option value="CA">Canada</option>
                        </select>
                    </div> 
        
                    <div class="label">ZIP Code<input type="text" name="zip" id="zip" value="" class="validate[required]" required=""></div> 
        
                    <div class="label">Phone<input type="text" name="phone" id="phone" value="" class="validate[required]" required=""></div>  
        
                    <div class="label">Email<input type="text" name="email" id="email" value="" class="validate[required]" required=""></div>    
        
                    <div class="label" style="text-align:left; margin-top:3px; margin-bottom:5px; text-transform: none;font-size: 12px; padding-left:43px; ">
					<input type="checkbox" name="agree_terms" id="agree_terms" style="float:left;" class="chk validate[required] required radio">
					<p class="flt-l" style="margin-top: 2px;margin-left:5px; margin-bottom:5px; line-height:14px;">
                            &nbsp;I agree to the <a data-reveal-id="termsModal">Terms &amp; Conditions</a> of the site.</p></div>
                    <div class="clear-fix"></div>
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
				
                    <center><input type="submit"  id="pg1_submit" value="" style="margin-left:7px; margin-top:12px;"></center>
                </form>
			</div>
		</div>
	</div>
	<div class="section_B">
		<div class="inner_section">
			<p>
				Most modern day women today lead fast paced lifestyles comprising of long working hours, excessive stress, faulty eating habits. These external factors when combined with the natural process of aging, which weakens the skin barrier, may take a toll on the skin health often leading to appearance of premature signs of aging. 

				Oxygen Pur is a two step system that includes  Defying Age, a skin cream, and Eye Renewance, an eye serum. These two products are to be used in combination with each other for maximum benefits. Regular use of the skincare system may help maintain and improve skin health.  
                </p>
		
		</div>
	</div>
	
</div>

</body>
</html>
