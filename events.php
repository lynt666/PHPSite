<?php 
include("php/global.php");
include("php/header.php");
?>
    
     
     <div class="row">

         <div class="col-md-8">

            <div class="page-header">
              <h1>Events <small><?php
echo $now['weekday'] . ", " . $now['month'] . " " . $now['mday']. " " . $now['year'];  
            ?></small></h1>
            </div>

         </div>

        <div class="col-md-4">

            <?php include("php/sidebar.php"); ?>


         </div>

        <div id="calendar" class="col-md-8">
        
        
        <table class="calendar" cellpadding="0" cellspacing="0" border="0">
            
            <tr>
                
                <th colspan="7">January 2015</th>
                
            </tr>
            
            <tr class="week">
                
                <td>Sunday</td>
                <td>Monday</td>
                <td>Tuesday</td>
                <td>Wednesday</td>
                <td>Thursday</td>
                <td>Friday</td>
                <td>Saturday</td>
                
            </tr>
            
            <tr>
                
                <td class="sun weekend"></td>
                <td class="mon"></td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>2</td>
                <td class="weekend">3</td>
                
            </tr>
            
            <tr>
                
                <td class="weekend">4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
                <td>8</td>
                <td>9</td>
                <td class="weekend">10</td>
                
            </tr>
            
            <tr>
                
                <td class="weekend">11</td>
                <td>12</td>
                <td>13</td>
                <td class="today">14</td>
                <td>15</td>
                <td>16</td>
                <td class="weekend">17</td>
                
            </tr>
            
            <tr>
                
                <td class="weekend">18</td>
                <td>19</td>
                <td>20</td>
                <td>21</td>
                <td>22</td>
                <td>23</td>
                <td class="weekend">24</td>
                
            </tr>
            
            <tr>
                
                <td class="weekend">25</td>
                <td>26</td>
                <td>27</td>
                <td>28</td>
                <td>29</td>
                <td>30</td>
                <td class="weekend">31</td>
                
            </tr>
            
            <tr>
                
                <td class="weekend"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td class="weekend"></td>
                
            </tr>
        </table>
        
    </div>
    
     </div>
     
<?php 
include("php/footer.php");
?>