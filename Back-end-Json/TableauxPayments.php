<table class="table table-borderless">
  <thead >
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Payment Schedule</th>
      <th scope="col">Bill Number</th>
      <th scope="col">Amount Paid</th>
      <th scope="col">Balance amount</th>
      <th scope="col">Date</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <?php
    $data = file_get_contents('./Json/Payment.json');
    $js = json_decode($data,true);
    
      foreach($js as $student){
      echo "<tr class='bg-white  mb-3 align-middle border-5 border-light '>
      <td>" . $student['Name']   . "</td>
      <td>" . $student['Payment']  . "</td>
      <td>" . $student['Number']  . "</td>
      <td>" . $student['Paid'] . "</td>
      <td>" . $student['Amount']   . "</td>
      <td>" . $student['Date']  . "</td>
      <td>" . $student['icon']  . "</td>
      </tr>";
      
        } 

    ?>
</table>