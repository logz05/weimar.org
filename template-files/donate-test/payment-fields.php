<style>
input {
	padding:6px;
	margin:6px;
	font-size:14px;
	border:solid 1px #999;
}
label {
	clear:both;
}
</style>
<fieldset class="billing" id="billing">
<legend>Billing Info</legend>

	<label for="first_name">First Name</label>
	<input type="text" name="first_name" value="" id="first_name"  />

	<label for="last_name">Last Name</label>
	<input type="text" name="last_name" value="" id="last_name"  />

	<label for="email_address">Email Address</label>
	<input type="text" name="email_address" value="" id="email_address"  />
	
	<label for="address">Address</label>
	<input type="text" name="address" value="" id="address"  />

	<label for="address2">Address 2</label>
	<input type="text" name="address2" value="" id="address2"  />

	<label for="city">City</label>
	<input type="text" name="city" value="" id="city"  />

	<label for="state">State</label>
	<select name="state"  id="state">
		<option value="AL">Alabama</option>
		<option value="AK">Alaska</option>
		<option value="AZ">Arizona</option>
		<option value="AR">Arkansas</option>
		<option value="CA">California</option>
		<option value="CO">Colorado</option>
		<option value="CT">Connecticut</option>
		<option value="DE">Delaware</option>
		<option value="DC">Dist of Columbia</option>
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
		<option value="NY" selected="selected">New York</option>
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
	</select>

	<label for="zip">Zip</label>
	<input type="text" name="zip" value="10020" id="zip"  />
</fieldset>
<fieldset class="payment" id="payment">
<legend>Payment Info</legend>

	<label for="card_type">Payment Type</label>
	<select name="card_type"  id="card_type">
		<option value="visa">Visa</option>
		<option value="mc">Mastercard</option>
		<option value="amex">American Express</option>
		<option value="discover">Discover</option>
	</select>

	<label for="credit_card_number" class="required">Credit Card Number</label>
	<input type="text" name="credit_card_number" value="" id="credit_card_number" class="required"  />

</fieldset>
<fieldset class="payment_expiration" id="payment_expiration">
<legend>Card Expiration</legend>

	<label for="expiration_month" class="required">Expiration Month</label>
	<select name="expiration_month"  id="expiration_month" class="required">
		<option value="01">January</option>
		<option value="02">February</option>
		<option value="03">March</option>
		<option value="04">April</option>
		<option value="05">May</option>
		<option value="06">June</option>
		<option value="07">July</option>
		<option value="08">August</option>
		<option value="09">September</option>
		<option value="10">October</option>
		<option value="11">November</option>
		<option value="12">December</option>
	</select>

	<label for="expiration_year" class="required">Expiration Year</label>
	<select name="expiration_year"  id="expiration_year" class="required">
		<option value="2011">2011</option>
		<option value="2012">2012</option>
		<option value="2013">2013</option>
		<option value="2014">2014</option>
		<option value="2015">2015</option>
		<option value="2016">2016</option>
		<option value="2017">2017</option>
		<option value="2018">2018</option>
		<option value="2019">2019</option>
		<option value="2020">2020</option>
	</select>
</fieldset>
