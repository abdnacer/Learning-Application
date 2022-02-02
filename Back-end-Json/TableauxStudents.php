<table class="table  table-borderless">
    <thead>
      <tr class="text-secondary">
        <th scope="col"></th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone</th>
        <th scope="col">Enroll Number</th>
        <th scope="col">Date of admission</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      
      <?php
    
    $img = '<img src ="./images/img_table.png">';
    $data = file_get_contents('./Json/Student.json');
    $js = json_decode($data,true);
    
      foreach($js as $student){
      echo "<tr class='bg-white  mb-3 align-middle border-5 border-light '>
      <td>" . $img . "</td>
      <td>" . $student['Name']   . "</td>
      <td>" . $student['Email']  . "</td>
      <td>" . $student['Phone']  . "</td>
      <td>" . $student['Number'] . "</td>
      <td>" . $student['Date']   . "</td>
      <td>
      <a href=''>" . $student['icon1'] .  "</a>
      <a>" . $student['icon2']  . "</a>
      </td>
      </tr>";
      
        } 

    ?>
    </tbody>
  </table>