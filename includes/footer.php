<?php
$col = array('content');
$id = 'keyword';
$val = 'copyright';
$res = $obj_query->select_single($col, 'content', $id, $val);
if (empty($res)) {
    $copyright = 'No data can be recieved.';
} else {
    $copyright = $res['content'];
}
?>
<div class="popupBackground" id="background">
    <div class="panel panel-default feedsBg" id="feedsBg">
        <a href="javascript:void(0)"><span class="closeForm" id="closeForm"></span></a>
        <div class="panel-heading" style="background-color: #1475A1;color: #fff;font-weight: bold;" id="popHead"></div>
        <!--<div class="heading" id="popHead"></div>-->
        <div class="wrapForm" id="formWrap">
            <div style="width:200px;height:200px;text-align:center" id="loading">
                <img src="<?php echo baseUrl; ?>images/loader.gif" alt="loading" style="height:64px;width:64px" />
                <br>
                Sending...
            </div>
            <div style="width:200px;height:200px;text-align:center" id="success">
                <img src="<?php echo baseUrl; ?>images/success.png" alt="loading" style="height:64px;width:64px" />
                <br>
                Delivery Successful!!!
            </div>
            <div style="width:200px;height:200px;text-align:center" id="sendError">
                <img src="<?php echo baseUrl; ?>images/error.png" alt="loading" style="height:64px;width:64px" />
                <br>
                Cannot Deliver!!!
            </div>
            <form method="POST" id="reviewForm" url="<?php echo baseUrl; ?>sendReview/" >
                <input type="hidden" name="reviewMail" value="" id="reviewMail"/>
                <table cellspacing="5" width="490">
                    <tr>
                        <td>Name:</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="name" class="form-control txtReview" id="name"/></td>
                    </tr>
                    <tr>
                        <td>Country:</td>
                    </tr>
                    <tr>
                        <td>
                            <select name="country" id="country" class="form-control txtReview">
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Åland Islands">Åland Islands</option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="American Samoa">American Samoa</option>
                                <option value="Andorra">Andorra</option>
                                <option value="Angola">Angola</option>
                                <option value="Anguilla">Anguilla</option>
                                <option value="Antarctica">Antarctica</option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Aruba">Aruba</option>
                                <option value="Australia">Australia</option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Bahrain">Bahrain</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
                                <option value="Belgium">Belgium</option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bermuda">Bermuda</option>
                                <option value="Bhutan">Bhutan</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Bonaire">Bonaire</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Bouvet Island">Bouvet Island</option>
                                <option value="Brazil">Brazil</option>
                                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                <option value="Brunei Darussalam">Brunei Darussalam</option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Cape Verde">Cape Verde</option>
                                <option value="Cayman Islands">Cayman Islands</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Christmas Island">Christmas Island</option>
                                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Cook Islands">Cook Islands</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Curaçao">Curaçao</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czech Republic">Czech Republic</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Falkland Islands">Falkland Islands</option>
                                <option value="Faroe Islands">Faroe Islands</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="French Guiana">French Guiana</option>
                                <option value="French Polynesia">French Polynesia</option>
                                <option value="French Southern Territories">French Southern Territories</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Gibraltar">Gibraltar</option>
                                <option value="Greece">Greece</option>
                                <option value="Greenland">Greenland</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guadeloupe">Guadeloupe</option>
                                <option value="Guam">Guam</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guernsey">Guernsey</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran">Iran</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Isle of Man">Isle of Man</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jersey">Jersey</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Korea">Korea</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Macao">Macao</option>
                                <option value="Macedonia">Macedonia</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Martinique">Martinique</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mayotte">Mayotte</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia">Micronesia</option>
                                <option value="Moldova">Moldova</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Montserrat">Montserrat</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="New Caledonia">New Caledonia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Niue">Niue</option>
                                <option value="Norfolk Island">Norfolk Island</option>
                                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestinian Territory">Palestinian Territory</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Pitcairn">Pitcairn</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Puerto Rico">Puerto Rico</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Réunion">Réunion</option>
                                <option value="Romania">Romania</option>
                                <option value="Russian Federation">Russian Federation</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Sint Maarten">Sint Maarten</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Sudan">South Sudan</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-Leste">Timor-Leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tokelau">Tokelau</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="VietNam">VietNam</option>
                                <option value="Virgin Islands, British">Virgin Islands, British</option>
                                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                <option value="Wallis and Futuna">Wallis and Futuna</option>
                                <option value="Western Sahara">Western Sahara</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                    </tr>
                    <tr>
                        <td><input type="text" name="email" class="form-control txtReview" id="email"/></td>
                    </tr>
                    <tr id="lblVisited">
                        <td>Visited Date:</td>
                    </tr>
                    <tr id="txtVisited">
                        <td><input type="text" name="date" class="form-control txtReview" id="departure"/></td>
                    </tr>
                    <tr>
                        <td id="labelDesc"></td>
                    </tr>
                    <tr>
                        <td><textarea name="desc" class="form-control txtAreaReview" rows="13" id="desc"></textarea></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Send" class="btn btn-default popBtn" style="margin-top:10px;"/></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>
