<?php
  echo "    <!-- HEADER -->
            <link rel=\"stylesheet\" href=\"/assets/css/style.css\">
		    <!-- Bootstrap CSS -->
		    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
            <!-- Font Awesome CSS -->
            <link href=\"https://use.fontawesome.com/releases/v5.0.4/css/all.css\" rel=\"stylesheet\">

        	<header id=\"main-header\">
        		<div class=\"container-fluid  fixed-top\">
        			<div class=\"row\">
                        <span id=\"ham\" class=\"open-slide col-2 col-xs-6 col-sm-6 text-left\">
                            <a href=\"#\" onclick=\"openSlideMenu()\">
                                <svg id=\"ham-button\" width=\"30\" height=\"30\">
                                    <path d=\"M0,5 30,5\" stroke=\"#670A0A\" stroke-width=\"5\"/>
                                    <path d=\"M0,14 30,14\" stroke=\"#670A0A\" stroke-width=\"5\"/>
                                    <path d=\"M0,23 30,23\" stroke=\"#670A0A\" stroke-width=\"5\"/>
                                </svg>
                            </a>
                        </span>

                        <div id=\"navbar-title\" class=\" text-right col-10 col-xs-6 col-sm-6 col-md-3 col-lg-4\">
                            <a href=\"/index.php\">SHANNON BIRCH</a>
                        </div>

                        <div class=\"col-md-9 col-lg-8 text-right\">
                            <nav id=\"navbar\">
                                <ul>
                                    <li class=\"nav-item\"><a href=\"/index.php\">Home</a></li>
                                    <li class=\"nav-item dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">
                                            Resume
                                            <span class=\"caret\"></span>
                                        </a>

                                        <ul  class=\"dropdown-menu\" role=\"menu\" style=\" width:250px; \">
                                            <li class=\"product-dropdown\"><a href=\"/resume.pdf\">PDF</a><div class=\"dropdown-divider\"></div></li>
                                            <li class=\"product-dropdown\"><a href=\"/resume.docx\">DocX</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"nav-item\"><a href=\"/projects.php\">Projects</a></li>
                                    <li class=\"nav-item\"><a href=\"/about.php\">About</a></li>
                                </ul>
                            </nav>
                        </div>

                        <div id=\"side-menu\" class=\"side-nav\">
                            <a href=\"#\" class=\"btn-close\" onclick=\"closeSlideMenu()\">&times;</a>
                            <a href=\"/index.php\">Home</a>
                            <a href=\"/products.php\">All Products</a>
                            <a href=\"/about.php\">About</a>
                            <a href=\"/stores.php\">Our Stores</a>
                            <a href=\"/wholesale.php\">Wholesale</a>
                        </div>
        			</div>
        		</div>

            <!-- Your custom styles (optional) -->
            <!-- SCRIPTS -->
            <script src=\"https://code.jquery.com/jquery-3.1.0.min.js\"></script>
            <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js\"></script>
            <script src=\"/assets/javascript/scripts.js\"></script>
            <link href=\"/assets/css/style.css\" rel=\"stylesheet\">
            <link href=\"/assets/css/fontawesome-all.css\" rel=\"stylesheet\">


        	</header>";



 ?>
