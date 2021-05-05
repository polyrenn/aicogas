                    <div style="padding: 8px;"> 
                                <div class="contaier">
                    <h6 align='center'>Report By Categories</h6>
                    <div class="row">
                        <div class='col-12 col-lg-3 '>
                            <div class="bg-warning p-1 rounded shadow">
                                <h6 align="center" class="text-white">Other</h6>
                        <?php
                        require_once ('classes/all.php');
                        if(isset($_GET['bcode'])) {
                            $branchCode = $_GET['bcode'];
                        }
                        
                        $dt = date('Y-m-d', strtotime('now'));

                            
                            $Others = "SELECT DISTINCT(crbnumber) FROM crbs WHERE datee = '$dt' AND branch = '$branchCode' AND category = 'Others' AND amount != 0 ";
                            $goOther = mysqli_query($connect, $Others);
                            
                             
                            if($goOther){
                                $oth = mysqli_num_rows($goOther);

                                $k = "SELECT SUM(tquant) FROM crbs  WHERE datee = '$dt' AND branch = '$branchCode' AND category = 'Others' AND amount != 0 ";
                                $kk = mysqli_query($connect, $k);
                                $kr = mysqli_fetch_array($kk);
                                $alkg = $kr['SUM(tquant)'];

                                 $ka = "SELECT SUM(amount) FROM crbs  WHERE datee = '$dt' AND branch = '$branchCode' AND category = 'Others' AND amount != 0 ";
                                $kka = mysqli_query($connect, $ka);
                                $kra = mysqli_fetch_array($kka);
                                $alkga = $kra['SUM(amount)'];

                                echo "<b class='text-white'> Sales count</b><br>";
                                echo "<b class='text-white'>".number_format($oth)." </b><br>";
                                echo "<hr>";
                                echo "<b class='text-white'>Total Kg </b><br>";
                                echo "<b class='text-white'> ".$alkg." Kg</b><br>";
                                echo "<hr>";
                                echo "<b class='text-white'> Amount</b><br>";
                                echo "<b class='text-white'> ".number_format($alkga)."</b>";
                                echo "<hr>";
                            }
                
                        
                        ?>
                    </div>
                        </div>
                        <div class='col-12 col-lg-3 '>
                            <div class="bg-success p-1 rounded shadow">
                                 <h6 align="center" class="text-white">Dealer</h6>
                        <?php 
                        $dt = date('Y-m-d', strtotime('now'));
                        
                             $Others = "SELECT DISTINCT(crbnumber) FROM crbs WHERE datee = '$dt' AND branch = '$branchCode' AND category = 'Dealer' AND amount != 0 ";
                            $goOther = mysqli_query($connect, $Others);
                            
                             
                            if($goOther){
                                $oth = mysqli_num_rows($goOther);

                                $k = "SELECT SUM(tquant) FROM crbs  WHERE datee = '$dt' AND branch = '$branchCode' AND category = 'Dealer' AND amount != 0 ";
                                $kk = mysqli_query($connect, $k);
                                $kr = mysqli_fetch_array($kk);
                                $alkg = $kr['SUM(tquant)'];

                                 $ka = "SELECT SUM(amount) FROM crbs  WHERE datee = '$dt' AND branch = '$branchCode' AND category = 'Dealer' AND amount != 0 ";
                                $kka = mysqli_query($connect, $ka);
                                $kra = mysqli_fetch_array($kka);
                                $alkga = $kra['SUM(amount)'];

                               echo "<b class='text-white'> Sales count</b><br>";
                                echo "<b class='text-white'>".number_format($oth)." </b><br>";
                                echo "<hr>";
                                echo "<b class='text-white'>Total Kg </b><br>";
                                echo "<b class='text-white'> ".$alkg." Kg</b><br>";
                                echo "<hr>";
                                echo "<b class='text-white'> Amount</b><br>";
                                echo "<b class='text-white'> ".number_format($alkga)."</b>";
                                echo "<hr>";
                            }
                          
                       
                        
                        ?>
                    </div>
                        </div>
                        <div class='col-12 col-lg-3 '>
                            <div class="bg-primary p-1 rounded shadow">

                                <h6 align="center" class="text-white">Eatery</h6>
                        <?php 
                        $dt = date('Y-m-d', strtotime('now'));
                        
                            $Others = "SELECT DISTINCT(crbnumber) FROM crbs WHERE datee = '$dt' AND branch = '$branchCode' AND category = 'Eatery' AND amount != 0 ";
                            $goOther = mysqli_query($connect, $Others);
                            
                            if($goOther){
                                $oth = mysqli_num_rows($goOther);

                                $k = "SELECT SUM(tquant) FROM crbs  WHERE datee = '$dt' AND branch = '$branchCode' AND category = 'Eatery' AND amount != 0 ";
                                $kk = mysqli_query($connect, $k);
                                $kr = mysqli_fetch_array($kk);
                                $alkg = $kr['SUM(tquant)'];

                                 $ka = "SELECT SUM(amount) FROM crbs  WHERE datee = '$dt' AND branch = '$branchCode' AND category = 'Eatery' AND amount != 0 ";
                                $kka = mysqli_query($connect, $ka);
                                $kra = mysqli_fetch_array($kka);
                                $alkga = $kra['SUM(amount)'];

                               echo "<b class='text-white'> Sales count</b><br>";
                                echo "<b class='text-white'>".number_format($oth)." </b><br>";
                                echo "<hr>";
                                echo "<b class='text-white'>Total Kg </b><br>";
                                echo "<b class='text-white'> ".$alkg." Kg</b><br>";
                                echo "<hr>";
                                echo "<b class='text-white'> Amount</b><br>";
                                echo "<b class='text-white'> ".number_format($alkga)."</b>";
                                echo "<hr>";
                            }
                                
                        
                        
                        
                        ?>
                    </div>
                        </div>
                        <div class='col-12 col-lg-3 '>

                            <div class="bg-info p-1 rounded shadow" >

                                <h6 align="center" class="text-white">Domestic</h6>
                        <?php 
                        $dt = date('Y-m-d', strtotime('now'));
                        
                            $Others = "SELECT DISTINCT(crbnumber) FROM crbs WHERE datee = '$dt' AND branch = '$branchCode' AND category = 'Domestic' AND amount != 0 ";
                            $goOther = mysqli_query($connect, $Others);
                            
                            if($goOther){
                                $oth = mysqli_num_rows($goOther);

                                $k = "SELECT SUM(tquant) FROM crbs  WHERE datee = '$dt' AND branch = '$branchCode' AND category = 'Domestic' AND amount != 0 ";
                                $kk = mysqli_query($connect, $k);
                                $kr = mysqli_fetch_array($kk);
                                $alkg = $kr['SUM(tquant)'];

                                 $ka = "SELECT SUM(amount) FROM crbs  WHERE datee = '$dt' AND branch = '$branchCode' AND category = 'Domestic' AND amount != 0 ";
                                $kka = mysqli_query($connect, $ka);
                                $kra = mysqli_fetch_array($kka);
                                $alkga = $kra['SUM(amount)'];

                                echo "<b class='text-white'> Sales count</b><br>";
                                echo "<b class='text-white'>".number_format($oth)." </b><br>";
                                echo "<hr>";
                                echo "<b class='text-white'>Total Kg </b><br>";
                                echo "<b class='text-white'> ".$alkg." Kg</b><br>";
                                echo "<hr>";
                                echo "<b class='text-white'> Amount</b><br>";
                                echo "<b class='text-white'> ".number_format($alkga)."</b>";
                                echo "<hr>";
                            }
                        
                        ?>
                                
                            </div>
                        
                        </div>

                    
                    </div>
                    </div>
                       <hr>
                        <h5>Total Stats:</h5> <?php 
                        $dt = date('Y-m-d', strtotime('now'));
                        
                            $Others = "SELECT DISTINCT(crbnumber) FROM crbs WHERE datee = '$dt' AND branch = '$branchCode' AND amount != 0 ";
                            $goOther = mysqli_query($connect, $Others);
                            
                            if($goOther){
                                $oth = mysqli_num_rows($goOther);

                                $k = "SELECT SUM(tquant) FROM crbs  WHERE datee = '$dt' AND branch = '$branchCode' AND amount != 0 ";
                                $kk = mysqli_query($connect, $k);
                                $kr = mysqli_fetch_array($kk);
                                $alkg = $kr['SUM(tquant)'];

                                 $ka = "SELECT SUM(amount) FROM crbs  WHERE datee = '$dt' AND branch = '$branchCode' AND amount != 0 ";
                                $kka = mysqli_query($connect, $ka);
                                $kra = mysqli_fetch_array($kka);
                                $alkga = $kra['SUM(amount)'];

                                echo "<b class=''> Sales count</b><br>";
                                echo "<b class=''>".number_format($oth)." Sales today</b><br>";
                                echo "<hr>";
                                echo "<b class=''>Total Kg </b><br>";
                                echo "<b class=''> ".$alkg." Kg</b><br>";
                                echo "<hr>";
                                echo "<b class=''> Amount</b><br>";
                                echo "<b class=''> ".number_format($alkga)." NGN</b>";
                                echo "<hr>";
                            }
                        
                        ?>

                       <!--  <table class='table table-striped table-light' >
                        <thead>
                        <tr> 
                        <th scope='col'>CRB#</th>
                        <th scope='col'>Category</th>
                        <th scope='col'>Kg</th>
                    
                        <th scope='col'>Amount</th>
                        </tr>
                        </thead> 
                        <tbody>
            
                        <?php  $createStation->crbReport(); ?>

                        </tbody>
                            </table> -->

                    
                            
            
                                </div>
                                </div>