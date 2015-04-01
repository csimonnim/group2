<div class="menu"></div>
<!--menu--><div style="float:left; border:0px solid red; width:1050px; height:80px; margin-top:2px">

               <div id="content">
				<div id="wrapper">
				<div id="navMenu">
					<ul>
						<li><a href="index.php">HOME</a>
                        </li> <!-- end main Li -->
                        </ul> <!-- end main UL -->
                        </div> <!-- end navMenu -->
                        
              <div id="navMenu">
                   <ul>
                    <li><a href="#">LAPTOP</a>
                      <ul>
                      <li><a href="pages/delllaptop.php">DellLaptop</a></li>
                      <li><a href="pages/sonylaptop.php">SonyLaptop</a></li>
                      </ul> <!-- end inner UL -->
                      </li> <!-- end main Li -->
                      </ul> <!-- end main UL -->
                      </div> <!-- end navMenu -->
                      
                <div id="navMenu">
                   <ul>
                   <li><a href="#">DESKTOP</a>
                   	<ul>
						<li><a href="pages/asusdesktop.php">AsusDesktop</a></li>
						<li><a href="pages/samsungdesktop.php">SamsDesktop</a></li>
						</ul> <!-- end inner UL -->
                        </li> <!-- end main Li -->
                        </ul> <!-- end main UL -->
                    </div> <!-- end navMenu -->
              <div id="navMenu">
              	 <ul>
                     <li><a href="#">CONTACT US</a>
					 <ul>
						<li><a href="pages/buy-computer.php">My Group 2</a></li>
                     	</ul> <!-- end inner UL -->
                        </li> <!-- end main Li -->
                        </ul> <!-- end main UL -->
                        </div> <!-- end navMenu -->
                        </div> <!-- end wrapper -->
                    </div>
             &nbsp; &nbsp;&nbsp;&nbsp;Search :&nbsp;&nbsp;<input id="txtsearch" type="text" name="txtSearch" value="" placeholder="i'm fide all"  style="margin-top:10px"/> &nbsp; &nbsp;
            
        <?php
$khcd_day = array("Sunday"=>"អាទិត្យ​","Monday"=>"ច័ន","Tuesday"=>"អង្គារ","Wednesday"=>"ពុធ","Thursday"=>"ព្រហស្បតិ៍","Friday"=>"សុក្រ","Saturday"=>"សៅរ៍");
$khcd_date = array("01"=>"០១","02"=>"០២","03"=>"០៣","04"=>"០៤","05"=>"០៥","06"=>"០៦","07"=>"០៧","08"=>"០៨","09"=>"០៩","10"=>"១០","11"=>"១១","12"=>"១២","13"=>"១៣","14"=>"១៤","15"=>"១៥","16"=>"១៦","17"=>"១៧","18"=>"១៨","19"=>"១៩","20"=>"២០","21"=>"២១","22"=>"២២","23"=>"២៣","24"=>"២៤","25"=>"២៥","26"=>"២៦","27"=>"២៧","28"=>"២៨","29"=>"២៩","30"=>"៣០","31"=>"៣១");
$khcd_month = array("01"=>"មករា","02"=>"គុម្ភះ","03"=>"មិនា","04"=>"មេសា","05"=>"ឧសភា","06"=>"មិថុនា","07"=>"កក្កដា","08"=>"សីហា","09"=>"កញ្ញា","10"=>"តុលា","11"=>"វិច្ឆិកា","12"=>"ធ្នូ");
$khcd_year = array("2014"=>"២០១៤","2015"=>"២០១៥","2016"=>"២០១៦","2017"=>"២០១៧","2018"=>"២០១៨","2019"=>"២០១៩","2020"=>"២០២០","2021"=>"២០២១","2022"=>"២០២២","2023"=>"២០២៣");
echo  "ថ្ងៃ" .$khcd_day[date("l")]. "ទី" .$khcd_date[date("d")]. "ខែ" .$khcd_month[date("m")]. "​​ឆ្នាំ" .$khcd_year[date("Y")];
echo "<br/>";
echo $year;
$spyear = chunk_split($year,1,",");
echo "<br/>";
$khyear = array("0"=>"០","1"=>"១","2"=>"២","3"=>"៣","4"=>"៤","5"=>"៥","6"=>"៦","7"=>"៧","8"=>"៨","9"=>"៩");
echo $khyear[$spyear[0]].$khyear[$spyear[1]];
?>
     
                
<!--end menu--></div>