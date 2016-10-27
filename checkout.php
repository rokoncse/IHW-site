<?php include 'header.php'?>

                <div class="ma-main-container col2-right-layout">
                    <div class="main">
                        <div class="main-inner">
                            <div class="container">
                                <div class="container-inner">
                                    <div class="row">
                                        <div class="col-main col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                            <div class="page-title">
                                                <h1>Checkout</h1>
                                            </div>
                                            <ol class="opc" id="checkoutSteps">
                                                <li id="opc-login" class="section">
                                                    <div class="step-title" data-toggle="collapse" data-target="#checkout-step-login">
                                                        <span class="number">1</span>
                                                        <h2>Checkout Method</h2>
                                                        <a href="#">Edit</a>
                                                    </div>
                                                    <div id="checkout-step-login" class="collapse in">
                                                        <div class="step a-item">
                                                            <div class="col2-set">
                                                                <div class="col-1">
                                                                    <h3>Checkout as a Guest or Register</h3>
                                                                    <p>Register with us for future convenience:</p>
                                                                    <ul class="form-list">
                                                                        <li class="control">
                                                                            <input type="radio" name="checkout_method" id="login:guest" value="guest" class="radio" />
                                                                            <label for="login:guest">Checkout as Guest</label>
                                                                        </li>
                                                                        <li class="control">
                                                                            <input type="radio" name="checkout_method" id="login:register" value="register" class="radio" />
                                                                            <label for="login:register">Register</label>
                                                                        </li>
                                                                    </ul>
                                                                    <h4>Register and save time!</h4>
                                                                    <p>Register with us for future convenience:</p>
                                                                    <ul class="ul">
                                                                        <li>Fast and easy check out</li>
                                                                        <li>Easy access to your order history and status</li>
                                                                    </ul>
                                                                </div><!-- /.col-1 -->
                                                                <div class="col-2">
                                                                    <h3>Login</h3>
                                                                    <form id="login-form" method="post">
                                                                        <fieldset>
                                                                            <input name="form_key" type="hidden" value="QouMP6SLYQTBwj0A" />
                                                                            <h4>Already registered?</h4>
                                                                            <p>Please log in below:</p>
                                                                            <ul class="form-list">
                                                                                <li>
                                                                                    <label for="login-email" class="required"><em>*</em>Email Address</label>
                                                                                    <div class="input-box">
                                                                                        <input type="text" class="input-text required-entry validate-email" id="login-email" name="login[username]" value="" />
                                                                                    </div>
                                                                                </li>
                                                                                <li>
                                                                                    <label for="login-password" class="required"><em>*</em>Password</label>
                                                                                    <div class="input-box">
                                                                                        <input type="password" class="input-text required-entry" id="login-password" name="login[password]" />
                                                                                    </div>
                                                                                </li>
                                                                            </ul>
                                                                            <input name="context" type="hidden" value="checkout" />
                                                                        </fieldset>
                                                                    </form>
                                                                </div><!-- /.col-2 -->
                                                            </div>
                                                            <div class="col2-set">
                                                                <div class="col-1">
                                                                    <div class="buttons-set">
                                                                        <p class="required">&nbsp;</p>
                                                                        <button id="onepage-guest-register-button" type="button" class="button"><span><span>Continue</span></span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-2">
                                                                    <div class="buttons-set">
                                                                        <p class="required">* Required Fields</p>
                                                                        <a href="#" class="f-left">Forgot your password?</a>
                                                                        <button type="submit" class="button" onclick="onepageLogin(this)"><span><span>Login</span></span>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- /.step -->
                                                    </div><!-- /#checkout-step-login -->
                                                </li><!-- /#opc-login -->
                                                <li id="opc-billing" class="section">
                                                    <div class="step-title collapsed" data-toggle="collapse" data-target="#checkout-step-billing">
                                                        <span class="number">2</span>
                                                        <h2>Billing Information</h2>
                                                        <a href="#">Edit</a>
                                                    </div>
                                                    <div id="checkout-step-billing" class="collapse">
                                                        <div class="step a-item">
                                                            <form id="co-billing-form">
                                                                <fieldset>
                                                                    <ul class="form-list">
                                                                        <li id="billing-new-address-form">
                                                                            <fieldset>
                                                                                <input type="hidden" name="billing" value="" id="billing" />
                                                                                <ul>
                                                                                    <li class="fields">
                                                                                        <div class="customer-name">
                                                                                            <div class="field name-firstname">
                                                                                                <label for="billing:firstname" class="required"><em>*</em>First Name</label>
                                                                                                <div class="input-box">
                                                                                                    <input type="text" id="billing:firstname" name="billing[firstname]" value="" title="First Name" maxlength="255" class="input-text required-entry" />
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="field name-lastname">
                                                                                                <label for="billing:lastname" class="required"><em>*</em>Last Name</label>
                                                                                                <div class="input-box">
                                                                                                    <input type="text" id="billing:lastname" name="billing[lastname]" value="" title="Last Name" maxlength="255" class="input-text required-entry" />
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li><!-- /.fields -->
                                                                                    <li class="fields">
                                                                                        <div class="field">
                                                                                            <label for="billing:company">Company</label>
                                                                                            <div class="input-box">
                                                                                                <input type="text" id="billing:company" name="billing[company]" value="" title="Company" class="input-text " />
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="field">
                                                                                            <label for="billing:email" class="required"><em>*</em>Email Address</label>
                                                                                            <div class="input-box">
                                                                                                <input type="text" name="billing[email]" id="billing:email" value="" title="Email Address" class="input-text validate-email required-entry" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </li><!-- /.fields -->
                                                                                    <li class="wide">
                                                                                        <label for="billing:street1" class="required"><em>*</em>Address</label>
                                                                                        <div class="input-box">
                                                                                            <input type="text" title="Street Address" name="billing[street][]" id="billing:street1" value="" class="input-text  required-entry" />
                                                                                        </div>
                                                                                    </li><!-- /.wide -->
                                                                                    <li class="wide">
                                                                                        <div class="input-box">
                                                                                            <input type="text" title="Street Address 2" name="billing[street][]" id="billing:street2" value="" class="input-text " />
                                                                                        </div>
                                                                                    </li><!-- /.wide -->
                                                                                    <li class="fields">
                                                                                        <div class="field">
                                                                                            <label for="billing:city" class="required"><em>*</em>City</label>
                                                                                            <div class="input-box">
                                                                                                <input type="text" title="City" name="billing[city]" value="" class="input-text  required-entry" id="billing:city" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="field">
                                                                                            <label for="billing:region_id" class="required"><em>*</em>State/Province</label>
                                                                                            <div class="input-box">
                                                                                                <select id="billing:region_id" name="billing[region_id]" title="State/Province" class="validate-select">
                                                                                                    <option value="">Please select region, state or province</option>
                                                                                                </select>
                                                                                                <input type="text" id="billing:region" name="billing[region]" value="" title="State/Province" class="input-text " style="display:none;" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </li><!-- /.fields -->
                                                                                    <li class="fields">
                                                                                        <div class="field">
                                                                                            <label for="billing:postcode" class="required"><em>*</em>Zip/Postal Code</label>
                                                                                            <div class="input-box">
                                                                                                <input type="text" title="Zip/Postal Code" name="billing[postcode]" id="billing:postcode" value="" class="input-text validate-zip-international  required-entry" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="field">
                                                                                            <label for="billing:country_id" class="required"><em>*</em>Country</label>
                                                                                            <div class="input-box">
                                                                                                <select name="billing[country_id]" id="billing:country_id" class="validate-select" title="Country">
                                                                                                    <option value="AF">Afghanistan</option>
                                                                                                    <option value="AX">Åland Islands</option>
                                                                                                    <option value="AL">Albania</option>
                                                                                                    <option value="DZ">Algeria</option>
                                                                                                    <option value="AS">American Samoa</option>
                                                                                                    <option value="AD">Andorra</option>
                                                                                                    <option value="AO">Angola</option>
                                                                                                    <option value="AI">Anguilla</option>
                                                                                                    <option value="AQ">Antarctica</option>
                                                                                                    <option value="AG">Antigua and Barbuda</option>
                                                                                                    <option value="AR">Argentina</option>
                                                                                                    <option value="AM">Armenia</option>
                                                                                                    <option value="AW">Aruba</option>
                                                                                                    <option value="AU">Australia</option>
                                                                                                    <option value="AT">Austria</option>
                                                                                                    <option value="AZ">Azerbaijan</option>
                                                                                                    <option value="BS">Bahamas</option>
                                                                                                    <option value="BH">Bahrain</option>
                                                                                                    <option value="BD">Bangladesh</option>
                                                                                                    <option value="BB">Barbados</option>
                                                                                                    <option value="BY">Belarus</option>
                                                                                                    <option value="BE">Belgium</option>
                                                                                                    <option value="BZ">Belize</option>
                                                                                                    <option value="BJ">Benin</option>
                                                                                                    <option value="BM">Bermuda</option>
                                                                                                    <option value="BT">Bhutan</option>
                                                                                                    <option value="BO">Bolivia</option>
                                                                                                    <option value="BA">Bosnia and Herzegovina</option>
                                                                                                    <option value="BW">Botswana</option>
                                                                                                    <option value="BV">Bouvet Island</option>
                                                                                                    <option value="BR">Brazil</option>
                                                                                                    <option value="IO">British Indian Ocean Territory</option>
                                                                                                    <option value="VG">British Virgin Islands</option>
                                                                                                    <option value="BN">Brunei</option>
                                                                                                    <option value="BG">Bulgaria</option>
                                                                                                    <option value="BF">Burkina Faso</option>
                                                                                                    <option value="BI">Burundi</option>
                                                                                                    <option value="KH">Cambodia</option>
                                                                                                    <option value="CM">Cameroon</option>
                                                                                                    <option value="CA">Canada</option>
                                                                                                    <option value="CV">Cape Verde</option>
                                                                                                    <option value="KY">Cayman Islands</option>
                                                                                                    <option value="CF">Central African Republic</option>
                                                                                                    <option value="TD">Chad</option>
                                                                                                    <option value="CL">Chile</option>
                                                                                                    <option value="CN">China</option>
                                                                                                    <option value="CX">Christmas Island</option>
                                                                                                    <option value="CC">Cocos (Keeling) Islands</option>
                                                                                                    <option value="CO">Colombia</option>
                                                                                                    <option value="KM">Comoros</option>
                                                                                                    <option value="CG">Congo - Brazzaville</option>
                                                                                                    <option value="CD">Congo - Kinshasa</option>
                                                                                                    <option value="CK">Cook Islands</option>
                                                                                                    <option value="CR">Costa Rica</option>
                                                                                                    <option value="CI">Côte d’Ivoire</option>
                                                                                                    <option value="HR">Croatia</option>
                                                                                                    <option value="CU">Cuba</option>
                                                                                                    <option value="CY">Cyprus</option>
                                                                                                    <option value="CZ">Czech Republic</option>
                                                                                                    <option value="DK">Denmark</option>
                                                                                                    <option value="DJ">Djibouti</option>
                                                                                                    <option value="DM">Dominica</option>
                                                                                                    <option value="DO">Dominican Republic</option>
                                                                                                    <option value="EC">Ecuador</option>
                                                                                                    <option value="EG">Egypt</option>
                                                                                                    <option value="SV">El Salvador</option>
                                                                                                    <option value="GQ">Equatorial Guinea</option>
                                                                                                    <option value="ER">Eritrea</option>
                                                                                                    <option value="EE">Estonia</option>
                                                                                                    <option value="ET">Ethiopia</option>
                                                                                                    <option value="FK">Falkland Islands</option>
                                                                                                    <option value="FO">Faroe Islands</option>
                                                                                                    <option value="FJ">Fiji</option>
                                                                                                    <option value="FI">Finland</option>
                                                                                                    <option value="FR">France</option>
                                                                                                    <option value="GF">French Guiana</option>
                                                                                                    <option value="PF">French Polynesia</option>
                                                                                                    <option value="TF">French Southern Territories</option>
                                                                                                    <option value="GA">Gabon</option>
                                                                                                    <option value="GM">Gambia</option>
                                                                                                    <option value="GE">Georgia</option>
                                                                                                    <option value="DE">Germany</option>
                                                                                                    <option value="GH">Ghana</option>
                                                                                                    <option value="GI">Gibraltar</option>
                                                                                                    <option value="GR">Greece</option>
                                                                                                    <option value="GL">Greenland</option>
                                                                                                    <option value="GD">Grenada</option>
                                                                                                    <option value="GP">Guadeloupe</option>
                                                                                                    <option value="GU">Guam</option>
                                                                                                    <option value="GT">Guatemala</option>
                                                                                                    <option value="GG">Guernsey</option>
                                                                                                    <option value="GN">Guinea</option>
                                                                                                    <option value="GW">Guinea-Bissau</option>
                                                                                                    <option value="GY">Guyana</option>
                                                                                                    <option value="HT">Haiti</option>
                                                                                                    <option value="HM">Heard &amp; McDonald Islands</option>
                                                                                                    <option value="HN">Honduras</option>
                                                                                                    <option value="HK">Hong Kong SAR China</option>
                                                                                                    <option value="HU">Hungary</option>
                                                                                                    <option value="IS">Iceland</option>
                                                                                                    <option value="IN">India</option>
                                                                                                    <option value="ID">Indonesia</option>
                                                                                                    <option value="IR">Iran</option>
                                                                                                    <option value="IQ">Iraq</option>
                                                                                                    <option value="IE">Ireland</option>
                                                                                                    <option value="IM">Isle of Man</option>
                                                                                                    <option value="IL">Israel</option>
                                                                                                    <option value="IT">Italy</option>
                                                                                                    <option value="JM">Jamaica</option>
                                                                                                    <option value="JP">Japan</option>
                                                                                                    <option value="JE">Jersey</option>
                                                                                                    <option value="JO">Jordan</option>
                                                                                                    <option value="KZ">Kazakhstan</option>
                                                                                                    <option value="KE">Kenya</option>
                                                                                                    <option value="KI">Kiribati</option>
                                                                                                    <option value="KW">Kuwait</option>
                                                                                                    <option value="KG">Kyrgyzstan</option>
                                                                                                    <option value="LA">Laos</option>
                                                                                                    <option value="LV">Latvia</option>
                                                                                                    <option value="LB">Lebanon</option>
                                                                                                    <option value="LS">Lesotho</option>
                                                                                                    <option value="LR">Liberia</option>
                                                                                                    <option value="LY">Libya</option>
                                                                                                    <option value="LI">Liechtenstein</option>
                                                                                                    <option value="LT">Lithuania</option>
                                                                                                    <option value="LU">Luxembourg</option>
                                                                                                    <option value="MO">Macau SAR China</option>
                                                                                                    <option value="MK">Macedonia</option>
                                                                                                    <option value="MG">Madagascar</option>
                                                                                                    <option value="MW">Malawi</option>
                                                                                                    <option value="MY">Malaysia</option>
                                                                                                    <option value="MV">Maldives</option>
                                                                                                    <option value="ML">Mali</option>
                                                                                                    <option value="MT">Malta</option>
                                                                                                    <option value="MH">Marshall Islands</option>
                                                                                                    <option value="MQ">Martinique</option>
                                                                                                    <option value="MR">Mauritania</option>
                                                                                                    <option value="MU">Mauritius</option>
                                                                                                    <option value="YT">Mayotte</option>
                                                                                                    <option value="MX">Mexico</option>
                                                                                                    <option value="FM">Micronesia</option>
                                                                                                    <option value="MD">Moldova</option>
                                                                                                    <option value="MC">Monaco</option>
                                                                                                    <option value="MN">Mongolia</option>
                                                                                                    <option value="ME">Montenegro</option>
                                                                                                    <option value="MS">Montserrat</option>
                                                                                                    <option value="MA">Morocco</option>
                                                                                                    <option value="MZ">Mozambique</option>
                                                                                                    <option value="MM">Myanmar (Burma)</option>
                                                                                                    <option value="NA">Namibia</option>
                                                                                                    <option value="NR">Nauru</option>
                                                                                                    <option value="NP">Nepal</option>
                                                                                                    <option value="NL">Netherlands</option>
                                                                                                    <option value="AN">Netherlands Antilles</option>
                                                                                                    <option value="NC">New Caledonia</option>
                                                                                                    <option value="NZ">New Zealand</option>
                                                                                                    <option value="NI">Nicaragua</option>
                                                                                                    <option value="NE">Niger</option>
                                                                                                    <option value="NG">Nigeria</option>
                                                                                                    <option value="NU">Niue</option>
                                                                                                    <option value="NF">Norfolk Island</option>
                                                                                                    <option value="MP">Northern Mariana Islands</option>
                                                                                                    <option value="KP">North Korea</option>
                                                                                                    <option value="NO">Norway</option>
                                                                                                    <option value="OM">Oman</option>
                                                                                                    <option value="PK">Pakistan</option>
                                                                                                    <option value="PW">Palau</option>
                                                                                                    <option value="PS">Palestinian Territories</option>
                                                                                                    <option value="PA">Panama</option>
                                                                                                    <option value="PG">Papua New Guinea</option>
                                                                                                    <option value="PY">Paraguay</option>
                                                                                                    <option value="PE">Peru</option>
                                                                                                    <option value="PH">Philippines</option>
                                                                                                    <option value="PN">Pitcairn Islands</option>
                                                                                                    <option value="PL">Poland</option>
                                                                                                    <option value="PT">Portugal</option>
                                                                                                    <option value="PR">Puerto Rico</option>
                                                                                                    <option value="QA">Qatar</option>
                                                                                                    <option value="RE">Réunion</option>
                                                                                                    <option value="RO">Romania</option>
                                                                                                    <option value="RU">Russia</option>
                                                                                                    <option value="RW">Rwanda</option>
                                                                                                    <option value="BL">Saint Barthélemy</option>
                                                                                                    <option value="SH">Saint Helena</option>
                                                                                                    <option value="KN">Saint Kitts and Nevis</option>
                                                                                                    <option value="LC">Saint Lucia</option>
                                                                                                    <option value="MF">Saint Martin</option>
                                                                                                    <option value="PM">Saint Pierre and Miquelon</option>
                                                                                                    <option value="WS">Samoa</option>
                                                                                                    <option value="SM">San Marino</option>
                                                                                                    <option value="ST">São Tomé and Príncipe</option>
                                                                                                    <option value="SA">Saudi Arabia</option>
                                                                                                    <option value="SN">Senegal</option>
                                                                                                    <option value="RS">Serbia</option>
                                                                                                    <option value="SC">Seychelles</option>
                                                                                                    <option value="SL">Sierra Leone</option>
                                                                                                    <option value="SG">Singapore</option>
                                                                                                    <option value="SK">Slovakia</option>
                                                                                                    <option value="SI">Slovenia</option>
                                                                                                    <option value="SB">Solomon Islands</option>
                                                                                                    <option value="SO">Somalia</option>
                                                                                                    <option value="ZA">South Africa</option>
                                                                                                    <option value="GS">South Georgia &amp; South Sandwich Islands</option>
                                                                                                    <option value="KR">South Korea</option>
                                                                                                    <option value="ES">Spain</option>
                                                                                                    <option value="LK">Sri Lanka</option>
                                                                                                    <option value="VC">St. Vincent &amp; Grenadines</option>
                                                                                                    <option value="SD">Sudan</option>
                                                                                                    <option value="SR">Suriname</option>
                                                                                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                                                                                    <option value="SZ">Swaziland</option>
                                                                                                    <option value="SE">Sweden</option>
                                                                                                    <option value="CH">Switzerland</option>
                                                                                                    <option value="SY">Syria</option>
                                                                                                    <option value="TW">Taiwan</option>
                                                                                                    <option value="TJ">Tajikistan</option>
                                                                                                    <option value="TZ">Tanzania</option>
                                                                                                    <option value="TH">Thailand</option>
                                                                                                    <option value="TL">Timor-Leste</option>
                                                                                                    <option value="TG">Togo</option>
                                                                                                    <option value="TK">Tokelau</option>
                                                                                                    <option value="TO">Tonga</option>
                                                                                                    <option value="TT">Trinidad and Tobago</option>
                                                                                                    <option value="TN">Tunisia</option>
                                                                                                    <option value="TR">Turkey</option>
                                                                                                    <option value="TM">Turkmenistan</option>
                                                                                                    <option value="TC">Turks and Caicos Islands</option>
                                                                                                    <option value="TV">Tuvalu</option>
                                                                                                    <option value="UG">Uganda</option>
                                                                                                    <option value="UA">Ukraine</option>
                                                                                                    <option value="AE">United Arab Emirates</option>
                                                                                                    <option value="GB">United Kingdom</option>
                                                                                                    <option value="US" selected="selected">United States</option>
                                                                                                    <option value="UY">Uruguay</option>
                                                                                                    <option value="UM">U.S. Outlying Islands</option>
                                                                                                    <option value="VI">U.S. Virgin Islands</option>
                                                                                                    <option value="UZ">Uzbekistan</option>
                                                                                                    <option value="VU">Vanuatu</option>
                                                                                                    <option value="VA">Vatican City</option>
                                                                                                    <option value="VE">Venezuela</option>
                                                                                                    <option value="VN">Vietnam</option>
                                                                                                    <option value="WF">Wallis and Futuna</option>
                                                                                                    <option value="EH">Western Sahara</option>
                                                                                                    <option value="YE">Yemen</option>
                                                                                                    <option value="ZM">Zambia</option>
                                                                                                    <option value="ZW">Zimbabwe</option>
                                                                                                </select>
                                                                                            </div>
                                                                                        </div>
                                                                                    </li><!-- /.fields -->
                                                                                    <li class="fields">
                                                                                        <div class="field">
                                                                                            <label for="billing:telephone" class="required"><em>*</em>Telephone</label>
                                                                                            <div class="input-box">
                                                                                                <input type="text" name="billing[telephone]" value="" title="Telephone" class="input-text  required-entry" id="billing:telephone" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="field">
                                                                                            <label for="billing:fax">Fax</label>
                                                                                            <div class="input-box">
                                                                                                <input type="text" name="billing[fax]" value="" title="Fax" class="input-text " id="billing:fax" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </li><!-- /.fields -->
                                                                                    <li class="fields" id="register-customer-password">
                                                                                        <div class="field">
                                                                                            <label for="billing:customer_password" class="required"><em>*</em>Password</label>
                                                                                            <div class="input-box">
                                                                                                <input type="password" name="billing[customer_password]" id="billing:customer_password" title="Password" class="input-text required-entry validate-password" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="field">
                                                                                            <label for="billing:confirm_password" class="required"><em>*</em>Confirm Password</label>
                                                                                            <div class="input-box">
                                                                                                <input type="password" name="billing[confirm_password]" title="Confirm Password" id="billing:confirm_password" class="input-text required-entry validate-cpassword" />
                                                                                            </div>
                                                                                        </div>
                                                                                    </li>
                                                                                    <li class="no-display">
                                                                                        <input type="hidden" name="billing[save_in_address_book]" value="1" />
                                                                                    </li><!-- /.fields -->
                                                                                </ul><!-- /ul -->
                                                                            </fieldset>
                                                                        </li><!-- /#billing-new-address-form -->
                                                                        <li class="control">
                                                                            <input type="radio" name="billing[use_for_shipping]" id="billing:use_for_shipping_yes" value="1" checked="checked" title="Ship to this address" onclick="$('shipping:same_as_billing').checked = true;" class="radio" />
                                                                            <label for="billing:use_for_shipping_yes">Ship to this address</label>
                                                                        </li><!-- /.control -->
                                                                        <li class="control">
                                                                            <input type="radio" name="billing[use_for_shipping]" id="billing:use_for_shipping_no" value="0" title="Ship to different address" onclick="$('shipping:same_as_billing').checked = false;" class="radio" />
                                                                            <label for="billing:use_for_shipping_no">Ship to different address</label>
                                                                        </li><!-- /.control -->
                                                                    </ul><!-- /.form-list -->
                                                                    <div class="buttons-set" id="billing-buttons-container">
                                                                        <p class="required">* Required Fields</p>
                                                                        <button type="button" title="Continue" class="button" onclick="billing.save()"><span><span>Continue</span></span>
                                                                        </button>
                                                                        <span class="please-wait" id="billing-please-wait" style="display:none;"><img src="images/opc-ajax-loader.gif" alt="Loading next step..." title="Loading next step..." class="v-middle" /> Loading next step...        </span>
                                                                    </div><!-- /#billing-buttons-container -->
                                                                </fieldset>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </li><!-- /#opc-billing -->
                                                <li id="opc-shipping" class="section">
                                                    <div class="step-title collapsed" data-toggle="collapse" data-target="#checkout-step-shipping">
                                                        <span class="number">3</span>
                                                        <h2>Shipping Information</h2>
                                                        <a href="#">Edit</a>
                                                    </div>
                                                    <div id="checkout-step-shipping" class="collapse">
                                                        <div class="step a-item">
                                                            <form id="co-shipping-form">
                                                                <ul class="form-list">
                                                                    <li id="shipping-new-address-form">
                                                                        <fieldset>
                                                                            <input type="hidden" name="shipping[address_id]" value="" id="shipping:address_id" />
                                                                            <ul>
                                                                                <li class="fields">
                                                                                    <div class="customer-name">
                                                                                        <div class="field name-firstname">
                                                                                            <label for="shipping:firstname" class="required"><em>*</em>First Name</label>
                                                                                            <div class="input-box">
                                                                                                <input type="text" id="shipping:firstname" name="shipping[firstname]" value="" title="First Name" maxlength="255" class="input-text required-entry" />
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="field name-lastname">
                                                                                            <label for="shipping:lastname" class="required"><em>*</em>Last Name</label>
                                                                                            <div class="input-box">
                                                                                                <input type="text" id="shipping:lastname" name="shipping[lastname]" value="" title="Last Name" maxlength="255" class="input-text required-entry"/>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li><!-- /.fields -->
                                                                                <li class="fields">
                                                                                    <div class="fields">
                                                                                        <label for="shipping:company">Company</label>
                                                                                        <div class="input-box">
                                                                                            <input type="text" id="shipping:company" name="shipping[company]" value="" title="Company" class="input-text "  />
                                                                                        </div>
                                                                                    </div>
                                                                                </li><!-- /.fields -->
                                                                                <li class="wide">
                                                                                    <label for="shipping:street1" class="required"><em>*</em>Address</label>
                                                                                    <div class="input-box">
                                                                                        <input type="text" title="Street Address" name="shipping[street][]" id="shipping:street1" value="" class="input-text  required-entry" />
                                                                                    </div>
                                                                                </li><!-- /.wide -->
                                                                                <li class="wide">
                                                                                    <div class="input-box">
                                                                                        <input type="text" title="Street Address 2" name="shipping[street][]" id="shipping:street2" value="" class="input-text "  />
                                                                                    </div>
                                                                                </li><!-- /.wide -->
                                                                                <li class="fields">
                                                                                    <div class="field">
                                                                                        <label for="shipping:city" class="required"><em>*</em>City</label>
                                                                                        <div class="input-box">
                                                                                            <input type="text" title="City" name="shipping[city]" value="" class="input-text  required-entry" id="shipping:city" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="field">
                                                                                        <label for="shipping:region" class="required"><em>*</em>State/Province</label>
                                                                                        <div class="input-box">
                                                                                            <select id="shipping:region_id" name="shipping[region_id]" title="State/Province" class="validate-select" style="display:none;">
                                                                                                <option value="">Please select region, state or province</option>
                                                                                            </select>
                                                                                            <input type="text" id="shipping:region" name="shipping[region]" value="" title="State/Province" class="input-text " style="display:none;" />
                                                                                        </div>
                                                                                    </div>
                                                                                </li><!-- /.fields -->
                                                                                <li class="fields">
                                                                                    <div class="field">
                                                                                        <label for="shipping:postcode" class="required"><em>*</em>Zip/Postal Code</label>
                                                                                        <div class="input-box">
                                                                                            <input type="text" title="Zip/Postal Code" name="shipping[postcode]" id="shipping:postcode" value="" class="input-text validate-zip-international  required-entry" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="field">
                                                                                        <label for="shipping:country_id" class="required"><em>*</em>Country</label>
                                                                                        <div class="input-box">
                                                                                            <select name="shipping[country_id]" id="shipping:country_id" class="validate-select" title="Country">
                                                                                                <option value="AF">Afghanistan</option>
                                                                                                <option value="AX">Åland Islands</option>
                                                                                                <option value="AL">Albania</option>
                                                                                                <option value="DZ">Algeria</option>
                                                                                                <option value="AS">American Samoa</option>
                                                                                                <option value="AD">Andorra</option>
                                                                                                <option value="AO">Angola</option>
                                                                                                <option value="AI">Anguilla</option>
                                                                                                <option value="AQ">Antarctica</option>
                                                                                                <option value="AG">Antigua and Barbuda</option>
                                                                                                <option value="AR">Argentina</option>
                                                                                                <option value="AM">Armenia</option>
                                                                                                <option value="AW">Aruba</option>
                                                                                                <option value="AU">Australia</option>
                                                                                                <option value="AT">Austria</option>
                                                                                                <option value="AZ">Azerbaijan</option>
                                                                                                <option value="BS">Bahamas</option>
                                                                                                <option value="BH">Bahrain</option>
                                                                                                <option value="BD">Bangladesh</option>
                                                                                                <option value="BB">Barbados</option>
                                                                                                <option value="BY">Belarus</option>
                                                                                                <option value="BE">Belgium</option>
                                                                                                <option value="BZ">Belize</option>
                                                                                                <option value="BJ">Benin</option>
                                                                                                <option value="BM">Bermuda</option>
                                                                                                <option value="BT">Bhutan</option>
                                                                                                <option value="BO">Bolivia</option>
                                                                                                <option value="BA">Bosnia and Herzegovina</option>
                                                                                                <option value="BW">Botswana</option>
                                                                                                <option value="BV">Bouvet Island</option>
                                                                                                <option value="BR">Brazil</option>
                                                                                                <option value="IO">British Indian Ocean Territory</option>
                                                                                                <option value="VG">British Virgin Islands</option>
                                                                                                <option value="BN">Brunei</option>
                                                                                                <option value="BG">Bulgaria</option>
                                                                                                <option value="BF">Burkina Faso</option>
                                                                                                <option value="BI">Burundi</option>
                                                                                                <option value="KH">Cambodia</option>
                                                                                                <option value="CM">Cameroon</option>
                                                                                                <option value="CA">Canada</option>
                                                                                                <option value="CV">Cape Verde</option>
                                                                                                <option value="KY">Cayman Islands</option>
                                                                                                <option value="CF">Central African Republic</option>
                                                                                                <option value="TD">Chad</option>
                                                                                                <option value="CL">Chile</option>
                                                                                                <option value="CN">China</option>
                                                                                                <option value="CX">Christmas Island</option>
                                                                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                                                                <option value="CO">Colombia</option>
                                                                                                <option value="KM">Comoros</option>
                                                                                                <option value="CG">Congo - Brazzaville</option>
                                                                                                <option value="CD">Congo - Kinshasa</option>
                                                                                                <option value="CK">Cook Islands</option>
                                                                                                <option value="CR">Costa Rica</option>
                                                                                                <option value="CI">Côte d’Ivoire</option>
                                                                                                <option value="HR">Croatia</option>
                                                                                                <option value="CU">Cuba</option>
                                                                                                <option value="CY">Cyprus</option>
                                                                                                <option value="CZ">Czech Republic</option>
                                                                                                <option value="DK">Denmark</option>
                                                                                                <option value="DJ">Djibouti</option>
                                                                                                <option value="DM">Dominica</option>
                                                                                                <option value="DO">Dominican Republic</option>
                                                                                                <option value="EC">Ecuador</option>
                                                                                                <option value="EG">Egypt</option>
                                                                                                <option value="SV">El Salvador</option>
                                                                                                <option value="GQ">Equatorial Guinea</option>
                                                                                                <option value="ER">Eritrea</option>
                                                                                                <option value="EE">Estonia</option>
                                                                                                <option value="ET">Ethiopia</option>
                                                                                                <option value="FK">Falkland Islands</option>
                                                                                                <option value="FO">Faroe Islands</option>
                                                                                                <option value="FJ">Fiji</option>
                                                                                                <option value="FI">Finland</option>
                                                                                                <option value="FR">France</option>
                                                                                                <option value="GF">French Guiana</option>
                                                                                                <option value="PF">French Polynesia</option>
                                                                                                <option value="TF">French Southern Territories</option>
                                                                                                <option value="GA">Gabon</option>
                                                                                                <option value="GM">Gambia</option>
                                                                                                <option value="GE">Georgia</option>
                                                                                                <option value="DE">Germany</option>
                                                                                                <option value="GH">Ghana</option>
                                                                                                <option value="GI">Gibraltar</option>
                                                                                                <option value="GR">Greece</option>
                                                                                                <option value="GL">Greenland</option>
                                                                                                <option value="GD">Grenada</option>
                                                                                                <option value="GP">Guadeloupe</option>
                                                                                                <option value="GU">Guam</option>
                                                                                                <option value="GT">Guatemala</option>
                                                                                                <option value="GG">Guernsey</option>
                                                                                                <option value="GN">Guinea</option>
                                                                                                <option value="GW">Guinea-Bissau</option>
                                                                                                <option value="GY">Guyana</option>
                                                                                                <option value="HT">Haiti</option>
                                                                                                <option value="HM">Heard &amp; McDonald Islands</option>
                                                                                                <option value="HN">Honduras</option>
                                                                                                <option value="HK">Hong Kong SAR China</option>
                                                                                                <option value="HU">Hungary</option>
                                                                                                <option value="IS">Iceland</option>
                                                                                                <option value="IN">India</option>
                                                                                                <option value="ID">Indonesia</option>
                                                                                                <option value="IR">Iran</option>
                                                                                                <option value="IQ">Iraq</option>
                                                                                                <option value="IE">Ireland</option>
                                                                                                <option value="IM">Isle of Man</option>
                                                                                                <option value="IL">Israel</option>
                                                                                                <option value="IT">Italy</option>
                                                                                                <option value="JM">Jamaica</option>
                                                                                                <option value="JP">Japan</option>
                                                                                                <option value="JE">Jersey</option>
                                                                                                <option value="JO">Jordan</option>
                                                                                                <option value="KZ">Kazakhstan</option>
                                                                                                <option value="KE">Kenya</option>
                                                                                                <option value="KI">Kiribati</option>
                                                                                                <option value="KW">Kuwait</option>
                                                                                                <option value="KG">Kyrgyzstan</option>
                                                                                                <option value="LA">Laos</option>
                                                                                                <option value="LV">Latvia</option>
                                                                                                <option value="LB">Lebanon</option>
                                                                                                <option value="LS">Lesotho</option>
                                                                                                <option value="LR">Liberia</option>
                                                                                                <option value="LY">Libya</option>
                                                                                                <option value="LI">Liechtenstein</option>
                                                                                                <option value="LT">Lithuania</option>
                                                                                                <option value="LU">Luxembourg</option>
                                                                                                <option value="MO">Macau SAR China</option>
                                                                                                <option value="MK">Macedonia</option>
                                                                                                <option value="MG">Madagascar</option>
                                                                                                <option value="MW">Malawi</option>
                                                                                                <option value="MY">Malaysia</option>
                                                                                                <option value="MV">Maldives</option>
                                                                                                <option value="ML">Mali</option>
                                                                                                <option value="MT">Malta</option>
                                                                                                <option value="MH">Marshall Islands</option>
                                                                                                <option value="MQ">Martinique</option>
                                                                                                <option value="MR">Mauritania</option>
                                                                                                <option value="MU">Mauritius</option>
                                                                                                <option value="YT">Mayotte</option>
                                                                                                <option value="MX">Mexico</option>
                                                                                                <option value="FM">Micronesia</option>
                                                                                                <option value="MD">Moldova</option>
                                                                                                <option value="MC">Monaco</option>
                                                                                                <option value="MN">Mongolia</option>
                                                                                                <option value="ME">Montenegro</option>
                                                                                                <option value="MS">Montserrat</option>
                                                                                                <option value="MA">Morocco</option>
                                                                                                <option value="MZ">Mozambique</option>
                                                                                                <option value="MM">Myanmar (Burma)</option>
                                                                                                <option value="NA">Namibia</option>
                                                                                                <option value="NR">Nauru</option>
                                                                                                <option value="NP">Nepal</option>
                                                                                                <option value="NL">Netherlands</option>
                                                                                                <option value="AN">Netherlands Antilles</option>
                                                                                                <option value="NC">New Caledonia</option>
                                                                                                <option value="NZ">New Zealand</option>
                                                                                                <option value="NI">Nicaragua</option>
                                                                                                <option value="NE">Niger</option>
                                                                                                <option value="NG">Nigeria</option>
                                                                                                <option value="NU">Niue</option>
                                                                                                <option value="NF">Norfolk Island</option>
                                                                                                <option value="MP">Northern Mariana Islands</option>
                                                                                                <option value="KP">North Korea</option>
                                                                                                <option value="NO">Norway</option>
                                                                                                <option value="OM">Oman</option>
                                                                                                <option value="PK">Pakistan</option>
                                                                                                <option value="PW">Palau</option>
                                                                                                <option value="PS">Palestinian Territories</option>
                                                                                                <option value="PA">Panama</option>
                                                                                                <option value="PG">Papua New Guinea</option>
                                                                                                <option value="PY">Paraguay</option>
                                                                                                <option value="PE">Peru</option>
                                                                                                <option value="PH">Philippines</option>
                                                                                                <option value="PN">Pitcairn Islands</option>
                                                                                                <option value="PL">Poland</option>
                                                                                                <option value="PT">Portugal</option>
                                                                                                <option value="PR">Puerto Rico</option>
                                                                                                <option value="QA">Qatar</option>
                                                                                                <option value="RE">Réunion</option>
                                                                                                <option value="RO">Romania</option>
                                                                                                <option value="RU">Russia</option>
                                                                                                <option value="RW">Rwanda</option>
                                                                                                <option value="BL">Saint Barthélemy</option>
                                                                                                <option value="SH">Saint Helena</option>
                                                                                                <option value="KN">Saint Kitts and Nevis</option>
                                                                                                <option value="LC">Saint Lucia</option>
                                                                                                <option value="MF">Saint Martin</option>
                                                                                                <option value="PM">Saint Pierre and Miquelon</option>
                                                                                                <option value="WS">Samoa</option>
                                                                                                <option value="SM">San Marino</option>
                                                                                                <option value="ST">São Tomé and Príncipe</option>
                                                                                                <option value="SA">Saudi Arabia</option>
                                                                                                <option value="SN">Senegal</option>
                                                                                                <option value="RS">Serbia</option>
                                                                                                <option value="SC">Seychelles</option>
                                                                                                <option value="SL">Sierra Leone</option>
                                                                                                <option value="SG">Singapore</option>
                                                                                                <option value="SK">Slovakia</option>
                                                                                                <option value="SI">Slovenia</option>
                                                                                                <option value="SB">Solomon Islands</option>
                                                                                                <option value="SO">Somalia</option>
                                                                                                <option value="ZA">South Africa</option>
                                                                                                <option value="GS">South Georgia &amp; South Sandwich Islands</option>
                                                                                                <option value="KR">South Korea</option>
                                                                                                <option value="ES">Spain</option>
                                                                                                <option value="LK">Sri Lanka</option>
                                                                                                <option value="VC">St. Vincent &amp; Grenadines</option>
                                                                                                <option value="SD">Sudan</option>
                                                                                                <option value="SR">Suriname</option>
                                                                                                <option value="SJ">Svalbard and Jan Mayen</option>
                                                                                                <option value="SZ">Swaziland</option>
                                                                                                <option value="SE">Sweden</option>
                                                                                                <option value="CH">Switzerland</option>
                                                                                                <option value="SY">Syria</option>
                                                                                                <option value="TW">Taiwan</option>
                                                                                                <option value="TJ">Tajikistan</option>
                                                                                                <option value="TZ">Tanzania</option>
                                                                                                <option value="TH">Thailand</option>
                                                                                                <option value="TL">Timor-Leste</option>
                                                                                                <option value="TG">Togo</option>
                                                                                                <option value="TK">Tokelau</option>
                                                                                                <option value="TO">Tonga</option>
                                                                                                <option value="TT">Trinidad and Tobago</option>
                                                                                                <option value="TN">Tunisia</option>
                                                                                                <option value="TR">Turkey</option>
                                                                                                <option value="TM">Turkmenistan</option>
                                                                                                <option value="TC">Turks and Caicos Islands</option>
                                                                                                <option value="TV">Tuvalu</option>
                                                                                                <option value="UG">Uganda</option>
                                                                                                <option value="UA">Ukraine</option>
                                                                                                <option value="AE">United Arab Emirates</option>
                                                                                                <option value="GB">United Kingdom</option>
                                                                                                <option value="US" selected="selected">United States</option>
                                                                                                <option value="UY">Uruguay</option>
                                                                                                <option value="UM">U.S. Outlying Islands</option>
                                                                                                <option value="VI">U.S. Virgin Islands</option>
                                                                                                <option value="UZ">Uzbekistan</option>
                                                                                                <option value="VU">Vanuatu</option>
                                                                                                <option value="VA">Vatican City</option>
                                                                                                <option value="VE">Venezuela</option>
                                                                                                <option value="VN">Vietnam</option>
                                                                                                <option value="WF">Wallis and Futuna</option>
                                                                                                <option value="EH">Western Sahara</option>
                                                                                                <option value="YE">Yemen</option>
                                                                                                <option value="ZM">Zambia</option>
                                                                                                <option value="ZW">Zimbabwe</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </li><!-- /.fields -->
                                                                                <li class="fields">
                                                                                    <div class="field">
                                                                                        <label for="shipping:telephone" class="required"><em>*</em>Telephone</label>
                                                                                        <div class="input-box">
                                                                                            <input type="text" name="shipping[telephone]" value="" title="Telephone" class="input-text  required-entry" id="shipping:telephone" />
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="field">
                                                                                        <label for="shipping:fax">Fax</label>
                                                                                        <div class="input-box">
                                                                                            <input type="text" name="shipping[fax]" value="" title="Fax" class="input-text " id="shipping:fax"  />
                                                                                        </div>
                                                                                    </div>
                                                                                </li><!-- /.fields -->
                                                                                <li class="no-display">
                                                                                    <input type="hidden" name="shipping[save_in_address_book]" value="1" />
                                                                                </li>
                                                                            </ul>
                                                                        </fieldset>
                                                                    </li><!-- /#shipping-new-address-form -->
                                                                    <li class="control">
                                                                        <input type="checkbox" name="shipping[same_as_billing]" id="shipping:same_as_billing" value="1" title="Use Billing Address" class="checkbox" />
                                                                        <label for="shipping:same_as_billing">Use Billing Address</label>
                                                                    </li>
                                                                </ul><!-- /.form-list -->
                                                                <div class="buttons-set" id="shipping-buttons-container">
                                                                    <p class="required">* Required Fields</p>
                                                                    <p class="back-link"><a href="#"><small>&laquo; </small>Back</a>
                                                                    </p>
                                                                    <button type="button" class="button" title="Continue"><span><span>Continue</span></span>
                                                                    </button>
                                                                    <span id="shipping-please-wait" class="please-wait" style="display:none;"><img src="images/opc-ajax-loader.gif" alt="Loading next step..." title="Loading next step..." class="v-middle" /> Loading next step...</span>
                                                                </div><!-- /#shipping-buttons-container -->
                                                            </form><!-- /#co-shipping-form -->
                                                        </div>
                                                    </div>
                                                </li><!-- /#opc-shipping -->
                                                <li id="opc-shipping_method" class="section">
                                                    <div class="step-title collapsed" data-toggle="collapse" data-target="#checkout-step-shipping_method">
                                                        <span class="number">4</span>
                                                        <h2>Shipping Method</h2>
                                                        <a href="#">Edit</a>
                                                    </div>
                                                    <div id="checkout-step-shipping_method" class="collapse">
                                                        <div class="step a-item">
                                                            <form id="co-shipping-method-form">
                                                                <div id="checkout-shipping-method-load">
                                                                    <!-- Content loaded dynamically -->
                                                                </div><!-- #checkout-shipping-method-load -->
                                                                <div id="onepage-checkout-shipping-method-additional-load">
                                                                    
                                                                </div><!-- /#onepage-checkout-shipping-method-additional-load -->
                                                                <div class="buttons-set" id="shipping-method-buttons-container">
                                                                    <p class="back-link"><a href="#"><small>&laquo; </small>Back</a>
                                                                    </p>
                                                                    <button type="button" class="button"><span><span>Continue</span></span>
                                                                    </button>
                                                                    <span id="shipping-method-please-wait" class="please-wait" style="display:none;"><img src="images/opc-ajax-loader.gif" alt="Loading next step..." title="Loading next step..." class="v-middle" /> Loading next step...        </span>
                                                                </div><!-- /#shipping-method-buttons-container -->
                                                            </form>
                                                        </div>
                                                    </div><!-- /#checkout-step-shipping_method -->
                                                </li><!-- /#opc-shipping_method -->
                                                <li id="opc-payment" class="section">
                                                    <div class="step-title collapsed" data-toggle="collapse" data-target="#checkout-step-payment">
                                                        <span class="number">5</span>
                                                        <h2>Payment Information</h2>
                                                        <a href="#">Edit</a>
                                                    </div>
                                                    <div id="checkout-step-payment" class="collapse">
                                                        <div class="step a-item">
                                                            <form id="co-payment-form">
                                                                <fieldset>
                                                                    <dl class="sp-methods" id="checkout-payment-method-load">
                                                                        <!-- Content dynamically loaded. Content from the methods.phtml is loaded during the ajax call -->
                                                                    </dl>
                                                                </fieldset>
                                                            </form><!-- /#co-payment-form -->
                                                            <div class="tool-tip" id="payment-tool-tip" style="display:none;">
                                                                <div class="btn-close"><a href="#" id="payment-tool-tip-close" title="Close">Close</a>
                                                                </div>
                                                                <div class="tool-tip-content"><img src="images/cvv.gif" alt="Card Verification Number Visual Reference" title="Card Verification Number Visual Reference" />
                                                                </div>
                                                            </div><!-- /#payment-tool-tip -->
                                                            <div class="buttons-set" id="payment-buttons-container">
                                                                <p class="required">* Required Fields</p>
                                                                <p class="back-link"><a href="#"><small>&laquo; </small>Back</a></p>
                                                                <button type="button" class="button"><span><span>Continue</span></span>
                                                                </button>
                                                                <span class="please-wait" id="payment-please-wait" style="display:none;"><img src="images/opc-ajax-loader.gif" alt="Loading next step..." title="Loading next step..." class="v-middle" /> Loading next step...    </span>
                                                            </div><!-- /#payment-buttons-container -->
                                                        </div><!-- /.step -->
                                                    </div><!-- /#checkout-step-payment -->
                                                </li><!-- /#opc-payment -->
                                                <li id="opc-review" class="section">
                                                    <div class="step-title collapsed" data-toggle="collapse" data-target="#checkout-step-review">
                                                        <span class="number">6</span>
                                                        <h2>Order Review</h2>
                                                        <a href="#">Edit</a>
                                                    </div>
                                                    <div id="checkout-step-review" class="collapse">
                                                        <div class="step a-item">
                                                            <div class="order-review" id="checkout-review-load">
                                                                <!-- Content loaded dynamically -->
                                                            </div><!-- /#checkout-review-load -->
                                                        </div><!-- /.step -->
                                                    </div><!-- /#checkout-step-review -->
                                                </li><!-- /#opc-review -->
                                            </ol><!-- /#checkoutSteps -->
                                        </div><!-- /.col-main -->
                                        <div class="col-right sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                            <div id="checkout-progress-wrapper">
                                                <div class="block block-progress opc-block-progress">
                                                    <div class="block-title">
                                                        <strong><span>Checkout Progress</span></strong>
                                                    </div>
                                                    <div class="block-content">
                                                        <dl>
                                                            <div id="billing-progress-opcheckout">
                                                                <dt>Billing Address</dt>
                                                            </div>
                                                            <div id="shipping-progress-opcheckout">
                                                                <dt>Shipping Address</dt>
                                                            </div>
                                                            <div id="shipping_method-progress-opcheckout">
                                                                <dt>Shipping Method</dt>
                                                            </div>
                                                            <div id="payment-progress-opcheckout">
                                                                <dt>Payment Method</dt>
                                                            </div>
                                                        </dl>
                                                    </div><!-- /.block-content -->
                                                </div>
                                            </div><!-- /#checkout-progress-wrapper -->
                                        </div><!-- /.sidebar -->
                                    </div>
                                </div>
                            </div><!-- /.container -->
                        </div>
                    </div>
                </div><!-- /.ma-main-container -->
                
                <?php include 'footer.php'?>