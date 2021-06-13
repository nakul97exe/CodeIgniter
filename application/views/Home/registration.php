<html lang="en">
<head>
<!-------- Meta Function -------->
<meta charset="utf-8">
  <meta name="application-name" content="codeIgniter">
  <meta name="keywords" content="HTML, CSS, JavaScript , PHP">
  <meta name="author" content="Paresh Rajpurohit">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-------- css link -------->  
<link rel="stylesheet" href="<?php echo base_url()?>resources/css/registration.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
</head>

<title>Registration</title>
<body>
<?php
if($this->uri->segment(3) == "inserted" )
{
  echo '<small style="color:red;font-size:18px;">Data Inserted</small>';
}
?>
<div class="content">
<form action="<?php echo base_url()?>index.php/Home/registration_contr/form_validation" class="form" method="post">
  <div id="content_navpersonal">
    <div id="navpersonal">
      <small style="margin-left:6px;color:#1b96dd;font-size: 16px;">Personal Details:</small>
        <table cellspacing=15 id="list1">
          <tr>
            <td>
              <label for="Membername" style="font-size: 14px;"> Member Name: </label><br>
              <input type="text"  name="Membername" class="form-control-personal"  
              placeholder="DR"  autocomplete="nope"/><br>
              <small style="color:red;font-size:12px;"><?php echo form_error("Membername");?></small>
            </td>
            <td>
              <label for="qualification" style="font-size: 14px;"> Qualification: </label><br>
              <input type="text"  name="qualification" class="form-control-personal"  
              placeholder="Master's"  autocomplete="nope"/><br>
              <small style="color:red;font-size:12px;"><?php echo form_error("qualification");?></small>
            </td>  
            <td>
              <label for="birthdate" style="font-size: 14px;"> Birth Date: </label><br>
              <input type="date" name="birthdate" class="form-control-personal"  
              placeholder="DD-MM-YYYY"  autocomplete="nope"/><br>
              <small style="color:red;font-size:12px;"><?php echo form_error("birthdate");?></small>
            </td>
            <td>
              <label for="gender" style="font-size: 14px;"> Sex: </label><br>
              <select name="gender" class="form-control-personal">
                <option value="">Select Sex</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select><br>
              <small style="color:red;font-size:12px;"><?php echo form_error("gender");?></small>
            </td> 
          </tr>
          <tr>  
            <td colspan="2">
              <label for="uploadphoto" style="font-size: 14px;"> Upload Photo: </label><br>
              <input type="file" name="uploadphoto" class="form-control-personal-edit" /><br>
              <small style="color:red;font-size:12px;">Note: Upload jpeg,jpg,png only and file size must be less than 5mb</small>
              <br>
              <small style="color:red;font-size:12px;"><?php echo form_error("uploadphoto");?></small>
            </td>        
            <td colspan="2">
              <label for="address" style="font-size: 14px;"> Address: </label><br>
              <input type="text" name="address" class="form-control-personal-add"  
              autocomplete="nope" placeholder="Thane-412, Old Road Street, Thane" /><br>
              <small style="color:red;font-size:12px;"><?php echo form_error("address");?></small>
            </td>   
          </tr>
          <tr>
          <td>  
          <label for="state" style="font-size: 14px;"> State: </label><br>
              <select name="state" id="state" class="form-control-personal">
                <option value="">Select State</option>
                <?php
                foreach($state as $row)
                {
                  echo '<option value="'.$row->Id.'">'.$row->state.'</option>';
                }
                ?>
              </select>
              <br>
              <small style="color:red;font-size:12px;"><?php echo form_error("state");?></small>
          </td>
          <td>  
            <label for="city" style="font-size: 14px;"> City: </label><br>
              <select name="city" id="city" class="form-control-personal" >
              <option value="">Select City</option>
              <?php
                foreach($city as $row)
                {
                  echo '<option value="'.$row->Id.'">'.$row->city.'</option>';
                }
                ?>
              </select>
              <br>
              <small style="color:red;font-size:12px;"><?php echo form_error("city");?></small>
          </td>
          <td>
            <label for="pincode" style="font-size: 14px;"> Pincode: </label><br>
              <input type="number" name="pincode" class="form-control-personal"  
              placeholder="400605"autocomplete="nope"/>
              <br>
              <small style="color:red;font-size:12px;"><?php echo form_error("pincode");?></small>
          </td>
          <td>
            <label for="phone" style="font-size: 14px;"> Phone: Clinic/Hosp: </label><br>
              <input type="number" name="phone" class="form-control-personal"  
              placeholder="022123456789"  autocomplete="nope" />
              <br>
              <small style="color:red;font-size:12px;"><?php echo form_error("phone");?></small>
          </td>
          </tr>
          <tr>
          <td>
            <label for="mobileno" style="font-size: 14px;"> Mobile No: </label><br>
              <input type="number" name="mobileno" class="form-control-personal"  
              placeholder="0123456789"  autocomplete="nope" />
              <br>
              <small style="color:red;font-size:12px;"><?php echo form_error("mobileno");?></small>
          </td>
          <td>
            <label for="emailid" style="font-size: 14px;"> Email ID: </label><br>
              <input type="email"  name="emailid" class="form-control-personal"  
              placeholder="abc@gmail.com"  autocomplete="nope"/>
              <br>
              <small style="color:red;font-size:12px;"><?php echo form_error("emailid");?></small>
          </td>
          <td>
            <label for="iriamembership" style="font-size: 14px;"> IRIA Membership Number: </label><br>
              <input type="text" name="iriamembership" class="form-control-personal"  
              placeholder="IRIA123456"  autocomplete="nope" />
              <br>
              <small style="color:red;font-size:12px;"><?php echo form_error("iriamembership");?></small>
          </td>
          <td>
            <label for="iriamembershipsnice" style="font-size: 14px;"> IRIA Membership Since: </label><br>
              <input type="date" name="iriamembershipsnice" class="form-control-personal"  
              placeholder="DD-MM-YYYY"  autocomplete="nope" />
              <br>
              <small style="color:red;font-size:12px;"><?php echo form_error("iriamembershipsnice");?></small>
          </td>
          </tr>
          <tr>
            <td colspan="2">
              <label for="membershipdoc" style="font-size: 14px;"> IRIA Membership Document: </label><br>
              <input type="file" name="membershipdoc" class="form-control-personal-edit" /><br>
              <small style="color:red;font-size:12px;">Note: Upload pdf only and file size must be less than 5mb</small>
              <small style="color:red;font-size:12px;"><?php echo form_error("membershipdoc");?></small>
            </td>
            <td>
            <label for="namemedicalcouncil" style="font-size: 14px;"> Name of Medical Council of Registartion: </label><br>
              <input type="text" name="namemedicalcouncil" class="form-control-personal"  
              placeholder="Indian Medical Council"  autocomplete="nope" />
              <br>
              <small style="color:red;font-size:12px;"><?php echo form_error("namemedicalcouncil");?></small>
            </td>
            <td>
            <label for="councilregnumber" style="font-size: 14px;"> Medical Council Registration No: </label><br>
              <input type="text"  name="councilregnumber" class="form-control-personal"  
              placeholder="CR123456"  autocomplete="nope" />
              <br>
              <small style="color:red;font-size:12px;"><?php echo form_error("councilregnumber");?></small>
            </td> 
            
          </tr>        
        </table>  
    </div>  
  </div>
  <div id="content_details">
  <div id="navdetail">
    <small style="margin-left:6px;color:#1b96dd;font-size: 16px;">Please Fill Out the Details:</small>
    <table cellspacing=20 id="list2">
    <tr>
      <td>
        <label for="nameinstitute" style="font-size: 14px;"> Name Instit/Hosp/Clinic: </label><br>
        <input type="text" name="nameinstitute" class="form-control-personal"  
        placeholder="Somaiya"  autocomplete="nope"/>
        <br>
        <small style="color:red;font-size:12px;"><?php echo form_error("nameinstitute");?></small>
      </td>
      <td>
        <label for="designation" style="font-size: 14px;"> Designation: </label><br>
        <input type="text" name="designation" class="form-control-personal"  
        placeholder="Head" autocomplete="nope"/>
        <br>
        <small style="color:red;font-size:12px;"><?php echo form_error("designation");?></small>
      </td>
      <td>
        <label for="teaching" style="font-size: 14px;"> Teaching/Private Pratice(Teaching): </label><br>
        <input type="number"  name="teaching" class="form-control-personal"  
        placeholder=""  autocomplete="nope"/>
        <button type="" class="button">Year</i></button>
        <br>
        <small style="color:red;font-size:12px;"><?php echo form_error("teaching");?></small>
      </td>
      <td>
        <label for="nonteaching" style="font-size: 14px;"> Teaching/Private Pratice(Non-Teaching): </label><br>
        <input type="number"  name="nonteaching" class="form-control-personal"  
        placeholder=""  autocomplete="nope"/>
        <button type="" class="button">Year</i></button>
        <br>
        <small style="color:red;font-size:12px;"><?php echo form_error("nonteaching");?></small>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <label for="address2" style="font-size: 14px;"> Address: </label><br>
        <input type="text"  name="address2" class="form-control-personal-add"  
        placeholder="Thane-412, Old Road Street, Thane"  autocomplete="nope"/>
        <br>
        <small style="color:red;font-size:12px;"><?php echo form_error("address2");?></small>
      </td>
      <td>  
        <label for="country" style="font-size: 14px;"> Country: </label><br>
        <select name="country" class="form-control-personal" id="country">
          <option value="">Select Country</option>
          <?php
                foreach($country as $row)
                {
                  echo '<option value="'.$row->Id.'">'.$row->country.'</option>';
                }
                ?>

        </select>
        <br>
        <small style="color:red;font-size:12px;"><?php echo form_error("country");?></small>  
      </td>
      <td>  
        <label for="state" style="font-size: 14px;"> State: </label><br>
        <select name="state2" class="form-control-personal" id="state2">
          <option value="">Select State</option>
          <?php
                foreach($state as $row)
                {
                  echo '<option value="'.$row->Id.'">'.$row->state.'</option>';
                }
          ?>
          <br>
        <small style="color:red;font-size:12px;"><?php echo form_error("state2");?></small>  
        </select>
      </td>
    </tr>
    <tr>
      <td>  
        <label for="city2" style="font-size: 14px;"> City: </label><br>
        <select name="city2" class="form-control-personal" id="city2">
          <option value="">Select City</option>
          <?php
                foreach($city as $row)
                {
                  echo '<option value="'.$row->Id.'">'.$row->city.'</option>';
                }
          ?>
          <br>
          <small style="color:red;font-size:12px;"><?php echo form_error("city2");?></small>  
        </select>
      </td>
      <td>
        <label for="pincode2" style="font-size: 14px;"> Pincode </label><br>
        <input type="number" name="pincode2" class="form-control-personal"  
        placeholder="400605"  autocomplete="nope" />
        <br>
        <small style="color:red;font-size:12px;"><?php echo form_error("pincode2");?></small>  
      </td>
      <td>
        <label for="telephone2" style="font-size: 14px;"> Telephone </label><br>
        <input type="number" name="telephone2" class="form-control-personal"  
        placeholder="022123456789"  autocomplete="nope" />
        <br>
        <small style="color:red;font-size:12px;"><?php echo form_error("telephone2");?></small>  
      </td>
      <td>
        <label for="mobileno2" style="font-size: 14px;"> Mobile No </label><br>
        <input type="number" name="mobileno2" class="form-control-personal"  
        placeholder="0123456789"  autocomplete="nope"/>
        <br>
        <small style="color:red;font-size:12px;"><?php echo form_error("mobileno2");?></small>  
      </td>
    </tr>  
    <tr>
      <td>
        <label for="emailid2" style="font-size: 14px;"> Email ID </label><br>
        <input type="email"  name="emailid2" class="form-control-personal"  
        placeholder="abc@gmail.com" autocomplete="nope"/>
        <br>
        <small style="color:red;font-size:12px;"><?php echo form_error("emailid2");?></small>  
      </td>
      <td colspan="2">
        <label for="biodata" style="font-size: 14px;"> Bio Data: </label><br>
        <input type="file" id="file" name="biodata" class="form-control-personal-edit"/><br>
        <small style="color:red;font-size:12px;">Note: Upload jpeg,jpg,png only and file size must be less than 5mb</small>
        <br>
        <small style="color:red;font-size:12px;"><?php echo form_error("biodata");?></small>  
      </td>   
    </tr>    
    </table>  
  </div>  
</div>
<div id="content_delc">
  <div id="navdelc">
    <small style="margin-left:6px;color:#1b96dd;font-size: 16px;">Declaration:</small>
      <table id=list3>
        <tr>
          <td>
            <input type="checkbox" name="Delc"/><small>Click the "I Agree to Terms and Conditions"</small>
          <td>  
        </tr>
        <tr>
          <td>
          <label for="current_date" style="font-size: 14px;"> Date: </label><br>
          <?php
            $this->load->helper('date');

            $format = "%Y-%m-%d";
           
          ?>
          <input type="text" name="current_date" class="form-control-personal" value="<?php  echo @mdate($format);?>" disabled /><br>
          </td>
        </tr>
        <tr>
          <td><input type="submit" name="save" value="Submit" class="subbutton btnred"/></td>
        </tr>      
      </table>  
  </div>  
</div>    
</form>
</div>
</body>
</html>