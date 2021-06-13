<html lang="en">
<head>
<!-------- Meta Function -------->
<meta charset="utf-8">
  <meta name="application-name" content="codeIgniter">
  <meta name="keywords" content="HTML, CSS, JavaScript , PHP">
  <meta name="author" content="Paresh Rajpurohit">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-------- css link -------->  
<link rel="stylesheet" href="<?php echo base_url()?>resources/css/listview.css"> 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
</head>

<title>List View</title>
<body> 
<div>    
<table id="table">
    <tr>
        <th>SR.No </th>
  	    <th>Member Name</th>
        <th>Email ID</th>
        <th>Mobile No</th>
        <th>Registration Date</th>
  	</tr>
      <?php $i=0; foreach($fetch->result() as $row)
      {
      ?>
      <tr>
        <td><?php echo $row->Id?></td>
        <td><?php echo $row->Membername?></td>
        <td><?php echo $row->emailid?></td>
        <td><?php echo $row->mobileno?></td>
        <td><?php echo $row->reg_date?></td>
      </tr>
      <?php  
      }
      ?>
  	</table>	
</div>      
</body>
</html>