<div class="panel panel-default footer">
    <div class="panel-body footerBody">
        <div class="footerLinkWrap">
            <div class="footerLink">
                <img src="<?php echo baseUrl; ?>images/logo.png" width="200" />
                <br />
                <br />
                <?php
                if (!empty($copyright)) {
                    echo $copyright;
                }
                ?>
            </div>
            <div class="footerLink">
                <ul>
                    <li><h4>This Site</h4></li>
                    <li><a href="<?php echo baseUrl ?>">Home</a></li>
                    <li><a href="<?php echo baseUrl ?>team">Our Team</a></li>
                    <li><a href="<?php echo baseUrl ?>about">About us</a></li>
                    <li><a href="<?php echo baseUrl ?>policies">Policies</a></li>
                    <li><a href="<?php echo baseUrl ?>recommended">Recommended</a></li>
                </ul>
            </div>
            <div class="footerLink">
                <ul>
                    <li><h4>Contact Method</h4></li>
                    <li><a href="javascript:void(0)" onclick="loadForm('Recommend Trip');">Recommend Trip</a></li>
                    <li><a href="javascript:void(0)" onclick="loadForm('Suggestion');">Suggestion</a></li>
                    <li><a href="javascript:void(0)" onclick="loadForm('Feedback');">Feedback</a></li>
                </ul>
            </div>
            <div class="footerLink">
                <ul>
                    <li><h4>Association with</h4></li>
                    <li><a href="http://www.nepal.gov.np/"><span class="footerIcon ng">Nepal Government</span></a></li>
                    <li><a href="http://welcomenepal.com/promotional/"><span class="footerIcon ntb">NTB</span></a></li>
                    <li><a href="http://www.taan.org.np/"><span class="footerIcon ta">TAAN</span></a></li>
                    <li><a href="http://www.nepalmountaineering.org/"><span class="footerIcon nma">NMA</span></a></li>
                </ul>
            </div>
            <div class="footerLink">
                <ul>
                    <li><h4>Follow us</h4></li>
                    <li><a href="https://www.facebook.com/"><span class="footerIcon fb">Facebook</span></a></li>
                    <li><a href="https://twitter.com/"><span class="footerIcon tw">Twitter</span></a></li>
                    <li><a href="https://plus.google.com/"><span class="footerIcon gp">Google +</span></a></li>
                    <li><a href="https://www.linkedin.com/"><span class="footerIcon in">Linked In</span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    (function (e, t, n) {
        var r, i = e.getElementsByTagName(t)[0];
        if (e.getElementById(n))
            return;
        r = e.createElement(t);
        r.id = n;
        r.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
        i.parentNode.insertBefore(r, i);
    })(document, "script", "facebook-jssdk");
    $("#departure").datepicker({dateFormat: 'yy-mm-dd'});
<?php if (!empty($shortSweet)) { ?>
        $(document).ready(function () {
            $('#show1').css({display: 'block'});
    <?php for ($i = 1; $i <= count($shortSweet); $i++) { ?>
        <?php
        if ($i != 1 && $i < 2) {
            $prev = $i - 1;
        } else {
            $prev = $i + 1;
        }
        if ($i < count($shortSweet)) {
            $next = $prev + 1;
        } else {
//            if($prev)
            $next = $prev - 1;
        }
        ?>
                $('#plus<?php echo $i; ?>').css({display: 'none'});
                $('#minus<?php echo $i; ?>').css({display: 'block'});
                $('#click<?php echo $i; ?>').click(function () {
                    $('#show<?php echo $i; ?>').slideToggle();
                    $('#show<?php echo $prev; ?>').slideUp();
                    $('#show<?php echo $next; ?>').slideUp();
                    $('#click<?php echo $i; ?> span').toggle();
                    $('#plus<?php echo $prev; ?>').css({display: 'block'});
                    $('#plus<?php echo $next; ?>').css({display: 'block'});
                    $('#minus<?php echo $prev; ?>').css({display: 'none'});
                    $('#minus<?php echo $next; ?>').css({display: 'none'});
                });
    <?php } ?>
        });
<?php } ?>
</script>
</body> 
</html>


