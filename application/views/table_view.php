<div id="search_table_container">
                <table id="search_table" border="1">
                    <?php
                        $is_admin = isset($_SESSION['is_admin']);
                        // $is_admin = true; //temporary

                        // if (isset($table)){
      //                       echo "<tr>
                        //      <th>Book No.    </th>
                        //      <th>Book Title  </th>
                        //      <th>Status      </th>
                        //      <th>Description </th>
                        //      <th>Publisher   </th>
                        //      <th>Publish Date</th>
                        //      <th>Tags        </th>
                        //      <th>Author      </th>
                        //  ";

                        //new
                        if(isset($table)){
                            echo "<tr>

                                <th>Book No.</th>
                                <th>Book</th>
                                <th>Other Data</th>

                            ";


                            if ($is_admin){
                                echo "<th colspan='2'>Admin Action</th>";
                                echo "<th>Borrow Action         </th>";
                            } else {
                                // echo "<th colspan='2'>User Action</th>";
                            }

                            echo "</tr>";

                            foreach($table as $row):

                                echo "<tr>";

                               
                                echo "<td>" . $row->book_no . "</td>";
                                echo "<td>" .
                                        "<div style = 'font:20px Arial'>" . 
                                            $row->book_title . 
                                        "</div>" . 
                                        
                                        $row->description . "<br>" .  
                                        $row->name . "<br>" .

                                         

                                        //like button
                                        "<div style = 'font:11px Arial'>".
                                            "<a href='#'>Favorite</a>&nbsp;&nbsp;" .
                                            "<a ";

                                            if ($row->status == "available") echo "href='#' bookno='{$row->book_no}'>Reserve";
                                            else echo ">(" . $row->status . ")";

                                            echo "</a>" .
                                         "</div>" .

                                     "</td>";
                                echo "<td>Publisher: " . $row->publisher . "<br>Publish Date: " .
                                              $row->date_published . 
                                     "</td>";                                    
                               

                                // foreach($row as $cell):
                                //     echo "<td>" . $cell  . "</td>";
                                // endforeach;


                                // if ($is_admin){
                                //     //add and edit button
                                //     echo "<td><input type='button' bookno='{$row->book_no}' class='edit_button' value='Edit'/></td>";
                                //     echo "<td><input type='button' bookno='{$row->book_no}' class='delete_button' value='Delete'/></td>";

                                //     //borrow action
                                //     if ($row->status == "reserved")  echo "<td><input type='button' bookno='{$row->book_no}' value='Lend'/></td>";
                                //     elseif ($row->status == "borrowed") echo "<td><input type='button' bookno='{$row->book_no}' value='Return'/></td>";
                                //     else echo "<td>(" . $row->status . ")</td>";
                                // } else {
                                //     //reserve button
                                //     if ($row->status == "available") echo "<td><input type='button' bookno='{$row->book_no}' value='Reserve'/></td>";
                                //     else echo "<td>(" . $row->status . ")</td>";
                                //     //like button
                                //     echo "<td><input type='button' bookno='{$row->book_no}' value='Like'</td>";
                                // }
                                echo "</tr>";
                            endforeach;
                        }
                    ?>

</table>
</div>