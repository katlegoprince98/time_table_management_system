
<br>

<div>
    <!--Table styling -->
    <br>
    <style>
    
        table {
            margin-top: 10px;
            font-family: arial, sans-serif;
            border-collapse: collapse;
            margin-left: 30px;
            width: 90%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>

  


<!--Table used to display all  The registered Lectures-->
    <table id=teacherstable style="margin-left: 80px">
        <caption><strong>TIME TABLE</strong></caption>
        
        <?php
             $table = "";
            $one = "08:00-09:00";
            $two = "09:00-10:00";
            $three = "10:00-11:00";
            $four = "11:00-12:00";
            $five = "12:00-13:00";
            $six = "13:00-14:00";
            $sev = "14:00-15:00";
            $eight = "15:00-16:00";
            $nine = "16:00-17:00";
            

        ?>
        
        <tr>
            <th name="one" width="100"><?php echo ($one);  ?></th>
            <th name="two" width=100><?php echo ($two);  ?></th>
            <th name="three" width=100><?php echo ($three);  ?></th>
            <th name="four" width="100"><?php echo ($four);  ?></th>
            <th name="five" width="100"><?php echo ($five);  ?></th>
            <th name="six" width="100"><?php echo ($six);  ?></th>
            <th name="sev" width="100"><?php echo ($sev);  ?></th>
            <th name="eight" width="100"><?php echo ($eight);  ?></th>
            <th name="nine" width="100"><?php echo ($nine);  ?></th>
        </tr>
      
        <tbody>
        <?php
          $res = getModules();
          $data = '';
         
        //Diplay each returned row on its suitable Table Heading 
        
        
        ?>
        </tbody>
    </table>

</div>
<!--HOME SECTION END-->



<!--  Jquery Core Script -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!--  Core Bootstrap Script -->
<script src="assets/js/bootstrap.js"></script>
<!--  Flexslider Scripts -->
<script src="assets/js/jquery.flexslider.js"></script>
<!--  Scrolling Reveal Script -->
<script src="assets/js/scrollReveal.js"></script>
<!--  Scroll Scripts -->
<script src="assets/js/jquery.easing.min.js"></script>
<!--  Custom Scripts -->
<script src="assets/js/custom.js"></script>