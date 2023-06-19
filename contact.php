<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Home - Sebastian Płoszaj - .NET Developer </title>
        <link rel="icon" type="image/x-icon" href="assets/logo.ico" />

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />

        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex justify-content-center fs-2 gap-4">
                            <a class="navbar-brand" target="_blank" href="https://www.linkedin.com/in/sebastian-p%C5%82oszaj-00570727b/"><span class="fw-bolder text-primary text-gradient">Linked</span><span class="text-gradient"><i class="bi bi-linkedin"></i></span></a>
                            <a class="navbar-brand" target="_blank" href="https://github.com/sachedcrew"><span class="fw-bolder text-primary text-gradient">Github</span><span class="text-gradient"><i class="bi bi-github"></i></span></a>
                            
                            
                        </div>
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link text-gradient" href="index.html">Home</a></li>
                            <li class="nav-item"><a class="nav-link text-gradient" href="resume.html">About me</a></li>
                            <li class="nav-item"><a class="nav-link text-gradient" href="projects.html">Projects</a></li>
                            <li class="nav-item"><a class="nav-link text-gradient" href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
<?php
                          if (count($_POST))
                          {
	                          $email = 'sachedcrew@gmail.com';	
	                          $subject = 'Kontakt - Portfolio';
	                          $message = 'Dziękujemy za wysłanie formularza.';	
	                          $error = 'Wystąpił błąd podczas wysyłania formularza.';	
	                          $charset = 'iso-8859-2';

	                          $head =
	                          	"MIME-Version: 1.0\r\n" .
	                          	"Content-Type: text/plain; charset=$charset\r\n" .
	                          	"Content-Transfer-Encoding: 8bit";
	                          $body = '';
	                          foreach ($_POST as $name => $value)
	                          {
	                          	if (is_array($value))
	                          	{
	                          		for ($i = 0; $i < count($value); $i++)
	                                                    		{
	                          			$body .= "$name=" . (get_magic_quotes_gpc() ? stripslashes($value[$i]) : $value[$i]) . "\r\n";
	                          		}
	                          	}
	                          	else $body .= "$name=" . (get_magic_quotes_gpc() ? stripslashes($value) : $value) . "\r\n";
                          	}
	                          echo mail($email, "=?$charset?B?" . base64_encode($subject) . "?=", $body, $head) ? $message : $error;
                          }
                          else
                          {
                          ?>
                          <form action="contact.php" method="post">
                          <table>
                          <tr><td>Temat:</td><td> <input type="text" name="temat"></td></tr>
                          <tr><td>Email:</td><td> <input type="text" name="info1"></td></tr>
                          <tr><td>Napisz:</td><td> <textarea name="info"></textarea></td>
                          <td><input type="submit" value="Submit"></td></tr>
                          </table>
                          </form>
                          <?php
                          }
                          ?>
                    </main>
        <!-- Footer-->
        <footer class="bg-white py-4">
            <div class="container px-5">
                <div class="text-center">
                    <div class="col-auto"><div class="small m-0 text-gradient">Copyright &copy; Sebastian Płoszaj 2023</div></div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>

                        