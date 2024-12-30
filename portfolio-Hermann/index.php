<?php
require("functions" . DIRECTORY_SEPARATOR . "function.php");
$success = null;
$error   = null;

$name    = (isset($_POST["name"])) ? ($_POST["name"]) : null;
$email   = (isset($_POST["email"])) ? ($_POST["email"]) : null;
$phone   = (isset($_POST["phone"])) ? ($_POST["phone"]) : null;
$message = (isset($_POST["message"])) ? ($_POST["message"]) : null;

// ====== Formatage du message ======== 
$destinataire = "bahii02.example@gmail.com";
$subjet       = (isset($_POST["name"])) ? "Vous avez reçu un message de {$_POST["name"]}" : "";
$mailHeaders  = "Nom: " . $name .
    "\r\n Email: " . $email .
    "\r\n Téléphone: " . $phone .
    "\r\n Message: " . $message . "\r\n";
// ====== Formatage du message ======== 

if (isset($_POST["soumettre"])) {
    if (!empty($name) && !empty($email) && !empty($phone) && !empty($message)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            if ((addContact($name, $email, $phone, $message) === true) && mail($destinataire, $subjet, $mailHeaders)) {
                $success = "Message envoyé avec succès !";
                $name = null;
                $email = null;
                $phone = null;
                $message = null;
            } else {
                $error = "Echec, le message n'a pas été envoyé !";
            }
        } else {
            $error = "Adresse email invalide !";
        }
    } else {
        $error = "Veuillez remplir tous les champs !";
    }
}

$title = "";
require("element/header.php")
    ?>
<!-- Portfolio Section-->
<section class="page-section portfolio" id="portfolio">
    <div class="container">
        <!-- Portfolio Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Portfolio Grid Items-->
        <div class="row justify-content-center">
            <!-- Portfolio Item 1-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="assets/img/service/s-7.JPG" alt="peinture" />
                </div>
            </div>
            <!-- Portfolio Item 2-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="assets/img/service/s-2.JPG" alt="..." />
                </div>
            </div>
            <!-- Portfolio Item 3-->
            <div class="col-md-6 col-lg-4 mb-5">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="assets/img/service/s-3.JPG" alt="..." />
                </div>
            </div>
            <!-- Portfolio Item 4-->
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="assets/img/service/s-4.JPG" alt="..." />
                </div>
            </div>
            <!-- Portfolio Item 5-->
            <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="assets/img/service/s-5.JPG" alt="..." />
                </div>
            </div>
            <!-- Portfolio Item 6-->
            <div class="col-md-6 col-lg-4">
                <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                    <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                        <div class="portfolio-item-caption-content text-center text-white">
                            <i class="fas fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img class="img-fluid" src="assets/img/service/s-6.JPG" alt="..." />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section-->
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">A propos</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
            <div class="col-lg-4 ms-auto">
                <p class="lead">Bienvenue sur mon portfolio artistique !
                    <br>

                    Je m'appelle NIAGNE ESSOH HERMANN et je suis un peintre décorateur passionné
                    basé dans Abidjan. Je suis ravi de partager avec vous mon parcours artistique et
                    ma vision créative à travers ce portfolio. Depuis mon plus jeune âge, j'ai été
                    attiré par les arts visuels. J'ai toujours trouvé de la joie et de l'inspiration
                    dans l'expression artistique et la création visuelle. Au fil des années, j'ai
                    développé mes compétences et mon expertise dans le domaine de la peinture et de
                    la décoration.
                </p>
            </div>
            <div class="col-lg-4 me-auto">
                <p class="lead">
                    Explorez ma galerie pour découvrir une sélection de mes meilleures œuvres.
                    J'espère que mon travail vous inspirera et vous permettra de vous faire une idée
                    de mon approche artistique. Si vous avez des questions, des demandes de
                    collaboration ou si vous souhaitez discuter d'un projet artistique, n'hésitez
                    pas à me contacter. Je serais ravi d'échanger avec vous. Merci de visiter mon
                    portfolio et de prendre le temps de découvrir mon univers artistique. J'espère
                    que vous apprécierez votre visite !
                </p>
            </div>
        </div>
        <!-- About Section Button-->
        <div class="text-center mt-4">
            <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/theme/freelancer/">
                <i class="fas fa-download me-2"></i>
                Free Download!
            </a>
        </div>
    </div>
</section>
<!-- Contact Section-->
<section class="page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Contact Section Form-->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <?php if ($error): ?>
                    <div class="alert alert-danger">
                        <?= $error ?>
                    </div>
                <?php elseif ($success): ?>
                    <div class="alert alert-success">
                        <?= $success ?>
                    </div>
                <?php endif ?>
                <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="post">
                    <!-- Name input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="name" value="<?= $name ?>" name="name" type="text"
                            placeholder="Enter your name..." data-sb-validations="required" />
                        <label for="name">Nom</label>
                        <div class="invalid-feedback" data-sb-feedback="name:required">Nom requis</div>
                    </div>
                    <!-- Email address input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="email" value="<?= $email ?>" name="email" type="email"
                            placeholder="name@example.com" data-sb-validations="required,email" />
                        <label for="email">Adresse e-mail</label>
                        <div class="invalid-feedback" data-sb-feedback="email:required">Email requis</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email invalide</div>
                    </div>
                    <!-- Phone number input-->
                    <div class="form-floating mb-3">
                        <input class="form-control" id="phone" value="<?= $phone ?>" name="phone" type="tel"
                            placeholder="(123) 456-7890" data-sb-validations="required" />
                        <label for="phone">Numéro de téléphone</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">Numéro de téléphone requis
                        </div>
                    </div>
                    <!-- Message input-->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" name="message" type="text"
                            placeholder="Enter your message here..." style="height: 10rem"
                            data-sb-validations="required"><?= $message ?></textarea>
                        <label for="message">Message</label>
                        <div class="invalid-feedback" data-sb-feedback="message:required">Message requis</div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center mb-3">
                            <div class="fw-bolder">Formulaire soumis avec success !</div>
                            To activate this form, sign up at
                            <br />
                            <a
                                href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage">
                        <div class="text-center text-danger mb-3">Echec d'envoi</div>
                    </div>
                    <!-- Submit Button id="submitButton"-->
                    <button class="btn btn-primary btn-xl" id="" type="submit" href="#contact"
                        name="soumettre">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php require("element/footer.php") ?>