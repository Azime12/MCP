<?php
session_start();

if ( $_SESSION[ "sidx" ] == "" || $_SESSION[ "sidx" ] == NULL ) {
	header( 'Location:studentlogin' );
}

$userid = $_SESSION[ "sidx" ];
$userfname = $_SESSION[ "fname" ];
$userlname = $_SESSION[ "lname" ];
?>

<?php include('studenthead.php'); ?>
<link rel="stylesheet" type="text/css" href="css/book.css">
<div class="container">
	<body>
        
        <hr>
        <!-- content bar -->
        <div class="content2">
            <!-- grade 11 -->
            <div class="Grade_12">
                <div class="text_books">
				 <a href="pdfs/bio 12.pdf">
                    <img src="images/banners/g_12bio.PNG" alt=" grade 12 biology text" height="250px" width="300px">
                    <div class="download_text">
                       download</a>
                    </div>

                </div>
                <div class="text_books">
				<a href="pdfs/chemo 12.pdf">
                    <img src="images/banners/g_12che.PNG" alt=" grade 12 biology text" height="250px" width="300px">
                    <div class="download_text">
                        download</a>
                    </div>

                </div>

                <div class="text_books">
				<a href="pdfs/civ 12.pdf">
                    <img src="images/banners/g_12civc.PNG" alt=" grade 12 biology text" height="250px" width="300px">
                    <div class="download_text">
                        download</a>
                    </div>

                </div>
                <div class="text_books">
				<a href="pdfs/eco 12.pdf">
                    <img src="images/banners/g_12echo.PNG" alt=" grade 12 biology text" height="250px" width="300px">
                    <div class="download_text">
                        download</a>
                    </div>

                </div>

                <div class="text_books">
				<a href="pdfs/GM 12.pdf">
                    <img src="images/banners/g_12Gb.PNG" alt=" grade 12 biology text" height="250px" width="300px">
                    <div class="download_text">
                        download</a>
                    </div>

                </div>
                <div class="text_books">
				<a href="pdfs/math 12.pdf">
                    <img src="images/banners/g_12math.PNG" alt=" grade 12 biology text" height="250px" width="300px">
                    <div class="download_text">
                        download</a>
                    </div>

                </div>

                <div class="text_books">
				<a href="pdfs/phy 12.pdf">
                    <img src="images/banners/g_12phy.PNG" alt=" grade 12 biology text" height="250px" width="300px">
                    <div class="download_text">
                        download</a>
                    </div>

                </div>
                <div class="text_books">
				<a href="pdfs/g">
                    <img src="images/banners/g_12goe.PNG" alt=" grade 12 biology text" height="250px" width="300px">
                    <div class="download_text">
                        download</a>
                    </div>

                </div>


            </div>

            <div class="Grade_11">
                <div class="text_books">
				<a href="pdfs/bio 11.pdf">
                    <img src="images/banners/g_11bio.PNG" alt=" grade 12 biology text" height="250px" width="300px">
                    <div class="download_text">
                        download</a>
                    </div>

                </div>
                <div class="text_books">
				<a href="pdfs/chemo 11.pdf">
                    <img src="images/banners/g_11che.PNG" alt=" grade 12 biology text" height="250px" width="300px">
                    <div class="download_text">
                        download</a>
                    </div>

                </div>

                <div class="text_books">
				<a href="pdfs/civ 11.pdf">
                    <img src="images/banners/g_11civic.PNG" alt=" grade 12 biology text" height="250px" width="300px">
                    <div class="download_text">
                        download</a>
                    </div>

                </div>
                <div class="text_books">
				<a href="pdfs/eco 11.pdf">
                    <img src="images/banners/g_11echo.PNG" alt=" grade 12 biology text" height="250px" width="300px">
                    <div class="download_text">
                        download</a>
                    </div>

                </div>

                <div class="text_books">
				<a href="pdfs/GM 11.pdf">
                    <img src="images/banners/g_11Gb.PNG" alt=" grade 12 biology text" height="250px" width="300px">
                    <div class="download_text">
                        download</a>
                    </div>

                </div>
                <div class="text_books">
				<a href="pdfs/math 11.pdf">
                    <img src="images/banners/g_11Math.PNG" alt=" grade 12 biology text" height="250px" width="300px">
                    <div class="download_text">
                        download</a>
                    </div>

                </div>
                <div class="text_books">
				<a href="pdfs/geo 11.pdf">
                    <img src="images/banners/g_11goe.PNG" alt=" grade 12 biology text" height="250px" width="300px">
                    <div class="download_text">
                        download</a>
                    </div>

                </div>
                <div class="text_books">
				<a href="pdfs/his 11.pdf">
                    <img src="images/banners/g_11His.PNG" alt=" grade 12 biology text" height="250px" width="300px">
                    <div class="download_text">
                        download</a>
                    </div>

                </div>


            </div>




        </div>
        
        </div>
    

    

</body>
	</div>
<?php include('allfoot.php'); ?>