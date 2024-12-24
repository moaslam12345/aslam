<?php
include("admin/conf/config.php");
/* Persist System Settings On Brand */
$ret = "SELECT * FROM `iB_SystemSettings` ";
$stmt = $mysqli->prepare($ret);
$stmt->execute(); //ok
$res = $stmt->get_result();
while ($sys = $res->fetch_object()) {
?>
    <!DOCTYPE html>
    <html lang="en">
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title><?php echo $sys->sys_name; ?> - <?php echo $sys->sys_tagline; ?></title>
        <link href="dist/css/robust.css" rel="stylesheet">
    </head>

    <body>

        <nav class="navbar navbar-lg navbar-expand-lg navbar-transparant navbar-dark navbar-absolute w-100">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" target="_blank" href="admin/pages_index.php">Admin Portal</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" target="_blank" href="staff/pages_staff_index.php">Staff Portal</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" target="_blank" href="client/pages_client_index.php">Client Portal</a>
                        </li>
                    </ul>
                    <a class="btn btn-success btn-lg" href="client/pages_client_signup.php" target="_blank">Join Us</a>
                </div>
            </div>
        </nav>


       <div class="intro py-5 py-lg-9 position-relative text-white">
    <div class="bg-overlay-gray">
        <img src="DALL·E 2024-12-22 23.21.03 - A sleek and modern background image for an internet banking system website. The design should feature abstract digital elements such as circuits, grid.webp" class="img-fluid img-cover" alt="Background"/>
    </div>
    <div class="intro-content py-6 text-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6 mx-auto text-center">
                    <!-- Updated Welcome message -->
                    <h1 class="my-3 display-4 d-none d-lg-inline-block" style="color: red;">
                        🏦𝕎𝕖𝕝𝕔𝕠𝕞𝕖 𝕥𝕠 𝕀𝕟𝕥𝕖𝕣𝕟𝕖𝕥 𝔹𝕒𝕟𝕜𝕚𝕟𝕘!🌐                    </h1>
                    <p class="lead mb-3">
                        Experience <?php echo strtolower($sys->sys_tagline); ?> like never before. 🌟We empower your journey with cutting-edge solutions.🌟
                    </p>
                    <!-- Changed text color to white -->
                    <p class="mb-4 text-white">
                                            </p>
                    <a class="btn btn-success btn-lg mr-lg-2 my-1" target="_blank" href="client/pages_client_signup.php" role="button">
                        🚀 Get Started Today 🚀                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

      <script src="dist/js/bundle.js"></script>
    </body>

    </html>
<?php
} ?>
